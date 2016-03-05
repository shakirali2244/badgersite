<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">

    <link rel="stylesheet" href="/dist/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu">
  </head>
  <body>

    <nav class="navbar navbar-fixed-top navbar-light bg-faded" style="background-color: #e3f2fd;">
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
    &#9776;
  </button>
  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
      <a class="navbar-brand" href="/"><img src="/assets/img/logo.png" alt"<?php echo $companyName; ?>" style="height: 3.1rem; margin:-10px 0px -10px -10px ;"/></a>
      <ul class="nav navbar-nav">
        <li class="nav-item"><a href="/" class = "nav-link">Home</a></li>
        <li class="nav-item"><?php echo anchor('/about', 'About' ,'class="nav-link"');?></li>
        <li class="nav-item"><?php echo anchor('/contact', 'Contact','class="nav-link"');?></li>
        <li class="nav-item pull-xs-right" ><a href="https://www.facebook.com/Badgerw0rks/" class = "nav-link"  style ="margin:-5px ;"><i class="fa fa-facebook fa-2x" s></i></a></li>
        <li class="nav-item pull-xs-right" ><a href="https://badgerw0rks.tumblr.com" class = "nav-link"  style =" margin: -5px ;"><i class="fa fa-tumblr fa-2x"></i></a></li>
      </ul>
       
      </div>
    </nav>


    