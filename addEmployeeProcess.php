<?php

    require_once "dbConnection.php";

    $idNumber = $_POST['idNumber'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $position = $_POST['position'];
    $sickLeaveCredit = $_POST['sickLeaveCredit'];
    $vacationLeaveCredit = $_POST['vacationLeaveCredit'];
    $hourlyRate = $_POST['hourlyRate'];


    $connection -> query("INSERT INTO employee VALUE ($idNumber, '$firstName', '$lastName', '$position', $sickLeaveCredit, $vacationLeaveCredit, $hourlyRate);") or die($connection -> error);

    header("location: addEmployee.php");