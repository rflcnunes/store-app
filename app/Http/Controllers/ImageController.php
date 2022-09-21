<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\ImageRepositoryInterface;

class ImageController extends Controller
{
    private $imageRepository;

    public function __construct(ImageRepositoryInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function index()
    {
        $images = $this->imageRepository->all();

        return response()->json($images);
    }

    public function store(Request $request)
    {
        $image = $this->imageRepository->createImage($request->all());

        if ($request->hasFile('path')) {
            $image->path = $request->file('path')->store('images');
        }

        $data = [
            'name' => $image->name,
            'path' => $image->path,
        ];

        return response()->json($data);
    }
}
