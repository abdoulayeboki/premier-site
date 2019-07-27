<?php
//recuperer les valeurs modifiées 
$cle=$_GET['cle'];
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
}
//recuperer le contenudu  du fichier dans un tableau 
$employers=array();
$f = fopen("employer.txt","r");
while(($ligne=fgets($f))){
$employers[]=json_decode($ligne,true);
}
fclose($f);
//vider le fichier
$f=fopen("employer.txt",'w');
fclose($f);
//remplaçons la ligne modifié
$employers[$cle]=array(
    "matricule"=>$matricule,
    "prenom"=>$prenom,
    "nom"=>$nom,
    "salaire"=>$salaire,
    "tel"=>$tel,
    "date"=>$date,
    "email"=>$email
);
//recupéron nos données du tableaus $employers sous forme de chaine de caractere
 $data="";
 foreach($employers as $ligne){
   $data=$data.json_encode($ligne)."\n" ;
}

//inserons les données dans le fichier vide
$f = fopen("employer.txt","a+");
 fwrite($f,$data);
 fclose($f);
 //redirigons vers employer.php
 header("location:employer.php");
?>
