<!doctype html>
<html>
<head>
    <title>Create a new character</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<table class="priority">
    <thead>
        <tr>
            <th>Priority</th>
            <th>Metatype</th>
            <th>Attributes</th>
            <th>Magic or Resonance</th>
            <th>Skills</th>
            <th>Resources</th>
        </tr>
    </thead>
    <tbody>
        <tr id="row-a">
            <th class="selected" id="priority-a">A</th>
            <td id="race-a">
                <input id="human-a" type="radio" name="race" value="human-a">
                <label for="human-a">Human (9)</label><br>
                <input id="elf-a" type="radio" name="race" value="elf-a">
                <label for="elf-a">Elf (8)</label><br>
                <input id="dwarf-a" type="radio" name="race" value="dwarf-a">
                <label for="dwarf-a">Dwarf (7)</label><br>
                <input id="orc-a" name="race" type="radio" value="orc-a">
                <label for="orc-a">Ork (7)</label><br>
                <input id="troll-a" name="race" type="radio" value="troll-a">
                <label for="troll-a">Troll (5)</label>
            </td>
            <td id="attributes-a">24</td>
            <td id="magic-a">
                Magician or Mystic Adept: Magic 6, two rating 5 Magical skills, 10 spells<br>
                Technomancer: Resonance 5, two rating 5 Resonance skills, 5 complex forms
            </td>
            <td id="skills-a">46/10</td>
            <td id="resources-a">450,000&yen;</td>
        </tr>
        <tr id="row-b">
            <th class="selected" id="priority-b">B</th>
            <td id="race-b">
                <input id="human-b" type="radio" name="race" value="human-b">
                <label for="human-b">Human (7)</label><br>
                <input id="elf-b" type="radio" name="race" value="elf-b">
                <label for="elf-b">Elf (6)</label><br>
                <input id="dwarf-b" name="race" type="radio" value="dwarf-b">
                <label for="dwarf-b">Dwarf (4)</label><br>
                <input id="ork-b" name="race" type="radio" value="ork-b">
                <label for="ork-b">Ork (4)</label><br>
                <input id="troll-b" name="race" type="radio" value="troll-b">
                <label for="troll-b">Troll (0)</label><br>
            </td>
            <td id="attributes-b">20</td>
            <td id="magic-b">
                Magician or Mystic Adept: Magic 4, two Rating 4 Magical skills, 7 spells<br>
                Technomancer: Resonance 4, two Rating 4 Resonance skills, 2 complex forms<br>
                Adept: Magic 6, one Rating 4 Active skill<br>
                Aspected Magician: Magic 5, one Rating 4 Magical skill group
            </td>
            <td id="skills-b">36/5</td>
            <td id="resources-b">275,000&yen;</td>
        </tr>
        <tr id="row-c">
            <th class="selected" id="priority-c">C</th>
            <td id="race-c">
                <input id="human-c" name="race" type="radio" value="human-c">
                <label for="human-c">Human (5)</label><br>
                <input id="elf-c" name="race" type="radio" value="elf-c">
                <label for="elf-c">Elf (3)</label><br>
                <input id="dwarf-c" name="race" type="radio" value="dwarf-c">
                <label for="dwarf-c">Dwarf (1)</label><br>
                <input id="ork-c" name="race" type="radio" value="ork-c">
                <label for="ork-c">Ork (0)</label>
            </td>
            <td id="attributes-c">16</td>
            <td id="magic-c">
                Magician or Mystic Adept: Magic 3, 5 spells<br>
                Technomancer: Resonance 3, 1 complex form<br>
                Adept: Magic 4, one rating 2 Active skill<br>
                Aspected magician: Magic 3, one rating 2 Magical skill group
            </td>
            <td id="skills-c">28/2</td>
            <td id="resources-c">140,000&yen;</td>
        </tr>
        <tr>
            <th class="selected" id="priority-d">D</th>
            <td id="race-d">
                <input id="human-d" name="race" type="radio" value="human-d">
                <label for="human-d">Human (3)</label><br>
                <input id="elf-d" name="race" type="radio" value="elf-d">
                <label for="elf-d">Elf (0)</label>
            </td>
            <td id="attributes-d">14</td>
            <td id="magic-d">
                Adept: Magic 2<br>
                Aspected Magician: Magic 2
            </td>
            <td id="skills-d">22/0</td>
            <td id="resources-d">50,000&yen;</td>
        </tr>
        <tr>
            <th class="selected" id="priority-e">E</th>
            <td id="race-e">
                <input id="human-e" name="race" type="radio" value="human-e">
                <label for="human-e">Human (1)</label>
            </td>
            <td id="attributes-e">12</td>
            <td id="magic-e">&mdash;</td>
            <td id="skills-e">18/0</td>
            <td id="resources-e">6,000&yen;</td>
        </tr>
    </tbody>
