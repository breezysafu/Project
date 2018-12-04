<?php

session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else
{
    header('location:../login.php');
}

?>
<?php
include('header.php');
include('titlehead.php');
?>

<form methods="post" action="addstudent.php" enctype="multipart/form-data">
    <table align="center" border="1" style="width:70%; margin-top:40px;">

        <tr>
            <th>Roll No</th>
            <td><input type="text" name="rollno" placeholder="Enter Rollno" required></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" name="name" placeholder="Enter Full Name" required></td>

        </tr>
        <tr>
            <th>City</th>
            <td><input type="text" name="city" placeholder="Enter City" required></td>

        </tr>
        <tr>
            <th>Parents Contact no</th>
            <td><input type="text" name="pcon" placeholder="Enter the Contact no of Parents" required></td>

        </tr>
        <tr>
            <th>Standerd</th>
            <td><input type="number" name="std" placeholder="Enter Standerd" required></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="simg" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="hidden" name="sid" values="<?php echo $data['id']; ?>">
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>

    </table>
</form>
</body>
</html>
<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
  include('../dbcon.php');
  $rolno=$_POST['rollno'];
  $name=$_POST['name'];
  $city=$_POST['city'];
  $pcon=$_POST['pcon'];
  $std=$_POST['std'];
  $imagename=$_FILES['simg']['name'];
  $tempname=$_FILES['simg']['tmp_name'];

  move_uploaded_file($tempname,"../dataimg/$imagename");

  $query="INSERT INTO `studeny`(`rollno`, `name`, `city`, `pcont`, `standerd`,`image`) VALUES (NULL,'$rolno','$name','$city','$pcon','$std','$imagename')";
  $run=mysqli_query($con,$qry);

  if($run == true)
  {
      ?>

      <script type="text/javascript">
          alert('Data Inserted Successfully.');
      </script>

      <?php
  }
}

?>
