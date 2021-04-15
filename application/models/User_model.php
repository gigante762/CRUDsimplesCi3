<?php
class User_model extends CI_Model
{

        public function __construct()
        {
                $this->load->database();
        }

        public function getAll(): array
        {

                $query = $this->db->get('users');
                return $query->result();
        }
        #validation
        public function create($data)
        {
                $user['nome'] = $data['nome'];
                $user['email'] = $data['email'];
                $user['dataCadastro'] = date('Y-m-d H:i:s');
                $user['ultimaAtualizacao'] = $user['dataCadastro'];

                return $this->db->insert('users', $user);
        }

        #validation if have user, else redirect
        public function find($id)
        {
                $user =  $this->db->get_where('users', array('id' => $id))->row();

                return $user;
        }

        #validation
        public function update($data)
        {
                $id = $this->uri->segment(3);

                $user['ultimaAtualizacao'] = date('Y-m-d H:i:s');
                $user['nome'] = $data['nome'];
                $user['email'] = $data['email'];

                $this->db->update('users', $user, array('id' => $id));
        }

        public function destroy($id)
        {
                $this->db->delete('users', array('id' => $id));
        }

        public function getValidationRules(): array
        {

                $id = $this->uri->segment(3);
                $isUniqueField = ($id) ? '' : '|is_unique[users.email]';

                return [
                        [
                                'field' => 'nome',
                                'label' => 'Nome',
                                'rules' => 'trim|required|min_length[5]|max_length[255]'
                        ],

                        [
                                'field' => 'email',
                                'label' => 'Email',
                                'rules' => "trim|required|valid_email|callback_check_user_email|min_length[5]|max_length[255]"
                        ],
                ];
        }

        /**
         * Used to custom callback validation function
         */
        function check_unique_user_email($id = '', $email)
        {
                $this->db->where('email', $email);
                if ($id)
                        $this->db->where_not_in('id', $id);

                return $this->db->get('users')->num_rows();
        }
}
