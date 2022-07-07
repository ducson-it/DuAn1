<?php

function list_data_doctor()
{
    $load_all_doctor = load_all_doctor();
    include 'views/list_doctor.php';
}