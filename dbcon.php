<?php

$db = mysqli_connect("localhost", "root", "", "craftstudio");

if(!$db)
{
    die("connection failed:" . mysqli_connect_error());
}

?>