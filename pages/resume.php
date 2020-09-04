<?php
include_once('/../include/header.php');


?>


<style>
    .jumbotron p{
        font-size: 12pt;
    }
    .embed-responsive iframe { height:100%; };

</style>

<head>
    <title>Resume!</title>
</head>
<body>


<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="/Files/resume.pdf"></iframe>
</div>

<div class="row">
  <div class="col-sm-8">
    <div class="bs-example" data-example-id="responsive-embed-16by9-iframe-youtube">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="/Files/resume.pdf" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
</div>


</body>

<?php

include_once('/../include/footer.php');