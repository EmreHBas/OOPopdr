<?php
// Auteur: Emre Bas
class Square extends ScreenShape
{
    public function __construct(int $width, int $height, string $color)
    {
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }

    public function draw(): string
    {
        return "<svg width=\"$this->width\" height=\"$this->height\" xmlns=\"http://www.w3.org/2000/svg\">
                      <rect width=\"" . $this->width . "\" height=\"" . $this->height . "\" style=\"fill:$this->color\"/>
                  </svg>";
    }
}