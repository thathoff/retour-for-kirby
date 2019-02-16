<?php

namespace distantnative\Retour;

use Kirby\Http\Header;

class System
{
    public function toArray(): array
    {
        $kirby  = kirby();
        $plugin = $kirby->plugin('distantnative/retour');

        return [
            'version'     => $plugin ? $plugin->version() : '-',
            'site'        => $kirby->site()->url(),
            'headers'     => Header::$codes,
            'debug'       => option('distantnative.retour.debug')
        ];
    }
}
