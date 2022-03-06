<html>
<body>
<table>
<tr><th>student_id</th>
<th>first_name</th>
<th>last_name</th>
<th>ph_number</th>
<th>course</th>
<th>semestre</th>
</tr>
<?php
 include('connection.php');
 $sql="SELECT * FROM tbl_student";
 $result=mysqli_query($con,$sql);
 if($result)
{
   while($row=mysqli_fetch_row($result))
 {
?>
  <tr><td><?php echo $row[0];?></td>
      <td><?php echo $row[1];?></td>
      <td><?php echo $row[2];?></td>
      <td><?php echo $row[3];?></td>
      <td><?php echo $row[4];?></td>
      <td><?php echo $row[5];?></td>
      </tr>
<?php
 }
}
?>
</table>
</body>
</html>