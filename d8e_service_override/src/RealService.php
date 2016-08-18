<?php

/**
 * @file
 * Contains \Drupal\d8e_service_override\RealService.
 */

namespace Drupal\d8e_service_override;

class RealService implements ServiceOverrideInterface{

  /**
   * Return the value of the example variable.
   */
  public function getName() {
    return 'd8e Service Override: Real Service';
  }

}