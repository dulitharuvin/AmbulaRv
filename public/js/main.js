/***************************************************************************************************************
||||||||||||||||||||||||||||         CUSTOM SCRIPT FOR LOGIS CARGO          ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************
||||||||||||||||||||||||||||              TABLE OF CONTENT                  ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************
****************************************************************************************************************
1.  revolutionSliderActiver
2.  accrodion
3.  selectMenu
4.  contactFormValidation
5.  gMap
6.  fleetGallery
7.  GalleryFancyboxActivator		
8.  mobileNavToggler
9.  advanceSearch
10. topRatedCarousel
11. specialCheckbox
12. testimonialSlideCustomPager
13. plUploadActivar
14. singleRecipeCarousel
15. thmSpinner
16. recipeEditorCarousel
17. stickyHeader
****************************************************************************************************************
||||||||||||||||||||||||||||            End TABLE OF CONTENT                ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************/

"use strict"; // Start of use strict

// revolution slider
function revolutionSliderActiver () {
	if ($('.rev_slider_wrapper #slider1').length) {
		jQuery("#slider1").revolution({
			sliderType:"standard",
			sliderLayout:"auto",
			delay:9999999,
			navigation: {
				arrows:{enable:true} 
			}, 
			gridwidth:1170,
			gridheight:610 
		});
	};
}
function accrodion () {
	if ($('.accrodion-grp').length) {
		
		$('.accrodion-grp').each(function () {
			var accrodionName = $(this).data('grp-name');
			var Self = $(this);
			Self.addClass(accrodionName);
			Self.find('.accrodion .accrodion-content').hide();
			Self.find('.accrodion.active').find('.accrodion-content').show();
			Self.find('.accrodion').each(function() {
				$(this).find('.accrodion-title').on('click', function () {
					if ($(this).parent().hasClass('active') === false ) {					
						$('.accrodion-grp.'+accrodionName).find('.accrodion').removeClass('active');
						$('.accrodion-grp.'+accrodionName).find('.accrodion').find('.accrodion-content').slideUp();
						$(this).parent().addClass('active');					
						$(this).parent().find('.accrodion-content').slideDown();	
					};
				});
			});
		});
		
	};
}
// gallery fancybox activator 
function GalleryFancyboxActivator () {
  var galleryFcb = $('.fancybox');
  if(galleryFcb.length){
    galleryFcb.fancybox({
      openEffect  : 'elastic',
      closeEffect : 'elastic',
      helpers : {
        media : {}
      }
    });
  }
}
function selectMenu () {
	if ($('.select-menu').length) {
		$('.select-menu').selectmenu();
	};
}

function gMap () {
	if ($('.google-map').length) {
        $('.google-map').each(function () {
        	// getting options from html 
        	var mapName = $(this).attr('id');
        	var mapLat = $(this).data('map-lat');
        	var mapLng = $(this).data('map-lng');
        	var iconPath = $(this).data('icon-path');
        	var mapZoom = $(this).data('map-zoom');
        	var mapTitle = $(this).data('map-title');
			


        	// if zoom not defined the zoom value will be 15;
        	if (!mapZoom) {
        		var mapZoom = 15;
        	};
        	// init map
        	var map;
            map = new GMaps({
                div: '#'+mapName,
                scrollwheel: false,
                lat: mapLat,
                lng: mapLng,
                zoom: mapZoom
            });
            // if icon path setted then show marker
            if(iconPath) {
        		map.addMarker({
	            	icon: iconPath,
	                lat: mapLat,
	                lng: mapLng,
	                title: mapTitle
	            });
        	}
        });  
	};
}
/*function contactFormValidation () { //comented due to validation problems and not because preventing from submiting by DRD

	if($('.contact-form').length){
		$('.contact-form').validate({ // initialize the plugin
			rules: {
				name: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				message: {
					required: true
				},
				subject: {
					required: true
				}
			},
			submitHandler: function (form) { 
				// sending value with ajax request
				$.post($(form).attr('action'), $(form).serialize(), function (response) {
					$(form).parent('div').append(response);
					$(form).find('input[type="text"]').val('');
					$(form).find('input[type="email"]').val('');
					$(form).find('textarea').val('');
				});
				return false;
			}
		});
	}
}*/
function stickyHeader () {
	if ($('.stricky').length) {
		var strickyScrollPos = 100;
		if($(window).scrollTop() > strickyScrollPos) {
			$('.stricky').removeClass('fadeIn animated');
	      	$('.stricky').addClass('stricky-fixed fadeInDown animated');
		}
		else if($(this).scrollTop() <= strickyScrollPos) {
			$('.stricky').removeClass('stricky-fixed fadeInDown animated');
	      	$('.stricky').addClass('slideIn animated');
		}
	};
}
function fleetGallery () {
	if ($('.fleet-gallery').length) {
		$('.fleet-gallery').mixItUp();
	};
}

