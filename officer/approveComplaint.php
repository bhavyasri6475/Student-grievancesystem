<?php
session_start();
include("../inc/conn.php");

// Check if the status and comp_id parameters are set in the URL
if (isset($_GET['status']) && isset($_GET['comp_id'])) {
    $status = $_GET['status'];
    $comp_id = $_GET['comp_id'];

    // Validate status to be either 0 (approve) or 1 (reject)
    if ($status == 0 || $status == 1) {
        // Update the complaint status in the database
        $updateSql = "UPDATE complaints SET comp_status = $status WHERE comp_id = $comp_id";

        if (mysqli_query($conn, $updateSql)) {
            echo "Complaint status updated successfully.";
        } else {
            echo "Error updating complaint status: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid status value.";
    }
} else {
    echo "Incomplete parameters.";
}
?>
