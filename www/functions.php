<?php
function getCars($connect){
    $cartable = 'mycars';
    $sql = "SELECT * FROM $cartable";
    $cars = mysqli_query($connect, $sql);
    $carsList = [];
    while($car = mysqli_fetch_assoc($cars)){
        $carsList[] = $car;
    }
    echo json_encode($carsList);
}

function getCar($connect, $id){
    $car = mysqli_query($connect, "SELECT * FROM `mycars` WHERE `id` = '$id'");
    if(mysqli_num_rows($car) === 0){
        http_response_code(404);
        $res = [
            "status" => false,
            "message" => "Post not fund"
        ];
        echo json_encode($res);
    }else{
        $car = mysqli_fetch_assoc($car);
        echo json_encode($car);
    }
}

function addCar($connect, $data){
    $brand = $data['brand'];
    $model = $data['model'];
    $country = $data['country'];
    $year = $data['year'];
    if($year==null OR !is_numeric($year))$year=0;
    if($brand != null AND $model != null){
        mysqli_query($connect, "INSERT INTO `mycars` (`id`, `brand`, `model`, `country`, `year`) VALUES (NULL, '$brand', '$model', '$country' , '$year')");
        http_response_code(201);
        $res = [
            "status" => true,
            "message" => "Car was added!",
            "car_id" => mysqli_insert_id($connect)
        ];
    }else{
        http_response_code(406);
        $res = [
            "status" => false,
            "message" => "Both brand and model data should be provided!"
        ];
    }
    echo json_encode($res);
}

function updateCar($connect, $data, $id){
    $brand = $data['brand'];
    $model = $data['model'];
    $country = $data['country'];
    $year = $data['year'];
    if($year==null OR !is_numeric($year))$year=0;
    mysqli_query($connect, "UPDATE `mycars` SET `brand` = '$brand', `model` = '$model', `country` = '$country', `year` = '$year' WHERE `mycars`.`id` = $id");
    if(mysqli_affected_rows($connect)){
        http_response_code(200);
        $res = [
            "status" => true,
            "message" => "Car was updated!"
        ];
    }else {
        http_response_code(404);
        $res = [
            "status" => false,
            "message" => "Car not found"
        ];
    }
    echo json_encode($res);
}

function deleteCar($connect, $id){
    mysqli_query($connect, "DELETE FROM `mycars` WHERE `mycars`.`id` = $id");
    if(mysqli_affected_rows($connect)){
        http_response_code(200);
        $res = [
            "status" => true,
            "message" => "Car was deleted"
        ];
    }else {
        http_response_code(404);
        $res = [
            "status" => false,
            "message" => "Car not found"
        ];
    }
    echo json_encode($res);
    
}
