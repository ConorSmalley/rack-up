<?php

function e(string $value): string{
    return htmlspecialchars(
        $value,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}

function renderRibbon(array $ribbon, int $width = 160, int $height = 50, $RIBBON_ONLY = false, ?array $device = null): string {

    $stripes = $ribbon['stripes'] ?? [];
    $direction = $ribbon['direction'] ?? 'vertical';
    $suspension = $ribbon['suspension'] ?? 'bar';

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

        if (!preg_match('/^#[0-9a-fA-F]{6}$/', $stripe['hex'] ?? '')) {
            throw new InvalidArgumentException(
                'Invalid ribbon colour.'
            );
        }

        $total += $ratio;
    }

    $triangleHeight = $RIBBON_ONLY ? 0 : $height * 0.35;
    $svgHeight = $height + $triangleHeight;

    $diagonal = $direction === 'diagonal';

    // =========================================================
    // RENDER STRIPES
    // =========================================================

    $rectangles = '';
    $x = 0;

    // Oversized square ensures the rotated stripes cover
    // the entire ribbon, including its triangular lower section.
    $patternSize = $diagonal
        ? $width + $svgHeight
        : $width;

    $diagonalStripeUnit = 10;

    foreach ($stripes as $index => $stripe) {
        if ($diagonal) {
            $stripeWidth = $diagonalStripeUnit * ($stripe['ratio'] / $total);
        } else {
            $stripeWidth = ($index === count($stripes) - 1)
                ? $patternSize - $x
                : $patternSize * ($stripe['ratio'] / $total);
        }
        if ($diagonal) {

            $diagonalStripeUnit = 100;

            $patternWidth = $diagonalStripeUnit * count($stripes);

            // Calculate how many complete patterns are required.
            $repeatCount = (int)ceil($patternSize / $patternWidth) + 2;

            for ($repeat = 0; $repeat < $repeatCount; $repeat++) {

                foreach ($stripes as $stripe) {

                    $currentStripeWidth = $diagonalStripeUnit
                        * ($stripe['ratio'] / $total);

                    $rectangles .= sprintf(
                        '<rect
                            x="%.2f"
                            y="0"
                            width="%.2f"
                            height="%.2f"
                            fill="%s"
                        />',
                        $x,
                        $currentStripeWidth + 0.02,
                        $patternSize,
                        e($stripe['hex'])
                    );

                    $x += $currentStripeWidth;
                }
            }

        } else {

            // Original vertical stripe rendering.

            $rectangles .= sprintf(
                '<rect
                    x="%.2f"
                    y="0"
                    width="%.2f"
                    height="%.2f"
                    fill="%s"
                />',
                $x,
                $stripeWidth + 0.02,
                $height,
                e($stripe['hex'])
            );

            if (!$RIBBON_ONLY) {
                if($suspension === 'ring'){

                    $rectangles .= sprintf(
                        '<polygon
                            points="%.2f,%.2f %.2f,%.2f %.2f,%.2f"
                            fill="%s"
                        />',
                        $x,
                        $height,
                        $x + $stripeWidth,
                        $height,
                        $width / 2,
                        $svgHeight,
                        e($stripe['hex'])
                    );

                    
                } else if ($suspension === 'bar'){
                    $rectangles .= sprintf(
                        '<polygon
                            points="%.2f,%.2f %.2f,%.2f %.2f,%.2f %.2f,%.2f"
                            fill="%s"
                        />',
                        $x,
                        $height,

                        $x + $stripeWidth,
                        $height,

                        $width,
                        $svgHeight,

                        $x,
                        $svgHeight,
                        e($stripe['hex'])
                    );
                }
            }
        }

        $x += $stripeWidth;
    }

    // =========================================================
    // DIAGONAL STRIPE ROTATION
    // =========================================================

    if ($diagonal) {

        $clipId = 'ribbon-clip-' . uniqid();
        if(!$RIBBON_ONLY){
            if($suspension === 'bar'){
                $clipPath = sprintf(
                    '<defs>
                        <clipPath id="%s">
                            <path d="
                                M 0 0
                                H %d
                                V %.2f
                                L 0 %.2f
                                Z
                            "/>
                        </clipPath>
                    </defs>',
                    $clipId,
                    $width,
                    $svgHeight,
                    $svgHeight,
                    $height
                );
                // echo $width . ' - ' . $height . ' - ' . $width / 2 . ' - ' . $svgHeight . ' - ' . $height;
                // m 0 0 
                // H 48
                // V 105
                // L 24 141.75
                // L 0 105
                // Z


            } else if ($suspension === 'ring'){
                $clipPath = sprintf(
                    '<defs>
                        <clipPath id="%s">
                            <path d="
                                M 0 0
                                H %d
                                V %.2f
                                L %.2f %d
                                L 0 %.2f
                                Z
                            "/>
                        </clipPath>
                    </defs>',
                    $clipId,
                    $width,
                    $height,
                    $width / 2,
                    $svgHeight,
                    $height
                );
            }
        } else {
             $clipPath = sprintf(
                '<defs>
                    <clipPath id="%s">
                        <rect width="%d" height="%d"/>
                    </clipPath>
                </defs>',
                $clipId,
                $width,
                $height
            );
        }
        
        // Clip to the actual ribbon silhouette.
        
        
       

        // Centre the oversized stripe pattern,
        // rotate it 45 degrees and clip to the ribbon.
        $rectangles = $clipPath . sprintf(
            '<g clip-path="url(#%s)">
                <g transform="translate(%.2f %.2f)">
                    <g transform="rotate(-45)">
                        <g transform="translate(%.2f %.2f)">
                            %s
                        </g>
                    </g>
                </g>
            </g>',
            $clipId,
            $width / 2,
            $svgHeight / 2,
            -$patternSize / 2,
            -$patternSize / 2,
            $rectangles
        );
    }

    // =========================================================
    // PERMANENT RIBBON DEVICES
    // =========================================================

    $deviceSvg = '';

    $permanentDevice = $ribbon['permanent_devices']['ribbon'] ?? null;

    if ($RIBBON_ONLY && $permanentDevice !== null) {

        $type = $permanentDevice['type'] ?? 'none';
        $colour = $permanentDevice['colour'] ?? '#C0C0C0';

        if ($type === 'amalfi_cross') {

            $size = min($height * 0.7, $width * 0.2);
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
                e($colour)
            );
        }
    }

    // =========================================================
    // DEVICE SELECTION
    // =========================================================

    $devices = [];

    if ($device !== null) {

        if ($RIBBON_ONLY) {

            // Ribbon only: use the first device.
            $devices = [reset($device)];

        } else {

            // Medal: use every device.
            foreach ($device as $childDevice) {
                $devices[$childDevice['name']] = $childDevice;
            }
        }
    }

    // =========================================================
    // RENDER EACH DEVICE
    // =========================================================

    $medalBarOffset = 0;

    foreach ($devices as $item) {

        $details = $RIBBON_ONLY
            ? ($item['ribbon'] ?? null)
            : ($item['medal'] ?? null);

        if ($details === null) {
            continue;
        }

        $type = $details['type'] ?? 'none';

        // =====================================================
        // AMALFI CROSS
        // =====================================================

        if ($type === 'amalfi_cross') {

            $count = (int)($details['count'] ?? 1);
            $colour = $details['colour'] ?? '#C0C0C0';

            $size = min($height * 0.7, $width * 0.2);
            $spacing = $size * 1.25;

            $positions = match ($count) {
                1 => [$width / 2],
                2 => [
                    ($width / 2) - ($spacing / 2),
                    ($width / 2) + ($spacing / 2)
                ],
                3 => [
                    $width / 2 - $spacing,
                    $width / 2,
                    $width / 2 + $spacing
                ],
                4 => [
                    $width / 2 - ($spacing * 1.5),
                    $width / 2 - ($spacing / 2),
                    $width / 2 + ($spacing / 2),
                    $width / 2 + ($spacing * 1.5)
                ],
                default => []
            };

            foreach ($positions as $cx) {

                $deviceSvg .= renderMalteseCross(
                    $cx,
                    $height / 2,
                    $size,
                    $colour
                );
            }
        }

        // =====================================================
        // ROSETTE
        // =====================================================

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

        // =====================================================
        // ARMY NUMERALS
        // =====================================================

        elseif ($type === 'numeral') {

            $numeral = $details['numeral'] ?? '';

            if (in_array($numeral, ['1', '8'], true)) {

                $fontSize = $height * 0.8;

                $deviceSvg .= sprintf(
                    '<text
                        x="%s"
                        y="%s"
                        text-anchor="middle"
                        dominant-baseline="central"
                        font-family="Arial, sans-serif"
                        font-size="%.2f"
                        font-weight="bold"
                        fill="#C0C0C0"
                        stroke="#777777"
                        stroke-width="0.6"
                        paint-order="stroke"
                    >%s</text>',
                    $width / 2,
                    $height / 2,
                    $fontSize,
                    e($numeral)
                );
            }
        }

        // =====================================================
        // MEDAL BAR
        // =====================================================

        elseif ($type === 'medal-bar') {

            $deviceSvg .= renderMedalBar(
                $details,
                $width,
                $height,
                $medalBarOffset
            );

            $medalBarOffset += max(
                1,
                (int)($details['count'] ?? 1)
            );
        }
    }

    // =========================================================
    // FINAL SVG
    // =========================================================

    return sprintf(
        '<svg xmlns="http://www.w3.org/2000/svg"
            class=""
            viewBox="0 0 %d %d"
            width="%d"
            height="%d">',
        $width,
        $svgHeight,
        $width,
        $svgHeight
    ) . $rectangles . $deviceSvg . '</svg>';
}


