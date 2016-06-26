<?php
App::uses('AppController', 'Controller');
/**
 * DimStatuses Controller
 *
 * @property DimStatus $DimStatus
 * @property PaginatorComponent $Paginator
 */
class DimStatusesController extends AppController {

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
		$this->DimStatus->recursive = 0;
		$this->set('dimStatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DimStatus->exists($id)) {
			throw new NotFoundException(__('Invalid dim status'));
		}
		$options = array('conditions' => array('DimStatus.' . $this->DimStatus->primaryKey => $id));
		$this->set('dimStatus', $this->DimStatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DimStatus->create();
			if ($this->DimStatus->save($this->request->data)) {
				$this->Flash->success(__('The dim status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim status could not be saved. Please, try again.'));
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
		if (!$this->DimStatus->exists($id)) {
			throw new NotFoundException(__('Invalid dim status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DimStatus->save($this->request->data)) {
				$this->Flash->success(__('The dim status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim status could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DimStatus.' . $this->DimStatus->primaryKey => $id));
			$this->request->data = $this->DimStatus->find('first', $options);
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
		$this->DimStatus->id = $id;
		if (!$this->DimStatus->exists()) {
			throw new NotFoundException(__('Invalid dim status'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DimStatus->delete()) {
			$this->Flash->success(__('The dim status has been deleted.'));
		} else {
			$this->Flash->error(__('The dim status could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
