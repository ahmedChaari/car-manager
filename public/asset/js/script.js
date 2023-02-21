$(document).ready(function(){

	$('.dropdown__menu>a').on("click" ,function(e){
		e.preventDefault();
	});
	$('.menu__button--header>a').on("click" ,function(e){
		e.preventDefault();
		if ($(this).hasClass("active__menu")) {
			$(this).removeClass("active__menu");
			$('.header__menu').css("top" ,"-100%");
			$('body,html').css("overflow-y" ,"initial");
		} else {
			$(this).addClass('active__menu');
			$('.header__menu').css("top" ,"0px");
			$('body,html').css("overflow-y" ,"hidden");
		}
	});


	$('.profile__picture .update').on("click" ,function(e){
		e.preventDefault();
		$(this).closest(".profile__picture").find("input").click();
	});

	$('.description__field>textarea').on("input" , function(){
		$(this).closest('.description__field').find(".counter>span>span").text($(this).val().length);
	});


	if ($('.images__loader').length) {
		galleryResize();
	}

	$('.gallery__images .main__image>a  ,.small__images .el__small--image>a').on('click'  ,function(e){
		e.preventDefault();
		$(this).closest(".gallery__images").find("input[type='file']").click();
	});

	function galleryResize(){
		if ($(window).width() > 767) {
			let gallerySpacer;
			if ($(window).width() > 1280) {
				gallerySpacer = 6;
			} else {
				gallerySpacer = 4;
			}
			$('.gallery__images .main__image >img').css("height" , $('.gallery__images .main__image >img').width()*0.6);
			$('.el__small--image').each(function(index,elem){
				$(elem).find('img').css("height" , ($('.gallery__images .main__image >img').width()*0.6)*0.5 - gallerySpacer);
			});
			$(window).on("resize" ,function(){
				let gallerySpacer;
				if ($(window).width() > 1280) {
					gallerySpacer = 6;
				} else {
					gallerySpacer = 4;
				}
				$('.gallery__images .main__image >img').css("height" , $('.gallery__images .main__image >img').width()*0.6);
				$('.el__small--image').each(function(index,elem){
					$(elem).find('img').css("height" , ($('.gallery__images .main__image >img').width()*0.6)*0.5 - gallerySpacer);
				});
			});
		}
	}


	$('.picker__el').on('click' ,function(e){
		e.preventDefault();
		if (!$(this).hasClass("active__picker")) {
			$(this).closest(".picker__grid").find(".active__picker").removeClass("active__picker");
			$(this).addClass("active__picker");
			$('.total__value').text($(this).attr("data-value") + "DH");
			$(".paym__amount>p").text($(this).attr("data-value"));
		}
	});


	$(document).on("input", ".numeric", function() {
	    this.value = this.value.replace(/\D/g,'');
	});

	$('.custom__payment .group__input>input').on("input" ,function(e){
		if ($(this).val() >= 200) {
			let currentVal  =  $(this).val();
			$('.picker__el').removeClass('active__picker');
			$('.picker__el').each(function(index,elem){
				if ($(elem).attr("data-value") == currentVal) {
					$(elem).addClass("active__picker");
				}	
			});
			$('.total__value').text($(this).val() +  "DH");
			$(".paym__amount>p").text($(this).val());
		}
	});

	let variableSize;
	if ($(window).width() > 991) {
		variableSize = 12;
	} else{
		variableSize = 9;
	}
	var config = {
		type: 'line',
		responsive: true,
		interaction: {
	      mode: 'index',
	      intersect: false,
	    },
	    stacked:false,
		data: {
			labels: ['7 am', '9 am', '11 am', '1 pm', '3 pm', '5 pm', '7 pm' , "9 pm" ],
			datasets: [{
				label: '0',
				fill:true,
				backgroundColor: "rgba(79, 70, 229, .2)",
				borderColor: "rgba(79, 70, 229, 1)",
				data: [
					12402,
					9400,
					7056,
					8902,
					12300,
					14500,
					16700,
					18200,
				],
				tension:0.8
			}],

		},


		options: {
			
			elements: {
                    point:{
                        radius: 0,
                    }
                },
		bezierCurve: true,
		plugins:{
			legend:{
				display:false
			}
		},
	    responsive: true,
	    aspectRatio:2,
	    interaction: {
	      mode: 'index',
	      intersect: false,
	    },
	    stacked: false,

	    plugins: {
	    	tooltip:{
	    		enabled:false,
	    		external: function(context) {
                    // Tooltip Element
                    let tooltipEl = document.getElementById('chartjs-tooltip');

                    // Create element on first render
                    if (!tooltipEl) {
                        tooltipEl = document.createElement('div');
                        tooltipEl.id = 'chartjs-tooltip';
                        tooltipEl.innerHTML = '<table></table>';
                        document.body.appendChild(tooltipEl);
                    }

                    // Hide if no tooltip
                    const tooltipModel = context.tooltip;
                    if (tooltipModel.opacity === 0) {
                        tooltipEl.style.opacity = 0;
                        return;
                    }

                    // Set caret Position
                    tooltipEl.classList.remove('above', 'below', 'no-transform');
                    if (tooltipModel.yAlign) {
                        tooltipEl.classList.add(tooltipModel.yAlign);
                    } else {
                        tooltipEl.classList.add('no-transform');
                    }
                    let sum = 0;
                    function countPercents(bodyItem){
                    	sum = +sum  + +tooltipModel.body[0].lines[0].substr(2).replace(/\s/g, '');
                    	// sum = +sum  + +tooltipModel.body[1].lines[0].substr(2).replace(/\s/g, '');
                    	// sum = +sum  + +tooltipModel.body[2].lines[0].substr(2).replace(/\s/g, '');
                    }
                    countPercents();

                    function getBody(bodyItem) {
                        return bodyItem.lines;
                    }
                    if (tooltipModel.body) {
                        const titleLines = tooltipModel.title || [];

                        const bodyLines = tooltipModel.body.map(getBody);
    
                        let innerHtml = '<thead>';

                        titleLines.forEach(function(title) {
                            innerHtml += '<tr><th>' + title + '</th></tr>';
                        });
                        innerHtml += '</thead><tbody>';

                        bodyLines.forEach(function(body, i) {
                            // const colors = tooltipModel.labelColors[i];
                            // let style = 'background:' + colors.backgroundColor;
                            // style += '; border-color:' + colors.borderColor;
                            // style += '; border-width: 2px';
                            let newVariable = (((body[0].substr(2).replace(/\s/g, '')) / sum)*100).toFixed(1);
                            if (newVariable < 10) {
                            	newVariable = "0" + newVariable;
                            }
                            console.log(newVariable);
                            const span = "<span style='display:none;'>"+ newVariable +"%</span>";
                            innerHtml += '<tr><td>' + span + body[0].substr(2) + '</td></tr>';
                        });
                        innerHtml += '</tbody>';

                        let tableRoot = tooltipEl.querySelector('table');
                        tableRoot.innerHTML = innerHtml;
                    }

                    const position = context.chart.canvas.getBoundingClientRect();
                    const bodyFont = Chart.helpers.toFont(tooltipModel.options.bodyFont);

                    // Display, position, and set styles for font
                    tooltipEl.style.opacity = 1;
                    tooltipEl.style.position = 'absolute';
                    tooltipEl.style.left = position.left + window.pageXOffset + tooltipModel.caretX - 75 + 'px';
                    tooltipEl.style.top = position.top + window.pageYOffset + tooltipModel.caretY - 80 + 'px';
                    if ($(window).width() > 1280) {
                    	
                    } else {
                    	tooltipEl.style.transform = "scale(0.7)"
                    }
                    tooltipEl.style.font = bodyFont.string;
                    tooltipEl.style.padding = tooltipModel.padding + 'px ' + tooltipModel.padding + 'px';
                    tooltipEl.style.pointerEvents = 'none';
                },
	    	},
	    	legend:{
				display:false
			},
	      title: {
	        display: false,
	        text: 'Chart.js Line Chart - Multi Axis'
	      }
	    },

	    scales: {
	    	xAxes: {

				ticks:{
					font:{
						family:"Inter",
						size: variableSize
					}
				},
				grid:{
					display:false
				}
			},
			yAxes: {
				ticks:{
					display:false,
				},
				grid:{
					borderWidth:0
				}
			},
	      y: {
	        type: 'linear',
	        display: false,
	        position: 'left',
	      },
	      y1: {
	        type: 'linear',
	        display: false,
	        position: 'right',

	        // grid line settings
	        grid: {
	          drawOnChartArea: false, // only want the grid lines for one axis to show up
	        },
	      },
	       y2: {
	        type: 'linear',
	        display: false,
	        position: 'right',

	        // grid line settings
	        grid: {
	          drawOnChartArea: false, // only want the grid lines for one axis to show up
	        },
	      },
	    }
	  },
	};


	if ($("#chart1").length) {
		const myChart = new Chart($("#chart1"), config);	
	}
	if ($("#chart2").length) {
		const myChart = new Chart($("#chart2"), config);	
	}
	if ($("#chart3").length) {
		const myChart = new Chart($("#chart3"), config);	
	}
	$(".graph__switcher  ul li a").on('click' ,function(e){
		e.preventDefault();
		if (!$(this).closest("li").hasClass("active__switcher")) {
			$(this).closest("ul").find('.active__switcher').removeClass('active__switcher');
			$(this).closest("li").addClass('active__switcher');
			$('.elem__graph').css("display" ,"none");
			$('.elem__graph.' + $(this).attr("data-filter")).fadeIn(300);
		}
	});

	$(".auction__switcher  ul li a").on('click' ,function(e){
		e.preventDefault();
		if (!$(this).closest("li").hasClass("active__switcher")) {
			$(this).closest("ul").find('.active__switcher').removeClass('active__switcher');
			$(this).closest("li").addClass('active__switcher');
			$(this).closest(".auction__wrapper").find('.auction__container').css("display" ,"none");
			$(this).closest(".auction__wrapper").find(".auction__container." + $(this).attr("data-filter")).fadeIn(300);
		}
	});

	$(".bar__switcher  ul li a").on('click' ,function(e){
		e.preventDefault();
		if (!$(this).closest("li").hasClass("active__switcher")) {
			$(this).closest("ul").find('.active__switcher').removeClass('active__switcher');
			$(this).closest("li").addClass('active__switcher');
			$('.registration__bars').css("display" ,"none");
			$('.registration__bars.' + $(this).attr("data-filter")).fadeIn(300);
		}
	});


	$(".modal__wrapper").click(function(event) { 
	  var $target = $(event.target);
	  if(!$target.closest('.modal__box').length) {
	    $('.modal__box').closest(".modal__wrapper").fadeOut(300);
	    $('body,html').css("overflow-y" ,"initial");
	  }        
	});

	if ($('.main__switcher').length) {
		$('.main__switcher .elem__switch').css("height" , $(".main__switcher .elem__switch").width()*0.6);
		$('.product__gallery .main__image>img').css("height" , $('.product__gallery .main__image>img').width()*0.65);
	
		$(window).on("resize" ,function(){
			$('.main__switcher .elem__switch').css("height" , $(".main__switcher .elem__switch").width()*0.6);
			$('.product__gallery .main__image>img').css("height" , $('.product__gallery .main__image>img').width()*0.65);
		});
		$('.main__switcher .elem__switch').on("click" ,function(e){
			if (!$(this).hasClass("current__switch")) {
				$(this).closest(".main__switcher").find(".current__switch").removeClass("current__switch");
				$(this).addClass("current__switch");
				$(this).closest('.product__gallery').find(".main__image>img").attr("src" , $(this).attr("data-switch"));
			}
		});
	}


	$('.more__sign input').on("change" ,function(){
		if ($(this).prop("checked") == true) {
			$(this).closest('.more__sign').addClass('active__sign');
		} else {
			$(this).closest('.more__sign').removeClass('active__sign');
		}
	});


	$(".password__icon").on("click" ,function(e){
		if ($(this).hasClass("active")) {
			$(this).removeClass('active')
			$(this).closest('.group__input').find("input").attr("type" ,"password");
		} else {
			$(this).addClass('active');
			$(this).closest('.group__input').find("input").attr("type" ,"text");
		}
	});


	if ($('.main__slider').length) {
		$('.main__slider .prev__slide').on("click" ,function(e){
			e.preventDefault();
			$('.main__slider .slick-prev').click();
		});
		$('.main__slider .next__slide').on("click" ,function(e){
			e.preventDefault();
			$('.main__slider .slick-next').click();
		});
		$('.main__slider .main__slider--container').slick({
			slidesToShow:1,
			adaptiveHeight:true,
			arrows:true,
			dots:true,
			appendDots: $(".main__slider .slider__dots")
		})
	}


	if ($("#range__km").length) {
		$("#range__km").ionRangeSlider({
	        type: "double",
	        values: [
	           "5,000+",  "10,000+", "25,000+", "50,000+", "100,000+", "150,000+", "250,000+",
	            "500,000+", "790,000+"
	        ],
	        from: 1,
	        to: 6,
	        onStart: function(data){
	        	 $('#range__km').closest(".range__group").find(".values__range>p:nth-child(1)").text(data.from_value);
	            $('#range__km').closest(".range__group").find(".values__range>p:nth-child(2)").text(data.to_value);
	        },
	        onChange: function (data) {
	            $('#range__km').closest(".range__group").find(".values__range>p:nth-child(1)").text(data.from_value);
	            $('#range__km').closest(".range__group").find(".values__range>p:nth-child(2)").text(data.to_value);
	        }
	    });
	}

	if ($("#range__prix").length) {
		$("#range__prix").ionRangeSlider({
	        type: "double",
	        values: [
	           "5,000",  "10,000", "25,000", "50,000", "100,000", "150,000", "250,000",
	            "500,000", "800,000" , "1,000,000"
	        ],
	        from: 1,
	        to: 6,
	        onStart: function(data){
	        	 $('#range__prix').closest(".range__group").find(".values__range>p:nth-child(1)").text(data.from_value);
	            $('#range__prix').closest(".range__group").find(".values__range>p:nth-child(2)").text(data.to_value);
	        },
	        onChange: function (data) {
	            $('#range__prix').closest(".range__group").find(".values__range>p:nth-child(1)").text(data.from_value);
	            $('#range__prix').closest(".range__group").find(".values__range>p:nth-child(2)").text(data.to_value);
	        }
	    });
	}

	if ($("#range__an").length) {
		$("#range__an").ionRangeSlider({
	        type: "double",
	        min:1970,
	        max:2023,
	        from: 1990,
	        to: 2012,
	        onStart: function(data){
	        	 $('#range__an').closest(".range__group").find(".values__range>p:nth-child(1)").text(data.from_pretty.replace(/ /g, ''));
	            $('#range__an').closest(".range__group").find(".values__range>p:nth-child(2)").text(data.to_pretty.replace(/ /g, ''));
	        },
	        onChange: function (data) {
	            $('#range__an').closest(".range__group").find(".values__range>p:nth-child(1)").text(data.from_pretty.replace(/ /g, ''));
	            $('#range__an').closest(".range__group").find(".values__range>p:nth-child(2)").text(data.to_pretty.replace(/ /g, ''));
	        }
	    });
	}



	$(document).click(function(event) { 
	  var $target = $(event.target);
	  if(!$target.closest('.group__dropdown').length) {
	  	$('.group__dropdown').removeClass("active__dropdown");
	  	$('.group__dropdown .dropdown__box').fadeOut(150);
	  }        
	});


	$('.dropdown__box input').on("change" ,function(e){
		let result = $(this).closest('.group__dropdown').find(">a>span");
		$(result).text("");
		let dynamicLine = "";
		$(this).closest(".dropdown__box").find("li").each(function(index,elem){
			if ($(this).find("input").prop('checked') == true) {
				if (dynamicLine == ""){
					dynamicLine = dynamicLine + $(this).find("input").attr("data-value");
				}  else {
					dynamicLine = dynamicLine + "," + $(this).find("input").attr("data-value");
				}
			}
		});
		$(result).text(dynamicLine);
		$(this).closest('.group__dropdown').find(">input").val(dynamicLine);
	});

	$('.dashboard__header .dash__controls .menu__button>a').on('click' ,function(e){
		e.preventDefault();
		$(this).addClass("active__menu");
		$(".overlay").fadeIn(300);
		$('.dashboard__side').css("left" ,"0px");
		$("body,html").css("overflow-y" ,"hidden");
	});

	$('.overlay').on("click" ,function(){
		$(this).fadeOut(300);
		$("body,html").css("overflow-y" ,"initial");
		$('.dashboard__side').css("left" ,"-255px");
	});

	$('.group__dropdown>a').on("click" ,function(e){
		e.preventDefault();
		if ($(this).closest(".group__dropdown").hasClass("active__dropdown")) {
			 $(this).closest('.group__dropdown').removeClass("active__dropdown");
			 $(this).closest(".group__dropdown").find(".dropdown__box").fadeOut(150);
		} else {
			$('.active__dropdown').removeClass("active__dropdown");
			$('.group__dropdown .dropdown__box').fadeOut(150);
			$(this).closest('.group__dropdown').addClass("active__dropdown");
			$(this).closest(".group__dropdown").find('.dropdown__box').fadeIn(150);
		}
	});

	$(".group__dropdown .dropdown__box>ul>li>a").on("click" ,function(e){
		e.preventDefault();
		$(this).closest(".group__dropdown").find(">input").val($(this).text());
		$(this).closest(".group__dropdown").find(">a>span").text($(this).text());
		$(this).closest(".group__dropdown").find(">a>span").removeClass("not__active");
		$(this).closest(".dropdown__box").fadeOut(150);
		$(this).closest('.group__dropdown').removeClass("active__dropdown");
	});
});