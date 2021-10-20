<h2>Schritt 5: Militär</h2>


<div>
    <form>
        <fieldset id="step_2_5_militaryFieldset" class="activated">
            <label for="step_2_5_trainUnits"><input type="checkbox" id="step_2_5_trainUnits"> Einheiten ausbilden: BP ausgegeben <input id="step_2_5_trainUnitsCost" type="number" min="0" value="0"></label> <br />
            <label for="step_2_5_recruitUnits"><input type="checkbox" id="step_2_5_recruitUnits"> Einheiten rekrutieren: BP ausgegeben <input id="step_2_5_recruitUnitsCost" type="number" min="0" value="0"></label> <br />
            <label for="step_2_5_retrainUnits"><input type="checkbox" id="step_2_5_retrainUnits"> Einheiten umschulen: BP ausgegeben <input id="step_2_5_retrainUnitsCost" type="number" min="0" value="0"></label> <br />
            <label for=""><input type="checkbox" id="step_2_5_disbandUnits"> Einheiten auflösen: Stabilitätswurf gelungen?</label> <br />
            <fieldset id="step_2_5_disbandUnitsFieldset" class="activated">
                <label for="step_2_5_disbandUnitsSuccess"><input type="radio" name="step_2_5_disbandUnits" id="step_2_5_disbandUnitsSuccess"> Erfolg: Wie viele Einheiten? <input id="step_2_5_disbandUnitsSuccessCount" type="number" min="0" value="0"></label> <br />
                <label for="step_2_5_disbandUnitsFailure"><input type="radio" name="step_2_5_disbandUnits" id="step_2_5_disbandUnitsFailure"> Misserfolg: 1-4 Punkte daneben</label><br />
                <label for="step_2_5_disbandUnitsFumble"><input type="radio" name="step_2_5_disbandUnits" id="step_2_5_disbandUnitsFumble"> Misserfolg: 5+ Punkte daneben</label><br />
            </fieldset>
            <label for="step_2_5_trainCommanders"><input type="checkbox" id="step_2_5_trainCommanders"> Befehlshaber ausbilden: BP ausgegeben <input id="step_2_5_trainCommandersCost" type="number" min="0" value="0"></label> <br />
            <label for="step_2_5_xpStandby"><input type="checkbox" id="step_2_5_xpStandby"> Erfahrung für Einheiten in Bereitschaft verteilen.</label> <br />
            <label for="step_2_5_recruitMercenaries"><input type="checkbox" id="step_2_5_recruitMercenaries"> Söldner rekrutieren: BP ausgegeben <input id="step_2_5_recruitMercenariesCost" type="number" min="0" value="0"></label> <br />
            <label for="step_2_5_combineUnits"><input type="checkbox" id="step_2_5_combineUnits"> Einheiten zusammenschließen.</label> <br />
            <label for="step_2_5_splitUnits"><input type="checkbox" id="step_2_5_splitUnits"> Einheiten aufteilen.</label> <br />
            <label for="step_2_5_reformUnit"><input type="checkbox" id="step_2_5_reformUnit"> Einheiten neuformieren.</label> <br />
            <label for="step_2_5_buyEquipment"><input type="checkbox" id="step_2_5_buyEquipment"> Ausrüstung kaufen: BP ausgegeben <input id="step_2_5_buyEquipmentCost" type="number" min="0" value="0"></label> <br />
            <label for="step_2_5_equipUnits"><input type="checkbox" id="step_2_5_equipUnits"> Einheiten ausrüsten.</label> <br />
            <label for="step_2_5_transferEuipment"><input type="checkbox" id="step_2_5_transferEuipment"> Ausrüstung transferieren.</label> <br />
            <label for="step_2_5_splitEquipment"><input type="checkbox" id="step_2_5_splitEquipment"> Ausrüstung aufteilen.</label> <br />
        </fieldset>
        <label><input type="checkbox" id="step_2_5_noChanges"> Keine Änderungen.</label> <br />
        <button type="button" name="resultButton" id="step_2_5_resultButton">Weiter</button>
    </form>
</div>

<script>
    $("#step_2_5_resultButton").click(function() {

        var bpCost = $('#step_2_5_trainUnitsCost').val() + $('#step_2_5_recruitUnitsCost').val() + $('#step_2_5_retrainUnitsCost').val() + $('#step_2_5_trainCommandersCost').val() + $('#step_2_5_recruitMercenariesCost').val() + $('#step_2_5_buyEquipmentCost').val();
        var noChanges = true;


        var resultText = [];
        if ($("#step_2_5_noChanges").is(':checked')) {
            resultText.push('Denk dran, die Erfahrungspunkte/Aufstiege für Einheiten in Bereitschaft einzutragen.');
        } else {
            if (bpCost > 0) {
                resultText.push(getResult([getResultObject("bp", updateActualBp(bpCost))]));
                noChanges = false;
            }
            if ($("#step_2_5_disbandUnitsSuccess").is(':checked')) {
                resultText.push('Ereignis eintragen: Arbeitskräfte durch aufgelöste Einheiten - +' + ($('#step_2_5_disbandUnitsSuccessCount').val() * 2) + ' WIR.');
                noChanges = false;
            }
            if ($("#step_2_5_disbandUnitsFailure").is(':checked')) {
                resultText.push(getResult([getResultObject("unrest", updateActualUnrest(1))]));
                noChanges = false;
            }
            if ($("#step_2_5_disbandUnitsFumble").is(':checked')) {
                resultText.push(getResult([getResultObject("unrest", updateActualUnrest(getDiceRoll(4)))]));
                noChanges = false;
            }
            if (noChanges) {
                resultText = getResult([getResultObject("nothing", 0)]);
            }
        }
        nextStep(resultText.join("<br />", 2, 5));
    });

    $("input[id=step_2_5_noChanges]").change(function() {
        if (this.checked) {
            $("#step_2_5_militaryFieldset").toggleClass('activated deactivated');
        } else {
            $("#step_2_5_militaryFieldset").toggleClass('deactivated activated');
        }
    });

    $("input[id=step_2_5_disbandUnits]").change(function() {
        if (this.checked) {
            $("#step_2_5_disbandUnitsFieldset").toggleClass('activated deactivated');
        } else {
            $("#step_2_5_disbandUnitsFieldset").toggleClass('deactivated activated');
        }
    });
</script>