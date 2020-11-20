<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "alex" && $password ="12345"){
        $dataResponse = array(
            "status" => "success",
            "idUser" => "1",
            "message" => "berhasil"
        );
        echo json_encode($dataResponse);
    }else{
        $dataResponse = array(
            "status" => "failed",
            "idUser" => "null",
            "message" => "gagal"
        );
        echo json_encode($dataResponse);
    }
?>