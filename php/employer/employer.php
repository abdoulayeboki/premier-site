<?php
 $prenom=isset($_POST['prenom'])?$_POST['prenom']:'sarr';
 $nom=isset($_POST['nom'])?trim($_POST['nom']):'sarr';
 $matricule=isset($_POST['matricule'])?trim($_POST['matricule']):'sarr';
 $salaire=isset($_POST['salaire'])?trim($_POST['salaire']):'sarr';
 $pays=isset($_POST['pays'])?trim($_POST['pays']):'sarr';
 $email=isset($_POST['email'])?trim($_POST['email']):'sarr';
 $fichier= __DIR__.DIRECTORY_SEPARATOR.'employer.txt';
 if( $prenom!=null || $nom!=null ){
 file_put_contents($fichier,$matricule." ".$prenom." ".$nom." ".$salaire." ".$pays." ".$email,FILE_APPEND);
 }
?>
 <!DOCTYPE html>
<html>
<head>
        <title>les employers</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style1.css"/>
        
    </head>
    <body>
     <div class="page">
        <form method="post" action="employer.php">
                       
        <table >
            <tr>
                <td>Matricule</td>
                <td><input type="text" name="matricule" value=""/></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom"/></td>
            </tr>
            <tr>
                <td>Prenom</td>
                <td><input type="text" name="prenom" /></td>
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td><input type="text" name="date" /></td>
            </tr>    
            <tr>
                <td>Salaire</td>
                <td><input type="text" name="salaire" ></td>
            </tr>
            <tr>
                <td>Telephon</td>
                <td><input type="text" name="tel" ></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" ></td>
            </tr>
            <tr>
                <td><input type="submit" value="envoyer" ></td>
            </tr>
        </table>
        </form>
     </div>
</body>
</html> 