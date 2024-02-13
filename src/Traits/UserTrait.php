<?php

namespace ArdaGnsrn\ElevenLabs\Traits;

use ArdaGnsrn\ElevenLabs\Utils\API;

trait UserTrait
{
    /**
     * Get user
     */
    public function getUser(): array
    {
        return API::request('GET', 'user');
    }
}
