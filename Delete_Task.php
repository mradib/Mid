<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 6/22/2019
 * Time: 7:30 PM
 */

include "Connection_Task.php";
include "Form_Task.php";
$form=new Form_Task();
$conn= new Connection_Task();
if(isset($_POST['DeleteMsg'])) {
    $Task=$_POST['Task'];
    $conn->DeleteMsg($Task);
    echo '<script>window.location="Messages.php"</script>';
}