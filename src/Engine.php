<?php
  /**
   * User: stephan
   * Date: 21-04-16
   * Time: 22:03
   */

  namespace CrispyOcto;


  /**
   * Class Engine
   *
   * @package CrispyOcto
   */
  abstract class Engine implements EngineInterface {

    /** @return FuelInterface */
    abstract public function getFuel();
  }