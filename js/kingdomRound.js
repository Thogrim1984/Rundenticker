const roundNumbers = [
    ['upkeep', 1, 2, 3, 4],
    ['edict', 1, 2, 3, 4, 5, 6],
    ['income', 1, 2, 3, 4],
    ['event', 1]
];

function getResult(results) {

    var completeResults = [];

    results.forEach(function (item) {

        if (item.type == "nothing") {
            completeResults.push('Keine Änderungen nötig');
        } else if (item.type == "unrest") {
            completeResults.push(`Unruhe ändern auf ${item.number}.`);
        } else if (item.type == "bp") {
            completeResults.push(`BP ändern auf ${item.number}.`);
        }
    });

    return completeResults;
}

function getResultObject(type, number) {
    var result = {};

    result.type = type;
    result.number = number;

    return result;
}

function updateActualBp(bp) {
    var actualBp = $("actualBp").val() + bp;

    $("actualBp").val() = actualBp;

    return actualBp;
}

function updateActualUnrest(unrest) {
    var actualUnrest = $("#actualUnrest").val() + unrest;

    $("#actualUnrest").val() = actualUnrest;

    return actualUnrest;
}

function nextStep(result, actualPhase, actualStep) {
    var resultDialog = document.getElementById('resultDialog'),
        continueButton = document.getElementById("continueButton"),
        backButton = document.getElementById("backButton");

    $("#result").html(result);
    showDialog();

    continueButton.addEventListener('click', loadNextStep);
    backButton.addEventListener('click', closeDialog);


    function showDialog() {
        resultDialog.showModal();
    }

    function closeDialog() {
        resultDialog.close();
    }

    function loadNextStep() {
        // Im 2D-Array ist die erste Dimension die Phasen (0/1 bis 3/4), die zweite Dimension beinhaltet die Schritte mit identischem Index, da auf der 0 die Phasennamen (englisch) sind.
        var nextStep = 0,
            nextPhase = "";

        if (roundNumbers[Number(actualPhase - 1)][Number(actualStep + 1)] != null) {
            nextStep = roundNumbers[actualPhase - 1][actualStep + 1];
            nextPhase = roundNumbers[actualPhase - 1][0];
            actualizeOverview(actualPhase, Number(actualStep + 1));
        } else {
            nextStep = roundNumbers[actualPhase][1];
            nextPhase = roundNumbers[actualPhase][0];
            actualizeOverview(Number(actualPhase + 1), 1);
        }

        var headlinePhase = nextPhase.charAt(0).toUpperCase() + nextPhase.slice(1);

        $("#contentHeadline").load(`./phases/headlines.php #headline${headlinePhase}Phase`);
        $("#content").load(`./phases/${nextPhase}/step${nextStep}.php`);
        closeDialog();
    }

    function actualizeOverview(actualPhase, actualStep) {
        $(`#overviewPhase${actualPhase}`).attr("class", "overviewActualStep");
        $(`#overviewPhase${actualPhase}step${actualStep}`).attr("class", "overviewActualStep");
    }
}