function renderMedalBar($details, $width, $height, $offset = 0) {

    $count = max(1, (int)($details['count'] ?? 1));
    $colour = $details['colour'] ?? '#C0C0C0';
    $text = $details['text'] ?? '';

    // Bar dimensions
    $barWidth = $width;
    $barHeight = max(3, $height * 0.08);

    // Spacing between bars
    $spacing = $barHeight * 1.5;

    // First bar positioned at 75% of ribbon height
    $startY = ($height * 0.75) - ($barHeight / 2);

    $svg = '';

    for ($i = 0; $i < $count; $i++) {

        // Account for previously rendered medal bars
        $y = $startY - (($offset + $i) * $spacing);

        $x = ($width - $barWidth) / 2;

        $fontSize = min(
            $barHeight * 0.65,
            ($barWidth * 2) / max(1, mb_strlen($text))
        );

        $svg .= sprintf(
            '<g>
                <rect
                    x="%.2f"
                    y="%.2f"
                    width="%.2f"
                    height="%.2f"
                    rx="1"
                    fill="%s"
                    stroke="#777777"
                    stroke-width="1"
                />
                <text
                    x="%.2f"
                    y="%.2f"
                    text-anchor="middle"
                    dominant-baseline="central"
                    font-family="Arial, sans-serif"
                    font-size="%.2f"
                    font-weight="bold"
                    fill="#FFFFFF"
                >%s</text>
            </g>',
            $x,
            $y,
            $barWidth,
            $barHeight,
            e($colour),
            $width / 2,
            $y + ($barHeight / 2),
            $fontSize,
            e($text)
        );
    }

    return $svg;
}


