<?php
App::uses('AppController', 'Controller');

class PostsController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Session', 'Paginator');
	
	public $paginate = array(
		'limit' => 10
	);
	
	public function index() {
		if ($this->request->is('post')) {
			$this->Post->create();
		
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('Thank you for your participation'));
				return $this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash(__('Could not create visitor'));
		}
	}
}