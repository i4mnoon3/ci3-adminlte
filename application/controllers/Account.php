<?php

class Account extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  function dashboard() {
    $this->layout->view('account/dashboard');
  }

  function dashboard2() {
    $this->layout->view('account/dashboard2');
  }

}
