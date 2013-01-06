<?php
App::uses('AppController', 'Controller');
/**
 * Horarios Controller
 *
 * @property Horario $Horario
 */
class HorariosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Horario->recursive = 0;
		$this->set('horarios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Horario->id = $id;
		if (!$this->Horario->exists()) {
			throw new NotFoundException(__('Invalid horario'));
		}
		$this->set('horario', $this->Horario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Horario->create();
			if ($this->Horario->save($this->request->data)) {
				$this->Session->setFlash(__('The horario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horario could not be saved. Please, try again.'));
			}
		}
		$horas = $this->Horario->Hora->find('list');
		$dias = $this->Horario->Dium->find('list');
		$turmas = $this->Horario->Turma->find('list');
		$this->set(compact('horas', 'dias', 'turmas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Horario->id = $id;
		if (!$this->Horario->exists()) {
			throw new NotFoundException(__('Invalid horario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Horario->save($this->request->data)) {
				$this->Session->setFlash(__('The horario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horario could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Horario->read(null, $id);
		}
		$horas = $this->Horario->Hora->find('list');
		$dias = $this->Horario->Dium->find('list');
		$turmas = $this->Horario->Turma->find('list');
		$this->set(compact('horas', 'dias', 'turmas'));
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
		$this->Horario->id = $id;
		if (!$this->Horario->exists()) {
			throw new NotFoundException(__('Invalid horario'));
		}
		if ($this->Horario->delete()) {
			$this->Session->setFlash(__('Horario deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Horario was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
