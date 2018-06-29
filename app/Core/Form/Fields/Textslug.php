<?php

namespace App\Core\Form\Fields;

final class Textslug extends AbstractField
{

    public function render()
    {
        $value = !is_array($this->value()) ? $this->value() : "";
        return "<input class='form-control slug-control'
                       placeholder='{$this->description()}'
                       name='{$this->name()}'
                       value='$value' required>
           ";
    }

}
