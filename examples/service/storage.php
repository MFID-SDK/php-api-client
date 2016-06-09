<?php

use MFID\Api;

require_once '../../lib/MFID/autoload.php';

$api = Api::getInstance(require '../config/service.php');

# set key
$response = $api->storage->set('key1', 'value of key1', 0);

Api::r(['set key' => $response ?: $api->error]);

# set key
$response = $api->storage->set('key2', 'value of key2', 1);

Api::r(['set key' => $response ?: $api->error]);

# set key
$response = $api->storage->set('key3', 'value of key3', null);

Api::r(['set key' => $response ?: $api->error]);

# set key
$response = $api->storage->set('key4', 'value of key4', 'piy');

Api::r(['set key' => $response ?: $api->error]);

# get key
$response = $api->storage->get(['key1', 'key2'], 1);

Api::r(['get key' => $response ?: $api->error]);

# get key
$response = $api->storage->get('key3,key4');

Api::r(['get key' => $response ?: $api->error]);

# storage get keys
$response = $api->storage->getKeys(1);

Api::r(['storage get keys' => $response ?: $api->error]);

# storage get keys
$response = $api->storage->getKeys(null);

Api::r(['storage get keys' => $response ?: $api->error]);


