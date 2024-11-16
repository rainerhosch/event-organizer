<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
		$this->load->model('M_event', 'event');
    }
	public function index()
	{
		$data['title'] = 'Event Organizer';
		$data['Page'] = 'Landing Page';
		$event = $this->event->get_data_event()->result();
		$data['event'] = $event;
		$this->load->view('template', $data);
	}
}
