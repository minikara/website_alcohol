<?php

    echo 'Per year you could save €' . (int)$moneySaveIfRecommandation['year'] . '. <br />';
            
    echo 'It is:';
    echo '<ul>
    <li> approximatly at least <strong>' . $quantitySave['to_rec']['clothes']['year'] . ' clothes</strong> </li>';

    if (AtLeastOne ($quantitySave['to_rec']['europePlan']['year']) == true){

        echo '<li><strong>' . $quantitySave['to_rec']['europePlan']['year'] . ' return flight </strong>.</li>';
    };

    if (AtLeastOne ($quantitySave['to_rec']['wordPlan']['year']) == true){
                
        echo '<li> <strong>' . $quantitySave['to_rec']['wordPlan']['year'] . ' return flight </strong> that you could buy for Bali, or the US !</li>';

    };

    echo '</ul>';
?>