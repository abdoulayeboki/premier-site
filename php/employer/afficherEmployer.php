<?php
//recuperer le contenudu  du fichier dans un tableau 
$employers=array();
$f = fopen("employer.txt","r");
while(($ligne=fgets($f))){
$employers[]=json_decode($ligne,true);
}
fclose($f);
?>
<!DOCTYPE HTML>
<html>
<meta charset="utf-8"/>
<title>calculatrice</title>
 <link rel="stylesheet" href="css/style.css"/> 
<body>
<div class="page">
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