<?php

declare(strict_types=1);

namespace app\models\abstractFactory\realWorld;

/**
 * Этот Конкретный Продукт предоставляет шаблоны заголовков страниц Twig
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class TwigTitleTemplate implements TitleTemplateInterface
{
    public function getTemplateString(): string
    {
        return '<h1>{{ title }}</h1>';
    }
}
