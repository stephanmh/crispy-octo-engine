<?php
  /**
   * User: stephan
   * Date: 21-04-16
   * Time: 19:21
   */

  namespace CrispyOcto;

  class Runner {

    private $connection;

    /**
     * runner constructor.
     *
     * @param $connection
     */
    public function __construct($connection) {
      $this->connection = $connection;
    }

    public function sum($a, $b) {
      return $a + $b;
    }


  }