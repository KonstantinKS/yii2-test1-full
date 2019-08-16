<?php

declare(strict_types=1);

namespace app\models\abstractFactory\conceptual;

/**
 * Конкретные Продукты создаются соответствующими Конкретными Фабриками.
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class ConcreteProductB1 implements AbstractProductBInterface
{
    public function usefulFunctionB(): string
    {
        return 'The result of the product B1.';
    }

    /**
     * Продукт B1 может корректно работать только с Продуктом A1. Тем не менее,
     * он принимает любой экземпляр Абстрактного Продукта А в качестве
     * аргумента.
     *
     * @param AbstractProductAInterface $collaborator
     * @return string
     */
    public function anotherUsefulFunctionB(AbstractProductAInterface $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B1 collaborating with the ({$result})";
    }
}
