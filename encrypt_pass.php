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
        $string .= md5( "k49fdk4030d" );
        $string  = md5( $string );
        
        return $string;
    }
    