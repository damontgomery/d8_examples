<?php

namespace Drupal\d8e_real_service;

/**
 * Interface that service override services can implement.
 */
interface ServiceOverrideInterface {

  /**
   * Return a string with the name of the service.
   */
  public function getName();

}
