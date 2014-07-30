<?php
/**
 * Created by PhpStorm.
 * User: Tonio
 * Date: 29/07/2014
 * Time: 16:39
 */

namespace Acme\CalculatorBundle\Model\Operator;

use JMS\DiExtraBundle\Annotation as DI;
use Acme\CalculatorBundle\Model\Result;

/**
 * @DI\Service("acme_calculator.operator.substract")
 * @DI\Tag("acme_calculator.operator")
 */
class Substract extends Operator {

    public function __construct() {
        $this->id    = "substract";
        $this->label = "-";
    }

    public function compute($left, $right) {
        return new Result($left->getValue() - $right->getValue());
    }
} 