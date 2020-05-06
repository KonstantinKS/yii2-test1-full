<?php

declare(strict_types=1);

namespace app\services\interfaces;

/**
 * Интерфейс сторонней библиотеки для работы с изображениями. Закрытая для модификации
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
interface MediaLibraryThirdPartyInterface
{
    /**
     * Загрузить изображение
     *
     * @param string $pathToFile
     * @return string
     */
    public function addMedia(string $pathToFile): string;

    /**
     * Получить изображение
     *
     * @param string $fileCode
     * @return string
     */
    public function getMedia(string $fileCode): string;
}