// Mobile Navigation
function mobileNavToggler () {
	if ($('.nav-holder').length) {
		$('.nav-holder .nav-header button').on('click', function () {
			$('.nav-holder .nav-footer').slideToggle();
			return false;
		});
		$('.nav-holder li.has-submenu').children('a').append(function () {
			return '<button class="dropdown-expander"><i class="fa fa-bars"></i></button>';    			
		});
		$('.nav-holder .nav-footer .dropdown-expander').on('click', function () {
			$(this).parent().parent().children('.submenu').slideToggle();
			console.log($(this).parents('li'));
			return false;
		});

	}
}

function advanceSearch() {
	if ($('.advance-box').length) {
		$('.advance-box').hide();
		$('.advance-expander').on('click', function () {			
			$('.advance-box').fadeToggle();
			$(this).find('i').toggleClass('fa-angle-up fa-angle-down');
			return false;
		});
	};
}
function specialCheckbox () {
	if ($('ul.special-checkbox').length) {
		$('ul.special-checkbox').find('li').on('click', function () {
			$(this).toggleClass('active');
			$(this).find('input[type=checkbox]').prop('checked', function(){
		        return !this.checked;
		    });
		});

	};	
}

function topRatedCarousel () {
	if ($('.top-rated-recipe .owl-carousel').length) {
		$('.top-rated-recipe .owl-carousel').owlCarousel({
			loop: true,
		    margin: 30,
		    nav: false,
		    dots: true,
		    autoplay:true,
		    autoplayTimeout:3000,
		    autoplayHoverPause:true,
		    responsive: {
		        0:{
		            items:1
		        },
		        480:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        768:{
		            items:1
		        },
		        1000:{
		            items:3
		        },
		        1170:{
		            items:2
		        }
		    }
		});
	};
}
function recipeEditorCarousel () {
	if ($('.recipe-editor .owl-carousel').length) {
		$('.recipe-editor .owl-carousel').owlCarousel({
			loop: true,
		    margin: 30,
		    nav: false,
		    dots: true,
		    autoplay:true,
		    autoplayTimeout:3000,
		    autoplayHoverPause:true,
		    responsive: {
		        0:{
		            items:1
		        },
		        480:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        768:{
		            items:1
		        },
		        1000:{
		            items:2
		        }
		    }
		});
	};
}

function testimonialSlideCustomPager () {
	var sliderContainer = $('.testimonails-recipex .slides');
	var customPager = $('.testimonails-recipex .custom-pager li[data-slide-index]');
	if (sliderContainer.length) {
		var slider = sliderContainer.bxSlider({
			mode: 'fade',
			auto: true,
			autoControls: false,
			controls: false,
			pager: false,
			autoHover: true,
	    	minSlides: 1,
	    	onSlideNext: function () {
	    		var current = slider.getCurrentSlide();		    		
				customPager.each(function () {
					var Slef = $(this);
					var slideIndex = $(this).data('slide-index');
					if (slideIndex === current) {
						customPager.removeClass('active');
						Slef.addClass('active');
					}
				});
	    	}
		});
		customPager.each(function () {
			var slideIndex = $(this).data('slide-index');
			$(this).on('click', function () {
				customPager.removeClass('active');
				$(this).addClass('active');
				slider.goToSlide(slideIndex);
				return false;
			});
		});
		$('.testimonails-recipex .custom-nav li.prev').on('click', function () {
		    var current = slider.getCurrentSlide();
		    slider.goToPrevSlide(current) - 1;
		    return false;
		});
		$('.testimonails-recipex .custom-nav li.next').on('click', function () {
		    var current = slider.getCurrentSlide();
		    slider.goToNextSlide(current) + 1;
		    return false;
		});
	};
}


function singleRecipeCarousel () {
	if ($('.single-recipe-carousel-content-box').length && $('.single-recipe-carousel-thumbnail-box').length) {

		var $sync1 = $(".single-recipe-carousel-content-box"),
			$sync2 = $(".single-recipe-carousel-thumbnail-box"),
			flag = false,
			duration = 1000;

			$sync1
				.owlCarousel({
					items: 1,
					margin: 0,
					nav: false,
					dots: false
				})
				.on('changed.owl.carousel', function (e) {
					if (!flag) {
						flag = true;
						$sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
						flag = false;
					}
				});

			$sync2
				.owlCarousel({
					margin: 20,
					items: 6,
					nav: true,
					dots: false,
					navText: [
		                '<i class="fa fa-angle-left"></i>',
		                '<i class="fa fa-angle-right"></i>'
		            ],
					center: false,
					responsive: {
				        0:{
				            items:1,
				            autoWidth: false
				        },
				        480:{
				            items:2,
				            center: false,
				            autoWidth: false
				        },
				        600:{
				            items:4,
				            autoWidth: false
				        },
				        1000:{
				            items:6,
				            autoWidth: false
				        }
				    }
				})
				.on('click', '.owl-item', function () {
					$sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);

				})
				.on('changed.owl.carousel', function (e) {
					if (!flag) {
						flag = true;		
						$sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
						flag = false;
					}
				});

	};
}

