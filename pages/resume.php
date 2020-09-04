<?php
include_once('../include/header.php');


?>


<style>
    .jumbotron p{
        font-size: 12pt;
    }
    .embed-responsive iframe { height:70%; width:70%;};

</style>

<head>
    <title>Resume!</title>
</head>
<body>


<div class="container-fluid">
  <div class="row">
    <div class="col-1">
      
    </div>
    <div class="col-10">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="/Files/resume.pdf"></iframe>
        </div>
    </div>
    <div class="col-1">
      
    </div>
  </div>
</div>


</body>

<?php

include_once('../include/footer.php');