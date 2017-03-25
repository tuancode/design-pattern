<?php
class Iphone7 implements IIphone
{
    /**
     * @inheritdoc
     */
    public function cpu()
    {
        echo "Apple A10\n";
    }
    
    /**
     * @inheritdoc
     */
    public function memory()
    {
        echo "2 GB\n";
    }
    
    /**
     * @inheritdoc
     */
    public function battery()
    {
        echo "1960 mA\n";
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
        echo 'Rose Gold, Gold, Silver, Black, or Jet Black';
    }
}
