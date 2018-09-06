
<p>

<strong>Per year</strong> you could save <span class= "text-primary" >€ <?php echo (int)$spendPerYear ?> .

</p>

<p>
	It is :
	<ul>
		<li> Approximately <strong> <?php echo $quantitySave['to_0']['clothes']['year'] ?> clothes</strong>. </li>
		<?php

		if (AtLeastOne ($quantitySave['to_0']['europePlan']['year']) == true){ ?>

			<li><strong> <?php echo $quantitySave['to_0']['europePlan']['year'] ?> return flight(s) </strong>to an European country.</li>
		<?php };

		if (AtLeastOne ($quantitySave['to_0']['wordPlan']['year']) == true){ ?>
        
			<li><span class = "text-primary"> <?php echo $quantitySave['to_0']['wordPlan']['year'] ?> return flight(s)</span> to <span class= "text-primary">Bali</span> or <span class = "text-primary">the US</span> !</li>

		<?php } ?>

	</ul>
</p>

