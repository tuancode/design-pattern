<?php
class Iphone6 implements IIphone
{
    /**
     * @inheritdoc
     */
    public function year()
    {
        echo 2014;
    }

    /**
     * @inheritdoc
     */
    public function stock()
    {
        echo 150;
    }

    /**
     * @inheritdoc
     */
    public function price()
    {
        echo '$650';
    }
}