<?php
/**
 * Save a character to a JSON blob.
 */

session_start();
if (!isset($_SESSION['email'])) {
    // User hasn't logged in.
    $redirect = 'Location: '
        . filter_var($_SERVER['HTTP_HOST'], FILTER_SANITIZE_URL);
    header($redirect);
    exit();
}

$skillGroups = array(
    'acting',
    'athletics',
    'biotech',
    'close-combat',
    'conjuring',
    'cracking',
    'electronics',
    'enchanting',
    'engineering',
    'firearms',
    'influence',
    'outdoors',
    'sorcery',
    'stealth',
    'tasking',
);

$skills = array(
    'aeronautics-mechanic',
    'alchemy',
    'arcana',
    'archery',
    'armorer',
    'artificing',
    'artisan',
    'assensing',
    'astral-combat',
    'automatics',
    'automotive-mechanic',
    'banishing',
    'binding',
    'blades',
    'chemistry',
    'clubs',
    'compiling',
    'computer',
    'con',
    'counterspelling',
    'cybercombat',
    'cybertechnology',
    'decompiling',
    'demolitions',
    'disenchanting',
    'disguise',
    'diving',
    'electronic-warfare',
    'escape-artist',
    'etiquette',
    'exotic-ranged-weapon',
    'first-aid',
    'forgery',
    'free-fall',
    'gunnery',
    'gymnastics',
    'hacking',
    'hardware',
    'heavy-weapons',
    'impersonation',
    'industrial-mechanic',
    'instruction',
    'intimidation',
    'leadership',
    'locksmith',
    'longarms',
    'medicine',
    'nautical-mechanic',
    'negotiation',
    'navigation',
    'palming',
    'perception',
    'performance',
    'pilot-aerospace',
    'pilot-aircraft',
    'pilot-exotic-vehicle',
    'pilot-ground-craft',
    'pilot-walker',
    'pilot-watercraft',
    'pistols',
    'registering',
    'ritual-spellcasting',
    'running',
    'sneaking',
    'software',
    'spellcasting',
    'summoning',
    'survival',
    'swimming',
    'throwing-weapons',
    'tracking',
    'unarmed-combat',
);

$character = array(
    'email' => $_SESSION['email'],
    'attributes' => array(
        'body' => (int)$_POST['body'],
        'agility' => (int)$_POST['agility'],
        'reaction' => (int)$_POST['reaction'],
        'strength' => (int)$_POST['strength'],
        'willpower' => (int)$_POST['willpower'],
        'logic' => (int)$_POST['logic'],
        'intuition' => (int)$_POST['intuition'],
        'charisma' => (int)$_POST['charisma'],
        'edge' => (int)$_POST['edge'],
        'magic' => (int)$_POST['magic'],
        //'resonance' => (int)$_POST['resonance'],
    ),
    'vitals' => array(
        'name' => $_POST['name'],
        'metatype' => $_POST['metatype'],
        'ethnicity' => $_POST['ethnicity'],
        'age' => $_POST['age'],
        'sex' => $_POST['sex'],
        'height' => (int)$_POST['height'],
        'weight' => (int)$_POST['weight'],
        'street-cred' => (int)$_POST['street-cred'],
        'notoriety' => (int)$_POST['notoriety'],
        'public-awareness' => (int)$_POST['public-awareness'],
        'karma' => (int)$_POST['karma'],
        'total-karma' => (int)$_POST['total-karma'],
        //'money'
    ),
    'qualities' => $_POST['quality'],
    'skill-groups' => array(
    ),
    'skills' => array(
    ),
    'gear' => array(
    ),
);

foreach ($skills as $skill) {
    if (isset($_POST[$skill]) && (int)$_POST[$skill]) {
        $character['skills'][$skill] = (int)$_POST[$skill];
    }
}

foreach ($skillGroups as $skill) {
    if (isset($_POST[$skill]) && (int)$_POST[$skill]) {
        $character['skill-groups'][$skill] = (int)$_POST[$skill];
    }
}

echo json_encode($character);
