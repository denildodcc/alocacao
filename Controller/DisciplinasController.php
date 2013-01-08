<?php
App::uses('AppController', 'Controller');
/**
 * Disciplinas Controller
 *
 * @property Disciplina $Disciplina
 */
class DisciplinasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Disciplina->recursive = 0;
                //$disciplinas = $this->Disciplina->find('list',array ('fields'=> array('Disciplina.id','Disciplina.nome')));
		//$this->set('disciplinas', $disciplinas);
		$this->set('disciplinas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Disciplina->id = $id;
		if (!$this->Disciplina->exists()) {
			throw new NotFoundException(__('Disciplina Inválida'));
		}
		$this->set('disciplina', $this->Disciplina->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Disciplina->create();
			if ($this->Disciplina->save($this->request->data)) {
				$this->Session->setFlash(__('Registro adicionado com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo.Por favor tente novamente'));
			}
		}
		$departametos = $this->Disciplina->Departamento->find('list',array ('fields'=> array('Departamento.id','Departamento.nome')));
                debug($departametos);
		$this->set('departamentos',$departametos);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Disciplina->id = $id;
		if (!$this->Disciplina->exists()) {
			throw new NotFoundException(__('Disciplina Inválida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Disciplina->save($this->request->data)) {
				$this->Session->setFlash(__('O registro foi salvo com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo.Por favor tente novamente'));
			}
		} else {
			$this->request->data = $this->Disciplina->read(null, $id);
		}
		$departamentos = $this->Disciplina->Departamento->find('list',array ('fields'=> array('Departamento.id','Departamento.nome')));
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
		$this->Disciplina->id = $id;
		if (!$this->Disciplina->exists()) {
			throw new NotFoundException(__('Disciplina Inválida'));
		}
		if ($this->Disciplina->delete()) {
			$this->Session->setFlash(__('O registro foi excluído'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O registro não foi excluído'));
		$this->redirect(array('action' => 'index'));
	}
}
