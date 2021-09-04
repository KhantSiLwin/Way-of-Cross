<?php

function con(){

    return mysqli_connect("localhost","root","","wayofcross");
  }

  function countTotal($total,$condition=1){
    
        $sql =" SELECT COUNT(id) FROM $total WHERE $condition";
    
    $total = fetch($sql);
    return  $total['COUNT(id)'];
}

function fetch($sql){

    $query = mysqli_query(con(),$sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}


function fetchAll($sql){

    $query = mysqli_query(con(),$sql);
    $rows=[];
    if(!$query){
        echo "fail:".mysqli_error(con());
    }
    while ($row=mysqli_fetch_assoc($query)) {
        array_push($rows,$row);
    }
    return $rows;
}

function run_query($sql){
    $con = con();
    if(mysqli_query($con,$sql)){

        return true;
    }
    else{

        die(mysqli_error($con));
    }
}

function iviewerRecord($device){
    
    $sql = "INSERT INTO iviewers (device) VALUES ('$device')";
    run_query($sql);
}

function iviewers(){

    $sql =" SELECT * FROM iviewers";
    return fetchAll($sql);
}


function pviewerRecord($device){
    
    $sql = "INSERT INTO pviewers (device) VALUES ('$device')";
    run_query($sql);
}

function pviewers(){

    $sql =" SELECT * FROM pviewers";
    return fetchAll($sql);
}

?>