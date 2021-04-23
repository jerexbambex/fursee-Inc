<?php


namespace App\Http\Traits;


use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

trait ImageUpload
{
    public function imageUpload($avatar, $width = 455, $height = 475): array
    {
        //Upload to Cloudinary
        $response = Cloudinary::upload($avatar->getRealPath(), [
                                    'folder' => 'fursee/',
                                    'transformation' => [
                                        'gravity' => 'face',
                                        'quality' => 'auto:best',
                                        'width' => $width,
                                        'height' => $height,
                                        'crop' => 'fill'
                                    ]
                                ]);

        $results = [
            'public_id' => $response->getPublicId(),
            'url' => $response->getPath(),
            'secure_url' => $response->getSecurePath(),
            'format' => $response->getFileType(),
            'bytes' => $response->getReadableSize(),
        ];

        return $results;
    }
}
