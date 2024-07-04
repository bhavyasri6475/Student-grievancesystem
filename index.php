<!-- 

<!DOCTYPE HTML>
<html>
   
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body background="img/bg.png" >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        
        <h1 class="text-center py-3 py-x">Welcome to Student complaint system!</h1>
        <p class="text-center px-5 fs-5">
            This website created for a student and staff to make a complaint about accomodity.
        </p>
        <p class="text-center px-5 fs-5">
            This website created by:
        </p>
        <p class="text-center px-5 fs-3">
            Muhammad Adib Bin Adnan
        </p>
        <p class="text-center px-5 fs-3">
            Mohamad Imran Bin Izhar
        </p>
        <p class="text-center px-5 fs-3">
            Amirul Zarief Bin Malek Amir Azmin
        </p>
        <p class="text-center px-5 fs-3">
            Muhammad Hafiz Bin Norizan
        </p>
        <p class="text-center px-5 fs-3">
            Siti Saudah Binti Mohd Ghani
        </p>
    </body>
</html> -->


<!-- 
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body background="img/bg.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <h1 class="text-center py-3 px-5">Welcome to the Student Complaint System!</h1>
    <p class="text-center px-5 fs-5">
        This website is created for students and staff to make complaints about accommodation.
    </p>
    <p class="text-center px-5 fs-5">
        This website is created by:
    </p>
    <p class="text-center px-5 fs-3">
        Muhammad Adib Bin Adnan
    </p>
    <p class="text-center px-5 fs-3">
        Mohamad Imran Bin Izhar
    </p>
    <p class="text-center px-5 fs-3">
        Amirul Zarief Bin Malek Amir Azmin
    </p>
    <p class="text-center px-5 fs-3">
        Muhammad Hafiz Bin Norizan
    </p>
    <p class="text-center px-5 fs-3">
        Siti Saudah Binti Mohd Ghani
    </p>
     Change logout button to login button
    <div class="text-center">
        <button type="button" class="btn btn-primary" onclick="location.href='login.php'">Login</button>
    </div>
</body>
</html> -->



<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body background="img/bg.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <?php include "inc/header.php" ?>
    <!-- <h1 class="text-center py-3 px-5">Welcome to the Student Grievance System!</h1> -->
    <h1 class="text-center py-3 px-4" style="color: #000; text-align: left;">Student Grievance Portal</h1>


    <!-- <p class="text-center px-5 fs-5">
        This website is created for students and staff to make complaints about accommodation.
    </p>
    <p class="text-center px-5 fs-5">
        This website is created by:
    </p>
    <p class="text-center px-5 fs-3">
        Muhammad Adib Bin Adnan
    </p>
    <p class="text-center px-5 fs-3">
        Mohamad Imran Bin Izhar
    </p>
    <p class="text-center px-5 fs-3">
        Amirul Zarief Bin Malek Amir Azmin
    </p>
    <p class="text-center px-5 fs-3">
        Muhammad Hafiz Bin Norizan
    </p>
    <p class="text-center px-5 fs-3">
        Siti Saudah Binti Mohd Ghani -->
    <!-- </p> -->
    <!-- Buttons section -->
    <div class="text-center mt-3">
    <!-- Login button -->
    <div class="mb-2">
        <button type="button" class="btn btn-primary me-2" onclick="location.href='login.php'">Student Login</button>
    </div>
    <!-- Register button -->
    <div>
        <button type="button" class="btn btn-primary" onclick="location.href='register.php'">Student Register</button>
    </div>
    
</div>
    
</body>
</html>




