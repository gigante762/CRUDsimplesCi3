<?php
class User_model extends CI_Model
{
        protected $table = 'users';

        public function __construct()
        {
                $this->load->database();
        }

        /**
         * Return all users
         */
        public function getAll(): array
        {

                return $this->db->get($this->table)->result();
        }

        /**
         * Create new user
         */
        public function create(array $data): bool
        {
                $user['nome'] = $data['nome'];
                $user['email'] = $data['email'];
                $user['dataCadastro'] = date('Y-m-d H:i:s');
                $user['ultimaAtualizacao'] = $user['dataCadastro'];

                return $this->db->insert($this->table, $user);
        }

        /**
         * Get an user by id
         * @param String|int $id 
         */
        public function find($id): ?object
        {
                return  $this->db->get_where($this->table, array('id' => $id))->row();
        }

        /**
         * Update an user by id
         */
        public function update(array $data): bool
        {
                $id = $this->uri->segment(3);

                $user['ultimaAtualizacao'] = date('Y-m-d H:i:s');
                $user['nome'] = $data['nome'];
                $user['email'] = $data['email'];

                return $this->db->update($this->table, $user, array('id' => $id));
        }

        /**
         * Delete an user by id
         * @param String|int $id
         */
        public function destroy($id): bool
        {
                return $this->db->delete($this->table, array('id' => $id));
        }

        /**
         * Return an user by name or email.
         */
        public function search(String $filter): array
        {
                $this->db->like('nome', $filter);
                $this->db->or_like('email', $filter);

                return $this->db->get($this->table)->result();
        }

        /**
         * Return an array with the rules to be used in validations
         */
        public function getValidationRules(): array
        {

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
         * Custom callback validation function that's check if an email is unique or not.
         * Can be used for insert data and update data
         */
        function check_unique_user_email($id = '', String $email): bool
        {
                $this->db->where('email', $email);
                if ($id)
                        $this->db->where_not_in('id', $id);

                return ($this->db->get($this->table)->num_rows() == 0) ? true : false;
        }
}
