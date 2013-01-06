<?php
App::uses('AppController', 'Controller');
/**
 * Turmas Controller
 *
 * @property Turma $Turma
 */
class TurmasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Turma->recursive = 0;
		$this->set('turmas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Turma->id = $id;
		if (!$this->Turma->exists()) {
			throw new NotFoundException(__('Invalid turma'));
		}
		$this->set('turma', $this->Turma->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Turma->create();
			if ($this->Turma->save($this->request->data)) {
				$this->Session->setFlash(__('The turma has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The turma could not be saved. Please, try again.'));
			}
		}
		$professors = $this->Turma->Professor->find('list', array('fields' => array('Professor.id', 'Professor.nome')));
		$salas = $this->Turma->Sala->find('list');
		$horarios = $this->Turma->Horario->find('list');
		$this->set(compact('professors', 'salas', 'horarios'));
                
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Turma->id = $id;
		if (!$this->Turma->exists()) {
			throw new NotFoundException(__('Invalid turma'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Turma->save($this->request->data)) {
				$this->Session->setFlash(__('The turma has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The turma could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Turma->read(null, $id);
		}
		$professors = $this->Turma->Professor->find('list');
		$salas = $this->Turma->Sala->find('list');
		$horarios = $this->Turma->Horario->find('list');
		$this->set(compact('professors', 'salas', 'horarios'));
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
		$this->Turma->id = $id;
		if (!$this->Turma->exists()) {
			throw new NotFoundException(__('Invalid turma'));
		}
		if ($this->Turma->delete()) {
			$this->Session->setFlash(__('Turma deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Turma was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
