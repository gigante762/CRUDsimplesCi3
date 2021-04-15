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
}
