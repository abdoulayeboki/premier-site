<?php
$employer=array();
$enregistrement;
$obligatoir="champ obligatoire";
if(isset($_POST['matricule']) && isset($_POST['prenom']) &&
 isset($_POST['nom']) && isset($_POST['salaire']) && 
 isset($_POST['tel']) && isset($_POST['email']) ){
$employer['matricule']=trim($_POST['matricule']);
 $employer['prenom']=trim($_POST['prenom']);
 $employer['nom']=trim($_POST['nom']);
 $employer['salaire']=trim($_POST['salaire']);
 $employer['tel']=trim($_POST['tel']);
 $employer['date']=trim($_POST['date']);
 $employer['email']=trim($_POST['email']);
 $submit=$_POST['submit'];
 $enregistrement=true;
  //controle l'ajout sur le fichier

}

//recuperer le contenudu  du fichier dans un tableau 
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
                <td><input type="text" name="matricule" readonly="true" value="<?php 
                $employers=array();
                $f = fopen("employer.txt","r+");
                while(($ligne=fgets($f))){
                $employers[]=json_decode($ligne,true);
                }
                fclose($f);
                $nbr=count($employers)+1;
                $c=sprintf("%05d",$nbr);
                echo "EM-".$c;
                ?>"/></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom"/>
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
                <td><input type="text" name="prenom" /> 
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
                <td><input type="text" name="salaire" >
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
                <td><input type="text" name="tel" placeholder="779530809" >
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
                <td><input type="text" name="date" />
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
                <td><input type="text" name="email" >
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
                <td><input type="submit" value="Add" name="submit" ></td>
            </tr>
        </table>
        </form>
        <?php 
         // ecrire sur le fichier
    if($enregistrement){
      $f=fopen("employer.txt","a+");
     fwrite($f,json_encode($employer)."\n");
      fclose($f);
    }
    ?>
        <div class="t2">
        <table>
        <thead>
                <th>matricule</th>
                <th>prenom</th>
                <th>nom</th>
                <th>salaire</th>
                <th>telephon</th>
                <th>Date de naissance</th>
                <th>Email</th>
                <th>action</th>
            </thead>
            <tbody>
                <?php
                    foreach($employers as $cle =>$ligne){ ?>

                 <tr>
                 <td><?php echo $ligne['matricule'] ?></td>
                  <td><?php echo $ligne['prenom'] ?></td>
                  <td><?php echo $ligne['nom'] ?></td>
                  <td><?php echo $ligne['salaire'] ?></td>
                  <td><?php echo $ligne['tel'] ?></td>
                  <td><?php echo $ligne['date'] ?></td>
                  <td><?php echo $ligne['email'] ?></td>
                  <td><a href="editeEmployer.php?cle=<?php echo $cle ?>">editer</a></td>
                  <td><a href="validerSuppression.php?cle=<?php echo $cle ?>">supprimer</a></td> 
                 </tr>
                 <?php   } ?>
            </tbody>
        </table></div>
     </div>
</body>
</html> 