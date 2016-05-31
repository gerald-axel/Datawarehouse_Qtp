<?php
App::uses('AppController', 'Controller');
/**
 * Facts Controller
 *
 * @property Fact $Fact
 * @property PaginatorComponent $Paginator
 */
class FactsController extends AppController {

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
		$facts = $this->Fact->query("SELECT
			T3.CategoryName AS CategoryCourseID,
			T3.CourseName As CourseName,
			T8.Description AS StatusId,
			T9.StartDate AS StartDate,
			T9.EndDate AS EndDate,
			T2.Name AS AssistantID,
			T4.Description AS EmalingID,
			(SELECT IF(T1.PromotionID = 0, 'No', 'Si')) AS PromotionID,
			T5.Type AS PaymentType,
			T7.Region AS Region,
			T7.Country AS Country,
			T1.MoneyLoose As MoneyLoose
			FROM  facts AS T1
				INNER JOIN dim_assistants AS T2 ON T2.Id = T1.AssistantId
				INNER JOIN dim_categories_courses AS T3 ON T3.Id = T1.CategoryCourseID
				INNER JOIN dim_emailing AS T4 ON T4.Id = T1.EmalingID
				INNER JOIN dim_payment_type AS T5 ON T5.Id = T1.PaymentType
				LEFT JOIN dim_promotions AS T6 ON T6.Id = T1.PromotionID
				INNER JOIN dim_regions AS T7 ON T7.Id = T1.RegionID
			   INNER JOIN dim_status AS T8 ON T8.Id = T1.StatusID
 	 			INNER JOIN dim_time AS T9 ON T9.Id = T1.TimeID AND T9.EndDate");
		$this->set('facts', $facts);
		//$this->log($facts);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fact->exists($id)) {
			throw new NotFoundException(__('Invalid fact'));
		}
		$options = array('conditions' => array('Fact.' . $this->Fact->primaryKey => $id));
		$this->set('fact', $this->Fact->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fact->create();
			if ($this->Fact->save($this->request->data)) {
				$this->Flash->success(__('The fact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The fact could not be saved. Please, try again.'));
			}
		}
		$dimAssistants = $this->Fact->DimAssistant->find('list');
		$this->set(compact('dimAssistants'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Fact->exists($id)) {
			throw new NotFoundException(__('Invalid fact'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fact->save($this->request->data)) {
				$this->Flash->success(__('The fact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The fact could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fact.' . $this->Fact->primaryKey => $id));
			$this->request->data = $this->Fact->find('first', $options);
		}
		$dimAssistants = $this->Fact->DimAssistant->find('list');
		$this->set(compact('dimAssistants'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Fact->id = $id;
		if (!$this->Fact->exists()) {
			throw new NotFoundException(__('Invalid fact'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Fact->delete()) {
			$this->Flash->success(__('The fact has been deleted.'));
		} else {
			$this->Flash->error(__('The fact could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
