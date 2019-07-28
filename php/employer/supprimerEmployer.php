<?php
$cle= (int)$_GET['cle'];
$oui=$_POST['oui'];
$non=$_POST['non'];
$employers=array();
$f = fopen("employer.txt","r+");
while(($ligne=fgets($f))){
$employers[]=json_decode($ligne,true);
}
fclose($f);
if($oui)
unset($employers[$cle]);
$data="";

foreach($employers as $ligne){
   $data=$data.json_encode($ligne)."\n" ;
}

file_put_contents("employer.txt",$data);
header("location:afficherEmployer.php");
?>