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
			throw new NotFoundException(__('Invalid disciplina'));
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
				$this->Session->setFlash(__('The disciplina has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disciplina could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid disciplina'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Disciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The disciplina has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disciplina could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Disciplina->read(null, $id);
		}
		$departametos = $this->Disciplina->Departamento->find('list',array ('fields'=> array('Departamento.id','Departamento.nome')));
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
			throw new NotFoundException(__('Invalid disciplina'));
		}
		if ($this->Disciplina->delete()) {
			$this->Session->setFlash(__('Disciplina deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Disciplina was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
