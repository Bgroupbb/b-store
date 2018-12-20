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
$conn = mysqli_connect(
'localhost',
'kdm',
'741852',
'project');

$sql = "SELECT *FROM  아동교육";
$result = mysqli_query($conn, $sql);
echo "<table border='1'<tr><th>상가업소번호</th><th>상호명</th><th>상권업종분류명</th><th>도로명주소</th>";
$n=1;

while($row= mysqli_fetch_array($result))
{ 
echo "<tr>";
echo "<td class='상가업소번호'>".$row[0]."</td>";
echo "<td class='상호명'>".$row[1]."</td>";
echo "<td class='상권업종분류명'>".$row[2]."</td>";
echo "<td class='도로명주소'>".$row[3]."</td>";
echo "</tr>";
$n++;
}
mysqli_close($con);
 ?>

</body>
</html>
