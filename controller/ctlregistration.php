<?php

    if( isset($_POST['data']) &&   !empty($_POST['data'])){
        $data = $_POST["data"];
        echo json_encode($data);
    }












?>