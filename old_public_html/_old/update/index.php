<?php
if (! empty($_POST['token']))
{
  @$token = trim($_POST['token']);
  @$access_token = file_get_contents('https://graph.facebook.com/oauth/access_token?client_id=561033174039783&client_secret=e5986dc670b52695fd318f1a86d3aa2c&grant_type=fb_exchange_token&fb_exchange_token=' . $token);
  @$saved = file_put_contents('/home/asosalti/public_html/update/.token', $access_token);

  header('Location: /');
  exit;
}
else
{
  ?>

  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Asos Altınkum Facebook Fotoğraf Entegrasyonu</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST">
        <h2>1 - <a href="https://developers.facebook.com/tools/explorer/" target="_blank">Jeton Al</a> <a class="pull-right" style="color:#000; font-size:16px;" href="./yardim.html" target="_blank"><em>(yardım)</em></a></h2>
        <h2 class="form-signin-heading">2 - Yeni Jetonu Ekle :</h2>
        <p>
        <textarea style="min-height:200px" type="text" name="token" class="form-control" placeholder="" required autofocus>
        </textarea> </p> <p>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Kaydet</button> </p>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

<?php
}
?>
