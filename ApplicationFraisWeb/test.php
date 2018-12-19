<?php
header('Access-Control-Allow-Origin: *');
$datas = (object)
[
      [
            'id' => '1',
            'mois' => 'Décembre',
            'annee' => '2018',
            'etat' => 'En cours',
            'montant' => '212.90',
            'frais_forfaitises' => 
            [
                  [
                        'id' => 1,
                        'libelle' => 'Repas',
                        'quantite' => '1',
                        'prix' => '25.00',
                  ],
                  [
                        'id' => 2,
                        'libelle' => 'Nuitée hôtel',
                        'quantite' => '3',
                        'prix' => '150.00',
                  ]
            ],
            'frais_non_forfaitises' => 
            [
                  [
                        'id' => 1,
                        'libelle' => 'Péage',
                        'prix' => '37.90',
                  ]
            ]
      ],
      [
            'id' => '2',
            'mois' => 'Novembre',
            'annee' => '2018',
            'etat' => 'Validée',
            'montant' => '199.90',
            'frais_forfaitises' => 
            [
                  [
                        'id' => 1,
                        'libelle' => 'Repas',
                        'quantite' => '1',
                        'prix' => '15.00',
                  ],
                  [
                        'id' => 2,
                        'libelle' => 'Frais kilométrique',
                        'quantite' => '300',
                        'prix' => '150.00',
                  ]
            ],
            'frais_non_forfaitises' => 
            [
                  [
                        'id' => 1,
                        'libelle' => 'Péage',
                        'prix' => '34.90',
                  ]
            ]
      ],
      [
            'id' => '3',
            'mois' => 'Octobre',
            'annee' => '2018',
            'etat' => 'Refusée',
            'montant' => '49.90',
            'frais_forfaitises' => 
            [
                  [
                        'id' => 1,
                        'libelle' => 'Repas',
                        'quantite' => '1',
                        'prix' => '15.00',
                  ]
            ],
            'frais_non_forfaitises' => 
            [
                  [
                        'id' => 1,
                        'libelle' => 'Péage',
                        'prix' => '34.90',
                  ]
            ]
      ]
];
echo json_encode($datas);
?> 