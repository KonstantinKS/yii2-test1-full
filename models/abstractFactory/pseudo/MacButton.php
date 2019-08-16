<?php

declare(strict_types=1);

namespace app\models\abstractFactory\pseudo;

/**
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class MacButton implements ButtonInterface
{
    public function paint(): void
    {
        echo '<button class="win-button"'
            . 'style="color: coral; border-color: darkorange; border-width: 3px;'
            . 'width: 200px; height: 100px;'
            . 'border-radius: 100px 50px">'
            . 'Mac Button'
            . '</button>';
    }
}
