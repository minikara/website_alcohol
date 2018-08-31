
<p>
    Per month you could save € <?php echo (int)$spendPerMonth ?> .
</p>

<p>
<?php
    if ($quantityConssum > 0 AND AtLeastOne ($quantitySave['to_0']['clothes']['month']) == false ){ ?>
   
        It is still at least <?php (int)($spendPerMonth / $goodlunch)?> good lunch that you could take in a pub during the month !
    <?php } ?>

</p>

<p>
<?php
    if (AtLeastOne ($quantitySave['to_0']['clothes']['month']) == true){ ?>
       
       It is :
       <ul>
            <li> approximatly at least <strong><?php echo $quantitySave['to_0']['clothes']['month']?> clothes</strong> that you could buy in addition per month.</li>
            <?php

            if (AtLeastOne ($quantitySave['to_0']['europePlan']['month']) == true){ ?>

                <li> <strong><?php echo $quantitySave['to_0']['europePlan']['month'] ?> return flight </strong> that you could buy for an European country.</li>
            <?php }
                 
            if (AtLeastOne ($quantitySave['to_0']['wordPlan']['month']) == true){ ?>

                <li><strong><?php echo $quantitySave['to_0']['wordPlan']['month']?> return flight </strong> that you could buy for Bali, or the US !</li>
                 
            <?php } ?>
        
        </ul>
    <?php } ?>
</p>
