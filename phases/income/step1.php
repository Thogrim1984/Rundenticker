<h2>Schritt 1: Entnehmen</h2>

<div>
    <form>
        <label for="step_3_1_withdrawelBp">Wieviele BP werden entnommen? <input id="step_3_1_withdrawelBp" type="number" min="0" value="0"></label> <br />
        <label for="step_3_1_withdrawelBpForKingdom"><input type="checkbox" id="step_3_1_withdrawelBpForKingdom"> Damit werden direkt Reichsprobleme gelöst.</label><br />
        <label for="step_3_1_loyCheck">LOY-Probe (Kontroll-SG + entnommene BP)</label> <br />
        <label for="step_3_1_loyCheck"><input type="checkbox" id="step_3_1_loyCheck"> Erfolg?</label><br />
        <button type="button" name="resultButton" id="step_3_1_resultButton">Weiter</button>
    </form>
</div>

<script>
    $("#step_3_1_resultButton").click(function() {

        var bpCost = $('#step_3_1_withdrawelBp').val();

        var resultText = [];
        if (bpCost > 0) {
            resultText.push(getResult([getResultObject("bp", updateActualBp(-bpCost))]));
            if (!($("#step_3_1_withdrawelBpForKingdom").is(':checked') || $("#step_3_1_loyCheck").is(':checked'))) {
                resultText.push(getResult([getResultObject("unrest", updateActualUnrest(bpCost))]));
            }
        } else {
            resultText = getResult([getResultObject("nothing", 0)]);
        }
        nextStep(resultText.join("<br />"), 3, 1);
    });
</script>