<?php

declare(strict_types=1);

namespace app\models\replaceTypeCodeWithClass;

/**
 * Class Person
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class Person
{
    /**
     * @var BloodGroup
     */
    private $bloodGroup;

    /**
     * Person constructor.
     *
     * @param BloodGroup|null $bloodGroup
     */
    public function __construct(BloodGroup $bloodGroup = null)
    {
        $this->bloodGroup = ($bloodGroup === null)
            ? $this->bloodGroup = BloodGroup::new()
            : $this->bloodGroup = $bloodGroup;
    }

    /**
     * @param BloodGroup $bloodGroup
     */
    public function setBloodGroup(BloodGroup $bloodGroup): void
    {
        $this->bloodGroup = $bloodGroup;
    }

    /**
     * @return int|null
     */
    public function getBloodGroup(): ?int
    {
        return $this->bloodGroup->getBloodGroup();
    }

    /**
     * @return string
     */
    public function getBloodTypeDesignation(): string
    {
        return $this->bloodGroup->getBloodTypeDesignation();
    }
}
