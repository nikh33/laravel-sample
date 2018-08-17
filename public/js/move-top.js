/* UItoTop jQuery Plugin 1.2 | Matt Varone | http://www.mattvarone.com/web-design/uitotop-jquery-plugin */
(function($){$.fn.UItoTop=function(options){var defaults={text:'To Top',min:200,inDelay:600,outDelay:400,containerID:'toTop',containerHoverID:'toTopHover',scrollSpeed:1000,easingType:'linear'},settings=$.extend(defaults,options),containerIDhash='#'+settings.containerID,containerHoverIDHash='#'+settings.containerHoverID;$('body').append('<a href="#" id="'+settings.containerID+'">'+settings.text+'</a>');$(containerIDhash).hide().on('click.UItoTop',function(){$('html, body').animate({scrollTop:0},settings.scrollSpeed,settings.easingType);$('#'+settings.containerHoverID,this).stop().animate({'opacity':0},settings.inDelay,settings.easingType);return false;}).prepend('<span id="'+settings.containerHoverID+'"></span>').hover(function(){$(containerHoverIDHash,this).stop().animate({'opacity':1},600,'linear');},function(){$(containerHoverIDHash,this).stop().animate({'opacity':0},700,'linear');});$(window).scroll(function(){var sd=$(window).scrollTop();if(typeof document.body.style.maxHeight==="undefined"){$(containerIDhash).css({'position':'absolute','top':sd+$(window).height()-50});}
if(sd>settings.min)
$(containerIDhash).fadeIn(settings.inDelay);else
$(containerIDhash).fadeOut(settings.Outdelay);});};})(jQuery);





    $('#subscribe').click(function (e) {
    e.preventDefault();
    var emailval = $('input#email').val();
    console.log(emailval);
    if (emailval == "") {
        alert("Insert a Email!");
        return false;
    }
    
     var nameval = $('input#name').val();
    console.log(nameval);
    if (nameval == "") {
        alert("Insert a Name!");
        return false;
    }
     var nickval = $('input#nick').val();
    console.log(nickval);
    if (nickval == "") {
        alert("Insert a Nick!");
        return false;
    }
     var mobileval = $('input#mobile').val();
    console.log(mobileval);
    if (mobileval == "") {
        alert("Insert a Mobile!");
        return false;
    }
	if (/^\d{10}$/.test(mobileval)) {
       } else {
        alert("Invalid Mobile number !")
        number.focus()
       return false
   }
     var expetiseval = $('#expetise').val();
    console.log(expetiseval);
    if (expetiseval == "") {
        alert("Insert a Expetise!");
        return false;
    }
    if (expetiseval == "Other") {
         var expetiseval = $('#others').val();
           if (expetiseval == "") {
               alert("Insert a Expetise!");
                return false;
           }
    }
    
    
     var availablityval = $('#availablity').val();
    console.log(availablityval);
    if (availablityval == "") {
        alert("Insert a Availablity!");
        return false;
    }
    url1 = 'ajaxSend';
    
        $.ajax({
            cache: false, // no cache
          
            type: 'GET', // request method
            url:url1+'/email/'+emailval+'/name/'+nameval+'/nick/'+nickval+'/mobile/'+mobileval+'/expetise/'+expetiseval+'/availablity/'+availablityval,
            data: {},
            success: function (data) {
                console.log(data);
                $('#frm').hide();
               $('#suces').show();
			    $('#suces').html(data);
            }
        });
  
});