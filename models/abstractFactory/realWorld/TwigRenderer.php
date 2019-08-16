<?php

declare(strict_types=1);

namespace app\models\abstractFactory\realWorld;

use Twig\Environment;
use Twig\Loader\ArrayLoader;

/**
 * Отрисовщик шаблонов Twig
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class TwigRenderer implements RendererTemplateInterface
{
    public function render(string $templateString, array $arguments = []): string
    {
        $loader = new ArrayLoader(['index' => $templateString]);
        $twig = new Environment($loader);

        return $twig->render('index', $arguments);
    }
}
