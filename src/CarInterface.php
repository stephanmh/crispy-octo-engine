<?php
  /**
   * User: stephan
   * Date: 21-04-16
   * Time: 22:18
   */
  namespace CrispyOcto;

  interface CarInterface {
    /**
     * @return EngineInterface
     */
    public function getEngine();

    /**
     * @param EngineInterface $engine
     */
    public function setEngine($engine);
  }