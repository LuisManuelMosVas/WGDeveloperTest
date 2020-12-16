<?php

namespace App\Company;

/**
 * Interface CompanyInterface
 *
 * @package App\Company
 */
interface CompanyInterface
{
    public function getName(): string;

    public function setName(string $name): string;
}