<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    public function get_array($table, $param=null, $limit=null, $order=null)
    {

        $this->db->select('*');

        if(isset($param))
        {
            $this->db->where($param);
        }

        if(isset($limit))
        {
            $this->db->limit($limit['limit'], $limit['start']);
        }

        if(isset($order))
        {
            $this->db->order_by($order['field'], $order['by']);
        }

        $query  = $this->db->get($table);
        return $query->result();
    }

    public function get_row()
    {

    }

}
