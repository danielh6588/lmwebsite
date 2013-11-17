<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 */
class CategoriesController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
        
        public function admin_index() {
            
                $this->layout='admin';
	}
        
        public function view($id = NULL) {
            
            if (!$id) {
                throw new NotFoundException(__('Travel category not found!'));
            } else {   
                
                // get the current cat information based on ID passed through GET
                $currentCat = $this->Category->findById($id);
                $this->set('currentCat', $currentCat);
                
                $this->loadModel('Holiday');
                // get all the holidays with the category number
                $getHolidays = $this->Holiday->findAllByCat_id($id);
                $this->set('holidays', $getHolidays);
                
            }
            
           
                
            
        }

}
