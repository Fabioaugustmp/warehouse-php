<?php
// Desabilita os erros do servidor
// error_reporting(0);

// Configurações de fuso horário para data/hora e localidade para aplicação 
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'Brazil', 'pt_BR.utf-8', 'portuguese');

// Pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../model'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/template'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
define('EXCEPTION_PATH', realpath(dirname(__FILE__) . '/../exceptions'));

// Arquivos
require_once(realpath(dirname(__FILE__) . '/DatabaseHandler.php'));
// require_once(realpath(dirname(__FILE__) . '/date_utils.php'));
require_once(realpath(dirname(__FILE__) . '/utils.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
// require_once(realpath(dirname(__FILE__) . '/session.php'));
require_once(realpath(MODEL_PATH . '/Model.php'));
require_once(realpath(MODEL_PATH . '/Product.php'));
// require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
// require_once(realpath(EXCEPTION_PATH . '/ValidationException.php'));