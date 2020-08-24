<?php

namespace Drupal\d8e_factory_service;

class Painter {

  /**
   * Get a list of available paint colors.
   *
   * @return string[]
   */
  public function getAvailablePaint () {
    return [
      'yellow',
      'black',
      'red',
      'white',
    ];
  }

}
