<!doctype html>
<html>
<head>
    <title>Create a new character</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<table class="points-to-spend">
    <tr>
        <th><label for="special-points">Special</label></th>
        <td><input id="special-points" max="9" min="0" name="special-points" readonly type="number"></td>
    </tr>
    <tr>
        <th><label for="attribute-points">Attribute</label></th>
        <td><input id="attribute-points" max="24" min="0" name="attribute-points" readonly type="number"></td>
    </tr>
    <tr>
        <th><label for="karma-points">Karma</label></th>
        <td><input id="karma-points" max="50" min="0" type="number" readonly value="25"></td>
    </tr>
    <tr>
        <th><label for="skill-group-points">Skill group</label></th>
        <td><input id="skill-group-points" max="10" min="0" type="number" readonly></td>
    </tr>
    <tr>
        <th><label for="skill-points">Skills</label></th>
        <td><input id="skill-points" max="46" min="0" type="number" readonly></td>
    </tr>
    <tr>
        <th><label for="money">Money</label></th>
        <td><input id="money" max="450000" min="0" type="number" readonly></td>
    </tr>
</table>

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
                <input id="ork-a" name="race" type="radio" value="ork-a">
                <label for="ork-a">Ork (7)</label><br>
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

<section class="left">
    <h1 class="legend">Personal data</h1>
    <table class="meta-information">
        <tr>
            <th><label for="name">Name</label></td>
            <td colspan="7"><input id="name" name="name"></td>
        </tr>
        <tr>
            <th><label for="metatype">Metatype</label></th>
            <td><input id="metatype" name="metatype" readonly></td>
            <th><label for="ethnicity">Ethnicity</label></th>
            <td><input id="ethnicity" name="ethnicity"></td>
        </tr>
        <tr>
            <th><label for="age">Age</label></th>
            <td><input id="age" max="150" min="0" name="age" step="1" type="number"></td>
            <th><label>Sex</label></th>
            <td>
                <input id="sex-male" name="sex" type="radio" value="m">
                <label for="sex-male">Male</label>
                <input id="sex-female" name="sex" type="radio" value="f">
                <label for="sex-female">Female</label>
            </td>
            <th><label for="height">Height</label></th>
            <td><input id="height" max="500" min="60" name="height" step="5" type="number">cm</td>
            <th><label for="weight">Weight</label></th>
            <td><input id="weight" max="670" min="25" name="weight" step="5" type="number">kg</td>
        </tr>
        <tr>
            <th><label for="street-cred">Street Cred</label></th>
            <td><input id="street-cred" max="99" min="0" name="street-cred" step="1" type="number" value="0"></td>
            <th><label for="notoriety">Notoriety</label></th>
            <td><input id="notoriety" max="99" min="0" name="notoriety" step="1" type="number" value="0"></td>
            <th><label for="public-awareness">Public Awareness</label></th>
            <td><input id="public-awareness" max="99" min="0" name="public-awareness" step="1" type="number" value="0"></td>
        </tr>
        <tr>
            <th><label for="karma">Karma</label></th>
            <td><input id="karma" max="999" min="0" name="karma" type="number" step="1" value="25"></td>
            <th><label for="total-karma">Total Karma</label></th>
            <td><input id="total-karma" max="999" min="0" name="total-karma" step="1" type="number" value="0"></td>
        </tr>
    </table>
</section>

<section class="left">
    <h1 class="legend">Attributes</h1>
    <table>
        <tr>
            <th><label for="body">Body</label></th>
            <td><input id="body" max="6" min="1" name="body" step="1" type="number">/<input id="body-max" readonly></td>
            <th><label for="essence">Essence</label></th>
            <td><input id="essence" max="6" readonly value="6" tabindex="-1" type="number"></td>
        </tr>
        <tr>
            <th><label for="agility">Agility</label></th>
            <td><input id="agility" max="6" min="1" name="agility" step="1" type="number">/<input id="agility-max" readonly></td>
            <!-- Enable toggle of magic/resonance depending on what is selected -->
            <th><label for="magic">Magic</label></th>
            <td><input id="magic" max="6" min="0" name="magic" step="1" type="number">/<input id="magic-max" readonly></td>
            <th hidden><label for="resonance">Resonance</label></th>
            <td hidden><input id="resonance" max="6" min="0" name="magic" step="1" type="number">/<input id="resonance-max" readonly></td>
        </tr>
        <tr>
            <th><label for="reaction">Reaction</label></th>
            <td><input id="reaction" max="6" min="1" name="reaction" step="1" type="number">/<input id="reaction-max" readonly></td>
            <th><label for="initiative">Initiative</label></th>
            <td><input id="initiative" readonly tabindex="-1" type="number"></td>
        </tr>
        <tr>
            <th><label for="strength">Strength</label></th>
            <td><input id="strength" max="6" min="1" name="strength" step="1" type="number">/<input id="strength-max" readonly></td>
            <th><label for="matrix-initiative">Matrix Initiative</label></th>
            <td><input id="matrix-initiative" readonly tabindex="-1" type="number"></td>
        </tr>
        <tr>
            <th><label for="willpower">Willpower</label></th>
            <td><input id="willpower" max="6" min="1" name="willpower" step="1" type="number">/<input id="willpower-max" readonly></td>
            <th><label for="astral-initiative">Astral Initiative</label></th>
            <td><input id="astral-initiative" readonly tabindex="-1" type="number"></td>
        </tr>
        <tr>
            <th><label for="logic">Logic</label></th>
            <td><input id="logic" max="6" min="1" name="logic" step="1" type="number">/<input id="logic-max" readonly></td>
            <th><label for="composure">Composure</label></th>
            <td><input id="composure" readonly tabindex="-1" type="number"></td>
        </tr>
        <tr>
            <th><label for="intuition">Intuition</label></th>
            <td><input id="intuition" max="6" min="1" name="intuition" step="1" type="number">/<input id="intuition-max" readonly></td>
            <th><label for="judge-intentions">Judge intentions</label></th>
            <td><input id="judge-intentions" readonly tabindex="-1" type="number"></td>
        </tr>
        <tr>
            <th><label for="charisma">Charisma</label></th>
            <td><input id="charisma" max="6" min="1" name="charisma" step="1" type="number">/<input id="charisma-max" readonly></td>
            <th><label for="memory">Memory</label></th>
            <td><input id="memory" readonly tabindex="-1" type="number"></td>
        </tr>
        <tr>
            <th><label for="edge">Edge</label></th>
            <td><input id="edge" max="6" min="1" name="edge" step="1" type="number">/<input id="edge-max" readonly></td>
            <th><label for="lift">Lift/Carry</label></th>
            <td><input id="lift" name="lift" readonly tabindex="-1" type="number"></td>
        </tr>
    </table>
