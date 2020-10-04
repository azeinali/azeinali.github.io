<?php
$con = mysqli_connect('localhost','root','','resume') or die('connection lost');


function getGeneralInfo($connection){
  $select = mysqli_query($connection,"select * from `general_info` limit 1");
  $data = mysqli_fetch_array($select);
  return $data;
}

function getExperiences($connection){
    $select = mysqli_query($connection,"select * from `experiences`");
    $data = [];
    while($row = mysqli_fetch_array($select)){
        array_push($data, $row);
    }
    return $data;
}

function getEducations($connection){
    $select = mysqli_query($connection, "select * from `educations`");
    $data = [];
    while ($row = mysqli_fetch_array($select)) {
        array_push($data, $row);
    }
    return $data;
}

function getskills($connection){
    $select = mysqli_query($connection, "select * from `skills`");
    $data = [];
    while($row = mysqli_fetch_array($select)) {
        array_push($data, $row);
    }
    return $data;
}

function getAwards($connection){
    $select = mysqli_query($connection, "select * from `awards`");
    $data = [];
    while($row = mysqli_fetch_array($select)) {
        array_push($data, $row);
    }
    return $data;
}

function getInterests($connection){
    $select = mysqli_query($connection, "select * from `interests`");
    $data = [];
    while($row = mysqli_fetch_array($select)) {
        array_push($data, $row);
    }
    return $data;
}
?>

