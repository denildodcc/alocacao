<?php
App::uses('AppController', 'Controller');
/**
 * SalasTurmas Controller
 *
 * @property SalasTurma $SalasTurma
 */
class SalasTurmasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SalasTurma->recursive = 0;
		$this->set('salasTurmas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SalasTurma->id = $id;
		if (!$this->SalasTurma->exists()) {
			throw new NotFoundException(__('Invalid salas turma'));
		}
		$this->set('salasTurma', $this->SalasTurma->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SalasTurma->create();
			if ($this->SalasTurma->save($this->request->data)) {
				$this->Session->setFlash(__('The salas turma has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salas turma could not be saved. Please, try again.'));
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
		$this->SalasTurma->id = $id;
		if (!$this->SalasTurma->exists()) {
			throw new NotFoundException(__('Invalid salas turma'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SalasTurma->save($this->request->data)) {
				$this->Session->setFlash(__('The salas turma has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salas turma could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SalasTurma->read(null, $id);
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
		$this->SalasTurma->id = $id;
		if (!$this->SalasTurma->exists()) {
			throw new NotFoundException(__('Invalid salas turma'));
		}
		if ($this->SalasTurma->delete()) {
			$this->Session->setFlash(__('Salas turma deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Salas turma was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
