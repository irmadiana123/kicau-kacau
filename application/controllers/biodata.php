<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property M_biodata $M_biodata
 */
class Biodata extends CI_Controller {

	private $view = 'v_biodata/';
	private $redirect = 'Biodata';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_biodata');
	}

	public function index()
	{
		$read = $this->M_biodata->GetALL();
		$data = array(
			'judul' => 'DataBiodata',
			'read' => $read,
		);
		$this->load->view($this->view . 'read', $data);
	}
}