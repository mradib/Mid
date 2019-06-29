<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 6/22/2019
 * Time: 6:50 PM
 */

include "Connection_Task.php";
include "Form_Task.php";
$form=new Form_Task();
$conn= new Connection_Task();
if(isset($_POST['Register'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    if ($name=="" ||$email=="" || $password==""  ) {
        echo "Please Enter All Fields";
    } else {
        $conn->Register($name,$email,$password);
        echo '<script>window.location="LogIn_Task.php"</script>';

    }
}

else{
    $form->RegisterPage();
}