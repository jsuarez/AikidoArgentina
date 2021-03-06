/*
 * SCIPT: DropDown
 * AUTOR: Ivan Mattoni
 * EMPRESA: MyDesign
 * www.mydesign.com.ar
 *
 */

var ClassDropDown = function(options){

    /*  CONSTRUCTOR
     **************************************************************************/
    var DEFAULTS={
        selector_menu          :   '',    // [STRING]
        selector_cont_submenu  :   '',    // [STRING]
        speed_down             :   500,   // [INTEGER]
        speed_up               :   500    // [INTEGER]
    };

    options = $.extend({}, DEFAULTS, {}, options);

    $(document).ready(function(){
        $(options.selector_cont_submenu).each(function(){
            this.dropdown = {
                working : true,
                hover   : 0
            };

            $(this).find("a").hover(function(){
                var _dd = $(this).parent().parent()[0].dropdown;
                if( !_dd.working ) _dd.hover=1;

            }, function(){
                var _dd = $(this).parent().parent()[0].dropdown;
                _dd.hover=0;
            });
        });

        $(options.selector_menu).hover(function(){
            var el = $(this).next(".dropdown");
            if( el.length>0 ) drop_down(el);

        },function(){
            var el = $(this).next(".dropdown");            
            if( el.length>0 ) {
                drop_up(el);
                el[0].dropdown.hover=0;
            }
        });

     });


    /* PRIVATE METHODS
     **************************************************************************/
     var drop_down = function(el){
        el[0].dropdown.working=true;
        el.stop().animate({
            height  : 'show',
            opacity : 1
        }, options.speed_down, function(){el[0].dropdown.working=false;});
     };

     var drop_up = function(el){
         clearInterval(el[0].dropdown.temp);
         el[0].dropdown.temp = setInterval(function(){
            if( el[0].dropdown.hover==0 ){
                el.stop().animate({
                    height  : 'hide',
                    opacity : 0
                }, options.speed_up);

                clearInterval(el[0].dropdown.temp);
            }
         }, 500);
     };

}
