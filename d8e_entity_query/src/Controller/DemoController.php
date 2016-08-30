<?php

/**
 * @file
 * Contains \Drupal\d8e_entity_query\Controller\DemoController.
 */

namespace Drupal\d8e_entity_query\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\Query\QueryFactory;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Demo page for querying entities.
 */
class DemoController extends ControllerBase {

  /**
   * @var \Drupal\Core\Entity\Query\QueryFactory
   */
  protected $entityQuery;

  /**
   * @inheritdoc
   */
  public function __construct(QueryFactory $entityQuery) {
    $this->entityQuery = $entityQuery;
  }

  /**
   * @inheritdoc
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.query')
    );
  }

  /**
   * Constructs a demo page for a basic query.
   *
   * This query gets a list of published nodes.
   *
   * @see /d8e/entity-query/basic-query-demo
   */
  public function basicQueryDemo() {
    /**
     * We make a query object.
     * We then specify that we are going to get node entities.
     * We then add a condition, that we want published nodes (status = 1).
     * To get the results, we use the execute method.
     *
     * @var \Drupal\Core\Entity\Query\Sql\Query $query
     */
    $query = $this->entityQuery->get('node')
      ->condition('status', 1);

    // This will return a list of node IDs.
    $nids = $query->execute();

    return [
      '#title' => $this->t('d8e Entity Query Demo: Basic Query') ,
      'content' => [
        // This uses the template and element type 'd8e_nids_list' created with this module.
        '#type' => 'd8e_nids_list',
        '#label' => $this->t('Published Node IDs'),
        '#nids' => $nids,
      ],
    ];
  }

  /**
   * Constructs a demo page for a basic query.
   *
   * This query gets a list of published pages.
   *
   * @see /d8e/entity-query/conditional-query-demo
   */
  public function conditionalQueryDemo() {
    return [
      '#markup' => '<p>' . $this->t('d8e Entity Query Demo: Conditional Query') . '</p>',
    ];
  }

  /**
   * Constructs a demo page for a basic query.
   *
   * This query gets a list of published pages.
   *
   * @see /d8e/entity-query/conditional-group-query-demo
   */
  public function conditionalGroupQueryDemo() {
    return [
      '#markup' => '<p>' . $this->t('d8e Entity Query Demo: Conditional Group Query') . '</p>',
    ];
  }
}
