create procedure ia_avg IS
cursor c_iaavg IS
select greatest(etm_ia1 , etm_ia2) AS A,greatest(etm_ia2,etm_ia3) AS B,GREATEST(etm_ia3,etm_ia1) AS C from acad_details WHERE etm_ia_avg IS NULL for UPDATE;
c_a integer;
c_b integer;
c_c integer;
c_sum integer;
c_avg integer;

BEGIN
	OPEN c_iaavg;
    LOOP
    	FETCH c_iaavg INTO c_a,c_b,c_c;
        exit when c_iaavg%NOTFOUND;
        IF(c_a != c_b) THEN 
        c_sum := c_a+c_b;
        ELSE
        c_sum := c_a+c_c;
        END IF;
        c_avg := c_sum/2;
        UPDATE acad_details SET etm_ia_avg=c_avg WHERE CURRENT OF c_iaavg ;
        END LOOP;
        CLOSE i_aavg;
        END;





DELIMITER $
create trigger etm_avg before insert on acad_details for each row
BEGIN
DECLARE  c_a,c_b,c_c,c_sum,c_avg integer;
c_a = GREATEST(etm_ia1,etm_ia2);
c_b = GREATEST(etm_ia2,etm_ia3);
c_c = GREATEST(etm_ia3,etm_ia1);

IF(c_a!=c_b) THEN 
c_sum = c_a+c_b;
ELSE
c_sum = c_a+c_c; 
END IF;
c_avg = c_sum/2;
set new.etm_ia_avg = c_avg;
END $
