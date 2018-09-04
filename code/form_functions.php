<?php
$womenRecommendation = 11;
$menRecommendation = 17 ;

function CalculUnit ($pint, $wine, $Galcolpop, $Balcolpop, $sparkling_wine, $spirit, $shot) 
{
	$totalUnit = $pint * 2 + $shot + $spirit + $sparkling_wine + $wine + $Balcolpop * 2 + 0.5 * $Galcolpop ;
	return $totalUnit; 
}

function Recommendation ($gender, $women, $men)
{
	if ($gender == "woman")
	return $women;
elseif ($gender == "man")
	return $men;
else
	return 'No gender';
}

function Concern ($arrest, $blackout){
	if ($arrest == "yes" OR $blackout == "yes")
		return $_POST['concern'];
	else 
		return "no";
}

$concern = Concern ($_POST['arrest'], $_POST['blackout']);

function PotentialProblems ($arrest, $blackout, $advise, $concern)
{
	if ($advise == "yes")
		echo "A friend have already advise you to <strong>decrease your alcohol consumption</strong>. ";
        
    if ($blackout == "yes")
    	echo "You have suffer from <strong>" . $_POST['blackout-number'] . " blackouts</strong> this year. ";
    if ($arrest == "yes")
    	echo "You have already <strong>been arrest " . $_POST['arrest-number'] . "  times</strong> because of your alcohol consumption. ";
    if ($concern == "yes") 
    	echo "<strong>You are worried about your drinking</strong>";
    if ($advise == "no" AND $blackout == "no" AND $arrest == "no") 
    	echo "You do not <strong>seem</strong> to have any dangerous behavior towards alcohol.";


}

function DifferenceToRecommendation ($quantityConssum, $Recommendation){

	return ($quantityConssum - $Recommendation);
}


$recommendation = Recommendation ($_POST['gender'], $womenRecommendation, $menRecommendation);
$quantityConssum = CalculUnit ($_POST['pint'], $_POST['wine'], $_POST['Galcolpop'], $_POST['Balcolpop'], $_POST['sparWine'], $_POST['spirit'], $_POST['shot']);
$maximumDaysOfAlcohol = "4 to 5";
$maximumPerSession = 6;
$lastQuestionsRecommendations = "If you have already had <strong>several blackouts</strong>, <strong>been arrested</strong> because of alcohol, or if a friend or health professional has already <strong>expressed concern</strong> about your drinking, then you may need to talk about your relationship with alcohol.";
$unitsToRecommandation = DifferenceToRecommendation ($quantityConssum, $recommendation);


?>