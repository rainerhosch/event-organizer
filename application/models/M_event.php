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
    
    public function __construct() {
        parent::__construct();
        // $this->_db_live = $this->load->database('db_live', TRUE);
    }

    public function get_data_event($data = null)
    {
        $this->db->select('*');
        $this->db->from('events');
        if($data != null)
            $this->db->where($data);
        // $this->db->order_by('');
        $this->db->limit(5);
        return $this->db->get();
    }
}