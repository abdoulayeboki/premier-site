<?php
$cle=$_GET['cle'];
//$employer=array();
if(isset($_POST['matricule']) && isset($_POST['prenom']) &&
 isset($_POST['nom']) && isset($_POST['salaire']) && 
 isset($_POST['tel']) && isset($_POST['email']) ){
$matricule=trim($_POST['matricule']);
 $prenom=trim($_POST['prenom']);
 $nom=trim($_POST['nom']);
 $salaire=trim($_POST['salaire']);
 $tel=trim($_POST['tel']);
 $date=trim($_POST['date']);
 $email=trim($_POST['email']);
 // ecrire sur le fichier
//  $f = fopen("employer.txt","a+");
// fwrite($f,json_encode($employer)."\n");
// fclose($f);
}
//header("location:employer.php");
//recuperer le contenudu  du fichier dans un tableau 
$employers=array();
$f = fopen("employer.txt","r");
while(($ligne=fgets($f))){
$employers[]=json_decode($ligne,true);
}
//var_dump($employers);
fclose($f);
$f=fopen("employer.txt",'w');
fclose($f);
//unset($employers[$cle]);
$employers[$cle]=array(
    "matricule"=>$matricule,
    "prenom"=>$prenom,
    "nom"=>$nom,
    "salaire"=>$salaire,
    "tel"=>$tel,
    "date"=>$date,
    "email"=>$email
);
//var_dump($employers);
 $data="";
 //die("erreur");
 foreach($employers as $ligne){
   $data=$data.json_encode($ligne)."\n" ;
}


  $f = fopen("employer.txt","a+");
 fwrite($f,$data);
 fclose($f);
 header("location:employer.php");
?>
