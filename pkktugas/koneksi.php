<?php
session_start();
class koneksi{
    function getkoneksi(){
$db = mysqli_connect("localhost","root", "","tbdatasiswa");

return new PDO("mysql:host=localhost;dbname=tbdatasiswa","root","");
    }
}