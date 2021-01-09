<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/dotenv-loader.php';


require 'vendor/autoload.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'dev-qwghfqts.us.auth0.com',
  'client_id' => 'A8gh3o3ADZHBbzcIDkPqH0iRKS4wTcDe',
  'client_secret' => 'l2zEsWcxouAtfGfKcmdk-KNahXatqYekLEaTE63x7VR56DLso_ZbfqWNtBRsZJNr',
  'redirect_uri' => 'https://codeyourbusiness.site/carservice/carmodified/carservise/',
  'scope' => 'openid profile email',
]);

$auth0->login();
