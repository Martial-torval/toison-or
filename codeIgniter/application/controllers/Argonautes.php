<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Argonautes extends CI_Controller {

	public function index()
	{
		$this->load->model('argonauteModel');
		$data = array('argonaute' => $this->argonauteModel->getAllArgonautes());
		// echo "<pre>";
		// 	var_dump($data);
		// 	"</pre>";
		$this->load->view('argonautes_views', $data);
	}


	public function addArgonaute() {
		$this->load->helper('form', 'url');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('argonauteName', 'argonauteName', 'required', array('required' => '<span class="error-msg">Le nom est obligatoire pour ajouter un Argonaute.</span>'));
		// $this->form_validation->set_rules('commentaire', 'commentaire', 'required', array('required' => 'Le commentaire est obligatoire pour ajouter un Argonaute.'));


		  if ($this->form_validation->run() == FALSE)
                {
									$this->load->model('argonauteModel');
									$data = array (
									'argonaute' => $this->argonauteModel->getAllArgonautes());
                        $this->load->view('argonautes_views', $data);
                    }

                else
                {
                          $argonauteName = $this->input->post('argonauteName');
                          $comment = $this->input->post('commentaire');
													$this->load->model('argonauteModel');
													$base_url = base_url();
                          $data = array (
                        	'argonauteName ' => $argonauteName,
													'commentaire' => $comment,
												  'argonaute' => $this->argonauteModel->getAllArgonautes());
                          $this->argonauteModel->addArgonauteInDb($argonauteName, $comment);
                          $this->load->view('argonautes_views', $data);
													redirect($base_url, 'refresh');
                }
                }

	}
