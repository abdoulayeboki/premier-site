
<?php
$n =  43951789;
$u = -43951789;
$c = 65; // ASCII 65 is 'A'

// notez le double %%, cela affiche un caractère '%' littéral
printf("%%b = '%0'\n", $n); // représentation binaire
printf("%%c = '%c'\n", $c); // affiche le caractère ascii, comme la fonction chr()
printf("%%d = '%d'\n", $n); // représentation standard d'un entier
printf("%%e = '%e'\n", $n); // notation scientifique
printf("%%u = '%u'\n", $n); // représentation entière non signée d'un entier positif
printf("%%u = '%u'\n", $u); // représentation entière non signée d'un entier négatif
printf("%%f = '%f'\n", $n); // représentation en virgule flottante
printf("%%o = '%o'\n", $n); // représentation octale
printf("%%s = '%s'\n", $n); // représentation chaîne de caractères
printf("%%x = '%x'\n", $n); // représentation hexadécimal (minuscule)
printf("%%X = '%X'\n", $n); // représentation hexadécimal (majuscule)

printf("%%+d = '%+d'\n", $n); // indication du signe pour un entier positif
printf("%%+d = '%+d'\n", $u); // indication du signe pour un entier négatif
$pr_id = 145;
$pr_id = sprintf("%05d", $pr_id);
echo $pr_id;
?>
