<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 6/22/2019
 * Time: 6:40 PM
 */
session_start();
include "Connection_Task.php";

$conn= new Connection_Task();
if(isset($_POST['SubmitBtn'])) {
    $msg=$_POST['Task'];
    if ($msg=="") {
        echo "Please Enter a Task";
    } else {
        $conn->SaveMessage($msg);
        echo '<script type="text/javascript">alert("Your Task Sent Successfully");</script>';

        echo '<script>window.location="index_task.php"</script>';
    }
}