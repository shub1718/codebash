<nav class="navbar " id="tutnav">
    <div class="">

        <div>
            <ul class="nav navbar-nav">
                <?php
                for($i=1;$i<=5;$i++){
                    echo'
                        
                <li class="dropdown tutlink">
                    <form id="mailajob" method="get" action="tutorial.php" style="display:none">
        <input type="hidden" name="action" value="emailjob" />
        </form>
                    <a class="navl" class="dropdown-toggle" data-toggle="dropdown" onclick="document.getElementById(\'mailajob\').submit();">
                    home
                    </a>
                    <ul class="dropdown-menu">';
                        for($j=1;$j<=8;$j++){
                            echo'
                              <form id="qwe" method="get" action="tutans.php" style="display:none">
        <input type="hidden" name="action" value="emailjob" />
        <input type="hidden" name="asd" value="page" />
        </form>  
                        <li><a onclick="document.getElementById(\'qwe\').submit();">Page 1-1</a></li>
                        
                    ';
                        }
                    
                echo'</ul></li>';
                }
                        ?>
               
            </ul>
        </div>
    </div>
</nav>
<select class="form-control" id="navtut2">
    <optgroup label="Swedish Cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
  </optgroup>
  <optgroup label="German Cars">
    <option value="mercedes">Mercedes</option>
    <option value="audi">Audi</option>
  </optgroup>
    
    
    
</select>
<script>
$(document).ready(function(){
    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).fadeIn(200);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).fadeOut(200);
    });  
});
</script>