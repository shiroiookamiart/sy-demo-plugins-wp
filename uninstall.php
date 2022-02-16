<?php
//dbexample es el nombre de la tabla que has creado

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

delete_option('dbexample'); 
delete_site_option('dbexample'); //Para multisitios