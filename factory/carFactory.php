<?php


class carFactory
{
    public function __construct() {

    }

    public static function build ($type = '') {

        if($type == '') {
            throw new Exception('Invalid Car Type.');
        } else {

            $className = 'car_'.ucfirst($type);

            // Assuming Class files are already loaded using autoload concept
            if(class_exists($className)) {
                return new $className();
            } else {
                throw new Exception('Car type not found.');
            }
        }
    }
}