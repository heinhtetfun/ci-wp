<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employees extends CI_Controller
{
    public function index()
    {
        $data['employees'] = $this->employee_model->get_employees();
        $this->load->view('templates/header');
        $this->load->view('employees/index', $data);
        $this->load->view('templates/footer');
    }
    public function create()
    {
        $data['title'] = 'Create Employee';
        $this->form_validation->set_rules('name', 'Name', 'required');
        // $this->form_validation->set_rules('dept', 'Department', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('salary', 'Salary', 'required');
        // $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('employees/create_employee', $data);
            $this->load->view('templates/footer');
        } else {
            $this->employee_model->create_employee();
            redirect('index.php/employees/index');
        }
    }
    public function delete($id)
    {
        $this->employee_model->delete_employee($id);
        redirect('index.php/employees/index');
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Employee';
        $data['emp'] = $this->employee_model->get_employees($id);
        if (empty($data['emp'])) {
            show_404();
        }
        print_r($data['emp']);
        $this->load->view('templates/header');
        $this->load->view('employees/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $this->employee_model->update_emp();
        redirect('index.php/employees/index');
    }
}
