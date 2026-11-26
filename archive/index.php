<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| UK MEDAL RIBBON RACK BUILDER
|--------------------------------------------------------------------------
| Single-file PHP application.
| PHP 8+
|
| Ribbon colours are digital approximations, not official textile standards.
| Verify stripe proportions against authoritative ribbon specifications.
|--------------------------------------------------------------------------
*/

$medals = [

    // =========================================================
    // FIRST WORLD WAR
    // =========================================================

    '1914_15_star' => [
        'name' => '1914–15 Star',
        'category' => 'First World War Campaign',
        'introduced' => 1918,
        'description' => 'Awarded for qualifying service in a theatre of war between 5 August 1914 and 31 December 1915.',
        'ribbon' => [
            'width_mm' => 32,
            'height_mm' => 10,
            'orientation' => 'vertical',
            'finish' => 'shaded_watered',
            'accuracy' => 'Approximate stripe proportions',
            'stripes' => [
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#244A78', 'ratio' => 1],
            ],
        ],
    ],

    'british_war_medal' => [
        'name' => 'British War Medal 1914–1920',
        'category' => 'First World War Campaign',
        'introduced' => 1919,
        'description' => 'Awarded for qualifying First World War service.',
        'ribbon' => [
            'width_mm' => 32,
            'height_mm' => 10,
            'orientation' => 'vertical',
            'finish' => 'watered',
            'accuracy' => 'Approximate stripe proportions',
            'stripes' => [
                ['name' => 'Blue', 'hex' => '#183B68', 'ratio' => 2],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Black', 'hex' => '#171717', 'ratio' => 1],
                ['name' => 'Orange', 'hex' => '#D97828', 'ratio' => 8],
                ['name' => 'Black', 'hex' => '#171717', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#183B68', 'ratio' => 2],
            ],
        ],
    ],

    'victory_medal' => [
        'name' => 'Victory Medal 1914–1919',
        'category' => 'First World War Campaign',
        'introduced' => 1919,
        'description' => 'Allied Victory Medal awarded to eligible personnel who served in a theatre of war.',
        'ribbon' => [
            'width_mm' => 32,
            'height_mm' => 10,
            'orientation' => 'vertical',
            'finish' => 'watered_rainbow',
            'accuracy' => 'Approximate colour and stripe representation',
            'stripes' => [
                ['name' => 'Violet', 'hex' => '#654078', 'ratio' => 1],
                ['name' => 'Indigo', 'hex' => '#344A83', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#3979A8', 'ratio' => 1],
                ['name' => 'Green', 'hex' => '#4C9560', 'ratio' => 1],
                ['name' => 'Yellow', 'hex' => '#E2C94C', 'ratio' => 1],
                ['name' => 'Orange', 'hex' => '#E58B36', 'ratio' => 1],
                ['name' => 'Red', 'hex' => '#B83B3B', 'ratio' => 1],
                ['name' => 'Orange', 'hex' => '#E58B36', 'ratio' => 1],
                ['name' => 'Yellow', 'hex' => '#E2C94C', 'ratio' => 1],
                ['name' => 'Green', 'hex' => '#4C9560', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#3979A8', 'ratio' => 1],
                ['name' => 'Indigo', 'hex' => '#344A83', 'ratio' => 1],
                ['name' => 'Violet', 'hex' => '#654078', 'ratio' => 1],
            ],
        ],
    ],

    // =========================================================
    // SECOND WORLD WAR CAMPAIGN STARS
    // =========================================================

    '1939_45_star' => [
        'name' => '1939–45 Star',
        'category' => 'Second World War Campaign',
        'introduced' => 1943,
        'description' => 'Awarded for qualifying operational service during the Second World War.',
        'ribbon' => [
            'width_mm' => 32,
            'height_mm' => 10,
            'orientation' => 'vertical',
            'finish' => 'plain',
            'accuracy' => 'Equal stripe pattern documented',
            'stripes' => [
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 1],
                ['name' => 'Dark Blue', 'hex' => '#00205B', 'ratio' => 1],
                ['name' => 'Pale Blue', 'hex' => '#9BCBEB', 'ratio' => 1],
            ],
        ],
    ],

    'africa_star' => [
        'name' => 'Africa Star',
        'category' => 'Second World War Campaign',
        'introduced' => 1943,
        'description' => 'Awarded for qualifying service in the North African and associated operational areas.',
        'ribbon' => [
            'width_mm' => 32,
            'height_mm' => 10,
            'orientation' => 'vertical',
            'finish' => 'plain',
            'accuracy' => 'Approximate stripe proportions',
            'stripes' => [
                ['name' => 'Sand', 'hex' => '#CDBB91', 'ratio' => 4],
                ['name' => 'Dark Blue', 'hex' => '#173B67', 'ratio' => 1],
                ['name' => 'Red', 'hex' => '#B73538', 'ratio' => 3],
                ['name' => 'Pale Blue', 'hex' => '#91BBD5', 'ratio' => 1],
                ['name' => 'Sand', 'hex' => '#CDBB91', 'ratio' => 4],
            ],
        ],
    ],

    'burma_star' => [
        'name' => 'Burma Star',
        'category' => 'Second World War Campaign',
        'introduced' => 1943,
        'description' => 'Awarded for qualifying operational service in Burma and specified surrounding areas.',
        'ribbon' => [
            'width_mm' => 32,
            'height_mm' => 10,
            'orientation' => 'vertical',
            'finish' => 'plain',
            'accuracy' => 'Approximate stripe proportions',
            'stripes' => [
                ['name' => 'Dark Blue', 'hex' => '#173B67', 'ratio' => 3],
                ['name' => 'Orange Yellow', 'hex' => '#E6A52E', 'ratio' => 1],
                ['name' => 'Red', 'hex' => '#B73538', 'ratio' => 3],
                ['name' => 'Orange Yellow', 'hex' => '#E6A52E', 'ratio' => 1],
                ['name' => 'Dark Blue', 'hex' => '#173B67', 'ratio' => 3],
            ],
        ],
    ],

    'italy_star' => [
        'name' => 'Italy Star',
        'category' => 'Second World War Campaign',
        'introduced' => 1945,
        'description' => 'Awarded for qualifying operational service in Sicily, Italy and specified associated areas.',
        'ribbon' => [
            'width_mm' => 32,
            'height_mm' => 10,
            'orientation' => 'vertical',
            'finish' => 'plain',
            'accuracy' => 'Approximate stripe proportions',
            'stripes' => [
                ['name' => 'Red', 'hex' => '#C83D42', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Green', 'hex' => '#27834A', 'ratio' => 1],
            ],
        ],
    ],

    'france_germany_star' => [
        'name' => 'France and Germany Star',
        'category' => 'Second World War Campaign',
        'introduced' => 1945,
        'description' => 'Awarded for qualifying operational service in France, Belgium, Luxembourg, the Netherlands and Germany.',
        'ribbon' => [
            'width_mm' => 32,
            'height_mm' => 10,
            'orientation' => 'vertical',
            'finish' => 'plain',
            'accuracy' => 'Approximate stripe proportions',
            'stripes' => [
                ['name' => 'Blue', 'hex' => '#21468B', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Red', 'hex' => '#C83D42', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#21468B', 'ratio' => 1],
            ],
        ],
    ],

    // =========================================================
    // SECOND WORLD WAR SERVICE MEDALS
    // =========================================================

    'defence_medal' => [
        'name' => 'Defence Medal',
        'category' => 'Second World War Service',
        'introduced' => 1945,
        'description' => 'Awarded for qualifying non-operational service during the Second World War.',
        'ribbon' => [
            'width_mm' => 32,
            'height_mm' => 10,
            'orientation' => 'vertical',
            'finish' => 'plain',
            'accuracy' => 'Approximate stripe proportions',
            'stripes' => [
                ['name' => 'Green', 'hex' => '#267447', 'ratio' => 4],
                ['name' => 'Black', 'hex' => '#171717', 'ratio' => 1],
                ['name' => 'Orange', 'hex' => '#E87524', 'ratio' => 4],
                ['name' => 'Black', 'hex' => '#171717', 'ratio' => 1],
                ['name' => 'Green', 'hex' => '#267447', 'ratio' => 4],
            ],
        ],
    ],

    'war_medal_1939_45' => [
        'name' => 'War Medal 1939–1945',
        'category' => 'Second World War Service',
        'introduced' => 1945,
        'description' => 'Awarded to qualifying full-time personnel of the armed forces for service during the Second World War.',
        'ribbon' => [
            'width_mm' => 32,
            'height_mm' => 10,
            'orientation' => 'vertical',
            'finish' => 'plain',
            'accuracy' => 'Approximate stripe proportions',
            'stripes' => [
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 3],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#173B67', 'ratio' => 3],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 1],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Blue', 'hex' => '#173B67', 'ratio' => 3],
                ['name' => 'White', 'hex' => '#F4F1E8', 'ratio' => 1],
                ['name' => 'Red', 'hex' => '#C8102E', 'ratio' => 3],
            ],
        ],
    ],

    // =========================================================
    // INTER-WAR CAMPAIGN MEDAL
    // =========================================================

    'india_general_service_1936' => [
        'name' => 'India General Service Medal 1936–1939',
        'category' => 'Inter-war Campaign',
        'introduced' => 1938,
        'description' => 'Awarded for qualifying service in the North-West Frontier and associated operations.',
        'ribbon' => [
            'width_mm' => 32,
            'height_mm' => 10,
            'orientation' => 'vertical',
            'finish' => 'plain',
            'accuracy' => 'Approximate stripe proportions',
            'stripes' => [
                ['name' => 'Green', 'hex' => '#24745D', 'ratio' => 3],
                ['name' => 'Red', 'hex' => '#B83B42', 'ratio' => 1],
                ['name' => 'Stone Grey', 'hex' => '#C9C6BB', 'ratio' => 6],
                ['name' => 'Red', 'hex' => '#B83B42', 'ratio' => 1],
                ['name' => 'Green', 'hex' => '#24745D', 'ratio' => 3],
            ],
        ],
    ],

    // =========================================================
    // LONG SERVICE AND EFFICIENCY
    // =========================================================

    'efficiency_medal_territorial' => [
        'name' => 'Efficiency Medal (Territorial)',
        'category' => 'Long Service and Efficiency',
        'introduced' => 1930,
        'description' => 'Awarded for qualifying efficient and long service in the Territorial Army.',
        'ribbon' => [
            'width_mm' => 32,
            'height_mm' => 10,
            'orientation' => 'vertical',
            'finish' => 'plain',
            'accuracy' => 'Approximate stripe proportions; check issue variation',
            'stripes' => [
                ['name' => 'Yellow', 'hex' => '#D8B93E', 'ratio' => 1],
                ['name' => 'Green', 'hex' => '#17613F', 'ratio' => 10],
                ['name' => 'Yellow', 'hex' => '#D8B93E', 'ratio' => 1],
            ],
        ],
    ],

];


/*
|--------------------------------------------------------------------------
| HELPERS
|--------------------------------------------------------------------------
*/

function e(string $value): string
{
    return htmlspecialchars(
        $value,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}


/*
|--------------------------------------------------------------------------
| RIBBON SVG RENDERER
|--------------------------------------------------------------------------
*/

function renderRibbon(
    array $ribbon,
    int $width = 320,
    int $height = 100
): string {

    $stripes = $ribbon['stripes'] ?? [];

    if (!$stripes) {
        return '';
    }

    $total = 0;

    foreach ($stripes as $stripe) {

        $ratio = (float)($stripe['ratio'] ?? 0);

        if ($ratio <= 0) {
            throw new InvalidArgumentException(
                'Invalid ribbon stripe ratio.'
            );
        }

        if (!preg_match('/^#[0-9a-fA-F]{6}$/', $stripe['hex'])) {
            throw new InvalidArgumentException(
                'Invalid ribbon colour.'
            );
        }

        $total += $ratio;
    }

    $x = 0;
    $rectangles = '';

    foreach ($stripes as $index => $stripe) {

        $stripeWidth = ($index === count($stripes) - 1)
            ? $width - $x
            : $width * ($stripe['ratio'] / $total);

        $rectangles .= sprintf(
            '<rect x="%s" y="0" width="%s" height="%d" fill="%s"/>',
            $x,
            $stripeWidth + 0.02,
            $height,
            e($stripe['hex'])
        );

        $x += $stripeWidth;
    }

    return sprintf(
        '<svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 %d %d"
            width="%d"
            height="%d">',
        $width,
        $height,
        $width,
        $height
    ) . $rectangles . '</svg>';
}


/*
|--------------------------------------------------------------------------
| SELECTION AND ORDERING
|--------------------------------------------------------------------------
*/

$selected = $_POST['selected'] ?? [];

if (!is_array($selected)) {
    $selected = [];
}

$selected = array_values(array_unique(array_filter(
    $selected,
    fn($id) => is_string($id) && isset($medals[$id])
)));

$precedence = [
    '1914_15_star' => 10,
    'british_war_medal' => 20,
    'victory_medal' => 30,

    '1939_45_star' => 40,
    'africa_star' => 50,
    'burma_star' => 60,
    'italy_star' => 70,
    'france_germany_star' => 80,

    'india_general_service_1936' => 90,

    'defence_medal' => 100,
    'war_medal_1939_45' => 110,

    'efficiency_medal_territorial' => 120,
];

$selectedMedals = [];

foreach ($selected as $id) {
    $selectedMedals[$id] = $medals[$id];
}

uksort(
    $selectedMedals,
    fn($a, $b) =>
        ($precedence[$a] ?? 9999) <=> ($precedence[$b] ?? 9999)
);


/*
|--------------------------------------------------------------------------
| CATALOGUE FILTERS
|--------------------------------------------------------------------------
*/

$search = trim((string)($_GET['q'] ?? ''));

$categoryFilter = $_GET['category'] ?? 'all';

$categories = array_unique(
    array_column($medals, 'category')
);

$visibleMedals = [];

foreach ($medals as $id => $medal) {

    $categoryMatch =
        $categoryFilter === 'all' ||
        $medal['category'] === $categoryFilter;

    $searchText = strtolower(
        $medal['name'] . ' ' .
        $medal['category'] . ' ' .
        $medal['description']
    );

    $searchMatch =
        $search === '' ||
        str_contains($searchText, strtolower($search));

    if ($categoryMatch && $searchMatch) {
        $visibleMedals[$id] = $medal;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>UK Medal Ribbon Rack Builder</title>

<style>

:root {
    --background: #f3f5f8;
    --surface: #ffffff;
    --primary: #173b67;
    --text: #172033;
    --muted: #657087;
    --border: #dce2eb;
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: var(--background);
    color: var(--text);
}

header {
    background: #13243a;
    color: white;
    padding: 28px;
}

header h1 {
    max-width: 1200px;
    margin: auto;
}

header p {
    max-width: 1200px;
    margin: 8px auto 0;
    color: #c7d1df;
}

main {
    max-width: 1200px;
    margin: 25px auto;
    padding: 0 18px;
}

.panel {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
}

.panel h2 {
    margin-top: 0;
}

.toolbar {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    align-items: end;
}

label {
    display: block;
    font-size: 13px;
    font-weight: bold;
    margin-bottom: 6px;
}

input[type="search"],
select {
    padding: 11px;
    border: 1px solid var(--border);
    border-radius: 7px;
    min-height: 42px;
}

button {
    padding: 11px 17px;
    border: 0;
    border-radius: 7px;
    background: var(--primary);
    color: white;
    cursor: pointer;
    font-weight: bold;
}

button.secondary {
    background: #e8edf4;
    color: var(--text);
}

.catalogue {
    display: grid;
    grid-template-columns: repeat(
        auto-fit,
        minmax(260px, 1fr)
    );
    gap: 14px;
}

.medal-card {
    border: 1px solid var(--border);
    border-radius: 10px;
    padding: 15px;
}

.medal-card.selected {
    border: 2px solid var(--primary);
}

.medal-heading {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 12px;
}

.medal-heading input {
    width: 18px;
    height: 18px;
}

.medal-heading label {
    margin: 0;
    font-size: 15px;
}

.ribbon {
    width: 100%;
    max-width: 320px;
    height: auto;
    display: block;
    border: 1px solid #ddd;
}

.meta {
    font-size: 12px;
    color: var(--muted);
    margin-top: 10px;
}

.description {
    font-size: 13px;
    line-height: 1.5;
    margin-top: 10px;
}

.accuracy {
    color: #80601e;
    font-size: 11px;
    margin-top: 8px;
}

.rack {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    background: #f7f8fa;
    border: 1px dashed #c4ccd8;
    padding: 18px;
    border-radius: 8px;
    min-height: 90px;
}

.rack-item {
    width: 85px;
}

.rack-item svg {
    width: 100%;
    height: auto;
    display: block;
    border: 1px solid #bbc3cf;
}

.rack-item span {
    display: block;
    text-align: center;
    font-size: 10px;
    margin-top: 5px;
}

.actions {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 15px;
}

.note {
    color: var(--muted);
    font-size: 12px;
    line-height: 1.6;
}

@media(max-width: 600px) {

    .toolbar {
        flex-direction: column;
        align-items: stretch;
    }

    .toolbar input,
    .toolbar select {
        width: 100%;
    }

    .rack-item {
        width: 65px;
    }

}

</style>

</head>

<body>

<header>

    <h1>UK Medal Ribbon Rack Builder</h1>

    <p>
        British honours, campaign medals and service awards
        from the 1905–1945 period.
    </p>

</header>

<main>

    <!-- RACK BUILDER -->

    <form method="post" id="builderForm">

        <section class="panel">

            <h2>Your Medal Rack</h2>

            <div class="rack" id="rackPreview">

                <?php if (empty($selectedMedals)): ?>

                    <p id="emptyMessage">
                        Select medals from the catalogue below.
                    </p>

                <?php else: ?>

                    <?php foreach ($selectedMedals as $id => $medal): ?>

                        <div class="rack-item" data-id="<?= e($id) ?>">

                            <?= renderRibbon($medal['ribbon']) ?>

                            <span>
                                <?= e($medal['name']) ?>
                            </span>

                        </div>

                    <?php endforeach; ?>

                <?php endif; ?>

            </div>

            <div class="actions">

                <button type="button" id="exportPng">
                    Export PNG
                </button>

                <button type="button" class="secondary" id="clearSelection">
                    Clear Selection
                </button>

                <button type="submit" class="secondary">
                    Update Rack
                </button>

            </div>

            <p class="note">
                The initial precedence order is a provisional display order.
                Verify the official Order of Wear before using a rack as
                a historically authoritative representation.
            </p>

        </section>


        <!-- CATALOGUE -->

        <section class="panel">

            <h2>Medal Catalogue</h2>

            <div class="catalogue">

                <?php foreach ($visibleMedals as $id => $medal): ?>

                    <article class="medal-card
                        <?= isset($selectedMedals[$id]) ? 'selected' : '' ?>">

                        <div class="medal-heading">

                            <input
                                type="checkbox"
                                name="selected[]"
                                value="<?= e($id) ?>"
                                id="medal_<?= e($id) ?>"
                                <?= isset($selectedMedals[$id]) ? 'checked' : '' ?>
                            >

                            <label for="medal_<?= e($id) ?>">
                                <?= e($medal['name']) ?>
                            </label>

                        </div>

                        <?= renderRibbon($medal['ribbon']) ?>

                        <div class="meta">

                            <?= e($medal['category']) ?>

                            · Introduced <?= (int)$medal['introduced'] ?>

                        </div>

                        <div class="description">
                            <?= e($medal['description']) ?>
                        </div>

                        <div class="accuracy">
                            <?= e($medal['ribbon']['accuracy']) ?>
                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </section>

    </form>


    <!-- HISTORICAL NOTES -->

    <section class="panel">

        <h2>Historical Accuracy</h2>

        <p class="note">
            Ribbon colours are digital approximations, not official
            textile colour standards. Stripe proportions should be
            verified against original ribbon specifications.
        </p>

        <p class="note">
            Watered ribbons are currently represented using flat colours.
            The finish is retained in the medal data for future rendering.
        </p>

        <ul class="note">

            <li>
                <a href="https://www.nam.ac.uk/explore/medal-ribbons"
                   target="_blank" rel="noopener">
                    National Army Museum – Medal Ribbons
                </a>
            </li>

            <li>
                <a href="https://www.gov.uk/guidance/medals-campaigns-descriptions-and-eligibility"
                   target="_blank" rel="noopener">
                    GOV.UK – Medals and Eligibility
                </a>
            </li>

            <li>
                <a href="https://www.nationalarchives.gov.uk/help-with-your-research/research-guides/british-military-campaign-and-service-medals/"
                   target="_blank" rel="noopener">
                    The National Archives – Campaign Medals
                </a>
            </li>

        </ul>

    </section>

</main>


<script>

/*
|--------------------------------------------------------------------------
| LIVE SELECTION
|--------------------------------------------------------------------------
*/

const checkboxes = document.querySelectorAll(
    'input[name="selected[]"]'
);

checkboxes.forEach(checkbox => {

    checkbox.addEventListener('change', function () {

        this.closest('.medal-card')
            .classList.toggle('selected', this.checked);

    });

});


/*
|--------------------------------------------------------------------------
| CLEAR SELECTION
|--------------------------------------------------------------------------
*/

document.getElementById('clearSelection')
    .addEventListener('click', function () {

        checkboxes.forEach(checkbox => {
            checkbox.checked = false;
        });

        document.getElementById('builderForm').submit();

    });


/*
|--------------------------------------------------------------------------
| PNG EXPORT
|--------------------------------------------------------------------------
*/

document.getElementById('exportPng')
    .addEventListener('click', async function () {

        const items = [
            ...document.querySelectorAll(
                '#rackPreview .rack-item'
            )
        ];

        if (!items.length) {
            alert('Please select at least one medal.');
            return;
        }

        const scale = 3;
        const itemWidth = 228;
        const itemHeight = 100;
        const gap = 15;
        const padding = 24;

        const columns = Math.min(items.length, 8);
        const rows = Math.ceil(items.length / columns);

        const canvas = document.createElement('canvas');

        canvas.width = (
            padding * 2 +
            columns * itemWidth +
            (columns - 1) * gap
        ) * scale;

        canvas.height = (
            padding * 2 +
            rows * (itemHeight + 32) +
            (rows - 1) * gap
        ) * scale;

        const ctx = canvas.getContext('2d');

        ctx.scale(scale, scale);

        function loadSvg(svg) {

            return new Promise((resolve, reject) => {

                const blob = new Blob(
                    [svg],
                    { type: 'image/svg+xml;charset=utf-8' }
                );

                const url = URL.createObjectURL(blob);

                const image = new Image();

                image.onload = () => {
                    URL.revokeObjectURL(url);
                    resolve(image);
                };

                image.onerror = () => {
                    URL.revokeObjectURL(url);
                    reject(new Error('SVG rendering failed'));
                };

                image.src = url;

            });

        }

        try {

            for (let i = 0; i < items.length; i++) {

                const item = items[i];

                const svgNode = item.querySelector('svg');

                const svg = new XMLSerializer()
                    .serializeToString(svgNode);

                const image = await loadSvg(svg);

                const column = i % columns;
                const row = Math.floor(i / columns);

                const x = padding + column * (itemWidth + gap);
                const y = padding + row * (itemHeight + 32 + gap);

                ctx.drawImage(
                    image,
                    x,
                    y,
                    itemWidth,
                    itemHeight
                );

                const label = item.querySelector('span').textContent;

                ctx.fillStyle = '#263246';
                ctx.font = '12px Arial';
                ctx.textAlign = 'center';

                ctx.fillText(
                    label,
                    x + itemWidth / 2,
                    y + itemHeight + 17,
                    itemWidth
                );

            }

            const link = document.createElement('a');

            link.download = 'uk-medal-ribbon-rack.png';

            link.href = canvas.toDataURL('image/png');

            link.click();

        } catch (error) {

            console.error(error);

            alert('Unable to export the PNG image.');

        }

    });

</script>

</body>
</html>
