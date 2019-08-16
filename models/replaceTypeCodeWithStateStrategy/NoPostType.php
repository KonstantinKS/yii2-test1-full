<?php

declare(strict_types=1);

namespace app\models\replaceTypeCodeWithStateStrategy;

/**
 * Class NoPostType
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class NoPostType extends EmployeeType
{
    public function getJobType()
    {
        return EmployeeType::JOB_TYPE_NO_POST;
    }
}
