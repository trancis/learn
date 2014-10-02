<?php include 'header.php';?>
<div class="myRadioImg" style="position:relative;display:inline;top:10px;left:100px">
      <input  type="radio" id="male" name="cc" value="male" checked/>
	  <label for="male"><span id="maleLabel" class="radioMaleUnCheck"></span></label>
   
    
	 <input  type="radio" id="female" name="cc" value="female"/>
      <label for="female"><span id="femaleLabel"class="radioFemaleUnCheck"></span></label>
     </div>
 </div>



<input type="checkbox" id="rrr" class="myCheckBox" checked />
<label for="rrr"><span></span></label>

<a href="#" tabindex="0" class="btn btn-lg btn-danger" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>




 <script type="text/javascript">

 $(document).ready(function(){

 radioImage();

$(".myRadioImg input[name='cc']").change(function(){
  
   radioImage();
 
});

});

 </script>
