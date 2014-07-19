<?php
App::uses('AppController', 'Controller');
/**
 * Events Controller
 *
 * @property Event $Event
 * @property PaginatorComponent $Paginator
 */
class EventsController extends AppController {

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
		$this->Event->recursive = 0;
		$this->set('events', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
		$this->set('event', $this->Event->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Event->create();
			if (empty($this->request->data['Event']['activity_id'])) {
			} else {
				unset($this->request->data['Activity']);
			}
			if (empty($this->request->data['Event']['audience_id'])) {
			} else {
				unset($this->request->data['Audience']);
			}
			if (empty($this->request->data['Event']['date_id'])) {
// 				$this->request->data['Date']['title'] = $this->Event->Date->deconstruct('date', $this->request->data['Date']['date']);
			} else {
				unset($this->request->data['Date']);
			}
			if (empty($this->request->data['Event']['time_id'])) {
// 				$this->request->data['Time']['title'] = $this->Event->Time->deconstruct('time', $this->request->data['Time']['time']);
			} else {
				unset($this->request->data['Time']);
			}
			if (empty($this->request->data['Event']['location_id'])) {
			} else {
				unset($this->request->data['Location']);
			}
			if (empty($this->request->data['Event']['purpose_id'])) {
			} else {
				unset($this->request->data['Purpose']);
			}
// 			debug($this->request->data);
			if ($this->Event->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The event could not be saved. %s'), debug($this->Event->validationErrors)));
			}
		}
		$activities = $this->Event->Activity->find('list');
		$audiences = $this->Event->Audience->find('list');
		$dates = $this->Event->Date->find('list');
		$times = $this->Event->Time->find('list');
		$locations = $this->Event->Location->find('list');
		$purposes = $this->Event->Purpose->find('list');
		$projects = $this->Event->Project->find('list');
		$this->Event->MediaKey->displayField = 'display';
		$this->Event->MediaKey->virtualFields += $this->Event->MediaKey->foreignFields;
		$mediaKeys = $this->Event->MediaKey->find('list', array(
			'joins' => $this->Event->MediaKey->joins
		));
		$this->set(compact('activities', 'audiences', 'dates', 'times', 'locations', 'purposes', 'projects', 'mediaKeys'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if (empty($this->request->data['Event']['activity_id'])) {
			} else {
				unset($this->request->data['Activity']);
			}
			if (empty($this->request->data['Event']['audience_id'])) {
			} else {
				unset($this->request->data['Audience']);
			}
			if (empty($this->request->data['Event']['date_id'])) {
// 				$this->request->data['Date']['title'] = $this->Event->Date->deconstruct('date', $this->request->data['Date']['date']);
			} else {
				unset($this->request->data['Date']);
			}
			if (empty($this->request->data['Event']['time_id'])) {
// 				$this->request->data['Time']['title'] = $this->Event->Time->deconstruct('time', $this->request->data['Time']['time']);
			} else {
				unset($this->request->data['Time']);
			}
			if (empty($this->request->data['Event']['location_id'])) {
			} else {
				unset($this->request->data['Location']);
			}
			if (empty($this->request->data['Event']['purpose_id'])) {
			} else {
				unset($this->request->data['Purpose']);
			}
// 			debug($this->request->data);
			if ($this->Event->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The event could not be saved: %s'), var_export($this->Event->validationErrors, true)));
			}
		} else {
			$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
			$this->request->data = $this->Event->find('first', $options);
		}
		$activities = $this->Event->Activity->find('list');
		$audiences = $this->Event->Audience->find('list');
		$dates = $this->Event->Date->find('list');
		$times = $this->Event->Time->find('list');
		$locations = $this->Event->Location->find('list');
		$purposes = $this->Event->Purpose->find('list');
		$projects = $this->Event->Project->find('list');
		$this->Event->MediaKey->displayField = 'display';
		$this->Event->MediaKey->virtualFields += $this->Event->MediaKey->foreignFields;
		$mediaKeys = $this->Event->MediaKey->find('list', array(
			'joins' => $this->Event->MediaKey->joins
		));
		$this->set(compact('activities', 'audiences', 'dates', 'times', 'locations', 'purposes', 'projects', 'mediaKeys'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Event->id = $id;
		if (!$this->Event->exists()) {
			throw new NotFoundException(__('Invalid event'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Event->delete()) {
			$this->Session->setFlash(__('The event has been deleted.'));
		} else {
			$this->Session->setFlash(__('The event could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
