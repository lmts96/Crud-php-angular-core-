<?php
require 'dbService.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
  $result = mysqli_query($con,'SELECT id from patient order by id desc LIMIT 1');
  $row = mysqli_fetch_assoc($result);
  $ultimoID = $row['id'];

  $patient = json_decode(file_get_contents('php://input'), true);
  $key = "( id,";
  $value = "( ".($ultimoID+1).",";
  $sql = "INSERT INTO patient ";
  if($patient['name'] != null) $key = $key." name,"; $value = $value." '".$patient['name']."',";
  if($patient['email'] != null) $key = $key." email,"; $value = $value." '".$patient['email']."',";
  if($patient['gender'] != null) $key = $key." gender,"; $value = $value." '".$patient['gender']."',";
  if($patient['telephone'] != null) $key = $key." telephone,"; $value = $value." '".$patient['telephone']."',";
  if($patient['birthDate'] != null) $key = $key." birthDate,"; $value = $value." '".$patient['birthDate']."',";
  if($patient['lastAttendance'] != null) $key = $key." lastAttendance,"; $value = $value." '".$patient['lastAttendance']."',";
  $key = substr($key, 0, -1).")";
  $value = substr($value, 0, -1).")";
  $sql = $sql.$key." VALUES ".$value;

  if (mysqli_query($con, $sql)) {
    header('Content-Type: application/json');
    http_response_code(200);
    echo json_encode("Registro criado com sucesso");
  } else {
    header('Content-Type: application/json');
    echo "Houve um erro: " . mysqli_error($conn);
  } 
}