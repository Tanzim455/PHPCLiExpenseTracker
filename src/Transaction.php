<?php

declare(strict_types=1);

namespace App;

interface Transaction
{
    public function filePathExists(): void;
    public function selectCategoriesorFinish(): void;
    public function selectCategories(): void;
    public function enterAmountToOutputFile(): void;
    public function fileWriting(): void;
}
