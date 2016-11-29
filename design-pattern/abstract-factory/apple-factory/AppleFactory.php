<?php
class AppleFactory
{
    /**
     * [produce description]
     * @param  [type] $type [description]
     * @return [type]       [description]
     */
    public static function produce($type)
    {
        $className = ucwords($type);
        if (class_exists($className)) {
            return new $className;
        } else {
            throw new Exception("iPhone type unavailable");
        }
    }
}