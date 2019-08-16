<?php

declare(strict_types=1);

namespace app\models\abstractFactory\realWorld;

/**
 * Классы отрисовки отвечают за преобразовании строк шаблонов в конечный HTML код
 * Каждый такой класс устроен по-раному и ожидает на входе шаблоны только своего типа
 * Работа с шаблонами через фабрику позволяет вам избавиться от риска подать в отрисовщик шаблон не того типа
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
interface RendererTemplateInterface
{
    /**
     * @param string $templateString
     * @param array $arguments
     * @return string
     */
    public function render(string $templateString, array $arguments = []): string;
}
