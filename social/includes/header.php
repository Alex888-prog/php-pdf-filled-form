<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="description" content="<?php echo $desc; ?>">
    <meta name="author" content="Instagram, Faiyaz Shaikh">
    <meta name="google" value="notranslate">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A demo of Stripe Payment Intents" />
    

    <link rel="stylesheet" href="<?php echo DIR; ?>/public/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo DIR; ?>/public/css/global.css" />
   

    <link rel="icon" href="<?php echo DIR; ?>/images/favicon/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo DIR; ?>/public/css/perfectScrollbar.css">
    <link rel="stylesheet" href="<?php echo DIR; ?>/public/css/animate.css">
    <link rel="stylesheet" href="<?php echo DIR; ?>/public/css/master.css">
    <link rel="stylesheet" href="<?php echo DIR; ?>/public/css/responsive.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <script type="text/javascript" src="<?php echo DIR; ?>/public/js/jquery-3.1.1.min.js"></script>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo DIR; ?>/public/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <style>
        html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
        .w3-sidebar {
          z-index: 3;
          top: 48px;
          bottom: 0;
          height: inherit;
	  border-right: 1px solid #ddd;
        }
    </style>

    

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo DIR; ?>/public/css/base.css" data-rel-css="" />
    <link rel="stylesheet" type="text/css" href="<?php echo DIR; ?>/public/css/example2.css" data-rel-css="" />
   
  
  </head>
	<!-- including files for payment dialog. -->
	<?php include_once 'needs/pay_diaolog.php'; ?>

  
