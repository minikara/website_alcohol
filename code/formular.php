<!DOCTYPE html>

<html>

    <?php include ("header.php"); ?>
    <?php include ("config.php"); ?>

	<body>
		<!-- Bootstrap container to give margins -->
		<div class="container">

			<header>
				<h1>
					How do you drink?
				</h1>
			</header>

			<form method="post" action="result.php">
				<div class="form-group">
				<legend>Would you like to use the recommended alcohol allowances for males or females ?</legend>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" id="women" value="woman" required>
						<label class="form-check-label" for="women">Female</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" id="men" value="man">
						<label class="form-check-label" for="men">Male</label>
					</div>
				</div>
				<div class="form-group">
					<h2>In a typical week, what do you drink?</h2>
					<div class="form-group">
					<legend>In a bar/night club :</legend>
					<div class="row">
						<div class="form-group col-lg-2">	
						<label for="pint"> A pint : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="pint" value="0" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
						
						<div class="form-group col-lg-2">
						<label for="wine"> A glass of wine : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="wine" value="0" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
						
						<div class="form-group col-lg-2">
						<label for="Galcolpop"> A glass of alcolpop : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="Galcolpop" value="0" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>

						<div class="form-group col-lg-2">
						<label for="shot"> A shot : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="shot" value="0" class="quantity" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> />
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
						
						
					</div>
					<div class="row">
						
						<div class="form-group col-lg-2">
						<label for="sparWine"> A glass of sparkling wine : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="sparWine" value="0" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
						
						<div class="form-group col-lg-2">
						<label for="spirit"> A pub measure of spirits : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="spirit" value="0" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
						
						<div class="form-group col-lg-2">
						<label for="Balcolpop"> A bottle of alcolpop (275ml) : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="Balcolpop" value="0" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
					</div>
					<div class="form-group">
					<legend>At home :</legend>
					<div class="row">
						<div class="form-group col-lg-2">	
						<label for="pint"> A can : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="can" value="0" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
						
						<div class="form-group col-lg-2">
						<label for="wine"> A glass of any wine : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="hWine" value="0" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
						
						<div class="form-group col-lg-2">
						<label for="Galcolpop"> A bottle of Buckfast : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="Buckfast" value="0" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>

						<div class="form-group col-lg-2">
						<label for="shot"> A naggin (200ml) : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="naggin" value="0" class="quantity" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> />
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
						
						
					</div>
					<div class="row">
						
						<div class="form-group col-lg-2">
						<label for="sparWine"> A daddy naggin/shoulder (350ml) : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="daddy350" value="0" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
						
						<div class="form-group col-lg-2">
						<label for="spirit"> A daddy naggin/shoulder bottle (700ml) : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="daddy700" value="0" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> class="quantity"/>
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
  							</div>
						</div>
						</div>
					</div>
					</div>
					<button type="button" class="btn btn-outline-primary" data-container="body" data-toggle="popover" data-placement="right"
					data-html="true"
					data-title="Drinks comparison"
					data-content="<img class='img-fluid' src='../comparaison.JPG'></img>"
					>Click here to compare sizes of drinks</button>
				</div>
					
				<div class="form-group">
					<legend>If you drink at least one time per week, how many days per week do you drink alcohol? (if you drink less than once a week just let 0)?</legend>
					<div class="input-group">
						<input type="number" name="times" value="0" class="quantity form-control" min=<?php echo $mincons ?> max="7">
						<div class="input-group-append">
							<span class="input-group-text">times per week</span>
						</div>
					</div>
				</div>

				<div class="form-group">
					<legend>On the same occasion, what is the maximum number of units of alcohol that you can drink?</legend>
					<div class="input-group">
						<input type="number" name="max" value="0" class="quantity form-control" min=<?php echo $mincons ?> max=<?php echo $maxOcasion ?> >
						<div class="input-group-append">
							<span class="input-group-text">units</span>
						</div>
					</div>
					<div id= 'unitButton'>
						<button type="button" class="btn btn-outline-primary" data-container="body" data-toggle="popover" data-placement="right"
						data-html="true"
						data-title="1 Unit of Alcohol"
						data-content="<img id = 'unit' src='../unit.png'></img>"
						>What is a unit of alcohol?</button>
					</div>
				</div>

				<div class="form-group">
				<legend>Have you, or a friend, ever been concerned about your alcohol consumption ?</legend>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="concerned" id="concerned-yes" value="yes" required>
						<label class="form-check-label" for="concerned-yes">yes</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="concerned" id="concerned-no" value="no">
						<label class="form-check-label" for="concerned-no">no</label>
					</div>
				</div>

				<div style="display: none" class="concerned-question form-group">Please, consult <a href=' http://www.askaboutalcohol.ie/your-drinking/worried-about-your-drinking/' target='_blank'>this website </a></div>

				<div class="form-group">
				<legend>How often do you have a blackout? (loss of memory while drinking) ?</legend>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="blackout" id="once_semester" value="once a semester" required>
						<label class="form-check-label" for="once_semester">Once a semester</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="blackout" id="twice_semester" value="twice a semester" required>
						<label class="form-check-label" for="twice_semester">Twice a semester</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="blackout" id="monthly" value="monthly" required>
						<label class="form-check-label" for="monthly">Monthly</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="blackout" id="weekly" value="weekly" required>
						<label class="form-check-label" for="weekly">Weekly</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="blackout" id="never" value="never" required>
						<label class="form-check-label" for="weekly">Never</label>
					</div>
				</div>


				<div class="form-group">
				<legend>Have you already been arrested because of your alcohol consumption?</legend>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="arrest" id="arrest-yes" value="yes" required>
						<label class="form-check-label" for="arrest-yes">yes</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="arrest" id="arrest-no" value="no">
						<label class="form-check-label" for="arrest-no">no</label>
					</div>
				</div>

				<div style="display: none" class="arrest-number-question form-group">
					<legend>How many arrests?</legend>
					<div class="input-group">
						<input type="number" name="arrest-number" value="0" class="quantity form-control" min=1 max=50 required>
						<div class="input-group-append">
							<span class="input-group-text">arrests</span>
						</div>
					</div>
				</div>

				<div class="form-group">
				<legend>Have you ever had unprotected sex after excessive alcohol consumption?</legend>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="sex" id="sex-yes" value="yes" required>
						<label class="form-check-label" for="sex-yes">yes</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="sex" id="sex-no" value="no">
						<label class="form-check-label" for="sex-no">no</label>
					</div>
				</div>


				<p>
					<input class="btn btn-primary" type="submit" value="Submit" id="submit">
				</p>
			</form>

		</div>

	<?php include ("footer.php"); ?>
	
	<script>
	function checkRadios() {
		var arrest = $('#arrest-yes').is(":checked");
		var concerned =$('#concerned-yes').is(":checked");

		if (concerned){
			$('.concerned-question').show();

		}
		else {
			$('.concerned-question').hide();
		}

		if (arrest) {
			$('.arrest-number-question').show();
			$('[name="arrest-number"]').prop('disabled', false);
		}
		else {
			$('.arrest-number-question').hide();
			$('[name="arrest-number"]').prop('disabled', true);
		}
	}

	$(document).ready(function() {
		checkRadios();
		$( "input[type=radio]" ).on( "click", checkRadios);
	});
	</script>
	
	</body>
</html>