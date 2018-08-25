<!-- Function -->

<?php
$womenRecommendation = 11;
$menRecommendation = 17;
function CalculUnit ($pint, $wine, $Galcolpop, $Balcolpop, $sparkling_wine, $spirit, $shot) 
{
	$totalUnit = $pint * 2 + $shot + $spirit + $sparkling_wine + $wine + $Balcolpop + 0.5 * $Galcolpop ;
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
$recommendation = Recommendation ($_POST['gender'], $womenRecommendation, $menRecommendation);
$quantityConssum = CalculUnit ($_POST['pint'], $_POST['wine'], $_POST['Galcolpop'], $_POST['Balcolpop'], $_POST['sparWine'], $_POST['spirit'], $_POST['shot']);
?>



<!DOCTYPE html>

<html>

    <head>
    	<!-- Head of the page -->

        <meta charset="utf-8" />

        <title>Titre</title>

    </head>

    <body>

    <?php
    	echo '<p> Vous consommez ' . $quantityConssum . ' unite d\'alcool par semaine </p>';
    	echo '<p> Les recommendations pour vous sont de ' . $recommendation . ' unite par semaine'; 
    ?>
    	
    </body>


</html>