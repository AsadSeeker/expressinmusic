<?php 


if(!isset($_SESSION['user']) && empty($_SESSION['user'])){
    echo "You are not allowed";
    exit;
}