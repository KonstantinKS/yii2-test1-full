<?php

declare(strict_types=1);

namespace app\models\factoryMethod\realWorld;

/**
 * Этот Конкретный Создатель поддерживает Facebook. Помните, что этот класс
 * также наследует метод post от родительского класса. Конкретные Создатели —
 * это классы, которые фактически использует Клиент
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class FacebookPoster extends SocialNetworkPoster
{
    /**
     * @var string
     */
    private $login;
    private $password;

    /**
     * FacebookPoster constructor.
     *
     * @param string $login
     * @param string $password
     */
    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return SocialNetworkConnectorInterface
     */
    public function getSocialNetwork(): SocialNetworkConnectorInterface
    {
        return new FacebookConnector($this->login, $this->password);
    }
}
