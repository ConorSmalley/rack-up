<?php
$medals = [
    // 000–099	Victoria Cross and George Cross
    
    'vc' => [
        'name' => 'Victoria Cross',
        'p' => 010,

        'type' => 'decoration',
        'category' => 'gallantry',
        'status' => 'current',

        'introduced' => 1856,
        'discontinued' => null,

        'description' => 'Awarded for most conspicuous bravery, or an act of valour or self-sacrifice in the presence of the enemy.',
        'ribbon' => [
            'suspension' => 'bar',
            'stripes' => [
                ['name' => 'Red', 'hex' => '#9E1B32', 'ratio' => 1],
            ],
        ],
        'tags' => ['Gallantry', 'Highest-Awards'],
    ],
    'gc' => [
        'name' => 'George Cross',
        'p' => 020,

        'type' => 'decoration',
        'category' => 'gallantry',
        'status' => 'current',

        'introduced' => 1940,
        'discontinued' => null,

        'description' => 'Awarded for acts of the greatest heroism or most conspicuous courage in circumstances of extreme danger, not necessarily in the presence of the enemy.',
        'ribbon' => [
            'suspension' => 'bar',
            'stripes' => [
                ['name' => 'Dark Blue', 'hex' => '#0A2240', 'ratio' => 1],
            ],
        ],
        'tags' => ['Gallantry', 'Highest-Awards'],
    ],
    // 100–199	Orders of chivalry
    'Order_St_John' => [
        'name' => 'Order of St John',
        'p' => 100,

        'type' => 'order insignia',
        'category' => 'order of chivalry',
        'status' => 'current',

        'introduced' => 1888,
        'discontinued' => null,

        'description' => 'Recognition of membership and rank within the Most Venerable Order of the Hospital of St John of Jerusalem.',
        'ribbon' => [
            'suspension' => 'ring',
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
    'distinguished_service_order' => [
        'name' => 'Distinguished Service Order',
        'p' => 110,
        'type' => 'order',
        'category' => 'distinguished service',
        'status' => 'current',
        'introduced' => 1886,
        'discontinued' => null,
        'description' => 'Awarded for distinguished service during active operations against the enemy, principally recognising exceptional command and leadership.',
        'ribbon' => [
            'suspension' => 'bar',
            'stripes' => [
                ['name' => 'Dark Blue', 'hex' => '#00205B', 'ratio' => 2],
                ['name' => 'Crimson', 'hex' => '#A51C30', 'ratio' => 8],
                ['name' => 'Dark Blue', 'hex' => '#00205B', 'ratio' => 2],
            ],
        ],
        'tags' => ['Military', 'Distinguished Service', 'Operational'],
    ],
    // 200–299	Decorations
    'conspicuous_gallantry_cross' => [
        'name' => 'Conspicuous Gallantry Cross',
        'p' => 210,

        'type' => 'decoration',
        'category' => 'gallantry',
        'status' => 'current',

        'introduced' => 1993,
        'discontinued' => null,

        'description' => 'Awarded for an act or acts of conspicuous gallantry during active operations against the enemy.',
        'ribbon' => [
            'suspension' => 'bar',
            'stripes' => [
                ['name' => 'Dark Blue', 'hex' => '#002B7F', 'ratio' => 3],
                ['name' => 'White',     'hex' => '#FFFFFF', 'ratio' => 10],
                ['name' => 'Crimson',   'hex' => '#9E1B32', 'ratio' => 6],
                ['name' => 'White',     'hex' => '#FFFFFF', 'ratio' => 10],
                ['name' => 'Dark Blue', 'hex' => '#002B7F', 'ratio' => 3],
            ],


        ],
        'tags' => ['Gallantry'],
    ],
    'military_cross' => [
        'name' => 'Military Cross',
        'p' => 220,

        'type' => 'decoration',
        'category' => 'gallantry',
        'status' => 'current',

        'introduced' => 1914,
        'discontinued' => null,

        'description' => 'Awarded for exemplary gallantry during active operations against the enemy on land.',
        'ribbon' => [
            'suspension' => 'bar',
            'stripes' => [
                ['name' => 'White',  'hex' => '#FFFFFF', 'ratio' => 1],
                ['name' => 'Purple', 'hex' => '#5C246E', 'ratio' => 1],
                ['name' => 'White',  'hex' => '#FFFFFF', 'ratio' => 1],
            ],

        ],
        'tags' => ['Gallantry'],
    ],
    'distinguished_service_cross' => [
        'name' => 'Distinguished Service Cross',
        'p' => 230,
        'type' => 'decoration',
        'category' => 'gallantry',
        'status' => 'current',
        'introduced' => 1901,
        'discontinued' => null,
        'description' => 'Awarded for exemplary gallantry during active operations against the enemy at sea.',
        'ribbon' => [
            'suspension' => 'bar',
            'stripes' => [
                ['name' => 'White', 'hex' => '#FFFFFF', 'ratio' => 1],
                ['name' => 'Dark Blue', 'hex' => '#00205B', 'ratio' => 10],
                ['name' => 'White', 'hex' => '#FFFFFF', 'ratio' => 1],
            ],
        ],
        'tags' => ['Gallantry', 'Royal Navy', 'Naval'],
    ],
    'distinguished_flying_cross' => [
        'name' => 'Distinguished Flying Cross',
        'p' => 240,
        'type' => 'decoration',
        'category' => 'gallantry',
        'status' => 'current',
        'introduced' => 1918,
        'discontinued' => null,
        'description' => 'Awarded for exemplary gallantry during active operations against the enemy while flying.',
        'ribbon' => [
            'suspension' => 'bar',
            'direction' => 'diagonal',
            'stripes' => [
                
                ['name' => 'White',  'hex' => '#FFFFFF', 'ratio' => 1],
                ['name' => 'Violet', 'hex' => '#4B286D', 'ratio' => 1],
                ['name' => 'White',  'hex' => '#FFFFFF', 'ratio' => 1],
                ['name' => 'Violet', 'hex' => '#4B286D', 'ratio' => 1],
                ['name' => 'White',  'hex' => '#FFFFFF', 'ratio' => 1],
                ['name' => 'Violet', 'hex' => '#4B286D', 'ratio' => 1],
                ['name' => 'White',  'hex' => '#FFFFFF', 'ratio' => 1],
                ['name' => 'Violet', 'hex' => '#4B286D', 'ratio' => 1],
            ],
        ],
        'tags' => ['Gallantry', 'Royal Air Force', 'Aviation'],
    ],
    'air_force_cross' => [
        'name' => 'Air Force Cross',
        'p' => 250,
        'type' => 'decoration',
        'category' => 'gallantry',
        'status' => 'current',
        'introduced' => 1918,
        'discontinued' => null,
        'description' => 'Awarded for exemplary gallantry while flying, not during active operations against the enemy.',
        'ribbon' => [
            'suspension' => 'bar',
            'direction' => 'diagonal',
            'stripes' => [
                ['name' => 'White', 'hex' => '#FFFFFF', 'ratio' => 1],
                ['name' => 'Red',   'hex' => '#C8102E', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#FFFFFF', 'ratio' => 1],
                ['name' => 'Red',   'hex' => '#C8102E', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#FFFFFF', 'ratio' => 1],
                ['name' => 'Red',   'hex' => '#C8102E', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#FFFFFF', 'ratio' => 1],
                ['name' => 'Red',   'hex' => '#C8102E', 'ratio' => 1],
            ],
        ],
        'tags' => ['Gallantry', 'Royal Air Force', 'Aviation'],
    ],
    'royal_red_cross_first_class' => [
        'name' => 'Royal Red Cross (First Class)',
        'p' => 260,
        'type' => 'decoration',
        'category' => 'meritorious service',
        'status' => 'current',
        'introduced' => 1883,
        'discontinued' => null,
        'description' => 'Awarded to members of the Nursing Services for exceptional devotion and competency in the performance of nursing duties over a continuous and long period.',
        'ribbon' => [
            'suspension' => 'bar',
            'stripes' => [
                ['name' => 'Crimson',   'hex' => '#9E1B32', 'ratio' => 0.35],
                ['name' => 'Dark Blue', 'hex' => '#00247D', 'ratio' => 1],
                ['name' => 'Crimson',   'hex' => '#9E1B32', 'ratio' => 0.35],
            ],

        ],
        'tags' => ['Nursing', 'Medical', 'Meritorious Service'],
    ],
    'royal_red_cross_associate' => [
        'name' => 'Royal Red Cross (Associate)',
        'p' => 270,
        'type' => 'decoration',
        'category' => 'meritorious service',
        'status' => 'current',
        'introduced' => 1917,
        'discontinued' => null,
        'description' => 'Awarded to members of the Nursing Services for special devotion and competency in the performance of nursing duties.',
        'ribbon' => [
            'suspension' => 'bar',
            'stripes' => [
                ['name' => 'Crimson',   'hex' => '#9E1B32', 'ratio' => 0.35],
                ['name' => 'Dark Blue', 'hex' => '#00247D', 'ratio' => 1],
                ['name' => 'Crimson',   'hex' => '#9E1B32', 'ratio' => 0.35],
            ],

        ],
        'tags' => ['Nursing', 'Medical', 'Meritorious Service'],
    ],
    'royal_victorian_medal' => [
        'name' => 'Royal Victorian Medal',
        'p' => 280,
        'type' => 'service medal',
        'category' => 'royal service',
        'status' => 'current',
        'introduced' => 1896,
        'discontinued' => null,
        'description' => 'Awarded by the Sovereign to recognise personal service to the Monarch or members of the Royal Family.',
        'ribbon' => [
            'suspension' => 'ring',
            'stripes' => [
                ['name' => 'Red',       'hex' => '#C8102E', 'ratio' => 0.12],
                ['name' => 'White',     'hex' => '#FFFFFF', 'ratio' => 0.12],
                ['name' => 'Red',       'hex' => '#C8102E', 'ratio' => 0.12],
                ['name' => 'Dark Blue', 'hex' => '#00247D', 'ratio' => 1],
                ['name' => 'Red',       'hex' => '#C8102E', 'ratio' => 0.12],
                ['name' => 'White',     'hex' => '#FFFFFF', 'ratio' => 0.12],
                ['name' => 'Red',       'hex' => '#C8102E', 'ratio' => 0.12],
            ],
        ],
        'tags' => ['Royal', 'Service', 'Meritorious Service'],
    ],
    'british_empire_medal' => [
        'name' => 'British Empire Medal',
        'p' => 290,
        'type' => 'medal',
        'category' => 'meritorious service',
        'status' => 'current',
        'introduced' => 1917,
        'discontinued' => null,
        'description' => 'Awarded for meritorious civil or military service worthy of recognition by the Crown.',
        'ribbon' => [
            'suspension' => 'ring',
            'stripes' => [],
        ],
        'tags' => ['Civilian', 'Military', 'Meritorious Service'],
    ],
    // 300–399	Gallantry and distinguished conduct medals
    'george_medal' => [
        'name' => 'George Medal',
        'p' => 300,
        'type' => 'gallantry medal',
        'category' => 'gallantry',
        'status' => 'current',
        'introduced' => 1940,
        'discontinued' => null,
        'description' => 'Awarded for acts of conspicuous bravery not involving the presence of the enemy.',
        'ribbon' => [
            'suspension' => 'ring',
            'stripes' => [
                ['name' => 'Crimson', 'hex' => '#A51C30', 'ratio' => 4],
                ['name' => 'Dark Blue', 'hex' => '#00205B', 'ratio' => 1],
                ['name' => 'Crimson', 'hex' => '#A51C30', 'ratio' => 4],
                ['name' => 'Dark Blue', 'hex' => '#00205B', 'ratio' => 1],
                ['name' => 'Crimson', 'hex' => '#A51C30', 'ratio' => 4],
                ['name' => 'Dark Blue', 'hex' => '#00205B', 'ratio' => 1],
                ['name' => 'Crimson', 'hex' => '#A51C30', 'ratio' => 4],
                ['name' => 'Dark Blue', 'hex' => '#00205B', 'ratio' => 1],
                ['name' => 'Crimson', 'hex' => '#A51C30', 'ratio' => 4],
            ],
        ],
        'tags' => ['Gallantry', 'Civilian', 'Military'],
    ],
    'military_medal' => [
        'name' => 'Military Medal',
        'p' => 310,

        'type' => 'gallantry medal',
        'category' => 'gallantry',
        'status' => 'discontinued',

        'introduced' => 1916,
        'discontinued' => 1993,

        'description' => 'Awarded for qualifying service in the North-West Frontier and associated operations.',
        'ribbon' => [
            'suspension' => 'bar',
            'stripes' => [
                ['name' => 'Dark Blue', 'hex' => '#002B7F', 'ratio' => 5],
                ['name' => 'White',     'hex' => '#FFFFFF', 'ratio' => 2],
                ['name' => 'Red',       'hex' => '#CE1126', 'ratio' => 2],
                ['name' => 'White',     'hex' => '#FFFFFF', 'ratio' => 2],
                ['name' => 'Red',       'hex' => '#CE1126', 'ratio' => 2],
                ['name' => 'White',     'hex' => '#FFFFFF', 'ratio' => 2],
                ['name' => 'Dark Blue', 'hex' => '#002B7F', 'ratio' => 5],
            ],
        ],
        'tags' => ['Gallantry'],
    ],
    'kings_gallantry_medal' => [
        'name' => 'King\'s Gallantry Medal',
        'p' => 320,
        'type' => 'gallantry medal',
        'category' => 'gallantry',
        'status' => 'current',
        'introduced' => 1974,
        'discontinued' => null,
        'description' => 'Awarded for acts of exemplary bravery not involving the presence of the enemy. It replaced the Queen\'s Gallantry Medal following the accession of King Charles III.',
        'ribbon' => [
            'suspension' => 'ring',
            'stripes' => [
                ['name' => 'Garter Blue', 'hex' => '#1D3C78', 'ratio' => 5],
                ['name' => 'Pearl Grey', 'hex' => '#C9C8C5', 'ratio' => 3],
                ['name' => 'Rose Pink', 'hex' => '#D98CA3', 'ratio' => 1],
                ['name' => 'Pearl Grey', 'hex' => '#C9C8C5', 'ratio' => 3],
                ['name' => 'Garter Blue', 'hex' => '#1D3C78', 'ratio' => 5],
            ],
        ],
        'tags' => ['Gallantry', 'Civilian', 'Military'],
    ],
    // 400–409	Pre-1914 campaign medals
    'india_general_service_1909' => [
        'name' => '1909 India General Service Medal',
        'p' => 400,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 1909,
        'discontinued' => 1935,

        'description' => 'Awarded for qualifying military service during campaigns and operations in India and on its frontiers between 1908 and 1935.',

        'ribbon' => [
            'suspension' => 'bar',
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
    // 410–419	First World War
    '1914_15_star' => [
        'name' => '1914–15 Star',
        'p' => 410,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 1918,
        'discontinued' => 1918,

        'description' => 'Awarded for qualifying service in a theatre of war between 5 August 1914 and 31 December 1915, subject to the applicable eligibility rules.',

        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 415,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 1919,
        'discontinued' => 1920,

        'description' => 'Awarded for qualifying service during the First World War and certain subsequent operations, including Russia.',

        'ribbon' => [
            'suspension' => 'bar',
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
        'p' => 418,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 1919,
        'discontinued' => 1919,

        'description' => 'Awarded to qualifying military and civilian personnel who served in a theatre of war during the First World War.',
        'ribbon' => [
            'suspension' => 'bar',
            'stripes' => [
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
    // 420–439	Second World War
    '1939_45_star' => [
        'name' => '1939–45 Star',
        'p' => 420,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 1943,
        'discontinued' => 1945,

        'description' => 'Awarded for qualifying operational service during the Second World War.',
        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 422,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 1945,
        'discontinued' => 1945,

        'description' => 'Awarded for qualifying service in the Atlantic and home waters, including certain maritime and air operations.',
        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 424,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 2012,
        'discontinued' => 2012,

        'description' => 'Awarded retrospectively for qualifying service in the Arctic region during the Second World War.',
        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 426,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 1945,
        'discontinued' => 1945,

        'description' => 'Awarded for qualifying operational flying service over Europe from UK bases during the Second World War.',
        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 428,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 1943,
        'discontinued' => 1945,

        'description' => 'Awarded for qualifying operational service in North Africa and associated Mediterranean territories.',
        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 430,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 1945,
        'discontinued' => 1945,

        'description' => 'Awarded for qualifying operational service in the Pacific theatre during the Second World War.',

        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 4432,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 1945,
        'discontinued' => 1945,

        'description' => 'Awarded for qualifying operational service in the Burma campaign and specified surrounding areas.',
        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 434,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 1945,
        'discontinued' => 1945,

        'description' => 'Awarded for qualifying operational service in Italy, Sicily, Sardinia, Corsica, Greece, Yugoslavia and associated areas.',
        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 436,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 1945,
        'discontinued' => 1945,

        'description' => 'Awarded for qualifying operational service in France, Belgium, the Netherlands and Germany during the specified campaign period.',
        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 438,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 1945,
        'discontinued' => 1945,

        'description' => 'Awarded for qualifying non-operational service during the Second World War, including specified home defence and civil defence duties.',
        'ribbon' => [
            'orientation' => 'vertical',
            'suspension' => 'bar',
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
        'p' => 439,

        'type' => 'campaign medal',
        'category' => 'campaign',
        'status' => 'discontinued',

        'introduced' => 1945,
        'discontinued' => 1945,

        'description' => 'Awarded for qualifying full-time service in the Armed Forces and certain other eligible organisations during the Second World War.',

        'ribbon' => [
            'suspension' => 'bar',
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
    // 440–459	Post-war campaign medals
    // 460–479	Modern operational service medals
    // 480–499	Other campaign and operational service
    // 500–599	Coronation and Jubilee medals
    'queen_elizabeth_ii_coronation_1953' => [
        'name' => 'Queen Elizabeth II Coronation Medal',
        'p' => 500,

        'type' => 'commemorative medal',
        'category' => 'coronation',
        'status' => 'event specific',

        'introduced' => 1953,
        'discontinued' => 1953,

        'description' => 'Awarded to selected recipients in recognition of the Coronation of Queen Elizabeth II.',
        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 510,

        'type' => 'commemorative medal',
        'category' => 'jubilee',
        'status' => 'event specific',

        'introduced' => 1977,
        'discontinued' => 1977,

        'description' => 'Awarded to recognise the Silver Jubilee of Queen Elizabeth II.',
        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 520,

        'type' => 'commemorative medal',
        'category' => 'jubilee',
        'status' => 'event specific',

        'introduced' => 2002,
        'discontinued' => 2002,

        'description' => 'Awarded to recognise the Golden Jubilee of Queen Elizabeth II.',
        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 530,

        'type' => 'commemorative medal',
        'category' => 'jubilee',
        'status' => 'event specific',

        'introduced' => 2012,
        'discontinued' => 2012,

        'description' => 'Awarded to recognise the Diamond Jubilee of Queen Elizabeth II.',
        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 540,

        'type' => 'commemorative medal',
        'category' => 'jubilee',
        'status' => 'event specific',

        'introduced' => 2022,
        'discontinued' => 2022,

        'description' => 'Awarded to recognise the Platinum Jubilee of Queen Elizabeth II.',
        'ribbon' => [
            'suspension' => 'ring',
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
        'p' => 550,

        'type' => 'commemorative medal',
        'category' => 'coronation',
        'status' => 'event specific',

        'introduced' => 2023,
        'discontinued' => 2023,

        'description' => 'Awarded to recognise qualifying service and contributions associated with the Coronation of King Charles III and Queen Camilla.',
        'ribbon' => [
            'suspension' => 'ring',
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
    // 600–699	Efficiency and long service
    'efficiency_medal_territorial' => [
        'name' => 'Efficiency Medal (Territorial)',
        'p' => 600,

        'type' => 'long service medal',
        'category' => 'efficiency',
        'status' => 'discontinued',

        'introduced' => 1930,
        'discontinued' => 1999,

        'description' => 'Awarded for long and efficient service in the Territorial Army, with additional service recognised by clasps.',
        'ribbon' => [
            'suspension' => 'bar',
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
        'p' => 610,

        'type' => 'long service medal',
        'category' => 'reserve service',
        'status' => 'current',

        'introduced' => 1999,
        'discontinued' => null,

        'description' => 'Awarded for qualifying long and efficient service in the UK Volunteer Reserve Forces.',
        'ribbon' => [
            'suspension' => 'bar',
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
        'p' => 620,

        'type' => 'long service medal',
        'category' => 'cadet service',
        'status' => 'current',

        'introduced' => 1950,
        'discontinued' => null,

        'description' => 'Awarded to eligible commissioned officers and adult instructors of the Cadet Forces for qualifying long and efficient service.',
        'ribbon' => [
            'suspension' => 'bar',
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
    'kings_volunteer_reserves_medal' => [
        'name' => 'King\'s Volunteer Reserves Medal',
        'p' => 640,
        'type' => 'service medal',
        'category' => 'reserve service',
        'status' => 'current',
        'introduced' => 1999,
        'discontinued' => null,
        'description' => 'Awarded to members of any rank of the Volunteer Reserve Forces for devotion to duty and exemplary service of particular value and as an outstanding example to others.',
        'ribbon' => [
            'suspension' => 'bar',
            'stripes' => [
                ['name' => 'Gold',       'hex' => '#D4AF37', 'ratio' => 0.7],
                ['name' => 'Dark Green', 'hex' => '#004225', 'ratio' => 1],
                ['name' => 'Gold',       'hex' => '#D4AF37', 'ratio' => 0.7],
                ['name' => 'Dark Green', 'hex' => '#004225', 'ratio' => 1],
                ['name' => 'Gold',       'hex' => '#D4AF37', 'ratio' => 0.7],
            ],
        ],
        'tags' => ['Military', 'Reserve Forces', 'Meritorious Service'],
    ],
    // 700–799	Organisational and voluntary service awards
    'St_John_efficient_service' => [
        'name' => 'Service Medal of the Order of St John',
        'p' => 700,

        'type' => 'organisational service medal',
        'category' => 'voluntary service',
        'status' => 'current',

        'introduced' => 1898,
        'discontinued' => null,

        'description' => 'Awarded for efficient service within the St John Ambulance organisation, with additional service recognised by bars.',
        'ribbon' => [
            'suspension' => 'bar',
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
        'p' => 710,

        'type' => 'organisational service medal',
        'category' => 'voluntary service',
        'status' => 'current',

        'introduced' => 2020,
        'discontinued' => null,

        'description' => 'Awarded in recognition of 50 years of service to the Order of St John, with additional service recognised by bars.',
        'ribbon' => [
            'suspension' => 'bar',
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
