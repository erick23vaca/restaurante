<?php
class Restaurantes extends CI_Controller
{
  // constructor
    function __construct()
    {
      parent::__construct();
    }
    // Renderizacuion de la vistaqu emuestra los desayunos
    public function desayunos(){
      $this->load->view('header');
      $this->load->view('restaurantes/desayunos');
      $this->load->view('footer');
    }
    public function almuerzos(){
      $this->load->view('header');
      $this->load->view('restaurantes/almuerzos');
      $this->load->view('footer');
    }
    public function meriendas(){
      $this->load->view('header');
      $this->load->view('restaurantes/meriendas');
      $this->load->view('footer');
    }
    public function platos(){
      $this->load->view('header');
      $this->load->view('restaurantes/platos');
      $this->load->view('footer');
    }
    public function mision(){
      $this->load->view('header');
      $this->load->view('restaurantes/mision');
      $this->load->view('footer');
    }
    public function vision(){
      $this->load->view('header');
      $this->load->view('restaurantes/vision');
      $this->load->view('footer');
    }
    public function ubicaciones(){
      $this->load->view('header');
      $this->load->view('restaurantes/ubicaciones');
      $this->load->view('footer');
    }
}//no borrar


 ?>
