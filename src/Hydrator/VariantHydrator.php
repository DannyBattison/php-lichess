<?php

namespace Lichess\Hydrator;

use Lichess\Entity\Variant;
use PHydrator\AbstractHydrator;

class VariantHydrator extends AbstractHydrator
{
	protected const ENTITY_CLASS = Variant::class;
}
