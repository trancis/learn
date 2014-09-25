<?php include 'header.php'; ?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
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
      <form action="<?php echo base_url();?>auditionfox/login" method="post" id="commentForm">
        <h3 class="font2">LOG IN TO YOUR ACCOUNT.</h3>
        <div style="padding-left: 300px;padding-top: 20px;">
        <div style="padding-bottom: 5px;" class="has-success has-feedback"><input type="text" name="email" class="paddingleft mytextbox" placeholder="Email"></br></div>
        <div><input type="text" name="password" class="paddingleft mytextbox" placeholder="Password"></br></br></div>
        <input type="checkbox"><label class="font3">Remember me</label>
        <br>
        <input type="submit" class="myBtn button1" style="width: 220px;" value="LogIn"><br><br>
        </form>
        <label class="font3"><a href="" class="anchor">Forgot your password?</a></label>
      </div>
      </div>
      <div class="font3 text-center" style="padding-bottom: 30px;">Don’t have an account? <a href="" class="orangeanchor">Sign up for free.</a></div>
    </div>
  </div>
  </div>