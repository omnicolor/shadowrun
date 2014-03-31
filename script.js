/**
 * @type {Object}
 */
var sr = {};

/**
 * @type {Number} Amount of special points the character starts with based on
 * their race priority.
 */
sr.specialPointTotal;

/**
 * @type {Number} Amount of resonance the character gets based on their magic or
 * resonance priority choice.
 */
sr.freeResonance = 0;

/**
 * @type {Number} Amount of magic rating the character gets based on their magic
 * or resonance priority choice.
 */
sr.freeMagic = 0;

/**
 * @type {Number} Amount of free edge the character gets based on their race.
 */
sr.freeEdge = 1;

/**
 * @type {Number} Number of "free" attribute points character gets for race.
 */
sr.freeAttributePoints = 0;

/**
 * @type {Number} Number of attribute points from priority.
 */
sr.attributePoints = 0;

/**
 * Set up all of the required handlers.
 */
sr.setupHandlers = function setupHandlers() {
    $('.priority tbody').on('click', sr.handlePriorityClick);
    $('#agility').on('change', sr.updateAttributePoints);
    $('#body').on('change', sr.updateLift);
    $('#body').on('change', sr.updateAttributePoints);
    $('#charisma').on('change', sr.updateComposure);
    $('#charisma').on('change', sr.updateJudgeIntentions);
    $('#charisma').on('change', sr.updateAttributePoints);
    $('#edge').on('change', sr.updateSpecialPoints);
    $('#intuition').on('change', sr.updateJudgeIntentions);
    $('#intuition').on('change', sr.updateInitiative);
    $('#intuition').on('change', sr.updateAttributePoints);
    $('#logic').on('change', sr.updateMemory);
    $('#logic').on('change', sr.updateAttributePoints);
    $('#magic').on('change', sr.updateSpecialPoints);
    $('#reaction').on('change', sr.updateInitiative);
    $('#reaction').on('change', sr.updateAttributePoints);
    $('#strength').on('change', sr.updateLift);
    $('#strength').on('change', sr.updateAttributePoints);
    $('#willpower').on('change', sr.updateComposure);
    $('#willpower').on('change', sr.updateMemory);
    $('#willpower').on('change', sr.updateAttributePoints);

    $('input[name="race"]').on('change', sr.updateRacePriority);
};

/**
 * Handle the user clicking into a priority row or column.
 * @param {Event} e
 */
