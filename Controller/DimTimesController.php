<?php
App::uses('AppController', 'Controller');
/**
 * DimTimes Controller
 *
 * @property DimTime $DimTime
 * @property PaginatorComponent $Paginator
 */
class DimTimesController extends AppController {

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
		$this->DimTime->recursive = 0;
		$this->set('dimTimes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DimTime->exists($id)) {
			throw new NotFoundException(__('Invalid dim time'));
		}
		$options = array('conditions' => array('DimTime.' . $this->DimTime->primaryKey => $id));
		$this->set('dimTime', $this->DimTime->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DimTime->create();
			if ($this->DimTime->save($this->request->data)) {
				$this->Flash->success(__('The dim time has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim time could not be saved. Please, try again.'));
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
		if (!$this->DimTime->exists($id)) {
			throw new NotFoundException(__('Invalid dim time'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DimTime->save($this->request->data)) {
				$this->Flash->success(__('The dim time has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim time could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DimTime.' . $this->DimTime->primaryKey => $id));
			$this->request->data = $this->DimTime->find('first', $options);
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
		$this->DimTime->id = $id;
		if (!$this->DimTime->exists()) {
			throw new NotFoundException(__('Invalid dim time'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DimTime->delete()) {
			$this->Flash->success(__('The dim time has been deleted.'));
		} else {
			$this->Flash->error(__('The dim time could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
