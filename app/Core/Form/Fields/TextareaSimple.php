<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 10/07/18
 * Time: 10:27
 */

namespace App\Core\Form\Fields;


class TextareaSimple extends AbstractField
{
    public function render()
    {
        return "<textarea class='form-control'
                          rows='5'
                          name='{$this->name()}'
                          placeholder='{$this->description()}'>{$this->value()}</textarea>
        ";
    }
}