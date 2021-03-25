<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Kcs\Serializer\Bundle\SerializerBundle::class => ['all' => true],
    Solido\Symfony\SolidoBundle::class => ['all' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true, 'test' => true],
];
