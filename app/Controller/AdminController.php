<?php
App::uses('AppController', 'Controller');
/**
 * Admin Controller
 *
 */
class AdminController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

        
        public function dashboard() {
            $this->layout='home';
        }

}
