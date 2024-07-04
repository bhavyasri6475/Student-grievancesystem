<?php
    session_start();
    include("../inc/conn.php");
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <?php include "../inc/header.php" ?>
        <h1 class="py-3 text-center">User Complaint Status!</h1>
        <div class = "px-5">
            <button type="button" class="btn btn-primary" onclick="location.href='/student_complaint_system/admin/index.php'">Back</button>
            <div class="container px-5 my-5">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Email</th>
                <th scope="col">Category</th>
                <th scope="col">Location</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                //untuk view dalam database
                //mysqli_num_rows($run)

                    $viewsql ="SELECT cr.email, c.comp_cat, c.comp_loct, c.comp_desc, c.comp_date, c.comp_status FROM complaints AS c JOIN users AS u ON c.user_id = u.user_id JOIN credentials as cr ON u.cred_id = cr.cred_id";
                    $run=mysqli_query($conn,$viewsql);
                    if(!is_bool($run)){
                        $compuser = mysqli_fetch_all($run);
                        if (sizeof($compuser)>0){
                            for($i=0; $i<sizeof($compuser);$i++ ){
                                echo "<tr>";
                                $compnum=$i+1;
                                echo "<th scope=\"row\">".$compnum."</th>";
                                foreach($compuser[$i] as $key=>$catcomp){
                                    if ($key == 5) {
                                        # code...
                                        if($catcomp==""){
                                            echo "<td>Pending</td>";
                                        } else if($catcomp==0){
                                            echo "<td>Approved</td>";
                                        } else if($catcomp==1){
                                            echo "<td>Rejected</td>";
                                        } else {
                                            echo "<td>Pending</td>";
                                        }
                                    } else {
                                        echo "<td>$catcomp</td>";
                                    }
                                    
                                }
                                echo "</tr>";
                            }
                        } else {
                            //run bila ada erro
                            echo "<tr>";
                            echo "<td style = \"text-align: center;\" colspan = \"5\">Doesn't Have Complaint Yet!</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr>";
                        echo "<td style = \"text-align: center;\" colspan = \"5\">Error Occured</td>";
                        echo "</tr>";
                    }
                
                ?>
            </tbody>
            </table>
        </div>
    </body>
</html>