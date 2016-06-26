<?php
App::uses('AppController', 'Controller');
/**
 * DimEmailings Controller
 *
 * @property DimEmailing $DimEmailing
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class DimEmailingsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DimEmailing->recursive = 0;
		$this->set('dimEmailings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DimEmailing->exists($id)) {
			throw new NotFoundException(__('Invalid dim emailing'));
		}
		$options = array('conditions' => array('DimEmailing.' . $this->DimEmailing->primaryKey => $id));
		$this->set('dimEmailing', $this->DimEmailing->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DimEmailing->create();
			if ($this->DimEmailing->save($this->request->data)) {
				$this->Flash->success(__('The dim emailing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim emailing could not be saved. Please, try again.'));
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
		if (!$this->DimEmailing->exists($id)) {
			throw new NotFoundException(__('Invalid dim emailing'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DimEmailing->save($this->request->data)) {
				$this->Flash->success(__('The dim emailing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim emailing could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DimEmailing.' . $this->DimEmailing->primaryKey => $id));
			$this->request->data = $this->DimEmailing->find('first', $options);
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
		$this->DimEmailing->id = $id;
		if (!$this->DimEmailing->exists()) {
			throw new NotFoundException(__('Invalid dim emailing'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DimEmailing->delete()) {
			$this->Flash->success(__('The dim emailing has been deleted.'));
		} else {
			$this->Flash->error(__('The dim emailing could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
