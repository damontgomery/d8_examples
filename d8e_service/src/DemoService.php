<?php

/**
 * @file
 * Contains \Drupal\d8e_service\DemoService.
 */

namespace Drupal\d8e_service;

class DemoService {

  /**
   * Return an example data structure.
   *
   * @return array
   */
  public function getDemoData() {
    return [
      'response' => 'd8e Service',
      'key' => rand(1,100),
    ];
  }

}