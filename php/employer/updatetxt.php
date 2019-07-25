
<?php
// recuperation du nom du fichier
$contenu = stripslashes(nl2br(htmlentities($_POST['textarea'])));
//Ouverture du répertoire de destination
$fichierouvert = fopen (__DIR__.DIRECTORY_SEPARATOR."inclure.txt", "a+");
echo __DIR__;
//Copie du fichier
fwrite($fichierouvert, $contenu); 
//Fermeture du fichier
fclose ($fichierouvert);
echo "Merci on as enregistrer le message <br>";
echo "$contenu";
?>