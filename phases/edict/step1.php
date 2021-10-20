<h2>Schritt 1: Regierungsämter zuweisen</h2>

<div>
    <p>Ändert das Regierungssystem, wenn ihr das wollt.</p>
    <p>Teilt die (N)SCs den Regierungsämtern zu und verlagert die Schwerpunkte.</p>
    <p>Zeit für Anträge und Beschlüsse</p>
</div>

<div>
    <form>
        <label>Sucht Kandidaten für ein Amt.</label><br>
        <button type="button" id="step_2_1_searchGovernmentCandidateButton">Suche hinzufügen</button><br>
        <div id="step_2_1_candidateSearches">
        </div>
        <button type="button" id="step_2_1_resultButton" name="resultButton">Weiter</button>
    </form>
</div>

<script>
    $("#step_2_1_searchGovernmentCandidateButton").click(function() {
        var counter = $("#step_2_1_candidateSearches fieldset").length + 1;

        var candidateSearchFieldset = `    
                <fieldset id="step_2_1_candidateSearch_${counter}">        
                    <form id="step_2_1_candidateSearchForm_${counter}">
                        <label>Dauer: 1W<span id="step_2_1_candidateSearchDurationSpan_${counter}">2</span> Monate</label><br>
                        <label>Amt:</label>
                        <input type="text"><br>
                        <ul id="step_2_1_candidateSearchRequirementList_${counter}">
                        </ul>
                        <button type="button" onclick="addRequirementToCandidateSearch(${counter})">Bedingung hinzufügen</button><br>
                    </form>
                 </fieldset>
            `;

        $("#step_2_1_candidateSearches").append(candidateSearchFieldset);

        addRequirementToCandidateSearch(counter);
    });

    $("#step_2_1_resultButton").click(function() {

        var resultText = [];
        if ($("step_2_1_candidateSearches fieldset").length > 0) {
            resultText.push('Für alle ' + $("#step_2_1_candidateSearches").length + ' Kandidaten geheim würfeln und die Suche als Ereignis eintragen');
        } else {
            resultText = getResult([getResultObject("nothing", 0)]);
        }
        nextStep(resultText.join("<br />"), 2, 1);
    });

    function deleteRequirementFromCandidateSearch(searchCounter, requirementCounter) {
        $("#step_2_1_candidateSearchRequirementItem_" + searchCounter + "_" + requirementCounter).remove();

        $("#step_2_1_candidateSearchDurationSpan_" + searchCounter).html(changeDie(Number($("#step_2_1_candidateSearchDurationSpan_" + searchCounter).html()), '-'));
    }

    function addRequirementToCandidateSearch(searchCounter) {

        candidateSearchRequirementList = $("#step_2_1_candidateSearchRequirementList_" + searchCounter);
        var requirementCounter = candidateSearchRequirementList.lenmgth + 1;

        candidateSearchRequirementList.append(`
            <li id="step_2_1_candidateSearchRequirementItem_${searchCounter}_${requirementCounter}">
                <label>Bedingung ${requirementCounter}: </label>
                <input type="text">
                <button type="button" onclick="deleteRequirementFromCandidateSearch(${searchCounter}, ${requirementCounter})">x</button>
            </li>
        `);

        $("#step_2_1_candidateSearchDurationSpan_" + searchCounter).html(changeDie(Number($("#step_2_1_candidateSearchDurationSpan_" + searchCounter).html()), '+'));
    }
</script>