/**
 * @type {Object}
 */
var sr = {};

/**
 * @type {Number} Amount of special points the character starts with based on
 * their race priority.
 */
sr.specialPointTotal = 0;

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
 * @type {Number} Amount of karma the user has to play with.
 */
sr.karma = 25;

/**
 * @type {Object}
 */
sr.selectedQualties = {};

/**
 * @type {{dwarf: {agility: {max: number, min: number}, body: {max: number, min: number}, charisma: {max: number, min: number}, edge: {max: number, min: number}, intuition: {max: number, min: number}, logic: {max: number, min: number}, reaction: {max: number, min: number}, strength: {max: number, min: number}, willpower: {max: number, min: number}}, elf: {agility: {max: number, min: number}, body: {max: number, min: number}, charisma: {max: number, min: number}, edge: {max: number, min: number}, intuition: {max: number, min: number}, logic: {max: number, min: number}, reaction: {max: number, min: number}, strength: {max: number, min: number}, willpower: {max: number, min: number}}, human: {agility: {max: number, min: number}, body: {max: number, min: number}, charisma: {max: number, min: number}, edge: {max: number, min: number}, intuition: {max: number, min: number}, logic: {max: number, min: number}, reaction: {max: number, min: number}, strength: {max: number, min: number}, willpower: {max: number, min: number}}, ork: {agility: {max: number, min: number}, body: {max: number, min: number}, charisma: {max: number, min: number}, edge: {max: number, min: number}, intuition: {max: number, min: number}, logic: {max: number, min: number}, reaction: {max: number, min: number}, strength: {max: number, min: number}, willpower: {max: number, min: number}}, troll: {agility: {max: number, min: number}, body: {max: number, min: number}, charisma: {max: number, min: number}, edge: {max: number, min: number}, intuition: {max: number, min: number}, logic: {max: number, min: number}, reaction: {max: number, min: number}, strength: {max: number, min: number}, willpower: {max: number, min: number}}}}
 */
sr.metatypeAttributeLimits = {
    dwarf: {
        agility: { max: 6, min: 1 },
        body: { max: 8, min: 3 },
        charisma: { max: 6, min: 1 },
        edge: { max: 6, min: 1 },
        intuition: { max: 6, min: 1 },
        logic: { max: 6, min: 1 },
        reaction: { max: 5, min: 1 },
        strength: { max: 8, min: 3 },
        willpower: { max: 7, min: 2 },
        magic: { max: 6, min: 1 },
        resonance: { max: 6, min: 1 }
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
        willpower: { max: 6, min: 1 },
        magic: { max: 6, min: 1 },
        resonance: { max: 6, min: 1 }
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
        willpower: { max: 6, min: 1 },
        magic: { max: 6, min: 1 },
        resonance: { max: 6, min: 1 }
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
        willpower: { max: 6, min: 1 },
        magic: { max: 6, min: 1 },
        resonance: { max: 6, min: 1 }
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
        willpower: { max: 6, min: 1 },
        magic: { max: 6, min: 1 },
        resonance: { max: 6, min: 1 }
    }
};

/**
 * @type {Object} Map of qualities to either their cost or a cost function.
 */
