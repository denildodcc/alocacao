<?php
App::uses('AppController', 'Controller');
/**
 * Salas Controller
 *
 * @property Sala $Sala
 */
class SalasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sala->recursive = 0;
		$this->set('salas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Sala->id = $id;
		if (!$this->Sala->exists()) {
			throw new NotFoundException(__('Invalid sala'));
		}
		$this->set('sala', $this->Sala->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sala->create();
			if ($this->Sala->save($this->request->data)) {
				$this->Session->setFlash(__('The sala has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sala could not be saved. Please, try again.'));
			}
		}
		$turmas = $this->Sala->Turma->find('list');
		$this->set(compact('turmas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Sala->id = $id;
		if (!$this->Sala->exists()) {
			throw new NotFoundException(__('Invalid sala'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sala->save($this->request->data)) {
				$this->Session->setFlash(__('The sala has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sala could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Sala->read(null, $id);
		}
		$turmas = $this->Sala->Turma->find('list');
		$this->set(compact('turmas'));
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
		$this->Sala->id = $id;
		if (!$this->Sala->exists()) {
			throw new NotFoundException(__('Invalid sala'));
		}
		if ($this->Sala->delete()) {
			$this->Session->setFlash(__('Sala deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sala was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