</section>

<section>
    <h1 class="legend">Qualities</h1>
    <table>
        <thead>
            <tr>
                <th>Positive Quality</th>
                <th>Cost</th>
                <th>Negative Quality</th>
                <th>Bonus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td title="The Ambidextrous character can handle objects equally well with either hand. Without this quality, any action performed solely with the off–hand (i.e., firing a gun) suffers a –2 dice pool modifier (see Attacker Using Off-Hand Weapon, p.  178).">
                    <input id="ambidextrous" name="quality[]" type="checkbox" value="ambidextrous">
                    <label for="ambidextrous">Ambidextrous</label>
                </td>
                <td>4</td>
                <td title="A character with the Addiction quality is hooked on chemical substances, such as street drugs (novacoke, bliss, tempo); technological or magical devices, such as better-than-life (BTL) chips or foci; or potentially addictive activities such as gambling or sex.  Physiological Addictions affect the body’s functions, producing pain, nausea, shakes, and other side effects that can impair the runner, particularly during withdrawal. Some possible effects of psychological addictions include paranoia, anxiety, insomnia, poor concentration, mood disorders, and depression. For specific rules on Addiction Tests, Withdrawal Tests, and staying clean, see p. 414.">
                    <input id="addition" name="quality[]" type="checkbox" value="addition">
                    <label for="addition">Addiction</label>
                </td>
                <td>4-25</td>
            </tr>
            <tr>
                <td title="Analytical Mind describes the uncanny ability to logically analyze information, deduce solutions to problems, or separate vital information from distractions and noise. It’s useful in cracking cyphers, solving puzzles, figuring out traps, and sifting through data. This quality gives the character a +2 dice pool modifier to any Logic Tests involving pattern recognition, evidence analysis, clue hunting, or solving puzzles. This quality also reduces the time it takes the character to solve a problem by half.">
                    <input id="analytical-mind" name="quality[]" type="checkbox" value="analytical-mind">
                    <label for="analytical-mind">Analytical Mind</label>
                </td>
                <td>5</td>
                <td title="A character with the Allergy quality is allergic to a substance or condition found in their environment. The value of this quality depends on two factors. The first is whether the substance or condition is Uncommon (2 Karma) or Common (7 Karma). Next, determine the severity of the symptoms: Mild (3 Karma), Moderate (8 Karma), Severe (13 Karma), or Extreme (18 Karma).  Add the appropriate point values together to find the final value. For example, the value of an Uncommon Moderate Allergy (Silver) is 10 Karma (2+8 Karma). If a character is attacked with a substance to which they are allergic, they lose 1 die from their Resistance Test for each stage of severity of the Allergy (e.g., 1 die for a Mild allergy, 2 dice for a Moderate allergy, etc.).">
                    <input id="allergy" name="quality[]" type="checkbox" value="allergy">
                    <label for="allergy">Allergy</label>
                </td>
                <td>5-25</td>
            </tr>
            <tr>
                <td title="This quality is how you become even better than the best in the world. The standard limit for skills is 12. Every so often, there is a character who can exceed limitations and be truly exceptional in a particular skill. With this particular quality, the character can have one skill rated at 7 at character creation, and may eventually build that skill up to rating 13. Characters may only take the Aptitude quality once.">
                    <input id="aptitude" name="quality[]" type="checkbox" value="aptitude">
                    <label for="aptitude">Aptitude</label>
                </td>
                <td>14</td>
                <td title="The astral signature of a character with the Astral Beacon quality is like, well, a beacon—highly visible on the astral plane. The signature also lasts twice as long as it would without the Astral Beacon quality and others assensing it receive a –1 to the threshold of their Assensing Test for gathering information about it. Only characters with a Magic rating may take this quality.">
                    <input id="astral-beacon" name="quality[]" type="checkbox" value="astral-beacon">
                    <label for="astral-beacon">Astral Beacon</label>
                </td>
                <td>10</td>
            </tr>
            <tr>
                <td title="With the Astral Chameleon quality, the character's astral signature blends into the background of astral space and is difficult to detect. All signatures left by the character last only half as long as other astral signatures. Any individu- als assensing astral signatures left behind by a character with this quality receive a –2 dice pool modifier for the Assensing Test. Only characters with a Magic rating and capable of leaving astral signatures may have this quality.">
                    <input id="astral-chameleon" name="quality[]" type="checkbox" value="astral-chameleon">
                    <label for="astral-chameleon">Astral Chameleon</label>
                </td>
                <td>10</td>
                <td title="This character is cursed—his own luck often turns against him. When the character uses Edge, roll 1D6.  On a result of 1, the point of Edge is spent, but it has the exact opposite effect intended. For example, if a character hopes to gain additional dice he loses that many dice from his dice pool. If a character spends Edge to go first in an Initiative Pass, he ends up going last. If a character spent Edge to negate a glitch, Bad Luck turns it into a critical glitch. The character suffers Bad Luck on only one Edge roll per game session. After the character has suffered his Bad Luck, he does not need to roll the test for Bad Luck for any more expenditures of Edge for the duration of that game session.">
                    <input id="bad-luck" name="quality[]" type="checkbox" value="bad-luck">
                    <label for="bad-luck">Bad Luck</label>
                </td>
                <td>12</td>
            </tr>
            <tr>
                <td title="A character with this quality reads, writes, and speaks a second language fluently. They can list a second lan- guage as a native tongue (see Language Skills, p. 150).  This quality can only be acquired at character creation; selecting it gives the character a second free language skill during Step Five: Purchase Active, Knowledge, and Language Skills, (p. 88).">
                    <input id="bilingual" name="quality[]" type="checkbox" value="bilingual">
                    <label for="bilingual">Bilingual</label>
                </td>
                <td>5</td>
                <td title="A character with a Bad Rep quality has a dark and lasting stain on her reputation. She may be a former Knight Errant cop known to have been particularly brutal in dealing with shadowrunners. Or word on the street might be that she once killed a member of her own runner team. If she’s Awakened and comes from a polluted region, it may be generally accepted that she’s a toxic shaman. Whether she is actually guilty of any wrongdoing is not relevant.  What people believe she has done has permanently tainted the way they see her and how they deal with her. Whatever the reason, the character starts play with 3 points of Notoriety (p. 372) that can only be removed or decreased by confronting and resolving the source of the bad reputation. Only then may the Bad Rep quality be bought off with Karma.">
                    <input id="bad-rep" name="quality[]" type="checkbox" value="bad-rep">
                    <label for="bad-rep">Bad Rep</label>
                </td>
                <td>7</td>
            </tr>
            <tr>
                <td title="This character blends into a crowd; he's seldom noticed and easily forgotten. He is unremarkable in every aspect of physical appearance. Anyone attempting to describe the character cannot come up with anything more precise than "average height, average build, average hair, etc."

