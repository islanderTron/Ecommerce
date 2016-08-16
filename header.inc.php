<?php include 'connection.php' ?>
<?php include "LIB_project1.php"; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bookshop | E-Commerce</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <link rel="stylesheet" href="css/app.css"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="addcart.js" type="text/javascript"></script>
  </head>
  <body>
    <div class="top-bar">
      <div id="responsive-menu">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text title">Bookshop</li>
            <li><a href="index.php">Home</a></li>
            <li><a href="cart.php">Cart(<?php totalQunatity($dbh); ?>)</a></li>
            <li><a href="admin.php">Admin</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <div class="callout large">