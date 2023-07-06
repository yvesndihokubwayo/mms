<?php
echo "<title>Mentees</title>";
#creating connection: server, user, password and database
$s = "localhost";
$u = "root";
$p = "";
$db = "menteementorspace";
$con = mysqli_connect($s, $u, $p, $db);
#testing connection
if(!$con)
{
  die("<h1 style='color: red; font-family: agency fb; font-weight: bold'>The connection denied"."</h1>");
}
$sql = "SELECT * FROM mentees";
$result = mysqli_query($con, $sql);
include 'header.php';
?>
<center>
  <h1 style="color: darkblue; font-family: tahoma; font-weight: bold; font-size: 40px;">Mentees Account Info Table</h1>
  <table border="1" cellspacing="0" cellpadding="10" >
    <tr bgcolor="orange" style="border-color: white; color: white;">
      <th>Mentee ID</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Mentee's Reg Date</th>
    </tr>
    <?php
    if(mysqli_num_rows($result))
    {
      while ($rows = mysqli_fetch_assoc($result))
      {
    ?>
    <tr bgcolor="white" style="border-color: orange; border: 1px">
      <td><?php echo $rows['mentee_id']; ?> </td>
      <td><?php echo $rows['name']; ?> </td>
      <td><?php echo $rows['email']; ?> </td>
      <td><?php echo $rows['password']; ?> </td>
      <td><?php echo $rows['mentee_reg_date']; ?> </td>
    </tr>
    <?php
      }
    }
    else
    {
      echo"<h1 style='color: orange; font-family: agency fb; font-weight: bold'>Sorry, your table is empty"."</h1>";
    }
    ?>
  </table>
</center>
<br>
  <form action="index.php" method="POST">
      <button type="submit" class="btn" style="color: blue; background-color: orange; border-radius: 5px; font-size: 24px;">Back</button>
    </form>
