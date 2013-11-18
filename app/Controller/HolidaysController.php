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

        $this->layout = 'admin';
        $this->loadModel('Category');
        
        $this->set('holidays', $this->Holiday->find('all'));
    }

    public function admin_edit($id = NULL) {
        $this->layout = 'admin';

        $holiday = $this->Holiday->findById($id);
        
        $this->loadModel('Category');
        $this->set('cats', $this->Category->find('list'));

        if (!$holiday) {
            throw new NotFoundException(__("Can't find holiday to edit"));
        } else {
            $this->set('holidays', $holiday);
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Holiday->id = $id;
            if ($this->Holiday->save($this->request->data)) {
                $this->Session->setFlash(__('Your holiday has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your holiday.'));
        }

        if (!$this->request->data) {
            $this->request->data = $holiday;
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
