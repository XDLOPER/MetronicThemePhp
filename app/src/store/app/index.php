<?php 

class APP_STORE {
    private static $instance = null;
    private $data = null;

    private function __construct($initialState) {
        $this->data = $initialState;
    }

    // get insatnce function call this instance if not diffarent instance 
    public static function getInstance($initialState) {
        if (self::$instance === null) {
            self::$instance = new self($initialState);
        }
        return self::$instance;
    }

    // store hooks
    public function getData() {
        return $this->data;
    }
    public function getActive() {
        return $this->data['auth']['active'];
    }

    public function getTheme() {
        return  $this->data['theme'];
    }

    public function getLanguage() {
        return $this->data['language'];
    }

    // store actions
    public function setActive($action) {
        $this->data['auth']['active'] = $action;
    }
    
    public function setTheme($action) {
        $this->data['theme'] = $action;
    }
    
    public function setLanguage($action) {
        $this->data['language'] = $action;
    }
}


?>