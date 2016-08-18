<?php

/**
 * @file
 * Contains \Drupal\d8e\RealService.
 */

namespace Drupal\d8e_real_service;

class RealService implements ServiceOverrideInterface{

  /**
   * Return the value of the example variable.
   */
  public function getName() {
    return 'd8e Service Override: Real Service';
  }

}