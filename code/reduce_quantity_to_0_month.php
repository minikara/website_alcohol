
<p>
    <strong>Per month</strong> you could save <span class = "cost" >€ <?php echo (int)$spendPerMonth ?></span> .
</p>

<p>
<?php
    if ($quantityConssum > 0 AND AtLeastOne ($quantitySave['to_0']['clothes']['month']) == false ){ ?>
   
        It is still at least <?php echo (int)($spendPerMonth / $goodlunch) ?> good lunch(s) that you could take in a pub during the month !
    <?php } ?>

</p>

<p>
<?php
    if (AtLeastOne ($quantitySave['to_0']['clothes']['month']) == true){ ?>
       
       It is :
       <ul>

            <li>At least <strong><?php echo (int)($spendPerMonth / $goodlunch) ?> good lunchs</strong> that you could take in a pub during the month.</li>
            <li> Approximately <strong><?php echo $quantitySave['to_0']['clothes']['month']?> clothe(s)</strong> that you could buy in addition per month.</li>
            <?php

            if (AtLeastOne ($quantitySave['to_0']['europePlan']['month']) == true){ ?>

                <li> <strong><?php echo $quantitySave['to_0']['europePlan']['month'] ?> return flight(s) </strong> to an European country.</li>
            <?php }
                 
            if (AtLeastOne ($quantitySave['to_0']['wordPlan']['month']) == true){ ?>

                <li><span class = "cost"><?php echo $quantitySave['to_rec']['wordPlan']['month']?> return flight(s) </span> to <span class = "cost">Bali</span>, or <span class = "cost" >the US</span> !</li>
                 
            <?php } ?>
        
        </ul>
    <?php } ?>
</p>
