//
//
var idleMax = 30;
  var idleTime = 0;

  var idleInterval = setInterval("timerIncrement()", 60000);
  $( "body" ).mousemove(function( event ) {
      idleTime = 0;
});
function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > idleMax) {
        window.location="login.blade.php";
    }
}
   //
   //
   //
$(document).ready(function(){
	let widthDevice = $(document).outerWidth();
	let footer = document.getElementById('footer');
	let tabControl = $('#tab-controls').outerWidth();
	// console.log();
	function setFooter(){
		let heightDevice = $(document).height();
		let heightHeader= $('#header').outerHeight();
		let heightBody= $('#wrap-main').outerHeight();
		let heightFooter= $('#footer').outerHeight();
		let sumBody = heightHeader + heightBody + heightFooter;
		if (sumBody < heightDevice) {
			$('footer').removeClass('position');
			$('footer').addClass('position');
		}else{
			$('footer').removeClass('position');
		}
	}
	//
	function showMenu(){
		let widthDevice = $(document).width();
		if(widthDevice > 768){
			$(".wrapper").css({ 'padding-left': tabControl + 'px', 'transition': "all 0.5s" });
			$('#tab-controls').css({'left': '0%', 'transition': 'all .5s'});
			$('.showMenu').css({ 'display': 'none', 'transition': 'all .5s'});
		} else{
			$('#tab-controls').css({'left': '0%', 'transition': 'all .5s'});
			$('.showMenu').css({ 'display': 'none', 'transition': 'all .5s'});
		}

	}
	function hideMenu(){
		let widthDevice = $(document).width();
		if (widthDevice >768) {
			$(".wrapper").css({ 'padding-left': '0px', 'transition': "all 0.5s" });
			$('#tab-controls').css({'left': '-100%', 'transition': 'all .5s'});
			$('.showMenu').css({ 'display': 'flex', 'transition': 'all .5s'});
		}else{
			$('#tab-controls').css({'left': '-100%', 'transition': 'all .5s'});
			$('.showMenu').css({ 'display': 'flex', 'transition': 'all .5s'});
		}
	}

	$(".hide-menu").click(function(){
		hideMenu()
	})
	$(".showMenu").click(function(){
		showMenu()
	})
	$(".wrapper").css({ 'padding-left': tabControl + 'px', 'transition': "all 0.5s" });
	function responsive(){
		let tabControl = $('#tab-controls').outerWidth();
		let marginWrap = tabControl + 90;
		let widthDevice = $(document).width();
		if(widthDevice > 1800){
		 	$('main#wrap-main .wrapper .wrap-form').css({ 'padding-right': marginWrap + "px" });
		}else {
			$('main#wrap-main .wrapper .wrap-form').css({ 'padding-right': '15%' });
		}
		if (widthDevice < 1280) {
			$('main#wrap-main .wrapper .wrap-form').css({ 'padding-right': '60px' });
		} ;
		if(widthDevice <= 992){
			$('#tab-controls').css({ 'width': '230px'});
			$(".wrapper").css({ 'padding-left': tabControl + 'px', 'transition': "all 0.5s" });
		};
		if(widthDevice > 768){
			$(".wrapper").css({ 'padding-left': tabControl + 'px', 'transition': "all 0.5s" });
			$('#tab-controls').css({'left': '0%', 'transition': 'all .5s'});
		 }else {
			$(".wrapper").css({ 'padding-left': '15px','padding-right': '15px' });
			$('#tab-controls').css({'left': '-100%', 'transition': 'all .5s'});
			$('main#wrap-main .wrapper .wrap-form').css({ 'padding-right': '15px' });
		}
	}
	// scroll
	function scrollMenu(){
		var offset = 1;
		var back_to_top = document.getElementById('header');
		window.addEventListener('scroll', function() {
		    if (pageYOffset > offset) {
		        back_to_top.classList.add('fixed-menu');
		    } else {
		        back_to_top.classList.remove('fixed-menu');
		    };
		});
	}
	setFooter();
	responsive();
	$(window).resize(function(){
		setFooter();
		responsive();
		if(widthDevice < 768){
			scrollMenu();
		}
	});
	// FOOTER
	let d = new Date();
	document.getElementById('fecthYear').innerHTML = d.getFullYear();

	//alert
	function setAlert(){
		$('#alert').css({
			'display': 'none',
			'transition': 'all .5s'
		});
	}
    setTimeout(setAlert, 3000);

    // choose image
    function readURL(input) {
        if (input.files && input.files[0]) {
            var url = URL.createObjectURL(event.target.files[0]);
            $(input).parent().find('span.invalid-feedback').text('');
            $(input).parent().find('div.preview').show();
            $(input).parent().find('div.preview').attr("style", "background: #eef0f8 url('" + url + "') no-repeat top center; background-size: contain; display: block; background-position: center");
            $(input).parent().find('div.fill').addClass('active');
            $(input).parent().find('.b-drop').addClass('active');
        }
    }
    $("#file").change(function() {
        readURL(this);
      });

    //   delete form
    $(document).on('click','.destroyForm',function(){
        const url = $(this).data('url');
        const content = $(this).data('content');
        $('#deleteForm').attr('action', url);
        $('#contentModal').html(content);
    });

    //rút gọn văn bản
    var showChar = 140;
    var showCharTitle = 90;
	var ellipsestext = "...";
    var data = ['textContent', 'textContentTitle'];
    data.forEach( function(value){

        $('.'+value).each(function() {
            var content = $(this).html();
            if(content.length > showChar) {
                var c = content.substr(0, showChar);
                var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp';
                $(this).html(html);
            }

        });
    });
 })
{/* <script src="https://code.jquery.com/jquery-1.10.2.js"></script> */}
//
