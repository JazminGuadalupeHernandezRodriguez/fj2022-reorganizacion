<?php
    use  \mysqli;

    class MySQL extends \mysqli {
        protected$data = [
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => '',
            'dbname' => 'uadeo',
            'port' => 3306
        ];
    }
?>