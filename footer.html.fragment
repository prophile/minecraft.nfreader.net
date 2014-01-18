  </section>
    <script>
    
    $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "inc/ping.php?data=status"
        }).done(function(msg){
            if (msg == "Failed to receive challenge.") {
                $('.status').addClass('offline');
                $('.status').text('Server is down');
            }
            else {
                $('.status').addClass('online');
                $('.status').text(msg);
            }
        }).fail(function(){
            $('.status').addClass('offline');
            $('.status').html('Server is down. <a href="chat.php">Get help</a>');
        })

    });
    </script>
  </body>
</html>
