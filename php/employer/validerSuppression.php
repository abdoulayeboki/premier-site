<!DOCTYPE HTML>
<html>
<meta charset="utf-8"/>
<title>calculatrice</title>
<!-- <link rel="stylesheet" href="css/style.css"/> -->
<body>
<div class="page">
    <form method="post" action="supprimerEmployer.php?cle='<?php echo $_GET['cle'] ?>'">
        <label>voulez-vous supprimer</label>
    <button><input type="submit" name="nom" value="non"/> </button>
    <button><input type="submit" name="oui" value="oui"/> </button>
    </form>
</div>    
</body>
</html>