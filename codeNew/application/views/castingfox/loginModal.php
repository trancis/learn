
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog1">
    <div class="modal-content">
      <div >
        <button type="button" class="close " data-dismiss="modal" >
<div class="myCloseDiv">
        <div class="font1 close1">CLOSE&nbsp;</div>
        <div class="close2 glyphicon glyphicon-remove-circle"></div>
</div>
     </button>
        <h4 class="modal-title" id="myModalLabel" style="visibility:hidden">Modal title</h4>
      </div>
      <div class="modal-body text-center">
               <form method="post" onsubmit="return false;">
      <!--<form action="<?php echo base_url();?>index.php?/castingfox/login" method="post">-->
        <h3 class="font2">LOG IN TO YOUR ACCOUNT.</h3>
        <div style="padding-top: 20px;">
        <div style="padding-bottom: 5px;"><input type="text" class="paddingleft mytextbox topbottom" name="email" id="email" placeholder="Email"></br></div>
        <div><input type="text" class="paddingleft mytextbox topbottom" name="password" id="password" placeholder="Password"></br></br></div>
        <div id="getMessage" class="font12" style="color:rgb(222,58,0) !important;"></div>
        <div style="display:table; margin:0 auto;"><input type="checkbox" class="myCheckBox" id="remember"><label for="remember"><span></span></label>
        <span style="display:table-cell;vertical-align:middle;"><font class="font1 ">Remember me</font></span></div>
        <br>
        <button type="submit" class="myBtn button1 " style="width: 220px; height: 32px; " id="login">LogIn</button><br><br>
        
        
        <label class="font5" style="font-weight:500; !important"><a href="" class="anchor">Forgot your password?</a></label>
      </div>
      </div>
      <div class="font3 text-center " style="padding-bottom: 30px;">Don’t have an account? <a href="" class="orangeanchor ">Sign up for free.</a></div>
    </div>
    </form>
  </div>
  </div>

  <script type="text/javascript">
  $(document).ready(function(){
  $("#login").click(function(){
  var email=$("#email").val();
  var password=$("#password").val();
  
                 $.ajax({
                             type: "post",
                             url: "<?php echo base_url();?>index.php?/castingfox/login",
                             dataType: 'html',
                             data:"email="+email+ "&password=" + password,
                               success:function(responseData1)
                               { 
                                                           
                                 if(responseData1==0)
                                  {
                                   $("#getMessage").html('Either you have entered wrong id or password');
                                    //alert('entered wrong id password');
                                    }
                                    else
                                    {
                                      window.location.href = 'index.php?/castingfox/home';

                                    }
                                  },

                                  error: function()
                                   {
                                       alert('failure');
                                   }
                                                       
                              
                              

                             

                                  
                               });
                                                      });
       
}); 

</script>