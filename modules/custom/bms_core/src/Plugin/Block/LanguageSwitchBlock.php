<?php
namespace Drupal\bms_core\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Path\PathMatcherInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Url;
use Drupal\Core\Link;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a 'Language Switch' Block.
 *
 * @Block(
 *   id = "language_switch_block",
 *   admin_label = @Translation("language switch block"),
 *   category = @Translation("Language Switch Block"),
 * )
 */
class LanguageSwitchBlock extends BlockBase implements ContainerFactoryPluginInterface {
  /**
   * The language manager.
   *
   * @var \Drupal\Core\Language\LanguageManagerInterface
   */
  protected $languageManager;

  /**
   * The path matcher.
   *
   * @var \Drupal\Core\Path\PathMatcherInterface
   */
  protected $pathMatcher;

  /**
   * Constructs an LanguageBlock object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Language\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \Drupal\Core\Path\PathMatcherInterface $path_matcher
   *   The path matcher.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, LanguageManagerInterface $language_manager, PathMatcherInterface $path_matcher) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->languageManager = $language_manager;
    $this->pathMatcher = $path_matcher;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('language_manager'),
      $container->get('path.matcher')
    );
  }


  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    $access = $this->languageManager->isMultilingual() ? AccessResult::allowed() : AccessResult::forbidden();
    return $access->addCacheTags(['config:configurable_language_list']);
  }
  
  /**
   * {@inheritdoc}
   */
  public function build() {
    $language = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $build = [];
    $route_name = $this->pathMatcher->isFrontPage() ? '<front>' : '<current>';
    $type = $this->getDerivativeId();
    $links = $this->languageManager->getLanguageSwitchLinks($type, Url::fromRoute($route_name));

    $node = \Drupal::routeMatch()->getParameter('node');
    
    if($node) {
      $link = array();
      foreach($links->links as $key => $item) {
        switch($language) {
          case 'zh-hans':
            if($node->getTranslationStatus('zh-hant')) {
              $zh_hant = $node->getTranslation('zh-hant');
              $one = Link::fromTextAndUrl($links->links['zh-hant']['title'], $zh_hant->toUrl());
            }
            else if ($node->getTranslationStatus('zh-hans')){
              $zh_hans = $node->getTranslation('zh-hans');
              $one = Link::fromTextAndUrl($links->links['zh-hans']['title'], $zh_hans->toUrl());
            }
            else {
              $zh_hant = $node->getTranslation('zh-hant');
              $one = Link::fromTextAndUrl($links->links['zh-hant']['title'], $zh_hant->toUrl());
            }

            if($node->getTranslationStatus('en')) {
              $en = $node->getTranslation('en');
              $two = Link::fromTextAndUrl($links->links['en']['title'], $en->toUrl());
            }
            else if ($node->getTranslationStatus('zh-hans')) {
              $zh_hans = $node->getTranslation('zh-hans');
              $two = Link::fromTextAndUrl($links->links['zh-hans']['title'], $zh_hans->toUrl());
            }
            else {
              $zh_hant = $node->getTranslation('zh-hant');
              $one = Link::fromTextAndUrl($links->links['zh-hant']['title'], $zh_hant->toUrl());
            }

            break;
          case 'en':
            if($node->getTranslationStatus('zh-hant')) {
              $zh_hant = $node->getTranslation('zh-hant');
              $one = Link::fromTextAndUrl($links->links['zh-hant']['title'], $zh_hant->toUrl());
            }
            else if ($node->getTranslationStatus('zh-hans')) {
              $zh_hans = $node->getTranslation('zh-hans');
              $one = Link::fromTextAndUrl($links->links['zh-hans']['title'], $zh_hans->toUrl());
            }
            else {
              $zh_hant = $node->getTranslation('zh-hant');
              $one = Link::fromTextAndUrl($links->links['zh-hant']['title'], $zh_hant->toUrl());
            }

            if($node->getTranslationStatus('zh-hans')) {
              $zh_hans = $node->getTranslation('zh-hans');
              $two = Link::fromTextAndUrl($links->links['zh-hans']['title'], $zh_hans->toUrl());
            }
            else if ($node->getTranslationStatus('en')){
              $en = $node->getTranslation('en');
              $two = Link::fromTextAndUrl($links->links['en']['title'], $en->toUrl());
            }
            else {
              $zh_hant = $node->getTranslation('zh-hant');
              $one = Link::fromTextAndUrl($links->links['zh-hant']['title'], $zh_hant->toUrl());
            }

            break;
          case 'zh-hant':
            if($node->getTranslationStatus('zh-hans')) {
              $zh_hans = $node->getTranslation('zh-hans');
              $one = Link::fromTextAndUrl($links->links['zh-hans']['title'], $zh_hans->toUrl());
            }
            else if ($node->getTranslationStatus('zh-hant')) {
              $zh_hant = $node->getTranslation('zh-hant');
              $one = Link::fromTextAndUrl($links->links['zh-hant']['title'], $zh_hant->toUrl());
            }

            if($node->getTranslationStatus('en')) {
              $en = $node->getTranslation('en');
              $two = Link::fromTextAndUrl($links->links['en']['title'], $en->toUrl());
            }
            else if ($node->getTranslationStatus('zh-hans')) {
              $zh_hans = $node->getTranslation('zh-hans');
              $one = Link::fromTextAndUrl($links->links['zh-hans']['title'], $zh_hans->toUrl());
            }
            
            break;
        }
      }
    }

    if (isset($links->links)) {
      $build = [
        '#theme' => 'language_switch',
        '#links' => array('one' => $one, 'two' => $two),
        '#attributes' => [
          'class' => [
            "language-switcher-{$links->method_id}",
          ],
        ],
        '#set_active_class' => TRUE,
      ];
    }

    return $build;
  }


  /**
   * {@inheritdoc}
   *
   * @todo Make cacheable in https://www.drupal.org/node/2232375.
   */
  public function getCacheMaxAge() {
    return 0;
  }
}