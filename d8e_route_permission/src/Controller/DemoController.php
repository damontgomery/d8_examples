<?php

/**
 * @file
 * Contains \Drupal\d8e_route_permission\Controller\DemoController.
 */

namespace Drupal\d8e_route_permission\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for page example routes.
 */
class DemoController extends ControllerBase {
  /**
   * Constructs a simple page.
   *
   * The router _controller callback, maps the path 'd8e/route-permission-demo'
   * to this method.
   *
   * The route uses the _role property to restrict access to the 'administrator' role.
   */
  public function demo() {
    return [
      '#markup' => '<p>' . $this->t('d8e Route & Permission Demo') . '</p>',
    ];
  }
}
