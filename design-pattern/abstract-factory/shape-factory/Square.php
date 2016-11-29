<?php
class Square implements IShape
{
    /**
     * @inheritdoc
     */
    public function draw()
    {
        echo 'Inside Square::draw() method';
    }
}
