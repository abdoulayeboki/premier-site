<?php
$cle= (int)$_GET['cle'];
$employers=array();
$f = fopen("employer.txt","r+");
while(($ligne=fgets($f))){
$employers[]=json_decode($ligne,true);
}
fclose($f);
unset($employers[$cle]);
$data="";

foreach($employers as $ligne){
   $data=$data.json_encode($ligne)."\n" ;
}

file_put_contents("employer.txt",$data);
header("location:employer.php");
?>