


<table border=1 width=300>
<?php
$ligne=3;
$colonne=3;
  for ($i=0;$i<$ligne; $i++){
      echo'<tr>';
     for ($j=0;$j<$colonne; $j++){
      if(($j+$i)%2==0)
echo '<td>&nbsp</td>';
     else
echo '<td bgcolor=black>&nbsp</td>';
    }
    echo '</tr>';
  }

?>
</table>


<table>
<?php
$ligne=3;
$colonne=3;
  for ($i=0;$i<$ligne; $i++){
     for ($j=0;$j<$colonne; $j++){
      if(($j+$i)%2==0)
echo 'X ';
     else
echo '0 ';
    }
    echo '<br>'; 
  }

?>
</table>