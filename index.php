<?php

    require_once "dbConnection.php";

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Employee Management System - Manage Employee</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="title">Employee Management System</div>
            </nav>
        </header>

        <div class="content" style="margin-top: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-9">
                                <h1 class="table-title">Manage Employee</h1>
                            </div>
                            <div class="col-3">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="search" placeholder="Search by ID">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="addEmployee.php" class='btn btn-primary add-button' name = 'add'>
                    <i class='fas fa-plus'></i> Add Employee
                </a>
                <div class="row">
                    <div class="col-12">
                        <table id="table" class="table table-bordered table-striped wrap" style="width: 100%;">
                            <thead class="table-dark pb-3">
                                <tr>
                                    <th>#</th>
                                    <th>Action</th>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Position</th>
                                    <th>Sick Leave Credits</th>
                                    <th>Vacation Leave Credits</th>
                                    <th>Hourly Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php

                                        $result = $connection -> query("SELECT * FROM employee;");

                                        if($result -> num_rows > 0){

                                            for($i=1 ;$record = $result -> fetch_assoc(); $i++){

                                                echo

                                                    " <tr>
                                                        <td>".$i."</td>
                                                        <td>
                                                            <a href='editEmployee.php' class='btn btn-primary action-button edit-button' name = 'edit'>
                                                                <i class='fas fa-edit'></i> Edit
                                                            </a>
                                                            <button class='btn btn-danger action-button' name = 'delete'>
                                                                <i class='fas fa-trash'></i> Delete
                                                            </button>
                                                        </td>
                                                        <td>".$record['id']."</td>
                                                        <td>".$record['firstName']."</td>
                                                        <td>".$record['lastName']."</td>
                                                        <td>".$record['position']."</td>
                                                        <td>".$record['sickLeaveCredits']."</td>
                                                        <td>".$record['vacationLeaveCredits']."</td>
                                                        <td>".$record['hourlyRate']."</td>
                                                    </tr> ";        

                                            }

                                        }

                                        else
                                            echo "<tr><td colspan='9'>No Records Found</td></tr>"


                                    ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
    </body>
</html>