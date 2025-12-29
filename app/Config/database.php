<?php
class DATABASE_CONFIG {
public $default = array(
    'datasource' => 'Database/Postgres', // <--- MUDANÇA IMPORTANTE
    'persistent' => false,
    'host' => 'db',             // Nome do serviço no docker-compose
    'login' => 'cake_user',     // Usuário definido no docker-compose
    'password' => '12345',      // Senha definida no docker-compose
    'database' => 'analytics_db',
    'prefix' => '',
    'schema' => 'public',       // Postgres usa esquemas, o padrão é 'public'
    'encoding' => 'utf8',
);}