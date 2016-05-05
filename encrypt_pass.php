<?php

/*
| ------------------------------------------------------------------------------------------
| Encrypt password
| ------------------------------------------------------------------------------------------
|
*/

    function encryptPass( $password )
    {
        $string  = strrev( $password );
        $string  = str_repeat( md5( $password ) , 2 );
        $string  = md5( $string );
        $string .= md5( "43kdek#@dsdk74c85c48d5!4fd8#fafdakdj#49" );
        $string  = md5( $string );
        
        return $string;
    }
    