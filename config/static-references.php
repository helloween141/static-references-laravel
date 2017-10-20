<?php

return [

    /*
     * Настройки кэширования данных справочников.
     */
    'cache' => [

        // Разрешено ли использовать кэширование при работе со статическими справочниками
        'enabled' => (bool) env('STATIC_REFERENCES_CACHE_ENABLED', false),

        // Имя хранилища используемого кэша. Указывайте имя одного из "cache.stores". Если указать 'auto', то имя
        // используемого хранилища будет взято из конфига "cache.default". В противном случае очень рекомендуется
        // использовать драйвер "redis"
        'store' => env('CACHE_DRIVER', 'auto'),

    ],

    /*
     * Дополнительные (пользовательские) справочники.
     *
     * Внимание! Пользовательские классы справочников обязаны реализовывать интерфейс ReferenceProviderInterface.
     */
    'extra_references' => [],

];
