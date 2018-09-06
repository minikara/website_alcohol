<p>

<strong>Per year</strong> you could save <span class = "text-primary"> € <?php echo (int)$moneySaveIfRecommandation['year'] ?></span> .

</p>

<p>
    It is :
    <ul>
        <li> Approximately at least <strong> <?php echo $quantitySave['to_rec']['clothes']['year'] ?> clothes</strong> </li>
        <?php

        if (AtLeastOne ($quantitySave['to_rec']['europePlan']['year']) == true){ ?>

            <li><strong> <?php echo $quantitySave['to_rec']['europePlan']['year'] ?> return flight(s)</strong> to an European country.</li>
        <?php };

        if (AtLeastOne ($quantitySave['to_rec']['wordPlan']['year']) == true){ ?>
        
            <li> <strong><span class = "text-primary"> <?php echo $quantitySave['to_rec']['wordPlan']['year'] ?> return flight(s)</span></strong> to <strong><span class= "text-primary">Bali</span></strong>, or <strong><span class = "text-primary">the US</span></strong> !</li>

        <?php } ?>

    </ul>
</p>