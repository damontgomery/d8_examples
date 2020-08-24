<?php

namespace Drupal\d8e_field_formatter\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'd8e_hour_minute_second' formatter.
 *
 * @FieldFormatter(
 *   id = "d8e_hour_minute_second",
 *   label = @Translation("D8E: Hour Minute Second"),
 *   field_types = {
 *     "decimal"
 *   }
 * )
 */
class HourMinuteSecondFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];

    foreach ($items as $delta => $item) {
      $value = $item->value;

      $hours = (int) floor($value / 3600);
      $minutes = (int) floor(($value / 60) % 60);
      $seconds = (int) floor($value % 60);

      $output = "$seconds seconds";

      if ($minutes === 1) {
        $output = "$minutes minute $output";
      }

      if ($minutes > 1) {
        $output = "$minutes minutes $output";
      }

      if ($hours === 1) {
        $output = "$hours hour $output";
      }

      if ($hours > 1) {
        $output = "$hours hours $output";
      }

      $elements[$delta] = [
        '#markup' => $output,
      ];
    }

    return $elements;
  }

}
