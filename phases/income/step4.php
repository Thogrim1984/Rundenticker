<h2>Schritt 4: Steuern eintreiben</h2>

<div data-activatable="yes" id="step_3">
    <form>
        <label for="3_4_collectTaxes">Wie hoch ist der WIR-Wurf?</label>
        <input id="3_4_collectTaxes" type="number" value="0"> <br>
        <input type="checkbox" name="" id="3_4_collectTaxesControlDc"> <label for="">Wurde der Kontroll-SG erreicht?</label>
    <button type="button" name="3_4_resultButton">Weiter</button>
    </form>
</div>

<div data-activatable="yes" id="step_4">
    Ergebnis:<br>    
    <span id="3_4_result"></span><br>
    <button type="button" name="next_step" value="4" onclick="load_next_step(this.value)">Weiter</button>
</div>

<script>
    $(document).ready(function() {
        $("button[name='3_4_resultButton']").click(function() {

            var bpCost =  Number($('#3_4_collectTaxes').val());

            if ($("#3_4_collectTaxesControlDc").is(':checked')) {
                bpCost /=  3;
            } else {
                bpCost /=  4;
            }

            var resultText = [];
            if (bpCost > 0) {
                resultText.push(getResult([getResultObject("bp", bpCost)]));
            } else {
                resultText = getResult([getResultObject("nothing", 0)]);
            }
            $('#3_4_result').html(resultText.join("<br />"));
        });
    });
</script>