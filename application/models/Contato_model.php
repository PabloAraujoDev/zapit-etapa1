<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function salvar_contato($dados) {
        return $this->db->insert('contatos', $dados);
    }
}
