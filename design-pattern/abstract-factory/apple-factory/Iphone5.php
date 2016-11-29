<?php
class Iphone5 implements IIphone
{
    /**
     * @inheritdoc
     */
    public function year()
    {
        echo 2012;
    }

    /**
     * @inheritdoc
     */
    public function stock()
    {
        echo 10;
    }

    /**
     * @inheritdoc
     */
    public function price()
    {
        echo '$500';
    }
}