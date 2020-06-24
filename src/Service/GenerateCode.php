<?php

namespace App\Service;


class GenerateCode {

    public function generate(int $id) {

        return "RES-" . sprintf("%010d", $id);
    }
}