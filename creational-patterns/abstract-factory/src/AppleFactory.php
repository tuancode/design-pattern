<?php
class AppleFactory
{
    /**
     * Create an iPhone object
     *
     * @param  string $type iPhone type
     * @return object
     */
    public static function make($type)
    {
        $className = ucwords($type);
        if (class_exists($className)) {
            return new $className;
        } else {
            throw new Exception("$type is unavailable!\nWe can only procude iPhone 4, 5, 6, 7.");
        }
    }
}
