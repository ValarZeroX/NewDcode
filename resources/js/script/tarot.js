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
            if(countCard == 8){
                $('.card9').fadeIn(500);
                $('#number9').hide();
            }
            if(countCard == 9){
                $('.card10').fadeIn(500);
                $('#number10').hide();
            }
            countCard++;

        }

        if(countCard == maxcard){
            $('.info-box').fadeIn(500);
        }
    });

    $('.masses-card').on('mouseup', function (event) {
            let masses_id = this.id;
            $('.masses_info').slideUp();
            $('#masses_'+masses_id).slideDown();
    });
    // 選取所有的 h2 和 h3 標題
    var headers = $('.well h2, .well h3');
    var toc = $('#toc ul'); // 目錄的列表容器

    headers.each(function (index) {
        var header = $(this);
        var headerId = header.attr('id');

        // 如果標題沒有 id，生成一個唯一的 id
        if (!headerId) {
            headerId = 'header-' + index;
            header.attr('id', headerId);
        }

        // 創建目錄項目
        var tagName = header.prop('tagName').toLowerCase();
        var className = "tabh3"
        if (tagName == "h2") {
            className = "tabh2"
        }
        var listItem = $('<li></li>')
            .addClass(className) // 將 h2 和 h3 標題設置不同的 class
            .append(
                $('<a></a>')
                    .attr('href', '#' + headerId)
                    .text(header.text())
            );

        // 添加到目錄中
        toc.append(listItem);
    });
});