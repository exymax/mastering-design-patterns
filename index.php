<?php
ini_set('display_errors', 1);

require_once 'vendor/autoload.php';

use Patterns\Singleton\Storage;

$firstAppStorage = Storage::getInstance();

$firstAppStorage->set('nickname', 'exymax');

echo 'Nickname from app storage: <b>',$firstAppStorage->get('nickname'),'</b><br/>';

$secondAppStorage = Storage::getInstance();

echo 'Nickname from second app storage: <b>',$secondAppStorage->get('nickname'),'</b><br/>';

$secondAppStorage->remove('nickname');

echo 'Check the value again: ',$secondAppStorage->get('nickname');