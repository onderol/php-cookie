<?php

/**
 * COOKIE SESSION
 */
class CookieSession
{
    public $cookieName = null;
    public $cookieValue = null;
    public $time = null;

    // CREATION
    function __construct($name, $value = false, $time = false)
    {
        // INSTATIATION OF THE COOKIE
        $this->cookieName = $name;
        $this->cookieValue = $value;
        $this->time = ($time ? $time : strtotime("+1 year"));
        # code...
    }

    #LAUNCH
    public function set()
    {
        // CREAT THE COOKIE
        setcookie($this->cookieName, $this->cookieValue, $this->time, '/');
        return 1;
        # code...
    }

    #UPDATE THE COOKIE SESSION
    public function update($value, $time = false)
    {
		$this->cookieValue = $value;
		$this->time = ($time ? $time : strtotime("+1 year"));
		$this->set();
		return 1;
    }

    #READ COOKIE VALUE
    public function read()
    {
        return (isset($_COOKIE[$this->cookieName]) ? $_COOKIE[$this->cookieName] : false);
        # code...
    }

    #DESTRUCTION
    public function stop()
    {
        // Suppression du cookie 
		setcookie($this->cookieName, '', 1, '/');
        // Suppression de la valeur du tableau $_COOKIE
        unset($_COOKIE[$this->cookieName]);
        // redirection
        return 1;
        # code...
    }
}
