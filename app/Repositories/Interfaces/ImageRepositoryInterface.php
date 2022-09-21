<?php

namespace App\Repositories\Interfaces;

interface ImageRepositoryInterface
{
    public function all();
    public function createImage(array $data);
}
