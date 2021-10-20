<h2>Schritt 4: Modifiziert die Unruhe</h2>

<div>
    <form>
        <label for="step_1_4_negativeValues">Wie viele Reichsattribute sind im negativen Bereich?</label>
        <input id="step_1_4_negativeValues" type="number" min="0" max="3" value="0"> <br>
        <button type="button" id="step_1_4_resultButton" name="resultButton">Weiter</button>
    </form>
</div>

<script>
        $("#step_1_4_resultButton").click(function() {
            var negativeValues = $("#step_1_4_negativeValues").val();
            var resultText = [];

            var actualUnrest = $("#actualUnrest").val();

            if (negativeValues > 0) {
                resultText.push(getResult([getResultObject("unrest", updateActualUnrest(2 * negativeValues))]));
                actualUnrest = $("#actualUnrest").val();
            }

            if (actualUnrest > 10 && actualUnrest < 20) {
                resultText.push("Da eure Unruhe über 10 liegt, verliert ihr ein Hexfeld eurer Wahl.");
            }

            if (actualUnrest > 19) {
                resultText.push("Da eure Unruhe bei mindestens 20 liegt, verfällt euer Reich in Anarchie.");
            }

            if (resultText.length == 0) {
                resultText.push(getResult([getResultObject("nothing", 0)]))
            }

            nextStep(resultText.join("<br />"), 1, 4);
        });
</script>