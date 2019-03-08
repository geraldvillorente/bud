<?php
namespace Drupal\bud_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'Language Switch Select' Block.
 *
 * @Block(
 *   id = "language_switch_select_block",
 *   admin_label = @Translation("language switch select block"),
 *   category = @Translation("Language Switch Select Block"),
 * )
 */
 class LanguageSwitchBlockSelect extends BlockBase {
  /**
   * {@inheritdoc}
   */
   public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\bud_core\Form\LanguageSwitchSelectForm');

    return $form;
   }
 }