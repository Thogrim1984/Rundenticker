<h2>Schritt 1: Die Stabilität des Reiches ermitteln</h2>

<div>
    STA-Probe:
    <form>
        <label><input type="radio" name="step_1_1_stabilityRoll" value="success"> Erfolg</label> <br />
        <label><input type="radio" name="step_1_1_stabilityRoll" value="failure"> Misserfolg &lt5</label> <br />
        <label><input type="radio" name="step_1_1_stabilityRoll" value="fumble"> Misserfolg &gt4</label> <br />
        <button type="button" name="resultButton" id="step_1_1_resultButton">Weiter</button>
    </form>
</div>

<script>
    $("#step_1_1_resultButton").click(function() {
        var staRollValue = $("input[name='step_1_1_stabilityRoll']:checked").val();
        var resultText;
        switch (staRollValue) {
            case "success":
                if ($("#actualUnrest").val() == 0) {
                    resultText = getResult([getResultObject("bp", updateActualBp(1))]);
                } else {
                    resultText = getResult([getResultObject("unrest", updateActualUnrest(-1))]);
                }
                break;
            case "failure":
                resultText = getResult([getResultObject("unrest", updateActualUnrest(1))]);
                break;
            case "fumble":
                resultText = getResult([getResultObject("unrest", updateActualUnrest(getDiceRoll(4)))]);
                break;
            default:
                break;
        }
        nextStep(resultText.join("<br />"), 1, 1);
    });
</script>