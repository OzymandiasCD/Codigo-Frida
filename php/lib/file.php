<?php
    final class File {
        public static function isFile($filename) {
            return is_file($filename);
        }

        public static function isReadable($filename) {
            return is_readable($filename);
        }

        public static function isDirectory($dirname) {
            return is_dir($dirname);
        }

        public static function fileExists($filename) {
            return file_exists($filename);
        }

        public static function createDirectory($dirname) {
            return mkdir($dirname);
        }

        // public static function deleteFile($filename) {
        //     if ($this->isReadable($filename) &&
        //         $this->fileExists($filename) &&
        //         $this->isFile($filename))
        //         return unlink($filename);

        //     return FALSE;
        // }
    }
?>