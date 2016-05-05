<?php
/*
| ------------------------------------------------------------------------------------------
| Functions meet sign through the day and month
| ------------------------------------------------------------------------------------------
|
*/

function sign( $d, $m ) 
{

    if ($m == "3"  AND $d >= "20")     { $sign = "Áries";       }   //Áries       20/03 a 20/04
    elseif ($m == "4"  AND $d <= "20") { $sign = "Áries";       }   //Áries       20/03 a 20/04
    elseif ($m == "4"  AND $d >= "21") { $sign = "Touro";       }   //Touro       21/04 a 20/05
    elseif ($m == "5"  AND $d <= "20") { $sign = "Touro";       }   //Touro       21/04 a 20/05
    elseif ($m == "5"  AND $d >= "21") { $sign = "Gêmeos";      }   //Gêmeos      21/05 a 20/06
    elseif ($m == "6"  AND $d <= "20") { $sign = "Gêmeos";      }   //Gêmeos      21/05 a 20/06
    elseif ($m == "6"  AND $d >= "21") { $sign = "Câncer";      }   //Câncer      21/06 a 21/07
    elseif ($m == "7"  AND $d <= "21") { $sign = "Câncer";      }   //Câncer      21/06 a 21/07
    elseif ($m == "7"  AND $d >= "22") { $sign = "Leão";        }   //Leão        22/07 a 22/08
    elseif ($m == "8"  AND $d <= "22") { $sign = "Leão";        }   //Leão        22/07 a 22/08
    elseif ($m == "8"  AND $d >= "23") { $sign = "Virgem";      }   //Virgem      23/08 a 22/09
    elseif ($m == "9"  AND $d <= "22") { $sign = "Virgem";      }   //Virgem      23/08 a 22/09
    elseif ($m == "9"  AND $d >= "23") { $sign = "Libra";       }   //Libra       23/09 a 22/10
    elseif ($m == "10" AND $d <= "22") { $sign = "Libra";       }   //Libra       23/09 a 22/10
    elseif ($m == "10" AND $d >= "23") { $sign = "Escorpião";   }   //Escorpião   23/10 a 21/11
    elseif ($m == "11" AND $d <= "21") { $sign = "Escorpião";   }   //Escorpião   23/10 a 21/11
    elseif ($m == "11" AND $d >= "22") { $sign = "Sagitário";   }   //Sagitário   22/11 a 21/12
    elseif ($m == "12" AND $d <= "21") { $sign = "Sagitário";   }   //Sagitário   22/11 a 21/12
    elseif ($m == "12" AND $d >= "22") { $sign = "Capricórnio"; }   //Capricórnio 22/12 a 21/01
    elseif ($m == "1"  AND $d <= "21") { $sign = "Capricórnio"; }   //Capricórnio 22/12 a 21/01
    elseif ($m == "1"  AND $d >= "21") { $sign = "Aquário";     }   //Aquário     21/01 a 18/02
    elseif ($m == "2"  AND $d <= "18") { $sign = "Aquário";     }   //Aquário     21/01 a 18/02    
    elseif ($m == "2"  AND $d >= "19") { $sign = "Peixes";      }   //Peixes      19/02 a 19/03
    elseif ($m == "3"  AND $d <= "19") { $sign = "Peixes";      }   //Peixes      19/02 a 19/03
    else   { $sign = "Não Reconhecido"; }

    return $sign;
} 

$sign = sign( "17", "03");

echo "Seu signo é : $sign";


 