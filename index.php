<?php

// phpinfo(); die();

try {
    initApplication();
} catch (Exception $e) { 
    $results['errorMessage'] = $e->getMessage();
    echo $results['errorMessage'];
}

function initApplication()
{

    $action = isset($_GET['action']) ? $_GET['action'] : "";

    switch ($action) {
        case 'contacts':
          contacts();
          break;
        case 'about':
          about();
          break;
        default:
          main();
    }
}

function contacts() 
{
    $results = [];
    $results['pageTitle'] = "Контакты";
    require( "templates/contacts.php" );
}

function about() 
{
    $results = [];
    $results['pageTitle'] = "О компании";
    require( "templates/about.php" );
}

function main() 
{
    $results = [];
    $results['pageTitle'] = "Главная";

    require( "templates/main.php" );
}