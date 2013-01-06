<?php
App::uses('AppController', 'Controller');
/**
 * Predios Controller
 *
 * @property Predio $Predio
 */
class PrediosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Predio->recursive = 0;
		$this->set('predios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Predio->id = $id;
		if (!$this->Predio->exists()) {
			throw new NotFoundException(__('Invalid predio'));
		}
		$this->set('predio', $this->Predio->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Predio->create();
			if ($this->Predio->save($this->request->data)) {
				$this->Session->setFlash(__('The predio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The predio could not be saved. Please, try again.'));
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
		$this->Predio->id = $id;
		if (!$this->Predio->exists()) {
			throw new NotFoundException(__('Invalid predio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Predio->save($this->request->data)) {
				$this->Session->setFlash(__('The predio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The predio could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Predio->read(null, $id);
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
		$this->Predio->id = $id;
		if (!$this->Predio->exists()) {
			throw new NotFoundException(__('Invalid predio'));
		}
		if ($this->Predio->delete()) {
			$this->Session->setFlash(__('Predio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Predio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
