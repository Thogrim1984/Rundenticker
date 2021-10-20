<h2>Schritt 1: Entnehmen</h2>

<div data-activatable="yes" id="step_3">
    <form>
        <label for="3_1_withdrawelBp">Wieviele BP werden entnommen?</label>
        <input id="3_1_withdrawelBp" type="number" min="0" value="0"> <br>
        <input type="checkbox" name="" id="3_1_withdrawelBpForKingdom"> <label for="3_1_withdrawelBpForKingdom">Damit werden direkt Reichsprobleme gelöst.</label><br>
        <label for="3_1_loyCheck">LOY-Probe (Kontroll-SG + entnommene BP)</label> <br>
        <input type="checkbox" name="" id="3_1_loyCheck"> <label for="3_1_loyCheck">Erfolg?</label><br>
        <button type="button" name="3_1_resultButton">Weiter</button>
    </form>
</div>

<div data-activatable="yes" id="step_4">
    Ergebnis:<br>
    <span id="3_1_result"></span>
    <button type="button" name="next_step" value="4" onclick="load_next_step(this.value)">Weiter</button>
</div>

<script>
    $(document).ready(function() {
        $("button[name='3_1_resultButton']").click(function() {

            var bpCost = -Number($('#3_1_withdrawelBp').val());

            var resultText = [];
            if (bpCost > 0) {
                resultText.push(getResult([getResultObject("bp", bpCost)]));
                if (!($("#3_1_withdrawelBpForKingdom").is(':checked') || $("#3_1_loyCheck").is(':checked'))) {
                    resultText.push(getResult([getResultObject("unrest", bpCost)]));
                }
            } else {
                resultText = getResult([getResultObject("nothing", 0)]);
            }
            $('#3_1_result').html(resultText.join("<br />"));
        });
    });
</script>