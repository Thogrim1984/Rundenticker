<h2>Schritt 3: Füllt leere Plätze für magische Gegenstände auf</h2>

<div>
    <form id="step_1_3_districts">
    </form>
    <button name="interimResultButton" id="step_1_3_interimResultButton">Weiter</button>
    <div id="step_1_3_interimResult">
    </div>
    <button type="button" id="step_1_3_resultButton" name="resultButton">Weiter</button>
</div>

<script>
    $("#step_1_3_districts").html("");
    for (let i = 1; i <= $("#districtCount").val(); i++) {
        var districtEntry = `
            <fieldset id="step_1_3_district${i}">
                <legend>Viertel ${i}:</legend>
                <label>Gibt es freie Plätze für magische Gegenstände? <input type="checkbox" id="step_1_3_freeYesDistrict${i}"> Ja</label><br />
                <label>Wollt ihr magische Gegenstände entfernen? <input type="checkbox" id="step_1_3_emptyYesDistrict${i}"> Ja</label>
            </fieldset>
            `;

        $("#step_1_3_districts").append(districtEntry)
    }

    $("#step_1_3_interimResultButton").click(function() {
        $("#step_1_3_interimResult").html("");
        var newMagicItemInDistrict = [];
        var deleteMagicItemInDistrict = false;

        for (let i = 1; i > 0; i++) {
            if ($("#step_1_3_district" + i).length > 0) {
                if ($("input[id='step_1_3_freeYesDistrict" + i + "']:checked").val()) {
                    if (getDiceRoll(100) > 50) {
                        newMagicItemInDistrict.push(i);
                    }
                }
                if (!deleteMagicItemInDistrict && $("input[id='step_1_3_emptyYesDistrict" + i + "']:checked").val()) {
                    deleteMagicItemInDistrict = true;
                }
            } else {
                break;
            }
        }

        var newMagicItemSpan = "";
        if (newMagicItemInDistrict.length > 0) {
            newMagicItemSpan = (newMagicItemInDistrict.length == 1 ? 'Im Viertel ' : 'In den Vierteln ') + newMagicItemInDistrict.join(", ") + ' werden neue Gegenstände aufgefüllt (Würfel in den Tabellen der Word-Datei "Gegenstandstabellen" den Gegenstand).';
        } else {
            newMagicItemSpan = "Es wird in keinem Viertel ein magischer Gegenstandplatz aufgefüllt.";
        }
        $("#step_1_3_interimResult").append(newMagicItemSpan);

        if (deleteMagicItemInDistrict) {



            var deleteMagicItemSpan = `
                <br />
                <br />
                <span>Um einen Gegenstand aus der Liste zu entfernen, macht einen WIR-Wurf gegen den Kontroll-SG + 20/35/50. Bei Erfolg wird der Gegenstand aus der Liste entfernt. Jeder entfernte Gegenstand nach dem Ersten in einer Runde resultiert in einem Malus von -1 WIR für ein Jahr.</span>
                <form>
                    <label>So viele Gegenstände wurden entfernt: <input id="step_1_3_deleteMagicItem" type="number" min="0" value="0"></input></label>
                </form>
                `;

            $("#step_1_3_interimResult").append(deleteMagicItemSpan);
        }
    });


    $("#step_1_3_resultButton").click(function() {
        var resultText = [];
        if ($("#step_1_3_deleteMagicItem").length > 0 && $("#step_1_3_deleteMagicItem").val() > 1) {
            resultText.push('Ereignis "Wirtschaftsmanipulation" mit WIR -' + ($("#step_1_3_deleteMagicItem").val() - 1) + ' für ein Jahr eintragen.');
        } else {
            resultText = getResult([getResultObject("nothing", 0)]);
        }
        nextStep(resultText.join("<br />"), 1, 3);
    });
</script>