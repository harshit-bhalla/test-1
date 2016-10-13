

<?php
//login

    $conn = mysqli_connect("localhost","root","","harshit");

    $useremail = $_POST['email1'];
    $userpass = $_POST['password1'];

    $sql = "SELECT email,password FROM harshit WHERE email='$useremail' ";

    $result = mysqli_query($conn,$sql);

$resultArray=mysqli_fetch_array($result);
if(sizeof($resultArray)==0)
{
    echo "wrong username or password";
    
}

else if( $useremail==$resultArray['email'] && $userpass==$resultArray['password'] ){
    echo "login sucessful";
    
}

mysqli_close($conn);

  ?>



