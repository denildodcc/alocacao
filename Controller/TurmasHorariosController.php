<?php
App::uses('AppController', 'Controller');
/**
 * TurmasHorarios Controller
 *
 * @property TurmasHorario $TurmasHorario
 */
class TurmasHorariosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TurmasHorario->recursive = 0;
		$this->set('turmasHorarios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TurmasHorario->id = $id;
		if (!$this->TurmasHorario->exists()) {
			throw new NotFoundException(__('Turmas e horários inválidos'));
		}
		$this->set('turmasHorario', $this->TurmasHorario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TurmasHorario->create();
			if ($this->TurmasHorario->save($this->request->data)) {
				$this->Session->setFlash(__('Horario adicionado a turma '));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O horario não pode ser adicionado'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TurmasHorario->id = $id;
		if (!$this->TurmasHorario->exists()) {
			throw new NotFoundException(__('Turmas e horários inválidos'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TurmasHorario->save($this->request->data)) {
				$this->Session->setFlash(__('O horário da turma foi atualizado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O horario não pode ser adicionado'));
			}
		} else {
			$this->request->data = $this->TurmasHorario->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->TurmasHorario->id = $id;
		if (!$this->TurmasHorario->exists()) {
			throw new NotFoundException(__('Turmas e horários inválidos'));
		}
		if ($this->TurmasHorario->delete()) {
			$this->Session->setFlash(__('O horario da turma foi excluído'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O horário da turma não pode ser excluído'));
		$this->redirect(array('action' => 'index'));
	}
        
        public function echoHorario($id){
            $horario = $this->TurmasHorario->findById($id); 
            $stringHorario = $horario['Dia']['nome'];
            return $stringHorario;
        }
}
