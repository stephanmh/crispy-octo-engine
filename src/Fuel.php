<?php
  /**
   * User: stephan
   * Date: 21-04-16
   * Time: 22:11
   */

  namespace CrispyOcto;


  /**
   * Class Fuel
   *
   * @package CrispyOcto
   */
  abstract class Fuel implements FuelInterface {

    abstract public function getName();

  }