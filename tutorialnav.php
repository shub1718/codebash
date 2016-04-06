<div class="parent2">
  <div class="test1"><i class="fa fa-user fa-2x"></i></div>
  <div class="test2"><i class="fa fa-graduation-cap fa-2x"></i></div>
  <div class="test3"><i class="fa fa-code fa-2x"></i></div>
  <div class="test4"><i class="fa fa-envelope-o fa-2x"></i></div>
  <div class="mask2"><h1><i class="glyphicon glyphicon-home"></i></i></div>
</div>
<script>
    $(document).ready(function() {

  var active1 = false;
  var active2 = false;
  var active3 = false;
  var active4 = false;

    $('.parent2').on('mousedown touchstart', function() {
    
    if (!active1) $(this).find('.test1').css({'background-color': 'gray', 'transform': 'translate(0px,125px)'});
    else $(this).find('.test1').css({'background-color': 'dimGray', 'transform': 'none'}); 
     if (!active2) $(this).find('.test2').css({'background-color': 'gray', 'transform': 'translate(60px,105px)'});
    else $(this).find('.test2').css({'background-color': 'darkGray', 'transform': 'none'});
      if (!active3) $(this).find('.test3').css({'background-color': 'gray', 'transform': 'translate(105px,60px)'});
    else $(this).find('.test3').css({'background-color': 'silver', 'transform': 'none'});
      if (!active4) $(this).find('.test4').css({'background-color': 'gray', 'transform': 'translate(125px,0px)'});
    else $(this).find('.test4').css({'background-color': 'silver', 'transform': 'none'});
    active1 = !active1;
    active2 = !active2;
    active3 = !active3;
    active4 = !active4;
      
    });
});
    </script>

    
    
    
    .parent2 {
  top:80px;
  left:400px;
  position:fixed;
 display:block;
  width:100px;
  height:100px;
  background-color:transparent;
  border-radius:50%;
  z-index:20;
  -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
}
.test1 {
  width:60%;
  height:60%;
  background-color:dimGray;
  border-radius:50%;
  position:absolute;
  color:white;
  text-align:center;
  line-height:70px;
    top:25%;
  left:25%;
  z-index:19;
  transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
    position:absolute;
}
.test2 {
  width:60%;
  height:60%;
  background-color:dimGray;
  border-radius:50%;
  position:absolute;
  color:white;
  text-align:center;
  line-height:70px;
    top:25%;
  left:25%;
  z-index:19;
  transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550) .2s;
}
.test3 {
  width:60%;
  height:60%;
  background-color:dimGray;
  border-radius:50%;
  position:absolute;
  color:white;
  text-align:center;
  line-height:70px;
    top:25%;
  left:25%;
  transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550) .4s;  
}
  .test4 {
  width:60%;
  height:60%;
  background-color:dimGray;
  border-radius:50%;
  position:absolute;
  color:white;
  text-align:center;
  line-height:70px;
  top:25%;
  left:25%;
  transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550) .6s;  
}
.mask2 {
  top:80px;
  left:400px;
  width:100px;
  height:100px;
  background:transparent;
  border-radius:50%;
  position:absolute;
  z-index:21;
  color:white;
  text-align:center;
  line-height:120px;
  cursor:pointer;
  position:fixed;
}
