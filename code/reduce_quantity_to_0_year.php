
<p>

<strong>Per year</strong> you could save € <?php echo (int)$spendPerYear ?> .

</p>

<p>
	It is:
	<ul>
		<li> approximatly at least <strong> <?php echo $quantitySave['to_0']['clothes']['year'] ?> clothes</strong> </li>
		<?php

		if (AtLeastOne ($quantitySave['to_0']['europePlan']['year']) == true){ ?>

			<li><strong> <?php echo $quantitySave['to_0']['europePlan']['year'] ?> returns flights </strong>that you could buy for an European country.</li>
		<?php };

		if (AtLeastOne ($quantitySave['to_0']['wordPlan']['year']) == true){ ?>
        
			<li> <strong><span class = "cost"> <?php echo $quantitySave['to_0']['wordPlan']['year'] ?> returns flights </strong></span> that you could buy for <strong><span class= "cost">Bali</span></strong>, or <strong><span class = "cost">the US</span></strong> !</li>

		<?php } ?>

	</ul>
</p>

