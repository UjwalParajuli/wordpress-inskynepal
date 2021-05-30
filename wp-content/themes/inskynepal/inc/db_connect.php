<?php 
$servername = "localhost";
    $username = "inskynep_admin69";
    $password = "~O-MjOq2^u_b";
    $dbname = "inskynep_wp69";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>