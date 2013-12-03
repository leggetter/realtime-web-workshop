<?php
require_once( 'Pusher.php' );

$APP_ID = '8288';
$APP_KEY = 'a71b8d8b7eef0ef6d98c';
$APP_SECRET = '90b0ea5292de35b367f1';

$channel_name = 'my-channel';
$event_name = 'my_event';
$event_data = array('message' => 'Hello world!');

$pusher = new Pusher($APP_KEY, $APP_SECRET, $APP_ID);
$response = $pusher->trigger($channel_name, $event_name, $event_data, null, true);
print_r($response);