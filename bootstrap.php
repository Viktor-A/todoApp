<?php

require 'database/connection.php';
require 'database/querybuilder.php';

return new QueryBuilder(

	Connection::make()

);