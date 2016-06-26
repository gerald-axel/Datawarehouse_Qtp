<?php
App::uses('AppController', 'Controller');
/**
 * DimCategoriesCourses Controller
 *
 * @property DimCategoriesCourse $DimCategoriesCourse
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class DimCategoriesCoursesController extends AppController {

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
		$this->DimCategoriesCourse->recursive = 0;
		$this->set('dimCategoriesCourses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DimCategoriesCourse->exists($id)) {
			throw new NotFoundException(__('Invalid dim categories course'));
		}
		$options = array('conditions' => array('DimCategoriesCourse.' . $this->DimCategoriesCourse->primaryKey => $id));
		$this->set('dimCategoriesCourse', $this->DimCategoriesCourse->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DimCategoriesCourse->create();
			if ($this->DimCategoriesCourse->save($this->request->data)) {
				$this->Flash->success(__('The dim categories course has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim categories course could not be saved. Please, try again.'));
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
		if (!$this->DimCategoriesCourse->exists($id)) {
			throw new NotFoundException(__('Invalid dim categories course'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DimCategoriesCourse->save($this->request->data)) {
				$this->Flash->success(__('The dim categories course has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dim categories course could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DimCategoriesCourse.' . $this->DimCategoriesCourse->primaryKey => $id));
			$this->request->data = $this->DimCategoriesCourse->find('first', $options);
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
		$this->DimCategoriesCourse->id = $id;
		if (!$this->DimCategoriesCourse->exists()) {
			throw new NotFoundException(__('Invalid dim categories course'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DimCategoriesCourse->delete()) {
			$this->Flash->success(__('The dim categories course has been deleted.'));
		} else {
			$this->Flash->error(__('The dim categories course could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
