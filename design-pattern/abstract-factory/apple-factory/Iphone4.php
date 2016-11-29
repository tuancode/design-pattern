<?php
class Iphone4 implements IIphone
{
    /**
     * @inheritdoc
     */
    public function year()
    {
        echo 2010;
    }

    /**
     * @inheritdoc
     */
    public function stock()
    {
        echo 0;
    }

    /**
     * @inheritdoc
     */
    public function price()
    {
        echo '$330';
    }
}