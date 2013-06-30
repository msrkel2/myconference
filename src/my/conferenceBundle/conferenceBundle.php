<?php

namespace my\conferenceBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class conferenceBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
