<?php

namespace BinaryStudioAcademy\Task2;

class EmojiGenerator
{
    private $emoji = ['😀', '😃', '😄', '😁', '😆', '😅', '😂'];

    private function getEmoji()
    {
        return $this->emoji;
    }

    public function generate()
    {
        foreach ($this->getEmoji() as $e) {
            yield $e;
        }
    }
}
