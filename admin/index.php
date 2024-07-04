<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- <style>
        body {
            background-image: url('path_to_your_background_image.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white; /* Text color for better visibility on the background */
        }

        .btn-primary {
            font-size: 20px; /* Increase button size */
        }
    </style> -->
</head>
<body background="dash.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <?php include "../inc/header.php" ?>
    <h1 class="py-3 ps-3 text-center">Welcome Admin to Student Greivance system!</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6 py-3">
            <h2 class="py-3 ps-3" style="margin-left:90px">View Details</h2>
            <div>
                <button type="button" class="btn btn-primary btn-lg" onclick="location.href='viewuser.php'" required style="width: 180px; margin-left: 100px;">View User</button></div>
                <div style="margin-top: 10px;"><button type="button" class="btn btn-primary btn-lg" onclick="location.href='view.php'" required style="width: 180px; margin-left: 100px;">View Complaint</button></div>
                <div style="margin-top: 10px;"><button type="button" class="btn btn-primary btn-lg" onclick="location.href='viewofficer.php'" required style="width: 180px; margin-left: 100px;">View Officer</button></div>
                <div style="margin-top: 10px;"><button type="button" class="btn btn-primary btn-lg" onclick="location.href='viewadmin.php'" required style="width: 180px; margin-left: 100px;">View Admin</button>
                </div>

            </div>
            <div class="col-md-6 py-3">
            <h2 class="py-3 ps-3" style="margin-left:150px">Create New ID</h2>
            <div> <button type="button" class="btn btn-primary btn-lg" onclick="location.href='addofficer.php'" required style="width: 180px; margin-left: 170px;">Add Officer</button></div>
                <div style="margin-top: 10px;">
                <button type="button" class="btn btn-primary btn-lg" onclick="location.href='addadmin.php'" required style="width: 180px; margin-left: 170px;">Add Admin</button>
                </div>

            </div>
            
        </div>
    </div>
</body>
</html>
