<?php

namespace Drupal\rawcustom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "hello_world_block",
 *   admin_label = @Translation("Hello World test"),
 *   category = @Translation("Hello World test"),
 * )
 */
class RawcustomBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('Hello, World!'),
    ];
  }

}