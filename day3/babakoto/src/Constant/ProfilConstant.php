<?php
    namespace App\Constant;

    class ProfilConstant
    {
        public const MY_PROFILE = 
        [
            'nom'=>"RAND",
            'prenom'=>"Taratra",
            'age'=>22,
            'dateDeNaissance'=>"13/02/1989",
            'parent'=>
            [
                'pere'=>
                [
                    'nom'=>"RAND",
                    'prenom'=>"Papa"
                ],
                'mere'=>
                [
                    'nom'=>"PUN",
                    'prenom'=>"Maman"
                ],
            ],
            'etude'=>
            [
                [
                    'etablissement'=>"CNTEMAD",
                    'diplome'=>"Licence",
                ],
                [
                    'etablissement'=>"ANKATSO",
                    'diplome'=>"Doctorat",
                ],
            ],
            'experience'=>
            [
                [
                    'societe'=>"Ingenyosa",
                    'poste'=>"Testeur"
                ],
                [
                    'societe'=>"Oworker",
                    'poste'=>"Transcripteur"
                ]
            ]
        ];

        public const NUMBER_TO_FLAT = 
        [
            1,
            [
                2, 5, 4, 3, 6, 7, 8
            ],
            [9],
            10
        ];
    }
?>