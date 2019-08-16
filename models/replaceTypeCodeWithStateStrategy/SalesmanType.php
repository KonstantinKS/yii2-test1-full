<?php

declare(strict_types=1);

namespace app\models\replaceTypeCodeWithStateStrategy;

/**
 * Class SalesmanType
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class SalesmanType extends EmployeeType
{
    public function getJobType()
    {
        return EmployeeType::JOB_TYPE_SALESMAN;
    }
}
