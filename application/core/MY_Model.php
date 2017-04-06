<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of My_Model
 *
 * @author Ajilore Raphael
 */

class MY_Model extends CI_Model{

    protected $table = '';
    protected $primary = 'id';

    public function __construct($data = null) {
        parent::__construct();

        $this->load->database();

        $this->load->helper('inflector');

        if (!$this->table) {
            $this->table = strtolower(plural(get_class($this)));
        }
        if(is_array($data)){
            foreach($data as $key => $value){
                if(property_exists($this,$key)) $this->$key = $value;
            }
        }
    }

    
    /**
    *
    *@param int $id Id of record to fetch
    */
    public function getOne($id) {
        $row = $this->db->get_where($this->table, array($this->primary => $id))->row_array();
         $class_name =  get_class($this);
                
         return new $class_name($row);
    
    }
    
    
    /**
    *
    *
    */
    public function getAll($fields = '', $where = array(), $table = '', $limit = '', $order_by = '', $group_by = '') {
        $data = array();
        if ($fields != '') {
            $this->db->select($fields);
        }

        if (count($where)) {
            $this->db->where($where);
        }

        if ($table != '') {
            $this->table = $table;
        }

        if ($limit != '') {
            $this->db->limit($limit);
        }

        if ($order_by != '') {
            $this->db->order_by($order_by);
        }

        if ($group_by != '') {
            $this->db->group_by($group_by);
        }

        $Q = $this->db->get($this->table);

        if ($Q->num_rows() > 0) {
            foreach ($Q->result_array() as $row) {
                $class_name =  get_class($this);
                
                $data[] = new $class_name($row);
            }
        }
        $Q->free_result();

        return $data;
    }

    /**
    *
    *
    */
    public function insert($data) {
        $data['create_time'] = date('Y-m-d H:i:s');
        $success = $this->db->insert($this->table, $data);
        if ($success) {
            return $this->db->insert_id();
        } else {
            return FALSE;
        }
    }
    
    
    /**
    *
    *
    */
    public function update($data, $id) {
        $data['edit_time'] = date('Y-m-d H:i:s');
      
        $this->db->where($this->primary, $id);
        return $this->db->update($this->table, $data);
    }

    
    /*
    *
    *
    */
    public function delete($id) 
    {
        $this->db->where($this->primary, $id);
        return $this->db->delete($this->table);
       
    }
    
     /*
     *  Get the specified primary column
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->primary;
    }
    
    /*
    * get the value of the primary column
    */
    public function getId()
    {
        if($this->primary)
        {
            return  $this->{$this->primary};
        }
    }
    
}