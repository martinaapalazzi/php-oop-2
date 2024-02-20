<?php

trait HasDescription {
    public $description;

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        return $this->description = $description;
    }
}