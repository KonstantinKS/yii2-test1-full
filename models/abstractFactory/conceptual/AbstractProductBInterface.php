<?php

declare(strict_types=1);

namespace app\models\abstractFactory\conceptual;

/**
 * Базовый интерфейс другого продукта. Все продукты могут взаимодействовать друг
 * с другом, но правильное взаимодействие возможно только между продуктами одной
 * и той же конкретной вариации.
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
interface AbstractProductBInterface
{
    /**
     * Продукт B способен работать самостоятельно...
     */
    public function usefulFunctionB(): string;

    /**
     * ...а также взаимодействовать с Продуктами A той же вариации.
     * Абстрактная Фабрика гарантирует, что все продукты, которые она создает,
     * имеют одинаковую вариацию и, следовательно, совместимы.
     *
     * @param AbstractProductAInterface $collaborator
     * @return string
     */
    public function anotherUsefulFunctionB(AbstractProductAInterface $collaborator): string;
}
