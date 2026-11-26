function scaleMedalRackNew() {
    document.querySelectorAll('.rack-content').forEach(container => {
        const ribbons = container.querySelectorAll('svg');

        const medalsPerRow = 4;
        const columns = Math.min(ribbons.length, medalsPerRow);

        const ribbonWidth = 160;

        const availableWidth = container.parentElement.clientWidth;

        const requiredWidth = columns * ribbonWidth;

        const scale = Math.min(1, availableWidth / requiredWidth);

        container.style.setProperty('--rack-scale', scale);
    });
}


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
// window.addEventListener('load', scaleMedalRack);

// Recalculate when browser is resized
// window.addEventListener('resize', scaleMedalRack);

window.addEventListener('resize', scaleMedalRackNew);
window.addEventListener('load', scaleMedalRackNew);

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

    const selectedTab = document.querySelector('.tab-pane.active');
    console.log(selectedTab.id);

    if(selectedTab.id == 'ribbon-rack-pane'){
        const rack = document.getElementById('ribbon-rack-pane');
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
    } else if (selectedTab.id == 'medal-rack-pane') {

        const rack = document.getElementById('medal-rack-pane');
        const button = this;

        button.disabled = true;
        button.textContent = 'Exporting...';

        try {

            // Find all medal SVGs
            const medals = Array.from(rack.querySelectorAll('svg'));

            if (medals.length === 0) {
                alert('There are no medals to export.');
                return;
            }

            // Export dimensions
            const medalHeight = 190;
            const gap = 0;
            const padding = 40;

            // Calculate each medal's dimensions using its viewBox
            const medalDimensions = medals.map(medal => {

                const viewBox = medal.viewBox.baseVal;

                const aspectRatio = viewBox.width / viewBox.height;

                return {
                    width: medalHeight * aspectRatio,
                    height: medalHeight
                };

            });

            // Calculate total rack width
            const width = medalDimensions.reduce(
                (total, medal) => total + medal.width,
                0
            ) + (gap * (medals.length - 1)) + (padding * 2);

            const height = medalHeight + (padding * 2);

            // Start the SVG
            let svg = `
                <svg xmlns="http://www.w3.org/2000/svg"
                    width="${width}"
                    height="${height}"
                    viewBox="0 0 ${width} ${height}">

                    <rect width="100%" height="100%" fill="#ffffff"/>
            `;

            let currentX = padding;

            medals.forEach((medal, index) => {

                const dimensions = medalDimensions[index];

                const medalSvg = medal.cloneNode(true);

                medalSvg.setAttribute('x', currentX);
                medalSvg.setAttribute('y', padding);
                medalSvg.setAttribute('width', dimensions.width);
                medalSvg.setAttribute('height', dimensions.height);
                medalSvg.setAttribute('preserveAspectRatio', 'xMidYMid meet');

                svg += new XMLSerializer().serializeToString(medalSvg);

                currentX += dimensions.width + gap;

            });

            // Close SVG
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

                    button.disabled = false;
                    button.textContent = 'Export as Image';

                }, 'image/png');

            };

            image.onerror = function (event) {

                URL.revokeObjectURL(url);

                console.error('Failed to load medal rack SVG:', event);
                console.log('Generated SVG:', svg);

                alert('Unable to render the medal rack.');

                button.disabled = false;
                button.textContent = 'Export as Image';

            };

            image.src = url;

        } catch (error) {

            console.error('Image export failed:', error);
            alert('Unable to export the medal rack.');

            button.disabled = false;
            button.textContent = 'Export as Image';

        }

    }
    // } else if (selectedTab.id == 'medal-rack-pane'){
    //     const rack = document.getElementById('medal-rack-pane');
    //     const button = this;

    //     button.disabled = true;
    //     button.textContent = 'Exporting...';

    //     try {

    //         // Find all ribbon SVGs
    //         const ribbons = Array.from(rack.querySelectorAll('svg'));

    //         if (ribbons.length === 0) {
    //             alert('There are no medals to export.');
    //             return;
    //         }

    //         // Export dimensions
    //         const ribbonWidth = 160;
    //         const ribbonHeight = 50;
    //         const gap = 0;
    //         // const medalsPerRow = 4;
    //         const padding = 40;

    //         // const rows = Math.ceil(ribbons.length / medalsPerRow);

    //         // Number of medals in the incomplete top row.
    //         // const topRowCount = ribbons.length % medalsPerRow || medalsPerRow;

    //         // Calculate export dimensions.
    //         const width = Math.max(
    //             400,
    //             // medalsPerRow * ribbonWidth + padding * 2
    //             ribbons.length * ribbonWidth
    //         );

    //         const height = 1 * ribbonHeight + padding * 2;
    //         // const height = rows * ribbonHeight

    //         // Start the SVG.
    //         let svg = `
    //             <svg xmlns="http://www.w3.org/2000/svg"
    //                 width="${width}"
    //                 height="${height}"
    //                 viewBox="0 0 ${width} ${height}">

    //                 <rect width="100%" height="100%" fill="#ffffff"/>
    //         `;

    //         // Build row sizes: incomplete row first, then complete rows.
    //         const rowSizes = [topRowCount];

    //         for (let i = 1; i < rows; i++) {
    //             rowSizes.push(medalsPerRow);
    //         }

    //         let medalIndex = 0;

    //         rowSizes.forEach((count, row) => {
    //             const rowWidth = count * ribbonWidth;
    //             const startX = (width - rowWidth) / 2;

    //             for (let column = 0; column < count; column++) {
    //                 const ribbon = ribbons[medalIndex];

    //                 const x = startX + (column * ribbonWidth);
    //                 const y = padding + (row * ribbonHeight);

    //                 const ribbonSvg = ribbon.cloneNode(true);
    //                 ribbonSvg.setAttribute('x', x);
    //                 ribbonSvg.setAttribute('y', y);
    //                 ribbonSvg.setAttribute('width', ribbonWidth);
    //                 ribbonSvg.setAttribute('height', ribbonHeight);

    //                 svg += new XMLSerializer().serializeToString(ribbonSvg);
    //                 medalIndex++;
    //             }
    //         });

    //         // Close the SVG.
    //         svg += '</svg>';

    //         // Convert SVG to image
    //         const blob = new Blob(
    //             [svg],
    //             { type: 'image/svg+xml;charset=utf-8' }
    //         );

    //         const url = URL.createObjectURL(blob);

    //         const image = new Image();

    //         image.onload = function () {

    //             const canvas = document.createElement('canvas');

    //             canvas.width = width * 3;
    //             canvas.height = height * 3;

    //             const context = canvas.getContext('2d');

    //             context.scale(3, 3);
    //             context.fillStyle = '#ffffff';
    //             context.fillRect(0, 0, width, height);

    //             context.drawImage(image, 0, 0);

    //             URL.revokeObjectURL(url);

    //             // Download PNG
    //             canvas.toBlob(function (pngBlob) {

    //                 if (!pngBlob) {
    //                     alert('Unable to generate PNG.');
    //                     return;
    //                 }

    //                 const downloadUrl = URL.createObjectURL(pngBlob);

    //                 const link = document.createElement('a');
    //                 link.href = downloadUrl;
    //                 link.download = 'medal-rack.png';

    //                 link.click();

    //                 URL.revokeObjectURL(downloadUrl);

    //             }, 'image/png');

    //         };

    //         image.onerror = function (event) {
    //             URL.revokeObjectURL(url);

    //             console.error('Failed to load medal rack SVG:', event);
    //             console.log('Generated SVG:', svg);

    //             const parser = new DOMParser();
    //             const document = parser.parseFromString(svg, 'image/svg+xml');
    //             const error = document.querySelector('parsererror');

    //             if (error) {
    //                 console.error('SVG XML parsing error:', error.textContent);
    //             } else {
    //                 console.log('SVG XML parsed successfully.');
    //             }

    //             alert('Unable to render the medal rack. Check the console for details.');
    //         };

    //         image.src = url;

    //     } catch (error) {

    //         console.error('Image export failed:', error);
    //         alert('Unable to export the medal rack.');

    //     } finally {

    //         button.disabled = false;
    //         button.textContent = 'Export as Image';

    //     }
    // }
    

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


