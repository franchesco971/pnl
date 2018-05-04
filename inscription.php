<?php
    session_start();
?>
<html>
    <head>
        <title>Inscription</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" >
    </head>
    <body id="fond-autre">
        <?php  include 'menu.php'?>
        <div class="container center">
            
            <form action="forum.php" method="POST" name="connexion" class="white">
                <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input name="pseudo" type="text" class="form-control" id="pseudo"  placeholder="Pseudo">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
              </div>
                <button type="submit" name="inscription" class="btn btn-primary">Inscription</button>
            </form>
        </div>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>