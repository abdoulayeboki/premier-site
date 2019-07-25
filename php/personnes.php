<?php
 $prenom=isset($_POST['prenom'])?$_POST['prenom']:null;
 $nom=isset($_POST['nom'])?$_POST['nom']:null;
 $genre=isset($_POST['genre'])?$_POST['genre']:null;
 $pays=isset($_POST['pays'])?$_POST['pays']:null;
 $php=isset($_POST['php'])?$_POST['php']:null;
 $java=isset($_POST['java'])?$_POST['java']:null;
 $js=isset($_POST['js'])?$_POST['js']:null;
 $python=isset($_POST['python'])?$_POST['python']:null;
 $c=isset($_POST['c'])?$_POST['c']:null;
 $email=isset($_POST['email'])?$_POST['email']:null;
 $date=isset($_POST['date'])?$_POST['date']:null;
 $commentaire=isset($_POST['commentaire'])?$_POST['commentaire']:null;
 $obligatoir="champ obligatoir";
 $enregistrement=true;
  $tableau=array(
      array(
    'prenom'=>$prenom,'nom'=>$nom,'genre'=>$genre,'pays'=>$pays,
    'langage'=>$php." ".$java." ".$js." ".$c." ".$python,
'email'=>$email,'date'=>$date,'commentaire'=>$commentaire
));
$tab=array(
    array(
        'prenom'=>"abdoulaye",'nom'=>'sarr','genre'=>'masculin','pays'=>"senegal",
        'langage'=>'php, java, c','email'=>'sarrabdoulaye93@gmail.com','date'=>'12/08/1993',
        'commentaire'=>'message'
    ),
    array(
        'prenom'=>"abdoulaye",'nom'=>'sarr','genre'=>'masculin','pays'=>"senegal",
        'langage'=>'php, java, c','email'=>'sarrabdoulaye93@gmail.com','date'=>'12/08/1993',
        'commentaire'=>'message'
    ),
    array(
        'prenom'=>"abdoulaye",'nom'=>'sarr','genre'=>'masculin','pays'=>"senegal",
        'langage'=>'php, java, c','email'=>'sarrabdoulaye93@gmail.com','date'=>'12/08/1993',
        'commentaire'=>'message'
    ),
    array(
        'prenom'=>"abdoulaye",'nom'=>'sarr','genre'=>'masculin','pays'=>"senegal",
        'langage'=>'php, java, c','email'=>'sarrabdoulaye93@gmail.com','date'=>'12/08/1993',
        'commentaire'=>'message'
    )
)
?>


