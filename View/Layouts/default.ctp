<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');

		/* CSS */
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('bootstrap-table.min.css');
		echo $this->fetch('css');

		/* JS */
		echo $this->Html->script('jquery-1.12.4.min.js');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->Html->script('bootstrap-table.min.js');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="row">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>

		<div id="footer">
		</div>
	</div>

</body>
</html>
