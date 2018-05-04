<?php
    session_start();
?>
<html>
    <head>
        <title>Site PNL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" >
    </head>
    <body id="fond-index">
        <?php  include 'menu.php'?>
            <div class="container center white">
                <div class="row justify-content-md-center phrase">
                    <div class="col"><p>PNL</p></div>
                    
                
                </div>
                <div class="row suite" >
                    <div class="col-8" ></div>
                    <div class="col" ><p>Que la famille...</p></div>
                </div>
                
                <div class="pnl_song">
                    <audio controls="controls" autoplay='true'>
                        <source src="images/extrait.mp3" type="audio/mp3" />
                    Votre navigateur n'est pas compatible
                  </audio>
                </div> 
            </div>    
        
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    </body>
</html>
