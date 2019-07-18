<?php
 $prenom=$_POST['prenom'];
 $nom=$_POST['nom'];
 $genre=$_POST['genre'];
 $pays=$_POST['pays'];
 $php=$_POST['php'];
 $java=$_POST['java'];
 $js=$_POST['js'];
 $xml=$_POST['xml'];
 $c=$_POST['sql'];
 $sql=$_POST['sql'];
 $email=$_POST['email'];
 $date=$_POST['date'];
 $commentaire=$_POST['commentaire'];
 $obligatoir="champ obligatoir";

//  $tableau=array($prenom,$nom,$genre,$pays,$php,$email,$date,$commentaire);
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
    ),
    array(
        'prenom'=>$prenom,'nom'=>$nom,'genre'=>$genre,'pays'=>$pays,
        'langage'=>$php.", ".$java.", ".$js.", ".$c.", ".$sql.", ".$xml,
    'email'=>$email,'date'=>$date,'commentaire'=>$commentaire
    )
)
?>


<!DOCTYPE html>
<html>
    <head>
        <title>mon prmier site</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style1.css"/>
        
    </head>
    <body>
     <div class="page">
        <form method="post" action="personnes.php">
                       
        <table >
            <tr>
                 <td>Prenom</td>
                 <td><input type="text" name="prenom" placeholder="Prenom">
                <?php if(!isset($prenom))
                  echo '';
                  else if( $prenom=="")
                   echo  $obligatoir  ?>
            </td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" placeholder="Nom">
                <?php if(!isset($nom))
                  echo '';
                  else if( $nom=="")
                   echo  $obligatoir  ?>
            </td>
            </tr>
            <tr>
                <td>Genre</td>
                <td class="bouton">
                    <input type="radio" name="genre" value="masculin"/><label>masculin</label>
                    <input type="radio" name="genre" value="feminin"/><label>Feminin</label>
                    <?php if(!isset($genre))
                  echo '';
                  else if( $genre=="")
                   echo  $obligatoir  ?>
                </td>
            </tr>
            <tr>
                <td>Pays</td>
                <td><select name="pays">
                    <option value="senegal">Senegal</option>
                    <option value="usa">USA</option>
                    <option value="france">France</option>
                    <option value="mali">Mali</option>
                    <option value="canada">Canada</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Langage</td>
                <td><input type="checkbox" id="php" value="php" name="php"><label for="php">PHP</label>
                    <input type="checkbox" id="java" value="java" name="java"><label for="java">JAVA</label>
                    <input type="checkbox" id="js"  value="js" name="js"><label for="js">JS</label>
                    <input type="checkbox" id="c" value="c" name="c"><label for="c">C</label>
                    <input type="checkbox" id="xml" value="xml" name="xml"><label for="xml">XML</label>
                    <input type="checkbox" id="sql" value="sql"name="sql"><label for="sql">SQL</label>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" placeholder="email">
                <?php if(!isset($email))
                  echo '';
                  else if( $email=="")
                   echo  $obligatoir  ?>
            </td>
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td><input type="text" name="date" placeholder="date">
                <?php if(!isset($date))
                  echo '';
                  else if( $date=="")
                   echo  $obligatoir  ?></td>
            </tr>
            <tr>
                <td>Comentaire</td>
                <td><textarea name="commentaire"></textarea>
                <?php if(!isset($commentaire))
                  echo '';
                  else if( $commentaire==""){
                   echo  $obligatoir  ;
                   
                  }?></td>
            </tr>
         </table> 
             <button type="submit">Enregistrer</button>    
             <table >
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
                  <td><?php echo $donne['commentaire'] ?></td>
               </tr>
                <?php } ?>
            </tbody>
        </table>   
        </form>
        
</div>
    </body>    
</html>    