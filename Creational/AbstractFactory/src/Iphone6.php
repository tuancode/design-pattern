<?php
class Iphone6 implements IIphone
{
    /**
     * @inheritdoc
     */
    public function cpu()
    {
        echo "Apple A8\n";
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
        echo "1809 mA\n";
    }
    
    /**
     * @inheritdoc
     */
    public function display()
    {
        echo "1334×750 px\n";
    }
    
    /**
     * @inheritdoc
     */
    public function color()
    {
        echo 'Gold, Silver, Space Gray';
    }
}
