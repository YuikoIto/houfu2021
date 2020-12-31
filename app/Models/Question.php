<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Imagick;
use ImagickDraw;

class Question extends Model
{
    protected $guarded = ['id'];

    public function generateOgp(): Imagick
    {
        $body = $this->getWordwrapedBody();

        $image = new Imagick(resource_path('images/ogp.png'));

        $draw = new ImagickDraw();
        $draw->setFont(resource_path('fonts/NotoSerifJP-Bold.otf'));
        $draw->setFontSize(24);
        $draw->setTextAlignment(Imagick::ALIGN_CENTER);
        $lines = explode("\n", $body);
        $draw->annotation(300, 157 - (count($lines) - 1) * 12, $body);

        $image->drawImage($draw);

        return $image;
    }

    private function getWordwrapedBody(): string
    {
        $lines = explode("\n", $this->body);
        $result = [];
        foreach ($lines as $line) {
            $length = mb_strlen($line);
            for ($start = 0; $start < $length; $start += 20) {
                $result[] = mb_substr($line, $start, 20);
            }
        }
        return join("\n", $result);
    }
}
