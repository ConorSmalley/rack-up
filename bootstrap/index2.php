<?php

require_once('data.php');

foreach ($medals as $medal) {
    if (!empty($medal['tags']) && is_array($medal['tags'])) {
        $tags = array_merge($tags, $medal['tags']);
    }
}

$tags = array_values(array_unique($tags));

sort($tags);
function e(string $value): string{
    return htmlspecialchars(
        $value,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}

function renderRibbon(array $ribbon, int $width = 160, int $height = 50, ?array $device = null): string {

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

    // =========================================================
    // RIBBON DEVICES
    // =========================================================

    $deviceSvg = '';

    // =========================================================
    // PERMANENT RIBBON DEVICE
    // =========================================================

    $permanentDevice = $ribbon['permanent_device'] ?? null;

    if ($permanentDevice !== null) {

        $type = $permanentDevice['type'] ?? 'none';
        $colour = $permanentDevice['colour'] ?? '#C0C0C0';

        if (($permanentDevice['type'] ?? null) === 'amalfi_cross') {
            $size = min($width, $height) * 0.8;
            $size = min($height * 0.7, $width * 0.2);

            // Original path has a 20 × 20 coordinate area.
            $scale = $size / 20;

            $deviceSvg .= sprintf(
                '<path d="
                    M 0 0
                    L 4 10 L 0 8 L -4 10 L 0 0
                    L 10 4 L 8 0 L 10 -4 L 0 0
                    L -4 -10 L 0 -8 L 4 -10 L 0 0
                    L -10 -4 L -8 0 L -10 4 L 0 0
                    Z
                "
                transform="translate(%.2f %.2f) scale(%.4f)"
                fill="%s"
                />',
                $width / 2,
                $height / 2,
                $scale,
                htmlspecialchars($permanentDevice['colour'] ?? '#C0C0C0', ENT_QUOTES, 'UTF-8')
            );
        }
    }

    if ($device !== null) {

        $type = $device['type'] ?? 'none';

        // =========================================================
        // AMALFI CROSS
        // =========================================================

        if ($type === 'amalfi_cross') {
            $count = (int)($device['count'] ?? 1);
            $colour = $device['colour'] ?? '#C0C0C0';
            $size = min($height * 0.8, $width * 0.25);
            $size = min($height * 0.7, $width * 0.2);

            $spacing = $size * 1.25;

            if ($count === 1) {
                $positions = [$width / 2];
            } elseif ($count === 2) {
                $positions = [
                    ($width / 2) - ($spacing / 2),
                    ($width / 2) + ($spacing / 2),
                ];
            } elseif ($count === 3) {
                $positions = [
                    $width / 2 - $spacing,
                    $width / 2,
                    $width / 2 + $spacing,
                ];
            } elseif ($count === 4) {
                $positions = [
                    $width / 2 - ($spacing * 1.5),
                    $width / 2 - ($spacing / 2),
                    $width / 2 + ($spacing / 2),
                    $width / 2 + ($spacing * 1.5),
                ];
            } else {
                $positions = [];
            }

            foreach ($positions as $cx) {
                $deviceSvg .= renderMalteseCross(
                    $cx,
                    $height / 2,
                    $size,
                    $colour
                );
            }
        }

        // =========================================================
        // ROSETTE
        // =========================================================

        elseif ($type === 'rosette') {

            $cx = $width / 2;
            $cy = $height / 2;

            $points = [];

            for ($i = 0; $i < 32; $i++) {

                $angle = (2 * M_PI * $i / 32) - (M_PI / 2);

                $radius = ($i % 2 === 0) ? 15 : 11;

                $px = $cx + cos($angle) * $radius;
                $py = $cy + sin($angle) * $radius;

                $points[] = sprintf('%.2f,%.2f', $px, $py);
            }

            $deviceSvg .= sprintf(
                '<g>
                    <polygon
                        points="%s"
                        fill="#C0C0C0"
                        stroke="#777777"
                        stroke-width="1"
                    />
                    <circle
                        cx="%s"
                        cy="%s"
                        r="8"
                        fill="#DADADA"
                        stroke="#888888"
                        stroke-width="0.8"
                    />
                    <circle
                        cx="%s"
                        cy="%s"
                        r="3"
                        fill="#999999"
                    />
                </g>',
                implode(' ', $points),
                $cx,
                $cy,
                $cx,
                $cy
            );
        }

        // =========================================================
        // ARMY NUMERALS
        // =========================================================

        elseif ($type === 'numeral') {

            $numeral = $device['numeral'] ?? '';

            if (in_array($numeral, ['1', '8'], true)) {

                $deviceSvg .= sprintf(
                    '<text
                        x="%s"
                        y="%s"
                        text-anchor="middle"
                        dominant-baseline="central"
                        font-family="Arial, sans-serif"
                        font-size="43"
                        font-weight="bold"
                        fill="#C0C0C0"
                        stroke="#777777"
                        stroke-width="0.6"
                        paint-order="stroke"
                    >%s</text>',
                    $width / 2,
                    $height / 2,
                    $numeral
                );
            }
        }
    }
    // if ($device !== null) {

    //     $type = $device['type'] ?? 'none';

    //     // =========================================================
    //     // ROSETTE
    //     // =========================================================

    //     if ($type === 'rosette') {

    //         $cx = $width / 2;
    //         $cy = $height / 2;

    //         // Create a scalloped rosette outline
    //         $points = [];

    //         for ($i = 0; $i < 32; $i++) {

    //             $angle = (2 * M_PI * $i / 32) - (M_PI / 2);

    //             $radius = ($i % 2 === 0) ? 15 : 11;

    //             $px = $cx + cos($angle) * $radius;
    //             $py = $cy + sin($angle) * $radius;

    //             $points[] = sprintf('%.2f,%.2f', $px, $py);
    //         }

    //         $deviceSvg = sprintf(
    //             '<g>
    //                 <polygon
    //                     points="%s"
    //                     fill="#C0C0C0"
    //                     stroke="#777777"
    //                     stroke-width="1"
    //                 />

    //                 <circle
    //                     cx="%s"
    //                     cy="%s"
    //                     r="8"
    //                     fill="#DADADA"
    //                     stroke="#888888"
    //                     stroke-width="0.8"
    //                 />

    //                 <circle
    //                     cx="%s"
    //                     cy="%s"
    //                     r="3"
    //                     fill="#999999"
    //                 />
    //             </g>',
    //             implode(' ', $points),
    //             $cx,
    //             $cy,
    //             $cx,
    //             $cy
    //         );
    //     }

    //     // =========================================================
    //     // ARMY NUMERALS
    //     // =========================================================

    //     elseif ($type === 'numeral') {

    //         $numeral = $device['numeral'] ?? '';

    //         // Only allow the official Africa Star army numerals
    //         if (in_array($numeral, ['1', '8'], true)) {

    //             $deviceSvg = sprintf(
    //                 '<text
    //                     x="%s"
    //                     y="%s"
    //                     text-anchor="middle"
    //                     dominant-baseline="central"
    //                     font-family="Arial, sans-serif"
    //                     font-size="43"
    //                     font-weight="bold"
    //                     fill="#C0C0C0"
    //                     stroke="#777777"
    //                     stroke-width="0.6"
    //                     paint-order="stroke"
    //                 >%s</text>',
    //                 $width / 2,
    //                 $height / 2,
    //                 $numeral
    //             );
    //         }
    //     }
    // }
    return sprintf(
        '<svg xmlns="http://www.w3.org/2000/svg"
            class=""
            viewBox="0 0 %d %d"
            width="%d"
            height="%d">',
        $width,
        $height,
        $width,
        $height
    ) . $rectangles . $deviceSvg . '</svg>';

    // return sprintf(
    //     '<svg xmlns="http://www.w3.org/2000/svg"
    //         class=""
    //         viewBox="0 0 %d %d"
    //         width="%d"
    //         height="%d">',
    //     $width,
    //     $height,
    //     $width,
    //     $height
    // ) . $rectangles . '</svg>';
}


function renderMalteseCross(
    float $cx,
    float $cy,
    float $size,
    string $colour
): string {

    $scale = $size / 20;

    return sprintf(
        '<path
            d="
                M 0 0
                L 4 10 L 0 8 L -4 10 L 0 0
                L 10 4 L 8 0 L 10 -4 L 0 0
                L -4 -10 L 0 -8 L 4 -10 L 0 0
                L -10 -4 L -8 0 L -10 4 L 0 0
                Z
            "
            transform="translate(%.2f %.2f) scale(%.4f)"
            fill="%s"
        />',
        $cx,
        $cy,
        $scale,
        e($colour)
    );
}


$selected = [];
$selectedDevices = [];
$selectedMedals = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    error_log(print_r('----- raw from $_POST -----', true));
    error_log(print_r($_POST, true));

    $submitted = $_POST['selected'] ?? [];

    if (is_array($submitted)) {
        $selected = array_values(array_unique(array_filter(
            $submitted,
            fn($id) => is_string($id) && isset($medals[$id])
        )));
    }

    $selected = array_values(array_unique(array_filter(
        $selected,
        fn($id) => is_string($id) && isset($medals[$id])
    )));

    // =========================================================
    // SELECTED RIBBON DEVICES
    // =========================================================

    $selectedDevices = [];

    $submittedDevices = $_POST['devices'] ?? [];

    if (is_array($submittedDevices)) {

        foreach ($selected as $medalId) {

            if (!isset($medals[$medalId]['devices'])) {
                continue;
            }

            $options = $medals[$medalId]['devices']['options'];

            $deviceId = $submittedDevices[$medalId] ?? 'none';

            if (
                is_string($deviceId) &&
                isset($options[$deviceId])
            ) {
                $selectedDevices[$medalId] = $options[$deviceId];
            }
        }
    }

    $precedence = [
        'victoria_cross' =>1,
        'george_cross' =>2,
        '1914_15_star' => 10,
        'british_war_medal' => 20,
        'victory_medal' => 30,

        '1939_45_star' => 40,
        'africa_star' => 50,
        'burma_star' => 60,
        'italy_star' => 70,
        'france_germany_star' => 80,
        'india_general_service_1909' => 90,
        'india_general_service_1936' => 91,
        

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
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            overflow: hidden;
        }

        .app-container {
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .app-header {
            flex-shrink: 0;
            background: #13243a;
            color: white;
            padding: 1rem;

            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
        }

        .header-text {
            flex: 1 1 auto;
            min-width: 0;
        }

        .header-text h1 {
            margin-bottom: 0.25rem;
        }

        .header-buttons {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: flex-end;
            gap: 0.5rem;
            flex: 0 0 auto;
        }

        /* Mobile screens */
        @media (max-width: 767.98px) {

            .app-header {
                flex-direction: column;
                align-items: stretch;
            }

            .header-buttons {
                width: 100%;
                justify-content: flex-start;
                flex-wrap: wrap;
            }

        }

        /* .medal-rack {
            flex-shrink: 0;
            padding: 1rem;
        } */
        .medal-rack {
            flex-shrink: 0;
            padding: 1rem;
            overflow: hidden;
        }

        .medal-rack svg {
            width: calc(160px * var(--rack-scale, 1));
            height: calc(50px * var(--rack-scale, 1));
            display: block;
        }

        .medal-catalogue {
            flex: 1;
            min-height: 0;
            overflow-y: auto;
            overflow-x: hidden;
            padding: 1.5rem;
        }

        .tag-container {
            padding: 1rem;
        }

        .medal-catalogue .card {
            cursor: pointer;
        }

        .medal-catalogue .card:hover {
            border-color: #0073b8;
        }
        .tag-container {
            padding: 1rem;
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            align-items: center;
        }

        .tag-filter {
            border: 1px solid #0073b8;
            background: transparent;
            color: #0073b8;
            cursor: pointer;
            padding: 0.4rem 0.75rem;
            transition: all 0.2s ease;
        }

        .tag-filter:hover {
            background: #0073b8;
            color: white;
        }

        .tag-filter.active {
            background: #0073b8;
            color: white;
        }

        .medal-item {
            transition: opacity 0.2s ease;
        }

        .medal-item.hidden {
            display: none;
        }
       
    </style>
</head>
<body>
     <div class="app-container">

        <!-- HEADER -->
        <header class="app-header">

            <div class="header-text">
                <h1>Rack Up</h1>
                <p class="mb-0">
                    British honours, campaign medals and service awards from the 1905–1945 period.
                </p>
            </div>

            <div class="header-buttons">

                <button type="button" id="resetRack" class="btn btn-outline-danger">
                    <i class="bi bi-trash"></i>
                    Reset Rack
                </button>

                <button type="button" id="exportRack" class="btn btn-outline-light">
                    <i class="bi bi-download"></i>
                    Export as Image
                </button>

                <button type="submit" form="medalForm" class="btn btn-primary">
                    Update Medal Rack
                </button>

            </div>

        </header>

        <!-- MEDAL RACK -->
        <?php if (!empty($selectedMedals)) { 
            $totalMedalCount = count($selectedMedals);
            $currentMedalCount = 0;

            if($totalMedalCount > 4 && $totalMedalCount%4 !== 0){
                $currentMedalCount = 4 - ($totalMedalCount%4);
            }
        ?>
        <section id="medalRack" class="medal-rack border rounded bg-white">
            <div id="rackContent">
                <div class="row d-flex flex-row flex-nowrap align-items-center justify-content-center g-0">
                    <?php foreach ($selectedMedals as $medalId => $medal) { ?>
                        <div class="col-auto">
                            <!-- <?= renderRibbon($medal['ribbon']) ?> -->
                            <?= renderRibbon(
                                $medal['ribbon'],
                                160,
                                50,
                                $selectedDevices[$medalId] ?? null
                            ) ?>
                        </div>
                        <?php $currentMedalCount++; ?>
                        <?php if($currentMedalCount === 4 && $currentMedalCount < $totalMedalCount){ ?>
                            </div>
                            <div class="row d-flex flex-row flex-nowrap align-items-center justify-content-center g-0">
                                <?php $currentMedalCount = 0; ?>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="row d-flex flex-row flex-nowrap align-items-center justify-content-center g-0">
                <?= implode(', ', array_map(function ($medalId) use ($selectedMedals, $selectedDevices) {

                    $name = $selectedMedals[$medalId]['name'];
                    
                    if (isset($selectedDevices[$medalId]) && $selectedDevices[$medalId]['type'] !== 'none') {
                        $name .= ' (' . $selectedDevices[$medalId]['name'] . ')';
                    }

                    return e($name);

                }, array_keys($selectedMedals))); ?>
            </div>
        </section>
        <?php } ?>
            
        
        <!-- SCROLLABLE MEDAL CATALOGUE -->
        <main class="medal-catalogue border rounded">

            <form id="medalForm" method="POST" action="">

                <div class="row row-cols-1 md:row-cols-6 g-4">

                    <?php foreach ($medals as $medalId => $medal) { ?>
                        <div
                            class="col medal-item"
                            data-tags="<?= e(implode(',', $medal['tags'] ?? [])) ?>"
                        >
                            <label class="card h-100" for="medal_<?= e($medalId) ?>">
                                <div class="card-body d-flex flex-column">

                                    <div class="d-flex justify-content-between align-items-start">
                                        <h4 class="card-title">
                                            <?= e($medal['name']) ?>
                                        </h4>

                                        <input
                                            type="checkbox"
                                            class="form-check-input"
                                            id="medal_<?= e($medalId) ?>"
                                            name="selected[]"
                                            value="<?= e($medalId) ?>"
                                            <?= in_array($medalId, $selected, true) ? 'checked' : '' ?>
                                        >
                                    </div>

                                    <p class="card-text">
                                        <?= e($medal['description']) ?>
                                    </p>
                                    <div class="mt-auto">
                                        <?php if (isset($medal['devices'])) { ?>

                                            <div class="mb-3">

                                                <label
                                                    for="device_<?= e($medalId) ?>"
                                                    class="form-label"
                                                >
                                                    <?= e($medal['devices']['label']) ?>
                                                </label>
                                                <?php if(isset($medal['devices']['multiple']) && isset($medal['devices']['multiple'])) { ?>
                                                    Check Boxes
                                                    <?php foreach ($medal['devices']['options'] as $deviceId => $device) { ?>
                                                        <?php if($device['type'] !== 'none') { ?> 
                                                            <?php var_dump($selectedDevices[$medalId]); ?>
                                                            <div class="form-field">
                                                                <input
                                                                    class="check"
                                                                    type="checkbox"
                                                                    id="device_<?= e($medalId) ?>_<?= e($deviceId) ?>"
                                                                    name="devices[<?= e($medalId) ?>]"
                                                                    value="<?= e($deviceId) ?>"
                                                                />
                                                                <label for="device_<?= e($medalId) ?>_<?= e($deviceId) ?>">
                                                                    <?= e($device['name']) ?>
                                                                </label>

                                                                <!-- <input type="checkbox" id="checkLabel" class="check" value="<?= e($deviceId) ?>" />
                                                                <label for="checkLabel"><?= $device['name'] ?></label> -->
                                                            </div>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <select
                                                        class="form-select w-100"
                                                        style="min-width: 0;"
                                                        id="device_<?= e($medalId) ?>"
                                                        name="devices[<?= e($medalId) ?>]"
                                                    >

                                                        <?php foreach (
                                                            $medal['devices']['options'] as $deviceId => $device
                                                        ) { ?>

                                                            <option
                                                                value="<?= e($deviceId) ?>"
                                                                <?= (
                                                                    isset($selectedDevices[$medalId]) &&
                                                                    $selectedDevices[$medalId]['name'] === $device['name']
                                                                ) ? 'selected' : (
                                                                    !isset($selectedDevices[$medalId]) &&
                                                                    $deviceId === 'none' ? 'selected' : ''
                                                                ) ?>
                                                            >
                                                                <?= e($device['name']) ?>
                                                            </option>

                                                        <?php } ?>

                                                    </select>
                                                <?php } ?>

                                            </div>

                                        <?php } ?>
                                    </div>
                                    <?= renderRibbon($medal['ribbon']) ?>
                                </div>
                                <div class="card-footer fg-2">
                                    <?php if (empty($medal['tags'])) { ?>
                                        No Tags
                                    <?php } else {?>
                                        <?php foreach($medal['tags'] as $tag){ ?>
                                            <span class="badge badge-outline theme-primary"><?= $tag ?></span>
                                        <?php } ?>
                                    <?php }?>
                                </div>
                            </label>
                        </div>
                    <?php } ?>

                </div>

            </form>

        </main>
        <!-- Footer Tag List
        <section class="tag-container border rounded bg-white">
            <?php if($tags!== []){?>
                <?php foreach($tags as $tag){ ?>
                    <span class="badge badge-outline theme-primary"><?= $tag ?></span>
                <?php } ?>
            <?php } else { ?>
                No tags set up.
            <?php }?>
        </section> -->

        <!-- Footer Tag List -->
        <section class="tag-container border rounded bg-white">

            <button
                type="button"
                class="badge badge-outline theme-primary tag-filter active"
                data-tag="all"
            >
                All Medals
            </button>

            <?php if ($tags !== []) { ?>

                <?php foreach ($tags as $tag) { ?>

                    <button
                        type="button"
                        class="badge badge-outline theme-primary tag-filter"
                        data-tag="<?= e($tag) ?>"
                    >
                        <?= e($tag) ?>
                    </button>

                <?php } ?>

            <?php } else { ?>

                No tags set up.

            <?php } ?>

        </section>
    </div>
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

   <script>
        function scaleMedalRack() {

            const rack = document.getElementById('medalRack');

            if (!rack) return;

            const ribbons = rack.querySelectorAll('svg');

            if (ribbons.length === 0) {
                rack.style.setProperty('--rack-scale', 1);
                return;
            }

            // Maximum medals per row
            const medalsPerRow = 4;

            // Number of medals on the fullest row
            const columns = Math.min(ribbons.length, medalsPerRow);

            // Original dimensions
            const ribbonWidth = 160;

            // Available width inside the rack
            const availableWidth =
                rack.clientWidth -
                parseFloat(getComputedStyle(rack).paddingLeft) -
                parseFloat(getComputedStyle(rack).paddingRight);

            // Width required at original size
            const requiredWidth = columns * ribbonWidth;

            // Calculate scale, never enlarging beyond original size
            const scale = Math.min(1, availableWidth / requiredWidth);

            // Apply scale
            rack.style.setProperty('--rack-scale', scale);

        }

        // Initial calculation
        window.addEventListener('load', scaleMedalRack);

        // Recalculate when browser is resized
        window.addEventListener('resize', scaleMedalRack);
        document.getElementById('resetRack').addEventListener('click', function () {

            if (!confirm('Are you sure you want to clear the entire medal rack?')) {
                return;
            }

            // Clear all selected medals
            document.querySelectorAll(
                '#medalForm input[name="selected[]"]'
            ).forEach(function (checkbox) {
                checkbox.checked = false;
            });

            // Reset all ribbon device dropdowns
            document.querySelectorAll(
                '#medalForm select[name^="devices["]'
            ).forEach(function (select) {
                select.value = 'none';
            });

            // Submit the form to update the server-side rack
            const form = document.getElementById('medalForm');

            // Add a reset indicator
            const resetInput = document.createElement('input');
            resetInput.type = 'hidden';
            resetInput.name = 'reset_rack';
            resetInput.value = '1';

            form.appendChild(resetInput);

            form.submit();

        });
        document.getElementById('exportRack').addEventListener('click', function () {

            const rack = document.getElementById('medalRack');
            const button = this;

            button.disabled = true;
            button.textContent = 'Exporting...';

            try {

                // Find all ribbon SVGs
                const ribbons = Array.from(rack.querySelectorAll('svg'));

                if (ribbons.length === 0) {
                    alert('There are no medals to export.');
                    return;
                }

                // Export dimensions
                const ribbonWidth = 160;
                const ribbonHeight = 50;
                const gap = 0;
                const medalsPerRow = 4;
                const padding = 40;

                const rows = Math.ceil(ribbons.length / medalsPerRow);

                // Number of medals in the incomplete top row.
                const topRowCount = ribbons.length % medalsPerRow || medalsPerRow;

                // Calculate export dimensions.
                const width = Math.max(
                    400,
                    // medalsPerRow * ribbonWidth + padding * 2
                    medalsPerRow * ribbonWidth
                );

                const height = rows * ribbonHeight + padding * 2;
                // const height = rows * ribbonHeight

                // Start the SVG.
                let svg = `
                    <svg xmlns="http://www.w3.org/2000/svg"
                        width="${width}"
                        height="${height}"
                        viewBox="0 0 ${width} ${height}">

                        <rect width="100%" height="100%" fill="#ffffff"/>
                `;

                // Build row sizes: incomplete row first, then complete rows.
                const rowSizes = [topRowCount];

                for (let i = 1; i < rows; i++) {
                    rowSizes.push(medalsPerRow);
                }

                let medalIndex = 0;

                rowSizes.forEach((count, row) => {
                    const rowWidth = count * ribbonWidth;
                    const startX = (width - rowWidth) / 2;

                    for (let column = 0; column < count; column++) {
                        const ribbon = ribbons[medalIndex];

                        const x = startX + (column * ribbonWidth);
                        const y = padding + (row * ribbonHeight);

                        const ribbonSvg = ribbon.cloneNode(true);
                        ribbonSvg.setAttribute('x', x);
                        ribbonSvg.setAttribute('y', y);
                        ribbonSvg.setAttribute('width', ribbonWidth);
                        ribbonSvg.setAttribute('height', ribbonHeight);

                        svg += new XMLSerializer().serializeToString(ribbonSvg);
                        medalIndex++;
                    }
                });

                // Close the SVG.
                svg += '</svg>';

                // Convert SVG to image
                const blob = new Blob(
                    [svg],
                    { type: 'image/svg+xml;charset=utf-8' }
                );

                const url = URL.createObjectURL(blob);

                const image = new Image();

                image.onload = function () {

                    const canvas = document.createElement('canvas');

                    canvas.width = width * 3;
                    canvas.height = height * 3;

                    const context = canvas.getContext('2d');

                    context.scale(3, 3);
                    context.fillStyle = '#ffffff';
                    context.fillRect(0, 0, width, height);

                    context.drawImage(image, 0, 0);

                    URL.revokeObjectURL(url);

                    // Download PNG
                    canvas.toBlob(function (pngBlob) {

                        if (!pngBlob) {
                            alert('Unable to generate PNG.');
                            return;
                        }

                        const downloadUrl = URL.createObjectURL(pngBlob);

                        const link = document.createElement('a');
                        link.href = downloadUrl;
                        link.download = 'medal-rack.png';

                        link.click();

                        URL.revokeObjectURL(downloadUrl);

                    }, 'image/png');

                };

                image.onerror = function (event) {
                    URL.revokeObjectURL(url);

                    console.error('Failed to load medal rack SVG:', event);
                    console.log('Generated SVG:', svg);

                    const parser = new DOMParser();
                    const document = parser.parseFromString(svg, 'image/svg+xml');
                    const error = document.querySelector('parsererror');

                    if (error) {
                        console.error('SVG XML parsing error:', error.textContent);
                    } else {
                        console.log('SVG XML parsed successfully.');
                    }

                    alert('Unable to render the medal rack. Check the console for details.');
                };

                image.src = url;

            } catch (error) {

                console.error('Image export failed:', error);
                alert('Unable to export the medal rack.');

            } finally {

                button.disabled = false;
                button.textContent = 'Export as Image';

            }

        });

        // =========================================================
        // MEDAL TAG FILTERING
        // =========================================================

        document.querySelectorAll('.tag-filter').forEach(function (button) {

            button.addEventListener('click', function () {

                const selectedTag = this.dataset.tag;

                // Update active tag styling
                document.querySelectorAll('.tag-filter').forEach(function (tag) {
                    tag.classList.remove('active');
                });

                // Clicking the active tag again resets the filter
                if (this.classList.contains('active')) {
                    // This condition is handled below instead
                }

                this.classList.add('active');

                // Get all medal cards
                document.querySelectorAll('.medal-item').forEach(function (medal) {

                    const medalTags = medal.dataset.tags
                        .split(',')
                        .filter(Boolean);

                    const matches = selectedTag === 'all' ||
                        medalTags.includes(selectedTag);

                    medal.classList.toggle('hidden', !matches);

                });

            });

        });
    </script>
</body>
</html>