

<?php

include ("config.php");

// estimation of the money spend according to the value in the file config.php


function EstimationMoneySpend ($pint, $wine, $glassOfAlcolpop, $bottleOfAlcopop, $sparklingWine, $spirit, $shot, $pricePint, $priceGlassOfWine, $priceGlassOfSparklingWine, $priceBottleOfAlcopop, $priceGlassOfAlcopop, $priceGlassOfSpirit, $priceShot)
{
    return $pint * $pricePint + $wine * $priceGlassOfWine + $glassOfAlcolpop * $priceGlassOfAlcopop + $bottleOfAlcopop * $priceBottleOfAlcopop + $sparklingWine * $priceGlassOfSparklingWine + $spirit * $priceGlassOfSpirit + $shot * $priceShot ; 
}


// calculation of the estimation of the money spend according to the function EstimationMoneySpend ans the data that the user have enter in the form.

$estimationMoneySpend = EstimationMoneySpend ($_POST['pint'], $_POST['wine'], $_POST['Galcolpop'], $_POST['Balcolpop'], $_POST['sparWine'], $_POST['spirit'], $_POST['shot'], $pricePint, $priceGlassOfWine, $priceGlassOfSparklingWine, $priceBottleOfAlcopop, $priceGlassOfAlcopop, $priceGlassOfSpirit, $priceShot);

$twiceLessMoneySpend = $estimationMoneySpend / 2;


// Money save per week/mounth/year

function SpendPerMonth ($amounthPerWeek)
{
	return ($amounthPerWeek * 4.3333 );
}

function SpendPerYear ($amounthPerWeek)
{
	return ($amounthPerWeek * 52);
}

// money spend per week/month/year

$spendPerMonth = SpendPerMonth ($estimationMoneySpend);
$spendPerYear = SpendPerYear ($estimationMoneySpend);  

// Calulation of the cost of one sigle unit of alcohol consume according to the data send by the user. (for example If the user drink 5 beer the average of one unit will be 2.5, if he drink 1 beer and 1 spirit it will be 11/3 euros)

function AverageCostOfUnits ( $estimationMoneySpend, $quantityConssum){
	if ($quantityConssum > 0){
		return ($estimationMoneySpend / $quantityConssum);
	}
	else
		return 0;
}


// money save by the user if he reduce his consomation to the recommandation (based on the average of one unit calculate previously)


function SaveIfReduceToRecommandation ($average, $unitsToRecommandationts){

	return ($average * $unitsToRecommandationts);

}

  $unitsAveragePrice = AverageCostOfUnits ($estimationMoneySpend, $quantityConssum) ;
  $moneySaveIfRecommandation_week = SaveIfReduceToRecommandation ($unitsAveragePrice, $unitsToRecommandation);
  $moneySaveIfRecommandation = array ('week' => $moneySaveIfRecommandation_week, 'month' => ($moneySaveIfRecommandation_week * 4.3333), 'year' => ($moneySaveIfRecommandation_week * 52));


// money save per week/month/year in terms of clothes, plan in europ and plan in the word if the person consum reduce his consumption to 0 or if in reduce his to the recommandation quantity

function MoneySave ($amouthPerMonth, $amouthPerYear, $moneySaveIfRecommandation, $clothesPrice, $europePlan, $wordPlan)
{
	$clothesPerMonth_0 = (int) ($amouthPerMonth / $clothesPrice);
	$clothesPerYear_0 = (int) ($amouthPerYear / $clothesPrice);
	$clothesPerMonth_rec = (int) ($moneySaveIfRecommandation['month'] / $clothesPrice);
	$clothesPerYear_rec = (int) ($moneySaveIfRecommandation['year'] / $clothesPrice);

	$europePerMonth_0 = (int) ($amouthPerMonth / $europePlan);
	$europePerYear_0 = (int) ($amouthPerYear / $europePlan);
	$europePerMonth_rec = (int) ($moneySaveIfRecommandation['month'] / $europePlan);
	$europePerYear_rec = (int) ($moneySaveIfRecommandation['year'] / $europePlan);

	$wordPerMonth_0 = (int) ($amouthPerMonth / $wordPlan);
	$wordPerYear_0 = (int) ($amouthPerYear / $wordPlan);
	$wordPerMonth_rec = (int) ($moneySaveIfRecommandation['month'] / $wordPlan);
	$wordPerYear_rec = (int) ($moneySaveIfRecommandation['year'] / $wordPlan);

	return array('to_0' =>  array(
		'clothes' => array ('month' => $clothesPerMonth_0, 'year' => $clothesPerYear_0 ),
		'europePlan' => array ('month' => $europePerMonth_0, 'year' => $europePerYear_0),
		'wordPlan' => array ('month' => $wordPerMonth_0, 'year' => $wordPerYear_0)),
		'to_rec' => array(
		'clothes' => array ('month' => $clothesPerMonth_rec, 'year' => $clothesPerYear_rec),
		'europePlan' => array ('month' => $europePerMonth_rec, 'year' => $europePerYear_rec),
		'wordPlan' => array ('month' => $wordPerMonth_rec, 'year' => $wordPerYear_rec)
		));

}

// array in 2 dimensions of the money which could be save in terms of cloth/ plan in europe / plan in the word per week/month/year

$quantitySave = MoneySave($spendPerMonth, $spendPerYear, $moneySaveIfRecommandation, $clothesPrice, $europePlan, $wordPlan);


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