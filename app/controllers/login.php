<?php
class Login extends Controller
{
    function render()
    {
        $this->view("login_layout", [
            "view" => "login"
        ]);
    }
}
