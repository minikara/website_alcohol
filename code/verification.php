<?php

$validation = array ('gender' => true, 'pint' => true, 'wine' => true, 'galcolpop' => true, 'balcolpop' => true, 'sparWine' => true, 'spirit' => true, 'shot' => true );

$verif = true;
function Gender ($gender, $verif){

	if ($gender != "w" OR $gender != "m") { ?>

		<div class="alert alert-danger">
  		<strong>ATTENTION!</strong> You didn't well inquire your gender <a href="http://localhost/alcohol_website/code/formular.php" class="alert-link">go back to the formular</a>.
		</div>
		<?php
		$verif = false;
	};
	return $verif;
}
$validation['gender'] = Gender ($_POST['gender'], $verif);









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

