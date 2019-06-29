<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 6/22/2019
 * Time: 6:51 PM
 */
session_start();
include "Connection_Task.php";
include "Form_Task.php";
$form=new Form_Task();
$conn= new Connection_Task();
if(isset($_POST['name'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    if ($email=="" || $password==""  ) {
        echo "Please Enter All Fields";
    } else {
        $conn->LogIN($email,$password);
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;

        echo '<script>window.location="Tasks.php"</script>';


    }
}
else{
    $form->LogInPage();

}

