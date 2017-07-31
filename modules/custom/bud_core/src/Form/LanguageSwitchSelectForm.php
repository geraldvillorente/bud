<?php
namespace Drupal\bud_core\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class LanguageSwitchSelectForm extends FormBase {
  public function getFormId() {
    // Unique ID of the form.
    return 'language_switch_select_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    // Create select language switcher.
    $form['language_switch_select'] = array(
      '#type' => 'select',
      '#title' => t('Language Switcher'),
      '#options' => array(
        '' => ' - Select Language - ',
        'en' => t('English'),
        'zh-hant' => t('繁體中文'),
        'zh-hans' => t('简体中文'),
      ),
      '#default_value' => 'zh-hant'
    );
    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Handle submitted form data.
  }
}