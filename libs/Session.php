<?php

    class Session{

        /**
         * Session Start
         */
        public static function init(){
            session_start();
        }

        /**
         * Session Set
         */
        public static function set($key,$value){
            $_SESSION[$key] = $value;
        }

        /**
         * Session Get
         */
        public static function get($key){
            if (isset($_SESSION[$key])) {
                return $_SESSION[$key];
            }else{
                return false;
            }
        }

        /**
         * Login User Check
         */
        public static function login_check(){
            self::init();
            if (self::get('login') == true) {
                header('location:../index.php');
            }
        }

        /**
         * Session Destroy
         */
        public static function destroy(){
            session_destroy();
            header('localhost:../login.php');
        }

        /**
         * Session Check user Dashboard
         */
        public static function check_session(){
            self::init();
            if (self::get('login') == false) {
                self::destroy();
                header('localhost:../login.php');
            }
        }
    }

?>