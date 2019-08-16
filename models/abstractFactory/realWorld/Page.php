<?php

declare(strict_types=1);

namespace app\models\abstractFactory\realWorld;

/**
 * Клиентский код
 * Обратите внимание, что он принимает класс Абстрактной Фабрики в качестве параметра
 * Что позволяет клиенту работать с любым типом конкретной фабрики
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class Page
{
    public $title;

    public $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    // Вот как вы бы использовали этот шаблон в дальнейшем. Обратите внимание,
    // что класс страницы не зависит ни от классов шаблонов, ни от классов
    // отрисовки.
    public function render(TemplateFactoryInteface $factory): string
    {
        $pageTemplate = $factory->createPageTemplate();

        $renderer = $factory->getRenderer();

        return $renderer->render($pageTemplate->getTemplateString(), [
            'title' => $this->title,
            'content' => $this->content,
        ]);
    }
}
