<?php

function validateEmail($email)
{
    //check @ present 
    if(strpos($email,'@') == false)
    {
        return false;
    }
    else
    {
        //check @ present in 1st or last character
        if($email[0] == "@" || $email[strlen($email) - 1] == "@")
        {
            return false;
        }

        else
        {
            //valid domains
            $domain = ["com","org","net"];

            $dom = explode(".", $email);

            //check the email domain present is valid
            if(!in_array($dom,$domain))
            {
                return false;
            }

            else
            {
                //explode and check if name or dom is empty
                list($name,$domain) = explode("@",$email,2);
               if($name == "" || $domain == "" )
               {
                return false;
               }
               else
               {
                echo " validated";
                return true;
               }
            }


        }
    }
}



?>