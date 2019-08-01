<?php

declare(strict_types=1);

namespace app\models\replaceTypeCodeWithSubclasses;

/**
 * Class Employee
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
abstract class Employee
{
    public const JOB_TYPE_ENGINEER = 'engineer';
    public const JOB_TYPE_SALESMAN = 'salesman';
    public const JOB_TYPE_NO_POST = 'no_post';

    /**
     * @var string
     */
    private $jobType;

    /**
     * Employee constructor.
     *
     * @param string $jobType
     */
    private function __construct(string $jobType)
    {
        $this->jobType = $jobType;
    }

    /**
     * @param string|null $jobType
     * @return Employee
     */
    public static function newEmployee(string $jobType = null): self
    {
        switch ($jobType) {
            case self::JOB_TYPE_ENGINEER:
                return new Engineer(self::JOB_TYPE_ENGINEER);
            case self::JOB_TYPE_SALESMAN:
                return new Salesman(self::JOB_TYPE_SALESMAN);
            default:
                return new NoPost(self::JOB_TYPE_NO_POST);
        }
    }

    /**
     * @return string
     */
    abstract public function getJobType(): string;
}
