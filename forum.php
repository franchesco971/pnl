<?php include 'membre.php';?>
<?php include 'messages.php';?>
<html>
    <head>
        <title>Forum</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" >
    </head>
    <body id="fond-autre">
        <?php  include 'menu.php'?>
        <div class="container center white" id="forum">
                <?php 
                foreach ($alertes as $alerte) {
                    echo "<div class='alert alert-success' role='alert'>
                    ".$alerte."
                  </div>";

                }                
                ?>
                
                
                <?php if(!isset($_SESSION['pseudo'])) { ?>
                    <a class="btn btn-primary" href="/connexion.php" role="button">Connexion</a>
                    <a class="btn btn-primary" href="/inscription.php" role="button">Inscription</a>
                <?php } else { ?>                

                <form action="forum.php" method="POST" name="message" class="white form-message">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ecrire un message</label>
                        <textarea name="contenu" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
                
                <div class="white row">
                    <h2>Messages :</h2>
                    <div id="message-container">
                    <?php foreach ($messages as $message) { $date = new DateTime($message['date_message']);?>
                        <div class="message">
                            <p class="text-left"> <?php echo $message['pseudo']." à ".$date->format('Y-m-d H:i:s')." :"; ?> </p><br/>
                            <p class="text-center"> <?php echo $message['contenu']; ?> </p>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <?php } ?>
                
                <div class="row video">
                    <div class="card">
                        <video controls="controls" width="800" height="600" 
                           name="Video Name" src="images/video.mp4"></video>
                    </div>
                </div>
                
                <div class="row suite" >
                    <div class="col-6" ></div>
                    <div class="col" ><p>Merci beaucoup...</p></div>
                </div>
            </div>    
        
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>
