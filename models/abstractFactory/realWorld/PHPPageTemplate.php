<?php

declare(strict_types=1);

namespace app\models\abstractFactory\realWorld;

/**
 * Вариант шаблонов страниц PHP
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class PHPPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
            <div class="page">
                $renderedTitle
                <article class="content"><?= \$content; ?></article>
            </div>
HTML;
    }
}
