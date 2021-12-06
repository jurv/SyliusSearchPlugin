<?php

/*
 * This file is part of SyliusSearchPlugin.
 *
 * (c) Monsieur Biz
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MonsieurBiz\SyliusSearchPlugin\Message;

class ProductReindexFromTaxon
{
    //todo rename to ProductReindexFromTaxonId

    private int $taxonId;

    public function __construct(int $taxonId)
    {
        $this->taxonId = $taxonId;
    }

    public function getTaxonId(): int
    {
        return $this->taxonId;
    }
}
