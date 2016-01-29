	<?php 
		$this->load->view('header');
	?>

	<br><br>
	<?= $this->table->generate($Products) ?>

	<?php
		$this->load->view('footer');
	?>
</html>