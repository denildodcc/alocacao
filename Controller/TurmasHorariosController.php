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
			throw new NotFoundException(__('Invalid turmas horario'));
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
				$this->Session->setFlash(__('The turmas horario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The turmas horario could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid turmas horario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TurmasHorario->save($this->request->data)) {
				$this->Session->setFlash(__('The turmas horario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The turmas horario could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid turmas horario'));
		}
		if ($this->TurmasHorario->delete()) {
			$this->Session->setFlash(__('Turmas horario deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Turmas horario was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
