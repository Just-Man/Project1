<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 15.03.16
 * Time: 13:32
 */
interface Database
{
    public function add(array $data);

    public function select(array $data,bool $number);

    public function update(array $data);

    public function delete(array $data);
}