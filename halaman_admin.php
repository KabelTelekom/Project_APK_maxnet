<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="job7.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="job7.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <title>Halaman Admin</title>
</head>

<body>
<header class="jumbotron">
	<div class="container text-center"><h2>Halaman Admin</h2></div>
    
</header>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>                      
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#login" data-toggle="pill">Menu 1</a></li>
        <li><a href="#kondisi_kandang" data-toggle="pill">Menu 2</a></li>
        <li><a href="#transaksi" data-toggle="pill">Menu 3</a></li>
        <li><a href="#logout" data-toggle="pill" id="logout1">Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid konten">
    <div class="col-sm-3">
        <ul class="nav nav-pills nav-stacked hidden-xs">
          <li class="active"><a href="#login" data-toggle="pill">Menu 1</a></li>
          <li><a href="#kandang" data-toggle="pill">Menu 2</a></li>
          <li><a href="#transaksi" data-toggle="pill">Menu 3</a></li>
          <li><a href="#logout" data-toggle="pill" id="logout2">Log Out</a></li>
        </ul>
    </div>
</body>
</html>

