<?php

class Triaje_model extends CI_model {

    public function getTriaje() {
        $this->db->select(" a.*,p.nombre as paciente,p.documento,p.apellido, m.nombre, e.descripcion");
        $this->db->from("atenciones a");
        $this->db->join("pacientes p", "a.paciente = p.documento");
        $this->db->join("doctores m", "a.medico = m.codigo_doctor");
        $this->db->join("especialidades e", "a.especialidad = e.codigo_especialidad");
        $this->db->where("a.estado", "Triaje");
        $this->db->order_by("codigo_atencion", "asc");
        $result = $this->db->get();

        return $result;
    }

    public function getTriajeId($id) {
        $this->db->select(" a.*,p.codigo_paciente,p.nombre as paciente,p.apellido, p.edad,p.documento,m.codigo_doctor ,m.nombre, e.descripcion");
        $this->db->from("atenciones a");
        $this->db->join("pacientes p", "a.paciente = p.documento");
        $this->db->join("doctores m", "a.medico = m.codigo_doctor");
        $this->db->join("especialidades e", "a.especialidad = e.codigo_especialidad");
        $this->db->where("paciente", $id);
        
        $result = $this->db->get();

        return $result->row();
    }

    public function actualizarfechaHora($datos){
        $datos = [
            "nombre" => $datos["nombre"],
            "fecha" => $datos["fecha"],
            "hora_inicio" => $datos["horaini"],
            "hora_final" => $datos["horafin"],
            "estado" => "Activo"
        ];
        
        $this->db->insert("configuracion", $datos);
    }

    public function getEvento() {
        $this->db->select("*");
        $this->db->from("configuracion");
        $result = $this->db->get();

        return $result;
    }

}