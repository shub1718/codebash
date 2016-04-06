<div >
    <h4>All questions 
        <span class="pull-right">


            <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#search"><i class="glyphicon glyphicon-search"></i>
            </button>
        </span>
    </h4>
    <h4 id="search" class="collapse" style="padding-top:10px;">

        <div class="form-group input-group">
            <input type="text" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default btn-md" type="button">search
                </button>
            </span>
        </div>

    </h4>
    <hr>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <?php
        
            for ($j = 1; $j <= 5; $j++) {
                echo"
        <form id=\"mailajob\" method=\"get\" action=\"question.php\">
    <input type=\"hidden\" name=\"action\" value=\"emailjob\" />
    </form>
        <div class=\"row \" >
            <div class=\"col-md-7  qus\" onclick=\"document.getElementById('mailajob').submit();\">
                <h4 class=\"q\">adsgfld hgfsldgf lfdsfladg</h4>
                <p class=\"com\">sfgklfhglkfhlgfgkfjgfdlkgfalglkdfjg</p>
                <div class='ver'></div>
                <span class=\"right\"> 1 hr ago  <a href=''>shubham</a></span>
            </div>
            <div class=\"col-md-5 \">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"row\">
                        
                        <div class='box'>
                            <div >1</div>
                            <div >answer</div>
                            </div>
                        
                        
                        <div class='box'>
                            <div >128</div>
                            <div >views</div>
                            </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
        <hr>";
    }

    
            
            ?>



    </div>


</div>
