
<p>
    Per month you could save € <?php echo (int)$moneySaveIfRecommandation['month'] ?> .
</p>

<p>
<?php
    if ($quantityConssum > 0 AND AtLeastOne ($quantitySave['to_rec']['clothes']['month']) == false ){ ?>
   
        It is still at least <?php (int)($moneySaveIfRecommandation['month'] / $goodlunch)?> good lunch that you could take in a pub during the month !
    <?php } ?>

</p>

<p>
<?php
    if (AtLeastOne ($quantitySave['to_rec']['clothes']['month']) == true){ ?>
       
       It is :
       <ul>
            <li> approximatly at least <strong><?php echo $quantitySave['to_rec']['clothes']['month']?> clothes</strong> that you could buy in addition per month.</li>
            <?php

            if (AtLeastOne ($quantitySave['to_rec']['europePlan']['month']) == true){ ?>

                <li> <strong><?php echo $quantitySave['to_rec']['europePlan']['month'] ?> return flight </strong> that you could buy for an European country.</li>
            <?php }
                 
            if (AtLeastOne ($quantitySave['to_rec']['wordPlan']['month']) == true){ ?>

                <li><strong><?php echo $quantitySave['to_rec']['wordPlan']['month']?> return flight </strong> that you could buy for Bali, or the US !</li>
                 
            <?php } ?>
        
        </ul>
    <?php } ?>
</p>
