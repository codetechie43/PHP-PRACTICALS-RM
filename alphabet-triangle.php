<?php  
$alpha = range('A', 'Z');  
for ($i=5; $i>=1; $i--) {    
  for($j=0; $j<=$i; $j++) {    
     echo ' ';    
  }  
  $j--;  
for ($k=0; $k<=(5-$j); $k++) {    
    echo $alpha[$k];   
}    
echo "<br>\n";  
}  
?>  