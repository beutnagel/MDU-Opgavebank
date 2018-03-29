<?php
require('head.php');
?>

    <body>




        <div class="container wrapper">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <h1 id="intro"> Rock, Paper, Scissor, Spock & Lizard </h1>
                    <div class="col-md-12" id="border1"></div>
                </div>
            </div>
        </div>



        <div class="container wrapper">
            <div class="row">
                <div class="score col-xs-12 col-md-6 col-md-offset-3">
                    <div class="gamespace">
                    <h1 id="game">
                        
                    </h1>
                    </div>
                </div>
            </div>
        </div>






        <div class="container wrapper">
            <div class="row">
                <div class="score col-xs-12 col-md-6 col-md-offset-3">
                    <div class="col-xs-6 col-md-6 ">
                        <h1 id="stat"> user score: <div id="ppoint"></div> </h1>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <h1 id="stat"> pc score: <div id="cpoint"></div> </h1>
                    </div>
                    <div class="col-xs-12" id="border1"></div>
                </div>
            </div>
        </div>


        <div class="col-xs-4 col-xs-offset-4 ">
            <h2 id="pchoice"> Player Choice</h2>
            <div class="col-md-12" id="border1"></div>
        </div>
        <div class="bwrap">
            <div class="col-xs-6 col-xs-offset-3 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <div class="col-md-offset-1">
                    <div class="col-xs-12 col-xs-offset-0 col-md-2 ">
                        <button class="btn btn-default" id="rockbtn" onClick="fight(4)">
                        </button>
                    </div>
                    <div class="col-xs-12 col-xs-offset-0 col-md-2">
                        <button class="btn btn-default" id="paperbtn" onClick="fight(3)">
                        </button>
                    </div>
                    <div class="col-xs-12 col-xs-offset-0 col-md-2">
                        <button class="btn btn-default" id="scissorbtn" onClick="fight(2)">
                        </button>
                    </div>
                    <div class="col-xs-12 col-xs-offset-0 col-md-2">
                        <button class="btn btn-default" id="spockbtn" onClick="fight(1)">
                        </button>
                    </div>
                    <div class="col-xs-12 col-xs-offset-0 col-md-2">
                        <button class="btn btn-default" id="lizardbtn" onClick="fight(0)">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trigger the modal with a button -->
        <div class="container wrapper">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3 ">
                    <button type="button" id="info" class="btn  center-block  " data-toggle="modal" data-target="#myModal">Game Rules</button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Game Rules</h4>
                    </div>
                    <div class="modal-body">
                        <ul id="infotext">
                            <li>Spock Beats Scissor & Rock </li>
                            <li> Lizard Beats Spock & Paper </li>
                            <li>Paper Beats Spock & Rock </li>
                            <li> Rock Beats Lizard & Scissor </li>
                            <li>Scissor Beats Lizard & Paper </li>
                        </ul>
                        <h2 id="explain"> Video explanation of the game</h2>
                        <video class=" video "width="320" height="240" controls>
                            <source src="learn.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


        <script type="text/javascript" src="js/stensakspapir.js"></script>
    </body>

    </html>