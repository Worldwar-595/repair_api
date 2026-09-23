<?php
    header("Content-Type: application/json");
    include 'db.php';

    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id;
    $sql = "DELETE FROM services WHERE id='$id'";
    $conn->query($sql);
    echo json_encode(["message"=>"Service deleted"]);
?>