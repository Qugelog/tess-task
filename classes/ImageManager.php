<?php 

class ImageManager 
{
    private $image;
    private $width;
    private $height;
    private $imageResized;
 
    function __construct($fileName)
    {
        // *** Открытие файла
        $this->image = $this->openImage($fileName);
 
        // *** Получение ширины и высоты изображения
        $this->width  = imagesx($this->image);
        $this->height = imagesy($this->image);  
    }


    private function openImage($file) 
    {
        $extension = strtolower(strrchr($file, '.'));

        switch ($extension)
        {
            case '.jpg':
            case '.jpeg':
                $img = imagecreatefromjpeg($file);
                break;
            case '.gif':
                $img = imagecreatefromgif($file);
                break;
            case '.png':
                $img = imagecreatefrompng($file);
                break;
            default:
                $img = null;
                break;
        }

        return $img;
    }

    public function resize(int $width, int $height)
    {
        $this->imageResized = imagecreatetruecolor($width, $height);
        $img = imagecopyresampled($this->imageResized, $this->image, 0, 0, 0, 0, $width, $height, $this->width, $this->height);
    }

    public function save($savePath, $imageQuality="100")
    {
        $extension = strrchr($savePath, '.');
        $extension = strtolower($extension);

        switch($extension)
        {
            case '.jpg':
            case '.jpeg':
                if(imagetypes() & IMG_JPG)
                    header('Content-Type: image/jpeg');
                    imagejpeg($this->imageResized, $savePath, $imageQuality); 
            break;

            case '.gif':
                if(imagetypes() & IMG_GIF)
                    header('Content-Type: image/gif'); 
                    imagegif($this->imageResized, $savePath);
            break;

            case '.png': 
                $scaleQuality = round(($imageQuality/100) * 9);
                $invertScaleQuality = 9 - $scaleQuality;
                if (imagetypes() & IMG_PNG) {
                    header('Content-Type: image/x-png');
                    imagepng($this->imageResized, $savePath, $invertScaleQuality);
                }
            break; 

            default: break;
        }

        imagedestroy($this->imageResized);
    }

}