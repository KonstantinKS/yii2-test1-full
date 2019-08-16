<?php

declare(strict_types=1);

namespace app\models\abstractFactory\pseudo;

/**
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class WinButton implements ButtonInterface
{
    public function paint(): void
    {
        echo '<button class="win-button"'
            . 'style="color: red; border-color: blueviolet; border-width: 3px;'
            . 'width: 120px; height: 120px; margin: 60px 0 10px 310px;'
            . 'transform: rotate(-45deg); transform-origin: 50% 100%">'
            . 'Win Button'
            . '</button>';
    }
}
