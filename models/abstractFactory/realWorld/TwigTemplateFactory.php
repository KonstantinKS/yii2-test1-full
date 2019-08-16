<?php

declare(strict_types=1);

namespace app\models\abstractFactory\realWorld;

/**
 * Каждая Конкретная Фабрика соответствует определённому варианту (или семейству) продуктов
 *
 * Эта Конкретная Фабрика создает шаблоны Twig
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class TwigTemplateFactory implements TemplateFactoryInteface
{
    public function createTitleTemplate(): TitleTemplateInterface
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplateInterface
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): RendererTemplateInterface
    {
        return new TwigRenderer();
    }
}
