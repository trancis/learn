<?php include 'header.php'; ?>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog1" style="width:690px !important;">
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
      <div class="modal-body">
        <h3 class="font2 text-center">WRITE YOUR COMMENTS.</h3>
       
          <div class='font3 text-center'>All notes are strictly private. Actors do not have access to them.</div>


       <br/>
       <br/>
       <div class="col-md-4 column"><img alt="140x140" src="http://lorempixel.com/140/140/" style="width: 170px; height: 170px;"></div>
       <div class="col-md-8 column" id="scrollbox3" style="background: #f2f2f2; width:411px !important; height:110px !important;">
       <div class="container">
       <div class="row clearfix">
       <div class="col-md-4 column" style="width:100px;">
       <span>13/5/2014</span>
       </div>
       <div class="col-md-7 column">
        <span>Cannot do improv. Good for “sister” roles.</span>
         <span class="close2 glyphicon glyphicon-remove-circle pull-right" style="color:#B6AFAF;"></span>
       </div>
        
       <div class="linelightgrey" style="padding-top: 40px;"></div>    
       </div>
       </div>
       </div>







       <!--<div class="col-md-12 column" >
       <div class="col-md-3 column font2" >
       13/5/2014
       </div>
       <div class="col-md-7 column font1">
       Cannot do improv. Good for “sister” roles.</div>
       <div class="col-md-1 column">
       <button type="button" class="previous myBtn button4">
       <div class="close2 glyphicon glyphicon-remove-circle" style="color:#B6AFAF; padding-top: 20px;background:#f2f2f2 !important;"></div>
       </button>
       <div class="col-md-1 column" style="color:#B6AFAF; margin-top: -33px; padding-left: 45px;">
       <i class="glyphicon glyphicon-chevron-up"></i>
       </div>
       </div>
       </div>
       <div class="linelightgrey" style="padding-top: 40px;"></div>    
       <div class="col-md-12 column" >
       <div class="col-md-3 column font2" >
       13/5/2014
       </div>
       <div class="col-md-7 column font1">
       Good personality. Friendly.</div>
       <div class="col-md-2 column">
       <button type="button" class="previous myBtn button4">
       <div class="close2 glyphicon glyphicon-remove-circle" style="color:#B6AFAF; padding-top: 20px; background:#f2f2f2 !important;"></div>
       </button>
       </div>
       </div>
       <div class="linelightgrey" style="padding-top: 40px;"></div>    
       <div class="col-md-12 column" >
       <div class="col-md-3 column font2" >
       13/5/2014
       </div>
       <div class="col-md-7 column font1">
       Cannot do improv. Good for “sister” roles.</div>
       <div class="col-md-2 column">
       <button type="button" class="previous myBtn button4">          
       <div class="close2 glyphicon glyphicon-remove-circle" style="color:#B6AFAF; padding-top: 20px; background:#f2f2f2 !important;"></div>
       </button>
       </div>
       </div>
       <div class="col-md-1 column" style="color:#B6AFAF; margin-top: -33px; padding-left: 374px;">
       <i class="glyphicon glyphicon-chevron-down"></i>
       </div>
       
       <div class="linelightgrey" style="padding-top: 40px;"></div>    
       </div>-->
    
</div>
       <div style="padding-top:105px;">
        <textarea rows="2" cols="41" placeholder="Write new note" style="padding-left: 10px;"></textarea>
        <button class="myBtn button1" style="width: 80px;height: 47px; margin-left: 7px;">Add</button><br><br>
       </div> 
              </div>
      </div>
    </div>
  </div>

  <script>
  $('#bodyDiv, #scrollbox3').enscroll({
    showOnHover: false,
    verticalTrackClass: 'track3',
    verticalHandleClass: 'handle3'
});
  </script>