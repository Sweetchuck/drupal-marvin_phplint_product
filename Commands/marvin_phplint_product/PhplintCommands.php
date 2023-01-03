<?php

declare(strict_types = 1);

namespace Drush\Commands\marvin_phplint_product;

use Drush\Attributes as CLI;
use Drush\Boot\DrupalBootLevels;
use Drush\Commands\marvin_phplint\PhplintCommandsBase;
use Robo\Contract\TaskInterface;

class PhplintCommands extends PhplintCommandsBase {

  /**
   * Runs `php -l`.
   */
  #[CLI\Command(name: 'marvin:lint:phplint')]
  #[CLI\Bootstrap(level: DrupalBootLevels::NONE)]
  public function cmdMarvinLintPhplintExecute(): TaskInterface {
    return $this->getTaskLintPhplintExtension('.');
  }

}
