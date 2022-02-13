<?php

require_once 'vendor/autoload.php';

use App\Classes\Calculator;
use App\Classes\Odd_Even;
use App\Classes\Prime;
use App\Classes\Category;

if(isset($_GET['pages']))
{
    if ($_GET['pages']=='home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages']=='calculator')
    {
        include 'pages/calculator.php';
    }
    elseif ($_GET['pages']=='odd-even')
    {
        //$odd_even = new Odd_Even();
        include 'pages/odd-even.php';
    }
    elseif ($_GET['pages']=='prime')
    {
        //$odd_even = new Odd_Even();
        include 'pages/prime.php';
    }
    elseif ($_GET['pages']=='all-products')
    {
        $category = new Category;
        $categories = $category->index();
        include 'pages/allProducts.php';
    }
}
elseif (isset($_POST['btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->index();
    include 'pages/home.php';
}

elseif (isset($_POST['odd_btn']))
{
    $odd_even = new Odd_Even($_POST);
    $result = $odd_even->index();
    include 'pages/odd-even.php';
}
elseif (isset($_POST['prime_btn']))
{
    $prime = new Prime($_POST);
    $result = $prime->index();
    include 'pages/prime.php';
}
//elseif (isset($_POST['prime_btn']))
//{
//    $prime = new Prime($_POST);
//    $result = $prime->index();
//    include 'pages/prime.php';
//}

