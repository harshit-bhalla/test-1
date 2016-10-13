<?php
$conn = mysqli_connect("localhost","root","","harshit");

$sql = "insert into harshit values ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."','".$_POST['password']."')";

if(mysqli_query($conn, $sql) && isset($_POST['submit'])){
echo "account has been created";
}

else {

echo "error in creating account ".mysqli_error($conn);

}

mysqli_close($conn);

?>