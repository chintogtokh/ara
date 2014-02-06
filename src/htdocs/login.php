<?php session_start(); ?>
<html xml:lang="{i18n_lang}" lang="{i18n_lang}">
	<head profile="http://gmpg.org/xfn/1">

		<title>ARA: нэвтрэх</title>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="radius administration page" />

		<!--<style type="text/css" media="screen"> @import url(./style.css); </style>-->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />

		<script src="assets/js/jquery-1.10.2.js"></script>
		<script src="assets/js/bootstrap.js"></script>
		<script src="assets/js/custom.js"></script>

		</script>
		<link rel="icon" href="img/logo.png" type="image/png" />
		<!-- BEGIN refreshing -->
		<meta http-equiv="REFRESH" content="300" />
		<!-- END refreshing -->
	</head>

	<body>
<div class="container">
<div class="row">
  <div class="page-header"><h3>ARA-д нэвтрэх / Login to ARA</h3></div>
  <form method="post" action="checklogin.php" class="form-horizontal">
    <fieldset>  

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-1 control-label" for="username"></label>  
        <div class="col-md-12">
          <input id="username" name="username" type="text" placeholder="Хэрэглэгчийн нэр / Username" class="form-control input-md">
        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-1 control-label" for="password"></label>
        <div class="col-md-12">
          <input id="password" name="password" type="password" placeholder="Нууц үг / Password" class="form-control input-md">
        </div>
      </div>

      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-1 control-label" for="login"></label>
      <div class="col-md-10">
        <button id="login" name="login" class="btn btn-block btn-success">Нэвтрэх / Login</button>
      </div>
    </fieldset>
  </form>
</div> <!--./row -->
</div> <!--./container -->
</body>
</html>