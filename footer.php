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
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-8539325-6', 'nfreader.net');
		ga('send', 'pageview');
	</script>
  </body>
</html>
