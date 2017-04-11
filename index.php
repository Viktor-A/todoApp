<?php

require 'core/bootstrap.php';

require Router::load('routes.php')
<<<<<<< HEAD
    ->direct(Request::uri(), Request::method());
=======
    ->direct(Request::uri());
>>>>>>> 9d05c6dfd4e8b6442945d64a6579ea0cdfa37f7d
