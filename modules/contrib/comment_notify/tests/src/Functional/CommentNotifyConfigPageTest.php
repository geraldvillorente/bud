<?php

namespace Drupal\Tests\comment_notify\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\comment\Tests\CommentTestTrait;

/**
 * Tests for the comment_notify module.
 *
 * @group comment_notify
 */
class CommentNotifyConfigPageTest extends BrowserTestBase {

  use CommentTestTrait;

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = [
    'comment_notify',
    'node',
    'comment',
    'token',
  ];

  /**
   * Test that the config page is working.
   */
  protected function setUp() {
    parent::setUp();

    // Create and login administrative user.
    $admin_user = $this->drupalCreateUser(array('administer comment notify', 'administer permissions', 'administer comments'));
    $this->drupalLogin($admin_user);

    // Enable comment notify on this node.
    $this->drupalCreateContentType([
      'type' => 'article',
    ]);
    $this->addDefaultCommentField('node', 'article');
  }

  /**
   * Test to all the options are saved correctly.
   */
  public function testConfigPage() {
    // Check the default values are working.
    $this->drupalGet("admin/config/people/comment_notify");
    $this->submitForm([], 'Save configuration');
    $this->assertSession()->responseContains('The configuration options have been saved.');
  }
}
