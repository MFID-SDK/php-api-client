<?php

use MFID\Api;

require_once '../../lib/MFID/autoload.php';

$api = Api::getInstance(require '../config/service.php');

Api::r(['addon add' => $r = $api->addon->add('plo', 'PLO addon', 'mega Hren from PLO') ?: $api->error]);

$addon_id = $r['addon_id'];

Api::r(['addon update' => $api->addon->update($addon_id, 'plotina', 'PLO addon X', 'mega Pluha from PLO') ?: $api->error]);

Api::r(['addon get' => $api->addon->get($addon_id) ?: $api->error]);

Api::r(['addon method list' => $api->addon->methodList($addon_id) ?: $api->error]);

Api::r(['addon method add' => $r = $api->addon->methodAdd($addon_id, 'testing', 2, 2) ?: $api->error]);

Api::r(['addon method get' => $r = $api->addon->methodGet($addon_id, 'testing') ?: $api->error]);

Api::r(['addon method update' => $r = $api->addon->methodUpdate($addon_id, 'testing', 1, 1) ?: $api->error]);

Api::r(['addon method list' => $api->addon->methodList($addon_id) ?: $api->error]);

Api::r(['addon method delete' => $r = $api->addon->methodDelete($addon_id, 'testing') ?: $api->error]);

Api::r(['addon method list' => $api->addon->methodList($addon_id) ?: $api->error]);

Api::r(['addon del' => $api->addon->delete($addon_id) ?: $api->error]);

Api::r(['addon list' => $api->addon->list_() ?: $api->error]);