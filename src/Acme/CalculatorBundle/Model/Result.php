<?php
/**
 * Created by PhpStorm.
 * User: Tonio
 * Date: 29/07/2014
 * Time: 14:10
 */

namespace Acme\CalculatorBundle\Model;


class Result {
    /**
     * @var float
     */
    protected $value;

    function __construct($value = null)
    {
        $this->value = $value;
    }

    /**
     * @param float $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
} 