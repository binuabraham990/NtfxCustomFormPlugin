<?php

declare(strict_types=1);

namespace NtfxCustomFormPlugin\Core\Content\PackagingType;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class PackagingTypeEntity extends Entity {

    use EntityIdTrait;

    /**
     * @var string|null
     */
    protected ?string $name;

    /**
     * @var float|null
     */
    protected ?float $height;

    /**
     * @var float|null
     */
    protected ?float $width;

    /**
     * @var float|null
     */
    protected ?float $length;

    public function getName(): ?string {
        return $this->name;
    }

    public function setName(?string $name): void {
        $this->name = $name;
    }

    public function getHeight(): ?float {
        return $this->height;
    }

    public function setHeight(?float $height): void {
        $this->height = $height;
    }

    public function getWidth(): ?float {
        return $this->width;
    }

    public function setWidth(?float $width): void {
        $this->width = $width;
    }

    public function getLength(): ?float {
        return $this->length;
    }

    public function setLegth(?float $length): void {
        $this->length = $length;
    }
}
