<?php
  /**
   * User: stephan
   * Date: 21-04-16
   * Time: 22:12
   */

  namespace CrispyOcto;


  /**
   * Class Gasoline
   *
   * @package CrispyOcto
   */
  class Gasoline extends Fuel{
    const name = 'gas';


    /**
     * @return string
     */
    public function getName() {
      return self::name;
    }
  }