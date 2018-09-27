<?php

// price of alcohol

	$pricePint = 5;
    $priceGlassOfWine = 4;
    $priceGlassOfSparklingWine = 4;
    $priceBottleOfAlcopop = 4;
    $priceGlassOfAlcopop = 2.5;
    $priceGlassOfSpirit = 6;
    $priceShot = 2.5;
    $priceCans = 2;
    $priceHomeGlasse =1.5;
    $priceBuckfastBottles = 15;
    $priceNaggin = 7;
    $priceDaddyNagginShoulder350 = 12;
    $priceDaddyNagginShoulder700 = 16;


    $prices = "<strong>In a bar/nightclub</strong> :<br />Pint : € " . $pricePint . "<br />Glass of wine : € " . $priceGlassOfWine . "<br />Glass of Alcoholpop : € " . $priceGlassOfAlcopop . "<br />Bottle of Alcoholpop : € " . $priceBottleOfAlcopop . "<br />Glass of sparkling wine : € " . $priceGlassOfSparklingWine . "<br />Spirit : € " . $priceGlassOfSpirit ."<br />Shot : € " .$priceShot . "<br /><strong> At Home</strong> :<br />Can : € " . $priceCans . "<br />Glass of any wine : € " . $priceHomeGlasse . "<br />Buckfast Bottle : € " . $priceBuckfastBottles . "<br />Naggin : € " . $priceNaggin . "<br />Daddy Naggin/Shoulder 350ml : € " . $priceDaddyNagginShoulder350 ."<br />Daddy Naggin/Shoulder 700ml : € " .$priceDaddyNagginShoulder700;

// units

    $uPint = 2;
    $uBalcolpop = 2;
    $uGalcolpop =0.5;
    $uCans = 2.1;
    $uHomeGlasse = 1.7;
    $uBuckfastBottle = 11.5;
    $uNaggin = 8;
    $uDaddyNagginShoulder350 = 14;
    $uDaddyNagginShoulder700 = 28;




// consumption of alcohol
    
    $womenRecommendation = 11;
    $menRecommendation = 17 ;
    $mincons = 0;
    $maxcons = 50;
    $maxOcasion = 30;
    $maximumDaysOfAlcohol = "4 to 5";
    $maximumPerSession = 6;

 
 // price of comparaison things

    $clothesPrice = 40;
	$europePlan = 300;
	$wordPlan = 900;
	$goodlunch = 10;

    $comparaisonPrices = "Lunch : € " . $goodlunch . "<br />Clothes : € " . $clothesPrice . "<br />Return flight for Europe : € " . $europePlan . "<br />Return flight for Bali or the US : € " . $wordPlan;

// verification

    $port = "http://localhost:16443/alcohol_website/code/formular.php";

?>