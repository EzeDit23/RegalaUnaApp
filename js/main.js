$(document).ready(function(){
   
    $('.miswitch a').click(function(){
        $('.switch-btn').toggleClass('on');
        
        if($('#seitch-btn').attr('class') == 'switch-btn on'){
            $('pricing-table-cont').toggleClass('rotando-tabla');
        }else{
            $('.pricing-table-cont').toggleClass('rotando-tabla');
           
        }
    });
    
});