<?php

/**
 * Description of Autoloads
 *
 * @author Pedro Resende <pedroresende@mail.resende.biz>
 * @date 26/06/2014
 * 
 */

require_once 'psr4autoloaderclass.php';

$loader = new Autoloader\Psr4AutoloaderClass;

$loader->register();
$loader->addNamespace('Pagination', __DIR__.'/../src/Pagination');
