<?php $page = 5; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mystyle.css">
    </head>
    <body>
        <?php include('header.php'); ?>
        <div id="page-wrapper" class="container-fluid">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Discussion
                            <span class="pull-right">
                                <a href="#" class="btn btn-danger btn-sm " data-toggle="modal" data-target="#ask">Ask a question</a>
                            </span>
                        </h1>
                    </div>
                </div>


                <div id="ask" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Ask your question</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">

                                    <div class="col-md-12 " >

                                        <div class="form-group">
                                            <label>Question..</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                            <label>Tags</label>
                                            <input class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-primary">post</button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <div class="panel panel-default">

                            <div class="panel-body">

                                <ul class="nav nav-tabs">
                                    <li class=""><a href="discussion.php">Questions</a>
                                    </li>
                                    <li class="active"><a href="discussiontags.php" >Tags</a>
                                    </li>
                                    <li class=""><a href="user.php">Users</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <?php
                                    
                                    include('discussion_view.php');
                                    
                                    ?>
                                    <?php include('pagination10.php'); ?>
                                </div>
                            </div>
                        </div>

                    </div>
<?php include('discussionsidebar.php'); ?>











                </div>

            </div>
        </div>

    </body>
</html>


