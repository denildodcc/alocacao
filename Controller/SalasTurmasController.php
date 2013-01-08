<?php
App::uses('AppController', 'Controller');
/**
 * SalasTurmas Controller
 *
 * @property SalasTurma $SalasTurma
 */
class SalasTurmasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SalasTurma->recursive = 0;
		$this->set('salasTurmas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SalasTurma->id = $id;
		if (!$this->SalasTurma->exists()) {
			throw new NotFoundException(__('Invalid salas turma'));
		}
		$this->set('salasTurma', $this->SalasTurma->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
            
                $predios = $this->SalasTurma->Predio->find('list',array('fields'=> array ('Predio.id','Predio.nome')));
                $turmas = $this->SalasTurma->Turma->find('list',array('fields'=> array ('Turma.cod_turmas')));
                $disciplinas = $this->SalasTurma->Disciplina->find('list',array('fields'=> array ('Disciplina.id','Disciplina.nome')));
                
                $this->set(compact(  'turmas','disciplinas','predios'));
                               
                
		if ($this->request->is('post')) {
			$this->SalasTurma->create();
			if ($this->SalasTurma->save($this->request->data)) {
				$this->Session->setFlash(__('Alocação realizada com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A alocação não pode ser realizada'));
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
		$this->SalasTurma->id = $id;
		if (!$this->SalasTurma->exists()) {
			throw new NotFoundException(__('Invalid salas turma'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SalasTurma->save($this->request->data)) {
				$this->Session->setFlash(__('A alocação foi alterada'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A alocação não pode ser realizada.'));
			}
		} else {
			$this->request->data = $this->SalasTurma->read(null, $id);
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
		$this->SalasTurma->id = $id;
		if (!$this->SalasTurma->exists()) {
			throw new NotFoundException(__('Invalid salas turma'));
		}
		if ($this->SalasTurma->delete()) {
			$this->Session->setFlash(__('A alocação foi excluída'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('A alocação não foi excluída'));
		$this->redirect(array('action' => 'index'));
	}
}
