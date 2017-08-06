<?php
namespace Drupal\bud_core\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\Url;

class LanguageSwitchSelectForm extends FormBase {
  public function getFormId() {
    // Unique ID of the form.
    return 'language_switch_select_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $path = \Drupal::request()->getpathInfo();
    $arg  = explode('/',$path);
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
      '#default_value' => isset($arg[1]) ? $arg[1] : '',
      '#attributes' => array('onchange' => "this.form.submit();"),
    );
    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Handle submitted form data.
    // $form_state->setRedirectUrl(Url::fromUri('internal:/zh-hants'));
  }
}