Increase the threshold for anyone to recall specific details about the character by 1. This means a Memory Test with a difficulty of Average (threshold of 2) becomes a Hard test (threshold of 3).

Individuals attempting to shadow or physically locate a character with the Blandness quality in a populated setting receive a –2 dice pool modifier on all tests related to their search. The same penalty applies if they're asking around about the person based on the individual’s physical appearance. The modifier does not, however, apply to magical or Matrix searches. If the character acquires any visible tattoos, scars, obvious cyberware, or other distinguishing features, the bonuses from the Blandness quality go away until the distinctive features are removed from the character’s appearance.

In certain circumstances and specific situations, the gamemaster may determine that Blandness does not apply. For example, a troll with the Blandness quality still towers head and shoulders over a crowd of humans and so still stands out, no matter how average their horns may be. The character only regains his bonus by leaving the situation where he stands out.">
                    <input id="blandness" name="quality[]" type="checkbox" value="blandness">
                    <label for="blandness">Blandness</label>
                </td>
                <td>8</td>
                <td title="The character has a binding Code of Honor when it comes to killing members of a specific group; it’s a matter of unwavering principle. The character with the Code of Honor quality chooses a specific group that they will not kill or allow others to kill. Examples of this group could include women, children, innocent bystanders, or a specific metatype. A character can choose to protect specific paracritters, but only if the specified paracritter possesses the Sapience power.">
                    <input id="code-of-honor" name="quality[]" type="checkbox" value="code-of-honor">
                    <label for="code-of-honor">Code Of Honor</label>
                </td>
                <td>15</td>
            </tr>
            <tr>
                <td title="A character with the Catlike quality is gifted with an uncanny elegance, a stealthy gait, and an almost preternatural ability to move without making a sound.  They also claim they land on their feet when dropped, though they tend not to let people test this. This quality adds a +2 dice pool modifier to Sneaking skill tests.">
                    <input id="catlike" name="quality[]" type="checkbox" value="catlike">
                    <label for="catlike">Catlike</label>
                </td>
                <td>7</td>
                <td title="A character with the Codeblock quality always has trouble with a particular Matrix action. He receives a –2 dice pool modifier any time he attempts that type of Matrix action.  Codeblock only applies to Matrix actions with an associ- ated test; it does not apply to actions that do not require a test (p. 237). Characters cannot apply Codeblock toward hacking actions they are never likely to take.">
                    <input id="codeblock" name="quality[]" type="checkbox" value="codeblock">
                    <label for="codeblock">Codeblock</label>
                </td>
                <td>10</td>
            </tr>
            <tr>
                <td title="Ones and zeroes are practically a native language to a Codeslinger. The character is adept at performing a particular Matrix action (which she selects when she selects this quality) and receives a +2 dice pool modifier to that Matrix action. This can only be selected for Matrix Actions (p. 237) that have a test associated with them.">
                    <input id="codeslinger" name="quality[]" type="checkbox" value="codeslinger">
                    <label for="codeslinger">Codeslinger</label>
                </td>
                <td>10</td>
                <td title="A character with Combat Paralysis freezes in combat.  On the character’s first Initiative Test, the character divides their Initiative Score for that round in half (rounded up). In subsequent phases, the character may roll their normal Initiative. Combat Paralysis also gives the character a –3 dice pool modifier on Surprise Tests. If the character must make a Composure Test while under fire or in a similar combat situation, the gamemaster applies a +1 threshold modifier.">
                    <input id="combat-paralysis" name="quality[]" type="checkbox" value="combat-paralysis">
                    <label for="combat-paralysis">Combat Paralysis</label>
                </td>
                <td>12</td>
            </tr>
            <tr>
                <td title="A Double-Jointed character has unusually flexible joints and can bend and contort his body into extreme positions. The character receives a +2 dice pool modifier for Escape Artist tests. The character may also be able to squeeze into small, cramped spaces where less limber characters cannot. They’re also great at parties and bars.">
                    <input id="double-jointed" name="quality[]" type="checkbox" value="double-jointed">
                    <label for="double-jointed">Double Jointed</label>
                </td>
                <td>6</td>
                <td title="A character with the Dependents quality has one or more loved ones who depend on them for emotional support and financial aid. Dependents may include children, parents, a spouse or lover, a sibling, or an old friend. Meeting the needs of a dependent should take up a fair amount of the character’s time, as well as some of the character’s money. Increase the amount of time it takes to learn a new skill or improve an existing skill by fifty percent. See the Character Advancement section on p. 103 for more information on how long it takes to improve skills. Also increase the base time for any long-term projects by fifty percent. A dependent could also be a hindrance in other ways—getting underfoot, sharing living space, involving herself in the character’s work, borrowing the car, calling at the most inopportune moments, etc.">
                    <input id="dependents" name="quality[]" type="checkbox" value="dependents">
                    <label for="dependents">Dependents</label>
                </td>
                <td>3,6,9</td>
            </tr>
            <tr>
                <td title="The Exceptional Atribute quality is how you get to be the charismatic troll, or the agile dwarf. It allows you to possess one attribute at a level one point above the metatype maximum limit. For example, an ork character with the Exceptional Attribute quality for Strength could take his Strength attribute up to 10 before augmentations are applied, instead of the normal limit of 9. Exceptional Attribute also applies toward Special Attributes such as Magic and Resonance. Edge cannot affected by the Exceptional Attribute (Edge is raised by another quality called Lucky). A character may only take Exceptional Attribute once, and only with the gamemaster’s approval.">
                    <input id="exceptional-attribute" name="quality[]" type="checkbox" value="exceptional-attribute">
                    <label for="exceptional-attribute">Exceptional Attribute</label>
                    <select id="exceptional-attribute-select" hidden>
                        <option value="none">Select One</option>
                        <option value="body">Body</option>
                        <option value="agility">Agility</option>
                        <option value="reaction">Reaction</option>
                        <option value="strength">Strength</option>
                        <option value="willpower">Willpower</option>
                        <option value="logic">Logic</option>
                        <option value="intuition">Intuition</option>
                        <option value="charisma">Charisma</option>
                    </select>
                </td>
                <td>14</td>
                <td title="A character with the Distinctive Style quality has at least one aspect of his appearance, mannerism, or personality that makes him inconveniently memorable. Choices for Distinctive Style include, but are by no means limited to: tattoos that cannot be easily concealed, an accent or atypical manner of speaking, bizarre fashion choices, scars, gang or prison signs, flashy custom augmentations, or non-metahuman modifications like a tail. Note that what’s distinctive in one culture or location may not be in another.">
                    <input id="distinctive-style" name="quality[]" type="checkbox" value="distinctive-style">
                    <label for="distinctive-style">Distinctive Style</label>
                </td>
                <td>5</td>
            </tr>
            <tr>
                <td title="The First Impression quality enables a character to slide easily into new environments, situations, groups, and jobs. Whether infiltrating a gang, making contacts in a new city, or wrangling an invite to a private meet, the character gains a temporary +2 dice pool modifier for relevant Social Tests such as Negotiation and Con during the first meeting. This modifier does not apply to second and subsequent encounters.">
                    <input id="first-impression" name="quality[]" type="checkbox" value="first-impression">
                    <label for="first-impression">First Impression</label>
                </td>
                <td>11</td>
                <td title="The Elf Poser is a human character who wants to be an elf. She associates with elves as much as possible, talks like elves, and alters her appearance to resemble an elf. Characters with this quality may undergo cosmetic surgery to get elf ears and elf eyes, and they may successfully pass as elves and avoid any negative Social modifiers associated with being a non-elf.">
                    <input id="elf-poser" name="quality[]" type="checkbox" value="elf-poser">
                    <label for="elf-poser">Elf Poser</label>
                </td>
                <td>6</td>
            </tr>
            <tr>
                <td title="A technomancer or magic user with the Focused Concentration quality has the discipline to manipulate mana or Resonance more precisely than otherwise possible. This precision reduces stress to the magic user’s or technomancer’s body. She is able to sustain one spell/complex form with a force/level equal to her Focused Concentration rating without suffering any penalties. For example, a magic user with Focused Concentration rating 3 may sustain a Force 3 Armor spell without taking the negative dice pool modifier for sustaining a spell. Sustaining any additional spells or com- plex forms incurs the standard –2 dice pool modifier per spell or complex form sustained. This quality may only be taken by magic user characters that are able to cast spells and technomancers.">
                    <input id="focused-concentration" name="quality[]" type="checkbox" value="focused-concentration">
                    <label for="focused-concentration">Focused Concentration</label>
                    <select id="focused-concentration-select" hidden>
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
                <td>4-20</td>
                <td title="Characters with the Gremlins quality don’t get along with technology. Devices malfunction inexplicably, software crashes unexpectedly, vehicles refuse to start, components become unusually fragile at his touch, and wireless links suffer faltering connections and odd interference whenever he’s involved.">
                    <input id="gremlins" name="quality[]" type="checkbox" value="gremlins">
                    <label for="gremlins">Gremlins</label>
                </td>
                <td>4-16</td>
            </tr>
            <tr>
                <td title="The Gearhead is who you look for when it’s time to stomp on the gas and move. She’s a natural-born driver or pilot. When she’s at the wheel/stick/controls of a vehicle or drone, she has an intuitive understanding of its limitations and its capabilities and is able to coax whatever machine she’s controlling to perform at its best. During vehicle or chase combat, a Gearhead can increase the Speed of her vehicle or drone by 20 percent or increase the Handling modifier by +1 (player’s choice). She also receives a +2 dice pool modifier when attempting difficult maneuvers or stunts in the vehicle. This bonus lasts for 1D6 minutes.">
                    <input id="gearhead" name="quality[]" type="checkbox" value="gearhead">
                    <label for="gearhead">Gearhead</label>
                </td>
                <td>11</td>
                <td title="An Incompetent character possesses a total lack of knowledge or ability with a certain Active skill group— or, perhaps worse, they have some vague knowledge or the skills contained in the group, but they have neither the coordination nor the comprehension to come anywhere close to carrying it off properly. No matter how much effort they put into this area, they simply cannot grasp it—it would take a miracle for them to somehow, someday advance to the level of “poor” in
