<?php

declare(strict_types=1);

namespace app\models\abstractFactory\realWorld;

/**
 * Каждый отдельный тип продукта должен иметь отдельный интерфейс
 * Все варианты продукта должны соответствовать одному интерфейсу
 *
 * Например, этот интерфейс Абстрактного Продукта описывает поведение шаблонов заголовков страниц
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
interface TitleTemplateInterface
{
    public function getTemplateString(): string;
}
