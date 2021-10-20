<h2>Schritt 3: Geländeverbesserungen bauen</h2>

Ihr könnt so viele Geländeverbesserungen bauen:

<table>
    <tr>
        <th>Reichsgröße</th>
        <th>Geländeverbesserungen</th>
    </tr>
    <tr>
        <td>1-10</td>
        <td>2</td>
    </tr>
    <tr>
        <td>11-25</td>
        <td>3</td>
    </tr>
    <tr>
        <td>26-50</td>
        <td>5</td>
    </tr>
    <tr>
        <td>51-100</td>
        <td>7</td>
    </tr>
    <tr>
        <td>101-200</td>
        <td>9</td>
    </tr>
    <tr>
        <td>201+</td>
        <td>12</td>
    </tr>
</table>

<div data-activatable="yes" id="step_3">
    <form>
        <label for="2_3_buildTerrainImprovements">Wie viele BP wurden für Geländeverbesseungen ausgegeben?</label>
        <input id="2_3_buildTerrainImprovements" type="number" min="0" value="0"> <br>
        <label for="2_3_prepareSettlements">Wie viele BP wurden für Siedlungsvorbereitungen ausgegeben?</label>
        <input id="2_3_prepareSettlements" type="number" min="0" value="0"> <br>
        <button type="button" name="2_3_resultButton">Weiter</button>
    </form>
</div>

<div data-activatable="yes" id="step_4">
    Ergebnis:<br>
    <span id="2_3_result"></span><br>
    <button type="button" name="next_step" value="4" onclick="load_next_step(this.value)">Weiter</button>
</div>

<script>
    $(document).ready(function() {
        $("button[name='2_3_resultButton']").click(function() {

            var bpCost = Number($('#2_3_buildTerrainImprovements').val()) + Number($('#2_3_prepareSettlements').val());

            var resultText = [];
            if (bpCost > 0) {
                resultText.push(getResult([getResultObject("bp", bpCost)]));
            } else {
                resultText = getResult([getResultObject("nothing", 0)]);
            }
            if ($('#2_3_prepareSettlements').val() != 0) {
                resultText.push('Siedlungsvorbereitungen mit Enddatum in die Ereignisse eintragen.');
            }
            $('#2_3_result').html(resultText.join("<br />"));
        });
    });
</script>