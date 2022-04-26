
<?php

echo "Table of 4:" . "  " . "  ";
echo "Table of 6:<br>";   
$a=4;
$b=6;

    for ($i = 1; $i <= 10; $i++) 
    {
        $tab4=$a*$i;
        $tab6=$b*$i;

        echo " $a * $i  = $tab4"  . "  " . "  ". "  " . "   ";
        echo " $b * $i  = $tab6 <br>";  
    }


?>

<br>
<br>
<?php                                           #code by fixed value

$arr = array(12,45,40,24,60);

echo "Numbers multiplier of 4 and 6:<br>";

foreach ($arr as $value)
{
        $mul4 = $value / 4;
        $mul6 = $value / 6;

        if (is_int($mul4) ||is_int($mul6))
        {
            echo  $value. "<br>";
        }
        
    }
        
?>

<?php
