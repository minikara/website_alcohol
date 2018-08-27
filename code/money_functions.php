

<?php

include ("config.php");

function EstimationMoneySpend ($pint, $wine, $glassOfAlcolpop, $bottleOfAlcopop, $sparklingWine, $spirit, $shot, $pricePint, $priceGlassOfWine, $priceGlassOfSparklingWine, $priceBottleOfAlcopop, $priceGlassOfAlcopop, $priceGlassOfSpirit, $priceShot)
{
    return $pint * $pricePint + $wine * $priceGlassOfWine + $glassOfAlcolpop * $priceGlassOfAlcopop + $bottleOfAlcopop * $priceBottleOfAlcopop + $sparklingWine * $priceGlassOfSparklingWine + $spirit * $priceGlassOfSpirit + $shot * $priceShot ; 
}

$estimationMoneySpend = EstimationMoneySpend ($_POST['pint'], $_POST['wine'], $_POST['Galcolpop'], $_POST['Balcolpop'], $_POST['sparWine'], $_POST['spirit'], $_POST['shot'], $pricePint, $priceGlassOfWine, $priceGlassOfSparklingWine, $priceBottleOfAlcopop, $priceGlassOfAlcopop, $priceGlassOfSpirit, $priceShot);

$twiceLessMoneySpend = $estimationMoneySpend / 2;


// Money save per week/mounth/year

function SpendPerWeek ($amounthPerWeek)
{
	return $amounthPerWeek;
}

function SpendPerMonth ($amounthPerWeek)
{
	return ($amounthPerWeek * 4.3333 );
}

function SpendPerYear ($amounthPerWeek)
{
	return ($amounthPerWeek * 52);
}

// money spend per week/month/year

$spendPerWeek = SpendPerWeek ($estimationMoneySpend);
$spendPerMonth = SpendPerMonth ($estimationMoneySpend);
$spendPerYear = SpendPerYear ($estimationMoneySpend);  

// money save per week/month/year if the person consum twice less alcohol per week

$savePerWeek = SpendPerWeek ($twiceLessMoneySpend);
$savePerMonth = SpendPerMonth($twiceLessMoneySpend);
$savePerYear = SpendPerYear($twiceLessMoneySpend);

// money save per week/month/year in terms of clothes, plan in europ and plan in the word if the person consum twice less alcohol per week 

function MoneySave ($amounthPerWeek, $amouthPerMonth, $amouthPerYear, $clothesPrice, $europePlan, $wordPlan)
{
	$clothesPerWeek = (int) ($amounthPerWeek / $clothesPrice);
	$clothesPerMonth = (int) ($amouthPerMonth / $clothesPrice);
	$clothesPerYear = (int) ($amouthPerYear / $clothesPrice);

	$europePerWeek = (int) ($amounthPerWeek / $europePlan);
	$europePerMonth = (int) ($amouthPerMonth / $europePlan);
	$europePerYear = (int) ($amouthPerYear / $europePlan);

	$wordPerWeek = (int) ($amounthPerWeek / $wordPlan);
	$wordPerMonth = (int) ($amouthPerMonth / $wordPlan);
	$wordPerYear = (int) ($amouthPerYear / $wordPlan);

	return array( 
		'clothes' => array ('week' => $clothesPerWeek , 'month' => $clothesPerMonth, 'year' => $clothesPerYear ),
		'europePlan' => array ('week' => $europePerWeek , 'month' => $europePerMonth, 'year' => $europePerYear),
		'wordPlan' => array ('week' => $wordPerWeek, 'month' => $wordPerMonth, 'year' => $wordPerYear));

}

// array in 2 dimensions of the money which could be save in terms of cloth/ plan in europe / plan in the word per week/month/year

$quantitySave = MoneySave($savePerWeek, $savePerMonth, $savePerYear, $clothesPrice, $europePlan, $wordPlan);


function AtLeastOne ($quantity)
{
	if ($quantity > 0)
		return true;
	elseif ($quantity == 0) 
		return false;
	else
		return "No correct quantity";

}
  

?>