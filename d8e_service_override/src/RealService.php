<?php

/**
 * @file
 * Contains \Drupal\d8e_service_override\RealService.
 */

namespace Drupal\d8e_service_override;

class RealService implements ServiceOverrideInterface{

  /**
   * Return the name of this service.
   */
  public function getName() {
    return 'd8e Service Override: Real Service';
  }

}