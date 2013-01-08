<?php
App::uses('AppController', 'Controller');
/**
 * Dias Controller
 *
 * @property Dia $Dia
 */
class DiasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dia->recursive = 0;
		$this->set('dias', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Dia->id = $id;
		if (!$this->Dia->exists()) {
			throw new NotFoundException(__('Dia inválido'));
		}
		$this->set('dia', $this->Dia->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dia->create();
			if ($this->Dia->save($this->request->data)) {
				$this->Session->setFlash(__('O registro foi adicionado com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo.Por favor tente novamente'));
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
		$this->Dia->id = $id;
		if (!$this->Dia->exists()) {
			throw new NotFoundException(__('Dia inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Dia->save($this->request->data)) {
				$this->Session->setFlash(__('O registro foi salvo com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo.Por favor tente novamente'));
			}
		} else {
			$this->request->data = $this->Dia->read(null, $id);
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
		$this->Dia->id = $id;
		if (!$this->Dia->exists()) {
			throw new NotFoundException(__('Dia inválido'));
		}
		if ($this->Dia->delete()) {
			$this->Session->setFlash(__('Dia deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dia was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
