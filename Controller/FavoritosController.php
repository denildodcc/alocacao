<?php
App::uses('AppController', 'Controller');
/**
 * Favoritos Controller
 *
 * @property Favorito $Favorito
 */
class FavoritosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Favorito->recursive = 0;
		$this->set('favoritos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Favorito->id = $id;
		if (!$this->Favorito->exists()) {
			throw new NotFoundException(__('Invalid favorito'));
		}
		$this->set('favorito', $this->Favorito->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Favorito->create();
			if ($this->Favorito->save($this->request->data)) {
				$this->Session->setFlash(__('The favorito has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favorito could not be saved. Please, try again.'));
			}
		}
		$institutos = $this->Favorito->Instituto->find('list');
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
		$this->Favorito->id = $id;
		if (!$this->Favorito->exists()) {
			throw new NotFoundException(__('Invalid favorito'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Favorito->save($this->request->data)) {
				$this->Session->setFlash(__('The favorito has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favorito could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Favorito->read(null, $id);
		}
		$institutos = $this->Favorito->Instituto->find('list');
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
		$this->Favorito->id = $id;
		if (!$this->Favorito->exists()) {
			throw new NotFoundException(__('Invalid favorito'));
		}
		if ($this->Favorito->delete()) {
			$this->Session->setFlash(__('Favorito deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Favorito was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
