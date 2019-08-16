<?php

declare(strict_types=1);

namespace app\models\abstractFactory\pseudo;

/**
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class MacCheckbox implements CheckboxInterface
{
    public function paint(): void
    {
        echo '<input type="checkbox" class="Mac-checkbox"'
            . 'style="color: coral; border-color: darkorange; border-width: 3px;'
            . 'border-radius: 100px 50px"'
            . 'title="Mac Checkbox" />'
            . '<label>Mac Checkbox</label>';
    }
}
