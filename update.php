<!-- upading the user registration -->
<?php
 
 session_start();
 include "connection.php";
 if(isset($_POST['edit']))
 {
    $id=$_SESSION['id'];
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $select= "select * from users where id='$id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update users set age='$age',dob='$dob',contact='$contact', address='$address' where id='$id'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:index.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:edit.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:edit.php');
    }
 }
?>
