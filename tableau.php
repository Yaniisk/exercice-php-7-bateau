<?php
$tab = array();
$y=0;
for ($i=0; $i <100 ; $i++) 
{ 
    $tab[] =rand(0,100);    
}
for ($i=0; $i<=100 ; $i++) 
{ 
   
    $y=0;
    for ($j=0; $j <100 ; $j++) 
    { 
       if ($i==$tab[$j]) 
       {
           $y++; 
       } 
       
    }
    echo"<span";
    if ($y>2) 
    {
        ?>
        
        style="background-color:red; border:solid 1px black;"

        <?php
    }
    echo ">La valeur " .$i." est presente ".$y." fois .</span>";
    echo"<br>";
}