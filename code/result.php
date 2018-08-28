<!-- Function about the form -->

<?php include ("form_functions.php"); ?>


<!-- Estimation of the money spend in alcohol -->

<?php include ("money_functions.php"); ?>




<!DOCTYPE html>

<html>

    <?php include ("header.php"); ?>

    <body>

    <div class="container">

        <section>
            <table class="table table-striped table-bordered">
                <caption>Results</caption>
                <thead>
                    <tr class="table-info">
                        <th>Your results</th>
                        <th>The recommandations</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>You consume <strong><?php echo  $quantityConssum ?> units</strong> of alcohol per week on average.</td>
                        <td>The recommendations for you are <strong><?php echo $recommendation ?>  units</strong> per week. </td>
                    </tr>
                    <tr>
                        <td>You drink on average <strong><?php echo $_POST['times'] ?> times</strong> a week </td>
                        <td>The recommendations are not to drink more than <strong><?php echo $maximumDaysOfAlcohol ?> days</strong> a week  </td>
                    </tr>
                    <tr>
                        <td> You can drink up to <strong><?php echo $_POST['max'] ?> </strong> times per occasion. </td>
                        <td> The recommendations are to not drink more than <strong> <?php echo $maximumPerSession ?> </strong> per occasion.
                    </tr>
                    <tr>
                        <td> <?php echo $potentialproblems ?> </td>
                        <td> <?php echo $lastQuestionsRecommendations ?> </td>

                </tbody>
            </table>
            
        </section>
        <section>
            <h2>What you could save</h2>
            <?php
                if (AtLeastOne ($quantitySave['clothes']['week']) == true ){

                    echo 'Imagine that you spend twice less money in alcohol, what could you save ?
                        <div id = \'weekly\'>
                        <h3>Per Week ?</h3>
                        Currently the estimation of the money that you spend in alcohol per week is <strong>' . $spendPerWeek .' €</strong>. You could save approximatly <strong>'. (int)$savePerWeek .' €</strong> per week if you start drinking 2 times less.
                        <h4> but what could it be? </h4>
                        It is approximatly at least <strong>' . $quantitySave['clothes']['week'] . ' clothes</strong> that you could buy in addition per week.';
                        if (AtLeastOne ($quantitySave['europePlan']['week']) == true)
                            echo '<br />It is also <strong>' . $quantitySave['europePlan']['week'] . ' return flight </strong> that you could buy for an European country.';
                        if (AtLeastOne ($quantitySave['wordPlan']['week']) == true)
                        echo '<br />And it is <strong>' . $quantitySave['wordPlan']['week'] . ' return flight </strong> that you could buy for a country in a world like Bali, or the US !';
                        echo '</div>';

                }
                if (AtLeastOne ($quantitySave['clothes']['month']) == true){

                    echo 
                        ('<div id =\'monthly\'>
                        <h3>Per Month ? </h3>
                        Currently the estimation of the money that you spend in alcohol per month is <strong>' . (int) $spendPerMonth . ' €</strong> per month. You could save approximatly <strong>' . (int) $savePerMonth .' €</strong> per month if you start drinking 2 times less.
                        <h4> but what could it be? </h4>
                        It is approximatly at least <strong>' . $quantitySave['clothes']['month'] . ' clothes</strong> that you could buy in addition per month.');
                        if (AtLeastOne ($quantitySave['europePlan']['month']) == true)
                            echo '<br />It is also <strong>' . $quantitySave['europePlan']['month'] . ' return flight </strong> that you could buy for an European country.';
                        if (AtLeastOne ($quantitySave['wordPlan']['month']) == true)
                        echo '<br />And it is <strong>' . $quantitySave['wordPlan']['month'] . ' return flight </strong> that you could buy for a country in a world like Bali, or the US !';
                        echo '</div>';


                    
                }
                if (AtLeastOne ($quantitySave['clothes']['year']) == true){
                    echo 
                        ('<div id =\'year\'>
                        <h3>Per YEAR ? </h3>
                        Currently the estimation of the money that you spend in alcohol per year is <strong>' . (int) $spendPerYear . ' €</strong> per year. You could save approximatly <strong>' . (int) $savePerYear .' €</strong> per year if you start drinking 2 times less.
                        <h4> but what could it be? </h4>
                        It is approximatly at least <strong>' . $quantitySave['clothes']['year'] . ' clothes</strong> that you could buy in addition per year.');
                        if (AtLeastOne ($quantitySave['europePlan']['year']) == true)
                            echo '<br />It is also <strong>' . $quantitySave['europePlan']['year'] . ' return flight </strong> that you could buy for an European country.';
                        if (AtLeastOne ($quantitySave['wordPlan']['year']) == true)
                        echo '<br />And it is <strong>' . $quantitySave['wordPlan']['year'] . ' return flight </strong> that you could buy for a country in a world like Bali, or the US !';
                        echo '</div>';



                }

                if (AtLeastOne ($quantitySave['clothes']['year']) != true){
                    echo 
                        ('<div id =\'almost nothing\'>
                        You spend less than ' . $clothesPrice .' € per year. Your alcohol cunsumption is almost or is nul. <strong>Congratulation : You save a lot of money! </strong>   
                        </div>');
                    }
                            
            ?>
            
            
        </section>

    </div>
    <?php include ("footer.php"); ?>
    	
    </body>


</html>