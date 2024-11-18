<?php
defined('BASEPATH') or exit('No direct script access allowed');
/*
 * file name     : Even
 * file type     : controller
 * file packages : CodeIgniter 3
 * author        : rizky ardiansyah
 * date-create   : 16 November 2024
 */

class Event extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('M_event', 'event');
    }

    public function index()
    {
        $data_event_id = $this->input->get('detail');
        if (!$data_event_id) {
            redirect(base_url());
        }
        $show_parts = explode('-', $data_event_id);
        if (count($show_parts) != 2) {
            redirect(base_url());
        }
        $hash_id = $show_parts[0];
        $event_id = $show_parts[1];
        if (!hash_equals($hash_id, hash('sha256', $event_id))) {
            redirect(base_url());
        }
        $data['event'] = $this->event->get_event_by_id($event_id)->row();
        if (!$data['event']) {
            show_404();
        }
        $data['title'] = 'Detail Event - ' . $data['event']->event_name;
        $data['page'] = 'Event';
        $data['content'] = 'detail';
        $this->load->view('template', $data);
    }

    public function get_upcoming_event()
    {
        if ($this->input->is_ajax_request()) {
            $result = $this->event->get_upcoming_events()->result();
            $data = [
                'status' => true,
                'code' => 200,
                'msg' => 'Ok!',
                'data' => $result
            ];
        } else {
            $data = [
                'status' => false,
                'code' => 500,
                'msg' => 'Invalid Request!',
                'data' => null
            ];
        }
        echo json_encode($data);
    }
    public function get_list_event()
    {
        if ($this->input->is_ajax_request()) {
            $data_post = $this->input->post();
            $where = null;
            $limit = $this->input->post('limit');
            $offset = null;

            if (isset($data_post['filter']) && $data_post['filter'] != null) {
                $result = $this->event->get_data_event($where, null, null)->result();
            } else {
                if (isset($data_post['length']) != null) {
                    $result = $this->event->get_data_event(null, $data_post['length'], $data_post['start'])->result();
                } else {
                    $result = $this->event->get_data_event(null, null, null)->result();
                }
            }


            foreach ($result as $i => $res) {
                $result[$i]->hash_event_id = hash('sha256', $res->event_id);
            }
            $data = [
                'status' => true,
                'code' => 200,
                'msg' => 'Ok!',
                'data' => $result
            ];
        } else {
            $data = [
                'status' => false,
                'code' => 500,
                'msg' => 'Invalid Request!',
                'data' => null
            ];
        }
        echo json_encode($data);
    }
}
