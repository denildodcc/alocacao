<?php
echo $this->Html->link('Inicial', array('controller' => 'pages', 'action' => 'display')) . '|';
echo $this->Html->link('Posts', array('controller' => 'posts', 'action' => 'index')) . '|';
echo $this->Html->link('Comentários', array('controller' => 'comentarios', 'action' => 'index')) . '|';
echo $this->Html->link('Grupos', array('controller' => 'grupos', 'action' => 'index')) . '|';
echo $this->Html->link('Usuários', array('controller' => 'usuarios', 'action' => 'index'));
?>