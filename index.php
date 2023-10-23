<?php

$routes = [];
// Route front end 
route('/', function () {
  header('Location:frontend/index.php');
  
});


route('/login', function () {
  header('Location:auth/op.php');
});


route('/logout', function () {
  header('Location:auth/logout.php');
});


// Route backend
route('/dashboard', function () {
  header('Location:Backend/index.php');
});
route('/catrgoriesBooks', function () {
  header('Location:Backend/categoriesBooks/index.php');
});

route('/books', function () {
  header('Location:Backend/books/index.php');
});

route('/login', function () {
  header('Location:auth/op.php');
});


route('/register', function () {
  header('Location:auth/register.php');
});


route('/registerUP', function () {
  header('Location:auth/op.php');
});


route('/register', function () {
  header('Location:auth/register.php');
});

route('/about-us', function () {
  echo "About Us";
});

route('/404', function () {
  echo "Page not found";
});

function route(string $path, callable $callback) {
  global $routes;
  $routes[$path] = $callback;
}

run();

function run() {
  global $routes;
  $uri = $_SERVER['REQUEST_URI'];
  $found = false;
  foreach ($routes as $path => $callback) {
    if ($path !== $uri) continue;

    $found = true;
    $callback();
  }

  if (!$found) {
    $notFoundCallback = $routes['/404'];
    $notFoundCallback();
  }
}
