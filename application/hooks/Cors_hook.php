<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cors_hook {

public function set_headers() {
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Allow-Credentials: true");
}
}
