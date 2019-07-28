<?php
$obligatoir="obligatoir!";
$enregistrement;
$valide="non valide";
$cle=$_GET['cle'];
$employers=array();
$f = fopen("employer.txt","r");
while(($ligne=fgets($f))){
$employers[]=json_decode($ligne,true);
}
fclose($f);
$employer=array();
$employer=$employers[$cle];

$matricule=$employer['matricule'];
 $prenom=$employer['prenom'];
 $nom=$employer['nom'];
 $salaire=$employer['salaire'];
$tel=$employer['tel'];
$date=$employer['date'];
$email=$employer['email'];


if(isset($_POST['matricule']) && isset($_POST['prenom']) &&
 isset($_POST['nom']) && isset($_POST['salaire']) && 
 isset($_POST['tel']) && isset($_POST['email']) ){
$matricules=trim($_POST['matricule']);
 $prenoms=trim($_POST['prenom']);
 $noms=trim($_POST['nom']);
 $salaires=trim($_POST['salaire']);
 $tels=trim($_POST['tel']);
 $dates=trim($_POST['date']);
 $emails=trim($_POST['email']);
 $enregistrement=true;
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
       <div class="form">
        <form method="post" action="editeEmployer.php?cle=<?php echo $cle ?>&
        enregistrement=<?php echo $enregistrement ?>">
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
                <td><input type="text" name="nom" value="<?php echo isset($noms)?$noms:$nom; ?>"/>
                <span class="erreur"><?php if(!isset($noms)){}
                  else if( empty($noms)){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                   else if(!preg_match("#^[a-zA-zéàâèûôîç]{2,25}$#",$noms)){
                       echo $valide;
                       $enregistrement=false;
                   }
              ?></span>
            </td>
            </tr>
            <tr>
                <td>Prenom</td>
                <td><input type="text" name="prenom"  value="<?php  echo isset($prenoms)?$prenoms:$prenom;  ?>" /> 
                <span class="erreur"><?php if(!isset($prenoms)){}
                  else if( empty($prenoms)){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                   else if(!preg_match("#^[a-zA-Zéàâèûôîç ]{2,25}$#",$prenoms)){
                    echo $valide;
                       $enregistrement=false;
                   }
              ?></span></td>
            
            </tr>   
            <tr>
                <td>Salaire</td>
                <td><input type="text" name="salaire"  value="<?php  echo isset($salaires)?$salaires:$salaire;  ?>" />
                <span class="erreur"><?php if(!isset($salaires)){}
                  else if( empty($salaires)){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                   else if(!preg_match("#^[0-9]{5,7}$#",$salaires)){
                    echo $valide;
                       $enregistrement=false;
                   }
                   else if($salaires<25000 || $salaires>2000000){
                    echo "25000 <salaire< 2 000 000";
                    $enregistrement=false;
                }
              ?></span>
            </td>
            </tr>
            <tr>
                <td>Telephon</td>
                <td><input type="text" name="tel" placeholder="779530809"  value="<?php  echo isset($tels)?$tels:$tel;  ?>" />
                <span class="erreur"><?php if(!isset($tels)){}
                  else if( empty($tels)){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                   else if(!preg_match("#^[7]{1}[7860]{1}[-: ]?[0-9]{3}[-: ]?[0-9]{2}[-: ]?[0-9]{2}$#",$tels)){
                    echo $valide;
                       $enregistrement=false;
                   }
              ?></span>
              </td>
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td><input type="text" name="date"  value="<?php  echo isset($dates)?$dates:$date;  ?>" />
                <span class="erreur"><?php if(!isset($dates)){}
                  else if( empty($dates)){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                   else if(!preg_match("#^[0-9]{2}/[0-9]{2}/[0-9]{4}$#",$dates)) {
                    echo $valide;
                       $enregistrement=false;
                   }?> </span>
              </td>
            </tr> 
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"  value="<?php  echo isset($emails)?$emails:$email;  ?>" />
                <span class="erreur"><?php if(!isset($emails)){}
                 
                 else if( empty($emails)){
                   echo  $obligatoir;
                   $enregistrement=false;
                 }
                  
                  else if(!preg_match("#^[a-z0-9-_.]+@[a-z0-9-_.]{2,}\.[a-z]{2,4}$#",$emails)){
                    echo $valide;
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
     <?php 
     if($enregistrement){
     $lesEmployers=array();
     $f = fopen("employer.txt","r");
     while(($ligne=fgets($f))){
     $lesEmployers[]=json_decode($ligne,true);
     }
     fclose($f);
     //vider le fichier
     $f=fopen("employer.txt",'w');
     fclose($f);
     //remplaçons la ligne modifié
     $lesEmployers[$cle]=array(
         "matricule"=>$matricules,
         "prenom"=>$prenoms,
         "nom"=>$noms,
         "salaire"=>$salaires,
         "tel"=>$tels,
         "date"=>$dates,
         "email"=>$emails
     );
     //recupéron nos données du tableaus $lesEmployers sous forme de chaine de caractere
      $data="";
      foreach($lesEmployers as $ligne){
        $data=$data.json_encode($ligne)."\n" ;
     }
     
     //inserons les données dans le fichier vide
     $f = fopen("employer.txt","a+");
      fwrite($f,$data);
      fclose($f);
      //redirigons vers employer.php
      header("location:afficherEmployer.php");
    }
     ?>
</body>
</html> 