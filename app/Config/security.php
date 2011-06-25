<?php

$security = array (
    'CONFIG' => array('controller' => 'user', 'action' => 'login', 'encoder' => 'md5'),
    '*' => array('add'),
    'country' => array('index'),
    'group' => array('*')
);

/**
 * NOTE: Dont secure CONFIG controller and action
 * CONFIG:encoder => plaintext(par defaut), md5, sha1
 *
 * Examples config:
 *
 * array('*' => array('*')): secure all site
 * array('*' => array('add', 'delete')): secure add and delete actions
 * array('member' => array('add', 'index')): secure add and index actions of member controller
 * array('member' => array('*')): secure all actions of member controller
 */