sr.qualities = {
    'ambidextrous': {
        "cost": 4
    },
    'analytical-mind': {
        "cost": 5
    },
    'apititude': {
        "cost": 14
    },
    'astral-chameleon': {
        "cost": 10
    },
    'bilingual': {
        "cost": 5
    },
    'blandness': {
        "cost": 8
    },
    'catlike': {
        "cost": 7
    },
    'codeslinger': {
        "cost": 10
    },
    'double-jointed': {
        "cost": 6
    },
    'exceptional-attribute': {
        "cost": function () {
            'use strict';
            var metatype = $('#metatype')[0].value;
            var luckyInput = $('#lucky')[0];
            var exceptionalAttributeInput = $('#exceptional-attribute')[0];
            var exceptionalAttributeSelect = $('#exceptional-attribute-select');
            var isMagicGuy = false;
            var isMatrixGuy = false;

            luckyInput.disabled = exceptionalAttributeInput.checked;
            exceptionalAttributeSelect.prop('hidden', !exceptionalAttributeInput.checked);

            if (exceptionalAttributeInput.checked) {
                //TODO: add this when we have a way to check if magic is selected
                if (isMagicGuy) {
                    exceptionalAttributeSelect.append($("<option></option>")
                        .attr("value", 'magic')
                        .text('Magic'));
                }
                if (isMatrixGuy) {
                    exceptionalAttributeSelect.append($("<option></option>")
                        .attr("value", 'resonance')
                        .text('Resonance'));
                }

            } else {
                exceptionalAttributeSelect.empty();
                sr.updateAttributeLimits(metatype);
            }

            return 14;
        }
    },
    'first-impression': {
        "cost": 11
    },
    'focused-concentration': {
        "cost": function () {
            'use strict';
            var baseCost = 4;
            var input = $('#focused-concentration')[0];
            var select = $('#focused-concentration-select')[0];
            var multiplier = parseInt(select.value, 10);

            select.hidden = !input.checked;

            return (baseCost * multiplier);
        }
    },
    'gearhead': {
        "cost": 11
    },
    'guts': {
        "cost": 10
    },
    'high-pain-tolerance': {
        "cost": function () {
            'use strict';
            var baseCost = 7;
            var input = $('#high-pain-tolerance')[0];
            var select = $('#high-pain-tolerance-select')[0];
            var multiplier = parseInt(select.value, 10);

            select.hidden = !input.checked;

            return (baseCost * multiplier);
        }
    },
    //'high-pain-tolerance': //7 karma (max 3)
    //'home-ground': 10, //10 karma, can take each type once, should add description to notes
    //  Astral Acclimation
    //  You Know a Guy
    //  Digital Turf
    //  The Transporter
    //  On the Lam
    //  Street Politics
    'human-looking': {
        "cost": 6
    },
    'indomitable': {
        "cost": function () {
            'use strict';
            var baseCost = 8;
            var input = $('#indomitable')[0];
            var select = $('#indomitable-select')[0];
            var multiplier = parseInt(select.value, 10);

            select.hidden = !input.checked;

            return (baseCost * multiplier);
        }
    },
    'juryrigger': {
        "cost": 10
    },
    'lucky': {
        "cost": function () {
            'use strict';
            var metatype = $('#metatype')[0].value;
            var luckyInput = $('#lucky')[0];
            var edgeInput = $('#edge')[0];
            var edgeMaxInput = $('#edge-max')[0];
            var exceptionalAttributeInput = $('#exceptional-attribute')[0];

            if (metatype &&
                    sr.metatypeAttributeLimits[metatype] &&
                    sr.metatypeAttributeLimits[metatype]['edge'] &&
                    sr.metatypeAttributeLimits[metatype]['edge']['max']
                    ) {
                var maxAttributeLimit = sr.metatypeAttributeLimits[metatype]['edge']['max'];

                exceptionalAttributeInput.disabled = luckyInput.checked;
                if (luckyInput.checked) {
                    maxAttributeLimit++;
                }

                edgeInput.max = maxAttributeLimit;
                edgeMaxInput.value = maxAttributeLimit;
            }

            return 12;
        }
    },
    'magical-resistance': {
        "cost": function () {
            'use strict';
            var baseCost = 6;
            var input = $('#magical-resistance')[0];
            var select = $('#magical-resistance-select')[0];
            var multiplier = parseInt(select.value, 10);

            select.hidden = !input.checked;

            return (baseCost * multiplier);
        }
    },
    'mentor-spirit': {
        "cost": 5
    },
    'natural-athlete': {
        "cost": 7
    },
    'natural-hardening': {
        "cost": 10
    },
    //'natural-immunity': //4 karma (single natural disease or toxin) or 10 karma (single, synthetic (artificially created) disease or toxin),
    'photographic-memory': {
        "cost": 6
    },
    'quick-healer': {
        "cost": 3
    },
    //'resistance': {
    //    "cost": [4,8]
    //},//4 karma (+1 modifier for pathogens or toxins) or 8 karma (+1 modifier for resisting both)
    'spirit-affinity': {
        "cost": 7
    },
    'toughness': {
        "cost": 9
    },
    'will-to-live': {
        "cost": function () {
            'use strict';
            var baseCost = 3;
            var input = $('#will-to-live')[0];
            var select = $('#will-to-live-select')[0];
            var multiplier = parseInt(select.value, 10);

            select.hidden = !input.checked;

            return (baseCost * multiplier);
        }
    },
    //'addiction':
    //'allergy':
    'astral-beacon': {
        "cost": -10
    },
    'bad-luck': {
        "cost": -12
    },
    'bad-rep': {
        "cost": -7
    },
    'code-of-honor': {
        "cost": -15
    },
    'codeblock': {
        "cost": -10
    },
    'combat-paralysis': {
        "cost": -12
    },
    //'dependents':
    'distinctive-style': {
        "cost":  -5
    },
    'elf-poser': {
        "cost": -6
    },
    //'gremlins':
    'incompetent': {
        "cost": -5
    },
    //'insomnia':
    'loss-of-confidence': {
        "cost": -10
    },
    'low-pain-tolerance': {
        "cost": -9
    },
    'ork-poser': {
        "cost": -6
    },
    //'prejudiced':
    'scorched': {
        "cost": -10
    },
    'sensitive-system': {
        "cost": -12
    },
    'simsense-vertigo': {
        "cost": -5
    },
    //'sinner':
    'social-stress': {
        "cost": -8
    },
    'spirit-bane': {
        "cost": -7
    },
    'uncouth': {
        "cost": -14
    },
    'uneducated': {
        "cost": -8
    },
    'unsteady-hands': {
        "cost": -7
    },
    'weak-immune-system': {
        "cost": -10
    }
};

