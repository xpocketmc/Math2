<?php

namespace pocketmine\math;

class Vector4 {
    private $vector4;

    public function __construct(int $vector4) {
        $this->vector4 = $vector4;
    }

    public function setVector4(int $value): void {
        $this->vector4 = $value;
    }

    public function getVector4(): int {
        return $this->vector4;
    }

    public function add(int $value): int {
        $this->vector4 += $value;
        return $this->vector4;
    }

    public function double(): int {
        $this->vector4 *= 2;
        return $this->vector4;
    }

    public function __toString(): string {
        return "Vector4: " . $this->vector4;
    }

    public function equals(Vector4 $other): bool {
        return $this->vector4 === $other->getVector4();
    }
}
