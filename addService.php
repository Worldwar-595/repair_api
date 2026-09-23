<?php
    header("Content-Type: application/json");
    include 'db.php';

    $data = json_decode(file_get_contents("php://input"));

    if(!$data){
        echo json_encode(["error"=>"Invalid JSON input"]);
        exit();
    }

    $service_name = $data->service_name ?? null;
    $price = $data->price ?? null;

    if(!$service_name || !$price){
        echo json_encode(["error"=>"Missing service_name or price"]);
        exit();
    }

    $sql = "INSERT INTO services(service_name,price)
    VALUES ('$service_name','$price')";$conn->query($sql);
    echo json_encode(["message"=>"Service added successfully"]);
?>