

$(function(){
  

    var index = 1;
    var animTempo = 500;
    var displayTime = 4000;
    for (var i=1 ; i<=4 ; i++){
        $('blockquote').eq(i).hide();
        $('blockquote').eq(i).removeClass('d-none');
    }
    
    function change(quote , nextQuote){
        $('#q'+ quote).fadeOut(animTempo, function(){
            $('#q'+ nextQuote).fadeIn(animTempo)
        });
    }
    setInterval(function(){
        if(index == 5){
            change(index , 1);
            index = 1
        }
        else{
            change(index , index + 1);
            index++;
        }
        
    },displayTime);
    
});
