<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DataKppnController extends BaseController {
    /*
     * Konstruktor
     */

    public function __construct($registry) {
        parent::__construct($registry);
    }

    /*
     * Index
     */

    public function index() {
        
    }

    /*
     * view Data KPPN PER KANWIL
     */

    public function formIsian() {
        $this->view->render('kppn/isianKppn');
    }
    
    public function Level2() {
        $this->view->render('kppn/Lvl2');
    }
    
    public function Level1() {
        $this->view->render('kppn/Lvl1');
    }

    public function __destruct() {
        
    }

}
