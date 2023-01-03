<?php

declare(strict_types = 1);

namespace Drupal\Tests\marvin_phplint_product\Integration;

/**
 * @group marvin
 * @group marvin_product
 * @group marvin_phplint
 * @group marvin_phplint_product
 * @group drush-command
 *
 * @covers \Drush\Commands\marvin_phplint_product\PhplintCommands
 */
class MarvinLintPhplintCommandsTest extends UnishIntegrationTestCase {

  public function testMarvinLintPhplintHelp(): void {
    $expected = [
      'stdError' => '',
      'stdOutput' => 'Runs `php -l`.',
      'exitCode' => 0,
    ];

    $args = [];
    $options = $this->getCommonCommandLineOptions();
    $options['help'] = NULL;

    $this->drush(
      'marvin:lint:phplint',
      $args,
      $options,
      NULL,
      NULL,
      $expected['exitCode'],
      NULL,
      $this->getCommonCommandLineEnvVars(),
    );

    $actualStdError = $this->getErrorOutput();
    $actualStdOutput = $this->getOutput();

    static::assertStringContainsString($expected['stdError'], $actualStdError, 'StdError');
    static::assertStringContainsString($expected['stdOutput'], $actualStdOutput, 'StdOutput');
  }

  public function testMarvinLintPhplintRun(): void {
    $expected = [
      'stdError' => '',
      'stdOutput' => '',
      'exitCode' => 0,
    ];

    $args = [];
    $options = $this->getCommonCommandLineOptions();

    $this->drush(
      'marvin:lint:phplint',
      $args,
      $options,
      NULL,
      $this->getProjectRootDir(),
      $expected['exitCode'],
      NULL,
      $this->getCommonCommandLineEnvVars(),
    );

    $actualStdError = $this->getErrorOutput();
    $actualStdOutput = $this->getOutput();

    static::assertStringContainsString($expected['stdError'], $actualStdError, 'StdError');
    static::assertStringContainsString($expected['stdOutput'], $actualStdOutput, 'StdOutput');
  }

}
