<?php

namespace App\Service;

use App\Repository\TranslationRepository;
use App\Repository\CultureRepository;

class TranslationService {

    private $tr;
    private $cr;

    public function __construct(TranslationRepository $tr, CultureRepository $cr) {
        $this->tr = $tr;
        $this->cr = $cr;
    }

    public function translate(string $code) {

        $cultureFr = $this->cr->findOneBy([
            'locale' => 'fr-FR',
        ]);

        $translationFr = $this->tr->findOneBy([
            'code' => $code,
            'culture' => $cultureFr
        ]);

        return $translationFr->getPhrase();
    }
}