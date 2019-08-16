<?php

declare(strict_types=1);

namespace app\models\abstractFactory\realWorld;

/**
 * Это еще один тип Абстрактного Продукта, который описывает шаблоны целых страниц
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
interface PageTemplateInterface
{
    public function getTemplateString(): string;
}
