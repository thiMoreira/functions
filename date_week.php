<?php 
/*
| ------------------------------------------------------------------------------------------
| Function to write the day of the week in full along with the day and year
| ------------------------------------------------------------------------------------------
|
*/


$months = array (
				1 => "Janeiro", 
				2 => "Fevereiro", 
				3 => "Março", 
				4 => "Abril", 
				5 => "Maio", 
				6 => "Junho", 
				7 => "Julho", 
				8 => "Agosto", 
				9 => "Setembro", 
				10 => "Outubro", 
				11 => "Novembro", 
				12 => "Dezembro"
				);


$daysWeek = array (
				1 => "Segunda-Feira",
				2 => "Terça-Feira",
				3 => "Quarta-Feira",
				4 => "Quinta-Feira",
				5 => "Sexta-Feira",
				6 => "Sábado",
				0 => "Domingo"
				);


 $today           = getdate();

 $day             = $today["mday"];
 $month           = $today["mon"];
 $nameMonth       = $months[$mes];
 $age             = $today["year"];
 $dayWeek         = $today["wday"];
 $nameDayWeek     = $daysWeek[$dayWeek];

 echo "Hoje é $nameDayWeek, $day de $nameMonth de $age";
