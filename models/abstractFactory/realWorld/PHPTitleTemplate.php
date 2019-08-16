<?php

declare(strict_types=1);

namespace app\models\abstractFactory\realWorld;

/**
 * А этот Конкретный Продукт предоставляет шаблоны заголовков страниц PHP
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class PHPTitleTemplate implements TitleTemplateInterface
{
    public function getTemplateString(): string
    {
        return '<h1><?= $title; ?></h1>';
    }
}
