
<p>
    <strong>Per month</strong> you could save <span class = "text-primary" > € <?php echo (int)$moneySaveIfRecommandation['month'] ?></span> .
</p>

<p>
<?php
    if ($quantityConssum > 0 AND AtLeastOne ($quantitySave['to_rec']['clothes']['month']) == false ){ ?>
   
        It is still at least <strong><?php echo (int)($moneySaveIfRecommandation['month'] / $goodlunch)?> good lunch(s)</strong> that you could take in a pub during the month !
    <?php } ?>

</p>

<p>
<?php
    if (AtLeastOne ($quantitySave['to_rec']['clothes']['month']) == true){ ?>
       
       It is :
       <ul>
            <li>At least <strong><?php echo (int)($moneySaveIfRecommandation['month'] / $goodlunch)?> good lunch(s)</strong> that you could take in a pub during the month.</li>
            <li> Approximately at least <strong><?php echo $quantitySave['to_rec']['clothes']['month']?> clothes</strong> that you could buy in addition per month.</li>
            <?php

            if (AtLeastOne ($quantitySave['to_rec']['europePlan']['month']) == true){ ?>

                <li> <strong><?php echo $quantitySave['to_rec']['europePlan']['month'] ?> return flight(s) </strong> to an European country.</li>
            <?php }
                 
            if (AtLeastOne ($quantitySave['to_rec']['wordPlan']['month']) == true){ ?>

                <li><span class = "text-primary"><?php echo $quantitySave['to_rec']['wordPlan']['month']?> return flight(s) </span> to <span class = "text-primary">Bali</span>, or <span class = "text-primary" >the US</span> !</li>
                 
            <?php } ?>
        
        </ul>
    <?php } ?>
</p>
