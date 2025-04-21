<?php

namespace Ktr\Langscanner;

use Illuminate\Support\Collection;
use Ktr\Langscanner\Contracts\FileTranslations;

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
