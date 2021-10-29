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

        nextStep(result, 2, 6);
    });
</script>