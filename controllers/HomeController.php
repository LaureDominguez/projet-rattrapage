<?php

namespace Controllers;

class HomeController{
    public function displayHomePage(){
        $template = "home.phtml";
        include_once'views/layout.phtml';
    }

    public function visitor()
    {
        if(isset($_SERVER["HTTP_REFERER"]))
            $currentPage = $_SERVER["HTTP_REFERER"];
        if(!isset($_SESSION['visitor']))
            $_SESSION['visitor'] = [
                'token' => $this->generateToken(),
                'currentPage' => $currentPage,
            ];
        else $_SESSION['visitor']['currentPage'] = $currentPage;         
    }

    public function clearMsg()
    {
        if (isset($_SESSION['visitor']['msg']))
            $_SESSION['visitor']['msg'] = "";
            
        header('Location: ' . $_SESSION['visitor']['currentPage']);
        exit;
    }
    
    function generateToken($length = 40)
    {
        $characters       = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_!?./$';
        $charactersLength = strlen($characters);
        $token            = '';
        for ($i = 0; $i < $length; $i++) {
            $token .= $characters[rand(0, $charactersLength - 1)];
        }
        return $token;
    }
}