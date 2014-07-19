<?php
App::uses('AppController', 'Controller');
/**
 * Times Controller
 *
 * @property Time $Time
 * @property PaginatorComponent $Paginator
 */
class TimesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Time->recursive = 0;
		$this->set('times', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Time->exists($id)) {
			throw new NotFoundException(__('Invalid time'));
		}
		$options = array('conditions' => array('Time.' . $this->Time->primaryKey => $id));
		$this->set('time', $this->Time->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Time->create();
			if ($this->Time->save($this->request->data)) {
				$this->Session->setFlash(__('The time has been saved.'));
// 				return $this->redirect(array('action' => 'index'));
// 				return $this->redirect(array('action' => 'view', $this->Time->id));
				return $this->redirect(array('action' => 'edit', $this->Time->id));
			} else {
				$this->Session->setFlash(__('The time could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data['Time']['time']['hour'] = date('H');
			$this->request->data['Time']['time']['min'] = date('i');
			$this->request->data['Time']['time']['sec'] = date('s');
			$this->request->data['Time']['time']['fraction'] = null;
			
		}
		$createdBies = $this->Time->CreatedBy->find('list');
		$modifiedBies = $this->Time->ModifiedBy->find('list');
		$this->set(compact('createdBies', 'modifiedBies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Time->exists($id)) {
			throw new NotFoundException(__('Invalid time'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Time->save($this->request->data)) {
				$this->Session->setFlash(__('The time has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Time.' . $this->Time->primaryKey => $id));
			$this->request->data = $this->Time->find('first', $options);
		}
		$createdBies = $this->Time->CreatedBy->find('list');
		$modifiedBies = $this->Time->ModifiedBy->find('list');
		$this->set(compact('createdBies', 'modifiedBies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Time->id = $id;
		if (!$this->Time->exists()) {
			throw new NotFoundException(__('Invalid time'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Time->delete()) {
			$this->Session->setFlash(__('The time has been deleted.'));
		} else {
			$this->Session->setFlash(__('The time could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
