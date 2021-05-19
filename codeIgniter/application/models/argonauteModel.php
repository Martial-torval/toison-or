<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class ArgonauteModel extends CI_Model {


	public function addArgonauteInDb($argonauteName, $comment) {
		$this->load->database();
		$data = array (
		'nom' => $argonauteName,
		'commentaire' => $comment);
	  $this->db->insert("argonaute", $data);
	}

	public function getAllArgonautes() {
		$this->load->database();
		$query = $this->db->get('argonaute');
		return $query->result_array();
	}
}
