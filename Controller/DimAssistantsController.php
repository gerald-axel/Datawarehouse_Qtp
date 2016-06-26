<?php
App::uses('AppController', 'Controller');
/**
 * DimAssistants Controller
 *
 * @property DimAssistant $DimAssistant
 * @property PaginatorComponent $Paginator
 */
class DimAssistantsController extends AppController {

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
		$this->DimAssistant->recursive = 0;
		$this->set('dimAssistants', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DimAssistant->exists($id)) {
			throw new NotFoundException(__('Invalid dim assistant'));
		}
		$options = array('conditions' => array('DimAssistant.' . $this->DimAssistant->primaryKey => $id));
		$this->set('dimAssistant', $this->DimAssistant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DimAssistant->create();
			if ($this->DimAssistant->save($this->request->data)) {
				$this->Flash->success(__('The dim assistant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim assistant could not be saved. Please, try again.'));
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
		if (!$this->DimAssistant->exists($id)) {
			throw new NotFoundException(__('Invalid dim assistant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DimAssistant->save($this->request->data)) {
				$this->Flash->success(__('The dim assistant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim assistant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DimAssistant.' . $this->DimAssistant->primaryKey => $id));
			$this->request->data = $this->DimAssistant->find('first', $options);
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
		$this->DimAssistant->id = $id;
		if (!$this->DimAssistant->exists()) {
			throw new NotFoundException(__('Invalid dim assistant'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DimAssistant->delete()) {
			$this->Flash->success(__('The dim assistant has been deleted.'));
		} else {
			$this->Flash->error(__('The dim assistant could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
