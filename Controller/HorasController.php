<?php
App::uses('AppController', 'Controller');
/**
 * Horas Controller
 *
 * @property Hora $Hora
 */
class HorasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Hora->recursive = 0;
		$this->set('horas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Hora->id = $id;
		if (!$this->Hora->exists()) {
			throw new NotFoundException(__('Invalid hora'));
		}
		$this->set('hora', $this->Hora->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hora->create();
			if ($this->Hora->save($this->request->data)) {
				$this->Session->setFlash(__('The hora has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hora could not be saved. Please, try again.'));
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
		$this->Hora->id = $id;
		if (!$this->Hora->exists()) {
			throw new NotFoundException(__('Invalid hora'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hora->save($this->request->data)) {
				$this->Session->setFlash(__('The hora has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hora could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Hora->read(null, $id);
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
		$this->Hora->id = $id;
		if (!$this->Hora->exists()) {
			throw new NotFoundException(__('Invalid hora'));
		}
		if ($this->Hora->delete()) {
			$this->Session->setFlash(__('Hora deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hora was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
