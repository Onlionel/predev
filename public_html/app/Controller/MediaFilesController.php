<?php
App::uses('AppController', 'Controller');
/**
 * MediaFiles Controller
 *
 * @property MediaFile $MediaFile
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MediaFilesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MediaFile->recursive = 0;
		$this->set('mediaFiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MediaFile->exists($id)) {
			throw new NotFoundException(__('Invalid media file'));
		}
		$options = array('conditions' => array('MediaFile.' . $this->MediaFile->primaryKey => $id));
		$this->set('mediaFile', $this->MediaFile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$dataSource = $this->MediaFile->getDataSource();
			$dataSource->begin();
			try {
				$this->MediaFile->create();
				if(!empty($this->request->data['MediaFile']['file'])) {
					$this->request->data['MediaFile']['file_name'] = $this->request->data['MediaFile']['file']['name'];
					$this->request->data['MediaFile']['file_size'] = $this->request->data['MediaFile']['file']['size'];
					$this->request->data['MediaFile']['mime_type'] = $this->request->data['MediaFile']['file']['type'];
					//TODO: get duration, width, height
					if ($this->MediaFile->save($this->request->data)) {
						if (move_uploaded_file(
							$this->request->data['MediaFile']['file']['tmp_name'], 
							WWW_ROOT . 'files' . DS . $this->request->data['MediaFile']['file_name']
						))
						{
							$this->Session->setFlash('The media file has been moved.');
						}
						else
						{
							$dataSource->rollback();					
							$this->Session->setFlash('The media file could not be moved.');
						}
						$dataSource->commit();
						$this->Session->setFlash(__('The media record has been saved.'));
						return $this->redirect(array('action' => 'index'));

					} else {				
						$dataSource->rollback();
						$this->Session->setFlash(__('The media record could not be saved.'));
// 						debug($this->MediaFile->validationErrors);
					}
				} else {				
					$this->Session->setFlash(__('The uploaded file provided no data'));
					$dataSource->rollback();
				}
			} catch(Exception $e) {
				$dataSource->rollback();
				$this->Session->setFlash(sprintf(__('The media file record not be saved: %s'), $e->getMessage()));
			}
		}
		$media = $this->MediaFile->Media->find('list');
		$createdBies = $this->MediaFile->CreatedBy->find('list');
		$modifiedBies = $this->MediaFile->ModifiedBy->find('list');
		$this->set(compact('media', 'createdBies', 'modifiedBies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MediaFile->exists($id)) {
			throw new NotFoundException(__('Invalid media file'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MediaFile->save($this->request->data)) {
				$this->Session->setFlash(__('The media file has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The media file could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MediaFile.' . $this->MediaFile->primaryKey => $id));
			$this->request->data = $this->MediaFile->find('first', $options);
		}
		$media = $this->MediaFile->Media->find('list');
		$createdBies = $this->MediaFile->CreatedBy->find('list');
		$modifiedBies = $this->MediaFile->ModifiedBy->find('list');
		$this->set(compact('media', 'createdBies', 'modifiedBies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MediaFile->id = $id;
		if (!$this->MediaFile->exists()) {
			throw new NotFoundException(__('Invalid media file'));
		}
		$this->request->allowMethod('post', 'delete');
		$dataSource = $this->MediaFile->getDataSource();
		$dataSource->begin();
		try {
			$options = array('conditions' => array('MediaFile.' . $this->MediaFile->primaryKey => $id));
			$mediaFile = $this->MediaFile->find('first', $options);
			if ($this->MediaFile->delete()) {
				if (unlink(WWW_ROOT . 'files' . DS . $mediaFile['MediaFile']['file_name'])) {
					$dataSource->commit();
					$this->Session->setFlash(__('The media file has been deleted.'));
				} else {
					$dataSource->rollback();
					$this->Session->setFlash(__('The media file could not be deleted.'));
				}
			} else {
				$dataSource->rollback();
				$this->Session->setFlash(__('The media record could not be deleted.'));
			}
		} catch(Exception $e) {
			$dataSource->rollback();
			$this->Session->setFlash(sprintf(__('The media record could not be deleted: %s'), $e->getMessage()));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
