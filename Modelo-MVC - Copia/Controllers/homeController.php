<?php
  class homeController extends Controller{
    public function index() {
        // CHAMA O MODEL
        // -------------
        // CHAMA O VIEW
        $this->carregarTemplete('home');
    }
  }

?>