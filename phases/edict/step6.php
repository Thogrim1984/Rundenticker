<h2>Schritt 6: Erlasse</h2>

<div data-activatable="yes" id="step_3">
    <form>
        <label>Ändert die Erlasse, wenn ihr das wollt.</label><br>
    </form>
</div>

<table>
    <tr>
        <th>Festlichkeiten</th>
        <th>LOY</th>
        <th>Unterhalt</th>
    </tr>
    <tr>
        <td>Keine</td>
        <td>-1/-10%</td>
        <td>+0</td>
    </tr>
    <tr>
        <td>1</td>
        <td>+1/+10%</td>
        <td>+1/+10%</td>
    </tr>
    <tr>
        <td>6</td>
        <td>+2/+20%</td>
        <td>+2/+20%</td>
    </tr>
    <tr>
        <td>12</td>
        <td>+3/+30%</td>
        <td>+4/+40%</td>
    </tr>
    <tr>
        <td>24</td>
        <td>+4/+40%</td>
        <td>+8/+80%</td>
    </tr>
</table>

<table>
    <tr>
        <th>Förderung</th>
        <th>STA</th>
        <th>Unruhe</th>
    </tr>
    <tr>
        <td>Keine</td>
        <td>-1/-10%</td>
        <td>+0</td>
    </tr>
    <tr>
        <td>Schein</td>
        <td>+1/+10%</td>
        <td>+1/+10%</td>
    </tr>
    <tr>
        <td>Standard</td>
        <td>+2/+20%</td>
        <td>+2/+20%</td>
    </tr>
    <tr>
        <td>Aggressiv</td>
        <td>+3/+30%</td>
        <td>+4/+40%</td>
    </tr>
    <tr>
        <td>Expansionistisch</td>
        <td>+4/+40%</td>
        <td>+8/+80%</td>
    </tr>
</table>

<table>
    <tr>
        <th>Besteuerung</th>
        <th>STA</th>
        <th>Unruhe</th>
    </tr>
    <tr>
        <td>Keine</td>
        <td>+0</td>
        <td>+1/+10%</td>
    </tr>
    <tr>
        <td>Leicht</td>
        <td>+1/+10%</td>
        <td>-1/-10%</td>
    </tr>
    <tr>
        <td>Normal</td>
        <td>+2/+20%</td>
        <td>-2/-20%</td>
    </tr>
    <tr>
        <td>Schwer</td>
        <td>+3/+30%</td>
        <td>-4/-40%</td>
    </tr>
    <tr>
        <td>Erdrückend</td>
        <td>+4/+40%</td>
        <td>-8/-80%</td>
    </tr>
</table>

Spezialerlasse:
<ul>
    <li>Diplomatie</li>
    <li>Erkundung</li>
    <li>Handel</li>
    <li>Vasallen</li>
</ul>


<div>
    <button type="button" name="resultButton" id="step_2_6_resultButton">Weiter</button>
</div>

<script>
    $("#step_2_6_resultButton").click(function() {
        nextStep('Denk dran, die neuen Erlasse einzutragen', 2, 6);
    });
</script>