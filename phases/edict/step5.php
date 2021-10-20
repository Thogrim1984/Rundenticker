<h2>Schritt 5: Militär</h2>


<div data-activatable="yes" id="step_3">
    <form>
        <fieldset id="2_5_militaryFieldset" class="activated">
            <input type="checkbox" id="2_5_trainUnits"> <label for="2_5_trainUnits">Einheiten ausbilden: BP ausgegeben</label> <input id="2_5_trainUnitsCost" type="number" min="0" value="0"> <br>
            <input type="checkbox" id="2_5_recruitUnits"> <label for="2_5_recruitUnits">Einheiten rekrutieren: BP ausgegeben</label> <input id="2_5_recruitUnitsCost" type="number" min="0" value="0"> <br>
            <input type="checkbox" id="2_5_retrainUnits"> <label for="2_5_retrainUnits">Einheiten umschulen: BP ausgegeben</label> <input id="2_5_retrainUnitsCost" type="number" min="0" value="0"> <br>
            <input type="checkbox" id="2_5_disbandUnits"> <label for="">Einheiten auflösen: Stabilitätswurf gelungen?</label> <br>
            <fieldset id="2_5_disbandUnitsFieldset" class="activated">
                <input type="radio" name="2_5_disbandUnits" id="2_5_disbandUnitsSuccess"> <label for="2_5_disbandUnitsSuccess">Erfolg: Wie viele Einheiten?</label> <input id="2_5_disbandUnitsSuccessCount" type="number" min="0" value="0"> <br>
                <input type="radio" name="2_5_disbandUnits" id="2_5_disbandUnitsFailure"> <label for="2_5_disbandUnitsFailure">Misserfolg: 1-4 Punkte daneben</label><br>
                <input type="radio" name="2_5_disbandUnits" id="2_5_disbandUnitsFumble"> <label for="2_5_disbandUnitsFumble">Misserfolg: 5+ Punkte daneben</label><br>
            </fieldset>
            <input type="checkbox" id="2_5_trainCommanders"> <label for="2_5_trainCommanders">Befehlshaber ausbilden: BP ausgegeben</label> <input id="2_5_trainCommandersCost" type="number" min="0" value="0"> <br>
            <input type="checkbox" id="2_5_xpStandby"> <label for="2_5_xpStandby">Erfahrung für Einheiten in Bereitschaft verteilen.</label> <br>
            <input type="checkbox" id="2_5_recruitMercenaries"> <label for="2_5_recruitMercenaries">Söldner rekrutieren: BP ausgegeben</label> <input id="2_5_recruitMercenariesCost" type="number" min="0" value="0"> <br>
            <input type="checkbox" id="2_5_combineUnits"> <label for="2_5_combineUnits">Einheiten zusammenschließen.</label> <br>
            <input type="checkbox" id="2_5_splitUnits"> <label for="2_5_splitUnits">Einheiten aufteilen.</label> <br>
            <input type="checkbox" id="2_5_reformUnit"> <label for="2_5_reformUnit">Einheiten neuformieren.</label> <br>
            <input type="checkbox" id="2_5_buyEquipment"> <label for="2_5_buyEquipment">Ausrüstung kaufen: BP ausgegeben</label> <input id="2_5_buyEquipmentCost" type="number" min="0" value="0"> <br>
            <input type="checkbox" id="2_5_equipUnits"> <label for="2_5_equipUnits">Einheiten ausrüsten.</label> <br>
            <input type="checkbox" id="2_5_transferEuipment"> <label for="2_5_transferEuipment">Ausrüstung transferieren.</label> <br>
            <input type="checkbox" id="2_5_splitEquipment"> <label for="2_5_splitEquipment">Ausrüstung aufteilen.</label> <br>
        </fieldset>
        <input type="checkbox" id="2_5_noChanges"> <label for="">Keine Änderungen.</label> <br>
        <button type="button" name="2_5_resultButton">Weiter</button>
    </form>
</div>

<div data-activatable="yes" id="step_4">
    Ergebnis:<br>
    <span id="2_5_result"></span>
    <span id="2-5-result_bp" class="hiddenResult">BP ändern auf <span id="2-5-result_bp_number">[Nummer]</span>.</span>
    <span id="2-5-keine_aenderung" class="hiddenResult">Keine Änderungen nötig.</span>
    <button type="button" name="next_step" value="4" onclick="load_next_step(this.value)">Weiter</button>
</div>

<script>
    $(document).ready(function() {
        $("button[name='2_5_resultButton']").click(function() {

            var bpCost = Number($('#2_5_trainUnitsCost').val()) + Number($('#2_5_recruitUnitsCost').val()) + Number($('#2_5_retrainUnitsCost').val()) + Number($('#2_5_trainCommandersCost').val()) + Number($('#2_5_recruitMercenariesCost').val()) + Number($('#2_5_buyEquipmentCost').val());
            var noChanges = true;


            var resultText = [];
            if ($("#2_5_noChanges").is(':checked')) {
                resultText.push('Denk dran, die Erfahrungspunkte/Aufstiege für Einheiten in Bereitschaft einzutragen.');
            } else {
                if (bpCost > 0) {
                    resultText.push(getResult([getResultObject("bp", bpCost)]));
                    noChanges = false;
                }
                if ($("#2_5_disbandUnitsSuccess").is(':checked')) {
                    resultText.push('Ereignis eintragen: Arbeitskräfte durch aufgelöste Einheiten - +' + (Number($('#2_5_disbandUnitsSuccessCount').val()) * 2) + ' WIR.');
                    noChanges = false;
                }
                if ($("#2_5_disbandUnitsFailure").is(':checked')) {
                    resultText.push(getResult([getResultObject("unrest", 1)]));
                    noChanges = false;
                }
                if ($("#2_5_disbandUnitsFumble").is(':checked')) {
                    resultText.push(getResult([getResultObject("unrest", getDiceRoll(4))]));
                    noChanges = false;
                }
                if (noChanges) {
                    resultText = getResult([getResultObject("nothing", 0)]);
                }
            }
            $('#2_5_result').html(resultText.join("<br />"));
        });

        $("input[id=2_5_noChanges]").change(function() {
            if (this.checked) {
                $("#2_5_militaryFieldset").toggleClass('activated deactivated');
            } else {
                $("#2_5_militaryFieldset").toggleClass('deactivated activated');
            }
        });

        $("input[id=2_5_disbandUnits]").change(function() {
            if (this.checked) {
                $("#2_5_disbandUnitsFieldset").toggleClass('activated deactivated');
            } else {
                $("#2_5_disbandUnitsFieldset").toggleClass('deactivated activated');
            }
        });
    });
</script>