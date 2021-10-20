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

<div data-activatable="yes" id="step_3">
    <form>
        <label for="3_3_sellItemsForBp">Wieviele BP werden durch die Verkäufe generiert?</label>
        <input id="3_3_sellItemsForBp" type="number" min="0" value="0"> <br>
    <button type="button" name="3_3_resultButton">Weiter</button>
    </form>
</div>

<div data-activatable="yes" id="step_4">
    Ergebnis:<br>    
    <span id="3_3_result"></span>
    <span id="1-2-result_bp" class="hiddenResult">BP ändern auf <span id="1-2-result_bp_number">[Nummer]</span>.</span>
    <span id="1-4-keine_aenderung" class="hiddenResult">Keine Änderungen nötig.</span>
    <button type="button" name="next_step" value="4" onclick="load_next_step(this.value)">Weiter</button>
</div>

<script>
    $(document).ready(function() {
        $("button[name='3_3_resultButton']").click(function() {

            var bpCost = Number($('#3_3_sellItemsForBp').val());

            var resultText = [];
            if (bpCost > 0) {
                resultText.push(getResult([getResultObject("bp", bpCost)]));
            } else {
                resultText = getResult([getResultObject("nothing", 0)]);
            }
            $('#3_3_result').html(resultText.join("<br />"));
        });
    });
</script>