<?php
$medals = [
    // 000 - 099 VC & GC
    'vc' => [
        'name' => 'Victoria Cross',
        'p' => 01,
        'description' => 'Awarded for most conspicuous bravery, or some daring or pre-eminent act of valour or self-sacrifice, or extreme devotion to duty in the presence of the enemy.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Red', 'hex' => '#9E1B32', 'ratio' => 1],
            ],
        ],
        'tags' => ['Gallantry', 'Highest-Awards'],
    ],
    'gc' => [
        'name' => 'George Cross',
        'p' => 02,
        'description' => 'Awarded for acts of the greatest heroism or of the most conspicuous courage in circumstances of extreme danger.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Dark Blue', 'hex' => '#0A2240', 'ratio' => 1],
            ],
        ],
        'tags' => ['Gallantry', 'Highest-Awards'],
    ],
    // 100 - 199 Orders of Knighthood
    // 200 - 299 Decorations
    'Order_St_John' => [
        'name' => 'Order of St John',
        'p' => 200,
        'description' => 'Awarded for qualifying efficient and long service in the Order of St John and its subsidiary institutions.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Black', 'hex' => '#000000', 'ratio' => 1],
            ],
            'permanent_devices' => [
                'ribbon' => [
                    'type' => 'amalfi_cross',
                    'colour' => '#C0C0C0'
                ]
            ],
        ],

        'tags' => ['St-John'],
    ],
    // 300 - 399 Gallantry and Distinguished conduct
    // 400 - 499 Campaign Medals
    // 400 - 409 Pre WW1
    'india_general_service_1909' => [
        'name' => '1909 India General Service Medal',
        'p' => 400,
        'description' => 'Awarded for qualifying service in the North-West Frontier and associated operations.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Dark Blue', 'hex' => '#006A4E', 'ratio' => 1],
                ['name' => 'Orange Yellow', 'hex' => '#002B7F', 'ratio' => 2],
                ['name' => 'Dark Blue', 'hex' => '#006A4E', 'ratio' => 1],
            ],
        ],
        'tags' => ['Inter-War'],
        'devices' => [
            'multiple' => true,
            'label' => 'Ribbon clasp / device',
            'options' => [
                'none' => [
                    'name' => 'No device',
                    'multiple' => true,
                    'ribbon' => [
                        'type' => 'none'
                    ],
                    'medal' => [
                        'type' => 'none'
                    ]
                ],
                'nwf_1930-31' => [
                    'name' => 'North West Frontier 1930–31',
                    'ribbon' => [
                        'type' => 'none'
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'text' => 'North West Frontier 1930–31',
                    ]
                ],
                'burma_1930_32' => [
                    'name' => 'Burma 1930–32',
                    'ribbon' => [
                        'type' => 'none'
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'text' => 'Burma 1930–32',
                    ]
                ]
            ],
        ],
    ],
    // 410 - 419 WW1
    '1914_15_star' => [
        'name' => '1914–15 Star',
        'p' => 411,
        'description' => 'Awarded for qualifying service in a theatre of war between 5 August 1914 and 31 December 1915.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#244A78', 'ratio' => 1],
            ],
        ],
        'tags' => ['WW1'],
    ],
    'british_war_medal' => [
        'name' => 'British War Medal 1914–1920',
        'p' => 412,
        'description' => 'Awarded for qualifying First World War service.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Blue', 'hex' => '#183B68', 'ratio' => 3],
                ['name' => 'Black', 'hex' => '#171717', 'ratio' => 2],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 3],
                ['name' => 'Orange', 'hex' => '#D97828', 'ratio' => 16],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 3],
                ['name' => 'Black', 'hex' => '#171717', 'ratio' => 2],
                ['name' => 'Blue', 'hex' => '#183B68', 'ratio' => 3],
            ],
        ],
        'tags' => ['WW1'],
    ],
    'victory_medal' => [
        'name' => 'Victory Medal 1914–1919',
        'p' => 414,
        'description' => 'Allied Victory Medal awarded to eligible personnel who served in a theatre of war.',
        'ribbon' => [
            'stripes' => [
                // Violet to red
                ['name' => 'Violet', 'hex' => '#654078', 'ratio' => 1],
                ['name' => 'Violet', 'hex' => '#5D437B', 'ratio' => 1],
                ['name' => 'Violet-blue', 'hex' => '#51477D', 'ratio' => 1],
                ['name' => 'Indigo', 'hex' => '#344A83', 'ratio' => 1],
                ['name' => 'Indigo-blue', 'hex' => '#354F8B', 'ratio' => 1],
                ['name' => 'Blue-indigo', 'hex' => '#365F96', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#3979A8', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#3D82A0', 'ratio' => 1],
                ['name' => 'Blue-green', 'hex' => '#438A83', 'ratio' => 1],
                ['name' => 'Blue-green', 'hex' => '#478F70', 'ratio' => 1],
                ['name' => 'Green', 'hex' => '#4C9560', 'ratio' => 1],
                ['name' => 'Green', 'hex' => '#659E58', 'ratio' => 1],
                ['name' => 'Yellow-green', 'hex' => '#8FA94F', 'ratio' => 1],
                ['name' => 'Yellow-green', 'hex' => '#B7B34B', 'ratio' => 1],
                ['name' => 'Yellow', 'hex' => '#E2C94C', 'ratio' => 1],
                ['name' => 'Yellow', 'hex' => '#E7B94A', 'ratio' => 1],
                ['name' => 'Yellow-orange', 'hex' => '#E9AA40', 'ratio' => 1],
                ['name' => 'Yellow-orange', 'hex' => '#E8973B', 'ratio' => 1],
                ['name' => 'Orange', 'hex' => '#E58B36', 'ratio' => 1],
                ['name' => 'Orange', 'hex' => '#DC7136', 'ratio' => 1],
                ['name' => 'Red-orange', 'hex' => '#D45D37', 'ratio' => 1],
                ['name' => 'Red-orange', 'hex' => '#C94C39', 'ratio' => 1],
                ['name' => 'Red', 'hex' => '#B83B3B', 'ratio' => 1],
                ['name' => 'Red', 'hex' => '#B83B3B', 'ratio' => 1],

                // Red back through to violet
                ['name' => 'Red', 'hex' => '#B83B3B', 'ratio' => 1],
                ['name' => 'Red-orange', 'hex' => '#C94C39', 'ratio' => 1],
                ['name' => 'Red-orange', 'hex' => '#D45D37', 'ratio' => 1],
                ['name' => 'Orange', 'hex' => '#DC7136', 'ratio' => 1],
                ['name' => 'Orange', 'hex' => '#E58B36', 'ratio' => 1],
                ['name' => 'Yellow-orange', 'hex' => '#E8973B', 'ratio' => 1],
                ['name' => 'Yellow-orange', 'hex' => '#E9AA40', 'ratio' => 1],
                ['name' => 'Yellow', 'hex' => '#E7B94A', 'ratio' => 1],
                ['name' => 'Yellow', 'hex' => '#E2C94C', 'ratio' => 1],
                ['name' => 'Yellow-green', 'hex' => '#B7B34B', 'ratio' => 1],
                ['name' => 'Yellow-green', 'hex' => '#8FA94F', 'ratio' => 1],
                ['name' => 'Green', 'hex' => '#659E58', 'ratio' => 1],
                ['name' => 'Green', 'hex' => '#4C9560', 'ratio' => 1],
                ['name' => 'Blue-green', 'hex' => '#478F70', 'ratio' => 1],
                ['name' => 'Blue-green', 'hex' => '#438A83', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#3D82A0', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#3979A8', 'ratio' => 1],
                ['name' => 'Blue-indigo', 'hex' => '#365F96', 'ratio' => 1],
                ['name' => 'Indigo-blue', 'hex' => '#354F8B', 'ratio' => 1],
                ['name' => 'Indigo', 'hex' => '#344A83', 'ratio' => 1],
                ['name' => 'Violet-blue', 'hex' => '#51477D', 'ratio' => 1],
                ['name' => 'Violet', 'hex' => '#5D437B', 'ratio' => 1],
                ['name' => 'Violet', 'hex' => '#654078', 'ratio' => 1],
                ['name' => 'Violet', 'hex' => '#654078', 'ratio' => 1],
                ['name' => 'Violet', 'hex' => '#654078', 'ratio' => 1],
            ],
        ],
        'tags' => ['WW1'],
    ],
    // 420 - 439 WW2
    '1939_45_star' => [
        'name' => '1939–45 Star',
        'p' => 420,
        'description' => 'Awarded for qualifying operational service during the Second World War.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 1],
                ['name' => 'Dark Blue', 'hex' => '#00205B', 'ratio' => 1],
                ['name' => 'Pale Blue', 'hex' => '#9BCBEB', 'ratio' => 1],
            ],
        ],
        'tags' => ['WW2'],
        'devices' => [
            'label' => 'Ribbon clasp / device',
            'multiple' => false,
            'options' => [
                'none' => [
                    'name' => 'No device',
                    'ribbon' => [
                        'type' => 'none',
                    ],
                    'medal' => [
                        'type' => 'none',
                    ]
                ],
                'bomber_command' => [
                    'name' => 'Bomber Command',
                    'type' => 'rosette',
                    'ribbon' => [
                        'type' => 'rosette',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'text' => 'Bomber Command',
                    ]
                ],
                'battle_of_britain' => [
                    'name' => 'Battle of Britain',
                    'type' => 'rosette',
                    'ribbon' => [
                        'type' => 'rosette',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'text' => 'Battle of Britain',
                    ]
                ],
            ],
        ],
    ],
    'atlantic_star' => [
        'name' => 'Atlantic Star',
        'p' => 421,
        'description' => 'Awarded for qualifying service in the North African and associated operational areas.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Dark Blue', 'hex' => '#174A75', 'ratio' => 5],
                ['name' => 'Blue', 'hex' => '#397DA5', 'ratio' => 5],
                ['name' => 'Pale Blue', 'hex' => '#8CB9C8', 'ratio' => 5],
                ['name' => 'White', 'hex' => '#E8E9DF', 'ratio' => 8],
                ['name' => 'Pale Green', 'hex' => '#A8C5A0', 'ratio' => 5],
                ['name' => 'Sea Green', 'hex' => '#548B70', 'ratio' => 5],
                ['name' => 'Dark Green', 'hex' => '#285C50', 'ratio' => 5],
            ],
        ],
        'tags' => ['WW2'],
        'devices' => [
            'label' => 'Campaign clasp',
            'multiple' => false,
            'options' => [
                'none' => [
                    'name' => 'No clasp',
                    'ribbon' => [
                        'type' => 'none',
                    ],
                    'medal' => [
                        'type' => 'none',
                    ],
                ],
                'air_crew_europe' => [
                    'name' => 'Air Crew Europe Clasp',
                    'ribbon' => [
                        'type' => 'none',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'text' => 'AIR CREW EUROPE',
                    ],
                ],
                'france_germany' => [
                    'name' => 'France and Germany Clasp',
                    'ribbon' => [
                        'type' => 'none',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'text' => 'FRANCE AND GERMANY',
                    ],
                ],
            ],
        ],
    ],
    'arctic_star' => [
        'name' => 'Arctic Star',
        'p' => 422,
        'description' => 'Awarded for qualifying service in the North African and associated operational areas.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Air Force Blue', 'hex' => '#6B9BC5', 'ratio' => 7],
                ['name' => 'Navy Blue', 'hex' => '#172D59', 'ratio' => 12],
                ['name' => 'Red', 'hex' => '#C52B36', 'ratio' => 8],
                ['name' => 'Black', 'hex' => '#171717', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#F5F5F0', 'ratio' => 9],
                ['name' => 'Black', 'hex' => '#171717', 'ratio' => 1],
                ['name' => 'Red', 'hex' => '#C52B36', 'ratio' => 8],
                ['name' => 'Navy Blue', 'hex' => '#172D59', 'ratio' => 12],
                ['name' => 'Air Force Blue', 'hex' => '#6B9BC5', 'ratio' => 7],
            ],
        ],
        'tags' => ['WW2'],
    ],
    'air_crew_europe_star' => [
        'name' => 'Air Crew Europe Star',
        'p' => 423,
        'description' => 'Awarded for qualifying service in the North African and associated operational areas.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Black', 'hex' => '#171717', 'ratio' => 4],
                ['name' => 'Yellow', 'hex' => '#E5C33B', 'ratio' => 2],
                ['name' => 'Light Blue', 'hex' => '#83B8DB', 'ratio' => 20],
                ['name' => 'Yellow', 'hex' => '#E5C33B', 'ratio' => 2],
                ['name' => 'Black', 'hex' => '#171717', 'ratio' => 4],
            ],
        ],
        'tags' => ['WW2'],
        'devices' => [
            'label' => 'Campaign clasp',
            'multiple' => false,
            'options' => [
                'none' => [
                    'name' => 'No clasp',
                    'ribbon' => [
                        'type' => 'none',
                    ],
                    'medal' => [
                        'type' => 'none',
                    ],
                ],
                'atlantic' => [
                    'name' => 'Atlantic Clasp',
                    'ribbon' => [
                        'type' => 'none',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'text' => 'ATLANTIC',
                    ],
                ],
                'france_germany' => [
                    'name' => 'France and Germany Clasp',
                    'ribbon' => [
                        'type' => 'none',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'text' => 'FRANCE AND GERMANY',
                    ],
                ],
            ],
        ],
    ],
    'africa_star' => [
        'name' => 'Africa Star',
        'p' => 424,
        'description' => 'Awarded for qualifying service in the North African and associated operational areas.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Sand', 'hex' => '#CDBB91', 'ratio' => 10],
                ['name' => 'Dark Blue', 'hex' => '#173B67', 'ratio' => 3],
                ['name' => 'Sand', 'hex' => '#CDBB91', 'ratio' => 10],
                ['name' => 'Red', 'hex' => '#B73538', 'ratio' => 18],
                ['name' => 'Sand', 'hex' => '#CDBB91', 'ratio' => 10],
                ['name' => 'Pale Blue', 'hex' => '#91BBD5', 'ratio' => 3],
                ['name' => 'Sand', 'hex' => '#CDBB91', 'ratio' => 10],
            ],
        ],
        'tags' => ['WW2'],
        'devices' => [
            'label' => 'Ribbon clasp / device',
            'multiple' => false,
            'options' => [
                'none' => [
                    'name' => 'No device',
                    'ribbon' => [
                        'type' => 'none',
                    ],
                    'medal' => [
                        'type' => 'none',
                    ]
                ],
                'north_africa' => [
                    'name' => 'North Africa 1942–43 (Rosette)',
                    'type' => 'rosette',
                    'ribbon' => [
                        'type' => 'rosette',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'text' => 'North Africa 1942–43',
                    ]
                ],
                '1st_army' => [
                    'name' => '1st Army Clasp',
                    'ribbon' => [
                        'type' => 'numeral',
                        'numeral' => '1',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'text' => '1st Army',
                    ]
                ],
                '8th_army' => [
                    'name' => '8th Army Clasp',
                    'ribbon' => [
                        'type' => 'numeral',
                        'numeral' => '8',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'text' => '8th Army',
                    ]
                ],
            ],
        ],
    ],
    'pacific_star' => [
        'name' => 'Pacific Star',
        'p' => 425,
        'description' => 'Awarded for qualifying operational service in Burma and specified surrounding areas.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Red', 'hex' => '#C52B36', 'ratio' => 4],
                ['name' => 'Dark Green', 'hex' => '#155C3B', 'ratio' => 12],
                ['name' => 'Dark Blue', 'hex' => '#173B67', 'ratio' => 2],
                ['name' => 'Yellow', 'hex' => '#E4C34A', 'ratio' => 5],
                ['name' => 'Pale Blue', 'hex' => '#91BBD5', 'ratio' => 2],
                ['name' => 'Dark Green', 'hex' => '#155C3B', 'ratio' => 12],
                ['name' => 'Red', 'hex' => '#C52B36', 'ratio' => 4],
            ],
        ],
        'tags' => ['WW2'],
        'devices' => [
            'label' => 'Ribbon clasp / device',
            'multiple' => false,
            'options' => [
                'none' => [
                    'name' => 'No device',
                    'ribbon' => ['type' => 'none'],
                    'medal' => ['type' => 'none'],
                ],
                'burma_star' => [
                    'name' => 'Burma Star Clasp',
                    'ribbon' => ['type' => 'none'],
                    'medal' => [
                        'type' => 'medal-bar',
                        'text' => 'Burma Star',
                    ],
                ],
            ],
        ],
    ],
    'burma_star' => [
        'name' => 'Burma Star',
        'p' => 426,
        'description' => 'Awarded for qualifying operational service in Burma and specified surrounding areas.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Dark Blue', 'hex' => '#173B67', 'ratio' => 3.5],
                ['name' => 'Orange Yellow', 'hex' => '#E6A52E', 'ratio' => 4],
                ['name' => 'Light Blue', 'hex' => '#0F2547', 'ratio' => 3.5],
                ['name' => 'Red', 'hex' => '#B73538', 'ratio' => 10],
                ['name' => 'Light Blue', 'hex' => '#0F2547', 'ratio' => 3.5],
                ['name' => 'Orange Yellow', 'hex' => '#E6A52E', 'ratio' => 4],
                ['name' => 'Dark Blue', 'hex' => '#173B67', 'ratio' => 3.5],
            ],
        ],
        'tags' => ['WW2'],
        'devices' => [
            'label' => 'Ribbon clasp / device',
            'multiple' => false,
            'options' => [
                'none' => [
                    'name' => 'No device',
                    'ribbon' => ['type' => 'none'],
                    'medal' => ['type' => 'none'],
                ],
                'pacific_star' => [
                    'name' => 'Pacific Star Clasp',
                    'ribbon' => ['type' => 'none'],
                    'medal' => [
                        'type' => 'medal-bar',
                        'text' => 'Pacific Star',
                    ],
                ],
            ],
        ],
    ],
    'italy_star' => [
        'name' => 'Italy Star',
        'p' => 427,
        'description' => 'Awarded for qualifying operational service in Sicily, Italy and specified associated areas.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Red', 'hex' => '#C83D42', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Green', 'hex' => '#27834A', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Red', 'hex' => '#C83D42', 'ratio' => 1],
            ],
        ],
        'tags' => ['WW2'],
    ],
    'france_germany_star' => [
        'name' => 'France and Germany Star',
        'p' => 428,
        'description' => 'Awarded for qualifying operational service in France, Belgium, Luxembourg, the Netherlands and Germany.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Blue', 'hex' => '#21468B', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Red', 'hex' => '#C83D42', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#21468B', 'ratio' => 1],
            ],
        ],
        'tags' => ['WW2'],
        'devices' => [
            'label' => 'Campaign clasp',
            'multiple' => false,
            'options' => [
                'none' => [
                    'name' => 'No clasp',
                    'ribbon' => [
                        'type' => 'none',
                    ],
                    'medal' => [
                        'type' => 'none',
                    ],
                ],
                'atlantic' => [
                    'name' => 'Atlantic Clasp',
                    'ribbon' => [
                        'type' => 'none',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'text' => 'ATLANTIC',
                    ],
                ],
            ],
        ],
    ],
    'defence_medal' => [
        'name' => 'Defence Medal',
        'p' => 429,
        'description' => 'Awarded for qualifying non-operational service during the Second World War.',
        'ribbon' => [
            'orientation' => 'vertical',
            'finish' => 'plain',
            'accuracy' => 'Approximate stripe proportions',
            'stripes' => [
                ['name' => 'Green', 'hex' => '#267447', 'ratio' => 4.5],
                ['name' => 'Black', 'hex' => '#171717', 'ratio' => 1],
                ['name' => 'Green', 'hex' => '#267447', 'ratio' => 4.5],
                ['name' => 'Orange', 'hex' => '#E87524', 'ratio' => 12],
                ['name' => 'Green', 'hex' => '#267447', 'ratio' => 4.5],
                ['name' => 'Black', 'hex' => '#171717', 'ratio' => 1],
                ['name' => 'Green', 'hex' => '#267447', 'ratio' => 4.5],
            ],
        ],
        'tags' => ['WW2'],
    ],
    'war_medal_1939_45' => [
        'name' => 'War Medal 1939–1945',
        'p' => 431,
        'description' => 'Awarded to qualifying full-time personnel of the armed forces for service during the Second World War.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 6.5],
                ['name' => 'Blue', 'hex' => '#173B67', 'ratio' => 6.5],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 2],
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 2],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 2],
                ['name' => 'Blue', 'hex' => '#173B67', 'ratio' => 6.5],
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 6.5],
            ],
        ],
        'tags' => ['WW2'],
    ],
    // 500 - 599 Jubilee & Coronation Medals
    'queen_elizabeth_ii_coronation_1953' => [
        'name' => 'Queen Elizabeth II Coronation Medal',
        'p' => 520,
        'description' => 'Awarded to selected individuals throughout the Commonwealth to commemorate the coronation of Queen Elizabeth II on 2 June 1953.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Dark Red', 'hex' => '#8B0000', 'ratio' => 10],
                ['name' => 'Dark Blue', 'hex' => '#00205B', 'ratio' => 1],
                ['name' => 'Dark Red', 'hex' => '#8B0000', 'ratio' => 4],
                ['name' => 'Dark Blue', 'hex' => '#00205B', 'ratio' => 1],
                ['name' => 'Dark Red', 'hex' => '#8B0000', 'ratio' => 10],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
            ],
        ],
        'tags' => ['Royal', 'Coronation'],
    ],
    'queen_elizabeth_ii_silver_jubilee_1977' => [
        'name' => 'Queen Elizabeth II Silver Jubilee Medal',
        'p' => 521,
        'description' => 'Awarded to commemorate the 25th anniversary of Queen Elizabeth II accession to the throne on 6 February 1952.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 2],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 10],
                ['name' => 'Blue', 'hex' => '#21468B', 'ratio' => 3.25],
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 1.5],
                ['name' => 'Blue', 'hex' => '#21468B', 'ratio' => 3.25],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 10],
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 2],
            ],
        ],
        'tags' => ['Royal', 'Jubilee'],
    ],
    'queen_elizabeth_ii_golden_jubilee_2002' => [
        'name' => 'Queen Elizabeth II Golden Jubilee Medal',
        'p' => 522,
        'description' => 'Awarded to commemorate the 50th anniversary of Queen Elizabeth II accession to the throne on 6 February 1952.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#00205B', 'ratio' => 5],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#00205B', 'ratio' => 5],
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 1],
            ],
        ],
        'tags' => ['Royal', 'Jubilee'],
    ],
    'queen_elizabeth_ii_diamond_jubilee_2012' => [
        'name' => 'Queen Elizabeth II Diamond Jubilee Medal',
        'p' => 523,
        'description' => 'Awarded to commemorate the 60th anniversary of Queen Elizabeth II accession to the throne on 6 February 1952.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Teal', 'hex' => '#008C95', 'ratio' => 2],
                ['name' => 'Maroon', 'hex' => '#800020', 'ratio' => 10],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 3],
                ['name' => 'Maroon', 'hex' => '#800020', 'ratio' => 2],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 3],
                ['name' => 'Maroon', 'hex' => '#800020', 'ratio' => 10],
                ['name' => 'Teal', 'hex' => '#008C95', 'ratio' => 2],
            ],
        ],
        'tags' => ['Royal', 'Jubilee'],
    ],
    'queen_elizabeth_ii_platinum_jubilee_2022' => [
        'name' => 'Queen Elizabeth II Platinum Jubilee Medal',
        'p' => 524,
        'description' => 'Awarded to eligible serving members of the Armed Forces, emergency services and prison services, and other qualifying recipients, to commemorate the 70th anniversary of Queen Elizabeth II accession to the throne on 6 February 1952.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Platinum Grey', 'hex' => '#C5C7C9', 'ratio' => 1],
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 5],
                ['name' => 'Royal Blue', 'hex' => '#21468B', 'ratio' => 14],
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 5],
                ['name' => 'Platinum Grey', 'hex' => '#C5C7C9', 'ratio' => 1],
            ],
        ],
        'tags' => ['Royal', 'Jubilee'],
    ],
    'king_charles_iii_coronation_2023' => [
        'name' => 'King Charles III Coronation Medal',
        'p' => 530,
        'description' => 'Awarded to eligible individuals to recognise their contribution to the coronation of King Charles III and Queen Camilla on 6 May 2023.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 1],
                ['name' => 'Dark Blue', 'hex' => '#00205B', 'ratio' => 5],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 4],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Dark Blue', 'hex' => '#00205B', 'ratio' => 5],
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 1],
            ],
        ],
        'tags' => ['Royal', 'Coronation'],
    ],
    // 600 - 699 Efficiency & Long Service Medals
    'efficiency_medal_territorial' => [
        'name' => 'Efficiency Medal (Territorial)',
        'p' => 600,
        'description' => 'Awarded for qualifying efficient and long service in the Territorial Army.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Yellow', 'hex' => '#D8B93E', 'ratio' => 1],
                ['name' => 'Green', 'hex' => '#17613F', 'ratio' => 6],
                ['name' => 'Yellow', 'hex' => '#D8B93E', 'ratio' => 1],
            ],
        ],
        'tags' => ['Long-Service'],
    ],
    'volunteer_reserves_service_medal' => [
        'name' => 'Volunteer Reserves Service Medal',
        'p' => 601,
        'description' => 'Awarded for qualifying efficient and long service in the Territorial Army.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Dark Green', 'hex' => '#17613F', 'ratio' => 9],
                ['name' => 'Yellow',     'hex' => '#D8B93E', 'ratio' => 1],
                ['name' => 'Dark Blue',  'hex' => '#1B2D52', 'ratio' => 3],
                ['name' => 'Scarlet',    'hex' => '#C81E2B', 'ratio' => 3],
                ['name' => 'Light Blue', 'hex' => '#6BA4D9', 'ratio' => 3],
                ['name' => 'Yellow',     'hex' => '#D8B93E', 'ratio' => 1],
                ['name' => 'Dark Green', 'hex' => '#17613F', 'ratio' => 9],
            ],
        ],
        'tags' => ['Long-Service'],
        'devices' => [
            'label' => 'Service recognition',
            'options' => [
                'none' => [
                    'name' => '10 Years Service',
                    'ribbon' => [
                        'type' => 'none',
                    ]
                ],
                'one_clasp' => [
                    'name' => '15 Years Service',                    
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 1,
                        'text' => '|------ 👑 ------|',
                        'colour' => '#C0C0C0',
                    ]
                ],
                'two_clasps' => [
                    'name' => '20 Years Service',                    
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 2,
                        'text' => '|------ 👑 ------|',
                        'colour' => '#C0C0C0',
                    ]
                ],
                'three_clasps' => [
                    'name' => '25 Years Service',                    
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 3,
                        'text' => '|------ 👑 ------|',
                        'colour' => '#C0C0C0',
                    ]
                ],
                'four_clasps' => [
                    'name' => '30 Years Service',                    
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 4,
                        'text' => '|------ 👑 ------|',
                        'colour' => '#C0C0C0',
                    ]
                ],
                'five_clasps' => [
                    'name' => '35 Years Service',                    
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 5,
                        'text' => '|------ 👑 ------|',
                        'colour' => '#C0C0C0',
                    ]
                ],
                'six_clasps' => [
                    'name' => '40 Years Service',                    
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 6,
                        'text' => '|------ 👑 ------|',
                        'colour' => '#C0C0C0',
                    ]
                ],
            ],
        ],
    ],
    'cadet_forces_medal' => [
        'name' => 'Cadet Forces Medal',
        'p' => 601,
        'description' => 'Awarded for qualifying efficient and long service in the Territorial Army.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Yellow',     'hex' => '#D8B93E', 'ratio' => 10],
                ['name' => 'Dark Blue',  'hex' => '#1B2D52', 'ratio' => 6],
                ['name' => 'Crimson',    'hex' => '#C81E2B', 'ratio' => 3],
                ['name' => 'Dark Green', 'hex' => '#17613F', 'ratio' => 26],
                ['name' => 'Crimson',    'hex' => '#C81E2B', 'ratio' => 3],
                ['name' => 'Light Blue', 'hex' => '#6BA4D9', 'ratio' => 6],
                ['name' => 'Yellow',     'hex' => '#D8B93E', 'ratio' => 10],
            ],
        ],
        'tags' => ['Long-Service'],
        'devices' => [
            'label' => 'Service recognition',
            'options' => [
                'none' => [
                    'name' => '12 Years Service',
                    'ribbon' => [
                        'type' => 'none',
                    ]
                ],
                'one_clasp' => [
                    'name' => '18 Years Service',                    
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 1,
                        'text' => '|------ 👑 ------|',
                        'colour' => '#C0C0C0',
                    ]
                ],
                'two_clasps' => [
                    'name' => '24 Years Service',                    
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 2,
                        'text' => '|------ 👑 ------|',
                        'colour' => '#C0C0C0',
                    ]
                ],
                'three_clasps' => [
                    'name' => '30 Years Service',                    
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 3,
                        'text' => '|------ 👑 ------|',
                        'colour' => '#C0C0C0',
                    ]
                ],
                'four_clasps' => [
                    'name' => '36 Years Service',                    
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 4,
                        'text' => '|------ 👑 ------|',
                        'colour' => '#C0C0C0',
                    ]
                ],
                'five_clasps' => [
                    'name' => '42 Years Service',                    
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 5,
                        'text' => '|------ 👑 ------|',
                        'colour' => '#C0C0C0',
                    ]
                ],
                'six_clasps' => [
                    'name' => '48 Years Service',                    
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 6,
                        'text' => '|------ 👑 ------|',
                        'colour' => '#C0C0C0',
                    ]
                ],
            ],
        ],
    ],
    'St_John_efficient_service' => [
        'name' => 'Service Medal of the Order of St John',
        'p' => 611,
        'description' => 'Awarded for qualifying efficient and long service in the The Order of St John and its subsidiary institutions.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Black', 'hex' => '#000000', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#ffffff', 'ratio' => 1],
                ['name' => 'Black', 'hex' => '#000000', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#ffffff', 'ratio' => 1],
                ['name' => 'Black', 'hex' => '#000000', 'ratio' => 1],
            ],
        ],
        'tags' => ['Long-Service', 'St-John'],
        'devices' => [
            'label' => 'Service recognition',
            'options' => [
                'none' => [
                    'name' => '10 Years Service',
                    'ribbon' => [
                        'type' => 'none',
                    ]
                ],
                'one_cross_s' => [
                    'name' => '15 Years Service',
                    'ribbon' => [
                        'type' => 'amalfi_cross',
                        'count' => 1,
                        'colour' => '#C0C0C0',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 1,
                        'text' => '~*:._.:*~*:._.:*~ ✿ ~*:._.:*~*:._.:*~',
                        'colour' => '#C0C0C0',
                    ]
                ],
                'two_crosses_s' => [
                    'name' => '20 Years Service',
                    'ribbon' => [
                        'type' => 'amalfi_cross',
                        'count' => 2,
                        'colour' => '#C0C0C0',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 2,
                        'text' => '~*:._.:*~*:._.:*~ ✿ ~*:._.:*~*:._.:*~',
                        'colour' => '#C0C0C0',
                    ]
                ],
                'three_crosses_s' => [
                    'name' => '25 Years Service',
                    'ribbon' => [
                        'type' => 'amalfi_cross',
                        'count' => 3,
                        'colour' => '#C0C0C0',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 3,
                        'text' => '~*:._.:*~*:._.:*~ ✿ ~*:._.:*~*:._.:*~',
                        'colour' => '#C0C0C0',
                    ]
                ],
                'one_cross_g' => [
                    'name' => '30 Years Service',
                    'ribbon' => [
                        'type' => 'amalfi_cross',
                        'count' => 1,
                        'colour' => '#D4AF37',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 1,
                        'text' => '~*:._.:*~*:._.:*~ ✿ ~*:._.:*~*:._.:*~',
                        'colour' => '#D4AF37',
                    ]
                ],
                'two_crosses_g' => [
                    'name' => '35 Years Service',
                    'ribbon' => [
                        'type' => 'amalfi_cross',
                        'count' => 2,
                        'colour' => '#D4AF37',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 2,
                        'text' => '~*:._.:*~*:._.:*~ ✿ ~*:._.:*~*:._.:*~',
                        'colour' => '#D4AF37',
                    ]
                ],
                'three_crosses_g' => [
                    'name' => '40 Years Service',
                    'ribbon' => [
                        'type' => 'amalfi_cross',
                        'count' => 3,
                        'colour' => '#D4AF37',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 3,
                        'text' => '~*:._.:*~*:._.:*~ ✿ ~*:._.:*~*:._.:*~',
                        'colour' => '#D4AF37',
                    ]
                ],
                'four_crosses_g' => [
                    'name' => '45 Years Service',
                    'ribbon' => [
                        'type' => 'amalfi_cross',
                        'count' => 4,
                        'colour' => '#D4AF37',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 4,
                        'text' => '~*:._.:*~*:._.:*~ ✿ ~*:._.:*~*:._.:*~',
                        'colour' => '#D4AF37',
                    ]
                ],
            ],
        ],
    ],
    'St_John_ultra_efficient_service' => [
        'name' => 'Ultra Long Service Service Medal of the Order of St John',
        'p' => 612,
        'description' => 'Awarded for qualifying efficient and long service in the The Order of St John and its subsidiary institutions.',
        'ribbon' => [
            'stripes' => [
                ['name' => 'Black', 'hex' => '#000000', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#ffffff', 'ratio' => 1],
                ['name' => 'Black', 'hex' => '#000000', 'ratio' => 0.4],
                ['name' => 'Gold',  'hex' => '#D4AF37', 'ratio' => 0.2],
                ['name' => 'Black', 'hex' => '#000000', 'ratio' => 0.4],
                ['name' => 'White', 'hex' => '#ffffff', 'ratio' => 1],
                ['name' => 'Black', 'hex' => '#000000', 'ratio' => 1],
            ],
        ],
        'tags' => ['Long-Service', 'St-John'],
        'devices' => [
            'label' => 'Service recognition',
            'options' => [
                'none' => [
                    'name' => '50 Years Service',
                    'ribbon' => ['type' => 'none',],
                    'medal' => ['type' => 'none',],
                    
                ],
                'one_cross_g' => [
                    'name' => '55 Years Service',
                    'ribbon' => [
                        'type' => 'amalfi_cross',
                        'count' => 1,
                        'colour' => '#D4AF37',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 1,
                        'text' => '~*:._.:*~*:._.:*~ ✿ ~*:._.:*~*:._.:*~',
                        'colour' => '#D4AF37',
                    ],
                ],
                'two_crosses_g' => [
                    'name' => '60 Years Service',
                    'ribbon' => [
                        'type' => 'amalfi_cross',
                        'count' => 2,
                        'colour' => '#D4AF37',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 2,
                        'text' => '~*:._.:*~*:._.:*~ ✿ ~*:._.:*~*:._.:*~',
                        'colour' => '#D4AF37',
                    ],
                ],
                'three_crosses_g' => [
                    'name' => '65 Years Service',
                    'ribbon' => [
                        'type' => 'amalfi_cross',
                        'count' => 3,
                        'colour' => '#D4AF37',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 3,
                        'text' => '~*:._.:*~*:._.:*~ ✿ ~*:._.:*~*:._.:*~',
                        'colour' => '#D4AF37',
                    ],
                ],
                'four_crosses_g' => [
                    'name' => '70 Years Service',
                    'ribbon' => [
                        'type' => 'amalfi_cross',
                        'count' => 4,
                        'colour' => '#D4AF37',
                    ],
                    'medal' => [
                        'type' => 'medal-bar',
                        'count' => 4,
                        'text' => '~*:._.:*~*:._.:*~ ✿ ~*:._.:*~*:._.:*~',
                        'colour' => '#D4AF37',
                    ],
                ],
            ],
        ],
    ],
    // 700 - 799
    // 800 - 899
    // 900 - 999

    
];

