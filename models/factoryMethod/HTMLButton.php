<?php

declare(strict_types=1);

namespace app\models\factoryMethod;

use Yii;

/**
 * Class HTMLButton
 *
 * @author Konstatin Karpov <k-karpov@inbox.ru>
 */
class HTMLButton implements ButtonInterface
{
    /**
     * @inheritDoc
     */
    public function render(string $text = null, string $color = null): void
    {
        echo '<button class="html-button" style="color: '
            . ($color ?? 'black')
            . '">'
            . ($text ?? Yii::t('yii', 'Нет текста' . ''))
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
            . 'let elementsHtml = document.getElementsByClassName("html-button");'
            . 'Array.prototype.forEach.call(elementsHtml, function(v, i, a) {'
            . 'v.onclick = function() {'
            . 'alert("HTML Button Click");'
            . 'console.log("HTML Button Click");'
            . '};'
            . '});'
            . '});'
            . '/*]]>*/'
            . '</script>';
    }
}
