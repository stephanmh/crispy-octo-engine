<?php
  /**
   * User: stephan
   * Date: 21-04-16
   * Time: 22:04
   */

  namespace CrispyOcto;
  
  class Otto extends Engine{

    public function getFuel() {
      return Gasoline::name;
    }
    
  }