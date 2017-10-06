<?php

/*
 * This file is part of the AMP Twig theme.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Cs;

use Allocine\Twigcs\Rule;
use Allocine\Twigcs\Ruleset\RulesetInterface;
use Allocine\Twigcs\Validator\Violation;
use Allocine\Twigcs\Whitelist\TokenWhitelist;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class Ruleset implements RulesetInterface
{
    public function getRules() : array
    {
        return [
            new Rule\DelimiterSpacing(Violation::SEVERITY_ERROR, 1),
            new Rule\ParenthesisSpacing(Violation::SEVERITY_ERROR, 0, 1),
            new Rule\ArraySeparatorSpacing(Violation::SEVERITY_ERROR, 0, 1),
            new Rule\HashSeparatorSpacing(Violation::SEVERITY_ERROR, 0, 1),
            new Rule\OperatorSpacing(Violation::SEVERITY_ERROR, [
                '==', '!=', '<', '>', '>=', '<=',
                '+', '-', '/', '*', '%', '//', '**',
                'not', 'and', 'or',
                '~',
                'is', 'in',
            ], 1),
            new Rule\PunctuationSpacing(
                Violation::SEVERITY_ERROR,
                ['|', '.', '..', '[', ']'],
                0,
                new TokenWhitelist([
                    ')',
                    \Twig_Token::NAME_TYPE,
                    \Twig_Token::NUMBER_TYPE,
                    \Twig_Token::STRING_TYPE,
                ], [2])
            ),
            new Rule\TernarySpacing(Violation::SEVERITY_ERROR, 1),
            new Rule\LowerCaseVariable(Violation::SEVERITY_ERROR),
            new Rule\UnusedMacro(Violation::SEVERITY_WARNING),
            new Rule\SliceShorthandSpacing(Violation::SEVERITY_ERROR),
            new Rule\TrailingSpace(Violation::SEVERITY_ERROR),
        ];
    }
}
