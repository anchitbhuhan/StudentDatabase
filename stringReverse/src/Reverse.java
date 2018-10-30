import java.util.Scanner;

public class Reverse {
    private void ReverseStr(String str1){
        char a[]=str1.toCharArray();
        char rev[] = new char[str1.length()];
        for(int i=a.length-1;i>=0;i--){
            for(int j=0;j<rev.length;j++){
                rev[j]=a[i];
            }
        }
        String reverse = new String(rev);
        System.out.println(reverse);
    }
    public static void main(String[] args){
        System.out.println("enter the string to be reversed");
        Scanner scan =new Scanner(System.in);
        String str1=scan.nextLine();
        Reverse rev = new Reverse();
        rev.ReverseStr(str1);
    }
}
