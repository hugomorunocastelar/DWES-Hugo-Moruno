<?php

    class Database
    {
        private static $bd = null;

        public static function connecta()
        {
            if (!self::$bd)
            {
                self::$bd = new SQLite3('db01.db');
                self::$bd -> exec(
                    'CREATE TABLE IF NOT EXISTS curriculos '.
                    '(id INTEGER PRIMARY KEY AUTOINCREMENT, nombre VARCHAR(20), '.
                    'apellidos VARCHAR(40), email STRING UNIQUE, fecha_nacimeinto DATE, '.
                    'sexo CHAR(1), aficiones VARCHAR(255), estudios VARCHAR(255), '.
                    'observaciones TEXT, imagen STRING)'
                );
                return self::$bd;
            }
        }

        public static function disconnect()
        {
            if (self::$bd)
                self::$bd -> close();
            self::$bd = null;
        }

    }
