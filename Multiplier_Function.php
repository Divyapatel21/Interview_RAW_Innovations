
<!DOCTYPE html>

<html>
    <head><label>Found multiplier of 4 and 6 from set of number<br><br></label></head>
    <body>
        <form action="#" , method="POST" >
            
            <label>Enter a number:  </label><br>

          <?php 
             for ($i=0; $i < 6; $i++)                                                       # created loop to add 6 entries from user
              { 
               print "<input type=number name=num$i size=2 required/> <br>";
              }
            ?> 
           <br></br>
            <input type="submit" name="submit" value="submit" size=100/>
       
        </form>
    </body>
</html>

<?php

$arr = array();                                                                         #created one array to store the user input 
if (isset($_POST['num0']))                                                              #fetch data from form and start storing in array

{
  for ($i=0; $i < 6; $i++) 
  { 
    $arr[$i] = $_POST['num'.$i];
  }

echo "<pre> Inserted Value in ";      
print_r($arr);                                                              # pring the entered data in array
echo "</pre>";

function find_multiplier_of($arr)                                               
{
    foreach ($arr as $value)                                                #take all array numbers and devide by 4 and 6 
    {
        $mul4 = $value / 4;  
        $mul6 = $value / 6;

        if (is_int($mul4) || is_int($mul6))                                 #to verify whether the result is integer or not 
        {
            $final_array=array();
                    
            array_push($final_array,$value);                                   # Result is integer means the $value (array number) is multiplier of 4 and 6 
    
            print_r($final_array);                                             # push all the numbers in another array $final_array
        }
       
    }
    
}

echo "<br/>";

echo "Numbers those are multiplier of 4 and 6: <br>";
find_multiplier_of($arr);
echo "<br>";
// print_r($arr);

}
    
?>