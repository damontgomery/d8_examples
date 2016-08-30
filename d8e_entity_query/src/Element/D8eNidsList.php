<?php
/**
 * @file
 * Contains \Drupal\d8e_entity_query\Element\D8eNidsList.
 */

namespace Drupal\d8e_entity_query\Element;

use Drupal\Core\Render\Element\RenderElement;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Provides a way to render lists of NIDs.
 *
 * This makes it easier to do automated testing.
 *
 * @RenderElement("d8e_nids_list")
 */
class D8eNidsList extends RenderElement {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {
    $class = get_class($this);
    return [
      '#theme' => 'd8e_nids_list',
      '#label' => 'Default Label',
      '#nids' => [],
    ];
  }
}
