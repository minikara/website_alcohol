<!DOCTYPE html>

<html>

    <?php include ("header.php"); ?>
    <!-- Verification of the Data -->

<?php include ("verification.php"); ?>

<?php if ($autorisation == true){ ?>


<!-- Function about the form -->

<?php include ("form_functions.php"); ?>


<!-- Estimation of the money spend in alcohol -->

<?php include ("money_functions.php"); ?>




    <body>

	    <div class="container">

	        <section>
	            <table class="table table-striped table-bordered">
	                <caption>Results</caption> 
	                <thead>
	                    <tr class="table-info">
	                        <th>Your results</th>
	                        <th>The recommendations</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    <tr>
	                        <td>You consume <strong><?php echo  $quantityConssum ?> unit(s)</strong> of alcohol per week on average.</td>
	                        <td>The recommendations for you are to drink a maximum of <strong><?php echo $recommendation ?>  units</strong> per week. </td>
	                    </tr>
	                    <tr>
	                        <td>You drink on average <strong><?php echo $_POST['times'] ?> day(s)</strong> a week </td>
	                        <td>The recommendations are to not drink more than <strong><?php echo $maximumDaysOfAlcohol ?> days</strong> a week  </td>
	                    </tr>
	                    <tr>
	                        <td> You can drink up to <strong><?php echo $_POST['max'] ?> unit(s)</strong> per occasion. </td>
	                        <td> The recommendations are to not drink more than <strong> <?php echo $maximumPerSession ?> units </strong> per occasion.
	                    </tr>
	                    <tr>
	                        <td> <?php PotentialProblems ($_POST['arrest'], $_POST['blackout'], $_POST['advise'], $concern) ?> </td>
	                        <td> <?php echo $lastQuestionsRecommendations ?> </td>

	                </tbody>
	            </table>
					
	            <div id='link'><a href='http://www.askaboutalcohol.ie/' target='_blank'> <button type="button" class="btn btn-outline-primary" data-container="body" data-toggle="popover" data-placement="right"
					data-html="true"
					>For more informations do not hesitate to click here</button></a></div>
	            
	        </section>
	        <section>
	        	<div class = "text-center">
		            <h2>The cost</h2>
		            <p>
		                Currently, you spend <span class= "cost">€ <?php echo (int)$spendPerMonth ?> per month</span> in alcohol, that is to say <span class= "cost">€ <?php echo (int)$spendPerYear ?> per year</span>.
		                <?php if ($spendPerMonth != 0){ ?>
		                	 <button type="button" class="btn
		                	btn-outline-primary" data-container="body"
		                	data-toggle="popover" data-placement="right"
							data-html="true"
							data-title="Prices Estimation"
							data-content="<?php echo $prices ?>"
					>Click here to see the prices the estimations are based on</button>

		               <?php } ?>
		               
		            </p>
		        </div>
	            
	            <?php

	              if ($quantityConssum > 0 AND $quantityConssum <= $recommendation)
	            { ?>
	            	<div class = "row">
	            	<div class = "col-sm-3"></div>
	            	<div class = "col-sm-6">
		                <table class="table table-striped table-bordered">
		                <caption>Money spendings <button type="button" class="btn btn-outline-primary" data-container="body" data-toggle="popover" data-placement="right"
					data-html="true"
					data-title="Prices Estimation"
					data-content="<?php echo $comparaisonPrices ?>"
					>Click here to see the prices of the different elements</button></caption>
		                <thead>
		                    <tr class="table-info">
		                        <th>If you reduce your consumption to 0 .</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <td>
		                    	<?php include ("reduce_quantity_to_0_month.php"); ?>
		                    	</td>
		                    </tr>
		                    <tr>
		                        <td>
		                         <?php include ("reduce_quantity_to_0_year.php"); ?>
		                    	</td>
		                    </tr>
			            </tbody>
			            </table>
			        </div>
			    </div>

	           	<?php     
	            }   
	            elseif ($quantityConssum > 0 AND $quantityConssum > $recommendation) { ?>
	                
	                <table class="table table-striped table-bordered">
	                <caption>Money spendings  <button type="button" class="btn btn-outline-primary" data-container="body" data-toggle="popover" data-placement="right"
					data-html="true"
					data-title="Prices Estimation"
					data-content="<?php echo $comparaisonPrices ?>"
					>Click here to see the prices of the different elements</button></caption>
	                <thead>
	                    <tr class="table-info">
	                        <th>If you reduce your consumtion to 0.</th>
	                        <th>If you reduce your consumption to the recommendations.</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    <tr>
	                        <td>
	                    	<?php include ("reduce_quantity_to_0_month.php"); ?>
	                    	</td>
	                        <td>
	                        <?php include ("reduce_quantity_to_recommandation_month.php"); ?>
	                    	</td>
	                    </tr>
	                    <tr>
	                        <td>
	                   		<?php include ("reduce_quantity_to_0_year.php"); ?>
	                    	</td>
	                        <td>
	                        <?php include ("reduce_quantity_to_recommandation_year.php"); ?>
	                    	</td>
	                    </tr>

	                </tbody>
	            </table>
	            

	            <?php    
	            }

	            else  {?>
	                <p class= "text-center">
	                Your alcohol cunsumption is null. <strong>Congratulations : You are saving a lot of money! </strong>   
	                </p>             
	           <?php } ?>
	        </section>

	    </div>
	    <?php include ("footer.php"); ?>
        
   

    </body>


</html>

 <?php } ?>