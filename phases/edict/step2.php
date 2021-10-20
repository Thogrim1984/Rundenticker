<h2>Schritt 2: Einnehmen und Aufgeben von Hexfeldern</h2>

Ihr könnt so viele Hexfelder einnehmen:

<table>
    <tr>
        <th>Reichsgröße</th>
        <th>Hexfelder</th>
    </tr>
    <tr>
        <td>1-10</td>
        <td>1</td>
    </tr>
    <tr>
        <td>11-25</td>
        <td>2</td>
    </tr>
    <tr>
        <td>26-50</td>
        <td>3</td>
    </tr>
    <tr>
        <td>51-100</td>
        <td>4</td>
    </tr>
    <tr>
        <td>101-200</td>
        <td>8</td>
    </tr>
    <tr>
        <td>201+</td>
        <td>12</td>
    </tr>
</table>

<div>
    <form>
        <label for="step_2_2_claimHex">Wie viele Hexfelder wurden eingenommen? <input id="step_2_2_claimHex" type="number" min="0" value="0"></label> <br />
        <label for="step_2_2_abandonHex">Wie viele Hexfelder ohne Siedlungen wurden aufgegeben? <input id="step_2_2_abandonHex" type="number" min="0" value="0"></label><br />
        <label for="step_2_2_abandonSettlement">Wie viele Hexfelder mit Siedlungen wurden aufgegeben? <input id="step_2_2_abandonSettlement" type="number" min="0" value="0"></label><br />
        <button type="button" name="resultButton" id="step_2_2_resultButton">Weiter</button>
    </form>
</div>

<script>
    $("#step_2_2_resultButton").click(function() {

        var hexCount = 0;
        var newUnrest = 0;
        var bpCost = 0;
        var noChange = true;

        if ($('#step_2_2_claimHex').val() > 0) {
            hexCount += ('#step_2_2_claimHex').val();
            bpCost += $('#step_2_2_claimHex').val();
        }

        if ($('#step_2_2_abandonHex').val() > 0) {
            newUnrest += $('#step_2_2_abandonHex').val();
            hexCount -= $('#step_2_2_abandonHex').val();
        }

        if ($('#step_2_2_abandonSettlement').val() > 0) {
            newUnrest += $('#step_2_2_abandonSettlement').val() * 3;
            hexCount -= $('#step_2_2_abandonSettlement').val();
        }


        var resultText = [];
        if ($('#step_2_2_abandonSettlement').val() > 0) {
            resultText.push('Anzahl Hexfelder um ' + (hexCount < 0 ? hexCount : '+' + hexCount) + ' verändern. (An Siedlungen, Flüsse, Orientierungspunkte und Höhlen denken)');
            noChange = false;
        }
        if (hexCount != 0 && $('#step_2_2_abandonSettlement').val() == 0) {
            resultText.push('Anzahl Hexfelder um ' + (hexCount < 0 ? hexCount : '+' + hexCount) + ' verändern. (An Flüsse, Orientierungspunkte und Höhlen denken)');
            noChange = false;
        }
        if (newUnrest > 0) {
            resultText.push(getResult([getResultObject("unrest", updateActualUnrest(newUnrest))]));
            noChange = false;
        }
        if (bpCost > 0) {
            resultText.push(getResult([getResultObject("bp", updateActualBp(-bpCost))]));
            noChange = false;
        }
        if (noChange) {
            resultText = getResult([getResultObject("nothing", 0)]);
        }
        nextStep(resultText.join("<br />"), 2, 2);
    });
</script>