</table>

<br>

<div class="left">
    <div class="legend">Personal data</div>
    <div>
        <label for="name">Name</label>
        <input id="name" name="name">
    </div>
    <div>
Metatype Ethnicity
    </div>
    <div>
Age Sex Height Weight
    </div>
    <div>
Street Cred Notoriety Public Awareness
    </div>
    <div>
Karma Total Karma Misc
    </div>
</div>

<div class="left">
    <div class="legend">Attributes</div>
    <table>
        <tr>
            <th><label for="body">Body</label></th>
            <td><input id="body" max="6" min="1" name="body" step="1" type="number"></td>
            <th><label for="essence">Essence</label></th>
            <td><input id="essence" max="6" readonly value="6" tabindex="-1" type="number"></td>
            <th><label for="special-points">Special points</label></th>
            <td><input id="special-points" max="9" min="0" name="special-points" step="1" type="number"></td>
        </tr>
        <tr>
            <th><label for="agility">Agility</label></th>
            <td><input id="agility" max="6" min="1" name="agility" step="1" type="number"></td>
            <th><label for="magic">Magic</label></th>
            <td><input id="magic" max="6" min="0" name="magic" step="1" type="number"></td>
        </tr>
        <tr>
            <th><label for="reaction">Reaction</label></th>
            <td><input id="reaction" max="6" min="1" name="reaction" step="1" type="number"></td>
            <th><label for="initiative">Initiative</label></th>
            <td><input id="initiative" readonly tabindex="-1" type="number"></td>
        </tr>
        <tr>
            <th><label for="strength">Strength</label></th>
            <td><input id="strength" max="6" min="1" name="strength" step="1" type="number"></td>
            <th><label for="matrix-initiative">Matrix Initiative</label></th>
            <td><input id="matrix-initiative" readonly tabindex="-1" type="number"></td>
        </tr>
        <tr>
            <th><label for="willpower">Willpower</label></th>
            <td><input id="willpower" max="6" min="1" name="willpower" step="1" type="number"></td>
            <th><label for="astral-initiative">Astral Initiative</label></th>
            <td><input id="astral-initiative" readonly tabindex="-1" type="number"></td>
        </tr>
        <tr>
            <th><label for="logic">Logic</label></th>
            <td><input id="logic" max="6" min="1" name="logic" step="1" type="number"></td>
            <th><label for="composure">Composure</label></th>
            <td><input id="composure" readonly tabindex="-1" type="number"></td>
        </tr>
        <tr>
            <th><label for="intuition">Intuition</label></th>
            <td><input id="intuition" max="6" min="1" name="intuition" step="1" type="number"></td>
            <th><label for="judge-intentions">Judge intentions</label></th>
            <td><input id="judge-intentions" readonly tabindex="-1" type="number"></td>
        </tr>
        <tr>
            <th><label for="charisma">Charisma</label></th>
            <td><input id="charisma" max="6" min="1" name="charisma" step="1" type="number"></td>
            <th><label for="memory">Memory</label></th>
            <td><input id="memory" readonly tabindex="-1" type="number"></td>
        </tr>
        <tr>
            <th><label for="edge">Edge</label></th>
            <td><input id="edge" max="6" min="1" name="edge" step="1" type="number"></td>
            <th><label for="lift">Lift/Carry</label></th>
            <td><input id="lift" name="lift" readonly tabindex="-1" type="number"></td>
        </tr>
    </table>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
<script src="script.js"></script>
</body>
</html>
