<?php

class Pacientes_model extends CI_model {

    public function getPacientes() {
        $this->db->select("*");
        $this->db->from("votantes");
        $result = $this->db->get();

        return $result;
    }

    public function getPacienteId($documento) {
        $this->db->select("*");
        $this->db->from("votantes");
        $this->db->where("documento", $documento);
        $result = $this->db->get();

        return $result;
    }

    public function CrearPaciente($data) {
       
        $this->db->select("id_votante");
        $this->db->from("votantes");
        $this->db->where("documento = '".$data["dni"]."'");
        $result = $this->db->get();
        $result_v2 = $result->row();

        if($result_v2==NULL){
            $datos = [
                "tpdocumento" => $data["tpdocumento"],
                "documento" => $data["dni"],
                "fecha_nacimiento" => $data["fecha_nacimiento"],
                "nombre" => $data["nombre"],
                "apellido" => $data["apellido"],
                "direccion" => $data["direccion"],
                "comuna" => $data["comuna"],
                "barrio" => $data["barrio"],
                "sexo" => $data["sexo"],
                "telefono" => $data["telefono"],
                "celular" => $data["celular"],
                "departamento" => $data["departamento"],
                "municipio" => $data["provincia"],
                "estado_civil" => $data["estado_civil"],
                "grado_academico" => $data["grado_academico"],
                "lugar_votacion" => $data["puesto_votacion"],
                "correo" => $data["correo"],
                "id_cargo" => 1 ,
                "id_institucion_dependencia" => 1 
            ];
            $this->db->insert("votantes", $datos);
            $data = [
                "success" => 1, // Todo OK,
                "message" => 'Votante Registrado Correctamente'  // Paciente Actualizado Correctamente,
            ];
            echo  json_encode($data);
        }else{
            $data = [
                "success" => 2, // Atencion WARNING,
                "message" => 'Ya existe un Votante con este N° Documento'  // Ya existe un paciente con este N° Documento
                ,
            ];
            echo  json_encode($data);
        }
    }   

    public function CountPacientes() {
        $this->db->select("count(*) as numero");
        $this->db->from("votantes");
        $result = $this->db->get();
        
        return $result->row();
    }

    public function actualizarPaciente($data, $id) {

        /****VALIDANDO NRO DOC** */
        /****VALIDANDO NRO DOC** */
        $this->db->select("codigo_paciente");
        $this->db->from("pacientes");
        $this->db->where("documento", $data["dni"]);
        $resultaa = $this->db->get();
        $resultaa_v2 = $resultaa->row();
        //echo ($resultaa_v2->codigo_paciente);

        $this->db->select("codigo_paciente");
        $this->db->from("pacientes");
        $this->db->where("documento = '".$data["dni"]."' AND codigo_paciente != '".$resultaa_v2->codigo_paciente."'");
        $result = $this->db->get();
        $result_v2 = $result->row();
        /****VALIDANDO NRO DOC** */
        /****VALIDANDO NRO DOC** */

        if($result_v2==NULL){
            $datos = [
                "direccion" => $data["direccion"],
                "telefono" => $data["celular"],
                "familiar_documento" => $data["documento"],
                "familiar_nombre" => $data["responsable"],
                "ocupacion" => $data["ocupacion"],
                "sexo" => $data["sexo"],
                "edad" => $data["edad"],
                "fecha_nacimiento" => $data["fecha_nacimiento"],
                "grado_academico" => $data["grado_academico"],
                "estado_civil" => $data["estado_civil"],
                "departamento" => $data["departamento"],
                "provincia" => $data["provincia"],
                "distrito" => $data["distrito"],
            ];
            $this->db->where("codigo_paciente", $id);
            $this->db->update("pacientes", $datos);
            $data = [
                "success" => 1, // Todo OK,
                "message" => 'Paciente Actualizado Correctamente'  // Paciente Actualizado Correctamente,
            ];
            echo  json_encode($data);
        }else{
            $data = [
                "success" => 2, // Atencion WARNING,
                "message" => 'Ya existe un paciente con este N° Documento'  // Ya existe un paciente con este N° Documento
                ,
            ];
            echo  json_encode($data);
        }
    }

    public function eliminarPaciente($id) {
        $data = [
            "estado" => "Inactivo"
        ];
        $this->db->where("id_votante", $id);
        $this->db->update("votantes", $data);
    }

      public function cargarPacientesPaginacion($params){
		$columns = $totalRecords = $data = array();
		$columns = array( 
			0 => 'tpdocumento',
			1 => 'documento', 
			2 => 'fecha_nacimiento',
			3 => 'nombre',
			4 => 'apellido',
			5 => 'direccion',
			6 => 'comuna',
            7 => 'barrio',
            8 => 'sexo',
            9 => 'telefono',
            10 => 'celular',
            11 => 'departamento',
            12 => 'municipio',
            13 => 'grado_academico',
            14 => 'lugar_votacion',
            15 => 'correo',
            16 => 'id_cargo',
            17 => 'id_institucion_dependencia',
            18 => 'fecha_sufragacion',
            19 => 'hora_sufragacion',
		);

		$where = $sqlTot = $sqlRec = "";
		if( !empty($params['search']['value']) ) {   
			$where .=" AND (";
			$cont = 0;
			foreach ($columns as $key => $value){
				if($value != "acciones" && $value != "estado"){
					if($cont > 0){
						$where .=" OR ";
					}
					$where .=" ".$value." LIKE '%".$params['search']['value']."%' ";    
					$cont++;
				}
			}
			$where .=" )";
		}
		$sql = "SELECT * FROM votantes WHERE estado = 'Activo'";
		$sqlTot .= $sql;
		$sqlRec .= $sql;

		if(isset($where) && $where != ''){
			$sqlTot .= $where;
			$sqlRec .= $where;
		}
	
		if($columns[$params['order'][0]['column']] != 'acciones'){
			$sqlRec .= " ORDER BY ". $columns[$params['order'][0]['column']]." ".$params['order'][0]['dir']." ";
		}

	 	$sqlRec .=  "  LIMIT ".$params['start']." ,".$params['length']." ";
	 	$queryTot = $this->db->query($sqlTot);

	 	$totalRecords = $queryTot->num_rows();

	 	$queryRecords = $this->db->query($sqlRec);

	 	return array("queryRecords" => $queryRecords, "totalRecords" => $totalRecords, "params" => $params);
	}


}
?>