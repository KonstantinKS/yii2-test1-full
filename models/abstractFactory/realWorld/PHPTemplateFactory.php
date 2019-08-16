<?php

declare(strict_types=1);

namespace app\models\abstractFactory\realWorld;

/**
 * А эта Конкретная Фабрика создает шаблоны PHPTemplate
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class PHPTemplateFactory implements TemplateFactoryInteface
{
    public function createTitleTemplate(): TitleTemplateInterface
    {
        return new PHPTitleTemplate();
    }

    public function createPageTemplate(): PageTemplateInterface
    {
        return new PHPPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): RendererTemplateInterface
    {
        return new PHPRenderer();
    }
}
