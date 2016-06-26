<?php
App::uses('AppController', 'Controller');
/**
 * DimPromotions Controller
 *
 * @property DimPromotion $DimPromotion
 * @property PaginatorComponent $Paginator
 */
class DimPromotionsController extends AppController {

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
		$this->DimPromotion->recursive = 0;
		$this->set('dimPromotions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DimPromotion->exists($id)) {
			throw new NotFoundException(__('Invalid dim promotion'));
		}
		$options = array('conditions' => array('DimPromotion.' . $this->DimPromotion->primaryKey => $id));
		$this->set('dimPromotion', $this->DimPromotion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DimPromotion->create();
			if ($this->DimPromotion->save($this->request->data)) {
				$this->Flash->success(__('The dim promotion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim promotion could not be saved. Please, try again.'));
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
		if (!$this->DimPromotion->exists($id)) {
			throw new NotFoundException(__('Invalid dim promotion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DimPromotion->save($this->request->data)) {
				$this->Flash->success(__('The dim promotion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim promotion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DimPromotion.' . $this->DimPromotion->primaryKey => $id));
			$this->request->data = $this->DimPromotion->find('first', $options);
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
		$this->DimPromotion->id = $id;
		if (!$this->DimPromotion->exists()) {
			throw new NotFoundException(__('Invalid dim promotion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DimPromotion->delete()) {
			$this->Flash->success(__('The dim promotion has been deleted.'));
		} else {
			$this->Flash->error(__('The dim promotion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
