<?php

namespace AvtoDev\StaticReferencesLaravel\Traits;

/**
 * Trait InstanceableTrait.
 */
trait InstanceableTrait
{
    /**
     * Возвращает собственный инстанс (метод для использования в фасаде в первую очередь).
     *
     * @return $this
     */
    public function instance()
    {
        return $this;
    }
}
