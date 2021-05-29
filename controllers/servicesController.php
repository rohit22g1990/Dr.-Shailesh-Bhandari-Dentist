<?php

include '../common.php';

$method = $_REQUEST['method'];
$objAppointment = new AppointmentController();
$objAppointment->$method();

class AppointmentController {
    
    function __construct() {

    }

    function getServices() {
        $service = $_REQUEST['service'];
        echo json_encode(
            array(
                "status" => "success",
                "data" => Common::getServicesforModal()[$service]
            )
        );
    }

}


?>