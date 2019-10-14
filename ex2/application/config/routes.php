<?
return [
    "" => [
        "controller" => "main",
        "action" => "index",
    ],
    "products/([0-9]+)" => [
        "controller" => "products",
        "action" => "view",
        "id" => "$1"
    ],
    "products/list" => [
        "controller" => "products",
        "action" => "list"
    ],
    "account/login" => [
        "controller" => "account",
        "action" => "login"
    ],
    "account/register" => [
        "controller" => "account",
        "action" => "register"
    ],
    "admin/([0-9]+)" => [
        "controller" => "admin",
        "action" => "view",
        "id" => "$1"
    ],
    "admin/login" => [
        "controller" => "admin",
        "action" => "login"
    ],
    "admin/create" => [
        "controller" => "admin",
        "action" => "create"
    ],
    "admin/list" => [
        "controller" => "admin",
        "action" => "list"
    ],

];
