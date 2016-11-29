<?php
class Iphone7 implements IIphone
{
    /**
     * @inheritdoc
     */
    public function year()
    {
        echo 2008;
    }

    /**
     * @inheritdoc
     */
    public function stock()
    {
        echo 400;
    }

    /**
     * @inheritdoc
     */
    public function price()
    {
        echo '$800';
    }
}