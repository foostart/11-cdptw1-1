

<?php
   $url_host = 'http://'.$_SERVER['HTTP_HOST'];
   $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
   $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
   preg_match_all($pattern_uri, __DIR__, $matches);
   $url_path = $url_host . $matches[1][0];
   $url_path = str_replace('\\', '/', $url_path);
?>


<!-- Modal -->

  <div class="type-1162">
    <div class="container-fluid">
        <div  style="text-align: center;">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
        </div>
       
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 content10">
                <div class="x_panel10">
                    <div class="x_title">
                        <h2><i class="fa fa-chevron-down"></i> Dropdowns <small>Multiple dropdown designs</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a data-toggle="collapse" href="#element10"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu">
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
                    <div id="element10" class="panel-collapse in">
                        <p>Gentelella provides you with several dropdown designs for your choosing.</p>
                        <ul class="nav nav-pills">
                            <li><a href="#">Regular link</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Dropdown
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Dropdown
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu ">
                                    <li><a  href="#">Action</a></li>
                                    <li><a  href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Dropdown
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
