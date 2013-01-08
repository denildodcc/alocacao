<?php
App::uses('AppController', 'Controller');
/**
 * Cursos Controller
 *
 * @property Curso $Curso
 */
class CursosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Curso->recursive = 0;
		$this->set('cursos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Curso->id = $id;
		if (!$this->Curso->exists()) {
			throw new NotFoundException(__('Curso inválido'));
		}
                
		$this->set('curso', $this->Curso->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Curso->create();
			if ($this->Curso->save($this->request->data)) {
				$this->Session->setFlash(__('Registro adicionado com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo. Por favor tente novamente.'));
			}
		}
		
                $departamentos = $this->Curso->Departamento->find('list',array('fields'=> array ('Departamento.id','Departamento.nome')));
		$this->set(compact('departamentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Curso->id = $id;
		if (!$this->Curso->exists()) {
			throw new NotFoundException(__('Curso Inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Curso->save($this->request->data)) {
				$this->Session->setFlash(__('O registro foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo. Por favor tente novamente.'));
			}
		} else {
			$this->request->data = $this->Curso->read(null, $id);
		}
                $departamentos = $this->Curso->Departamento->find('list',array('fields'=> array ('Departamento.id','Departamento.nome')));
		$this->set(compact('departamentos'));
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
		$this->Curso->id = $id;
		if (!$this->Curso->exists()) {
			throw new NotFoundException(__('Curso inválido'));
		}
		if ($this->Curso->delete()) {
			$this->Session->setFlash(__('Registro excluído com sucesso'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O registro não foi excluído'));
		$this->redirect(array('action' => 'index'));
	}
}
