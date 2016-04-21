<?php
  /**
   * User: stephan
   * Date: 21-04-16
   * Time: 22:03
   */

  namespace CrispyOcto;


  abstract class Car implements CarInterface {
    /** @var  EngineInterface */
      protected $engine;

    /**
     * @return EngineInterface
     */
    public function getEngine() {
      return $this->engine;
    }

    /**
     * @param EngineInterface $engine
     */
    public function setEngine($engine) {
      $this->engine = $engine;
    }

    
  }