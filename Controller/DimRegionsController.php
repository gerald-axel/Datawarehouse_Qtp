<?php
App::uses('AppController', 'Controller');
/**
 * DimRegions Controller
 *
 * @property DimRegion $DimRegion
 * @property PaginatorComponent $Paginator
 */
class DimRegionsController extends AppController {

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
		$this->DimRegion->recursive = 0;
		$this->set('dimRegions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DimRegion->exists($id)) {
			throw new NotFoundException(__('Invalid dim region'));
		}
		$options = array('conditions' => array('DimRegion.' . $this->DimRegion->primaryKey => $id));
		$this->set('dimRegion', $this->DimRegion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DimRegion->create();
			if ($this->DimRegion->save($this->request->data)) {
				$this->Flash->success(__('The dim region has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim region could not be saved. Please, try again.'));
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
		if (!$this->DimRegion->exists($id)) {
			throw new NotFoundException(__('Invalid dim region'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DimRegion->save($this->request->data)) {
				$this->Flash->success(__('The dim region has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim region could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DimRegion.' . $this->DimRegion->primaryKey => $id));
			$this->request->data = $this->DimRegion->find('first', $options);
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
		$this->DimRegion->id = $id;
		if (!$this->DimRegion->exists()) {
			throw new NotFoundException(__('Invalid dim region'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DimRegion->delete()) {
			$this->Flash->success(__('The dim region has been deleted.'));
		} else {
			$this->Flash->error(__('The dim region could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