/**
 * Set up all of the required handlers.
 */
sr.setupHandlers = function setupHandlers() {
    'use strict';
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

    $('#magic-e').on('click', sr.removeMagic);
    $('input[name="quality[]"]').on('change', sr.calculateQualities);

    $('#exceptional-attribute-select').on('change', function () {
        var selectedAttribute = $("#exceptional-attribute-select").find("option:selected").val();
        var metatype = $('#metatype')[0].value;

        //Reset our limits before we change them
        sr.updateAttributeLimits(metatype);

        if (selectedAttribute !== 'none') {
            var maxAttributeLimit = sr.metatypeAttributeLimits[metatype][selectedAttribute]['max'];
            $('#' + selectedAttribute)[0].max = maxAttributeLimit + 1;
            $('#' + selectedAttribute + '-max')[0].value = maxAttributeLimit + 1;
        }
    });

    $('#focused-concentration-select').on('change', function () {
        var select = $('#focused-concentration-select')[0];
        var multiplier = parseInt(select.value, 10);

        if (sr.selectedQualties['focused-concentration']) {
            sr.selectedQualties['focused-concentration'] = (4 * multiplier);
        }
        sr.updateQualities();
    });

    $('#will-to-live-select').on('change', function () {
        var select = $('#will-to-live-select')[0];
        var multiplier = parseInt(select.value, 10);

        if (sr.selectedQualties['will-to-live']) {
            sr.selectedQualties['will-to-live'] = (3 * multiplier);
        }
        sr.updateQualities();
    });

    $('#magical-resistance-select').on('change', function () {
        var select = $('#magical-resistance-select')[0];
        var multiplier = parseInt(select.value, 10);

        if (sr.selectedQualties['magical-resistance']) {
            sr.selectedQualties['magical-resistance'] = (6 * multiplier);
        }
        sr.updateQualities();
    });

    $('#indomitable-select').on('change', function () {
        var select = $('#indomitable-select')[0];
        var multiplier = parseInt(select.value, 10);

        if (sr.selectedQualties['indomitable']) {
            sr.selectedQualties['indomitable'] = (8 * multiplier);
        }
        sr.updateQualities();
    });

    $('#high-pain-tolerance-select').on('change', function () {
        var select = $('#high-pain-tolerance-select')[0];
        var multiplier = parseInt(select.value, 10);

        if (sr.selectedQualties['high-pain-tolerance']) {
            sr.selectedQualties['high-pain-tolerance'] = (7 * multiplier);
        }
        sr.updateQualities();
    });

    $('#karma').on('change', function (e) {
        var karmaPoints = $('#karma-points')[0];
        var karmaDiff = (parseInt(e.currentTarget.value, 10) - sr.karma);
        var karmaPointsValue = parseInt(karmaPoints.value, 10);
        sr.karma += karmaDiff;
        karmaPoints.value = (karmaPointsValue + karmaDiff);
    });
};

