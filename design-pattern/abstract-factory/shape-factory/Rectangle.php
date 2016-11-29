<?php
class Rectangle implements IShape
{
    /**
     * @inheritdoc
     */
    public function draw()
    {
        echo 'Inside Rectange::draw() method';
    }
}
