<div>
    <form>
        <label for="actualUnrest"> Aktuelle Unruhe:</label>
        <input id="actualUnrest" type="number" min="0" value="0"> <br>
        <label for="actualBp"> Aktuelle Baupunkte:</label>
        <input id="actualBp" type="number" value="0"> <br>
        <label for="districtCount"> Anzahl Siedlungsviertel:</label>
        <input id="districtCount" type="number" min="1" value="1"> <br>
        <button type="button" id="basicResultButton" name="resultButton">Start</button>
    </form>
</div>

<script>
    $("#basicResultButton").click(function() {
        var result = `
        <p>Start-Unruhe: ${$("#actualUnrest").val()}</p>
        <p>Start-BP: ${$("#actualBp").val()}</p>
        <p>Viertelanzahl: ${$("#districtCount").val()}</p>
        `;

        nextStep(result, 1, 0);
    });


    /* $("button[name='basicResultButton']").click(function() {
        var districtForm = document.getElementById("1_3_districts");

        districtForm.innerHTML = "";
        for (let i = 1; i <= document.getElementById("districtCount").value; i++) {
            var br = document.createElement("br");

            var districtFieldset = document.createElement("fieldset");
            districtFieldset.id = "1_3_district" + i;

            var districtLegend = document.createElement("legend");
            districtLegend.innerHTML = "Viertel " + i + ":";

            var freeSlots = document.createElement("label");
            freeSlots.innerHTML = "Gibt es freie Plätze für magische Gegenstände?";

            var freeSlotsRadioYes = document.createElement("input");
            freeSlotsRadioYes.type = "radio";
            freeSlotsRadioYes.id = "1_3_freeYesDistrict" + i;
            freeSlotsRadioYes.name = "1_3_freeDistrict" + i;
            freeSlotsRadioYes.value = "true";

            var freeSlotsLabelYes = document.createElement("label");
            freeSlotsLabelYes.for = "1_3_freeYesDistrict" + i;
            freeSlotsLabelYes.innerHTML = "Ja";

            var freeSlotsRadioNo = document.createElement("input");
            freeSlotsRadioNo.type = "radio";
            freeSlotsRadioNo.id = "1_3_freeNoDistrict" + i;
            freeSlotsRadioNo.name = "1_3_freeDistrict" + i;
            freeSlotsRadioNo.value = "false";

            var freeSlotsLabelNo = document.createElement("label");
            freeSlotsLabelNo.for = "1_3_freeNoDistrict" + i;
            freeSlotsLabelNo.innerHTML = "Nein";

            var emptySlots = document.createElement("label");
            emptySlots.innerHTML = "Wollt ihr magische Gegenstände entfernen?";

            var emptySlotsRadioYes = document.createElement("input");
            emptySlotsRadioYes.type = "radio";
            emptySlotsRadioYes.id = "1_3_emptyYesDistrict" + i;
            emptySlotsRadioYes.name = "1_3_emptyDistrict" + i;
            emptySlotsRadioYes.value = "true";

            var emptySlotsLabelYes = document.createElement("label");
            emptySlotsLabelYes.for = "1_3_emptyYesDistrict" + i;
            emptySlotsLabelYes.innerHTML = "Ja";

            var emptySlotsRadioNo = document.createElement("input");
            emptySlotsRadioNo.type = "radio";
            emptySlotsRadioNo.id = "1_3_emptyNoDistrict" + i;
            emptySlotsRadioNo.name = "1_3_emptyDistrict" + i;
            emptySlotsRadioNo.value = "false";

            var emptySlotsLabelNo = document.createElement("label");
            emptySlotsLabelNo.for = "1_3_emptyNoDistrict" + i;
            emptySlotsLabelNo.innerHTML = "Nein";

            districtFieldset.appendChild(districtLegend);
            districtFieldset.appendChild(br.cloneNode(false));
            districtFieldset.appendChild(freeSlots);
            districtFieldset.appendChild(freeSlotsRadioYes);
            districtFieldset.appendChild(freeSlotsLabelYes);
            districtFieldset.appendChild(freeSlotsRadioNo);
            districtFieldset.appendChild(freeSlotsLabelNo);
            districtFieldset.appendChild(br.cloneNode(false));
            districtFieldset.appendChild(br.cloneNode(false));
            districtFieldset.appendChild(emptySlots);
            districtFieldset.appendChild(emptySlotsRadioYes);
            districtFieldset.appendChild(emptySlotsLabelYes);
            districtFieldset.appendChild(emptySlotsRadioNo);
            districtFieldset.appendChild(emptySlotsLabelNo);
            districtFieldset.appendChild(br.cloneNode(false));

            districtForm.appendChild(districtFieldset);
        }
    }); */
</script>