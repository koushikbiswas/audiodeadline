$(document).ready(function(){

    $('.carousel').carousel('pause');

    $('.btnblue').click(function() {

        //alert($('.btnblue').index(this));

        $('.carousel').carousel($('.btnblue').index(this));

        //scrolltotop



        $('html, body').animate({scrollTop:$('#myCarousel').offset().top}, 'slow');

        return false;



    });






    $('#myCarousel').carousel({
        interval: 5000
    });



    console.log(jQuery(".contactboxblock form" ).hasClass( "sent" ).length);

    if(jQuery(".contactboxblock form").length>0){
        var formclass=jQuery(".contactboxblock form" ).attr('class');


        //if(formclass.length>0)
        if(formclass.indexOf('sent')>0){

            jQuery('#popthankyou').modal('show');

            setTimeout(function () {

                jQuery('#popthankyou').modal('hide');

            },6000);

        }
    }

    console.log(jQuery(".landingforminnerwrapper form" ).hasClass( "sent" ).length);

    if(jQuery(".landingforminnerwrapper form").length>0){
        var formclass=jQuery(".landingforminnerwrapper form" ).attr('class');


        //if(formclass.length>0)
        if(formclass.indexOf('sent')>0){

            jQuery('#popthankyouhome').modal('show');

            setTimeout(function () {

                jQuery('#popthankyouhome').modal('hide');

            },100000);

        }
    }

/*
    jQuery.fn.thankhomecenter = function(parent) {
        if (parent) {
            parent = this.parent();
        } else {
            parent = window;
        }
        this.css({
            "position": "absolute",
            "top": ((($(parent).height() - this.outerHeight()) / 2) + $(parent).scrollTop() + "px"),
            "left": ((($(parent).width() - this.outerWidth()) / 2) + $(parent).scrollLeft() + "px")
        });
        return this;
    }

    $("#popthankyouhome").thankhomecenter(false);*/

/*

    $(function(){
     $('.facebooksharebut').click(function(){
          title=$(this).attr('posttitle');
          name=$(this).attr('postname');
         description=$(this).attr('postdescription');
         image=$(this).attr('postimage');
         id=$(this).attr('postid');
         repurl=$(this).attr('repurl');
         //alert(title);
         // alert(image);
         // alert(description);
         // e.preventDefault();

         var link222 = repurl+'/blogdetails/?id='+id+'&title='+title;

         FB.ui(
             {
                 method: 'feed',
                 name: name,
                 link: link222,
                 picture: image,
                 // caption: 'Top 3 reasons why you should care about your finance',
                 description: description,
                 message: ""
             });
        })
    })
*/











































});

