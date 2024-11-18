<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * file name     : Home
 * file type     : controller
 * file packages : CodeIgniter 3
 * author        : rizky ardiansyah
 * date-create   : 16 November 2024
 */
class Home extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
		$this->load->model('M_event', 'event');
    }
	public function index()
	{
		$data['title'] = 'Event Organizer';
		$data['page'] = 'Landing Page';
		// $event = $this->event->get_data_event()->result();
		// $data['event'] = $event;
		$this->load->view('template', $data);
	}
}
