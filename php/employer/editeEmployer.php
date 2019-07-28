<?php
$obligatoir="obligatoir!";
$enregistrement=true;
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
       <div class="form">
        <form method="post" action="editer.php?cle=<?php echo $cle ?>?enregistrement=<?php echo $enregistrement ?>">
         <div class="t1">              
        <table >
            <tr>
                <td>Matricule</td>
                <td><input type="text" name="matricule" readonly="true" value="<?php 
                echo $matricule;
                ?>"/></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" value="<?php echo $nom ?>"/>
                <span class="erreur"><?php if(!isset($employer['nom'])){}
                  else if( $employer['nom']==""){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                   else if(!preg_match("#^[a-zA-zéàâèûôîç]{2,25}$#",$employer['nom'])){
                       echo "le nom n'est pas valide";
                       $enregistrement=false;
                   }
              ?></span>
            </td>
            </tr>
            <tr>
                <td>Prenom</td>
                <td><input type="text" name="prenom"  value="<?php echo $prenom ?>" /> 
                <span class="erreur"><?php if(!isset($employer['prenom'])){}
                  else if( $employer['prenom']==""){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                   else if(!preg_match("#^[a-zA-Zéàâèûôîç ]{2,25}$#",$employer['prenom'])){
                       echo "le prenom n'est pas valide";
                       $enregistrement=false;
                   }
              ?></span></td>
            
            </tr>   
            <tr>
                <td>Salaire</td>
                <td><input type="text" name="salaire"  value="<?php echo $salaire ?>" />
                <span class="erreur"><?php if(!isset($employer['salaire'])){}
                  else if( $employer['salaire']==""){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                   else if(!preg_match("#^[0-9]{5,7}$#",$employer['salaire'])){
                       echo "le salaire n'est pas valide";
                       $enregistrement=false;
                   }
                   else if($employer['salaire']<25000 || $employer['salaire']>2000000){
                    echo "le salaire doit être compris entre 25 000 et 2 000 000";
                    $enregistrement=false;
                }
              ?></span>
            </td>
            </tr>
            <tr>
                <td>Telephon</td>
                <td><input type="text" name="tel" placeholder="779530809"  value="<?php echo $tel ?>" />
                <span class="erreur"><?php if(!isset($employer['tel'])){}
                  else if( $employer['tel']==""){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                   else if(!preg_match("#^[7]{1}[7860]{1}[-: ]?[0-9]{3}[-: ]?[0-9]{2}[-: ]?[0-9]{2}$#",$employer['tel'])){
                       echo "le telephon n'est pas valide";
                       $enregistrement=false;
                   }
              ?></span>
              </td>
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td><input type="text" name="date"  value="<?php echo $date ?>" />
                <span class="erreur"><?php if(!isset($employer['date'])){}
                  else if( empty($employer['date'])){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                   else if(!preg_match("#^[0-9]{2}/[0-9]{2}/[0-9]{4}$#",$employer['date'])) {
                       echo 'date non valide';
                       $enregistrement=false;
                   }?> </span>
              </td>
            </tr> 
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"  value="<?php echo $email ?>" />
                <span class="erreur"><?php if(!isset($employer['email'])){}
                 
                 else if( empty($employer['email'])){
                   echo  $obligatoir;
                   $enregistrement=false;
                 }
                  
                  else if(!preg_match("#^[a-z0-9-_.]+@[a-z0-9-_.]{2,}\.[a-z]{2,4}$#",$employer['email'])){
                    echo "email incorrecte";
                    $enregistrement=false;
                  }  ?></span> 
              </td>

            </tr>
            <tr>
                <td><button type="submit"  name="submit">Ajouter</button></td>
            </tr>
            <tr>
                <td><button><a href="afficherEmployer.php">lister les employers </a></button></td>
            </tr>
        </table></div>
</form></div>
<div class="image">
        <img src="../../image/logosa.jpeg" alt="logo" width="400px" height="400px"/></div>
     </div>
</body>
</html> 