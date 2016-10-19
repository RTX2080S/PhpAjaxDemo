<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../Models/Student.php';

if (isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch ($action) {
        case 'getDefault' : getDefault();
            break;
    }
}

function getDefault() {
    $obj = new Student();
    $obj->id = 1;
    $obj->name = 'default';
    $obj->major = 'Software Engineering';
    $obj->year = '2';
    $obj->class = 3;
    $result = json_encode($obj);
    echo $result;
}
