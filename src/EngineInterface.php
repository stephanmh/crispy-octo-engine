<?php
  /**
   * User: stephan
   * Date: 21-04-16
   * Time: 22:18
   */
  namespace CrispyOcto;

  /**
   * Interface EngineInterface
   *
   * @package CrispyOcto
   */
  interface EngineInterface {
    /** @return FuelInterface */
    public function getFuel();
  }