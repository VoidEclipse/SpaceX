var slides = 	[

           	 	'images/slider/slide.jpg',

            	'images/slider/slide1.jpg',

            	'images/slider/slide2.jpg',

            	'images/slider/slide3.png'

	        	], i=1;

    function slider(){
        if(i > (slides.length-1)){
            	$('#headerwrap').animate({'opacity':'0'},200,function(){
                i=1;
                $('#headerwrap').css({'background':'url('+slides[0]+')no-repeat center top'});
                $('#headerwrap').css({'background-attachment' : 'relative'});
                $('#headerwrap').css({'background-position': 'center center'});
                $('#headerwrap').css({'background-size': '100%'});
                $('#headerwrap').css({'-webkit-background-size': 'cover'});
                $('#headerwrap').css({'background-size': 'cover'});
            });
            $('#headerwrap').animate({'opacity':'1'},200);
        }else{
           		$('#headerwrap').animate({'opacity':'0'},200,function(){
                $('#headerwrap').css({'background':'url('+slides[i]+')no-repeat center top'});
                $('#headerwrap').css({'background-attachment' : 'relative'});
                $('#headerwrap').css({'background-position': 'center center'});
                $('#headerwrap').css({'background-size': '100%'});
                $('#headerwrap').css({'-webkit-background-size': 'cover'});
                $('#headerwrap').css({'background-size': 'cover'});
                i++;
            });
            $('#headerwrap').animate({'opacity':'1'},200);
        }
    }
    	var intervalSLider = setInterval(slider,5000);
