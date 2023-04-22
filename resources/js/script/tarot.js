$(function () {
    'use strict'
    var countCard = 0;

    $('.tarot-cards').on('mouseup', function (event) {
        if (countCard < maxcard) {
            let card_id = this.id;
            $('#' + card_id).hide();
            if(countCard == 0){
                $('.card1').fadeIn(500);
                $('#number1').hide();
            }
            if(countCard == 1){
                $('.card2').fadeIn(500);
                $('#number2').hide();
            }
            if(countCard == 2){
                $('.card3').fadeIn(500);
                $('#number3').hide();
            }
            if(countCard == 3){
                $('.card4').fadeIn(500);
                $('#number4').hide();
            }
            if(countCard == 4){
                $('.card5').fadeIn(500);
                $('#number5').hide();
            }
            if(countCard == 5){
                $('.card6').fadeIn(500);
                $('#number6').hide();
            }
            if(countCard == 6){
                $('.card7').fadeIn(500);
                $('#number7').hide();
            }
            if(countCard == 7){
                $('.card8').fadeIn(500);
                $('#number8').hide();
            }
            countCard++;

        }

        if(countCard == maxcard){
            $('.info-box').fadeIn(500);
        }
    });

});