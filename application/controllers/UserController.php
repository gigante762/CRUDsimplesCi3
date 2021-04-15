<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['title'] = 'Listar todos os usuários';
        $data['users'] = $this->user_model->getAll();


        $this->load->view('includes/header', $data);
        $this->load->view('pages/user/index.php', $data);
        $this->load->view('includes/footer');
    }
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
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Criar novo usuário';

        $this->load->view('includes/header', $data);
        $this->load->view('pages/user/create');
        $this->load->view('includes/footer');
    }
    public function store()
    {
        $request = $this->input->post();
        $this->user_model->create($request);

        #falta passar a mensage de sucesso
        return redirect('/');
    }
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
    public function update($id)
    {
        if (!$user = $this->user_model->find($id))
            return redirect('/users');

        $data = $this->input->post();

        $this->user_model->update($data);

        return redirect("/users/{$id}");
    }

    
    public function destroy($id)
    {
        if (!$user = $this->user_model->find($id))
            return redirect('/users');

        $this->user_model->destroy($id);

        return redirect("/users/{$id}");
    }
}
