$(document).ready(function(){
    $('.menu_toggle').click(function(){
        $('.menu').slideToggle().css('display','flex');
    });

    $('.modal_toggle').click(function(){
        $('.overlay').slideToggle();
    });

    var copyBtn = document.querySelector('.copy');  
    copyBtn.addEventListener('click', function(event) {  
    // Выборка ссылки с электронной почтой 
    
    var Link = document.querySelector('.value');  
    var range = document.createRange();  
    range.selectNode(Link);  
    window.getSelection().addRange(range);  
        
    try {  
        // Теперь, когда мы выбрали текст ссылки, выполним команду копирования
        var successful = document.execCommand('copy');  
        var msg = successful ? 'successful' : 'unsuccessful';  
        console.log('Copy command was ' + msg);  
        $(this).siblings('.tooltip').fadeIn(function(){
            $('.tooltip').fadeOut(3000);
        });
        
    } catch(err) {  
        console.log('Oops, unable to copy');  
    }  
        
    // Снятие выделения - ВНИМАНИЕ: вы должны использовать
    // removeRange(range) когда это возможно
    window.getSelection().removeAllRanges();  
    });
});