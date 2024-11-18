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
