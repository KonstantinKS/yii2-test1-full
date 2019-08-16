<?php

declare(strict_types=1);

namespace app\models\factoryMethod;

/**
 * Class WindowsDialog
 *
 * @author Konstatin Karpov <k-karpov@inbox.ru>
 */
class WindowsDialog extends Dialog implements DialogInterface
{
    /**
     * @inheritDoc
     */
    public function createButton(): ButtonInterface
    {
        return new WindowsButton();
    }
}
