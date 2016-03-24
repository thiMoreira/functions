<?php
/*
| ------------------------------------------------------------------------------------------
| Functions Manipulation with dates, know next year, month, day after knowing the date. 
| May also know experição of certain event.
| ------------------------------------------------------------------------------------------
|
*/


function dueCalculate( $date )
{
	$newDate = explode( "/", $date );  
	$day     = $newDate[0];
	$month   = $newDate[1];
	$eyar    = $newDate[2];

	// To find out which date from now 5 days

	echo date( 'd/m/Y', mktime( 0, 0 , 0 , $month , $day + 5 , $eyar ) );

	// To find out which be day tomorrow

	echo date( 'd/m/Y', mktime( 0 , 0 , 0 , $month , $day + 1 , $eyar ) );

	// To find out next month

	echo date( 'd/m/Y',mktime(0,0,0,$month   + 1,$day    ,$eyar ) );

	// to find out next year

	echo date( 'd/m/Y', mktime( 0 , 0 , 0 , $month , $day , $eyar + 1 ) );

	// Using : echo dueCalculate("10/03/2016");
 
}




/*
| ------------------------------------------------------------------------------------------
| Calculate due date slip by simply
|
| ------------------------------------------------------------------------------------------
|
*/



 $dateCurrent		= strtotime( date("Y-m-d") );  
 
 $dateExpires		= strtotime( "2016-03-30" );  
 
 echo ( $dt_atual > $dt_expira ) ? "Seu anuncio expirou! Deseja renewD?" : "Anuncio ativo<br>";

 

