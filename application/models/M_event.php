<?php
defined('BASEPATH') or exit('No direct script access allowed');
/*
 * file name     : M_event
 * file type     : models
 * file packages : CodeIgniter 3
 * author        : rizky ardiansyah
 * date-create   : 16 November 2024
 */

class M_event extends CI_Model
{
    var $column_order = array(); //set column field database for datatable orderable
    var $column_search = array(); //set column field database for datatable searchable 
    var $order = array(); // default order 

    public function __construct()
    {
        parent::__construct();
        // $this->_db_live = $this->load->database('db_live', TRUE);
    }

    public function get_event_by_id($event_id)
    {
        $this->db->select('*');
        $this->db->from('events');
        $this->db->where('event_id', $event_id);
        return $this->db->get();
    }

    public function get_data_event($filter = null, $length = null, $start = null)
    {
        $this->db->select('*');
        $this->db->from('events');
        if ($filter != null)
            $this->db->where($filter);
        // $this->db->order_by('');
        if ($length != null)
            $this->db->limit($length);

        $this->db->order_by('event_id', 'DESC');
        return $this->db->get();
    }

    public function get_upcoming_events()
    {
        $this->db->select('*');
        $this->db->from('events');
        $this->db->where('event_date >', 'CURDATE()', FALSE); // Perhatikan penggunaan FALSE untuk menghindari escaping pada CURDATE()
        $this->db->order_by('event_id', 'DESC');
        return $this->db->get();
    }


}