function renderMalteseCross(float $cx, float $cy, float $size, string $colour): string {

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

function renderRack($medals, $devices, $variants, $RIBBON_WIDTH, $RIBBON_HEIGHT, $SCALE, $RIBBONS_ONLY = false){
    $currentMedalCount = 0;
    $totalMedalCount = count($medals);
    $html = '';
    $html .= '  <div id="rackContent">';
    $html .= '<div class="row d-flex flex-row flex-nowrap align-items-center justify-content-center g-0">';
    if($totalMedalCount > 4 && $totalMedalCount%4 !== 0){
        $currentMedalCount = 4 - ($totalMedalCount%4);
    }

    foreach ($medals as $medalId => $medal) {
        
        $html .= '<div class="col-auto">';
        if(isset($medal['variants'])){
            $html .= renderRibbon($variants[$medalId][0]['ribbon'], $RIBBON_WIDTH * $SCALE, $RIBBON_HEIGHT * $SCALE, $RIBBONS_ONLY, $devices[$medalId] ?? null);
        } else {
            $html .= renderRibbon($medal['ribbon'], $RIBBON_WIDTH * $SCALE, $RIBBON_HEIGHT * $SCALE, $RIBBONS_ONLY, $devices[$medalId] ?? null);
        }
        $html .= '</div>';
        $currentMedalCount++;
        if($RIBBONS_ONLY && $currentMedalCount === 4 && $currentMedalCount < $totalMedalCount){
            $html .= '</div>';
            $html .= '<div class="row d-flex flex-row flex-nowrap align-items-center justify-content-center g-0">';
            $currentMedalCount = 0;
        }
    }
    $html .= '</div>';
    $html .= '</div>';
    return $html;
}

function renderRibbonRack($medals, $devices, $variants, $RIBBON_WIDTH, $RIBBON_HEIGHT_SHORT, $SCALE,){
    return renderRack($medals, $devices, $variants, $RIBBON_WIDTH, $RIBBON_HEIGHT_SHORT, $SCALE, true);
}

function renderMedalRack($medals, $devices, $variants, $RIBBON_WIDTH, $RIBBON_HEIGHT_FULL, $SCALE){
    return renderRack($medals, $devices, $variants, $RIBBON_WIDTH, $RIBBON_HEIGHT_FULL, $SCALE, false);
}

function renderMedalText($medals){
    return implode(', ', array_map(function ($medalId) use ($medals) {

        $name = $medals[$medalId]['name'];
        
        // if (isset($selectedDevices[$medalId]) && $selectedDevices[$medalId]['type'] !== 'none') {

        //     $name .= ' (' . $selectedDevices[$medalId]['name'] . ')';
        // }

        return e($name);

    }, array_keys($medals)));
}

function openElement(string $element, string $id, string $class, string $datatags, string $for){
    return '<' . $element . ' id="' . $id . '" class="' . $class . '">';
}

function closeElement(string $element){
    return '</' . $element . '>';
}

function fullElement(string $element, string $id, string $class, string $datatags, string $for, string $content){
    return openElement($element, $id, $class, $datatags, $for) . $content . closeElement($element);
}

function renderMedalCard($medal, $medalId, $RIBBON_WIDTH, $RIBBON_HEIGHT_SHORT, $SCALE, $selected, $selectedDevices, $selectedVariants) {
    $html = '';

    $html .= '<div class="col medal-item" data-tags="' . e(implode(',', $medal['tags'] ?? [])) . '">';
    $html .= '<label class="card h-100" for="medal_' . e($medalId) . '">';

    // =====================================================
    // CARD HEADER
    // =====================================================

    $html .= '<div class="card-header medal-card-header">';
    $html .= '<div class="d-flex justify-content-between align-items-start">';
    if(isset($medal['variants']) && is_array($medal['variants'])){
        foreach($medal['variants'] as $variant){
            $html .= renderRibbon(
                $variant['ribbon'],
                $RIBBON_WIDTH * $SCALE,
                $RIBBON_HEIGHT_SHORT * $SCALE,
                true,
                null
            );
        }
    } else {
    $html .= renderRibbon(
        $medal['ribbon'],
        $RIBBON_WIDTH * $SCALE,
        $RIBBON_HEIGHT_SHORT * $SCALE,
        true,
        null
    );
    }
    $html .= '<input'
        . ' type="checkbox"'
        . ' class="check"'
        . ' id="medal_' . e($medalId) . '"'
        . ' name="selected[]"'
        . ' value="' . e($medalId) . '"'
        . ' data-medal-select'
        . ' data-medal-id="' . e($medalId) . '"'
        . ($selected ? ' checked' : '')
        . '>';
    $html .= '</div>';
    $html .= '</div>';

    // =====================================================
    // CARD BODY
    // =====================================================

    $html .= '<div class="card-body d-flex flex-column">';
    $html .= '<h4 class="card-title">' . e($medal['name']) . '</h4>';
    $html .= '<p class="card-text"><small>' . e($medal['description']) . '</small></p>';
    $html .= '</div>';

    
    // -------------------------------------------------
    // List Group at Bottom
    // -------------------------------------------------
    if (isset($medal['devices']) || isset($medal['variants'])) {
        $html .= '<ul class="list-group list-group-flush">';

        // =====================================================
        // Medal Variants
        // =====================================================

        if(isset($medal['variants'])){

            $html .= '<li class="list-group-item">';
                $html .= '<div class="form-field">';

                $html .= '<select'
                    . ' class="form-select w-100"'
                    . ' style="min-width: 0;"'
                    . ' id="device_' . e($medalId) . '"'
                    . ' name="variants[' . e($medalId) . ']"'
                    . ' data-device-select'
                    . ' data-medal-id="' . e($medalId) . '"'
                    . '>';

                foreach ($medal['variants'] as $variantId => $variant) {
                    // Determine whether this variant is selected.
                    $isSelected = false;

                    if (isset($selectedDevices[$medalId])) {

                        $selectedValues = (array) $selectedVariants[$medalId];

                        // Support both device IDs and the existing device arrays.
                        $isSelected = in_array($variantId, $selectedValues, true)
                            || in_array($variant, $selectedValues, true);

                    }

                    $html .= '<option'
                        . ' value="' . e($variantId) . '"'
                        . ($isSelected ? ' selected' : '')
                        . '>'
                        . e($variant['name'])
                        . '</option>';

                }

                $html .= '</select>';
                $html .= '</div>';
                $html .= '</li>';

        }

        // =====================================================
        // MEDAL DEVICES
        // =====================================================

        if (isset($medal['devices'])) {

            if (!empty($medal['devices']['multiple'])) {

                // -------------------------------------------------
                // MULTIPLE DEVICE CHECKBOXES
                // -------------------------------------------------

                foreach ($medal['devices']['options'] as $deviceId => $device) {

                    if (
                        ($device['ribbon']['type'] ?? null) === 'none' &&
                        ($device['medal']['type'] ?? null) === 'none'
                    ) {
                        continue;
                    }
                    
                    // Determine whether this device is selected.
                    $checked = false;

                    if (isset($selectedDevices[$medalId])) {
                        
                        $selectedValues = (array) $selectedDevices[$medalId];

                        $checked = in_array(
                            $device['name'],
                            array_column($selectedValues, 'name'),
                            true
                        );

                    } elseif ($deviceId === 'none') {

                        $checked = true;

                    }

                    $html .= '<li class="list-group-item">';
                    $html .= '<div class="form-field">';

                    $html .= '<input type="checkbox"'
                        . ' class="check"'
                        . ' id="device_list_' . e($medalId) . '_' . e($deviceId) . '"'
                        . ' name="devices[' . e($medalId) . '][]"'
                        . ' value="' . e($deviceId) . '"'
                        . ' data-device-select'
                        . ' data-medal-id="' . e($medalId) . '"'
                        . ($checked ? ' checked' : '')
                        . '>';

                    $html .= '<label for="device_list_' . e($medalId) . '_' . e($deviceId) . '">'
                        . '<small>' . e($device['name']) . '</small>'
                        . '</label>';

                    $html .= '</div>';
                    $html .= '</li>';

                }

            } else {

                // -------------------------------------------------
                // SINGLE DEVICE DROPDOWN
                // -------------------------------------------------

                $html .= '<li class="list-group-item">';
                $html .= '<div class="form-field">';

                $html .= '<select'
                    . ' class="form-select w-100"'
                    . ' style="min-width: 0;"'
                    . ' id="device_' . e($medalId) . '"'
                    . ' name="devices[' . e($medalId) . ']"'
                    . ' data-device-select'
                    . ' data-medal-id="' . e($medalId) . '"'
                    . '>';

                foreach ($medal['devices']['options'] as $deviceId => $device) {

                    // Determine whether this device is selected.
                    $isSelected = false;

                    if (isset($selectedDevices[$medalId])) {

                        $selectedValues = (array) $selectedDevices[$medalId];

                        // Support both device IDs and the existing device arrays.
                        $isSelected = in_array($deviceId, $selectedValues, true)
                            || in_array($device, $selectedValues, true);

                    } elseif ($deviceId === 'none') {

                        $isSelected = true;

                    }

                    $html .= '<option'
                        . ' value="' . e($deviceId) . '"'
                        . ($isSelected ? ' selected' : '')
                        . '>'
                        . e($device['name'])
                        . '</option>';

                }

                $html .= '</select>';
                $html .= '</div>';
                $html .= '</li>';

            }

        }
        $html .= '</ul>';
    }

    // =====================================================
    // CARD FOOTER
    // =====================================================

    $html .= '<div class="card-footer fg-2">';
    $html .= '<div class="d-flex justify-content-between align-items-start">';

    if (empty($medal['tags'])) {

        $html .= 'No Tags';

    } else {

        foreach ($medal['tags'] as $tag) {

            $html .= '<span class="badge badge-outline theme-primary">'
                . e($tag)
                . '</span>';

        }

    }

    $html .= '</div>';
    $html .= '</div>';

    $html .= '</label>';
    $html .= '</div>';

    return $html;

}