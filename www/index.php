<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header('Content-Type: application/json');

require_once 'connect.php';
require_once 'functions.php';

$method = $_SERVER['REQUEST_METHOD'];
$q = $_GET['q'];
$params = explode('/', $q);
$type = $params[0];
if(isset($params[1])){
    $id = $params[1];
    if(!is_numeric($id)){
        http_response_code(406);
        $res = [
            "status" => false,
            "message" => "Bad id!"
        ];
        echo json_encode($res);
        Die();
    }
}
if($method === 'GET'){
    if($type === 'cars')
    {
        if(isset($id)){
            getCar($connect, $id);
        }else{
            getCars($connect);
        }
    }
}elseif($method === 'POST'){    // Create a new car
    if($type === 'cars'){
        $data = file_get_contents('php://input');
        $data = json_decode($data, true);

        addCar($connect, $data);    
    }
}elseif($method === 'PUT'){    // Update a car
    if($type === 'cars'){
        if(isset($id)){
            $data = file_get_contents('php://input');
            $data = json_decode($data, true);
            updateCar($connect, $data, $id);
        }
    }
}elseif($method === 'DELETE'){
    if($type === 'cars'){
        if(isset($id)){
            deleteCar($connect, $id);
        }
    }
}
