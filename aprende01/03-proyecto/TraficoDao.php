<?php

    require_once 'Dao.php';
    require_once 'Database.php';

    class TraficoDao implements Dao
    {
        public $bd;
        public function __construct()
        {
            $this->bd = Database::connecta();
        }

        public function save($data): int|null
        {
            // TODO: Implement save() method.
        }

        public function findById(int $id): array|null
        {
            // TODO: Implement findById() method.
        }

        public function update(int $id, array $data): bool
        {
            // TODO: Implement update() method.
        }

        public function findAll(): array|null
        {
            // TODO: Implement findAll() method.
        }

        public function delete(int $id): bool
        {
            // TODO: Implement delete() method.
        }
    }