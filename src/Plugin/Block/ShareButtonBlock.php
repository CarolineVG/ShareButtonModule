<?php

namespace Drupal\share_button\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Defines a social menu block.
 *
 * @Block(
 *  id = "share_button_block",
 *  admin_label = @Translation("share button"),
 * )
 */
class SocialMediaBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'share-media',
    ];
  }

}
