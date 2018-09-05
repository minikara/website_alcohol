<p>

<strong>Per year</strong> you could save <span class = "cost"> € <?php echo (int)$moneySaveIfRecommandation['year'] ?></span> .

</p>

<p>
    It is :
    <ul>
        <li> Approximately at least <strong> <?php echo $quantitySave['to_rec']['clothes']['year'] ?> clothes</strong> </li>
        <?php

        if (AtLeastOne ($quantitySave['to_rec']['europePlan']['year']) == true){ ?>

            <li><strong> <?php echo $quantitySave['to_rec']['europePlan']['year'] ?> return flight(s)</strong> that you could buy for an European country.</li>
        <?php };

        if (AtLeastOne ($quantitySave['to_rec']['wordPlan']['year']) == true){ ?>
        
            <li> <strong><span class = "cost"> <?php echo $quantitySave['to_rec']['wordPlan']['year'] ?> return flight(s)</span></strong> that you could buy for <strong><span class= "cost">Bali</span></strong>, or <strong><span class = "cost">the US</span></strong> !</li>

        <?php } ?>

    </ul>
</p>