<html>
<head>
<style>
body {
	max-width:1200px;
	margin:auto;
	
}
.tableh{
	text-align:left;
}
</style>
</head>
<body>
<?php
include_once("function.php");
$fetchdoctors=new DB_conection();
 
 ?>
 <table width="100%"  border="0" >
  <tr>
    <th width="12%" height="42" scope="col" class="tableh" >S no.</th>
    <th width="20%" scope="col" class="tableh">Name</th>
    <th width="14%" scope="col" class="tableh">Hospital Name</th>
    <th width="11%" scope="col" class="tableh">Qualification</th>
    <th width="12%" scope="col" class="tableh">Location</th>
    <th width="13%" scope="col" class="tableh">Last Updated</th>
    <th width="15%" scope="col" class="tableh">Note</th>
    
  <?php
  $sql=$fetchdoctors->fetchdoctors();
  $cnt=1;
  while($row=mysql_fetch_array($sql))
  {
  ?>
  <tr>
      <td height="29"><?php echo $cnt;?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['hospital_name'];?></td>
    <td><?php echo $row['qualification'];?></td>
    <td><?php echo $row['location'];?></td>
    <td><?php echo $row['lastupdated'];?></td>
    <td><?php echo $row['note'];?></td>
   
 
  </tr>
  <?php $cnt=$cnt+1;} ?>
</table>
</body>
</html>
