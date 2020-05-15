<?php

declare(strict_types=1);

namespace app\insomnia\controllers;

use Yii;
use yii\web\Controller;

/**
 * Class DefaultController
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
final class DefaultController extends Controller
{
    public function actionIndex()
    {
//        Yii::$app->response->headers->set("HTTP/1.1 200 Ok");

        Yii::$app->response->headers->set('Content-Type', 'application/json');
        Yii::$app->response->format = Yii::$app->response::FORMAT_JSON;

        return [
            'type' => 'open',
            '000219_000011_RU_ГПНТБ_России_IBIS_0000650162 head',
            'qqqqqqqqqqq',
            'ddddddddddd',
        ];
    }
}