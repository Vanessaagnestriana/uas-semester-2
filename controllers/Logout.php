<?php
class logout extends Controller{

    public function index(){

        session_start();

        session_destroy();

        header('location: '. base_url . '/login');

    }
    
}