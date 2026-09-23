<?php
    header("Content-Type: application/json");
    include 'db.php';
    
    $sql = "SELECT * FROM services";
    $result = $conn->query($sql);
    $data = array();

    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }

    echo json_encode($data);
?>