<!-- Function about the form -->

<?php include ("form_functions.php"); ?>


<!-- Estimation of the money spend in alcohol -->

<?php include ("money_functions.php"); ?>

<?php 
    
?>
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
                        <td>The recommendations for you are to drink a maximum of <strong><?php echo $recommendation ?>  units</strong> per week. </td>
                    </tr>
                    <tr>
                        <td>You drink on average <strong><?php echo $_POST['times'] ?> days</strong> a week </td>
                        <td>The recommendations are to not drink more than <strong><?php echo $maximumDaysOfAlcohol ?> days</strong> a week  </td>
                    </tr>
                    <tr>
                        <td> You can drink up to <strong><?php echo $_POST['max'] ?> units</strong> per occasion. </td>
                        <td> The recommendations are to not drink more than <strong> <?php echo $maximumPerSession ?> units </strong> per occasion.
                    </tr>
                    <tr>
                        <td> <?php echo $potentialproblems ?> </td>
                        <td> <?php echo $lastQuestionsRecommendations ?> </td>

                </tbody>
            </table>
            
        </section>
        <section>
            <h2>The cost</h2>
            <p>
                Curently, you spend € <?php echo (int)$spendPerMonth ?> per month in alcohol, that is to say € <?php echo (int)$spendPerYear ?> per year.
            </p>
            
            <?php

              if ($quantityConssum > 0 AND $quantityConssum <= $recommendation)
            {
                include ("reduce_quantity_to_0.php");
            }   
            elseif ($quantityConssum > 0 AND $quantityConssum > $recommendation) {
                echo '<table class="table table-striped table-bordered">
                <caption>Money spend</caption>
                <thead>
                    <tr class="table-info">
                        <th>If you reduce your consumtion to 0 .</th>
                        <th>If you reduce your consumption to the recommendations .</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>';
                    include ("reduce_quantity_to_0_month.php");
                    echo '</td>
                        <td>';
                         include ("reduce_quantity_to_recommandation_month.php");
                    echo '</td>
                    </tr>
                    <tr>
                        <td>';
                    include ("reduce_quantity_to_0_year.php");
                    echo '</td>
                        <td>';
                         include ("reduce_quantity_to_recommandation_year.php");
                    echo '</td>
                    </tr>

                </tbody>
            </table>';
                
            }

            else 
                echo 
                        ('<div id =\'almost nothing\'>
                        Your alcohol cunsumption is nul. <strong>Congratulation : You save a lot of money! </strong>   
                        </div>');             
            ?>
            
            
        </section>

    </div>
    <?php include ("footer.php"); ?>
        
    </body>


</html>