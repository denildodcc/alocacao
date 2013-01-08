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
			throw new NotFoundException(__('Prédio Inválido'));
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
				$this->Session->setFlash(__('Registro adicionado com sucesso'));
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
		$this->Predio->id = $id;
		if (!$this->Predio->exists()) {
			throw new NotFoundException(__('Prédio Inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Predio->save($this->request->data)) {
				$this->Session->setFlash(__('The predio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo.Por favor tente novamente'));
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
			throw new NotFoundException(__('Prédio Inválido'));
		}
		if ($this->Predio->delete()) {
			$this->Session->setFlash(__('O Predio foi excluído'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O Predio não foi excluído'));
		$this->redirect(array('action' => 'index'));
	}
}
