<!DOCTYPE html>
<html>
<?php include "head.php";?>
<?php include_once "db.php";
Connection();

if(isset($_POST["submit"])){
	addFun();
}
?>
  
<body>


<a  class="formular" href="formular.php">kontakt</a>
<a href="update.php">update</a>
<a href="delete.php">delete</a>
<a href="injectionsql.php">injection</a>
<a href="get.php">get</a>
<a href="cookie.php">cookies</a>
  <a href="section1.php">section1</a>
  <a href="section2.php">section2</a>

   <form action="index.php" method="post" >

      <input type="text" placeholder="Meno" name="username"><br>
	  <input type="password" placeholder="Heslo" name="password"><br>
	  <input type="submit" value="Odoslat" name="submit"><br>
   </form>

  
</body>
</html>



<?php
	//komentar  http://localhost/ucimsaphp/index.php     http://localhost/phpmyadmin/
	 $name = "yaro je tu";
	 echo"<p>toto je odstavec</p>";
	 echo"<h1> yaro je tu</h1>";
     ?>

 <h1><?php echo $name ?></h1></header>

	 <main><h2>serus</h2></main>

<?php 
	  $meno = "Yaro";
	  $mzda = 10000;
			echo $meno ." ".  $mzda;
			echo  "<br>";
			echo 20+10;
			echo  "<br>";
//pole
	 $zamestnanci = ["David", "Madar", "Hungar"]; 
	 $mix = [20, "Peter", "<h1>Nadpis</h1>"];
	        echo $zamestnanci[0];
			echo  "<br>";
	    print_r($zamestnanci);
			echo  "<br>";

//asocialne pole
	$simsonovci = ["Bart" => "rostak" , "Marge" => "modre vlasy", "Homer" => "kobliha"];
	echo $simsonovci["Bart"];
	echo  "<br>";
	echo $simsonovci["Homer"];
	echo  "<br>";
	print_r ($simsonovci);
	echo  "<br>";

	$heslo = "123a";
	if($heslo ==  "123a"){
		echo("prihlasil si sa");
	} else {
        echo("zle heslo");
	}
	echo  "<br>";

	//elseif
	$pozice = "hacker";
	if($pozice == "programator"){echo"ake vies programovacie jazyky?";}
	elseif ($pozice == "designer") {
		echo("aké poznaš nastroje na práci s designer?");
	}
	elseif($pozice == "hacker"){
		echo"jake poznaš typy utokov?";
	} else {
		echo"chyba take nepoznam ";	}
		echo  "<br>";
	// rovna sa ==
	// identicka schoda === dava pozor aj na datovy typ 
	// porovavani < , > , <= , >=, <> (nerovna sa)
	// nerovna sa !=
	// nie su identicke !== dava pozor aj na datovy typ 
	// && , ||

//switch
	$job = "sekretarka";
       switch($job){
		case "hacker":
		   echo "Aké znaš typy utokov?";
		      break;
		case 'programator':
			echo "Aké poznaš programatorké jazyky?";
			  break;
		case "sekretarka":
			echo "čo vieš robiť v exceli ? ";
			  break;
			default:
			echo"error braško";
		echo"<br>";
	   }


//cyklus while
    $pocitadlo	= 5;
	while($pocitadlo < 10 ){
		echo "ahoj";
		echo "<br>";
		$pocitadlo = $pocitadlo + 1;
	}

//cyklus for
	for ($i = 0; $i <=10; $i++){
       echo $i;
       echo "<br>";
	}
	//$i = $i + 1;     ,$i++ skrateny zapis

//cyklus foreach
	$names = ["jerry" , "madar" , "jaro"];
	foreach ($names as $zamestanec15) {
		echo $zamestanec15;
		echo "<br>";
	}

//funkcie
  function pozdrav(){
      echo "ahoj ";
	  echo "<br>";
	 };
  function score(){
	 echo "tvoje score je: ";
	}    

  function init(){
		pozdrav();
		score();
	}

	init();
	echo"<br>";

// funkcie a paramentri

function pozdravP($jmeno){
	echo"ahoj ".$jmeno;
	echo"<br>";
  }

  pozdravP("david");
  pozdravP("hungar");
  pozdravP("BRANO");

//funkcia calculator

function calculator($n1, $n2){
  $suma = $n1 + $n2;
  echo $suma;
  echo "<br>";
}

calculator(10,30);


//funkcia a return

  function vek ($rokNarodeni){
       return 2020 - $rokNarodeni;

  }
   $vysledokek  = vek(2000);

   if($vysledokek >= 18){ echo "je dospely";}
   else{ echo "neni dospely";}
   echo"<br>";

//global scope  

 $x = "vonku"; 
  function zmenaX(){
  global $x;
  $x = "dnu";   //local scope
  }
 echo $x;
 echo"<br>";
 zmenaX();
 echo $x;
 echo"<br>";


//konštanta nema $
define("rokNarodenia" , 1986);
   echo rokNarodenia;

  echo"<br>";

const mojeKonstanta = "David";
	echo mojeKonstanta;

	echo"<br>";

//matematicke funkcie

 echo pow(2,4);  // 2 na 4 
     echo"<br>";
 echo rand(5,1000000); // nahodne čislo
     echo"<br>";
 echo sqrt(25);  // druha odmocnina
    echo"<br>";
echo ceil (4.2); // zaokruhlovanie nahor
   echo"<br>";
echo floor(3.8); // zaokruhlovanie nadol 
   echo"<br>";
echo round(2.2); // normalne zaokruhlovanie
	echo"<br>";

//string funkcie

 $string  = "Ahoj";

 echo  strlen($string);  //pocet znakov
 echo"<br>";
 echo strtoupper($string); // zmeni vsetko na velke pismena
echo"<br>";
echo strtolower($string); // zmeni vsetko na male pismena 
echo"<br>";

//pole funkcie

$seznam = [200,100,345,111];
echo max($seznam); // vypise max hodnotu zo seznamu
echo"<br>";
echo min($seznam); // vypise minimalnu hodnotu 
echo"<br>";
//echo nedokaze vypisat pole
sort($seznam); // postupne vypise podla velkosti
print_r($seznam);
echo"<br>";



	
	?>








