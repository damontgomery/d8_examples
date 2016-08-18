<?php

namespace Drupal\d8e_service_override;

/**
 * Interface that service override services can implement.
 */
interface ServiceOverrideInterface {

  /**
   * Return a string with the name of the service.
   */
  public function getName();

}
