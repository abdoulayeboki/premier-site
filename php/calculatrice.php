<?php
$nombre1=$_POST['nombre1'];
$nombre2=$_POST['nombre2'];
$operateur=$_POST['operateur'];
 $resultat;
?>

<!DOCTYPE HTML>
<html>
<meta charset="utf-8"/>
<title>calculatrice</title>
<link rel="stylesheet" href="style.css"/>
<body>
<div class="page">
<form method="POST" action="calculatrice.php">
<label>Nombre 1</label>
<input type="text" name="nombre1" value="<?php echo $nombre1 ?>"/>
<p>
<?php
if(!(isset($_POST['nombre1'])))
echo '';
else if( $nombre1==""  || !(is_numeric($_POST['nombre1'])))
 echo ("Erreur: entrer une bonne valeur");
?> </p>
<label>Nombre 2</label>
<input type="text" name="nombre2" value="<?php echo $nombre2 ?>"/> 
<p>
<?php
if(!(isset($_POST['nombre2'])))
echo '';
else if($nombre2=='' || !(is_numeric($_POST['nombre2'])))
 echo ("Erreur: entrer une bonne valeur");
?> </p> <br>
<label>operateur</label>
<select name="operateur">
<option value="+">addtion</option>
<option value="-">soustraction</option>
<option value="*">multiplication</option>
<option value="/">division</option>
<option value="%">modulo</option>
</select><p>
<?php ?> </p> <br>
<button type="submit">calculer</button>
<div class="resultat"><?php 
if(is_numeric($nombre1) && is_numeric($nombre2)){
    switch($operateur){
        case '+':$resultat=$nombre1+$nombre2;
        break;
        case '-':$resultat=$nombre1-$nombre2;
        break;
        case '*':$resultat=$nombre1*$nombre2;
        break;
        case '/':
            if($nombre2==0)
             echo("erreur : division par 0 : division impossible");
            else $resultat=$nombre1/$nombre2;
        break;
        case '%':
        if($nombre2==0) echo("erreur : division par 0 modulo impossible");
        else $resultat=$nombre1%$nombre2;
        break;
    }
    echo $nombre1." ".$operateur." ".$nombre2." = ".$resultat;
}
?> </div>

</table>
</form>
</div>
</body>
</html>+