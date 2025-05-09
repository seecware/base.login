<?php
return [
    'GET' => [
        '/' => ['StaticContentController', 'renderContent', "home", ["title" => "Home"]],
        '/contact' => ['StaticContentController', 'renderContent', 'contact', ["title" => "Contact"]],
        '/new-client' => ['StaticContentController', 'renderContent', 'new-client', ["title" => "Adding client..."]],
        '/new-added-client' => ['ClientsController', 'confirmation', 'new-added-client', ["title" => "Added!"]],
        '/login' => ['StaticContentController', 'renderContent', 'login', ["title" => "Log in"]],
        '/signup' => ['StaticContentController', 'renderContent', 'signup', ["title" => "Sign Up"]]
    ],
    'POST' => [
        '/new-client' => ['ClientsController', 'addNewClient'],
        '/signup' => ['SignupController', 'registerUser'],
    ],
];
