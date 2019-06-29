<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 6/22/2019
 * Time: 6:26 PM
 */
session_start();
include "Connection_Task.php";
include "Form_Task.php";
$form=new Form_Task();
$conn= new Connection_Task();

$form->MessageShow();

session_unset();
