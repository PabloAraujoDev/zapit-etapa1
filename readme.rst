###################
ZapIT - Etapa 1: Sistema Legado com CodeIgniter
###################

Este projeto faz parte do desafio de desenvolvimento da ZapIT, focando na construção de um sistema legado utilizando tecnologias clássicas do desenvolvimento web.

*******************
 OBJETIVO
*******************
Desenvolver uma "página de contato" com formulário funcional que salva os dados inseridos em um banco de dados MySQL, utilizando o framework "CodeIgniter" com PHP.


**************************
TECNOLOGIAS UTILIZADAS
**************************
- HTML5
- CSS3
- Bootstrap 3
- jQuery
- PHP 8 (CodeIgniter)
- MySQL
- XAMPP (ambiente local)
*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
ESTRUTURA DO PROJETO
************

zapit-contatos/ │ ├── application/ │ ├── controllers/ │ │ └── Contato.php │ ├── models/ │ │ └── Contato_model.php │ └── views/ │ └── formulario_contato.php │ ├── config/ │ └── database.php, config.php, etc. │ └── index.php

*******
FUNCIONALIDADES
*******
- Formulário com campos: nome, email, telefone e mensagem
- Validação básica no frontend com jQuery
- Envio dos dados para o backend com CodeIgniter
- Armazenamento dos dados em uma tabela MySQL (`contatos`)

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
