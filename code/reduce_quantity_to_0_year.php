<?php

    echo 'Per year you could save €' . (int)$spendPerYear . '. <br />';
            
    echo 'It is:';
    echo '<ul>
    <li> approximatly at least <strong>' . $quantitySave['to_0']['clothes']['year'] . ' clothes</strong> </li>';

    if (AtLeastOne ($quantitySave['to_0']['europePlan']['year']) == true){

        echo '<li><strong>' . $quantitySave['to_0']['europePlan']['year'] . ' return flight </strong>.</li>';
    };

    if (AtLeastOne ($quantitySave['to_0']['wordPlan']['year']) == true){
                
        echo '<li> <strong>' . $quantitySave['to_0']['wordPlan']['year'] . ' return flight </strong> that you could buy for Bali, or the US !</li>';

    };

    echo '</ul>';

    
?>