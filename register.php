<?php
    session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body background="img/reg.jpg">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <?php include "inc/header.php" ?>
        <!-- <h2 class="py-3 px-5">Register</h2> -->
        <h2 class="py-3 px-5" style="margin-left: 200px;">Register</h2>

        <div class="container px-5 my-5">
        <form id="contactForm" action="registerdata.php" method="POST">
            <div class="form-floating mb-3">
                <input class="form-control" name="name" type="text" placeholder="Name" required style="width: 350px;" />
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="emailAddress" type="email" placeholder="Email Address" required style="width: 350px;" />
                <label for="emailAddress">Email Address</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="phoneNumber" type="number" placeholder="Phone Number" required style="width: 350px;" />
                <label for="phoneNumber">Phone Number</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="studentStaff" aria-label="Student/Staff" required style="width: 350px;">
                    <option value=""></option>
                    <option value="0">Student</option>
                    <option value="1">Staff</option>
                </select>
                <label for="studentStaff">Student/Staff</label>
            </div>
            

            <div class="form-floating mb-3">
    <input style="background-color: white; width: 350px; height: 60px;" class="form-control" name="idNumber" type="number" placeholder="ID Number" required />
    <label for="idNumber">ID Number</label>
    </div>

            <div class="form-floating mb-3">
                <input class="form-control" name="password" type="password" placeholder="Password" required style="width: 350px;" />
                <label for="password">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="confirmPassword" type="password" placeholder="Confirm Password" required style="width: 350px;" />
                <label for="confirmPassword">Confirm Password</label>
            </div>
            <div class="d-grid">
                
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit" required style="width: 150px; margin-left: 100px;">Submit</button>

            </div>
        </form>
    </div>
    </body>
</html>