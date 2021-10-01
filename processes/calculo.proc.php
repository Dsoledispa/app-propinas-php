<?php
if(isset($_POST['submit'])){
    $cuenta=$_POST['cuenta'];
    $servicio=$_POST['servicio'];
    $personas=$_POST['personas'];
    if($personas==0 || null){
        header("Location:../index.php");
    }else{
        $total=(float)$cuenta*(float)$servicio/(float)$personas;
        header("Location:../index.php?res=".$total);
    }
}else{
    header("Location:../index.php");
}