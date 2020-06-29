<?php

namespace BetaSavvy\Fixer;

use PhpCsFixer\Config as BaseConfig;

class Config extends BaseConfig
{
    public function __construct($name = 'betasavvy')
    {
        parent::__construct($name);
        $this->setRiskyAllowed(true);
//        $this->setIndent("\t");
        $this->setLineEnding("\n");
    }

    public function getRules(): array
    {
        return [
            '@PSR2'           => true,
            'array_syntax'    => [
                'syntax' => 'short',
            ],
            'no_unused_imports' => true,
        ];
    }
}
