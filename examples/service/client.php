<?php

use MFID\Api;

require_once '../../lib/MFID/autoload.php';

$api = Api::getInstance(require '../config/service.php');

Api::r(['client add' => $r = $api->client->add('plo', 'PLO client', 'mega Hren from PLO') ?: $api->error]);

$client_id = $r['client_id'];

Api::r(['client update' => $api->client->update($client_id, 'plotina', 'PLO client X', 'mega Pluha from PLO') ?: $api->error]);

Api::r(['client get' => $api->client->get($client_id) ?: $api->error]);

Api::r(['client del' => $api->client->delete($client_id) ?: $api->error]);

Api::r(['client list' => $api->client->list_() ?: $api->error]);