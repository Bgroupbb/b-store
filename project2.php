<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<style>
table{border:1px solid gray; border-collapse:collapse;}
td{border:1px solid gray;padding:5px;}
</style>
</head>
<body>

<?php    
print("connecting database");
$con = mysqli_connect("localhost","kdm","741852","project");
if (!$con)
	    {
		    	die('Could not connect: ' . mysqli_connect_error());
				    }
$sql = "SELECT*FROM 유아교육";
$result = mysqli_query($con, $sql);
echo "<table border='1'<tr><th>상가업소번호</th><th>상호명</th><th>상권업종분류명</th><th>도로명주소</th><th>경도</th><th>위도</th></tr?>";
$n=1;

while($row= mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "</tr>";
$n++;
}
mysqli_close($con);
?>

</body>
</html>

