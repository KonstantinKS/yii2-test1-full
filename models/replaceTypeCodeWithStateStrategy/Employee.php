<?php

declare(strict_types=1);

namespace app\models\replaceTypeCodeWithStateStrategy;

/**
 * Class Employee
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class Employee
{
    /** @var EmployeeType */
    private $jobType;

    /**
     * Employee constructor.
     *
     * @param string|null $jobType
     */
    public function __construct(string $jobType = null)
    {
        $this->setJobType($jobType);
    }

    /**
     * @return string
     */
    public function getJobType(): string
    {
        return $this->jobType->getJobType();
    }

    /**
     * @param string $jobType
     */
    public function setJobType(?string $jobType): void
    {
        $this->jobType = EmployeeType::create($jobType);
    }
}
