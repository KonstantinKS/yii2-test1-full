<?php

declare(strict_types=1);

namespace app\services;

use app\services\interfaces\MediaLibraryInterface;
use app\services\interfaces\MediaLibraryThirdPartyInterface;
use yii\base\InvalidCallException;

/**
 * Адаптер библиотеки работы с изображениями
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru.
 */
final class MediaLibraryAdapter implements MediaLibraryInterface
{
    /**
     * @var MediaLibraryThirdPartyInterface
     */
    private $adapterObj;

    /**
     * Конструктор
     *
     * @param MediaLibraryThirdPartyInterface $mediaLibraryThirdParty
     */
    public function __construct(MediaLibraryThirdPartyInterface $mediaLibraryThirdParty)
    {
        $this->adapterObj = $mediaLibraryThirdParty;
    }

    /**
     * @inheritDoc
     */
    public function upload(string $pathToFile): string
    {
        return $this->adapterObj->addMedia($pathToFile);
    }

    /**
     * @inheritDoc
     */
    public function get(string $fileCode): string
    {
        return $this->adapterObj->getMedia($fileCode);
    }

    public function __call(string $name, array $arguments)
    {
        if (method_exists($this->adapterObj, $name)) {
            return call_user_func_array([$this->adapterObj, $name], $arguments);
        }

        throw new InvalidCallException(sprintf('Метод %s не найден.', $name));
    }

    /**
     * Получить описание
     *
     * @return string
     */
    public static function getDescription(): string
    {
        return 'Структурный шаблон Адаптер.';
    }
}