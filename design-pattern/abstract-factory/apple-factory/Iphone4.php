<?php
class Iphone4 implements IIphone
{
    /**
     * @inheritdoc
     */
    public function cpu()
    {
        echo "Apple A4\n";
    }
    
    /**
     * @inheritdoc
     */
    public function memory()
    {
        echo "521 MB\n";
    }
    
    /**
     * @inheritdoc
     */
    public function battery()
    {
        echo "1419 mA\n";
    }
    
    /**
     * @inheritdoc
     */
    public function display()
    {
        echo "320×480 px\n";
    }
    
    /**
     * @inheritdoc
     */
    public function color()
    {
        echo "Black/White";
    }
}
