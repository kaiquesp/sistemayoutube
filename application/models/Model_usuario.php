<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_usuario extends CI_Model{
	function login($login, $senha){
		$this->db->select('*');
		$this->db->from('usuarios');
		//verificar se o email é válido
		$this->db->where('login',$login);
		//verificar se a senha está válida
		$this->db->where('senha',$senha);
		//Verificar se o usuário está ativo
		$this->db->limit(1);
		$query = $this->db->get();
			return $query->result();
	}

	function buscaUsuarioPerfil($perfil){
		$this->db->select('nome');
		$this->db->from('usuarios');
		//verificar se o email é válido
		$this->db->where('perfilid',$perfil);
		$this->db->where('status', '1');
		$query = $this->db->get();
		if($query->num_rows()){
			return $query->result();
		}else{
			return false;
		}
	}
}