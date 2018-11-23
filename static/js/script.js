 $(document).ready(function() {
   	// анимации для десктоп версий
   	if($(window).width() >= 1024){
  		new WOW().init();
	}
    // SLICK
     $('.gallery-license').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         dots: true,
         arrows: true,
     });
     $('.gallery-photos').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         dots: true,
         arrows: true,
         fade: true,
         CSSease: 'linear',
         speed: 1000
     });

     // Фотогаларея
     $('.container-docs-preview').hide();
     $('.container-gallery-preview').hide();

     $(".container-gallery a, .gallery-link").click(function() {
         $('.container-gallery-preview').show();
         $('.container-docs-preview').hide();
         $('#gallery-header').text('Клиника в фотографиях');

     });
     $(".container-docs a, .docs-link").click(function() {
         $('.container-docs-preview').show();
         $('.container-gallery-preview').hide();
         $('#gallery-header').text('Документы');
     });

     // Цены
     $(".link.centre").click(function() {
         let id = this.id.slice(0, -1);
         $("#" + id).slideToggle();
     });

     $('.link.centre').toggle(function() {
         $(this).text('↑ свернуть ↑');
     }, function() {
         $(this).text('↓ развернуть ↓');
     });

     $(".centre.btn").click(function() {
         let id = this.id.slice(0, -1);
         $("#" + id).slideToggle();
     });
  
     // MASK
     $("#phone1, #phone2, #phone3, #submit-modal").mask("+7 (999) 999-99-99");

     // при клике открывает modal с формой
     $(".header-contacts-phone-desc").click(function() {
      $('.modal-first-touch').show();
      $('.modal-wrapper').show();
     });

     // кнопочки, закрывающие modal окна
     $(".modal-wrapper, .modal-close").click(function() {
      $('.modal-first-touch').hide();
      $('.modal-wrapper').hide();
      $('.modal-reaction').hide();
      $('.hamburger-slide').slideToggle();
     });
    
     // закрывает окошки при нажатии ESC
     jQuery(document).on('keyup',function(evt) {
      if (evt.keyCode == 27) {
        $('.modal-first-touch').hide();
        $('.modal-wrapper').hide();
        $('.modal-reaction').hide();
      }
     });

    $("#form-modal, #form-banner, #form-main, #form-bottom").submit(function(e){
      e.preventDefault();
      var self = this;

      var data = {
        phone: $(this.phone).val(),
        field: $(this.field).val(),
      };
      
      $.ajax({
          type: "POST",
          url: "/ajax/sendmessage",
          data: data,
          // dataType: "JSON",
          success: function(res){
            $(".modal-reaction").show();
            $(".modal-first-touch").hide();
            self.reset();
          },
          error: function(err) {
            console.log(err);
          }
      });
    });

    /// плавный скроллинг
    var $page = $('html, body');
    $('a[href*="#"]').click(function() {
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 400);
    return false;
    });
    //BURGER
    $('.menu').click(function() {
      if($(this).is('.active:not(.back)')) {
         $(this).addClass('back');
      } else if ($(this).is('.back')) {
        $(this).removeClass('back');
      } else {
        $(this).addClass('active');
      }
        $('.modal-wrapper').toggle();
        $('.hamburger-slide').slideToggle();
        $('.menu .bar:last-child').show();
    });

	$.ajax({ 
        type: 'GET', 
        url: 'https://www.instagram.com/web/search/topsearch/?query=stomatolog_evgeney', 
        data: { get_param: 'value' }, 
        success: function (data) { 
            var followers = '';
            followers = data.users[0].user.follower_count;   
            document.getElementById('inst_count').innerHTML = followers;       
        }
    });
 });

