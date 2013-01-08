<?php
App::uses('AppController', 'Controller');
/**
 * Turmas Controller
 *
 * @property Turma $Turma
 */
class TurmasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Turma->recursive = 0;
		$this->set('turmas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Turma->id = $id;
		if (!$this->Turma->exists()) {
			throw new NotFoundException(__('Invalid turma'));
		}
		$this->set('turma', $this->Turma->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Turma->create();
			if ($this->Turma->save($this->request->data)) {         
				$this->Session->setFlash(__('The turma has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The turma could not be saved. Please, try again.'));
			}
		}
		$professors = $this->Turma->Professor->find('list', array('fields'=> array ('Professor.id','Professor.nome')));
		$salas = $this->Turma->Sala->find('list');
		$disciplinas = $this->Turma->Disciplina->find('list',array('fields'=> array ('Disciplina.id','Disciplina.nome')));
		$horarios = $this->Turma->Horario->find('list');
		$cursos = $this->Turma->Curso->find('list',array('fields'=> array ('Curso.id','Curso.nome')));
                $this->set(compact( 'salas', 'horarios','disciplinas','cursos','professors'));
                
                
                
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Turma->id = $id;
		if (!$this->Turma->exists()) {
			throw new NotFoundException(__('Invalid turma'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Turma->save($this->request->data)) {
				$this->Session->setFlash(__('The turma has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The turma could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Turma->read(null, $id);
		}
		$professors = $this->Turma->Professor->find('list');
		$salas = $this->Turma->Sala->find('list');
		$horarios = $this->Turma->Horario->find('list');
		$horarios = $this->Turma->Horario->find('list');
                $cursos = $this->Turma->Curso->find('list',array('fields'=> array ('Curso.id','Curso.nome')));
		$this->set(compact('professors', 'salas', 'horarios','cursos'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($disciplina_id,$cod_turmas) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		 $this->findByiId($disciplina_id,$cod_turmas);
		//$this->Turma->disciplina_id = $disciplina_id;
		//$this->Turma->cod_turmas = $cod_turmas;
		/*if (!$this->Turma->exists()) {
			throw new NotFoundException(__('Invalid turma'));
		}*/

              //fazer função para delete
               if (!$this->Turma->query("DELETE  FROM turmas WHERE cod_turmas=$cod_turmas AND disciplina_id=$disciplina_id")) {
			$this->Session->setFlash(__('Turma deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Turma was not deleted'));
		$this->redirect(array('action' => 'index'));
             
	}
        public function findByiId($disciplina_id,$cod_turmas){
            debug($this->Turma->find('first', array('conditions' => array('Turma.disciplina_id' => $disciplina_id,'Turma.cod_turmas' => $cod_turmas))));
            return $this->Turma->find('first', array('conditions' => array('Turma.disciplina_id' => $disciplina_id,'Turma.cod_turmas' => $cod_turmas)));
        }
}