<!DOCTYPE html>
<html>
    <head>
        <title>mon prmier site</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style1.css"/>
        
    </head>
    <body>
     <span class="page">
        <form method="post" action="personnes.php">
                       
        <table ><caption>Page d'enrégistrement</caption>
            <tr>
                 <td>Prenom  <span class="erreur"> * </span></td>
                 <td><input type="text" name="prenom" placeholder="Prenom" value="<?php echo $prenom ?>">
                <span class="erreur"><?php if(!isset($prenom)){}
                  else if( $prenom==""){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                   
                   else if(!preg_match("#^[a-zA-Zéàâèûôîç ]{2,25}$#",$prenom)){
                    echo "le nom n'est pas valide";
                    $enregistrement=false;
                }  ?></span> 
            </td>
            </tr>
            <tr>
                <td>Nom  <span class="erreur"> * </span> </td>
                <td><input type="text" name="nom" placeholder="Nom" value="<?php echo $nom ?>">
                <span class="erreur"><?php if(!isset($nom)){}
                  else if( $nom==""){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                   else if(!preg_match("#^[a-zA-zéàâèûôîç]{2,25}$#",$nom)){
                       echo "le nom n'est pas valide";
                       $enregistrement=false;
                   }
              ?></span> 
            </td>
            </tr>
            <tr>
                <td>Genre  <span class="erreur"> * </span></td>
                <td class="bouton">
                    <input type="radio" id="masculin" name="genre" value="masculin"
                     <?php if($genre=="masculin") echo "checked" ?>/><label for="masculin" >masculin</label>
                    <input type="radio" id="feminin" name="genre" value="feminin"
                    <?php if($genre=="feminin") echo "checked" ?>
                    /><label for="feminin"> Feminin</label>
                    <span class="erreur"><?php if(!isset($genre)){}
                   if( $genre==on){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                 ?></span> 
                </td>
            </tr>
            <tr>
                <td>Pays  <span class="erreur"> * </span> </td>
                <td class="select"><select name="pays">
                    <option value="senegal" <?php if($pays=="senegal") echo "selected" ?>>Senegal</option>
                    <option value="usa" <?php if($pays=="usa") echo "selected" ?>>USA</option>
                    <option value="france" <?php if($pays=="france") echo "selected"?> >France</option>
                    <option value="mali" <?php if($pays=="mali") echo "selected" ?>>Mali</option>
                    <option value="canada" <?php if($pays=="canada") echo "selected"?>>Canada</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Langage  <span class="erreur"> * </span> </td>
                <td><input type="checkbox" id="php" value="php" name="php"
                <?php if($php) echo "checked" ?>><label for="php">PHP</label>
                    <input type="checkbox" id="java" value="java" name="java"
                    <?php if($java) echo "checked" ?>><label for="java">JAVA</label>
                    <input type="checkbox" id="js"  value="js"
                    <?php if($js) echo "checked" ?> name="js"><label for="js">JS</label>
                    <input type="checkbox" id="c" value="c" 
                    <?php if($c) echo "checked" ?> name="c"><label for="c">C</label>
                    <input type="checkbox" 
                    <?php if($python) echo "checked" ?> id="python" value="python" name="python"><label for="python">python</label>
                   
                </td>
            </tr>
            <tr>
                <td>Email  <span class="erreur"> * </span></td>
                <td><input type="text" name="email" placeholder="email" value="<?php echo $email ?>">
                <span class="erreur"><?php if(!isset($email)){}
                 
                  else if( $email==""){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                   
                   else if(!preg_match("#^[a-z0-9-_.]+@[a-z0-9-_.]{2,}\.[a-z]{2,4}$#",$email)){
                     echo "email incorrecte";
                     $enregistrement=false;
                   }  ?></span> 
            </td>
            </tr>
            <tr>
                <td>Date de naissance  <span class="erreur"> * </span></td>
                <td><input type="text" name="date" placeholder="12/07/1995" value="<?php echo $date ?>">
                <span class="erreur"><?php if(!isset($date)){}
                  else if( $date==""){
                    echo  $obligatoir;
                    $enregistrement=false;
                  }
                   else if(!preg_match("#^[0-9]{2}/[0-9]{2}/[0-9]{4}$#",$date)) {
                       echo 'date non valide';
                       $enregistrement=false;
                   }?> </span> </td>
            </tr>
            <tr>
                <td>Comentaire  <span class="erreur"> * </span> </td>
                <td><textarea name="commentaire" col="22" rows="4" ><?php echo $commentaire ?></textarea>
                <span class="erreur"><?php if(!isset($commentaire)){}
                  else if( $commentaire==""){
                   echo  $obligatoir  ;
                   $enregistrement=false;
                  }?> </span> </td>
            </tr>
         </table> 
             <button type="submit">Enregistrer</button>    
             <div class="t2">
             <table>
            <thead>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Genre</th>
                <th>Pays</th>
                <th>Langages</th>
                <th>Email</th>
                <th>Date</th>
                <th>Commentaire</th>
            </thead>
            <tbody>
                <!-- affichage du tableau manuel -->
                <?php foreach($tab as $donne ){ 
                    ?>
             <tr>
                  <td><?php echo $donne['prenom'] ?></td>
                  <td><?php echo $donne['nom'] ?></td>
                  <td><?php echo $donne['genre'] ?></td>
                  <td><?php echo $donne['pays'] ?></td>
                  <td><?php echo $donne['langage'] ?></td>
                  <td><?php echo $donne['email'] ?></td>
                  <td><?php echo $donne['date'] ?></td>
                  <td><?php
                  if(strlen($donne['commentaire'])> 10){
                    echo substr($donne['commentaire'],0,10)."...";
                  }else echo $donne['commentaire'];
                 ?></td>
               </tr>
                <?php } ?>
                 <!-- affichage du tableau dynamique -->
                 <?php if($enregistrement) {
                     foreach($tableau as $donne ){ 
                    ?>
             <tr>
                  <td><?php echo $donne['prenom'] ?></td>
                  <td><?php echo $donne['nom'] ?></td>
                  <td><?php echo $donne['genre'] ?></td>
                  <td><?php echo $donne['pays'] ?></td>
                  <td><?php echo $donne['langage'] ?></td>
                  <td><?php echo $donne['email'] ?></td>
                  <td><?php echo $donne['date'] ?></td>
                  <td><?php
                  if(strlen($donne['commentaire'])> 10){
                    echo substr($donne['commentaire'],0,10)."...";
                  }else echo $donne['commentaire'];
                 ?></td>
               </tr>
                <?php } } ?>
            </tbody>
        </table>   </div>
        </form>
        
</span>
    </body>    
</html>    