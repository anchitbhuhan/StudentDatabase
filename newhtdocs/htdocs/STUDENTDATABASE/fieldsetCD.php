<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		fieldset{
			width: 50%;
			margin: 0;
			height: calc(100vh - 80px);
			background-color:#a7c4e8;
			border: none;
			padding: 0;
		}
		h1{
			margin:0;
			text-align: center;
			font-family: sans-serif;
			border-bottom: 4px solid #08abd8;
			background-color: #003366;
			color: white;
			padding-top: 2px;
	}

		.personal{
			margin-left: 40px;
			font-size: 22px;
			margin-top: 8px;
			font-family: sans-serif;
		}
		table,th,tr,td{
			border: 1px solid black;
			border-collapse: collapse;
			padding: 8px;
			text-align: center;
			font-family:sans-serif;
			margin-left: 5em;
			margin-top: 3em;
		}
		th{
			background-color: #003366;
			color: white;
		}
	</style>
</head>
<body>
<fieldset>
	<h1>COURSE DETAILS</h1><br>

<p class="personal"><b>USN:</b><?php echo " 1DT16IS019" ?></p>
<p class="personal"><b>NAME:</b><?php echo " Anchit Bhushan" ?></p>
<table>
	<tr>
		<th>COURSE</th>
		<th>SUBJECT CODE</th>
		<th>SUBJECT NAME</th>
		<th>FACULTY NAME</th>
	</tr>
	<tr>
		<td>B.E</td>
		<td>15CSL55</td>
		<td>A.I</td>
		<td>K.Mohanchandra</td>
	</tr>
</table>

</fieldset>
</body>
</html>
