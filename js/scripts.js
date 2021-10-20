function load_next_step(actual_step_number) {
    var next_step_number = Number(actual_step_number) + 1;

    $('#step_' + next_step_number + ' :input').removeAttr('disabled');

    if (actual_step_number != 0) {
        $('#step_' + actual_step_number + ' :input').attr('disabled', true);
    }
}

function getDiceRoll(die) {
    return Math.floor(Math.random() * die) + 1;
}

function changeDie(die, upOrDown) {
    var diceList = [2,3,4,6,8,10,12,20,100];

    if (upOrDown == "+") {
        if(die != 100) {
            return diceList[diceList.indexOf(die)+1];
        }        
    } else {
        if(die != 2) {
            return diceList[diceList.indexOf(die)-1];
        }        
    }
    return die;
}