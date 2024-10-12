<?php

    require_once "TraficoDao.php";

    class TraficoController
    {
        public $traficoDao;
        public $data;
        public $option;

        public function __construct()
        {
            $this->traficoDao = new TraficoDao();
            if(!isset($_GET['option'])) {
                $this->index();
            } else {
                switch($_GET['option']) {
                    case "create": $this->crear(); break;
                    case "store": $this->store(); break;
                    case "show": $this->show(); break;
                    case "edit": $this->edit(); break;
                    case "delete": $this->delete(); break;
                }
            }
        }

        public function index() {

            $data['trafico'] = $this->traficoDao->findAll();
            require "listado.view.php";
        }

        public function crear() {
            $data = $this->initForm();
            require "formulario.view.php";
        }

        public function store() {
            $data = $_POST['data'];

            $this->traficoDao->save($data);

            $this->index();
        }

        public function show() {
            $id = $_GET['id'] ?? null;

            $data = $this->traficoDao->findById($id);
            $data = $data[0];
            $data['readonly'] = 'readonly';
            require "formulario.view.php";
        }

        public function edit() {
            $id = $_GET['id'] ?? null;
            $data = $this->traficoDao->findById($id);
            $data = $data[0];
            require "formulario.view.php";
        }

        private function delete()
        {
            $id = $_GET['id'] ?? null;
            $this->traficoDao->delete($id);
            $this->index();
        }

        private function initForm():array {
        $data['id'] = '';
        $data['matricula'] = '';
        $data['modelo'] = '';
        $data['fecha_inscrip'] = '';
        $data['imagen'] = null;
        $data['localPathImagen'] = null;
        return $data;
    }
    }