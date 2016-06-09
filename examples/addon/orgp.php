<?php

use MFID\Api;

require_once '../../lib/MFID/autoload.php';

$api = Api::getInstance(require '../config/service.php');

# orgp->checkCard
$response = $api->addons->orgp->checkCard('0000000000000000');

Api::r(['orgp->checkCard' => $response ?: $api->error]);

# orgp->paymentSend
$response = $api->addons->orgp->paymentSend(1, '0000000000000000', 100);

Api::r(['orgp->paymentSend' => $response ?: $api->error]);