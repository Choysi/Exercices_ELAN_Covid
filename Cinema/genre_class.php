<?php
//creation film
class Genre
{
    // Attributs
    public $genre;


    public function __construct($_genre)
    {
        $this->genre = [$_genre];
    }

    //fonction
    public function __toString()
    {
        $display = "";
        foreach ($this->genre as $key => $value) {
            if ($value == NULL) {
                $display .= "<strong>$key</strong><br>";
            } elseif ($value != NULL) {
                $display .= "<strong>film</strong> : $key <br>";
                foreach ($this->genre[$key] as $detail => $value) {
                    $display .= "$detail : $value<br>";
                }
            }
        }
        return $display;
    }
}