those skills.">
                    <input id="incompetent" name="quality[]" type="checkbox" value="incompetent">
                    <label for="incompetent">Incompetent</label>
                </td>
                <td>5</td>
            </tr>
            <tr>
                <td title="When a bug spirit with dripping mandibles comes call- ing, the character with Guts is the one most likely to stand and fight instead of freaking the hell out. Guts gives a character a +2 dice pool modifier on tests to resist fear and intimidation, including magically induced fear from spells or critter powers.">
                    <input id="guts" name="quality[]" type="checkbox" value="guts">
                    <label for="guts">Guts</label>
                </td>
                <td>10</td>
                <td title="A character with the Insomnia quality has trouble falling asleep and seldom feels well rested. Usually, this is only an annoyance. For runners, however, this can become a major problem when they are dependent on being able to rest at every opportunity to remain sharp.  Insomnia can lengthen the amount of time it takes for a character to recover Stun damage.">
                    <input id="insomnia" name="quality[]" type="checkbox" value="insomnia">
                    <label for="insomnia">Insomnia</label>
                </td>
                <td>10,15</td>
            </tr>
            <tr>
                <td title="High Pain Tolerance lets a character keep delivering the pain even if she’s had plenty piled on her own head.  A character with High Pain Tolerance can ignore one box of damage per rating point of this quality when calculating wound modifiers (see Wound Modifiers, p.  169). So a character with this quality at Rating 2 can take 4 boxes of damage but carry on without wound modifiers as if she only had 2 boxes of damage. The –1 wound modifier would then kick in when the character takes her fifth box in damage. This quality may not be used with the Pain Resistance adept power, pain editor bioware, or damage compensator bioware.">
                    <input id="high-pain" name="quality[]" type="checkbox" value="high-pain">
                    <label for="high-pain">High Pain Tolerance</label>
                </td>
                <td>7</td>
                <td title="The Loss of Confidence quality means something has caused the character to lose confidence in himself and one of his abilities. Though a skilled decker, he failed to hack into a Stuffer Shack grid, or despite high Agility, he glitched an easy Climbing Test and fell into a dumpster—whatever the reason, he now doubts himself and his abilities. In tests involving the affected skill, the character suffers a –2 dice pool modifier. If the character has a specialization with the skill, the character cannot use that specialization while suffering a loss of confidence.  The skill chosen for the character to have a Loss of Confidence must be one that the character prides himself in and has invested in building. Only skills with a rating 4 or higher may suffer the Loss of Confidence quality. Edge may not be used for tests involving this skill when the character is suffering Loss of Confidence.">
                    <input id="loss-of-confidence" name="quality[]" type="checkbox" value="loss-of-confidence">
                    <label for="loss-of-confidence">Loss Of Confidence</label>
                </td>
                <td>10</td>
            </tr>
            <tr>
                <td title="If a character knows her neighborhood better than anyone—the shortcuts, the hiding places, and the people she can trust—then she probably has the Home Ground quality. She knows the families who live there, their stories, and what the kids who moved out are doing; she knows the streets better than GridGuide, knows things that aren’t on GridGuide, and knows when GridGuide is wrong. She knows the politics of the gangs, who’s running for whom and who’s running from whom. But it’s not just the physical streets. Depending on the character, her Home Ground quality can manifest in ways specific to who and what she is.">
                    <input id="home-ground" name="quality[]" type="checkbox" value="home-ground">
                    <label for="home-ground">Home Ground</label>
                </td>
                <td>10</td>
                <td title="Characters with Low Pain Tolerance are particularly sensitive to pain; they incur a –1 wound modifier for every 2 boxes of cumulative damage, instead of the normal 3 boxes. This affects both Physical and Stun
