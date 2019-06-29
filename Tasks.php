<?php

session_start();
include "Connection_Task.php";
include "Form_Task.php";
$form=new Form_Task();
$conn= new Connection_Task();
if(isset($_SESSION['email'])&& isset($_SESSION['password'])){
    $data=$conn->GetMessages();
    $form->Messages($data);

}
else{

    echo '<script type="text/javascript">alert("You have to login first!!");</script>';
    echo '<script>window.location="LogIn_Task.php"</script>';

}
