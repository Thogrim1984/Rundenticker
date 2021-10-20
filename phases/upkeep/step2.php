<h2>Schritt 2: Bezahlt den Unterhalt</h2>

<div>
    <form>
        <label for="step_1_2_actualUpkeep">Unterhalt: <input id="step_1_2_actualUpkeep" type="number" min="0" value="0"></label><br />
        <button type="button" name="resultButton" id="step_1_2_resultButton">Weiter</button>
    </form>
</div>

<script>
    $("#step_1_2_resultButton").click(function() {
        var actualUpkeep = $("#step_1_2_actualUpkeep").val();

        resultText = "";
        if ($("#actualBp").val() - actualUpkeep < 0) {
            var results = [getResultObject("bp", updateActualBp(-actualUpkeep)), getResultObject("unrest", updateActualUnrest(2))];
            resultText = getResult(results);
        } else if (actualUpkeep == 0) {
            resultText = getResult([getResultObject("nothing", 0)]);
        } else {
            resultText = getResult([getResultObject("bp", updateActualBp(-actualUpkeep))]);
        }

        nextStep(resultText.join("<br />"), 1, 2);
    });
</script>