<?php
  /**
   * User: stephan
   * Date: 21-04-16
   * Time: 22:12
   */

  namespace CrispyOcto;


  class Gasoline extends Fuel{
    const name = 'gas';


    public function getName() {
      return self::name;
    }
  }