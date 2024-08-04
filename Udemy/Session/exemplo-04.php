<?php

require_once("./condig.php");

//gerar um novo id de sessão
session_regenerate_id();

echo session_id();

var_dump($_SESSION);