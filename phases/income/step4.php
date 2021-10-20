<h2>Schritt 4: Steuern eintreiben</h2>

<div>
    <form>
        <label for="step_3_4_collectTaxes">Wie hoch ist der WIR-Wurf? <input id="step_3_4_collectTaxes" type="number" value="0"></label> <br />
        <label><input type="checkbox" id="step_3_4_collectTaxesControlDc"> Wurde der Kontroll-SG erreicht?</label><br />
        <button type="button" name="resultButton" id="step_3_4_resultButton">Weiter</button>
    </form>
</div>

<script>
    $("#step_3_4_resultButton").click(function() {

        var bp = $('#step_3_4_collectTaxes').val();

        if ($("#step_3_4_collectTaxesControlDc").is(':checked')) {
            bp /= 3;
        } else {
            bp /= 4;
        }

        var resultText = [];
        if (bp > 0) {
            resultText.push(getResult([getResultObject("bp", updateActualBp(bp))]));
        } else {
            resultText = getResult([getResultObject("nothing", 0)]);
        }
        nextStep(resultText.join("<br />"), 3, 4);
    });
</script>