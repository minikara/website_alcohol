<?php

include ("config.php");


$validation = array ('gender' => true, 'consumption' => true, 'times' => true, 'max' => true, 'concerned' => true, 'blackout' => true, 'arrest' => true );

$verif = true;
function Gender ($gender, $verif, $port){

	if ($gender != "woman" AND $gender != "man") { ?>

		<div class="alert alert-danger">
  		<strong>ATTENTION!</strong> You didn't well inquire your gender <a href="<?php echo ($port) ?>" class="alert-link">go back to the formular</a>.
		</div>
		<?php
		$verif = false;
	}
	return $verif;
}
$validation['gender'] = Gender ($_POST['gender'], $verif, $port);


$verif = true;
function Consumption ($consumption, $verif, $port, $maxcons, $mincons){

	foreach ($consumption as $element) {
		if ($element > $maxcons OR $element < $mincons) { 
			$verif = false;
		}
	}

	if ($verif == false) { ?>

		<div class="alert alert-danger">
  			<strong>ATTENTION!</strong> You didn't well inquire the number of your differents conssumptions <a href="<?php echo ($port) ?>" class="alert-link">go back to the formular</a>.
		</div>

	<?php }
	return $verif;
}

$consumption = array ('pint' => $_POST['pint'], 'wine'=> $_POST['wine'], 'Galcolpop' => $_POST['Galcolpop'], 'Balcolpop' => $_POST['Balcolpop'], 'sparwine' => $_POST['sparWine'], 'spirit' => $_POST['spirit'], 'shot' => $_POST['shot'], 'can' => $_POST['can'], 'hWine' => $_POST['hWine'], 'Buckfast' => $_POST['Buckfast'], 'naggin' => $_POST['naggin'], 'daddy350' => $_POST['daddy350'], 'daddy700' => $_POST['daddy700']);

$validation['consumption'] = Consumption ($consumption, $verif, $port, $maxcons, $mincons);


$verif = true;
function TimesPerWeek ($times, $verif, $port){

	if ($times > 7 OR $times < 0 ){ ?>
			
		<div class="alert alert-danger">
	  		<strong>ATTENTION!</strong> You didn't well inquire the number of your conssuptions per week <a href="<?php echo ($port) ?>" class="alert-link">go back to the formular</a>.
		</div>
			<?php 
			$verif = false;
	}

	return $verif;
}

$validation['times'] = TimesPerWeek ($_POST['times'], $verif, $port);


$verif = true;
function MaxPerOcasion ($max, $verif, $port, $maxOcasion){

	if ($max > $maxOcasion OR $max < 0 ) { ?>

		<div class="alert alert-danger">
	  		<strong>ATTENTION!</strong> You didn't well inquire the maximum that you can drink per occasion <a href="<?php echo ($port) ?>" class="alert-link">go back to the formular</a>.
		</div>
			<?php 
			$verif = false;

	}

	return $verif;
}

$validation['max'] = MaxPerOcasion ($_POST['max'], $verif, $port, $maxOcasion);


$verif = true;
function Concerned ($concerned, $verif, $port){

	if ($concerned != "yes" AND $concerned != "no") { ?>

		<div class="alert alert-danger">
  		<strong>ATTENTION!</strong> You didn't well inquire the question about your friend concerneds <a href="<?php echo ($port) ?>" class="alert-link">go back to the formular</a>.
		</div>
		<?php
		$verif = false;
	}
	return $verif;
}

$validation['concerned'] = Concerned ($_POST['concerned'], $verif, $port);

$verif = true;
function Blackout ($blackout, $verif, $port){

	if ($blackout != "once a semester" AND $blackout != "twice a semester" AND $blackout != "monthly" AND $blackout != "weekly" AND $blackout != "never") { ?>

		<div class="alert alert-danger">
  		<strong>ATTENTION!</strong> You didn't well inquire the question about the blackout <a href="<?php echo ($port) ?>" class="alert-link">go back to the formular</a>.
		</div>
		<?php
		$verif = false;
	}
	return $verif;
}

$validation['blackout'] = Blackout ($_POST['blackout'], $verif, $port);

$verif = true;
function Arrest ($arrest, $verif, $port){

	if ($arrest != "yes" AND $arrest != "no") { ?>

		<div class="alert alert-danger">
  		<strong>ATTENTION!</strong> You didn't well inquire the question about your possibly arrestation <a href="<?php echo ($port) ?>" class="alert-link">go back to the formular</a>.
		</div>
		<?php
		$verif = false;
	}
	return $verif;
}

$validation['arrest'] = Arrest ($_POST['arrest'], $verif, $port);

$verif = true;
function Sex ($sex, $verif, $port){

	if ($sex != "yes" AND $sex != "no") { ?>

		<div class="alert alert-danger">
  		<strong>ATTENTION!</strong> You didn't well inquire the question about your possible unprotected sex <a href="<?php echo ($port) ?>" class="alert-link">go back to the formular</a>.
		</div>
		<?php
		$verif = false;
	}
	return $verif;
}

$validation['sex'] = Sex ($_POST['sex'], $verif, $port);



$success = true;

function Validation ($validation, $success) {
 	
	foreach ($validation as $element) {
		if ($element != true)
			$success = false;
	}

	return $success;

}

$autorisation = Validation($validation, $success);


?>

