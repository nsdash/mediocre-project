<?php

$defaultRoutesFile = __DIR__ . '/../routes/routes.php';

return [
  /*
  | ------------------------------------
  | Routes
  | ------------------------------------
  */
  'routesFile' => $defaultRoutesFile,

  /*
  | ------------------------------------
  | Debug mode
  | ------------------------------------
  */
  'debug' => false,

  /*
  | ------------------------------------
  | DB Connection
  | ------------------------------------
  */
  'databaseHost' => null,
  'databaseName' => null,
  'databaseUser' => null,
  'databasePassword' => null,
];
