<html>
<head>
<title>
<h1>1. Perkiraan Bulan Saat Ini</h1>
</head>
</title>
</html>
<?php
   // error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
    //$QueryState = $_GET['state'];
    //$QueryCity = str_replace(' ', '_', $_GET['city']);

    $json_string = file_get_contents("http://api.wunderground.com/api/13bc93ae177d93f9/astronomy/q/Australia/Sydney.json");   
    $json_a = json_decode($json_string);

        //pencarian variabel
    $lh = $json_a->{"moon_phase"}->{"ageOfMoon"};
    $lh2 = $json_a->{"moon_phase"}->{"phaseofMoon"};
    $lh3 = $json_a->{"moon_phase"}->{"hemisphere"};
	$lh4 = $json_a->{"moon_phase"}->{"current_time"}->{"hour"};
    $lh5= $json_a->{"moon_phase"}->{"current_time"}->{"minute"};
	$lh6 = $json_a->{"moon_phase"}->{"sunrise"}->{"hour"};
	$lh7 = $json_a->{"moon_phase"}->{"sunrise"}->{"minute"};
    

        //eksekusi variabel
    echo "umur bulan saat ini : ${lh}\n";
	echo "<br>";
    echo "fase bulan : ${lh2}\n";
	echo "<br>";
	echo "berada di bagian bumi manakah bulan itu ${lh3}\n";
	echo "<br>";
	echo "pada jam ke ${lh4}\n";
	echo "<br>";
	echo "pada menit ke ${lh5}\n";
	echo "<br>";
	echo "kita bisa melihat sunrise pada jam : ${lh6}\n";
	echo "<br>";
	echo "dan menit ke :${lh7}\n";
    

   
    
	

?>