<?php

declare(strict_types=1);

namespace app\models\factoryMethod;

use Yii;

/**
 * Class WindowsButton
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class WindowsButton implements ButtonInterface
{
    /**
     * @inheritDoc
     */
    public function render(string $text = null, string $color = null): void
    {
        echo '<button class="windows-button" style="margin: 50px; padding: 50px; border-radius: 50%; color: '
            . ($color ?? 'black') . '">'
            . ($text ?? Yii::t('yii', 'Нет текста'))
            . '</button>';
    }

    /**
     * @inheritDoc
     */
    public function onClick(string $function): void
    {
        echo '<script type="text/javascript">'
            . '/*<![CDATA[*/'
            . 'window.addEventListener("load", function () {'
            . 'let elementsWin = document.getElementsByClassName("windows-button");'
            . 'Array.prototype.forEach.call(elementsWin, function(v, i, a) {'
            . 'v.onclick = function() {'
            . 'alert("Windows Button Click");'
            . 'console.log("Windows Button Click");'
            . '};'
            . '});'
            . '});'
            . '/*]]>*/'
            . '</script>';
    }
}
