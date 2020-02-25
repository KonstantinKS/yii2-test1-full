<?php

declare(strict_types=1);

namespace app\models\factoryMethod;

/**
 * Interface DialogInterface
 *
 * @author Konstatin Karpov <k-karpov@inbox.ru>
 */
interface DialogInterface
{
    /**
     * @param string|null $text
     * @param string|null $color
     */
    public function render(string $text = null, string $color = null): void;

    /**
     * @return ButtonInterface
     */
    public function createButton(): ButtonInterface;
}
