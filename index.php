<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tingimuslaused</title>
</head>
<body>
	<h2>Tingimuslaused</h2>
	<?php
	$a = 4;
	$b = 5;
	if ($a < $b){
		echo "4 on väiksem kui 5";
		// Kuna see on tõene, siis väljastatakse see tekst.
		echo "<br>";
	}
	$a = 8;
	$b = 5;
	if ($a < $b) {
		echo "8 on väiksem kui 5";
	}   
	elseif ($a > $b) {
		echo "8 on suurem kui 5";
		// Kuna see on tõene, siis väljastatakse see tekst.
		echo "<br>";
	}
	elseif ($a == $b) {
		echo "8 on 8";
	}
	?>
	<?php
    if (4 < 4) {
        echo "4 on väiksem kui 4";
    } 
    elseif (4 == 4) {
        // Kuna see on tõene, siis väljastatakse see tekst.
        echo "4 on 4";
        echo "<br>";
    } 
    elseif (4 > 4) {
        echo "4 on suurem kui 4";       
    }
    $age = 20;
    $age_limit = 18;
    $n = $age - $age_limit;
    if ($age < $age_limit) {
		echo "Kahjuks olete liiga noor. Te peate olema vähemalt $age_limit aastat vana. Tulge $n aasta pärast tagasi";
	} 
	elseif ($age > $age_limit) {
        echo "Olete piisavalt vana. Tulge edasi!";
        // Kuna see on tõene, siis väljastatakse see tekst.
        echo "<br>";
        }
    $age = 18;
    if ($age < $age_limit) {
		echo "Kahjuks olete liiga noor. Te peate olema vähemalt $age_limit aastat vana. Tulge $n aasta pärast tagasi";
	} 
	elseif ($age > $age_limit) {
        echo "Olete piisavalt vana. Tulge edasi!";
        }
    elseif ($age = $age_limit) {
		echo "Olete piisavalt vana. Tulge edasi!";
		echo "<br>";
	}

	$muut1 = 3;
	$muut2 = 3;
	$muut3 = 4;
	$muut4 = 5;
	if (($muut1==$muut2) && ($muut3>$muut4)) {
		echo "Muutuja1 ja muutuja2 on võrdsed ning muutuja3 on suurem kui muutuja4";
		echo "<br>";
		// Infot ei kuvata, sest üks osa lausest on väär, ent tõesed peavad olema mõlemad.
	}
	if (($muut1==$muut2) || ($muut3>$muut4)) {
		echo "Muutuja1 ja muutuja2 on võrdsed või muutuja3 on suurem kui muutuja4";
		echo "<br>";
		// Info kuvatakse, sest üks osa lausest on tõene ning sellest piisab.
	}
	if (!isset($nothing)) {
        echo "Mina peaksin nähtavale tulema.";
    }
    ?>
    <h3>Switch</h3>
    <?php
    $current_language = "ru";
    switch($current_language) {
    case 'et':
    	echo "Tere! Kuidas sul läheb?";
    break;
    case "ru":
    	echo "Здравствуйте! Как вы делаете?";
    break;  
    case 'fi':
    	echo "Hei! Miten menee?";
    break;
    }
	?>
	</body>
	</html>
		