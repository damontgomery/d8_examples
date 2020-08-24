<?php

namespace Drupal\d8e_plugin_system;

interface AnimalInterface {

  /**
   * Get the ID.
   *
   * @return string
   */
  public function getID();

  /**
   * Get the Label.
   *
   * @return string
   */
  public function getLabel();

  /**
   * Get a description of the animal.
   *
   * @return string
   */
  public function getDescription();

}
