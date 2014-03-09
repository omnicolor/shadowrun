/**
 * @type {Object}
 */
var sr = {};

/**
 * Set up all of the required handlers.
 */
sr.setupHandlers = function setupHandlers() {
    $('.priority tbody').on('click', sr.handlePriorityClick);
    //$('.priority input').on('click', sr.handlePriorityClick);
    //$('.priority label').on('click', sr.handlePriorityClick);
};

/**
 * Handle the user clicking into a priority row or column.
 * @param {Event} e
 */
sr.handlePriorityClick = function handlePriorityClick(e) {
    var cell = e.target;
    if ('TD' !== e.target.tagName) {
        e.target = $(e.target).parent();
    }
    window.console.log(e.target);
    sr.changeRowSelection(cell);
    sr.changeColumnSelection(cell);
};

/**
 * Unselects all other cells in the row, selects the selected one.
 * @param {Object} cell
 */
sr.changeRowSelection = function changeRowSelection(cell) {
    var $cell = $(cell);
    $cell.parent().children().removeClass('selected');
    $cell.addClass('selected');
};

/**
 * Looks through priority column and unselects any other rows selected in that
 * column.
 * @param {Object} cell
 */
sr.changeColumnSelection = function changeColumnSelection(cell) {
    var base = cell.id.slice(0, -1);
    var $cell;
    var $priority;
    for (var i in {a: 1, b: 1, c: 1, d: 1, e: 1}) {
        if (base + i === cell.id) {
            // Given cell is the one that was clicked.
            continue;
        }
        $cell = $('#' + base + i);
        if (!$cell.hasClass('selected')) {
            // Given cell hasn't otherwise been selected.
            continue;
        }
        // Cell was selected, unselect it and reselect that row's priority
        // column.
        $priority = $('#priority-' + i);
        $cell.removeClass('selected');
        $priority.addClass('selected');
    }
};

$(document).ready(sr.setupHandlers);
