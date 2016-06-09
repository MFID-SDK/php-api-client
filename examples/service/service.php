<?php

use MFID\Api;

require_once '../../lib/MFID/autoload.php';

$api = Api::getInstance(require '../config/service.php');

Api::r(['service add' => $r = $api->service->add('plo', 'PLO service', 'mega Hren from PLO') ?: $api->error]);

$service_id = $r['service_id'];

Api::r(['service update' => $api->service->update($service_id, 'plotina', 'PLO service X', 'mega Pluha from PLO') ?: $api->error]);

Api::r(['service get' => $api->service->get($service_id) ?: $api->error]);

Api::r(['service del' => $api->service->delete($service_id) ?: $api->error]);

Api::r(['service list' => $api->service->list_() ?: $api->error]);