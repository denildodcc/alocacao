<?php
App::uses('AppController', 'Controller');
/**
 * Institutos Controller
 *
 * @property Instituto $Instituto
 */
class InstitutosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Instituto->recursive = 0;
		$this->set('institutos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Instituto->id = $id;
		if (!$this->Instituto->exists()) {
			throw new NotFoundException(__('Instituto inválido'));
		}
		$this->set('instituto', $this->Instituto->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Instituto->create();
			if ($this->Instituto->save($this->request->data)) {
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
		$this->Instituto->id = $id;
		if (!$this->Instituto->exists()) {
			throw new NotFoundException(__('Instituto Inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Instituto->save($this->request->data)) {
				$this->Session->setFlash(__('O registro foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo.Por favor tente novamente'));
			}
		} else {
			$this->request->data = $this->Instituto->read(null, $id);
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
		$this->Instituto->id = $id;
		if (!$this->Instituto->exists()) {
			throw new NotFoundException(__('Instituto inválido'));
		}
		if ($this->Instituto->delete()) {
			$this->Session->setFlash(__('Instituto excluído'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O Instituto não foi excluído'));
		$this->redirect(array('action' => 'index'));
	}
}
