<?php

/**
 * @file
 * Contains \Drupal\d8e_route_controller\Controller\DemoController.
 */

namespace Drupal\d8e_route_controller\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for page example routes.
 */
class DemoController extends ControllerBase {
  /**
   * Constructs a simple page.
   *
   * The router _controller callback, maps the path 'd8e/route-controller-demo'
   * to this method.
   *
   * _controller callbacks return a renderable array for the content area of the
   * page. The theme system will later render and surround the content with the
   * appropriate blocks, navigation, and styling.
   */
  public function demo() {
    return [
      '#markup' => '<p>' . t('d8e Route & Controller Demo') . '</p>',
    ];
  }
}
