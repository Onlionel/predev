<?php
App::uses('AppController', 'Controller');
/**
 * MediaKeys Controller
 *
 * @property MediaKey $MediaKey
 * @property PaginatorComponent $Paginator
 */
class MediaKeysController extends AppController {

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
		$this->MediaKey->recursive = 0;
		$this->set('mediaKeys', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MediaKey->exists($id)) {
			throw new NotFoundException(__('Invalid media key'));
		}
		$options = array('conditions' => array('MediaKey.' . $this->MediaKey->primaryKey => $id));
		$this->set('mediaKey', $this->MediaKey->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MediaKey->create();
			if ($this->MediaKey->save($this->request->data)) {
				$this->Session->setFlash(__('The media key has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The media key could not be saved. Please, try again.'));
			}
		}
		$mediaFiles = $this->MediaKey->MediaFile->find('list');
		$this->set(compact('mediaFiles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MediaKey->exists($id)) {
			throw new NotFoundException(__('Invalid media key'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MediaKey->save($this->request->data)) {
				$this->Session->setFlash(__('The media key has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The media key could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MediaKey.' . $this->MediaKey->primaryKey => $id));
			$this->request->data = $this->MediaKey->find('first', $options);
		}
		$mediaFiles = $this->MediaKey->MediaFile->find('list');
		$this->set(compact('mediaFiles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MediaKey->id = $id;
		if (!$this->MediaKey->exists()) {
			throw new NotFoundException(__('Invalid media key'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MediaKey->delete()) {
			$this->Session->setFlash(__('The media key has been deleted.'));
		} else {
			$this->Session->setFlash(__('The media key could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
