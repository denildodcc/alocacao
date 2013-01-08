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
			throw new NotFoundException(__('Hora inválida'));
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
				$this->Session->setFlash(__('Registro adicionado com sucesso!'));
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
		$this->Hora->id = $id;
		if (!$this->Hora->exists()) {
			throw new NotFoundException(__('Hora inválida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hora->save($this->request->data)) {
				$this->Session->setFlash(__('O registro foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo.Por favor tente novamente'));
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
			throw new NotFoundException(__('Hora inválida'));
		}
		if ($this->Hora->delete()) {
			$this->Session->setFlash(__('A hora foi excluída'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('A hora não foi excluída'));
		$this->redirect(array('action' => 'index'));
	}
}
