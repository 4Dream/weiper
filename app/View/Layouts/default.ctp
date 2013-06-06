<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Weiper</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('../bootstrap/css/bootstrap');
		echo $this->Html->css('flat-ui');
		echo $this->Html->css('jq.default');
		// echo $this->fetch('meta');
		// echo $this->fetch('css');
		// echo $this->fetch('script');
	?>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
			<?php echo $this->Html->css('html5shiv'); ?>
    <![endif]-->
</head>
<body>
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
	<?php
		echo $this->Html->script('jquery-1.8.3.min.js');
		echo $this->Html->script('jquery-ui-1.10.3.custom.min.js');
		echo $this->Html->script('jquery.ui.touch-punch.min.js');
		echo $this->Html->script('jquery.ui.touch-punch.min.js');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->Html->script('bootstrap-select.js');
		echo $this->Html->script('bootstrap-switch.js');
		echo $this->Html->script('flatui-checkbox.js');
		echo $this->Html->script('flatui-radio.js');
		echo $this->Html->script('jquery.tagsinput.js');
		echo $this->Html->script('jquery.placeholder.js');
		echo $this->Html->script('jquery.stacktable.js');
		echo $this->Html->script('application.js');
		echo $this->element('sql_dump'); 
	?>
</body>
</html>
