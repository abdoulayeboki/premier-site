<?php

$cle=$_GET['cle'];
$employers=array();
$f = fopen("employer.txt","r");
while(($ligne=fgets($f))){
$employers[]=json_decode($ligne,true);
}
$employer=array();
$employer=$employers[$cle];

$matricule=$employer['matricule'];
 $prenom=$employer['prenom'];
 $nom=$employer['nom'];
 $salaire=$employer['salaire'];
$tel=$employer['tel'];
$date=$employer['date'];
$email=$employer['email'];
//var_dump ($employer);
fclose($f);


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
        <form method="post" action="editer.php?cle=<?php echo $cle ?>">
                       
        <table >
            <tr>
                <td>Matricule</td>
                <td><input type="text" name="matricule" value="<?php echo $matricule ?>"/></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" value="<?php echo $nom ?>"/></td>
            </tr>
            <tr>
                <td>Prenom</td>
                <td><input type="text" name="prenom" value="<?php echo $prenom ?>" /></td>
            </tr>
            <tr>
                <td>Salaire</td>
                <td><input type="text" name="salaire" value="<?php echo $salaire ?>" ></td>
            </tr>
            <tr>
                <td>Telephon</td>
                <td><input type="text" name="tel" value="<?php echo $tel ?>" ></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email ?>" ></td>
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td><input type="text" name="date" value="<?php echo $date ?>" ></td>
            </tr>
            <tr>
                <td><input type="submit" value="envoyer" name="submit" ></td>
            </tr>
        </table>
</form>
     </div>
</body>
</html> 