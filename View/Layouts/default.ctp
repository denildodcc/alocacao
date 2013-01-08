<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
                //echo $this->Html->image('ufba.icon.jpg');
		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
                    
                </div>
            
               
		<div id="content">

                    
                    <div class="actions">
                    <h3><?php echo __('Menu'); ?></h3>
                    <ul>

                            <li><?php echo $this->Html->link(__('Turmas'), array('controller' => 'turmas')); ?></li>
                            <li><?php echo $this->Html->link(__('Professores'), array('controller' => 'professors', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('Institutos'), array('controller' => 'institutos', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('Predios'), array('controller' => 'predios', 'action' => 'index')); ?> </li>
                    </ul>
                    </div>
                    
                    
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
                    
                    
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
</body>
</html>
