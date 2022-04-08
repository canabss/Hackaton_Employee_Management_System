<?php

	require_once "dbConnection.php";

	$idNumber = $_POST['idNumber'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $position = $_POST['position'];
    $sickLeaveCredit = $_POST['sickLeaveCredit'];
    $vacationLeaveCredit = $_POST['vacationLeaveCredit'];
    $hourlyRate = $_POST['hourlyRate'];

    $connection -> query("UPDATE employee SET firstName='$firstName', lastName='$lastName', position='$position', sickLeaveCredits='$sickLeaveCredit', vacationLeaveCredits=$vacationLeaveCredit, hourlyRate=$hourlyRate WHERE id=$idNumber;") or die($connection -> error);

    header("location: editEmployee.php");