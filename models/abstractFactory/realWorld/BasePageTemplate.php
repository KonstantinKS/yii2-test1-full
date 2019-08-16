<?php

declare(strict_types=1);

namespace app\models\abstractFactory\realWorld;

/**
 * Шаблон страниц использует под-шаблон заголовков, поэтому мы должны
 * предоставить способ установить объект для этого под-шаблона
 * Абстрактная фабрика позаботится о том, чтобы подать сюда под-шаблон подходящего типа
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
abstract class BasePageTemplate implements PageTemplateInterface
{
    protected $titleTemplate;

    /**
     * BasePageTemplate constructor.
     *
     * @param TitleTemplateInterface $titleTemplate
     */
    public function __construct(TitleTemplateInterface $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}
