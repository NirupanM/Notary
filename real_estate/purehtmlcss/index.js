$(document).ready(function() {
    // $(".tabs-menu a").click(function(event) {
    //     event.preventDefault();
    //     $(this).parent().addClass("current");
    //     $(this).parent().siblings().removeClass("current");
    //     var tab = $(this).attr("href");
    //     $(".tab-content").not(tab).css("display", "none");
    //     $(tab).fadeIn();
    // });


	$('#prev').css("background-image", "url('p3.png')");

	$('#next').css("background-image", "url('n3.png')");    

	$('#sqftL').css("background-image", "url('icons/acre.png')"); 

	$('#sqft').css("background-image", "url('icons/house.jpg')"); 


	$('#baths').css("background-image", "url('icons/bath.jpg')");   

	$('#beds').css("background-image", "url('icons/bed.png')");   

			//$('#outerDT').css("visibility", "show"); 
	
	$('#bed-count span').text('3');
	$('#bath-count span').text('2');
	$('#sqft-count span').text('1543');
	$('#sqftL-count span').text('2400');



    $('#tab-1').css("background-image", "url('frsn1.jpg')");

    $('#tab-2').css("background-image", "url('frsn5.jpeg')");


    $('#gl_img1').attr('src',"h1/i1.jpg");
    $('#gl_img2').attr('src',"h1/i2.jpg");
    $('#gl_img3').attr('src',"h1/i3.jpg");
    $('#gl_img4').attr('src',"h1/i4.jpg");
    $('#gl_img5').attr('src',"h1/i5.jpg");
    $('#gl_img6').attr('src',"h1/i6.jpg");
    $('#gl_img7').attr('src',"h1/i7.jpg");
    $('#gl_img8').attr('src',"h1/i8.jpg");
    $('#gl_img9').attr('src',"h1/i9.jpg");
    $('#gl_img10').attr('src',"h1/i10.jpg");
    $('#gl_img11').attr('src',"h1/i11.jpg");
    $('#gl_img12').attr('src',"h1/i12.jpg");
    $('#gl_img13').attr('src',"h1/i13.jpg");
    $('#gl_img14').attr('src',"h1/i14.jpg");
    $('#gl_img15').attr('src',"h1/i15.jpg");




    $currentTab = 1;
    $currentImage = 1;
    

    // $('#tab1_img').css("background-image", "url('frsn1.jpg')");

    $('.tabs-nav a').on('click', function (event) {
    event.preventDefault();
    
    $('.tab-active').removeClass('tab-active');
    $(this).parent().addClass('tab-active');


    $('.tabs-stage div').hide();
    $($(this).attr('href')).show();



    $currentTab = $(this).attr('href').split('-')[1];
    console.log($currentTab);

    if($currentTab==1){
		$('body').css("background-image", "url('k2.jpg')"); 
				$('#gallery').css("display", "block");    	
    }

        else if($currentTab==2){
		$('body').css("background-image", "url('m3.jpg')");
				$('#gallery').css("display", "block");  



    }

    else if($currentTab==41){
		//$('#gallery').css("display", "none");   
		//$('#outerDT').css("visibility", "hidden");   	
    }

    else if($currentTab==42){
		//$('#gallery').css("display", "none");   
		//$('#outerDT').css("visibility", "hidden");   	
    }

    else if($currentTab==43){
		//$('#gallery').css("display", "none");   
		//$('#outerDT').css("visibility", "hidden");   	
    }



});

$('.tabs-nav a:first').trigger('click'); // Default







$('.tabs-ntry a').on('click', function (event) {
    event.preventDefault();
    
    $('.tab-active').removeClass('tab-active');
    $(this).parent().addClass('tab-active');


    $('.tabs-stage div').hide();
    $($(this).attr('href')).show();



    $currentTabN = $(this).attr('href').split('-')[1];
    console.log($currentTabN);

    if($currentTabN==1){
		$('body').css("background-image", "url('k2.jpg')"); 
				$('#gallery').css("display", "block");    	
    }

        else if($currentTabN==2){
		$('body').css("background-image", "url('m3.jpg')");
				$('#gallery').css("display", "block");     	
    }

    else if($currentTabN==3){
		$('#gallery').css("display", "none");    	
    }



});

$('.tabs-ntry a:first').trigger('click'); // Default









 $('#next').click(function(e) {  
      if($currentTab == 1){
      	if($currentImage == 1){
      		$('#tab-1').css("background-image", "url('frsn2.jpg')");
      		$currentImage = 2;

      		    $('#gl_img1').attr('src',"h2/i1.jpg");
    $('#gl_img2').attr('src',"h2/i2.jpg");
    $('#gl_img3').attr('src',"h2/i3.jpg");
    $('#gl_img4').attr('src',"h2/i4.jpg");
    $('#gl_img5').attr('src',"h2/i5.jpg");
    $('#gl_img6').attr('src',"h2/i6.jpg");
    $('#gl_img7').attr('src',"h2/i7.jpg");
    $('#gl_img8').attr('src',"h2/i8.jpg");
    $('#gl_img9').attr('src',"h2/i9.jpg");
    $('#gl_img10').attr('src',"h2/i10.jpg");
    $('#gl_img11').attr('src',"h2/i11.jpg");
    $('#gl_img12').attr('src',"h2/i12.jpg");
    $('#gl_img13').attr('src',"h2/i13.jpg");
    $('#gl_img14').attr('src',"h2/i14.jpg");
    $('#gl_img15').attr('src',"h2/i15.jpg");

      	}
      	      	else if($currentImage == 2){
      		$('#tab-1').css("background-image", "url('frsn3.jpg')");
      		$currentImage = 3;

      		    $('#gl_img1').attr('src',"h3/i1.jpg");
    $('#gl_img2').attr('src',"h3/i2.jpg");
    $('#gl_img3').attr('src',"h3/i3.jpg");
    $('#gl_img4').attr('src',"h3/i4.jpg");
    $('#gl_img5').attr('src',"h3/i5.jpg");
    $('#gl_img6').attr('src',"h3/i6.jpg");
    $('#gl_img7').attr('src',"h3/i7.jpg");
    $('#gl_img8').attr('src',"h3/i8.jpg");
    $('#gl_img9').attr('src',"h3/i9.jpg");
    $('#gl_img10').attr('src',"h3/i10.jpg");
    $('#gl_img11').attr('src',"h3/i11.jpg");
    $('#gl_img12').attr('src',"h3/i12.jpg");
    $('#gl_img13').attr('src',"h3/i13.jpg");
    $('#gl_img14').attr('src',"h3/i14.jpg");
    $('#gl_img15').attr('src',"h3/i15.jpg");

      	}
      	      	else if($currentImage == 3){
      		$('#tab-1').css("background-image", "url('frsn4.jpeg')");
      		$currentImage = 4;

      		    $('#gl_img1').attr('src',"h4/i1.jpg");
    $('#gl_img2').attr('src',"h4/i2.jpg");
    $('#gl_img3').attr('src',"h4/i3.jpg");
    $('#gl_img4').attr('src',"h4/i4.jpg");
    $('#gl_img5').attr('src',"h4/i5.jpg");
    $('#gl_img6').attr('src',"h4/i6.jpg");
    $('#gl_img7').attr('src',"h4/i7.jpg");
    $('#gl_img8').attr('src',"h4/i8.jpg");
    $('#gl_img9').attr('src',"h4/i9.jpg");
    $('#gl_img10').attr('src',"h4/i10.jpg");
    $('#gl_img11').attr('src',"h4/i11.jpg");
    $('#gl_img12').attr('src',"h4/i12.jpg");
    $('#gl_img13').attr('src',"h4/i13.jpg");
    $('#gl_img14').attr('src',"h4/i14.jpg");
    $('#gl_img15').attr('src',"h4/i15.jpg");

      	}

      	else if($currentImage == 4){
      		$('#tab-1').css("background-image", "url('frsn1.jpg')");
      		$currentImage = 1;

      		    $('#gl_img1').attr('src',"h5/i1.jpg");
    $('#gl_img2').attr('src',"h5/i2.jpg");
    $('#gl_img3').attr('src',"h5/i3.jpg");
    $('#gl_img4').attr('src',"h5/i4.jpg");
    $('#gl_img5').attr('src',"h5/i5.jpg");
    $('#gl_img6').attr('src',"h5/i6.jpg");
    $('#gl_img7').attr('src',"h5/i7.jpg");
    $('#gl_img8').attr('src',"h5/i8.jpg");
    $('#gl_img9').attr('src',"h5/i9.jpg");
    $('#gl_img10').attr('src',"h5/i10.jpg");
    $('#gl_img11').attr('src',"h5/i11.jpg");
    $('#gl_img12').attr('src',"h5/i12.jpg");
    $('#gl_img13').attr('src',"h5/i13.jpg");
    $('#gl_img14').attr('src',"h5/i14.jpg");
    $('#gl_img15').attr('src',"h5/i15.jpg");

      	}





      }


      if($currentTab == 2){
      	if($currentImage == 1){
      		$('#tab-2').css("background-image", "url('frsn6.jpg')");
      		$currentImage = 2;

      		    $('#gl_img1').attr('src',"h2/i1.jpg");
    $('#gl_img2').attr('src',"h2/i2.jpg");
    $('#gl_img3').attr('src',"h2/i3.jpg");
    $('#gl_img4').attr('src',"h2/i4.jpg");
    $('#gl_img5').attr('src',"h2/i5.jpg");
    $('#gl_img6').attr('src',"h2/i6.jpg");
    $('#gl_img7').attr('src',"h2/i7.jpg");
    $('#gl_img8').attr('src',"h2/i8.jpg");
    $('#gl_img9').attr('src',"h2/i9.jpg");
    $('#gl_img10').attr('src',"h2/i10.jpg");
    $('#gl_img11').attr('src',"h2/i11.jpg");
    $('#gl_img12').attr('src',"h2/i12.jpg");
    $('#gl_img13').attr('src',"h2/i13.jpg");
    $('#gl_img14').attr('src',"h2/i14.jpg");
    $('#gl_img15').attr('src',"h2/i15.jpg");

      	}
      	      	else if($currentImage == 2){
      		$('#tab-2').css("background-image", "url('frsn7.jpg')");
      		$currentImage = 3;

      		$('#gl_img1').attr('src',"h3/i1.jpg");
    $('#gl_img2').attr('src',"h3/i2.jpg");
    $('#gl_img3').attr('src',"h3/i3.jpg");
    $('#gl_img4').attr('src',"h3/i4.jpg");
    $('#gl_img5').attr('src',"h3/i5.jpg");
    $('#gl_img6').attr('src',"h3/i6.jpg");
    $('#gl_img7').attr('src',"h3/i7.jpg");
    $('#gl_img8').attr('src',"h3/i8.jpg");
    $('#gl_img9').attr('src',"h3/i9.jpg");
    $('#gl_img10').attr('src',"h3/i10.jpg");
    $('#gl_img11').attr('src',"h3/i11.jpg");
    $('#gl_img12').attr('src',"h3/i12.jpg");
    $('#gl_img13').attr('src',"h3/i13.jpg");
    $('#gl_img14').attr('src',"h3/i14.jpg");
    $('#gl_img15').attr('src',"h3/i15.jpg");
      	}
      	      	else if($currentImage == 3){
      		$('#tab-2').css("background-image", "url('frsn8.jpg')");
      		$currentImage = 4;

      		$('#gl_img1').attr('src',"h4/i1.jpg");
    $('#gl_img2').attr('src',"h4/i2.jpg");
    $('#gl_img3').attr('src',"h4/i3.jpg");
    $('#gl_img4').attr('src',"h4/i4.jpg");
    $('#gl_img5').attr('src',"h4/i5.jpg");
    $('#gl_img6').attr('src',"h4/i6.jpg");
    $('#gl_img7').attr('src',"h4/i7.jpg");
    $('#gl_img8').attr('src',"h4/i8.jpg");
    $('#gl_img9').attr('src',"h4/i9.jpg");
    $('#gl_img10').attr('src',"h4/i10.jpg");
    $('#gl_img11').attr('src',"h4/i11.jpg");
    $('#gl_img12').attr('src',"h4/i12.jpg");
    $('#gl_img13').attr('src',"h4/i13.jpg");
    $('#gl_img14').attr('src',"h4/i14.jpg");
    $('#gl_img15').attr('src',"h4/i15.jpg");
      	}

      	else if($currentImage == 4){
      		$('#tab-2').css("background-image", "url('frsn5.jpeg')");
      		$currentImage = 1;

      		 $('#gl_img1').attr('src',"h5/i1.jpg");
    $('#gl_img2').attr('src',"h5/i2.jpg");
    $('#gl_img3').attr('src',"h5/i3.jpg");
    $('#gl_img4').attr('src',"h5/i4.jpg");
    $('#gl_img5').attr('src',"h5/i5.jpg");
    $('#gl_img6').attr('src',"h5/i6.jpg");
    $('#gl_img7').attr('src',"h5/i7.jpg");
    $('#gl_img8').attr('src',"h5/i8.jpg");
    $('#gl_img9').attr('src',"h5/i9.jpg");
    $('#gl_img10').attr('src',"h5/i10.jpg");
    $('#gl_img11').attr('src',"h5/i11.jpg");
    $('#gl_img12').attr('src',"h5/i12.jpg");
    $('#gl_img13').attr('src',"h5/i13.jpg");
    $('#gl_img14').attr('src',"h5/i14.jpg");
    $('#gl_img15').attr('src',"h5/i15.jpg");
      	}



      }
    });


  $('#prev').click(function(e) {  
      if($currentTab == 1){
      	if($currentImage == 4){
      		$('#tab-1').css("background-image", "url('frsn3.jpg')");
      		$currentImage = 3;
      	}
      	      	else if($currentImage == 3){
      		$('#tab-1').css("background-image", "url('frsn2.jpg')");
      		$currentImage = 2;
      	}
      	      	else if($currentImage == 2){
      		$('#tab-1').css("background-image", "url('frsn1.jpg')");
      		$currentImage = 1;
      	}

      	else if($currentImage == 1){
      		$('#tab-1').css("background-image", "url('frsn4.jpeg')");
      		$currentImage = 4;
      	}

      }

            if($currentTab == 2){
      	if($currentImage == 4){
      		$('#tab-2').css("background-image", "url('frsn7.jpg')");
      		$currentImage = 3;
      	}
      	      	else if($currentImage == 3){
      		$('#tab-2').css("background-image", "url('frsn6.jpg')");
      		$currentImage = 2;
      	}
      	      	else if($currentImage == 2){
      		$('#tab-2').css("background-image", "url('frsn5.jpeg')");
      		$currentImage = 1;
      	}

      	else if($currentImage == 1){
      		$('#tab-2').css("background-image", "url('frsn8.jpg')");
      		$currentImage = 4;
      	}

      }
    });
});