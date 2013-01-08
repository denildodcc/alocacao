<?php
App::uses('AppController', 'Controller');
/**
 * Professors Controller
 *
 * @property Professor $Professor
 */
class ProfessorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Professor->recursive = 0;
		$this->set('professors', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Professor->id = $id;
		if (!$this->Professor->exists()) {
			throw new NotFoundException(__('Professor inválido'));
		}
		$this->set('professor', $this->Professor->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Professor->create();
			if ($this->Professor->save($this->request->data)) {
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
		$this->Professor->id = $id;
		if (!$this->Professor->exists()) {
			throw new NotFoundException(__('Professor inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Professor->save($this->request->data)) {
				$this->Session->setFlash(__('O registro foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo.Por favor tente novamente'));
			}
		} else {
			$this->request->data = $this->Professor->read(null, $id);
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
		$this->Professor->id = $id;
		if (!$this->Professor->exists()) {
			throw new NotFoundException(__('Professor inválido'));
		}
		if ($this->Professor->delete()) {
			$this->Session->setFlash(__('O registro foi excluído'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O registro não foi excluído'));
		$this->redirect(array('action' => 'index'));
	}
}
