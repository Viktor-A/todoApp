<?php

$app = [];

$app['config'] = require 'config.php';

<<<<<<< HEAD
require 'core/router.php';
require 'core/request.php';
require 'core/database/connection.php';
require 'core/database/querybuilder.php';
=======
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
>>>>>>> 9d05c6dfd4e8b6442945d64a6579ea0cdfa37f7d

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);