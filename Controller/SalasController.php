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
			throw new NotFoundException(__('Sala inválida'));
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
				$this->Session->setFlash(__('O registro foi adicionado com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo.Por favor tente novamente'));
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
			throw new NotFoundException(__('Sala inválida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sala->save($this->request->data)) {
				$this->Session->setFlash(__('O registro não foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo.Por favor tente novamente'));
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
			throw new NotFoundException(__('Sala inválida'));
		}
		if ($this->Sala->delete()) {
			$this->Session->setFlash(__('A Sala foi excluída'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('A sala não foi excluída'));
		$this->redirect(array('action' => 'index'));
	}
}
