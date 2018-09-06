
<p>

<strong>Per year</strong> you could save <span class= "cost" >€ <?php echo (int)$spendPerYear ?> .

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
        
			<li><span class = "cost"> <?php echo $quantitySave['to_0']['wordPlan']['year'] ?> return flight(s)</span> to <span class= "cost">Bali</span> or <span class = "cost">the US</span> !</li>

		<?php } ?>

	</ul>
</p>

