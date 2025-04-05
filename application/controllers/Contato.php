<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');           // Carrega helper para base_url()
        $this->load->model('Contato_model');  // Carrega o model
        $this->load->database();              // Conecta com o banco de dados
    }

    public function index() {
        // Carrega o formulário de contato
        $this->load->view('formulario_contato');
    }

    public function enviar() {
        // Recebe os dados do formulário
        $dados = array(
            'nome'     => $this->input->post('nome'),
            'email'    => $this->input->post('email'),
            'mensagem' => $this->input->post('mensagem'),
        );

        // Chama o model para salvar os dados
        $inserido = $this->Contato_model->salvar_contato($dados);

        // Mostra mensagem de sucesso ou erro
        if ($inserido) {
            echo "<h3>Contato enviado com sucesso!</h3>";
            echo "<a href='" . base_url('index.php/contato') . "'>Voltar ao formulário</a>";
        } else {
            echo "<h3>Erro ao salvar contato.</h3>";
            echo "<a href='" . base_url('index.php/contato') . "'>Tentar novamente</a>";
        }
    }
}
