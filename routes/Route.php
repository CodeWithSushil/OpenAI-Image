<?php
use App\Services\Routes;
use App\Middleware\{Auth, Guest};

Routes::get("login", "LoginController", "index", [Guest::class]);
Routes::get("register", "RegisterController", "index",[Guest::class]);
Routes::post("submit-register", "RegisterController", "register", [Guest::class]);
Routes::post("submit-login", "LoginController", "login", [Guest::class]);
Routes::get("logout", "DashboardController", "logout", [Auth::class]);
Routes::get("dashboard", "DashboardController", "index", [Auth::class]);
Routes::get("", "HomeController", "index", [Auth::class]);

Routes::get("forget-password", "forgetController", "index", [Guest::class]);
Routes::post("submit-forget","forgetController","forget");

Routes::get("new-password", "NewpswController", "index", [Guest::class]);
Routes::post("submit-password", "NewpswController", "newpassword");
