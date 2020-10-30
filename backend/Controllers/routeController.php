<?php
$rota = $_SERVER['REQUEST_URI'];
switch ($rota) {
    case '/pacientes':
        include('./Services/listPatients.php');
        break;
    case '/paciente/update':
            include('./Services/updatePatient.php');
            break;
    case '/paciente/add':
            include('./Services/createPatient.php');
            break;
    default:

        break;    
}

?>