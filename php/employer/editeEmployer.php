<?php
$employer=array();
if(isset($_POST['matricule']) && isset($_POST['prenom']) &&
 isset($_POST['nom']) && isset($_POST['salaire']) && 
 isset($_POST['tel']) && isset($_POST['email']) ){
$employer['matricule']=trim($_POST['matricule']);
 $employer['prenom']=trim($_POST['prenom']);
 $employer['nom']=trim($_POST['nom']);
 $employer['salaire']=trim($_POST['salaire']);
 $employer['pays']=trim($_POST['pays']);
 $employer['email']=trim($_POST['email']);
 $f = fopen("employer.txt","a+");
fwrite($f,json_encode($employer)."\n");
fclose($f);
}

$employers=array();
$f = fopen("employer.txt","r");
while(($ligne=fgets($f))){
$employers[]=json_decode($ligne,true);
}
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