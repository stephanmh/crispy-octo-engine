<?php
  /**
   * User: stephan
   * Date: 21-04-16
   * Time: 22:03
   */

  namespace CrispyOcto;


  abstract class Car {
    /** @var  Engine */
      protected $engine;

    /**
     * @return \CrispyOcto\Engine
     */
    public function getEngine() {
      return $this->engine;
    }

    /**
     * @param \CrispyOcto\Engine $engine
     */
    public function setEngine($engine) {
      $this->engine = $engine;
    }

    
  }