<?php
  /**
   * User: stephan
   * Date: 21-04-16
   * Time: 22:04
   */

  namespace CrispyOcto;

  /**
   * Class Otto
   *
   * @package CrispyOcto
   */
  class Otto extends Engine{

    /**
     * @return string
     */
    public function getFuel() {
      return Gasoline::name;
    }
    
  }