/**
 * Handle the user clicking into a priority row or column.
 * @param {Event} e
 */
sr.handlePriorityClick = function handlePriorityClick(e) {
    'use strict';
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
    } else if (0 === cell.id.indexOf('skills-')) {
        sr.updateSkills(cell);
    } else if (0 === cell.id.indexOf('resources-')) {
        sr.updateResources(cell);
    }
};

/**
 * Unselects all other cells in the row, selects the selected one.
 * @param {Object} cell
 */
sr.changeRowSelection = function changeRowSelection(cell) {
    'use strict';
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
    'use strict';
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
    'use strict';
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
 * Update a character's available skill points.
 * @param {Object} cell
 */
sr.updateSkills = function updateSkills(cell) {
    'use strict';
    var priority = cell.id.slice(-1);
    var skills = {
        a: { skills: 46, group: 10 },
        b: { skills: 36, group: 5 },
        c: { skills: 28, group: 2 },
        d: { skills: 22, group: 0 },
        e: { skills: 18, group: 0 }
    };

    $('#skill-group-points').val(skills[priority]['group']);
    $('#skill-points').val(skills[priority]['skills']);
};

/**
 * Update a character's available resources when they choose a resource
 * priority.
 * @param {Object} cell
 */
sr.updateResources = function updateResources(cell) {
    'use strict';
    var priority = cell.id.slice(-1);
    var resources = {
        a: 450000,
        b: 275000,
        c: 140000,
        d: 50000,
        e: 6000
    };
    $('#money').val(resources[priority]);
};

/**
 * Update the number of attribute points a character has to spend.
 */
sr.updateAttributePoints = function updateAttributePoints() {
    'use strict';
    // Character gets their attribute priority points + the "free" points from
    // their racial minimums.
    var points = sr.attributePoints + sr.freeAttributePoints;

    var attributes = [
        'body', 'agility', 'reaction', 'strength', 'willpower', 'logic',
        'intuition', 'charisma'
    ];
    var pointsEl = $('#attribute-points')[0];
    var attributeEl;
    attributes.forEach(function (attribute) {
        attributeEl = $('#' + attribute)[0];
        if (attributeEl.value) {
            points -= parseInt(attributeEl.value, 10);
        }
    });
    pointsEl.value = points;
};

/**
 * Update a character's composure when one of its base stats changes.
 */
sr.updateComposure = function updateComposure() {
    'use strict';
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
    'use strict';
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
    'use strict';
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
    'use strict';
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
    'use strict';
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
    'use strict';
    var race = $(e.target).val().slice(0, -2);
    var priority = $(e.target).val().slice(-1);
    sr.updateAttributeLimits(race);
    sr.updateSpecialPointTotal(race, priority);
    $('#metatype').val(race);
    sr.updateQualitiesForRace(race);
};

/**
 * Given the race that the user chose, allow or disallow qualities.
 * @param {string} race
 */
sr.updateQualitiesForRace = function updateQualitiesForRace(race) {
    'use strict';
    // Only elves, dwarves, and orks may take the Human Looking quality.
    if ('elf' === race || 'dwarf' === race || 'ork' === race) {
        $('#human-looking').prop('disabled', false);
    } else {
        $('#human-looking').prop('disabled', true)
            .prop('checked', false);
    }

    // Only humans can take the Elf Poser quality.
    if ('human' === race) {
        $('#elf-poser').prop('disabled', false);
    } else {
        $('#elf-poser').prop('disabled', true)
            .prop('checked', false);
    }

    // Only humans and elves may take the Ork Poser quality.
    if ('human' === race || 'elf' === race) {
        $('#ork-poser').prop('disabled', false);
    } else {
        $('#ork-poser').prop('disabled', true)
            .prop('checked', false);
    }
};

/**
 * Update how many special points the character has remaining.
 */
sr.updateSpecialPoints = function updateSpecialPoints() {
    'use strict';
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

    points = sr.specialPointTotal -
        edge + sr.freeEdge -
        magic + sr.freeMagic -
        resonance + sr.freeResonance;
    specialPointsEl.val(points);
};

/**
 * Update the min and max values for attributes based on a chosen race.
 * @param {string} metatype Metatype the user chose
 */
sr.updateAttributeLimits = function updateAttributeLimits(metatype) {
    'use strict';
    var attributeLimits = sr.metatypeAttributeLimits[metatype];
    var input;
    var edgeInput = $('#edge')[0];

    sr.freeAttributePoints = 0;

    for (attribute in attributeLimits) {
        input = $('#' + attribute)[0];
        input.max = attributeLimits[attribute]['max'];
        input.min = attributeLimits[attribute]['min'];
        input.value = attributeLimits[attribute]['min'];
        if (attribute !== 'edge') {
            sr.freeAttributePoints += attributeLimits[attribute]['min'];
        }
        $('#' + attribute + '-max')[0].value = attributeLimits[attribute]['max'];
        $(input).trigger('change');
    }
    edgeInput.value = attributeLimits['edge']['min'];
};

/**
 * Update the number of points the user gets to spend on magic, edge, or
 * resonance based on their race and priority.
 * @param {string} race Race the user chose
 * @param {string} priority Priority level the race was chosen at
 */
sr.updateSpecialPointTotal = function updateSpecialPointTotal(race, priority) {
    'use strict';
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

/**
 * The user has selected no magic, remove any of the magic options.
 */
sr.removeMagic = function removeMagic() {
    'use strict';
    $('#magic').val(0).prop('disabled', 'disabled');
    $('#astral-chameleon').prop('disabled', 'disabled');
    $('#focused-concentration').prop('disabled', 'disabled');
    $('#mentor-spirit').prop('disabled', 'disabled');
    $('#spirit-affinity').prop('disabled', 'disabled');
    $('#astral-beacon').prop('disabled', 'disabled');
    $('#spirit-bane').prop('disabled', 'disabled');
};

/**
 * When a user selects a quality update their karma
 *
 * @param e {object}
 */
sr.calculateQualities = function calculateQualities(e) {
    'use strict';
    var quality = e.target.id;
    var cost;

    if (sr.qualities[quality] && sr.qualities[quality]['cost']) {
        if ($.type(sr.qualities[quality]['cost']) === 'function') {
            cost = sr.qualities[quality]['cost']();
        } else if ($.type(sr.qualities[quality]['cost']) === 'number') {
            cost = sr.qualities[quality]['cost'];
        }

        if (!e.target.checked) {
            if (sr.selectedQualties[quality]) {
                delete sr.selectedQualties[quality];
            }
        } else {
            sr.selectedQualties[quality] = cost;
        }
        sr.updateQualities();
    } else {
        console.log('Unknown quality ' + quality);
    }
};

/**
 * Update the karma based on the qualities selected
 */
sr.updateQualities = function updateQualities() {
    'use strict';
    var karmaPointInput = $('#karma-points')[0];
    var cost = 0;

    $.each(sr.selectedQualties, function (key, value) {
        cost += value;
    });

    karmaPointInput.value = (sr.karma - cost);
};

$(document).ready(sr.setupHandlers);
