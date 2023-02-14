<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Triaje extends Admin_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model("Atencion_model");
		$this->load->model("Doctores_model");
		$this->load->model("Especialidades_model");
		$this->load->model("Atencion_model");
		$this->load->model("Triaje_model");
	}
	
	public function index()
	{
		$eventos = $this->Triaje_model->getEvento();
		$data = ["evento" => $eventos];
		$this->load->view('administrador/triaje', $data);
	}

	public function getTriajeId() {
		$dni = $this->input->post("id");
		$result = $this->Triaje_model->getTriajeId($dni);

		echo json_encode($result);
	}

	public function actualizarFechaHora(){
		$id = $this->input->post("id");
		$nombre = $this->input->post("nombre");
		$fecha = $this->input->post("fecha");
		$horaini = $this->input->post("horaini");
		$horafin = $this->input->post("horafin");
	
		$datos = array(
		  "id" => $id,
		  "nombre" => $nombre,
		  "fecha" => $fecha,
		  "horaini" => $horaini,
		  "horafin" => $horafin
		);
		$this->Triaje_model->actualizarFechaHora($datos);
	
	}
}
