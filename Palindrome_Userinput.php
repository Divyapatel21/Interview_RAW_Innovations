<?php


extract($_POST);                                   //Used extract() to import value from form
if(isset($submit))                                // Used isset() to verify the form value is null or not.

{ 
    $word = strrev($str);                         // reveresed string stored in $word using strrrev()function.
    if(strcmp($word,$str)==0)                     // strcmp() to compare reversed and actual string
    {
       $word="String is palindrome"; 
    }
    else
    {
        $word="String is not palindrome"; 
    }

}

?>
<!-- created a simple form for user's input and show the result -->

<!DOCTYPE html> 
<html>
    <head> <title>Check the entered string is pelindrome or not </title></head>
    <body>
        <h2>Find out whether the string is palindrome or not</h2>
        <form action="#" , method="POST" >
            <label>Enter a string:</label>

            <input type="text" name="str" value="<?php echo @$str ?>" required/> 
            <br></br>
            <input type="submit" name="submit" value="submit"/>
            <br><br>
            </br></br>
             <h3>The result is:</h3>
            <input type="text" value="<?php echo @$word ?>" />
        </form>
    </body>
</html>


