<h2>Schritt 2: Einlagern</h2>

<div>
    <form>
        <label for="step_3_2_depositBpCount">Wieviele BP werden durch Einlagern generiert? <input id="step_3_2_depositBpCount" type="number" min="0" value="0"></label><br />
        <button type="button" name="resultButton" id="step_3_2_resultButton">Weiter</button>
    </form>
</div>

<script>
    $("#step_3_2_resultButton").click(function() {

        var bp = Number($('#step_3_2_depositBpCount').val());

        var resultText = [];
        if (bp > 0) {
            resultText.push(getResult([getResultObject("bp", updateActualBp(bp))]));
        } else {
            resultText = getResult([getResultObject("nothing", 0)]);
        }
        nextStep(resultText.join("<br />"), 3, 2);
    });
</script>