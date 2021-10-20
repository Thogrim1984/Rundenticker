<h2>Schritt 2: Einlagern</h2>

<div data-activatable="yes" id="step_3">
    <form>
        <label for="3_2_depositBpCount">Wieviele BP werden durch Einlagern generiert?</label>
        <input id="3_2_depositBpCount" type="number" min="0" value="0"> <br>
        <button type="button" name="3_2_resultButton">Weiter</button>
    </form>
</div>

<div data-activatable="yes" id="step_4">
    Ergebnis:<br>
    <span id="3_2_result"></span><br>
    <button type="button" name="next_step" value="4" onclick="load_next_step(this.value)">Weiter</button>
</div>

<script>
    $(document).ready(function() {
        $("button[name='3_2_resultButton']").click(function() {

            var bpCost = Number($('#3_2_depositBpCount').val());

            var resultText = [];
            if (bpCost > 0) {
                resultText.push(getResult([getResultObject("bp", bpCost)]));
            } else {
                resultText = getResult([getResultObject("nothing", 0)]);
            }
            $('#3_2_result').html(resultText.join("<br />"));
        });
    });
</script>