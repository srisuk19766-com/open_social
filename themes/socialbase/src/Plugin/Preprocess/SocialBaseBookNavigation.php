<?php

namespace Drupal\socialbase\Plugin\Preprocess;

use Drupal\bootstrap\Plugin\Preprocess\PreprocessBase;
use Drupal\bootstrap\Plugin\Preprocess\PreprocessInterface;

/**
 * Pre-processes variables for the "book_navigation" theme hook.
 *
 * @ingroup plugins_preprocess
 *
 * @BootstrapPreprocess("book_navigation")
 */
class SocialBaseBookNavigation extends PreprocessBase implements PreprocessInterface {

  /**
   * {@inheritdoc}
   */
  public function preprocess(array &$variables, $hook, array $info) {
    // Disables the menu tree below the content on a
    // book node in full display mode.
    $variables['tree'] = '';
  }

}
