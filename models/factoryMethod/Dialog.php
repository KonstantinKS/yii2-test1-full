<?php

declare(strict_types=1);

namespace app\models\factoryMethod;

/**
 * Abstract Class Dialog
 *
 * @author Konstatin Karpov <k-karpov@inbox.ru>
 */
abstract class Dialog implements DialogInterface
{
    /**
     * @var ButtonInterface
     */
    private $button;

    /**
     * @inheritDoc
     */
    public function render(string $text = null, string $color = null): void
    {
        $this->button = $this->createButton();
        $this->button->onClick('closeDialog');
        $this->button->render($text, $color);
    }

    /**
     * @inheritDoc
     */
    abstract public function createButton(): ButtonInterface;
}
