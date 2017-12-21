<!-- Scripts Placed at the end of the document so the pages load faster -->
<!--================================================== -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('js/bootstrap-filestyle.min.js') }}"></script> -->
<!-- <script>window.jQuery || document.write('<script src="{{ asset('js/jquery-1.11.3.min.js') }}">\x3C/script<\/script>');</script>
<script>window.Modernizr || document.write('<script src="{{ asset('js/modernizr-2.6.2.min.js') }}">\x3C/script<\/script>');</script> -->
<script>

    $(document).ready(function() {
        $('.pickoption').click(function(event){
            event.preventDefault();
            var winside = $(this).data('winside');

            if(winside=="left"){
                //alert(winside);
              $('#left-form').submit();
            }else if(winside=="right"){
                //console.log(winside);
              $('#right-form').submit();
            }else{
              return false;
            }
            //$(this).parents('form').submit();
            //$('#new').submit();
            $('#left').toggleClass('bounceInLeft bounceOutRight');
            $('#right').toggleClass('bounceInRight bounceOutLeft');
        });

        $('.noti').click(function (event) {
            event.preventDefault();
            //var id = $(this).data('notifId');
            var id = $(this).attr('href');
            var nofnoti = $('.noticount').html();

                $.ajax({
                    type: "POST",
                    url: "make-read",
                    cache: false,
                    data: {id:id},
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }, 
                    beforeSend: function() {

                    },
                    success: function (response) {
                        //$('.1eafa64e-440e-40be-bb09-810d524ffa24').remove();
                        //console.log($('.noticount').html('10'));
                        var id2 = response.id;
                        //console.log(id2);
                        var cache = $('.'+id2);
                        cache.animate({backgroundColor: 
                            "#ffebe6"},500).fadeOut(300, function(){ 
                                cache.remove(); 
                        });

                        $('.noticount').html(nofnoti-1);
                     }
                }); 


       /* var notif_id   = $(this).data('notifId');
        var targetHref = $(this).data('href');

        $.post('/NotifMarkAsRead', {'notif_id': notif_id}, function (data) {
            data.success ? (window.location.href = targetHref) : false;
        }, 'json');

        return false;*/
        });

    });
</script>