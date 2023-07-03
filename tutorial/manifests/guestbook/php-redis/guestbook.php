<?php

/**
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

if (isset($_GET['cmd']) === true) {
  $host = 'redis-leader';
  if (getenv('GET_HOSTS_FROM') == 'env') {
    $host = getenv('REDIS_LEADER_SERVICE_HOST');
  }
  header('Content-Type: application/json');
  if ($_GET['cmd'] == 'set') {
    $client = new Predis\Client([
      'scheme' => 'tcp',
      'host'   => $host,
      'port'   => 6379,
    ]);

    $client->set('guestbook', $_GET['value']);
    print('{"message": "Updated"}');
  } else {
    $host = 'redis-follower';
    if (getenv('GET_HOSTS_FROM') == 'env') {
      $host = getenv('REDIS_FOLLOWER_SERVICE_HOST');
    }
    $client = new Predis\Client([
      'scheme' => 'tcp',
      'host'   => $host,
      'port'   => 6379,
    ]);

    $value = $client->get('guestbook');
    print('{"data": "' . $value . '"}');
  }
} else {
  phpinfo();
} ?>
