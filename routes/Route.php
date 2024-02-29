<?php
use App\Services\Routes;
use App\Middleware\{Auth, Guest};

Routes::get("login", "LoginController", "index", [Guest::class]);
Routes::get("register", "RegisterController", "index",[Guest::class]);
Routes::post("submit-register", "REgisterController", "register", [Guest::class]);
Routes::post("submit-login", "LoginController", "login", [Guest::class]);
Routes::get("logout", "DashboardController", "logout", [Auth::class]);
Routes::get("dashboard", "DashboardController", "index", [Auth::class]);
Routes::get("", "HomeController", "index");
