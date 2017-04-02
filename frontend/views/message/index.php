
 <div id="page-wrapper" style="overflow: hidden;">
   <div class="row " >

   <aside class="sm-side">      
                <div class="inbox-body">
                    <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                        Compose
                    </a>
                    <!-- Modal -->
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    <h4 class="modal-title">Compose</h4>
                                </div>
                                <div class="modal-body">
                                    <form role="form" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">To</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Cc / Bcc</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="" id="cc" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Subject</label>
                                            <div class="col-lg-10">
                                                <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Message</label>
                                            <div class="col-lg-10">
                                                <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <span class="btn green fileinput-button">
                                                  <i class="fa fa-plus fa fa-white"></i>
                                                  <span>Attachment</span>
                                                  <input type="file" name="files[]" multiple="">
                                                </span>
                                                <button class="btn btn-send" type="submit">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
                
            
            </aside>
  <div class="mail-box col-ls-offset-1" style="height:90vh;">
            
            <aside class="lg-side">
                <div class="inbox-head">
                    <h3>Inbox</h3>
                    <form action="#" class="pull-right position">
                        <div class="input-append">
                            <input type="text" class="sr-input" placeholder="Search Mail">
                            <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="inbox-body">
                     <ul class="list-inline">
                       <li class="chk-all">
                           <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                           <div class="btn-group">
                               <a data-toggle="dropdown" href="#" class="btn btn-outline btn-primary" aria-expanded="false">
                                   All
                                   <i class="fa fa-angle-down "></i>
                               </a>
                               <ul class="dropdown-menu">
                                   <li><a href="#"> None</a></li>
                                   <li><a href="#"> Read</a></li>
                                   <li><a href="#"> Unread</a></li>
                               </ul>
                           </div>
                       </li>

                       <li class="btn-group">
                           <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn btn-outline btn-primary">
                               <i class=" fa fa-refresh"></i>
                           </a>
                       </li>
                       <li class="btn-group hidden-phone">
                           <a data-toggle="dropdown" href="#" class="btn btn-outline btn-primary" aria-expanded="false">
                               More
                               <i class="fa fa-angle-down "></i>
                           </a>
                           <ul class="dropdown-menu">
                               <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                               <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                               <li class="divider"></li>
                               <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                           </ul>
                       </li>
                       <li class="btn-group">
                           <a data-toggle="dropdown" href="#" class="btn btn-outline btn-primary">
                               Move to
                               <i class="fa fa-angle-down "></i>
                           </a>
                           <ul class="dropdown-menu">
                               <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                               <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                               <li class="divider"></li>
                               <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                           </ul>
                       </li>

                       <ul class="list-inline inbox-pagination pull-right">
                           <li><span>1-50 of 234</span></li>
                           <li>
                               <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                           </li>
                           <li>
                               <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                           </li>
                       </ul>
                   <ul>
                    <table class="table table-inbox table-hover">
                      <tbody>
                        <tr class="unread">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message  dont-show">PHPClass</td>
                            <td class="view-message ">Added a new class: Login Class Fast Site</td>
                            <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message  text-right">9:27 AM</td>
                        </tr>
                        <tr class="unread">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Google Webmaster </td>
                            <td class="view-message">Improve the search presence of WebSite</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">March 15</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">JW Player</td>
                            <td class="view-message">Last Chance: Upgrade to Pro for </td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">March 15</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Tim Reid, S P N</td>
                            <td class="view-message">Boost Your Website Traffic</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">April 01</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show">Freelancer.com <span class="label label-danger pull-right">urgent</span></td>
                            <td class="view-message">Stop wasting your visitors </td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">May 23</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show">WOW Slider </td>
                            <td class="view-message">New WOW Slider v7.8 - 67% off</td>
                            <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message text-right">March 14</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show">LinkedIn Pulse</td>
                            <td class="view-message">The One Sign Your Co-Worker Will Stab</td>
                            <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message text-right">Feb 19</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Drupal Community<span class="label label-success pull-right">megazine</span></td>
                            <td class="view-message view-message">Welcome to the Drupal Community</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">March 04</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Facebook</td>
                            <td class="view-message view-message">Somebody requested a new password </td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">June 13</td>
                        </tr>
                     
                       
                    </tbody>
                    </table>
                </div>
            </aside>
</div>
</div>
</div>