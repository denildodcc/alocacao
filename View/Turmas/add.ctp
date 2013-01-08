<div class="turmas form">
<?php echo $this->Form->create('Turma'); ?>
	<fieldset>
		<legend><?php echo __('Add Turma'); ?></legend>
	<?php
		echo $this->Form->input('professor_id',array('options' => $professors));
		echo $this->Form->input('cod_turmas');
		echo $this->Form->input('disciplina_id',array('options' => $disciplinas));
		echo $this->Form->input('curso_id',array('options' => $cursos));
		echo $this->Form->input('deficiente');
		echo $this->Form->input('Sala');
		echo $this->Form->input('Horario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

