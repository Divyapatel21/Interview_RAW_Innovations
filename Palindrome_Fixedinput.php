<?php

// PHP code to check the string is Palindrome or not with fix value

function palindrome($string)
{
       if($string == strrev($string))      // reveresed string and actual string comparision 
        {
            return 1;                       // If actual string matches to reveresed string it returns true
        }
        else
        {   
            return 0;
        }


};

// Driver Code

$word = "Approved";
if ($word ==! null)
{

if(palindrome($word))
{
	echo "String is palindrome";
}
else 
{
    echo "String is not a plindrome";
}

}

?>