<?php
App::uses('AppController', 'Controller');
/**
 * Departamentos Controller
 *
 * @property Departamento $Departamento
 */
class DepartamentosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Departamento->recursive = 0;
		$this->set('departamentos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Departamento->id = $id;
		if (!$this->Departamento->exists()) {
			throw new NotFoundException(__('Departamento Inválido'));
		}
		$this->set('departamento', $this->Departamento->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Departamento->create();
			if ($this->Departamento->save($this->request->data)) {
				$this->Session->setFlash(__('O registro foi adicionado com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo. Por favor tente novamente'));
			}
		}
		$institutos = $this->Departamento->Instituto->find('list');
		$this->set(compact('institutos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Departamento->id = $id;
		if (!$this->Departamento->exists()) {
			throw new NotFoundException(__('Departamento Inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Departamento->save($this->request->data)) {
				$this->Session->setFlash(__('O registro foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo. Por favor tente novamente'));
			}
		} else {
			$this->request->data = $this->Departamento->read(null, $id);
		}
		$institutos = $this->Departamento->Instituto->find('list');
		$this->set(compact('institutos'));
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
		$this->Departamento->id = $id;
		if (!$this->Departamento->exists()) {
			throw new NotFoundException(__('Departamento Inválido'));
		}
		if ($this->Departamento->delete()) {
			$this->Session->setFlash(__('O registro foi excluído'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O registro não foi excluído'));
		$this->redirect(array('action' => 'index'));
	}
}
