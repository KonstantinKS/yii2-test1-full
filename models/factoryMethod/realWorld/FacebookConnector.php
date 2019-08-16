<?php

declare(strict_types=1);

namespace app\models\factoryMethod\realWorld;

/**
 * Этот Конкретный Продукт реализует API Facebook
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class FacebookConnector implements SocialNetworkConnectorInterface
{
    /**
     * @var string
     */
    private $login;
    private $password;

    /**
     * FacebookConnector constructor.
     *
     * @param string $login
     * @param string $password
     */
    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->login\n";
    }

    /**
     * @param string $content
     */
    public function createPost(string $content): void
    {
        echo "Send HTTP API requests to create a post in Facebook timeline.\n";
    }
}
