<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-54-228-207-163.eu-west-1.compute.amazonaws.com');
$CFG->dbname    = getenv('d1hs5ons3h7lk9');
$CFG->dbuser    = getenv('dniboxvpzpyzqs');
$CFG->dbpass    = getenv('9bfbf8e5a385cf8d920c9ce380f4691ebbdfb9a721f9f3457bf70099b5282d2e');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('WWWROOT');
$CFG->dataroot  = getenv('DATAROOT');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
