<?php
/**
 * #start-tng-a11y
 * Remove `tabindex="0"` on the `label`
 * Replace the `div` by a `span` because it's in a `label` inline element
 * Add `aria-hidden="true"` attribute on the `svg` element
 */
?>
<label for="{id}"><input type="checkbox" id="{id}" class="cmplz-consent-checkbox cmplz-svg-checkbox cmplz-square-checkbox cmplz_{category}" {checked} {disabled} data-category="cmplz_{category}"><span class="cc-check"><svg width="16px" height="16px" viewBox="0 0 18 18" class="cmplz-square" aria-hidden="true"><path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path><polyline points="1 9 7 14 15 4"></polyline></svg></span><span class="cc-category" style="{color}">{label}</span></label>
<?php
/** #end-tng-a11y */
?>
