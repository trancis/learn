 <script type="text/javascript">
	$(document).ready(function(){



$(".more").click(function(){


$(".mySubMenu").slideToggle("slow");

});

        // TrSlideUp/TrSlideDown
        $(".more").click(function () {
            if ($("#TrSlider").hasClass("TrSlideUp"))
                $("#TrSlider").removeClass("TrSlideUp").addClass("TrSlideDown");
            else
                $("#TrSlider").removeClass("TrSlideDown").addClass("TrSlideUp");
        });
 



});



	</script>
<?php include 'loginModal.php';?>
<!--Login Modal-->
</body>
</html>