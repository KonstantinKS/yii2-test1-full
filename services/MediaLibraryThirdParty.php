<?php

declare(strict_types=1);

namespace app\services;

use app\services\interfaces\MediaLibraryThirdPartyInterface;
use Yii;

/**
 * Сторонняя библиотека работы с изображениями. Закрытая для модификации
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
final class MediaLibraryThirdParty implements MediaLibraryThirdPartyInterface
{
    /**
     * @inheritDoc
     */
    public function addMedia(string $pathToFile): string
    {
        Yii::info(__METHOD__);

        return '';
    }

    /**
     * @inheritDoc
     */
    public function getMedia(string $fileCode): string
    {
        Yii::info(__METHOD__);

        return '';
    }
}