function validateAndSubmitRecipe(){

    //$.validator.addMethod("valueNotEquals", function(value, element, arg){
    //    alert('ss');
    //    return arg != value;
    //}, "Value must not equal arg.");
    ////
    //var uploader = $("#uploader").pluploadQueue();
    //var files_remaining = uploader.files.length;
    //if(files_remaining ==0){
    //    alert("Ok");
    //
    //}else{
    //    alert("Upload the files and continue");
    //}

    $("#contact-form").validate({
        rules: {
            recipetitle: "required"

        },
        messages: {
            recipetitle: "this is required"

        }
        //submitHandler: function(form) {
        //    alert('');
        //    $(form).submit();
        //}
    });

    //$('.contact-form').on('submit', function() {
    //
    //    if (validateRecipe()) {
    //
    //
    //                    $.ajax({
    //                        url: $(this).attr('action'),
    //                        type: $(this).attr('method'),
    //                        data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
    //                        contentType: false,       // The content type used when sending data to the server.
    //                        cache: false,             // To unable request pages to be cached
    //                        processData: false,        // To send DOMDocument or non processed data file it is set to false
    //                        success: function (json) {
    //                            alert(json);
    //                            window.onbeforeunload = function () {
    //                                return null;
    //                            };
    //                            alert(json);
    //                            var recipeId = json.substring(json.lastIndexOf(":") + 1, json.lastIndexOf(";"));
    //                            window.location.href = "/recipes/recipeSuccess?id=" + recipeId;
    //                        }
    //                    });
    //
    //    }
    //    else{
    //
    //        return false;
    //    }
    //
    //    return false;
    //
    //});

}


function plUploadActivar () {
    $("#uploader").plupload({
        // General settings
        runtimes : 'html5,flash,silverlight,html4',
        url : "/AmbulaRV/recipe/uploadRecipeImages",

        // Maximum file size
        max_file_size : '2mb',

        chunk_size: '1mb',

        //// Resize images on clientside if we can
        //resize : {
        //    width : 200,
        //    height : 200,
        //    quality : 90,
        //    crop: true // crop to exact dimensions
        //},

        // Specify what files to browse for
        filters : [
            {title : "Image files", extensions : "jpg,gif,png"},
            {title : "Zip files", extensions : "zip,avi"}
        ],

        // Rename files by clicking on their titles
        rename: true,

        // Sort files
        sortable: true,

        // Enable ability to drag'n'drop files onto the widget (currently only HTML5 supports that)
        dragdrop: true,

        // Views to activate
        views: {
            list: true,
            thumbs: true, // Show thumbs
            active: 'thumbs'
        },

        // Flash settings
        flash_swf_url : '/plupload/js/Moxie.swf',

        // Silverlight settings
        silverlight_xap_url : '/plupload/js/Moxie.xap',

        init: {
            FilesAdded: function (objUploader, arrFiles) {
                var regex = /(?:\.([^.]+))?$/;

                for(var i = 0 ; i< arrFiles.length ;i++ )
                {
                    var ext = regex.exec(arrFiles[i].name)[1];
                    arrFiles[i].name = (ext == undefined) ? (i) : (i) + '.' + ext;
                }

            },

            UploadFile: function (objUploader, file) {
                //var regex = /(?:\.([^.]+))?$/;
                //for (var i = 0; i < uploader.files.length; i++) {
                //    var ext = regex.exec(uploader.files[i].name)[1];
                //    uploader.files[i].name = (ext == undefined) ? (i+1) : (i+1) + '.' + ext;
                //}
                //uploader.start();
            },

            BeforeUpload: function (up, file) {
            }
        }

    });

    var uploader = $("#uploader").plupload('getUploader');

    uploader.bind('BeforeUpload', function(up, file) {
        if('thumb' in file){

            //thumb
            up.settings.url = '/AmbulaRV/recipe/uploadRecipeImages?diretorio=thumbs',
                up.settings.resize = {width : 100, height : 75, quality : 60};

            // medium size
            up.settings.url = '/AmbulaRV/recipe/uploadRecipeImages?diretorio=medium',
                up.settings.resize = {width : 200, height : 150, quality : 60};

        }else{
            up.settings.url = '/AmbulaRV/recipe/uploadRecipeImages?diretorio=full-size',
                up.settings.resize = {quality : 100};

        }
        uploader.bind('FileUploaded', function(up, file) {
            if(!('thumb' in file)) {
                file.thumb = true;
                file.loaded = 0;
                file.percent = 0;
                file.status = plupload.QUEUED;
                up.trigger("QueueChanged");
                up.refresh();

            }


        });

    });

    $('#contact-form').submit(function (e) {

        // Validate number of uploaded files
        if (uploader.total.uploaded == 0) {
            // Files in queue upload them first
            if (uploader.files.length > 0) {
                // When all files are uploaded submit form
                uploader.bind('UploadProgress', function () {
                    if (uploader.total.uploaded == uploader.files.length){

                        validateAndSubmitRecipe();
                        $('#contact-form').submit();
                    }
                });

                uploader.start();
            } else
                alert('You must at least upload one file.');

            e.preventDefault();
        }
    });


}

