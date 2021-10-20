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

<div>
    <form>
        <label for="step_2_3_buildTerrainImprovements">Wie viele BP wurden für Geländeverbesseungen ausgegeben? <input id="step_2_3_buildTerrainImprovements" type="number" min="0" value="0"></label><br />
        <label for="step_2_3_prepareSettlements">Wie viele BP wurden für Siedlungsvorbereitungen ausgegeben? <input id="step_2_3_prepareSettlements" type="number" min="0" value="0"></label><br />
        <button type="button" name="resultButton" id="step_2_3_resultButton">Weiter</button>
    </form>
</div>

<script>
        $("#step_2_3_resultButton").click(function() {

            var bpCost = $('#step_2_3_buildTerrainImprovements').val() + $('#step_2_3_prepareSettlements').val();

            var resultText = [];
            if (bpCost > 0) {
                resultText.push(getResult([getResultObject("bp", updateActualeBp(bpCost))]));
            } else {
                resultText = getResult([getResultObject("nothing", 0)]);
            }
            if ($('#step_2_3_prepareSettlements').val() != 0) {
                resultText.push('Siedlungsvorbereitungen mit Enddatum in die Ereignisse eintragen.');
            }
            nextStep(resultText.join("<br />"), 2, 3);
        });
</script>