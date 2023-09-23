<?php 


class USER_STORE {
    private static $instance = null;
    private static $data = null;

    private function __construct($initialState) {
        self::$data = $initialState;
    }

    // get instance function call this instance if not different instance 
    public static function getInstance($initialState) {
        if (self::$instance === null) {
            self::$instance = new self($initialState);
        }
        return self::$instance;
    }

    // store hooks
    public static function getData() {
        return self::$data;
    }
    public static function getUserID() {
        return self::$data['ID'];
    }

    // store actions
    public static function setUserID($action) {
        self::$data['ID'] = $action;
    }
}




?>