function thmSpinner () {
	if ($('.thm-spinner-wrapper').length) {
		$('.thm-spinner-wrapper').each(function ()  {
			var Self = $(this);
			var spinnerMin = Self.find('.thm-spinner').data('min-value');
			var spinnerMax = Self.find('.thm-spinner').data('max-value');
			var spinnerDefault = Self.find('.thm-spinner').data('default-value');
			
			Self.find('.thm-spinner').slider({
				range: 'min',
				step: 5,
				min: spinnerMin,
				max: spinnerMax,
				value: spinnerDefault,
				slide: function( event, ui ) {
					var recipeHours = Math.floor(ui.value / 60),
                	recipeMinutes = ui.value - ( recipeHours * 60 );
                	if (recipeHours.toString().length == 1) {
	                    recipeHours = '0' + recipeHours;
	                }

	                if (recipeMinutes.toString().length == 1) {
	                    recipeMinutes = '0' + recipeMinutes;
	                }
                    Self.find('.time').text( recipeHours + ':' + recipeMinutes );
					Self.find('.spinner-value').text( recipeHours + ':' + recipeMinutes );
				}
			});
			var recipeHours = Math.floor(Self.find('.thm-spinner').slider('value') / 60),
                recipeMinutes = Self.find('.thm-spinner').slider('value') - ( recipeHours * 60 );
            if (recipeHours.toString().length == 1) {
                recipeHours = '0' + recipeHours;
            }

            if (recipeMinutes.toString().length == 1) {
                recipeMinutes = '0' + recipeMinutes;
            }
            Self.find('.time').text( recipeHours + ':' + recipeMinutes );
			Self.find('.spinner-value').text( recipeHours + ':' + recipeMinutes );			
		});

	};
}


function addNewEntries(){

    $(document).on('click', '.btn-add', function (e) {
        e.preventDefault();

       $( "select" ).selectmenu( "destroy" );

        var controlForm = $('.ingredients-control'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        selectMenu();


        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');



    }).on('click', '.btn-remove', function (e) {
        $(this).parents('.entry:first').remove();

        e.preventDefault();
        return false;
    });

    $(document).on('click', '.btn-add', function (e) {
        e.preventDefault();

        var controlForm = $('.directions-control'),
            currentEntry = $(this).parents('.entry2:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        //newEntry.find('img').attr('src','/public/img/no_preview_available.jpg');
        controlForm.find('.entry2:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function (e) {
        $(this).parents('.entry2:first').remove();

        e.preventDefault();
        return false;
    });
}

// instance of fuction while Document ready event	
jQuery(document).on('ready', function () {
	(function ($) {
        addNewEntries();
		revolutionSliderActiver();
		accrodion();
		selectMenu();
		//contactFormValidation(); commented by DRD
		//gMap(); commented by DRD
		fleetGallery();
		GalleryFancyboxActivator();		
		mobileNavToggler();
		advanceSearch();
		topRatedCarousel();
		specialCheckbox();
		testimonialSlideCustomPager();
		plUploadActivar();
		singleRecipeCarousel();
		thmSpinner();
		recipeEditorCarousel();

        //checkUploadFileState();
	})(jQuery);
});

// instance of fuction while Window Load event
jQuery(window).on('load', function () {
	(function ($) {

	})(jQuery);
});

// instance of fuction while Window Scroll event
jQuery(window).on('scroll', function () {	
	(function ($) {
		stickyHeader();
	})(jQuery);
});

