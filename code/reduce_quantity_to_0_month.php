<?php

echo 'Per month you could save €' . (int)$spendPerMonth . '. <br />';
    
    if ($quantityConssum > 0 AND AtLeastOne ($quantitySave['to_0']['clothes']['month']) == false ){
        echo '<p>
                It is still at least ' . (int)($spendPerMonth / $goodlunch) . ' good lunch that you could take in a pub during the month ! <br />';

    }

    if (AtLeastOne ($quantitySave['to_0']['clothes']['month']) == true){

        echo 
            ('
           It is :
           <ul>
            <li> approximatly at least <strong>' . $quantitySave['to_0']['clothes']['month'] . ' clothes</strong> that you could buy in addition per month.</li>');
    };
    if (AtLeastOne ($quantitySave['to_0']['europePlan']['month']) == true){

        echo '<li> <strong>' . $quantitySave['to_0']['europePlan']['month'] . ' return flight </strong> that you could buy for an European country.</li>';
    }; 
             
    if (AtLeastOne ($quantitySave['to_0']['wordPlan']['month']) == true){

        echo '<li><strong>' . $quantitySave['to_0']['wordPlan']['month'] . ' return flight </strong> that you could buy for Bali, or the US !</li>';
             
    };
            
    echo '</ul>';

?>