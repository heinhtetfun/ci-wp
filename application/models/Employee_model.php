<?php
class Employee_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }
    public function get_employees($id = null)
    {
        if ($id === null) {
            $query = $this->db->get('employee');
            return $query->result_array();
        }

        $query = $this->db->get_where('employee', array('id' => $id));
        return $query->row_array();
    }
    public function create_employee()
    {
        $slug = url_title($this->input->post('name'));
        $data = array(
            'name' => $this->input->post('name'),
            // 'department' => $this->input->post('dept'),
            'age' => $this->input->post('age'),
            'dob' => $this->input->post('dob'),
            'salary' => $this->input->post('salary'),
            // 'position' => $this->input->post('position'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
        );
        return $this->db->insert('employee', $data);
    }
    public function delete_employee($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('employee');
        return true;
    }
    public function update_emp()
    {
        $data = array(
            'name' => $this->input->post('name'),
        );
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('employee', $data);
    }
}
