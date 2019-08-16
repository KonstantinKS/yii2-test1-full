<?php

declare(strict_types=1);

namespace app\models\abstractFactory\pseudo;

/**
 * Для кода, использующего фабрику, не важно, с какой конкретно
 * фабрикой он работает. Все получатели продуктов работают с
 * ними через общие интерфейсы
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class Application
{
    /**
     * @var ButtonInterface
     */
    private $button;

    /**
     * @var CheckboxInterface
     */
    private $checkbox;

    /**
     * @var GUIFactoryInterface
     */
    private $factory;

    /**
     * Application constructor.
     *
     * @param GUIFactoryInterface $factory
     */
    public function __construct(GUIFactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createUI(): void
    {
        $this->button = $this->factory->createButton();
        $this->checkbox = $this->factory->createCheckbox();
    }

    public function paint(): void
    {
        $this->button->paint();
        $this->checkbox->paint();
    }
}
