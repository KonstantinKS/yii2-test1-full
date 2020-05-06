<?php

declare(strict_types=1);

namespace app\controllers;

use app\services\interfaces\MediaLibraryInterface;
use app\services\MediaLibraryAdapter;
use app\services\MediaLibrarySelfWritten;
use Yii;
use yii\web\Controller;

/**
 * Контроллер для примеров структурных паттернов проектирования
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
final class StructuralPatternsController extends Controller
{
    /**
     * Пример паттерна адаптер
     */
    public function actionAdapter()
    {
        $name = 'Адаптер';
        $description = MediaLibraryAdapter::getDescription();

        /** @var MediaLibrarySelfWritten $mediaLibrary */
        //$mediaLibrary = Yii::createObject(MediaLibrarySelfWritten::class);
        $mediaLibrary = Yii::createObject(MediaLibraryInterface::class);

        /*...*/

        $result[] = $mediaLibrary->upload('ImageFile');

        $result[] = $mediaLibrary->get('ImageFile');

        /*...*/

        die('return');

        return $this->render('dump', compact('name', 'description'));
    }
}