
<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-1160 ">
            <div class="container">
                 <div class="container-chinhsu">
    <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
</div>
                <div class="row">
                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"   aria-hidden="true">
        <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="row content8">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="x_panel8">
                                    <div class="x_title">
                                        <h2>Daily active users <small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#element8"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="setting_1.php">Settings 1</a>
                                                    </li>
                                                    <li><a href="setting_2.php">Settings 2</a>
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
                                    <div id="element8">
                                        <div class="timeline">
                                            <div class="list-unstyled ">
                                                <div class="block">
                                                    <div class="tags">
                                                        <a href="" class="tag">
                                                            <span>Entertainment</span>
                                                        </a>
                                                    </div>
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>13 hours ago</span> by <a href="">Jane Smith</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a href="">Read&nbsp;More  &#8594;</a>
                                                        </p>
                                                    </div>
                                                    <div class="circle"></div>
                                                </div> 
                                            </div>
                                            <div class="list-unstyled ">
                                                <div class="block">
                                                    <div class="tags">
                                                        <a href="" class="tag">
                                                            <span>Entertainment</span>
                                                        </a>
                                                    </div>
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>1 day ago</span> by <a href="">David Moe</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a href="">Read&nbsp;More  &#8594;</a>
                                                        </p>
                                                    </div>
                                                    <div class="circle"></div>
                                                </div>
                                            </div>
                                            <div class="list-unstyled unstyle ">
                                                <div class="block">
                                                    <div class="tags">
                                                        <a href="" class="tag">
                                                            <span>Entertainment</span>
                                                        </a>
                                                    </div>
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>1 year ago</span> by <a href="">Jason Statham</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a href="">Read&nbsp;More  &#8594;</a>
                                                        </p>
                                                    </div>
                                                   
                                                    <div class="circle"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> 
                                </div>
                            </div>                
                        </div>

                    </div>

                </div>
            </div>


</div>