damage tracks.">
                    <input id="low-pain-tolerance" name="quality[]" type="checkbox" value="low-pain-tolerance">
                    <label for="low-pain-tolerance">Low Pain Tolerance</label>
                </td>
                <td>9</td>
            </tr>
            <tr>
                <td title="A metahuman character with the Human-Looking quality can pass for human in most circumstances. Human NPCs respond with neutral attitudes toward such characters when making Social skill tests (p. 82), even those humans who are particularly biased against metahumans. The character may suffer increased animosity from metahuman NPCs who are prejudiced against humans and who either mistake him for human or distrust his motives for trying to look human. Only elves, dwarfs, and orks can take the Human-Looking quality.">
                    <input id="human-looking" name="quality[]" type="checkbox" value="human-looking">
                    <label for="human-looking">Human Looking</label>
                </td>
                <td>6</td>
                <td title="Influenced by Goblin Rock or over-hyped orxploitation trends, an Ork Poser is an elf or human character who alters her appearance to appear as an ork. Various cosmetic biomods—tusk implants, steroids, larynx alterations, etc.—allow him to successfully pass as an ork. Ork posers are an embarrassment to many orks, but some tolerate, if not appreciate, the compliment behind the effort. This means an ork who discovers the character’s secret may either become very hostile toward him or be willing to let the character join the “family”—provided he passes an appropriate hazing ritual to prove his “orkness.” An outed ork poser may also face stigma from other humans or elves as “race traitors,” if those humans/elves harbor any prejudice against orks.">
                    <input id="ork-poser" name="quality[]" type="checkbox" value="ork-poser">
                    <label for="ork-poser">Ork Poser</label>
                </td>
                <td>5</td>
            </tr>
            <tr>
                <td title="Bodies and minds have limits, but some people have the will to push right through those boundaries. For each level of Indomitable, a character receives a +1 increase to an Inherent limit of his choice (Mental, Physical, or Social). He can take up to three levels and can apply them in any way he chooses (+3 to one Inherent Limit, for example; or +2 to one Inherent and +1 to another; or +1 to all three).">
                    <input id="indomitable" name="quality[]" type="checkbox" value="indomitable">
                    <label for="indomitable">Indomitable</label>
                    <select id="indomitable-select" hidden>
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
                <td>8-24</td>
                <td title="With this quality the character is Prejudiced against members of a specific group of people: metahumans, Awakened, non-metahuman sapient critters, or some other group. The character is not merely intolerant—he is outspoken about his beliefs and may actively work against the target of his prejudice. Depending upon the degree of prejudice, this quality can get the character into trouble for expressing his views or when forced to confront the targets of his prejudice.">
                    <input id="prejudiced" name="quality[]" type="checkbox" value="prejudiced">
                    <label for="prejudiced">Prejudiced</label>
                </td>
                <td>3-10</td>
            </tr>
            <tr>
                <td title="Juryrigger gives a character an intuitive grasp of the inner workings and underlying principles of mechanical and electronic devices. She knows how to repair the broken, rejuvenate the worn, improve a device’s efficiency, or coax it into doing things it’s designers hadn’t intended. Characters with the Juryrigger quality receive a +2 dice pool modifier for Mechanical Tests when juryrigging gear. If the gamemaster decides what the character wants to accomplish is in fact possible, he determines the threshold for her success using the Build/Repair Table (p. 146) as a guideline, then reduces the threshold for the test by 1. While a successful Mechanics Skill Test enables the Juryrigger to perform amazing technical feats, everything she devises is temporary.">
                    <input id="juryrigger" name="quality[]" type="checkbox" value="juryrigger">
                    <label for="juryrigger">Juryrigger</label>
                </td>
                <td>10</td>
                <td title="A Scorched character is coping with neurological problems brought on by damage caused in some way by Black IC, Psychotropic IC, or BTL. The problem can manifest as short- or long-term memory loss, unexpected blackouts, frequent migraines, diminished senses (sight, touch, smell, etc.), and mood disorders such as paranoia and anxiety. The player chooses one specific effect of Scorched, and its effect should be pronounced enough to hinder the character and present potential plot hooks for the gamemaster.">
                    <input id="scorched" name="quality[]" type="checkbox" value="scorched">
                    <label for="scorched">Scorched</label>
                </td>
                <td>10</td>
            </tr>
            <tr>
                <td title="The dice roll and the coin flips this character’s way more often than not, giving her the chance to drop jaws in amazement at her good fortune. Lucky allows a character to possess an Edge attribute one point higher than his metatype maximum (for example, a human character could raise her Edge to 8). Note that taking this quality does not actually increase the character’s current Edge rating, it just allows her the opportunity to do so; the Karma cost for gaining the extra point must still be paid. This quality may only be taken once and must be approved by the gamemaster. The Lucky quality cannot be combined with Exceptional Attribute.">
                    <input id="lucky" name="quality[]" type="checkbox" value="lucky">
                    <label for="lucky">Lucky</label>
                </td>
                <td>12</td>
                <td title="A character with the Sensitive System quality has immuno-suppressive problems with cybernetic implants. Double all Essence losses caused by cyberware. Bioware implants, regardless of how they are grown or designed, are rejected by the character’s body.">
                    <input id="sensitive-system" name="quality[]" type="checkbox" value="sensitive-system">
                    <label for="sensitive-system">Sensitive System</label>
                </td>
                <td>12</td>
            </tr>
            <tr>
                <td title="This is the wonderful ability to potentially make a Fire- ball bounce away. For every 6 Karma spent on Magic Resistance, a character receives 1 additional die for Spell Resistance Tests. The Magical Resistance quality, however, is always “on”—the character cannot lower it to receive beneficial spells such as Heal. A character with Magic Resistance cannot take part in spells that require a voluntary subject; such spells automatically fail when used on magic-resistant characters.">
                    <input id="magical-resistance" name="quality[]" type="checkbox" value="magic-resistance">
                    <label for="magical-resistance">Magic Resistance</label>
                    <select id="magical-resistance-select" hidden>
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
                <td>6-24</td>
                <td title="Characters who suffer from Simsense Vertigo experience feelings of disorientation whenever they work with augmented reality, virtual reality, or simsense (including smartlinks, simrigs, and image links). Such characters receive a –2 dice pool modifier to all tests when interacting with AR, VR, or simsense.">
                    <input id="simsense-vertigo" name="quality[]" type="checkbox" value="simsense-vertigo">
                    <label for="simsense-vertigo">Simsense Vertigo</label>
                </td>
                <td>5</td>
            </tr>
            <tr>
                <td title="Everyone needs some help in life, even if it comes from someone relatively filmy and insubstantial. Mentor Spirit means the character follows a patron spirit (see Mentor Spirits, p. 320) that guides him in his practice of magic and provides certain advantages and disadvantages to his natural abilities. A character may change mentor spirits, but he may have only one mentor spirit at a time. To change mentor spirits, the character must first buy off the current mentor spirit as if it were a Negative quality. He can then purchase the quality again to follow a different mentor spirit. This cost represents the toll of divorcing from one mentor spirit and bonding with a new one.">
                    <input id="mentor-spirit" name="quality[]" type="checkbox" value="mentor-spirit">
                    <label for="mentor-spirit">Mentor Spirit</label>
                </td>
                <td>5</td>
                <td title="There are four types of SINs that fall under the SINner (Layered) quality: National SIN, Criminal SIN (either Corporate or National), Corporate Limited SIN, or Corporate Born. Individuals with SINs are required by law to always broadcast their SINs. A legal SIN is required for all legal purchases. This makes them very useful things to have, so those who are SINless generally get by with the use of fake SINs (p. 367) just so they can participate in society.">
                    <input id="sinner" name="quality[]" type="checkbox" value="sinner">
                    <label for="sinner">Sinner</label>
                </td>
                <td>5-25</td>
            </tr>
            <tr>
                <td title="A character with this quality has an innate combination of physical fitness, spatial awareness, and natural athletic or gymnastic talent. While the character may not be a world-class athlete and may require training to achieve peak performance, he is in prime physical shape for his size and weight class. The Natural Athlete adds a +2 dice pool modifier for Running and Gymnastics skill tests.">
                    <input id="natural-athlete" name="quality[]" type="checkbox" value="natural-athlete">
                    <label for="natural-athlete">Natural Athlete</label>
                </td>
                <td>7</td>
                <td title="Whether as a result of loss or trauma or due to innate psychological makeup, the Social Stress quality burdens the character with emotions that interfere with his ability to interact with others. A specific cause and trigger for the Social Stress must be established. For example, if his Social Stress is caused by survivor’s guilt after the loss of a close friend, unexpectedly encountering someone who looks similar to the lost friend will heighten stress. When a character is using Leadership or Etiquette skills, reduce the number of 1s required to glitch the test by 1. Gamemasters should call for more Social Tests for characters with Social Stress to determine how a character reacts to others, particularly if a situation related to the cause of their stress arises.">
                    <input id="social-stress" name="quality[]" type="checkbox" value="social-stress">
                    <label for="social-stress">Social Stress</label>
                </td>
                <td>8</td>
            </tr>
            <tr>
                <td title="This quality makes the character’s neural structure resistant to feedback. This gives her 1 point of natural biofeedback filtering, which is cumulative with a Biofeedback Filter program or a technomancer’s firewall (p. 251).">
                    <input id="natural-hardening" name="quality[]" type="checkbox" value="natural-hardening">
                    <label for="natural-hardening">Natural Hardening</label>
                </td>
                <td>10</td>
                <td title="A character with a Spirit Bane really torques off a certain type of spirit (p. 303). Whether the character has a reputation for harming this sort of spirit or something about her aura enrages them, spirits of the type affected by the Spirit Bane are likely to harass the character when she is in their presence, and they may be reluctant to obey or perform favors for the character or her friends. If spirits of this type are ordered to attack a party that includes the character, these spirits will single her out and attempt to destroy her first. Affected spirits will always use lethal force against these characters with the Spirit Bane quality. If the character with Spirit Bane tries to summon or bind this spirit, she suffers a –2 dice pool modifier for the attempt. If the summoner tries to banish a spirit of this type, the spirit receives a +2 dice pool modifier for resisting her attempt. Watchers and minions do not count for Spirit Bane, as they are constructs that are not summoned like normal spirits.">
                    <input id="spirit-bane" name="quality[]" type="checkbox" value="spirit-bane">
                    <label for="spirit-bane">Spirit Bane</label>
                </td>
                <td>7</td>
            </tr>
            <tr>
                <td title="The ability to casually sip poison can never be overrated. A character with Natural Immunity has an innate or developed immunity to one single disease or toxin.">
                    <input id="natural-immunity" name="quality[]" type="checkbox" value="natural-immunity">
                    <label for="natural-immunity">Natural Immunity</label>
                </td>
                <td>4,10</td>
                <td title="The character with the Uncouth quality has difficulty interacting with others. He acts impulsively, overreacts to any perceived provocation, and tends to do whatever pops into his head without considering the consequences (i.e., flipping off Mr. Johnson, calling a drunk troll a “Trog,” or responding to casual trash talk from a rival runner by punching her in the face). All Social Tests made by the character to resist acting improperly or impulsively receive a –2 dice pool modifier.">
                    <input id="uncouth" name="quality[]" type="checkbox" value="uncouth">
                    <label for="uncouth">Uncouth</label>
                </td>
                <td>14</td>
            </tr>
            <tr>
                <td title="A character with Photographic Memory can instantly recall facts, dates, numbers, or anything else he has seen or heard. The character gains a +2 dice pool modifier to all Memory Tests.">
                    <input id="photographic-memory" name="quality[]" type="checkbox" value="photographic-memory">
                    <label for="photographic-memory">Photographic Memory</label>
                </td>
                <td>6</td>
                <td title="An Uneducated character is not mentally impaired—she just never had the opportunity to learn. Whether because she and her family were isolated squatters, or were SINless, or otherwise underprivileged, she was denied access to the education system. She has only a rudimentary knowledge of reading, writing, and arithmetic.">
                    <input id="uneducated" name="quality[]" type="checkbox" value="uneducated">
                    <label for="uneducated">Uneducated</label>
                </td>
                <td>8</td>
            </tr>
            <tr>
                <td title="A character with the Quick Healer quality receives a +2 dice pool modifier to all Healing Tests made on/for/by her, including magical healing.">
                    <input id="quick-healer" name="quality[]" type="checkbox" value="quick-healer">
                    <label for="quick-healer">Quick Healer</label>
                </td>
                <td>3</td>
                <td title="A character with Unsteady Hands has mild shakes that affect the dexterity and finesse in his hands. The character suffers a –2 dice pool modifier for all Agility-based tests when symptoms manifest themselves. The condition could be physiological (an untreated genetic disorder or damaged nerves, for example), caused by psychological trauma, or even be symptomatic of age.  Certain augmentations or medications can mask these symptoms under normal circumstances. Under more stressful situations in the course of the run, there is a chance the Unsteady Hands condition can reappear.  The character makes an Agility + Body (4) Test following a stressful encounter (combat, for example). A successful test means the character does not experience the symptoms of this condition (this time). A failed test causes the difficulties associated with unsteady hands to re-emerge, and they remain with the character for the remainder of the run.">
                    <input id="unsteady-hands" name="quality[]" type="checkbox" value="unsteady-hands">
                    <label for="unsteady-hands">Unsteady Hands</label>
                </td>
                <td>7</td>
            </tr>
            <tr>
                <td title="A character with Resistance to Pathogens/Toxins can fight off diseases and drugs more easily than other characters and receives a +1 dice pool modifier to Resistance Tests. This quality comes at two levels: at 4 Karma the character is resistant to either pathogens or toxins, not both. If the character purchases this quality at 8 Karma, she receives the +1 modifier for resisting both.">
                    <input id="resistance" name="quality[]" type="checkbox" value="resistance">
                    <label for="resistance">Resistance to Pathogens/Toxins</label>
                </td>
                <td>4, 8</td>
                <td title="A character with a Weak Immune System has reduced resistance to infections and disease. Increase the Power of any disease by +2 for every Resistance Test. A character with Weak Immune System cannot take the Natural Immunity or Resistance to Pathogens/Toxins qualities. A Weak Immune System often results from immune-suppression treatments used in cybersurgery and bio-genetic procedures, so it is reasonable to believe that characters that have undergone extensive body modifications are more likely to acquire this quality.">
                    <input id="weak-immune-system" name="quality[]" type="checkbox" value="weak-immune-system">
                    <label for="weak-immune-system">Weak Immune System</label>
                </td>
                <td>10</td>
            </tr>
            <tr>
                <td title="Available only to magic users, the Spirit Affinity quality allows a character to be attuned to one type of spirit (see Spirits, p. 303). These spirits find the character interesting, are drawn to her, and are more inclined to assist her. They may be reluctant to attack the character, and if forced to do so they are likely to use nonlethal power. Watchers and minions do not count for this quality as they are constructed and are not summoned like normal spirits. Spirit Affinity provides magicians with 1 additional spirit service for each spirit of that type, and it also provides a +1 dice pool modifier for Binding Tests.">
                    <input id="spirit-affinity" name="quality[]" type="checkbox" value="spirit-affinity">
                    <label for="spirit-affinity">Spirit Affinity</label>
                </td>
                <td>7</td>
            </tr>
            <tr>
                <td title="Characters with the Toughness quality shrug off damage more easily than others. Such characters gain a +1 dice pool modifier to their Body when making Damage
Resistance tests.">
                    <input id="toughness" name="quality[]" type="checkbox" value="toughness">
                    <label for="toughness">Toughness</label>
                </td>
                <td>9</td>
            </tr>
            <tr>
                <td title="For each rating point in Will to Live, the character gains 1 additional Damage Overflow Box (p. 101). These additional boxes only allow the character to sustain additional damage before dying; they do not raise the threshold at which the character becomes unconscious or incapacitated, nor do they affect modifiers from the damage the character has taken.">
                    <input id="will-to-live" name="quality[]" type="checkbox" value="will-to-live">
                    <label for="will-to-live">Will To Live</label>
                    <select id="will-to-live-select" hidden>
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
                <td>3-9</td>
            </tr>
        </tbody>
    </table>
</section>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>
