<?php
require 'dbService.php';
if($_SERVER['REQUEST_METHOD'] == 'PUT'){
    
    $patient = json_decode(file_get_contents('php://input'), true);

    $sql = "UPDATE patient set";
    if($patient['name'] != null) $sql = $sql." name = '".$patient['name']."',";
    if($patient['email'] != null) $sql = $sql." email = '".$patient['email']."',";
    if($patient['gender'] != null) $sql = $sql." gender = '".$patient['gender']."',";
    if($patient['telephone'] != null) $sql = $sql." telephone = '".$patient['telephone']."',";
    if($patient['birthDate'] != null) $sql = $sql." birthDate = '".$patient['birthDate']."',";
    if($patient['lastAttendance'] != null) $sql = $sql." lastAttendance = '".$patient['lastAttendance']."',";
    $sql = substr($sql, 0, -1);
    $sql = $sql." WHERE id = ".$patient['id'];


    if (mysqli_query($con, $sql)) {
        echo "O registro de Id ".$patient['id']." foi atualizado com sucesso";
        http_response_code(200);
      } else {
        echo "Houve um erro: " . mysqli_error($conn);
    } 
}