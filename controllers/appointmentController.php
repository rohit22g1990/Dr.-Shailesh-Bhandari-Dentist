<?php

include '../common.php';

echo "<pre>";
print_r($_REQUEST);
$method = $_REQUEST['method'];
$objAppointment = new AppointmentController();
$objAppointment->$method();
echo "<pre>";

class AppointmentController {
    
    function __construct() {

    }

    function getServices() {
        print_r(Common::getServices());
        echo json_encode(array("message" => "Unable to create product."));
    }

}


?>