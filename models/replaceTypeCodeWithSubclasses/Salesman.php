<?php

declare(strict_types=1);

namespace app\models\replaceTypeCodeWithSubclasses;

/**
 * Class Salesman
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class Salesman extends Employee
{
    /**
     * @return string
     */
    public function getJobType(): string
    {
        return self::JOB_TYPE_SALESMAN;
    }
}
