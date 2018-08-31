
<p>

Per year you could save € <?php echo (int)$spendPerYear ?> .

</p>

<p>
	It is:
	<ul>
		<li> approximatly at least <strong> <?php echo $quantitySave['to_0']['clothes']['year'] ?> clothes</strong> </li>
		<?php

		if (AtLeastOne ($quantitySave['to_0']['europePlan']['year']) == true){ ?>

			<li><strong> <?php echo $quantitySave['to_0']['europePlan']['year'] ?> return flight </strong>.</li>
		<?php };

		if (AtLeastOne ($quantitySave['to_0']['wordPlan']['year']) == true){ ?>
        
			<li> <strong> <?php echo $quantitySave['to_0']['wordPlan']['year'] ?> return flight </strong> that you could buy for Bali, or the US !</li>

		<?php } ?>

	</ul>
</p>

