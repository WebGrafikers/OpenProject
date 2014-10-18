<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Default_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
}


?>