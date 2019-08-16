<?php

declare(strict_types=1);

namespace app\models\abstractFactory\realWorld;

/**
 * Интерфейс Абстрактной фабрики объявляет создающие методы для каждого определённого типа продукта
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
interface TemplateFactoryInteface
{
    public function createTitleTemplate(): TitleTemplateInterface;

    public function createPageTemplate(): PageTemplateInterface;

    public function getRenderer(): RendererTemplateInterface;
}
