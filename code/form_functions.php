<?php

include ("config.php");

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
    	echo "<strong>You are worried about your drinking.</strong> If you desire some help <strong>do not hesitate</strong> to contact one of the staff member of the university. Some of them that can <strong>help you</strong> <a href='https://ulsites.ul.ie/studentaffairs/student-health-centre-staff-medical-team' target='_blank'>here </a> or write at <a href='mailto: Ria.Toland@ul.ie' target='_blank'>this email</a>.";
    if ($advise == "no" AND $blackout == "no" AND $arrest == "no") 
    	echo "You don't <strong>seem</strong> to have any dangerous behavior towards alcohol.";


}

$recommendation = Recommendation ($_POST['gender'], $womenRecommendation, $menRecommendation);
$quantityConssum = CalculUnit ($_POST['pint'], $_POST['wine'], $_POST['Galcolpop'], $_POST['Balcolpop'], $_POST['sparWine'], $_POST['spirit'], $_POST['shot']);
$lastQuestionsRecommendations = "If you have already had <strong>several blackouts</strong>, <strong>been arrested</strong> because of alcohol, or if a friend or health professional has already <strong>expressed concern</strong> about your drinking, then you may need to talk about your relationship with alcohol."


?>