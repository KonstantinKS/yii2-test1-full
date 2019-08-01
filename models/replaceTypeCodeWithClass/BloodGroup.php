<?php

declare(strict_types=1);

namespace app\models\replaceTypeCodeWithClass;

use Yii;

/**
 * Class BloodGroup
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class BloodGroup
{
    private const BLOOD_GROUP_NULL = 'Blood group not set';
    private const BLOOD_GROUP_O = 'O';
    private const BLOOD_GROUP_A = 'A';
    private const BLOOD_GROUP_B = 'B';
    private const BLOOD_GROUP_AB = 'AB';

    private const BLOOD_GROUP = [
        null => self::BLOOD_GROUP_NULL,
        1 => self::BLOOD_GROUP_O,
        2 => self::BLOOD_GROUP_A,
        3 => self::BLOOD_GROUP_B,
        4 => self::BLOOD_GROUP_AB,
    ];

    /**
     * @var int|null $bloodGroup
     */
    private $bloodGroup;

    /**
     * BloodGroup constructor.
     *
     * @param int $bloodGroup
     */
    private function __construct(?int $bloodGroup)
    {
        $this->bloodGroup = $bloodGroup;
    }

    /**
     * @return BloodGroup
     */
    public static function new(): BloodGroup
    {
        return new self(null);
    }

    /**
     * @return BloodGroup
     */
    public static function O(): BloodGroup
    {
        return new self(1);
    }

    /**
     * @return BloodGroup
     */
    public static function A(): BloodGroup
    {
        return new self(2);
    }

    /**
     * @return BloodGroup
     */
    public static function B(): BloodGroup
    {
        return new self(3);
    }

    /**
     * @return BloodGroup
     */
    public static function AB(): BloodGroup
    {
        return new self(4);
    }

    /**
     * @return int|null
     */
    public function getBloodGroup(): ?int
    {
        return $this->bloodGroup;
    }

    /**
     * @return string
     */
    public function getBloodTypeDesignation(): string
    {
        return self::BLOOD_GROUP[$this->getBloodGroup()];
    }
}