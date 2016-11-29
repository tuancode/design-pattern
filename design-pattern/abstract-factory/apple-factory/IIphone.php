<?php
interface IIphone
{
    /**
     * CPU Specs
     *
     * @return string
     */
    public function cpu();
    
    /**
     * RAM Specs
     *
     * @return string
     */
    public function memory();
    
    /**
     * Battery Specs
     *
     * @return string
     */
    public function battery();
    
    /**
     * Screen Specs
     *
     * @return string
     */
    public function display();
    
    /**
     * Color Specs
     *
     * @return string
     */
    public function color();
}
