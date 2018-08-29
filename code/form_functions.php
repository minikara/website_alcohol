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
	if ($gender == "women")
	return $women;
elseif ($gender == "men")
	return $men;
else
	return 'No gender';
}

function PotentialProblems ($arrest, $blackout, $advise)
{
    if ($arrest == "yes" OR $blackout == "yes" OR $advise == "yes")
        return "You have already had <strong>several blackouts </strong>, or have been <strong>arrested</strong> for drinking or a friend or health professional has already <strong>commented</strong> on your drinking.";
    else
        return "You have <strong>never had multiple blackouts</strong>, or <strong>arrested</strong> for your drinking or a friend or health professional has <strong>never commented</strong> on your drinking.";
}


$recommendation = Recommendation ($_POST['gender'], $womenRecommendation, $menRecommendation);
$quantityConssum = CalculUnit ($_POST['pint'], $_POST['wine'], $_POST['Galcolpop'], $_POST['Balcolpop'], $_POST['sparWine'], $_POST['spirit'], $_POST['shot']);
$maximumDaysOfAlcohol = "4 to 5";
$maximumPerSession = 6;
$potentialproblems = PotentialProblems ($_POST['arrest'], $_POST['blackout'], $_POST['advise']);
$lastQuestionsRecommendations = "If you have already had <strong>several blackouts</strong>, <strong>been arrested</strong> because of alcohol, or if a friend or health professional has already <strong>expressed concern</strong> about your drinking, then you may need to talk about your relationship with alcohol.";


?>