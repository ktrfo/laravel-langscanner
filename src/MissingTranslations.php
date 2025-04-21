<?php

namespace Ktr\Langscanner;

use Ktr\Langscanner\Contracts\FileTranslations;
use Illuminate\Support\Collection;

class MissingTranslations
{
    private RequiredTranslations $requiredTranslations;
    private FileTranslations $fileTranslations;

    public function __construct(
        RequiredTranslations $requiredTranslations,
        FileTranslations $fileTranslations
    ) {
        $this->requiredTranslations = $requiredTranslations;
        $this->fileTranslations = $fileTranslations;
    }

    public function all(): array
    {
        return Collection::make($this->requiredTranslations->all())
            ->filter(fn ($value, $key) => !$this->fileTranslations->contains($key))
            ->toArray();
    }

    public function language(): string
    {
        return $this->fileTranslations->language();
    }
}
