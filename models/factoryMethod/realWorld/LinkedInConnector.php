<?php

declare(strict_types=1);

namespace app\models\factoryMethod\realWorld;

/**
 * А этот Конкретный Продукт реализует API LinkedIn
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class LinkedInConnector implements SocialNetworkConnectorInterface
{
    /**
     * @var string
     */
    private $email;
    private $password;

    /**
     * LinkedInConnector constructor.
     *
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->email with " .
            "password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->email\n";
    }

    /**
     * @param string $content
     */
    public function createPost(string $content): void
    {
        echo "Send HTTP API requests to create a post in LinkedIn timeline.\n";
    }
}