$medalRules = [
    /*
     * Pacific Star and Burma Star
     *
     * Only one star is awarded. The other qualifying star
     * is represented by a clasp on the first star earned.
     */
    'pacific_burma' => [
        'type' => 'substitute',
        'members' => [
            'pacific_star',
            'burma_star',
        ],
        'max_clasps' => 1,
        'clasp_mappings' => [
            'pacific_star' => [
                'burma_star' => 'burma_star',
            ],
            'burma_star' => [
                'pacific_star' => 'pacific_star',
            ],
        ],
    ],

    /*
     * Atlantic Star, Air Crew Europe Star and
     * France and Germany Star
     *
     * Only the first qualifying star is awarded.
     * A second qualification is represented by a clasp.
     * No third star or clasp is permitted.
     */
    'western_europe_stars' => [
        'type' => 'substitute',
        'members' => [
            'atlantic_star',
            'air_crew_europe_star',
            'france_germany_star',
        ],
        'max_clasps' => 1,
        'clasp_mappings' => [
            'atlantic_star' => [
                'air_crew_europe_star' => 'air_crew_europe',
                'france_germany_star' => 'france_germany',
            ],

            'air_crew_europe_star' => [
                'atlantic_star' => 'atlantic',
                'france_germany_star' => 'france_germany',
            ],

            'france_germany_star' => [
                'atlantic_star' => 'atlantic',
            ],
        ],
    ],
];

$tags = [];

foreach ($medals as $medal) {
    if (!empty($medal['tags']) && is_array($medal['tags'])) {
        $tags = array_merge($tags, $medal['tags']);
    }
}

$tags = array_values(array_unique($tags));
?>
