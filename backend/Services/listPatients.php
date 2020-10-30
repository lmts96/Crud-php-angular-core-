<?php
require 'dbService.php';

    $patients = [];
    $sql = "SELECT * FROM patient";
    if($result = mysqli_query($con,$sql))
    {
        $i = 0;
        while($row = mysqli_fetch_assoc($result))
        {
            $patients[$i]['id']    = $row['id'];
            $patients[$i]['name'] = $row['name'];
            $patients[$i]['email'] = $row['email'];
            $patients[$i]['gender'] = $row['gender'];
            $patients[$i]['telephone'] = $row['telephone'];
            $patients[$i]['birthDate'] = $row['birthDate'];
            $patients[$i]['lastAttendance'] = $row['lastAttendance'];
            $i++;
        }
        
        echo json_encode($patients);
    }
    else
    {
        http_response_code(404);
    }
