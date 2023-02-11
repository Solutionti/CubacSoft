<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Atencion extends Admin_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->model("Citas_model");

		$this->load->model("Atencion_model");

		$this->load->model("Doctores_model");

		$this->load->model("Especialidades_model");

		$this->load->model("Atencion_model");

		$this->load->model("Pagos_model");
	}

	
}

