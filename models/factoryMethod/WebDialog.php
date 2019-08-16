<?php

declare(strict_types=1);

namespace app\models\factoryMethod;

/**
 * Class WebDialog
 *
 * @author Konstatin Karpov <k-karpov@inbox.ru>
 */
class WebDialog extends Dialog implements DialogInterface
{
    /**
     * @inheritDoc
     */
    public function createButton(): ButtonInterface
    {
        return new HTMLButton();
    }
}
