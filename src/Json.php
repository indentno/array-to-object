<?php

namespace Sempro\ArrayToObject;

use Illuminate\Contracts\Support\Jsonable;

class Json implements Jsonable
{
    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = (is_array($value) ? new self($value) : $value);
        }
    }

    public function __toString()
    {
        return $this->toJson();
    }

    /**
     * Convert the object to its JSON representation.
     *
     * @param  int $options
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode(get_object_vars($this));
    }
}
