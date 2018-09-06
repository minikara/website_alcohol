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
				<legend>Are you ?</legend>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" id="women" value="woman" required>
						<label class="form-check-label" for="women">A woman</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" id="men" value="man">
						<label class="form-check-label" for="men">A man</label>
					</div>
				</div>
				<div class="form-group">
					<legend>In a typical week, how many times do you drink?</legend>
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
						<label for="Balcolpop"> A bottle of alcolpop : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="Balcolpop" value="0" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> class="quantity"/>
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
						<label for="shot"> A shot : </label>
						<div class="input-group">
							<input class="form-control" type="number" name="shot" value="0" class="quantity" min=<?php echo $mincons ?> max=<?php echo $maxcons ?> />
							<div class="input-group-append">
    							<span class="input-group-text">times</span>
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
				</div>

				<div class="form-group">
				<legend>Has a friend ever been concerned about your drinking and advised you to decrease it?</legend>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="advise" id="advise-yes" value="yes" required>
						<label class="form-check-label" for="advise-yes">yes</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="advise" id="advise-no" value="no">
						<label class="form-check-label" for="advise-no">no</label>
					</div>
				</div>

				<div class="form-group">
				<legend>Do you have more than one blackout per year?</legend>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="blackout" id="blackout-yes" value="yes" required>
						<label class="form-check-label" for="blackout-yes">yes</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="blackout" id="blackout-no" value="no">
						<label class="form-check-label" for="blackout-no">no</label>
					</div>
				</div>

				<div style="display: none" class="blackout-number-question form-group">
					<legend>How many blackouts?</legend>
					<div class="input-group">
						<input type="number" name="blackout-number" value="0" class="quantity form-control" min=1 max=50 required>
						<div class="input-group-append">
							<span class="input-group-text">blackouts</span>
						</div>
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

				<div style="display: none" class="concerned-question form-group">
				<legend>Are you concerned by your alcohol consumption?</legend>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="concern" id="concern-yes" value="yes" required>
						<label class="form-check-label" for="concern-yes">yes</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="concern" id="concern-no" value="no">
						<label class="form-check-label" for="concern-no">no</label>
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
		var blackout = $('#blackout-yes').is(':checked');
		var arrest = $('#arrest-yes').is(":checked");
		
		if (blackout) {
			$('.blackout-number-question').show();
			$('[name="blackout-number"]').prop('disabled', false);
		}
		else {
			$('.blackout-number-question').hide();
			$('[name="blackout-number"]').prop('disabled', true);
		}

		if (arrest) {
			$('.arrest-number-question').show();
			$('[name="arrest-number"]').prop('disabled', false);
		}
		else {
			$('.arrest-number-question').hide();
			$('[name="arrest-number"]').prop('disabled', true);
		}

		if (arrest || blackout) {
			$('.concerned-question').show();
			$('[name="concern"]').prop('disabled', false);
		}
		else {
			$('.concerned-question').hide();
			$('[name="concern"]').prop('disabled', true);
		}
	}

	$(document).ready(function() {
		checkRadios();
		$( "input[type=radio]" ).on( "click", checkRadios);
	});
	</script>
	
	</body>
</html>