sr.handlePriorityClick = function handlePriorityClick(e) {
    var cell;
    if ('TD' !== e.target.tagName) {
        // If the user clicked on a race, we need to cause the whole cell to
        // get selected.
        e.target = $(e.target).parent()[0];
    }
    cell = e.target;
    sr.changeRowSelection(cell);
    sr.changeColumnSelection(cell);
    if (0 === cell.id.indexOf('attributes-')) {
        sr.updateAttributes(cell);
    }
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

/**
 * Update a character's attribute points when selecting the attribute priority.
 * @param {Object} cell
 */
sr.updateAttributes = function updateAttributes(cell) {
    var priority = cell.id.slice(-1);
    var attributes = {
        a: 24,
        b: 20,
        c: 16,
        d: 14,
        e: 12
    };
    sr.attributePoints = attributes[priority];
    sr.updateAttributePoints();
};

/**
 * Update the number of attribute points a character has to spend.
 */
sr.updateAttributePoints = function updateAttributePoints() {
    // Character gets their attribute priority points + the "free" points from
    // their racial minimums.
    var points = sr.attributePoints + sr.freeAttributePoints;

    var attributes = [
        'body', 'agility', 'reaction', 'strength', 'willpower', 'logic',
        'intuition', 'charisma'
    ];
    var pointsEl = $('#attribute-points')[0];
    var attributeEl;
    attributes.forEach(function(attribute) {
        attributeEl = $('#' + attribute)[0];
        points -= parseInt(attributeEl.value, 10);
    });
    pointsEl.value = points;
};

/**
 * Update a character's composure when one of its base stats changes.
 */
sr.updateComposure = function updateComposure() {
    var charisma = parseInt($('#charisma').val(), 10);
    var willpower = parseInt($('#willpower').val(), 10);
    var composureEl = $('#composure');
    if (isNaN(charisma) || isNaN(willpower)) {
        composureEl.val('');
        return;
    }
    composureEl.val(charisma + willpower);
};

/**
 * Update a character's judge intentions rating when one of its base stats
 * change.
 */
sr.updateJudgeIntentions = function updateJudgeIntentions() {
    var charisma = parseInt($('#charisma').val(), 10);
    var intuition = parseInt($('#intuition').val(), 10);
    var judgeEl = $('#judge-intentions');
    if (isNaN(charisma) || isNaN(intuition)) {
        judgeEl.val('');
        return;
    }
    judgeEl.val(charisma + intuition);
};

/**
 * Update a character's lift/carry rating when one of its base stats change.
 */
sr.updateLift = function updateLift() {
    var strength = parseInt($('#strength').val(), 10);
    var body = parseInt($('#body').val(), 10);
    var liftEl = $('#lift');
    if (isNaN(strength) || isNaN(body)) {
        liftEl.val('');
        return;
    }
    liftEl.val(strength + body);
};

/**
 * Update a character's memory rating when its base stats change.
 */
sr.updateMemory = function updateMemory() {
    var logic = parseInt($('#logic').val(), 10);
    var willpower = parseInt($('#willpower').val(), 10);
    var memoryEl = $('#memory');
    if (isNaN(logic) || isNaN(willpower)) {
        memoryEl.val('');
        return;
    }
    memoryEl.val(logic + willpower);
};

/**
 * Update a character's initiative when its base stats change.
 */
sr.updateInitiative = function updateInitiative() {
    var intuition = parseInt($('#intuition').val(), 10);
    var reaction = parseInt($('#reaction').val(), 10);
    var initiativeEl = $('#initiative');
    if (isNaN(intuition) || isNaN(reaction)) {
        initiativeEl.val('');
        return;
    }
    initiativeEl.val(intuition + reaction);
};

/**
 * Update race-related limits and special attributes when the user selects a
 * race.
 * @param {Event} e
 */
sr.updateRacePriority = function updateRace(e) {
    var race = $(e.target).val().slice(0, -2);
    var priority = $(e.target).val().slice(-1);
    sr.updateAttributeLimits(race);
    sr.updateSpecialPointTotal(race, priority);
};

/**
 * Update how many special points the character has remaining.
 */
sr.updateSpecialPoints = function updateSpecialPoints(e) {
    var edge = parseInt($('#edge').val(), 10);
    var magic = parseInt($('#magic').val(), 10);
    var resonance = parseInt($('#resonance').val(), 10);
    var specialPointsEl = $('#special-points');
    var points;

    if (isNaN(edge)) {
        edge = 0;
    }
    if (isNaN(magic)) {
        magic = 0;
    }
    if (isNaN(resonance)) {
        resonance = 0;
    }

    points = sr.specialPointTotal
        - edge + sr.freeEdge
        - magic + sr.freeMagic
        - resonance + sr.freeResonance;
    specialPointsEl.val(points);
};

/**
 * Update the min and max values for attributes based on a chosen race.
 * @param {string} race Race the user chose
 */
sr.updateAttributeLimits = function updateAttributeLimits(race) {
    var limits = {
        dwarf: {
            agility: { max: 6, min: 1 },
            body: { max: 8, min: 3 },
            charisma: { max: 6, min: 1 },
            edge: { max: 6, min: 1 },
            intuition: { max: 6, min: 1 },
            logic: { max: 6, min: 1 },
            reaction: { max: 5, min: 1 },
            strength: { max: 8, min: 3 },
            willpower: { max: 7, min: 2 }
        },
        elf: {
            agility: { max: 7, min: 2 },
            body: { max: 6, min: 1 },
            charisma: { max: 8, min: 3 },
            edge: { max: 6, min: 1 },
            intuition: { max: 6, min: 1 },
            logic: { max: 6, min: 1 },
            reaction: { max: 6, min: 1 },
            strength: { max: 6, min: 1 },
            willpower: { max: 6, min: 1 }
        },
        human: {
            agility: { max: 6, min: 1 },
            body: { max: 6, min: 1 },
            charisma: { max: 6, min: 1 },
            edge: { max: 7, min: 2 },
            intuition: { max: 6, min: 1 },
            logic: { max: 6, min: 1 },
            reaction: { max: 6, min: 1 },
            strength: { max: 6, min: 1 },
            willpower: { max: 6, min: 1 }
        },
        ork: {
            agility: { max: 6, min: 1 },
            body: { max: 9, min: 4 },
            charisma: { max: 5, min: 1 },
            edge: { max: 6, min: 1 },
            intuition: { max: 6, min: 1 },
            logic: { max: 5, min: 1 },
            reaction: { max: 6, min: 1 },
            strength: { max: 8, min: 3 },
            willpower: { max: 6, min: 1 }
        },
        troll: {
            agility: { max: 5, min: 1 },
            body: { max: 10, min: 5 },
            charisma: { max: 4, min: 1 },
            edge: { max: 6, min: 1 },
            intuition: { max: 5, min: 1 },
            logic: { max: 5, min: 1 },
            reaction: { max: 6, min: 1 },
            strength: { max: 10, min: 5 },
            willpower: { max: 6, min: 1 }
        }
    };
    var raceLimits = limits[race];
    var input;
    sr.freeAttributePoints = 0;

    for (attribute in raceLimits) {
        input = $('#' + attribute)[0];
        input.max = raceLimits[attribute]['max'];
        input.min = raceLimits[attribute]['min'];
        input.value = raceLimits[attribute]['min'];
        if (attribute !== 'edge') {
            sr.freeAttributePoints += raceLimits[attribute]['min'];
        }
        $(input).trigger('change');
    }
    input = $('#edge').val(raceLimits['edge']['min']);
};

/**
 * Update the number of points the user gets to spend on magic, edge, or
 * resonance based on their race and priority.
 * @param {string} race Race the user chose
 * @param {string} priority Priority level the race was chosen at
 */
sr.updateSpecialPointTotal = function updateSpecialPointTotal(race, priority) {
    var points = {
        dwarf: { a: 7, b: 4, c: 1 },
        elf: { a: 8, b: 6, c: 3, d: 0 },
        human: { a: 9, b: 7, c: 5, d: 3, e: 1 },
        ork: { a: 7, b: 4, c: 0 },
        troll: { a: 5, b: 0 }
    };
    var specialPointsEl = $('#special-points');
    sr.specialPointTotal = points[race][priority];
    specialPointsEl.val(sr.specialPointTotal);
    sr.updateSpecialPoints();
};

$(document).ready(sr.setupHandlers);
