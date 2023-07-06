<?php
echo "<title>Subscribers</title>";
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
$sql = "SELECT * FROM subscribers";
$result = mysqli_query($con, $sql);
include 'header.php';
?>
<center>
  <h1 style="color: darkblue; font-family: tahoma; font-weight: bold; font-size: 40px;">Subscribers Table</h1>
  <table border="1" cellspacing="0" cellpadding="10" >
    <tr bgcolor="orange" style="border-color: white; color: white;">
      <th>Subscriber's ID</th>
      <th>Subscriber's Email</th>
      <th>Subscriber's Date of Subcription</th>
    </tr>
    <?php
    if(mysqli_num_rows($result))
    {
      while ($rows = mysqli_fetch_assoc($result))
      {
    ?>
    <tr bgcolor="white" style="border-color: orange; border: 1px">
      <td><?php echo $rows['subscriber_id']; ?> </td>
      <td><?php echo $rows['email']; ?> </td>
      <td><?php echo $rows['date_of_subscription']; ?> </td>
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
      <button type="submit" class="btn" style="color: blue; background-color: orange; border-radius: 5px;">Back</button>
    </form>
