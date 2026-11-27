<?php
// Imports for Data and Additional Functions
require_once('data.php');
require_once('rendering.php');

$SCALE = 3;
$RIBBON_WIDTH = 32;
$RIBBON_HEIGHT_FULL = 50;
$RIBBON_HEIGHT_SHORT = 10;
$SHOW_ALL_MEDAL_RACK = false;
$SHOW_TAGS = false;

$FULL_MEDAL_ADITIONAL_SCALE = 0.5;

$selectedMedals = [];
$selectedDevices = [];
$selectedVariants = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // =====================================================
    // Selected Medals
    // =====================================================

    $submitted = $_POST['selected'] ?? [];

    if (is_array($submitted)) {
        $selectedMedals = array_values(array_unique(array_filter(
            $submitted,
            fn($id) => is_string($id) && isset($medals[$id])
        )));
    }

    $selectedMedals = array_values(array_unique(array_filter(
        $selectedMedals,
        fn($id) => is_string($id) && isset($medals[$id])
    )));


    $selected = $selectedMedals;

    $selectedMedals = [];

    foreach ($selected as $id) {
        $selectedMedals[$id] = $medals[$id];
    }

    // =====================================================
    // Selected Devices
    // =====================================================
    $selectedDevices = [];

    $submittedDevices = $_POST['devices'] ?? [];

    
    if (is_array($submittedDevices)) {

        foreach ($selected as $medalId) {

            if (!isset($medals[$medalId]['devices'])) {
                continue;
            }

            $options = $medals[$medalId]['devices']['options'];

            $deviceIds = $submittedDevices[$medalId] ?? ['none'];

            // Normalise single selections into an array
            if (!is_array($deviceIds)) {
                $deviceIds = [$deviceIds];
            }

            foreach ($deviceIds as $deviceId) {

                if (
                    is_string($deviceId) &&
                    isset($options[$deviceId])
                ) {
                    $selectedDevices[$medalId][] = $options[$deviceId];
                }
            }

            // Remove duplicate entries if necessary
            if (isset($selectedDevices[$medalId])) {
                $selectedDevices[$medalId] = array_values(
                    array_unique($selectedDevices[$medalId], SORT_REGULAR)
                );
            }
        }
    }

    // =====================================================
    // Selected Variants
    // =====================================================
    $selectedVariants = [];

    $submittedVariants = $_POST['variants'] ?? [];

    if (is_array($submittedVariants)) {
        foreach($selected as $medalId){
            if (!isset($medals[$medalId]['variants'])) {
                continue;
            }

            $options = $medals[$medalId]['variants'];

            $variantIds = $submittedVariants[$medalId] ?? ['none'];

            // Normalise single selections into an array
            if (!is_array($variantIds)) {
                $variantIds = [$variantIds];
            }

            foreach ($variantIds as $variantId) {

                if (
                    is_string($variantId) &&
                    isset($options[$variantId])
                ) {
                    $selectedVariants[$medalId][] = $options[$variantId];
                }
            }

            // Remove duplicate entries if necessary
            if (isset($selectedVariants[$medalId])) {
                $selectedVariants[$medalId] = array_values(
                    array_unique($selectedVariants[$medalId], SORT_REGULAR)
                );
            }
        }   
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MKn5NWVBEuQXJE7TSKSgPUmMiSCmVTfCsR+VSSeQpHnoyJQZZFn/kBn+Ht5jZDPQ" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
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
        <?php if (!empty($selectedMedals) || !empty($medals)) { 
            $totalMedalCount = count($selectedMedals);
            $currentMedalCount = 0;

            if($totalMedalCount > 4 && $totalMedalCount%4 !== 0){
                $currentMedalCount = 4 - ($totalMedalCount%4);
            }
        ?>
            <section id="medalRack" class="row medal-rack border rounded bg-white">
                <div class="col-12"><?= renderMedalText($selectedMedals); ?></div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="ribbon-rack" data-bs-toggle="tab" data-bs-target="#ribbon-rack-pane" type="button" role="tab" aria-controls="ribbon-rack-pane" aria-selected="true">Ribbon Rack</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="medal-rack" data-bs-toggle="tab" data-bs-target="#medal-rack-pane" type="button" role="tab" aria-controls="medal-rack-pane" aria-selected="false">Medal Rack</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane show active" id="ribbon-rack-pane" role="tabpanel" aria-labelledby="ribbon-rack" tabindex="0">
                            <div class="row">
                                <div class="col-12">
                                    <?= renderRibbonRack($selectedMedals, $selectedDevices, $selectedVariants, $RIBBON_WIDTH, $RIBBON_HEIGHT_SHORT, $SCALE); ?>
                                </div>
                                <?php if($SHOW_ALL_MEDAL_RACK){ ?> 
                                    <div class="col-6">
                                        <?= renderRibbonRack($medals, $selectedDevices, $selectedVariants, $RIBBON_WIDTH, $RIBBON_HEIGHT_SHORT, $SCALE); ?>
                                    </div>
                                <?php } ?>
                            </div>
                    </div>
                    <div class="tab-pane" id="medal-rack-pane" role="tabpanel" aria-labelledby="medal-rack" tabindex="0">
                            <div class="row">
                                <div class="col-12">
                                    <?= renderMedalRack($selectedMedals, $selectedDevices, $selectedVariants, $RIBBON_WIDTH, $RIBBON_HEIGHT_FULL, $SCALE * $FULL_MEDAL_ADITIONAL_SCALE); ?>
                                </div>
                                <?php if($SHOW_ALL_MEDAL_RACK){ ?> 
                                    <div class="col-6">
                                        <?= renderMedalRack($medals, $selectedDevices, $selectedVariants, $RIBBON_WIDTH, $RIBBON_HEIGHT_FULL, $SCALE); ?>
                                    </div>
                                <?php } ?>
                            </div>
                    </div>
                </div>
            </section>
        <?php } ?>

        <!-- SCROLLABLE MEDAL CATALOGUE -->
        <main class="medal-catalogue border rounded">
            <form id="medalForm" method="POST" action="">

                <div class="row row-cols-1 xl:row-cols-6 lg:row-cols-4 md:row-cols-3 sm:row-cols-2 g-4">

                    <?php foreach ($medals as $medalId => $medal) { ?>
                        <?= renderMedalCard($medal, $medalId, $RIBBON_WIDTH, $RIBBON_HEIGHT_SHORT, $SCALE, in_array($medal, $selectedMedals, true), $selectedDevices, $selectedVariants, $SHOW_TAGS); ?>
                    <?php } ?>

                </div>

            </form>


        </main>
        <?php if($SHOW_TAGS){ ?>

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
        <?php } ?>
    </div>
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-+PW0IDVGGwmpaBQvcXY+W0BcpHpITFB3dSfSoGvDdHtLbrLpSbpGcvtQRM/BJpz+" crossorigin="anonymous"></script>
    <script>
        window.medalRules = <?= json_encode(
            $medalRules,
            JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP
        ) ?>;
    </script>
    <script src="script.js">        
    </script>
  </body>
</html>