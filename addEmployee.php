<?php

    require_once "dbConnection.php";

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Employee Management System - Add Employee</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="title">Employee Management System</div>
            </nav>
        </header>

        <div class="container pt-5">
            
            <div class="row justify-content-center">
                <div class="registration-page">
                    <div class="registration-box">
                        <h2 class="registration-title">Add Employee</h2>
                        <form action="addEmployeeProcess.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="idNumber" class="form-label" >ID Number</label>
                                        <input type="text" class="form-control" name="idNumber" id="idNumber" placeholder="ID Number">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="firstName" class="form-label" >First Name</label>
                                                <input type="text" class="form-control"name="firstName" id="firstName" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="lastName" class="form-label" >Last Name</label>
                                                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3">
                                    <label for="position" class="form-label" >Position</label>
                                    <input type="text" class="form-control" name="position" id="position" placeholder="Position">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="sickLeaveCredit" class="form-label">Sick Leave Credits</label>
                                                <input type="text" class="form-control" name="sickLeaveCredit" id="sickLeaveCredit" placeholder="Sick Leave Credits">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="vacationLeaveCredit" class="form-label">Vacation Leave Credits</label>
                                                <input type="text" class="form-control" name="vacationLeaveCredit" id="vacationLeaveCredit" placeholder="Vacation Leave Credits">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="hourlyRate" class="form-label" >Hourly Rate</label>
                                        <input type="text" class="form-control" name="hourlyRate" id="hourlyRate" placeholder="Hourly Rate">
                                    </div>
                                </div>
                            </div>
                            <a href="manageEmployee.php" class='btn btn-primary back-btn' name = 'add'>
                                <i class='fas fa-plus'></i> Back
                            </a>
                            <button type="submit" class="btn btn-primary login-btn">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>