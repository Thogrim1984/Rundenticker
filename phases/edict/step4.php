<h2>Schritt 4: Siedlungen gründen und ausbauen</h2>

Ihr könnt so viele Geländeverbesserungen bauen:

<table>
    <tr>
        <th>Reichsgröße</th>
        <th>Neue Siedlungen</th>
        <th>Neue Gebäude</th>
    </tr>
    <tr>
        <td>1-10</td>
        <td>1</td>
        <td>2</td>
    </tr>
    <tr>
        <td>11-25</td>
        <td>1</td>
        <td>2</td>
    </tr>
    <tr>
        <td>26-50</td>
        <td>1</td>
        <td>5</td>
    </tr>
    <tr>
        <td>51-100</td>
        <td>2</td>
        <td>10</td>
    </tr>
    <tr>
        <td>101-200</td>
        <td>3</td>
        <td>20</td>
    </tr>
    <tr>
        <td>201+</td>
        <td>4</td>
        <td>&#8734;</td>
    </tr>
</table>

<div>
    <form>
        <label for="step_2_4_foundSettlements">Wie viele Siedlungen wurden gegründet (vorbereitetes Gelände vorausgesetzt)? <input id="step_2_4_foundSettlements" type="number" min="0" value="0"></label><br />
        <label for="step_2_4_constructBuildings">Wie viele BP wurden für Gebäude ausgegeben? <input id="step_2_4_constructBuildings" type="number" min="0" value="0"></label><br />
        <button type="button" name="resultButton" id="step_2_4_resultButton">Weiter</button>
    </form>
</div>

<script>
    $("#step_2_4_resultButton").click(function() {

        var bpCost = Number($('#step_2_4_constructBuildings').val());

        var resultText = [];
        if (bpCost > 0) {
            resultText = getResult([getResultObject("bp", updateActualBp(-bpCost))]);
        } else {
            resultText = getResult([getResultObject("nothing", 0)]);
        }
        nextStep(resultText.join("<br />"), 2, 4);
    });
</script>