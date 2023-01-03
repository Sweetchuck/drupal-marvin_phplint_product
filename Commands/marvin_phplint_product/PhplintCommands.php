<?php

declare(strict_types = 1);

namespace Drush\Commands\marvin_phplint_product;

use Drush\Commands\marvin_phplint\PhplintCommandsBase;
use Robo\Contract\TaskInterface;

class PhplintCommands extends PhplintCommandsBase {

  /**
   * Runs `php -l`.
   *
   * @command marvin:lint:phplint
   * @bootstrap none
   */
  public function cmdMarvinLintPhplintExecute(): TaskInterface {
    return $this->getTaskLintPhplintExtension('.');
  }

}
