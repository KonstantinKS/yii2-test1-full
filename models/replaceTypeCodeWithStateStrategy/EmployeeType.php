<?php

declare(strict_types=1);

namespace app\models\replaceTypeCodeWithStateStrategy;

/**
 * Class EmployeeType
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
abstract class EmployeeType
{
    public const JOB_TYPE_ENGINEER = 'engineer';
    public const JOB_TYPE_SALESMAN = 'salesman';
    public const JOB_TYPE_NO_POST = 'no_post';

    abstract public function getJobType();

    public static function create($jobType)
    {
        if ($jobType === 'engineer') {
            return new EngineerType();
        } elseif ($jobType === 'salesman') {
            return new SalesmanType();
        } else {
            return new NoPostType();
        }
    }
}