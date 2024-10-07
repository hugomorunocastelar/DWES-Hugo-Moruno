<?php

    require_once "TraficoDao.php";

    class TraficoController
    {
        public $traficoDao;
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
            if (isset($_FILES['imagen'])) {
                $imagen = $_FILES['imagen'] ?? '';
                $localPathImagen = $imagen['name'];
            } else {
                $localPathImagen = null;
            }
            require "formulario.view.php";
        }

        private function initForm():array {
            $data['id'] = '';
            $data['matricula'] = '';
            $data['modelo'] = '';
            $data['fecha_inscrip'] = '';
            $data['imagen'] = null;
            $data['localPathImagen'] = '';
            return $data;
        }
    }