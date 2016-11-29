<?php
class ShapeFactory
{
    /**
     * Build a shape object
     *
     * @param  string $type Shape type
     * @return object
     */
    public static function build($type)
    {
        if ($type == null) {
            throw new Exception('Invalid Shape Type.');
        } else {
            $className = ucfirst($type);

            if (class_exists($className)) {
                return new $className;
            } else {
                throw new Exception('Not found Shape type!');
            }
        }
    }
}
