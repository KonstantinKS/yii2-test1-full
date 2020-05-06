<?php

declare(strict_types=1);

namespace app\services\interfaces;

/**
 * Интерфейс медиа библиотеки
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
interface MediaLibraryInterface
{
    /**
     * Загрузить изображение
     *
     * @param string $pathToFile
     * @return string
     */
    public function upload(string $pathToFile): string;

    /**
     * Получить изображение
     *
     * @param string $fileCode
     * @return string
     */
    public function get(string $fileCode): string;
}