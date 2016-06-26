<?php
App::uses('AppController', 'Controller');
/**
 * DimPaymentTypes Controller
 *
 * @property DimPaymentType $DimPaymentType
 * @property PaginatorComponent $Paginator
 */
class DimPaymentTypesController extends AppController {

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
		$this->DimPaymentType->recursive = 0;
		$this->set('dimPaymentTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DimPaymentType->exists($id)) {
			throw new NotFoundException(__('Invalid dim payment type'));
		}
		$options = array('conditions' => array('DimPaymentType.' . $this->DimPaymentType->primaryKey => $id));
		$this->set('dimPaymentType', $this->DimPaymentType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DimPaymentType->create();
			if ($this->DimPaymentType->save($this->request->data)) {
				$this->Flash->success(__('The dim payment type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim payment type could not be saved. Please, try again.'));
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
		if (!$this->DimPaymentType->exists($id)) {
			throw new NotFoundException(__('Invalid dim payment type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DimPaymentType->save($this->request->data)) {
				$this->Flash->success(__('The dim payment type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim payment type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DimPaymentType.' . $this->DimPaymentType->primaryKey => $id));
			$this->request->data = $this->DimPaymentType->find('first', $options);
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
		$this->DimPaymentType->id = $id;
		if (!$this->DimPaymentType->exists()) {
			throw new NotFoundException(__('Invalid dim payment type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DimPaymentType->delete()) {
			$this->Flash->success(__('The dim payment type has been deleted.'));
		} else {
			$this->Flash->error(__('The dim payment type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
