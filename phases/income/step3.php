<h2>Schritt 3: Wertsachen verkaufen</h2>

Eine WIR-Probe pro Siedlungsviertel möglich,

<table>
    <tr>
        <th>Gegenstand</th>
        <th>WIR-SG</th>
        <th>BP-Gewinn</th>
    </tr>
    <tr>
        <td>Gering</td>
        <td>Kontroll-SG +20</td>
        <td>2</td>
    </tr>
    <tr>
        <td>Durchschnittlich</td>
        <td>Kontroll-SG +35</td>
        <td>8</td>
    </tr>
    <tr>
        <td>Mächtig</td>
        <td>Kontroll-SG +50</td>
        <td>15</td>
    </tr>
</table>

<div>
    <form>
        <label for="step_3_3_sellItemsForBp">Wieviele BP werden durch die Verkäufe generiert? <input id="step_3_3_sellItemsForBp" type="number" min="0" value="0"></label> <br />
        <button type="button" name="resultButton" id="step_3_3_resultButton">Weiter</button>
    </form>
</div>

<script>
    $("#step_3_3_resultButton").click(function() {

        var bp = $('#step_3_3_sellItemsForBp').val();

        var resultText = [];
        if (bp > 0) {
            resultText.push(getResult([getResultObject("bp", updateActualBp(bp))]));
        } else {
            resultText = getResult([getResultObject("nothing", 0)]);
        }
        nextStep(resultText.join("<br />", 3, 3));
    });
</script>