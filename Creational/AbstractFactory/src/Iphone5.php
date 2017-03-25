<?php
class Iphone5 implements IIphone
{
    /**
     * @inheritdoc
     */
    public function cpu()
    {
        echo "Apple A6\n";
    }
    
    /**
     * @inheritdoc
     */
    public function memory()
    {
        echo "1 GB\n";
    }
    
    /**
     * @inheritdoc
     */
    public function battery()
    {
        echo "1434 mA\n";
    }
    
    /**
     * @inheritdoc
     */
    public function display()
    {
        echo "1136×640 px\n";
    }
    
    /**
     * @inheritdoc
     */
    public function color()
    {
        echo 'Black/White';
    }
}
