<?php

declare(strict_types=1);

namespace app\models\factoryMethod\realWorld;

/**
 * Интерфейс Продукта объявляет поведения различных типов продуктов
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
interface SocialNetworkConnectorInterface
{
    public function logIn(): void;


    public function logOut(): void;

    /**
     * @param string $content
     */
    public function createPost(string $content): void;
}
