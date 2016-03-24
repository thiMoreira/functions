<?php

/*
| ------------------------------------------------------------------------------------------
| Function calculate age through birth date
| ------------------------------------------------------------------------------------------
|
*/
	function ageCalculate( $birthdate )
	{

		$birthdate = explode( "-", $birthdate );

		$date  = date( "d-m-Y" );
		$date  = explode( "-", $date );
		$years = $date[2] - $birthdate[2];

		if ( $birthdate[1] >= $date[1] )
		{

			if ( $birthdate[0] <= $date[0] )
			{
				return $years; break;

			}else{

				return $years-1; break;
			} 

		}else{

			return $years;
		} 
	} 

	$age = ageCalculate("17-03-1980");

	echo "$age years old"; //27 years
 