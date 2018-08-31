<p>

Per year you could save € <?php echo (int)$moneySaveIfRecommandation['year'] ?> .

</p>

<p>
    It is:
    <ul>
        <li> approximatly at least <strong> <?php echo $quantitySave['to_rec']['clothes']['year'] ?> clothes</strong> </li>
        <?php

        if (AtLeastOne ($quantitySave['to_rec']['europePlan']['year']) == true){ ?>

            <li><strong> <?php echo $quantitySave['to_rec']['europePlan']['year'] ?> return flight </strong>.</li>
        <?php };

        if (AtLeastOne ($quantitySave['to_rec']['wordPlan']['year']) == true){ ?>
        
            <li> <strong> <?php echo $quantitySave['to_rec']['wordPlan']['year'] ?> return flight </strong> that you could buy for Bali, or the US !</li>

        <?php } ?>

    </ul>
</p>