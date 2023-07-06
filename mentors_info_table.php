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
$sql = "SELECT * FROM mentors_info";
$result = mysqli_query($con, $sql);
include 'header.php';
?>
<center>
  <h1 style="color: darkblue; font-family: tahoma; font-weight: bold; font-size: 40px;">Mentors Information Table</h1>
  <table border="1" cellspacing="0" cellpadding="10" >
    <tr bgcolor="orange" style="border-color: white; color: white;">
      <th>Mentor ID</th>
      <th>Firf Name</th>
      <th>Last Name</th>
      <th>Phone</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Diploma / Degree</th>
      <th>National ID</th>
      <th>CV / Resume</th>
      <th>Profile Photo ID</th>
      <th>Education Level</th>
      <th>Field of Interest</th>
      <th>Location</th>
      <th>Mentor's Bio</th>
      <th>Mentor's Reg Date</th>
    </tr>
    <?php
    if(mysqli_num_rows($result))
    {
      while ($rows = mysqli_fetch_assoc($result))
      {
    ?>
    <tr bgcolor="white" style="border-color: orange; border: 1px">
      <td><?php echo $rows['mentor_info_id']; ?> </td>
      <td><?php echo $rows['first_name']; ?> </td>
      <td><?php echo $rows['last_name']; ?> </td>
      <td><?php echo $rows['phone']; ?> </td>
      <td><?php echo $rows['age']; ?> </td>
      <td><?php echo $rows['gender']; ?> </td>
      <td><?php echo $rows['diploma_degree_file']; ?> </td>
      <td><?php echo $rows['national_id_file']; ?> </td>
      <td><?php echo $rows['cv_resume_file']; ?> </td>
      <td><?php echo $rows['profile_photo_file']; ?> </td>
      <td><?php echo $rows['education_level']; ?> </td>
      <td><?php echo $rows['field_of_interest']; ?> </td>
      <td><?php echo $rows['location']; ?> </td>
      <td><?php echo $rows['bio']; ?> </td>
      <td><?php echo $rows['enrollment_date']; ?> </td>
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
