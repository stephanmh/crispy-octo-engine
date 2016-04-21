<?php
  /**
   * User: stephan
   * Date: 21-04-16
   * Time: 22:18
   */
  namespace CrispyOcto;

  interface EngineInterface {
    /** @return FuelInterface */
    public function getFuel();
  }