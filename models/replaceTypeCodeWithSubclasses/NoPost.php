<?php

declare(strict_types=1);

namespace app\models\replaceTypeCodeWithSubclasses;

/**
 * Class NoPost
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class NoPost extends Employee
{
    /**
     * @return string
     */
    public function getJobType(): string
    {
        return self::JOB_TYPE_NO_POST;
    }
}
