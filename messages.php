<?php
    $messages = [];
    
    if(isset($_POST['contenu'])) {
        $req = $bdd->prepare('INSERT INTO message(contenu, membre_id, date_message) VALUES(:contenu,:membre_id,NOW())');
        
        try {
            $req->execute(array('contenu' => $_POST['contenu'],'membre_id' => $_SESSION['id']));
            $alertes[] = "Message envoyé";
        } catch (Exception $exc) {
            $alertes[] = 'Erreur : ' . $e->getMessage();
        }
    }

//    if(isset($_SESSION['id'])) {        
    
        $req = $bdd->prepare('SELECT m.id , contenu, me.pseudo, date_message FROM message m JOIN membres me on me.id=m.membre_id  ORDER BY date_message');

        $req->execute(array());

        $resultats = $req->fetchAll();
        
        if (!empty($resultats))
        {
           $messages = $resultats;           
        }
//    } 
    
    
?>
