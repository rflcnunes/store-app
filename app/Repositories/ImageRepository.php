<?php

namespace App\Repositories;

use App\Models\Image;
use App\Repositories\Interfaces\ImageRepositoryInterface;

class ImageRepository implements ImageRepositoryInterface
{
    private $image;

    public function __construct(Image $image)
    {
        $this->image = $image;
    }

    public function all()
    {
        return $this->image->all();
    }

    public function createImage(array $data)
    {
        return $this->image->create($data);
    }
}
