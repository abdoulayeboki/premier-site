<?php
$prenom=isset($_POST['prenom'])?$_POST['prenom']:'';
$nom=isset($_POST['nom'])?$_POST['nom']:'';
$genre=isset($_POST['genre'])?$_POST['genre']:'';
$pays=isset($_POST['pays'])?$_POST['pays']:'';
$php=isset($_POST['php'])?$_POST['php']:'';
$java=isset($_POST['java'])?$_POST['java']:'';
$js=isset($_POST['js'])?$_POST['js']:'';
$xml=isset($_POST['xml'])?$_POST['xml']:'';
$c=isset($_POST['c'])?$_POST['sql']:'';
$sql=isset($_POST['sql'])?$_POST['sql']:'';
$email=isset($_POST['email'])?$_POST['email']:'';
$date=isset($_POST['date'])?$_POST['date']:'';
$commentaire=isset($_POST['commentaire'])?$_POST['commentaire']:'';

$tableau=array($prenom,$nom,$genre,$pays,$php,$email,$date,$commentaire);
?>


<!DOCTYPE html>
<html>
    <head>
        <title>mon prmier site</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css"/>
        
    </head>
    <body>
     <div class="page">
        <form method="post" action="personnes.php">
                       
        <table>
            <tr>
                <td>Prenom</td>
                <td><input type="text" name="prenom" placeholder="Prenom"></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" placeholder="Nom"></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td class="bouton">
                    <input type="radio" name="genre" value="m"/><label>masculin</label>
                    <input type="radio" name="genre" value="f"/><label>Feminin</label>
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
                <td><input type="checkbox" id="php" name="php"><label for="php">PHP</label>
                    <input type="checkbox" id="java" name="java"><label for="java">JAVA</label>
                    <input type="checkbox" id="js" name="js"><label for="js">JS</label>
                    <input type="checkbox" id="c" name="c"><label for="c">C</label>
                    <input type="checkbox" id="xml" name="xml"><label for="xml">XML</label>
                    <input type="checkbox" id="sql" name="sql"><label for="sql">SQL</label>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" placeholder="email"></td>
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td><input type="date" name="date" placeholder="date"></td>
            </tr>
            <tr>
                <td>Comentaire</td>
                <td><textarea name="commentaire"></textarea></td>
            </tr>
         </table> 
             <button type="submit">Enregistrer</button>    
             <table border="0.1">
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
             <tr>
                  <td><?php echo $tableau[0] ?></td>
                  <td><?php echo $tableau[1] ?></td>
                  <td><?php echo $tableau[2] ?></td>
                  <td><?php echo $tableau[3] ?></td>
                  <td><?php echo $tableau[4] ?></td>
                  <td><?php echo $tableau[5] ?></td>
                  <td><?php echo $tableau[6] ?></td>
                  <td><?php echo $tableau[7] ?></td>
               </tr>
            </tbody>
        </table>   
        </form>
        
</div>
    </body>    
</html>    