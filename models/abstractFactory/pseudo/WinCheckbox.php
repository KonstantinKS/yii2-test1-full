<?php

declare(strict_types=1);

namespace app\models\abstractFactory\pseudo;

/**
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class WinCheckbox implements CheckboxInterface
{
    public function paint(): void
    {
        echo '<input type="checkbox" class="win-checkbox"'
            . 'style="color: red; border-color: blueviolet; border-width: 3px;'
            . 'margin: 60px 0 10px 310px;'
            . 'transform: rotate(-45deg); transform-origin: 50% 100%"'
            . 'title="Win Checkbox" />'
            . '<label>Win Checkbox</label>';
    }
}
