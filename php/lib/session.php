<?php
    final class Session {
        public function __construct() {
            session_start();
        }

        public function get($key) {
            if ($this->existsKey($key))
                return $_SESSION[$key];

            return null;
        }

        public function set($key, $value) {
            $_SESSION[$key] = $value;
        }

        public function remove($key) {
            if (isset($_SESSION[$key])) {
                unset($_SESSION[$key]);
                return TRUE;
            }

            return FALSE;
        }

        public function existsKey($key) {
            return isset($_SESSION[$key]);
        }
    }
?>