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
        
        public function admin_edit($id = NULL) {
            $this->layout='admin';
            
            if (!$id) {
                throw new NotFoundException(__("Can't find holiday to edit"));
            } else {
                $this->set('holiday', $this->Holiday->findById($id));
            }
	}
        
        public function view($id = NULL) {
            
            if (!$id) {
                throw new NotFoundException(__("Holiday Not Found!"));
            } else {
                
                
                $this->set('holiday', $this->Holiday->findById($id));
                
            }
        }
        
}
