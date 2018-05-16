<?php



session_start();


$con = mysqli_connect('localhost','root','12345','clubs') or die ("Database Connection Failed");


$query = "select * from signup";


$result = mysqli_query($con, $query) or die("error querying".mysqli_error($con));

?>
<table border="1px">
<tr>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>INTEREST</th>
<th>DURATION</th>
<th>DAYS/WEEK</th>
<th>DOB</th>
<th>CONTACT</th>
<th>GENDER</th>
<th>EMAIL-ID</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))

{?>
<tr>
<td> <?php echo $row['first'];?></td>
<td> <?php echo $row['last'];?></td>
<td> <?php echo $row['intrest'];?></td>
<td> <?php echo $row['duration'];?></td>
<td> <?php echo $row['days'];?></td>
<td> <?php echo $row['DOB'];?></td>
<td> <?php echo $row['contact'];?></td>
<td> <?php echo $row['gender'];?></td>
<td> <?php echo $row['mail'];?></td>
</tr>
<?php } ?>
</table>

