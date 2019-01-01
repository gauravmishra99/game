<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rock Paper Scissors Game</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/style.css">
    </head>
    <body>
        <header>
            <h1>Rock Paper Scissors</h1>
        </header>
        <div class="score-board">
            <div id="user-label" class="badge">user</div>
            <div id="computer-label" class="badge">comp</div>
            <span id="user-score">0</span>:<span id="computer-score">0</span>
        </div>

        <div class="result">
            <p>Paper covers rock. You win!</p>
        </div>

        <div class="choices">
            <div class="choice" id="r">
                <img src="<?php echo base_url(); ?>image/rock_1.jpg" alt="rock">
            </div>

            <div class="choice" id="s">
                <img src="<?php echo base_url(); ?>image/scis_2.jpg" alt="scissors">
            </div>

            <div class="choice" id="p">
                <img src="<?php echo base_url(); ?>image/paper_1.jpg" alt="paper">
            </div>

        </div>
        <p id="action-message">Make your move.</p>
        <p>Just a new change for Git Hub</p>

        <?php
        //
        ?>
        <script src="<?php echo base_url();?>JAVASCRIPT/rps.js"></script>
    </body>
</html>
