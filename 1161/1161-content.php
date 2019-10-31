
<?php
   $url_host = 'http://'.$_SERVER['HTTP_HOST'];
   $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
   $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
   preg_match_all($pattern_uri, __DIR__, $matches);
   $url_path = $url_host . $matches[1][0];
   $url_path = str_replace('\\', '/', $url_path);
?>




  <div class="type-1161">
    <div class="container-fluid">
        <div class="container-chinhsu">
    <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
</div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 content9">
                <div class="x_panel9">
                    <div class="x_title">
                        <h2>Daily active users <small>Sessions</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a data-toggle="collapse" href="#element9"><i class="fa fa-chevron-up"></i></a>


                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></a>
                                            </li>   
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div id="element9" class="panel-collapse in">
                        <div class="jumbotron">
                            <h1>Hello, world!</h1>
                            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
 
</div>
