<?php

namespace Smoren\Validator\Interfaces;

interface UniformRuleInterface extends BaseRuleInterface
{
    /**
     * @param CheckInterface $check
     *
     * @return static
     */
    public function add(CheckInterface $check): self;

    /**
     * @param string $name
     * @param callable $predicate
     * @param array<string, mixed> $params
     * @param bool $isBlocking
     *
     * @return static
     */
    public function check(string $name, callable $predicate, array $params = [], bool $isBlocking = false): self;
}
