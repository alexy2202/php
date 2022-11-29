
1.
<?php
$i = 0;
for ($i;$i <=150; $i++) {
if ($i%2 != 0){
    echo $i ." ";
}
}
?>

2.<?php
for ($i = 0; $i <= 500; $i++) {
    echo "Je dois faire des sauvegardes régulières de mes fichiers"."<br>";
 }
?>


3.    <?php 
function table($nbr, $nbr2)
{
    $table = '<table border="1"><th></th>';

    for ($a=0; $a <= $nbr; $a++) {
    $table .= '<th>'.$a."</th>"; }

    for ($a=0; $a <= $nbr; $a++) {
        $table .= '<tr><th>'.$a.'</th>';
        for ($b=0; $b <= $nbr2 ; $b++) {
            $table .= '<td>'.$a*$b.'</td>';
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    return $table;
}

echo table(12,12);
?>