<?php
App::uses('AppController', 'Controller');
/**
 * Holidays Controller
 *
 */
class HolidaysController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

        public function admin_index() {
            
                $this->layout='admin';
                
                $this->set('holidays', $this->Holiday->find('all'));
	}
        
        public function admin_edit() {
            $this->layout='admin';
	}
        
        public function view($id = NULL) {
            
            if (!$id) {
                throw new NotFoundException(__("Holiday Not Found!"));
            } else {
                
                
                $this->set('holiday', $this->Holiday->findById($id));
                
            }
        }
        
}
