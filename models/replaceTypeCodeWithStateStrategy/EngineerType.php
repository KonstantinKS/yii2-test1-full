<?php

declare(strict_types=1);

namespace app\models\replaceTypeCodeWithStateStrategy;

/**
 * Class EngineerType
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class EngineerType extends EmployeeType
{
    public function getJobType()
    {
        return EmployeeType::JOB_TYPE_ENGINEER;
    }
}
