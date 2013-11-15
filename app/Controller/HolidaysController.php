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

        
        public function view($id = NULL) {
            
            if (!$id) {
                throw new NotFoundException(__("Holiday Not Found!"));
            } else {
                
                
                $this->set('holiday', $this->Holiday->findById($id));
                
            }
        }
        
}