// =========================================================
// MEDAL ENTITLEMENT RULES
// =========================================================

(function () {

    const form = document.getElementById('medalForm');

    if (!form || !window.medalRules) {
        return;
    }

    /**
     * Find the entitlement rule containing a medal.
     */
    function getMedalRule(medalId) {

        for (const [ruleId, rule] of Object.entries(window.medalRules)) {

            if (rule.members.includes(medalId)) {
                return {
                    id: ruleId,
                    ...rule
                };
            }

        }

        return null;
    }

    /**
     * Find a medal's selection checkbox.
     */
    function getMedalCheckbox(medalId) {

        return form.querySelector(
            `[data-medal-select][data-medal-id="${medalId}"]`
        );

    }

    /**
     * Find a medal's single device dropdown.
     */
    function getDeviceSelect(medalId) {

        return form.querySelector(
            `select[data-device-select][data-medal-id="${medalId}"]`
        );

    }

    /**
     * Get the selected medals belonging to a rule.
     */
    function getSelectedRuleMedals(rule) {

        return Array.from(
            form.querySelectorAll('[data-medal-select]:checked')
        ).filter(checkbox =>
            rule.members.includes(checkbox.dataset.medalId)
        );

    }

    /**
     * Reset a medal's device dropdown.
     */
    function resetDevice(medalId) {

        const deviceSelect = getDeviceSelect(medalId);

        if (deviceSelect) {

            deviceSelect.value = 'none';

            deviceSelect.dispatchEvent(
                new Event('change', { bubbles: true })
            );

        }

    }

    /**
     * Handle medal selection changes.
     */
    form.addEventListener('change', function (event) {

        const checkbox = event.target;

        // Only handle medal selection checkboxes.
        if (!checkbox.matches('[data-medal-select]')) {
            return;
        }

        const medalId = checkbox.dataset.medalId;
        const rule = getMedalRule(medalId);

        // Medal is not part of an entitlement group.
        if (!rule) {
            return;
        }

        const selectedMedals = getSelectedRuleMedals(rule);

        // -------------------------------------------------
        // MEDAL DESELECTED
        // -------------------------------------------------

        if (!checkbox.checked) {

            resetDevice(medalId);

            return;
        }

        // -------------------------------------------------
        // FIRST MEDAL SELECTED
        // -------------------------------------------------

        if (selectedMedals.length === 1) {
            return;
        }

        // -------------------------------------------------
        // SECOND MEDAL SELECTED
        // -------------------------------------------------

        // The previously selected medal becomes primary.
        const primaryCheckbox = selectedMedals.find(
            item => item !== checkbox
        );

        if (!primaryCheckbox) {

            checkbox.checked = false;

            return;
        }

        const primaryMedalId = primaryCheckbox.dataset.medalId;

        // Find the appropriate clasp for this combination.
        const claspId =
            rule.clasp_mappings?.[primaryMedalId]?.[medalId];

        // This combination is not historically permitted.
        if (!claspId) {

            checkbox.checked = false;

            alert(
                'This combination of campaign stars is not permitted.'
            );

            return;
        }

        // Find the primary medal's device dropdown.
        const deviceSelect = getDeviceSelect(primaryMedalId);

        if (!deviceSelect) {

            checkbox.checked = false;

            console.error(
                'Could not find device dropdown for:',
                primaryMedalId
            );

            return;
        }

        // Ensure the primary medal does not already have a clasp.
        if (deviceSelect.value !== 'none') {

            checkbox.checked = false;

            alert(
                'Only one additional campaign star clasp is permitted.'
            );

            return;
        }

        // Check that the required clasp exists.
        const claspOption = Array.from(deviceSelect.options).find(
            option => option.value === claspId
        );

        if (!claspOption) {

            checkbox.checked = false;

            console.error(
                'Clasp option "' + claspId +
                '" does not exist for ' + primaryMedalId
            );

            alert(
                'The required clasp is not available for this medal.'
            );

            return;
        }

        // -------------------------------------------------
        // APPLY CLASP
        // -------------------------------------------------

        // Apply the clasp to the first selected medal.
        deviceSelect.value = claspId;

        deviceSelect.dispatchEvent(
            new Event('change', { bubbles: true })
        );

        // Deselect the second medal because it is represented
        // by the clasp on the primary medal.
        checkbox.checked = false;

        console.log(
            'Medal entitlement applied:',
            primaryMedalId,
            '+',
            medalId,
            '=>',
            claspId
        );

    });

})();
