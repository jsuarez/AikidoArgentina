var Gallery = new ClassGalleryFix({
    basename    : 'js/jquery.galleryfix',
    selector    : '.content-photos',
    countByPage : 8,
    effect      : 3,
    fancybox :{
        url   : 'js/jquery.fancybox',
        rel   : 'group'
    },
    callback : function(countPage){
        for( var i=1; i<=countPage; i++ ){
            $("#pages").append('<a href="#">'+i+'</a>');
        }

        $("#pages a").click(function(e){
                        e.preventDefault();
                        Gallery.gopage(parseInt(this.innerHTML));

                        $("#pages a").css("color", "#005B84");
                        $(this).css("color", "#D8922C");
                     });
                     
        $("#pages a:first").css("color", "#D8922C");
    },
    onLoadBefore : function(indexPage){
        $("#pages a").css("color", "#005B84")
                     .eq(indexPage-1).css("color", "#D8922C");
    }
});
