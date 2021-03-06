<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->library("session");
    }

    /**
     * List all users
     */
    public function index()
    {
        $data['title'] = 'Listar todos os usuários';
        $data['users'] = $this->user_model->getAll();


        $this->load->view('includes/header', $data);
        $this->load->view('pages/user/index.php', $data);
        $this->load->view('includes/footer');
        
    }

    /**
     * List an specific user by id
     */
    public function show($id)
    {
        if (!$user = $this->user_model->find($id))
            return redirect('/users');


        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['user'] = $user;
        $data['title'] = 'Ver usuário';

        $this->load->view('includes/header', $data);
        $this->load->view('pages/user/show.php', $data);
        $this->load->view('includes/footer');
    }

    /**
     * Display the view for create new user
     */
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Criar novo usuário';

        $this->load->view('includes/header', $data);
        $this->load->view('pages/user/create');
        $this->load->view('includes/footer');
    }

    /**
     * Process the new user creation
     */
    public function store()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->user_model->getValidationRules());

        if (!$this->form_validation->run())
            return $this->create();

        $request = $this->input->post();
        $this->user_model->create($request);

        $this->session->set_flashdata('message', 'Usuário criado com sucesso.');
        return redirect('/');
       
    }

    /**
     * Display the view for edit an user
     */
    public function edit($id)
    {
        if (!$user = $this->user_model->find($id))
            return redirect('/users');

        $this->load->helper('form');
        $this->load->library('form_validation');


        $data['title'] = 'Editar usuário';
        $data['user'] = $user;

        $this->load->view('includes/header', $data);
        $this->load->view('pages/user/edit', $data);
        $this->load->view('includes/footer');
    }

    /**
     * Process the update of an user by id
     */
    public function update($id)
    {
        if (!$user = $this->user_model->find($id))
            return redirect('/users');
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->user_model->getValidationRules());
        
        if (!$this->form_validation->run())
            return $this->edit($id);

        $data = $this->input->post();

        $this->user_model->update($data);

        $this->session->set_flashdata('message', 'Usuário editado com sucesso.');
        return redirect("/users/{$id}");
    }

    /**
     * Delete an user by id
     */
    public function destroy($id)
    {
        if (!$this->user_model->find($id))
            return redirect('/users');

        $this->user_model->destroy($id);

        $this->session->set_flashdata('message', 'Usuário deletado com sucesso.');
        return redirect("/users");
    }

    /**
     * Search for an user by name or email
     */
    public function search()
    {

        $filter = $this->input->get('filter');

        $data['title'] = 'Pesquisar por usuários';

        if (trim($filter) !== '') {
            
            $data['users'] = $this->user_model->search($filter);


            $this->load->view('includes/header', $data);
            $this->load->view('pages/user/search.php', $data);
            $this->load->view('includes/footer');
            return;
        }
       
        return $this->index();
    }

    /**
     * Used to custom callback validation function
     */
    public function check_user_email($email)
    {

        $id =  $this->uri->segment(3) ?? '';

        $isUniqueEmail = $this->user_model->check_unique_user_email($id, $email);

        if ($isUniqueEmail)
            return true;

        $this->form_validation->set_message('check_user_email', 'Email must be unique');
        return false;
    }


    /**
     * Diplay the 404 page
     */
    public function page404(){
        
        return $this->load->view('404');
    }
}
