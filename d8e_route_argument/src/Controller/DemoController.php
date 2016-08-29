<?php

/**
 * @file
 * Contains \Drupal\d8e_route_argument\Controller\DemoController.
 */

namespace Drupal\d8e_route_argument\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\user\UserInterface;

/**
 * Controller routines for page example routes.
 */
class DemoController extends ControllerBase {
  /**
   * Constructs a simple page.
   *
   * The router _controller callback, maps the path 'd8e/route-argument-text-demo/{myArgument}'
   * to this method.
   *
   * This argument is passed in, as text to the
   *
   * @param string $myArgument
   *
   * @return array
   */
  public function textDemo($myArgument) {
    return [
      '#markup' => '<p>' . $this->t('d8e Route & Argument Text Demo: @myArgument', ['@myArgument' => $myArgument]) . '</p>',
    ];
  }

  /**
   * Constructs a simple page.
   *
   * The router _controller callback, maps the path 'd8e/route-argument-user-demo/{user}'
   * to this method.
   *
   * This argument is passed in and converted to a user object since Drupal recognizes the pattern {user} in the route.
   *
   * @param \Drupal\user\UserInterface $user
   *
   * @return array
   */
  public function userDemo(UserInterface $user) {
    return [
      '#markup' => '<p>' . $this->t('d8e Route & Argument User Demo: @user', ['@user' => $user->getDisplayName()]) . '</p>',
    ];
  }
}
