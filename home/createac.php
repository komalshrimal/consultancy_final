

<?php
include('config.php');

if(isset($_POST['create']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $create="INSERT INTO user(name,email,password) VALUES('$name','$email','$password')";
    
    
    if(mysqli_query($conn,$create))
    {
        header('location: newlogin.html');
    }

    else
    {
        echo "Error occurred.".mysqli_error($conn);
    }
}
?>
