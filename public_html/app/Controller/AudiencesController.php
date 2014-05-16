<?php
App::uses('AppController', 'Controller');
/**
 * Audiences Controller
 *
 * @property Audience $Audience
 * @property PaginatorComponent $Paginator
 */
class AudiencesController extends AppController {

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
		$this->Audience->recursive = 0;
		$this->set('audiences', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Audience->exists($id)) {
			throw new NotFoundException(__('Invalid audience'));
		}
		$options = array('conditions' => array('Audience.' . $this->Audience->primaryKey => $id));
		$this->set('audience', $this->Audience->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Audience->create();
			if ($this->Audience->save($this->request->data)) {
				$this->Session->setFlash(__('The audience has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The audience could not be saved. Please, try again.'));
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
		if (!$this->Audience->exists($id)) {
			throw new NotFoundException(__('Invalid audience'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Audience->save($this->request->data)) {
				$this->Session->setFlash(__('The audience has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The audience could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Audience.' . $this->Audience->primaryKey => $id));
			$this->request->data = $this->Audience->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Audience->id = $id;
		if (!$this->Audience->exists()) {
			throw new NotFoundException(__('Invalid audience'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Audience->delete()) {
			$this->Session->setFlash(__('The audience has been deleted.'));
		} else {
			$this->Session->setFlash(__('The audience could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
