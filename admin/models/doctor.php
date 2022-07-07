<?php
function load_all_doctor(){
    $sql = "SELECT doctor_user.*, level.level_name, gender.name_gender FROM doctor_user INNER JOIN level ON doctor_user.id_level = level.id INNER JOIN gender ON doctor_user.gender = gender.id";
    $load_all_doctor = pdo_query($sql);
    return $load_all_doctor;
}

function load_one_doctor($id){
    $sql = "SELECT doctor_user.*, level.level_name, gender.name_gender FROM doctor_user INNER JOIN level ON doctor_user.id_level = level.id INNER JOIN gender ON doctor_user.gender = gender.id where doctor_user.id = '$id'";
    $load_one_doctor = pdo_query($sql);
    return $load_one_doctor;
}

function delete_doctor($id){
    $sql = "DELETE FROM doctor_user WHERE id = ". $id;
    pdo_execute($sql);
}

function load_level(){
    $sql = "SELECT * FROM level";
    $level = pdo_query($sql);
    return $level;
}

function load_gender(){
    $sql = "SELECT * FROM gender";
    $gender = pdo_query($sql);
    return $gender;
}

function get_doctor_user(){
    $sql = "SELECT * FROM doctor_user ORDER BY DESC";
    return pdo_query($sql);
}
