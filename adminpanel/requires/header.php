<?php 
  ob_start();
  session_start();
?>

<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="/admin/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="/admin/css/style.css">
  <link rel="stylesheet" href="/admin/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="/admin/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='/admin/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
         
          
          <li class="dropdown">
                <a href="auth-login.html" style="height: 50px;" class="dropdown-item has-icon text-danger"> 
                    <i style="font-size: 30px;" class="fas fa-sign-out-alt"></i>
                </a>
          </li>

        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="/admin/img/logo.png" class="header-logo" /> <span
                class="logo-name">Techno Shop</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

              <a href="<?= $categories; ?>" class="menu-toggle nav-link">
                <i data-feather="briefcase"></i>
                <span>Categories</span>
              </a>
              
            </li>
          </ul>
        </aside>
      </div>