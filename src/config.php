<?php

 return
     [
         'database' =>
         [
             'driver'   => 'pdo_mysql',
             'user'     => 'root',
             'password' => '',
             'dbname'   => 'projekt_restauracja',
             'charset'  => 'utf8'
         ],

         'twig' =>
            [
                'dir'   => __DIR__,
                'cache' => __DIR__ . '/../cache'
            ]
     ];