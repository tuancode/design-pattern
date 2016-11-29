<?php
interface IIphone
{
    /**
     * Release year
     * 
     * @return integer Year
     */
    public function year();

    /**
     * Stock of phone in warehouse
     * 
     * @return integer 
     */
    public function stock();

    /**
     * Product price
     * 
     * @return string Price
     */
    public function price();
}