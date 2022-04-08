<?php

	require_once "dbConnection.php";

	$id = $_GET['id'];

	$connection -> query("DELETE FROM employee WHERE id=$id;");

	header("location: manageEmployee.php");