<?php

declare(strict_types=1);

namespace app\services;

use app\services\interfaces\MediaLibraryInterface;
use Yii;

/**
 * Самописная библиотека для работы с изображением
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
final class MediaLibrarySelfWritten implements MediaLibraryInterface
{
    /**
     * @inheritDoc
     */
    public function upload(string $pathToFile): string
    {
        Yii::info(__METHOD__);

        return md5(__METHOD__ . $pathToFile);
    }

    /**
     * @inheritDoc
     */
    public function get(string $fileCode): string
    {
        Yii::info(__METHOD__);

        return '';
    }
}