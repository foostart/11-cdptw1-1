<?php
   $url_host = 'http://'.$_SERVER['HTTP_HOST'];
   $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
   $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
   preg_match_all($pattern_uri, __DIR__, $matches);
   $url_path = $url_host . $matches[1][0];
   $url_path = str_replace('\\', '/', $url_path);
?>


  <div class="type-1163">
    <div class="container-fluid">
        <div  style="text-align: center;">
             <button type="button" class="btn btn-primary1" data-toggle="modal" data-target="#exampleModal" >
  Launch demo modal
</button>
        </div>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-hidden="true">

        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 content11">
                <div class="x_panel11">
                    <div class="x_title">
                        <h2><i class="fa fa-square-o"></i> Modals</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a data-toggle="collapse" href="#element11"><i class="fa fa-chevron-up"></i></a>
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
                    <div id="element11" class="panel-collapse in">
                        <button type="button" class="btn btn-primary" data-toggle="modal" >Large modal</button>
                        <div class="modal fade">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h4>Text in a modal</h4>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal">Small modal</button>
                        <div class="modal fade">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h4>Text in a modal</h4>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /modals -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
