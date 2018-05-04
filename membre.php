<?php
session_start();
$alertes = [];

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=id5622192_pnl;charset=utf8', 'id5622192_root', 'rootpnl');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['pseudo'])) {  
    $pseudo=$_POST['pseudo'];

    //  Récupération de l'utilisateur et de son pass hashé
    $req = $bdd->prepare('SELECT id, password FROM membres WHERE pseudo = :pseudo');
    $req->execute(array('pseudo' => $pseudo));

    $resultat = $req->fetch();

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);    

    if (!$resultat)
    {
        $alertes[] = "L'utilisateur n'existe pas";
        if(isset($_POST['inscription'])) {
            $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $email = $_POST['email'];

            $req = $bdd->prepare('INSERT INTO membres(pseudo, password, email) VALUES(:pseudo, :password, :email)');

            try {
                $req->execute(array('pseudo' => $pseudo,'password' => $pass_hache,'email' => $email));
                $alertes[] = "L'utilisateur a été ajouté";
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['pseudo'] = $pseudo;
            } catch (Exception $exc) {
                $alertes[] = 'Erreur : ' . $e->getMessage();
            }
        }       

    } else {
        if ($isPasswordCorrect) {
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo'] = $pseudo;
            $alertes[] = "Vous êtes connecté !";

        } else {
            $alertes[] = "Mauvais identifiant ou mot de passe !";
        }

    }
} elseif (isset($_GET['deco'])) {
    $_SESSION = array();
    session_destroy();
}


?>