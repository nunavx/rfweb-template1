window.onload = function onLoad() {
    var $server = $('.server-n:nth-child(2) .status-round .progress1');
    
    if ($server = true) {
        $('.server-n:nth-child(2) .status-round .progress1').attr('class', 'progress progress2');
        
        var circle1 = new ProgressBar.Circle('.progress1', {
            color: '#9aba4c',
            duration: 3000,
            strokeWidth: 10,
            easing: 'easeInOut'
        });

        circle1.animate($('.progress1').attr('data-online')/5000);
        
        var circle2 = new ProgressBar.Circle('.progress2', {
        color: '#9aba4c',
        duration: 3000,
        strokeWidth: 10,
        easing: 'easeInOut'
        });
        
        circle2.animate($('.progress2').attr('data-online')/5000);
    }
    else {
        var circle1 = new ProgressBar.Circle('.progress1', {
            color: '#9aba4c',
            duration: 3000,
            strokeWidth: 10,
            easing: 'easeInOut'
        });

        circle1.animate($('.progress1').attr('data-online')/5000);
    }
};
    