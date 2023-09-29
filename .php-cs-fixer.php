<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->exclude(['.github', 'bin', 'git-hooks'])
    ->in(__DIR__);
$config = new Config();

return $config->setFinder($finder)
    ->setRules([
        '@PER-CS' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setRiskyAllowed(true);
