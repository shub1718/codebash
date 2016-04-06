<div class="">
    <?php include('tutnav.php'); ?>
    <div class='jumbotron'>

        <h2>Algorithm</h2>
        <hr>
        <?php
        for ($q = 1; $q <= 5; $q++) {
            echo'
        <div class="container" id="qlink">
             
            <a id ="' . $q . 'asd" data-toggle="collapse" 
                        href="#' . $q . 'asds">sadkfglkfsglkfsllfskjg</a>
        </div>
        <div class="container  collapse tut1  " id="' . $q . 'asds" >
            ';
            for ($w = 1; $w <= 5; $w++) {
                echo'
            
                <div>
            
            <span class="glyphicon glyphicon-chevron-right" id="listtut"></span>
            <form id="123" method="get" action="tutans.php" style="display:none">
        <input type="hidden" name="action" value="emailjob" />
        <input type="hidden" name="asd" value="page" />
        <input type="hidden" name="link" value="sdfghjkjh" />
        </form>  
            <a onclick="document.getElementById(\'123\').submit();" class="tut2">sadkfglkfsglkfsllfskjg</a>
                        </div>';
            }
            echo'
        </div>';
        }
        ?>







    </div>
</div>


