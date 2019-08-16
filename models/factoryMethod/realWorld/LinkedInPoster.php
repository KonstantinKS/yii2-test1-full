<?php

declare(strict_types=1);

namespace app\models\factoryMethod\realWorld;

/**
 * Этот Конкретный Создатель поддерживает LinkedIn
 *
 * @author Konstantin Karpov <k-karpov@inbox.ru>
 */
class LinkedInPoster extends SocialNetworkPoster
{
    /**
     * @var string
     */
    private $email;
    private $password;

    /**
     * LinkedInPoster constructor.
     *
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return SocialNetworkConnectorInterface
     */
    public function getSocialNetwork(): SocialNetworkConnectorInterface
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}
