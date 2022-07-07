<?php

function list_data_doctor()
{
    $load_all_doctor = load_all_doctor();
    include 'views/list_doctor.php';
}


function del_data_doctor(){
    if (isset($_GET['act']) == "del_doctor" && isset($_GET['id']) > 0) {
        $id = $_GET['id'];
        delete_doctor($id);
        $load_all_doctor = load_all_doctor();
        include 'views/list_doctor.php';
    }    
}

function update_data_doctor(){
    
}