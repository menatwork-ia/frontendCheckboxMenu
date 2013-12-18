var ExtCheckboxMenu = new Object;

// Check if we have mootools
if (window.MooTools) {
    ExtCheckboxMenu.mode = 'MooTools';
    /**
     * Toggle checkbox group
     * @param object
     * @param string
     */
    ExtCheckboxMenu.toggle = function(el, id) {
        var $ = document.id;
        var cls = $(el).className;
        var status = $(el).checked ? 'checked' : '';

        if (cls === 'checkbox')
        {
            var cbx = $(id) ? $$('#' + id + ' .checkbox') : $(el).getParent('fieldset').getElements('.checkbox');
            cbx.each(function(checkbox) {
                checkbox.checked = status;
            });
        }
        else if (cls === 'tree_checkbox')
        {
            $$('#' + id + ' .parent .tree_checkbox').each(function(checkbox) {
                checkbox.checked = status;
            });
        }
    };
}
// check if we have jQuery
else if (window.jQuery) {
    /**
     * Set the running mode.
     */
    ExtCheckboxMenu.mode = 'jQuery';

    /**
     * Toggle checkbox group
     * @param object
     * @param string
     */
    ExtCheckboxMenu.toggle = function(el, id) {

    };
}