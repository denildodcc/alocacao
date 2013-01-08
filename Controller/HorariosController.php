<?php
App::uses('AppController', 'Controller');
/**
 * Horarios Controller
 *
 * @property Horario $Horario
 */
class HorariosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Horario->recursive = 0;
		$this->set('horarios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Horario->id = $id;
		if (!$this->Horario->exists()) {
			throw new NotFoundException(__('Horário Inválido'));
		}
		$this->set('horario', $this->Horario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Horario->create();
			if ($this->Horario->save($this->request->data)) {
				$this->Session->setFlash(__('Registro adicionado com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo.Por favor tente novamente'));
			}
		}
		$horas = $this->Horario->Hora->find('list', array('fields' => array('Hora.id','Hora.horas_inicial', 'Hora.horas_final')));
		$dias = $this->Horario->Dia->find('list', array('fields' => array('Dia.id','Dia.dias_da_semana')));		
		$this->set(compact('horas', 'dias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Horario->id = $id;
		if (!$this->Horario->exists()) {
			throw new NotFoundException(__('Horário Inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Horario->save($this->request->data)) {
				$this->Session->setFlash(__('O registro foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O registro não pode ser salvo.Por favor tente novamente'));
			}
		} else {
			$this->request->data = $this->Horario->read(null, $id);
		}
		$horas = $this->Horario->Hora->find('list', array('fields' => array('Hora.id','Hora.horas_inicial', 'Hora.horas_final')));
		$dias = $this->Horario->Dia->find('list', array('fields' => array('Dia.id','Dia.dias_da_semana')));
		
		$this->set(compact('horas', 'dias'));
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
		$this->Horario->id = $id;
		if (!$this->Horario->exists()) {
			throw new NotFoundException(__('Horário Inválido'));
		}
		if ($this->Horario->delete()) {
			$this->Session->setFlash(__('O registro foi excluído'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O registro não foi excluído'));
		$this->redirect(array('action' => 'index'));
	}
}
