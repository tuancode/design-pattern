<?php
class Circle implements IShape
{
    /**
     * @inheritdoc
     */
    public function draw()
    {
        echo 'Inside Circle::draw() method';
    }
}
