<?php

declare(strict_types=1);

namespace app\models\abstractFactory\realWorld;

/**
 * Отрисовщик шаблонов PHP
 * Оговорюсь, что эта реализация очень простая, если не примитивная
 * В реальных проектах используйте `eval` с осмотрительностью, т.к. неправильное использование этой функции может
 * привести к дырам безопасности.
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class PHPRenderer implements RendererTemplateInterface
{
    public function render(string $templateString, array $arguments = []): string
    {
        extract($arguments);

        ob_start();
        eval(' ?>' . $templateString . '<?php ');
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }
}
