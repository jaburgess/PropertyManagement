<!-- addService -->
<div class="modal fade modalshg addService" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="addService" method="post" action="{{ route('dashboardServicesPost') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label>Image</label>
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="addServiceImage" name="image" data-placeholder="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" accept=".png, .jpg, .jpeg" />
                                <label for="addServiceImage"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="addServicePreview" style="background-image: url({{ URL::to('dashboard_assets/assets/images/placeholder.png') }});">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <label for="status1" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="status1" value="1" />
                            <label class="onoffswitch-label" for="status1">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- updateService -->
<div class="modal fade modalshg updateService" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="editService" method="post" action="{{ route('dashboardServicesUpdate') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" />
            <input type="hidden" name="old" />
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Update Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label>Image</label>
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="updateServiceImage" name="image" data-placeholder="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" accept=".png, .jpg, .jpeg" />
                                <label for="updateServiceImage"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="updateServicePreview" style="background-image: url({{ URL::to('dashboard_assets/assets/images/placeholder.png') }});">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <label for="updateService" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="updateService" value="1" />
                            <label class="onoffswitch-label" for="updateService">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- add Services Fee -->
<div class="modal fade modalshg dashboardServicesFeePost" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="addService2" method="post" action="{{ route('dashboardServicesFeePost') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add New Service Fee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label>Service Fee Type</label>
                        <select name="type" required>
                            <option value="Fixed Amount">Fixed Amount</option>
                            <option value="Percentage">Percentage</option>
                        </select>
                    </div>
                    <div class="step">
                        <label>Fixed Amount/Percentage Amount (Amount will apply on all properties if set greater than 0)</label>
                        <input type="number" name="amount" min="0" value="0" >
                    </div>
                    <div class="step">
                        <label>Service Fee Charge</label>
                        <select name="charge" required>
                            <option value="Nightly/Monhtly">Nightly/Monhtly</option>
                            <option value="One Time">One Time</option>
                        </select>
                    </div>
                    <div class="step">
                        <label for="status12" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="status12" value="1" />
                            <label class="onoffswitch-label" for="status12">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- update Services Fee -->
<div class="modal fade modalshg dashboardServicesFeeUpdate" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="editService2" method="post" action="{{ route('dashboardServicesFeeUpdate') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" />
            <input type="hidden" name="old" />
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Update Service Fee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label>Service Fee Type</label>
                        <select name="type" required>
                            <option value="Fixed Amount">Fixed Amount</option>
                            <option value="Percentage">Percentage</option>
                        </select>
                    </div>
                    <div class="step">
                        <label>Fixed Amount/Percentage Amount (Amount will apply on all properties if set greater than 0)</label>
                        <input type="number" name="amount" min="0" value="0" >
                    </div>
                    <div class="step">
                        <label>Service Fee Charge</label>
                        <select name="charge" required>
                            <option value="Nightly/Monhtly">Nightly/Monhtly</option>
                            <option value="One Time">One Time</option>
                        </select>
                    </div>
                    <div class="step">
                        <label for="updateService2" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="updateService2" value="1" />
                            <label class="onoffswitch-label" for="updateService2">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- addCategory -->
<div class="modal fade modalshg addCategory" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="addCategory" method="post" action="{{ route('dashboardCategoriesPost') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label>Icon</label>
                        <div class="icon_lists">
                            <ul>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book" /><i class="fa fa-address-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book-o" /><i class="fa fa-address-book-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card" /><i class="fa fa-address-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card-o" /><i class="fa fa-address-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bandcamp" /><i class="fa fa-bandcamp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bath" /><i class="fa fa-bath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bathtub" /><i class="fa fa-bathtub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license" /><i class="fa fa-drivers-license"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license-o" /><i class="fa fa-drivers-license-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eercast" /><i class="fa fa-eercast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open" /><i class="fa fa-envelope-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open-o" /><i class="fa fa-envelope-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-etsy" /><i class="fa fa-etsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-free-code-camp" /><i class="fa fa-free-code-camp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-grav" /><i class="fa fa-grav"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-handshake-o" /><i class="fa fa-handshake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-badge" /><i class="fa fa-id-badge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card" /><i class="fa fa-id-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card-o" /><i class="fa fa-id-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-imdb" /><i class="fa fa-imdb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linode" /><i class="fa fa-linode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meetup" /><i class="fa fa-meetup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microchip" /><i class="fa fa-microchip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-podcast" /><i class="fa fa-podcast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quora" /><i class="fa fa-quora"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ravelry" /><i class="fa fa-ravelry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-s15" /><i class="fa fa-s15"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shower" /><i class="fa fa-shower"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snowflake-o" /><i class="fa fa-snowflake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superpowers" /><i class="fa fa-superpowers"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-telegram" /><i class="fa fa-telegram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer" /><i class="fa fa-thermometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-0" /><i class="fa fa-thermometer-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-1" /><i class="fa fa-thermometer-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-2" /><i class="fa fa-thermometer-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-3" /><i class="fa fa-thermometer-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-4" /><i class="fa fa-thermometer-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-empty" /><i class="fa fa-thermometer-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-full" /><i class="fa fa-thermometer-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-half" /><i class="fa fa-thermometer-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-quarter" /><i class="fa fa-thermometer-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-three-quarters" /><i class="fa fa-thermometer-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle" /><i class="fa fa-times-rectangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle-o" /><i class="fa fa-times-rectangle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle" /><i class="fa fa-user-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle-o" /><i class="fa fa-user-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-o" /><i class="fa fa-user-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard" /><i class="fa fa-vcard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard-o" /><i class="fa fa-vcard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close" /><i class="fa fa-window-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close-o" /><i class="fa fa-window-close-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-maximize" /><i class="fa fa-window-maximize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-minimize" /><i class="fa fa-window-minimize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-restore" /><i class="fa fa-window-restore"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpexplorer" /><i class="fa fa-wpexplorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book" /><i class="fa fa-address-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book-o" /><i class="fa fa-address-book-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card" /><i class="fa fa-address-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card-o" /><i class="fa fa-address-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-adjust" /><i class="fa fa-adjust"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-american-sign-language-interpreting" /><i class="fa fa-american-sign-language-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-anchor" /><i class="fa fa-anchor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-archive" /><i class="fa fa-archive"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-area-chart" /><i class="fa fa-area-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows" /><i class="fa fa-arrows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-h" /><i class="fa fa-arrows-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-v" /><i class="fa fa-arrows-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asl-interpreting" /><i class="fa fa-asl-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-assistive-listening-systems" /><i class="fa fa-assistive-listening-systems"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asterisk" /><i class="fa fa-asterisk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-at" /><i class="fa fa-at"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-audio-description" /><i class="fa fa-audio-description"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-automobile" /><i class="fa fa-automobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-balance-scale" /><i class="fa fa-balance-scale"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ban" /><i class="fa fa-ban"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bank" /><i class="fa fa-bank"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart" /><i class="fa fa-bar-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart-o" /><i class="fa fa-bar-chart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-barcode" /><i class="fa fa-barcode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bars" /><i class="fa fa-bars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bath" /><i class="fa fa-bath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bathtub" /><i class="fa fa-bathtub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery" /><i class="fa fa-battery"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-0" /><i class="fa fa-battery-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-1" /><i class="fa fa-battery-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-2" /><i class="fa fa-battery-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-3" /><i class="fa fa-battery-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-4" /><i class="fa fa-battery-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-empty" /><i class="fa fa-battery-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-full" /><i class="fa fa-battery-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-half" /><i class="fa fa-battery-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-quarter" /><i class="fa fa-battery-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-three-quarters" /><i class="fa fa-battery-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bed" /><i class="fa fa-bed"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-beer" /><i class="fa fa-beer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell" /><i class="fa fa-bell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-o" /><i class="fa fa-bell-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-slash" /><i class="fa fa-bell-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-slash-o" /><i class="fa fa-bell-slash-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bicycle" /><i class="fa fa-bicycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-binoculars" /><i class="fa fa-binoculars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-birthday-cake" /><i class="fa fa-birthday-cake"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-blind" /><i class="fa fa-blind"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth" /><i class="fa fa-bluetooth"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth-b" /><i class="fa fa-bluetooth-b"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bolt" /><i class="fa fa-bolt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bomb" /><i class="fa fa-bomb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-book" /><i class="fa fa-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bookmark" /><i class="fa fa-bookmark"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bookmark-o" /><i class="fa fa-bookmark-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-braille" /><i class="fa fa-braille"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-briefcase" /><i class="fa fa-briefcase"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bug" /><i class="fa fa-bug"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-building" /><i class="fa fa-building"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-building-o" /><i class="fa fa-building-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bullhorn" /><i class="fa fa-bullhorn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bullseye" /><i class="fa fa-bullseye"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bus" /><i class="fa fa-bus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cab" /><i class="fa fa-cab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calculator" /><i class="fa fa-calculator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar" /><i class="fa fa-calendar"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-check-o" /><i class="fa fa-calendar-check-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-minus-o" /><i class="fa fa-calendar-minus-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-o" /><i class="fa fa-calendar-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-plus-o" /><i class="fa fa-calendar-plus-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-times-o" /><i class="fa fa-calendar-times-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-camera" /><i class="fa fa-camera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-camera-retro" /><i class="fa fa-camera-retro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-car" /><i class="fa fa-car"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-down" /><i class="fa fa-caret-square-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-left" /><i class="fa fa-caret-square-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-right" /><i class="fa fa-caret-square-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-up" /><i class="fa fa-caret-square-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cart-arrow-down" /><i class="fa fa-cart-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cart-plus" /><i class="fa fa-cart-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc" /><i class="fa fa-cc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-certificate" /><i class="fa fa-certificate"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check" /><i class="fa fa-check"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-circle" /><i class="fa fa-check-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-circle-o" /><i class="fa fa-check-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square" /><i class="fa fa-check-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square-o" /><i class="fa fa-check-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-child" /><i class="fa fa-child"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle" /><i class="fa fa-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o" /><i class="fa fa-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o-notch" /><i class="fa fa-circle-o-notch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-thin" /><i class="fa fa-circle-thin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clock-o" /><i class="fa fa-clock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clone" /><i class="fa fa-clone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-close" /><i class="fa fa-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud" /><i class="fa fa-cloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud-download" /><i class="fa fa-cloud-download"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud-upload" /><i class="fa fa-cloud-upload"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-code" /><i class="fa fa-code"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-code-fork" /><i class="fa fa-code-fork"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-coffee" /><i class="fa fa-coffee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cog" /><i class="fa fa-cog"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cogs" /><i class="fa fa-cogs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comment" /><i class="fa fa-comment"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comment-o" /><i class="fa fa-comment-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-commenting" /><i class="fa fa-commenting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-commenting-o" /><i class="fa fa-commenting-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comments" /><i class="fa fa-comments"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comments-o" /><i class="fa fa-comments-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-compass" /><i class="fa fa-compass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-copyright" /><i class="fa fa-copyright"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-creative-commons" /><i class="fa fa-creative-commons"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card" /><i class="fa fa-credit-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card-alt" /><i class="fa fa-credit-card-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-crop" /><i class="fa fa-crop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-crosshairs" /><i class="fa fa-crosshairs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cube" /><i class="fa fa-cube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cubes" /><i class="fa fa-cubes"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cutlery" /><i class="fa fa-cutlery"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dashboard" /><i class="fa fa-dashboard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-database" /><i class="fa fa-database"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deaf" /><i class="fa fa-deaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deafness" /><i class="fa fa-deafness"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-desktop" /><i class="fa fa-desktop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-diamond" /><i class="fa fa-diamond"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dot-circle-o" /><i class="fa fa-dot-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-download" /><i class="fa fa-download"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license" /><i class="fa fa-drivers-license"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license-o" /><i class="fa fa-drivers-license-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-edit" /><i class="fa fa-edit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ellipsis-h" /><i class="fa fa-ellipsis-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ellipsis-v" /><i class="fa fa-ellipsis-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope" /><i class="fa fa-envelope"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-o" /><i class="fa fa-envelope-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open" /><i class="fa fa-envelope-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open-o" /><i class="fa fa-envelope-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-square" /><i class="fa fa-envelope-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eraser" /><i class="fa fa-eraser"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exchange" /><i class="fa fa-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation" /><i class="fa fa-exclamation"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation-circle" /><i class="fa fa-exclamation-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation-triangle" /><i class="fa fa-exclamation-triangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-external-link" /><i class="fa fa-external-link"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-external-link-square" /><i class="fa fa-external-link-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eye" /><i class="fa fa-eye"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eye-slash" /><i class="fa fa-eye-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eyedropper" /><i class="fa fa-eyedropper"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fax" /><i class="fa fa-fax"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-feed" /><i class="fa fa-feed"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-female" /><i class="fa fa-female"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fighter-jet" /><i class="fa fa-fighter-jet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-archive-o" /><i class="fa fa-file-archive-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-audio-o" /><i class="fa fa-file-audio-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-code-o" /><i class="fa fa-file-code-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-excel-o" /><i class="fa fa-file-excel-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-image-o" /><i class="fa fa-file-image-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-movie-o" /><i class="fa fa-file-movie-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-pdf-o" /><i class="fa fa-file-pdf-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-photo-o" /><i class="fa fa-file-photo-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-picture-o" /><i class="fa fa-file-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-powerpoint-o" /><i class="fa fa-file-powerpoint-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-sound-o" /><i class="fa fa-file-sound-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-video-o" /><i class="fa fa-file-video-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-word-o" /><i class="fa fa-file-word-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-zip-o" /><i class="fa fa-file-zip-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-film" /><i class="fa fa-film"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-filter" /><i class="fa fa-filter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fire" /><i class="fa fa-fire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fire-extinguisher" /><i class="fa fa-fire-extinguisher"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag" /><i class="fa fa-flag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag-checkered" /><i class="fa fa-flag-checkered"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag-o" /><i class="fa fa-flag-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flash" /><i class="fa fa-flash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flask" /><i class="fa fa-flask"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder" /><i class="fa fa-folder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-o" /><i class="fa fa-folder-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-open" /><i class="fa fa-folder-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-open-o" /><i class="fa fa-folder-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-frown-o" /><i class="fa fa-frown-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-futbol-o" /><i class="fa fa-futbol-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gamepad" /><i class="fa fa-gamepad"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gavel" /><i class="fa fa-gavel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gear" /><i class="fa fa-gear"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gears" /><i class="fa fa-gears"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gift" /><i class="fa fa-gift"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glass" /><i class="fa fa-glass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-globe" /><i class="fa fa-globe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-graduation-cap" /><i class="fa fa-graduation-cap"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-group" /><i class="fa fa-group"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-grab-o" /><i class="fa fa-hand-grab-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-lizard-o" /><i class="fa fa-hand-lizard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-paper-o" /><i class="fa fa-hand-paper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-peace-o" /><i class="fa fa-hand-peace-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-pointer-o" /><i class="fa fa-hand-pointer-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-rock-o" /><i class="fa fa-hand-rock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-scissors-o" /><i class="fa fa-hand-scissors-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-spock-o" /><i class="fa fa-hand-spock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-stop-o" /><i class="fa fa-hand-stop-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-handshake-o" /><i class="fa fa-handshake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hard-of-hearing" /><i class="fa fa-hard-of-hearing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hashtag" /><i class="fa fa-hashtag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hdd-o" /><i class="fa fa-hdd-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-headphones" /><i class="fa fa-headphones"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart" /><i class="fa fa-heart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart-o" /><i class="fa fa-heart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heartbeat" /><i class="fa fa-heartbeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-history" /><i class="fa fa-history"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-home" /><i class="fa fa-home"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hotel" /><i class="fa fa-hotel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass" /><i class="fa fa-hourglass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-1" /><i class="fa fa-hourglass-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-2" /><i class="fa fa-hourglass-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-3" /><i class="fa fa-hourglass-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-end" /><i class="fa fa-hourglass-end"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-half" /><i class="fa fa-hourglass-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-o" /><i class="fa fa-hourglass-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-start" /><i class="fa fa-hourglass-start"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-i-cursor" /><i class="fa fa-i-cursor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-badge" /><i class="fa fa-id-badge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card" /><i class="fa fa-id-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card-o" /><i class="fa fa-id-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-image" /><i class="fa fa-image"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-inbox" /><i class="fa fa-inbox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-industry" /><i class="fa fa-industry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-info" /><i class="fa fa-info"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-info-circle" /><i class="fa fa-info-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-institution" /><i class="fa fa-institution"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-key" /><i class="fa fa-key"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-keyboard-o" /><i class="fa fa-keyboard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-language" /><i class="fa fa-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-laptop" /><i class="fa fa-laptop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-leaf" /><i class="fa fa-leaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-legal" /><i class="fa fa-legal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lemon-o" /><i class="fa fa-lemon-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-level-down" /><i class="fa fa-level-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-level-up" /><i class="fa fa-level-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-bouy" /><i class="fa fa-life-bouy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-buoy" /><i class="fa fa-life-buoy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-ring" /><i class="fa fa-life-ring"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-saver" /><i class="fa fa-life-saver"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lightbulb-o" /><i class="fa fa-lightbulb-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-line-chart" /><i class="fa fa-line-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-location-arrow" /><i class="fa fa-location-arrow"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lock" /><i class="fa fa-lock"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-low-vision" /><i class="fa fa-low-vision"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-magic" /><i class="fa fa-magic"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-magnet" /><i class="fa fa-magnet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-forward" /><i class="fa fa-mail-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-reply" /><i class="fa fa-mail-reply"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-reply-all" /><i class="fa fa-mail-reply-all"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-male" /><i class="fa fa-male"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map" /><i class="fa fa-map"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-marker" /><i class="fa fa-map-marker"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-o" /><i class="fa fa-map-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-pin" /><i class="fa fa-map-pin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-signs" /><i class="fa fa-map-signs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meh-o" /><i class="fa fa-meh-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microchip" /><i class="fa fa-microchip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microphone" /><i class="fa fa-microphone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microphone-slash" /><i class="fa fa-microphone-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus" /><i class="fa fa-minus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-circle" /><i class="fa fa-minus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square" /><i class="fa fa-minus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square-o" /><i class="fa fa-minus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mobile" /><i class="fa fa-mobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mobile-phone" /><i class="fa fa-mobile-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-money" /><i class="fa fa-money"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-moon-o" /><i class="fa fa-moon-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mortar-board" /><i class="fa fa-mortar-board"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-motorcycle" /><i class="fa fa-motorcycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mouse-pointer" /><i class="fa fa-mouse-pointer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-music" /><i class="fa fa-music"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-navicon" /><i class="fa fa-navicon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-newspaper-o" /><i class="fa fa-newspaper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-object-group" /><i class="fa fa-object-group"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-object-ungroup" /><i class="fa fa-object-ungroup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paint-brush" /><i class="fa fa-paint-brush"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paper-plane" /><i class="fa fa-paper-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paper-plane-o" /><i class="fa fa-paper-plane-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paw" /><i class="fa fa-paw"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil" /><i class="fa fa-pencil"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil-square" /><i class="fa fa-pencil-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil-square-o" /><i class="fa fa-pencil-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-percent" /><i class="fa fa-percent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-phone" /><i class="fa fa-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-phone-square" /><i class="fa fa-phone-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-photo" /><i class="fa fa-photo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-picture-o" /><i class="fa fa-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pie-chart" /><i class="fa fa-pie-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plane" /><i class="fa fa-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plug" /><i class="fa fa-plug"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus" /><i class="fa fa-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-circle" /><i class="fa fa-plus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square-o" /><i class="fa fa-plus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-podcast" /><i class="fa fa-podcast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-power-off" /><i class="fa fa-power-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-print" /><i class="fa fa-print"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-puzzle-piece" /><i class="fa fa-puzzle-piece"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-qrcode" /><i class="fa fa-qrcode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question" /><i class="fa fa-question"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle" /><i class="fa fa-question-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle-o" /><i class="fa fa-question-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quote-left" /><i class="fa fa-quote-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quote-right" /><i class="fa fa-quote-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-random" /><i class="fa fa-random"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-recycle" /><i class="fa fa-recycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-refresh" /><i class="fa fa-refresh"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-registered" /><i class="fa fa-registered"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-remove" /><i class="fa fa-remove"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reorder" /><i class="fa fa-reorder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reply" /><i class="fa fa-reply"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reply-all" /><i class="fa fa-reply-all"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-retweet" /><i class="fa fa-retweet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-road" /><i class="fa fa-road"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rocket" /><i class="fa fa-rocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rss" /><i class="fa fa-rss"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rss-square" /><i class="fa fa-rss-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-s15" /><i class="fa fa-s15"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search" /><i class="fa fa-search"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search-minus" /><i class="fa fa-search-minus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search-plus" /><i class="fa fa-search-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-send" /><i class="fa fa-send"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-send-o" /><i class="fa fa-send-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-server" /><i class="fa fa-server"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share" /><i class="fa fa-share"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt" /><i class="fa fa-share-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt-square" /><i class="fa fa-share-alt-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-square" /><i class="fa fa-share-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-square-o" /><i class="fa fa-share-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shield" /><i class="fa fa-shield"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ship" /><i class="fa fa-ship"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-bag" /><i class="fa fa-shopping-bag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-basket" /><i class="fa fa-shopping-basket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-cart" /><i class="fa fa-shopping-cart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shower" /><i class="fa fa-shower"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-in" /><i class="fa fa-sign-in"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-language" /><i class="fa fa-sign-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-out" /><i class="fa fa-sign-out"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signal" /><i class="fa fa-signal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signing" /><i class="fa fa-signing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sitemap" /><i class="fa fa-sitemap"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sliders" /><i class="fa fa-sliders"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-smile-o" /><i class="fa fa-smile-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snowflake-o" /><i class="fa fa-snowflake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-soccer-ball-o" /><i class="fa fa-soccer-ball-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort" /><i class="fa fa-sort"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-alpha-asc" /><i class="fa fa-sort-alpha-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-alpha-desc" /><i class="fa fa-sort-alpha-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-amount-asc" /><i class="fa fa-sort-amount-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-amount-desc" /><i class="fa fa-sort-amount-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-asc" /><i class="fa fa-sort-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-desc" /><i class="fa fa-sort-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-down" /><i class="fa fa-sort-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-numeric-asc" /><i class="fa fa-sort-numeric-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-numeric-desc" /><i class="fa fa-sort-numeric-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-up" /><i class="fa fa-sort-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-space-shuttle" /><i class="fa fa-space-shuttle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spinner" /><i class="fa fa-spinner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spoon" /><i class="fa fa-spoon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square" /><i class="fa fa-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square-o" /><i class="fa fa-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star" /><i class="fa fa-star"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half" /><i class="fa fa-star-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-empty" /><i class="fa fa-star-half-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-full" /><i class="fa fa-star-half-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-o" /><i class="fa fa-star-half-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-o" /><i class="fa fa-star-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sticky-note" /><i class="fa fa-sticky-note"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sticky-note-o" /><i class="fa fa-sticky-note-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-street-view" /><i class="fa fa-street-view"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-suitcase" /><i class="fa fa-suitcase"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sun-o" /><i class="fa fa-sun-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-support" /><i class="fa fa-support"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tablet" /><i class="fa fa-tablet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tachometer" /><i class="fa fa-tachometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tag" /><i class="fa fa-tag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tags" /><i class="fa fa-tags"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tasks" /><i class="fa fa-tasks"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-taxi" /><i class="fa fa-taxi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-television" /><i class="fa fa-television"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-terminal" /><i class="fa fa-terminal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer" /><i class="fa fa-thermometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-0" /><i class="fa fa-thermometer-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-1" /><i class="fa fa-thermometer-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-2" /><i class="fa fa-thermometer-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-3" /><i class="fa fa-thermometer-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-4" /><i class="fa fa-thermometer-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-empty" /><i class="fa fa-thermometer-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-full" /><i class="fa fa-thermometer-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-half" /><i class="fa fa-thermometer-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-quarter" /><i class="fa fa-thermometer-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-three-quarters" /><i class="fa fa-thermometer-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumb-tack" /><i class="fa fa-thumb-tack"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-down" /><i class="fa fa-thumbs-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-down" /><i class="fa fa-thumbs-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-up" /><i class="fa fa-thumbs-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-up" /><i class="fa fa-thumbs-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ticket" /><i class="fa fa-ticket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times" /><i class="fa fa-times"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-circle" /><i class="fa fa-times-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-circle-o" /><i class="fa fa-times-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle" /><i class="fa fa-times-rectangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle-o" /><i class="fa fa-times-rectangle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tint" /><i class="fa fa-tint"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-down" /><i class="fa fa-toggle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-left" /><i class="fa fa-toggle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-off" /><i class="fa fa-toggle-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-on" /><i class="fa fa-toggle-on"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-right" /><i class="fa fa-toggle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-up" /><i class="fa fa-toggle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trademark" /><i class="fa fa-trademark"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trash" /><i class="fa fa-trash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trash-o" /><i class="fa fa-trash-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tree" /><i class="fa fa-tree"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trophy" /><i class="fa fa-trophy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-truck" /><i class="fa fa-truck"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tty" /><i class="fa fa-tty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tv" /><i class="fa fa-tv"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-umbrella" /><i class="fa fa-umbrella"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-universal-access" /><i class="fa fa-universal-access"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-university" /><i class="fa fa-university"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlock" /><i class="fa fa-unlock"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlock-alt" /><i class="fa fa-unlock-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unsorted" /><i class="fa fa-unsorted"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-upload" /><i class="fa fa-upload"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user" /><i class="fa fa-user"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle" /><i class="fa fa-user-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle-o" /><i class="fa fa-user-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-o" /><i class="fa fa-user-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-plus" /><i class="fa fa-user-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-secret" /><i class="fa fa-user-secret"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-times" /><i class="fa fa-user-times"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-users" /><i class="fa fa-users"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard" /><i class="fa fa-vcard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard-o" /><i class="fa fa-vcard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-video-camera" /><i class="fa fa-video-camera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-control-phone" /><i class="fa fa-volume-control-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-down" /><i class="fa fa-volume-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-off" /><i class="fa fa-volume-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-up" /><i class="fa fa-volume-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-warning" /><i class="fa fa-warning"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wifi" /><i class="fa fa-wifi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close" /><i class="fa fa-window-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close-o" /><i class="fa fa-window-close-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-maximize" /><i class="fa fa-window-maximize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-minimize" /><i class="fa fa-window-minimize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-restore" /><i class="fa fa-window-restore"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wrench" /><i class="fa fa-wrench"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-american-sign-language-interpreting" /><i class="fa fa-american-sign-language-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asl-interpreting" /><i class="fa fa-asl-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-assistive-listening-systems" /><i class="fa fa-assistive-listening-systems"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-audio-description" /><i class="fa fa-audio-description"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-blind" /><i class="fa fa-blind"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-braille" /><i class="fa fa-braille"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc" /><i class="fa fa-cc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deaf" /><i class="fa fa-deaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deafness" /><i class="fa fa-deafness"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hard-of-hearing" /><i class="fa fa-hard-of-hearing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-low-vision" /><i class="fa fa-low-vision"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle-o" /><i class="fa fa-question-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-language" /><i class="fa fa-sign-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signing" /><i class="fa fa-signing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tty" /><i class="fa fa-tty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-universal-access" /><i class="fa fa-universal-access"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-control-phone" /><i class="fa fa-volume-control-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-grab-o" /><i class="fa fa-hand-grab-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-lizard-o" /><i class="fa fa-hand-lizard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-down" /><i class="fa fa-hand-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-left" /><i class="fa fa-hand-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-right" /><i class="fa fa-hand-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-up" /><i class="fa fa-hand-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-paper-o" /><i class="fa fa-hand-paper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-peace-o" /><i class="fa fa-hand-peace-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-pointer-o" /><i class="fa fa-hand-pointer-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-rock-o" /><i class="fa fa-hand-rock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-scissors-o" /><i class="fa fa-hand-scissors-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-spock-o" /><i class="fa fa-hand-spock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-stop-o" /><i class="fa fa-hand-stop-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-down" /><i class="fa fa-thumbs-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-down" /><i class="fa fa-thumbs-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-up" /><i class="fa fa-thumbs-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-up" /><i class="fa fa-thumbs-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ambulance" /><i class="fa fa-ambulance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-automobile" /><i class="fa fa-automobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bicycle" /><i class="fa fa-bicycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bus" /><i class="fa fa-bus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cab" /><i class="fa fa-cab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-car" /><i class="fa fa-car"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fighter-jet" /><i class="fa fa-fighter-jet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-motorcycle" /><i class="fa fa-motorcycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plane" /><i class="fa fa-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rocket" /><i class="fa fa-rocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ship" /><i class="fa fa-ship"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-space-shuttle" /><i class="fa fa-space-shuttle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-subway" /><i class="fa fa-subway"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-taxi" /><i class="fa fa-taxi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-train" /><i class="fa fa-train"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-truck" /><i class="fa fa-truck"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-genderless" /><i class="fa fa-genderless"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-intersex" /><i class="fa fa-intersex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars" /><i class="fa fa-mars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-double" /><i class="fa fa-mars-double"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke" /><i class="fa fa-mars-stroke"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke-h" /><i class="fa fa-mars-stroke-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke-v" /><i class="fa fa-mars-stroke-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mercury" /><i class="fa fa-mercury"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-neuter" /><i class="fa fa-neuter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-transgender" /><i class="fa fa-transgender"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-transgender-alt" /><i class="fa fa-transgender-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus" /><i class="fa fa-venus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus-double" /><i class="fa fa-venus-double"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus-mars" /><i class="fa fa-venus-mars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file" /><i class="fa fa-file"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-archive-o" /><i class="fa fa-file-archive-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-audio-o" /><i class="fa fa-file-audio-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-code-o" /><i class="fa fa-file-code-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-excel-o" /><i class="fa fa-file-excel-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-image-o" /><i class="fa fa-file-image-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-movie-o" /><i class="fa fa-file-movie-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-o" /><i class="fa fa-file-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-pdf-o" /><i class="fa fa-file-pdf-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-photo-o" /><i class="fa fa-file-photo-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-picture-o" /><i class="fa fa-file-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-powerpoint-o" /><i class="fa fa-file-powerpoint-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-sound-o" /><i class="fa fa-file-sound-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text" /><i class="fa fa-file-text"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text-o" /><i class="fa fa-file-text-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-video-o" /><i class="fa fa-file-video-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-word-o" /><i class="fa fa-file-word-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-zip-o" /><i class="fa fa-file-zip-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o-notch" /><i class="fa fa-circle-o-notch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cog" /><i class="fa fa-cog"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gear" /><i class="fa fa-gear"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-refresh" /><i class="fa fa-refresh"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spinner" /><i class="fa fa-spinner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square" /><i class="fa fa-check-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square-o" /><i class="fa fa-check-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle" /><i class="fa fa-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o" /><i class="fa fa-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dot-circle-o" /><i class="fa fa-dot-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square" /><i class="fa fa-minus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square-o" /><i class="fa fa-minus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square-o" /><i class="fa fa-plus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square" /><i class="fa fa-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square-o" /><i class="fa fa-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-amex" /><i class="fa fa-cc-amex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-diners-club" /><i class="fa fa-cc-diners-club"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-discover" /><i class="fa fa-cc-discover"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-jcb" /><i class="fa fa-cc-jcb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-mastercard" /><i class="fa fa-cc-mastercard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-paypal" /><i class="fa fa-cc-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-stripe" /><i class="fa fa-cc-stripe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-visa" /><i class="fa fa-cc-visa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card" /><i class="fa fa-credit-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card-alt" /><i class="fa fa-credit-card-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-wallet" /><i class="fa fa-google-wallet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paypal" /><i class="fa fa-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-area-chart" /><i class="fa fa-area-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart" /><i class="fa fa-bar-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart-o" /><i class="fa fa-bar-chart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-line-chart" /><i class="fa fa-line-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pie-chart" /><i class="fa fa-pie-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitcoin" /><i class="fa fa-bitcoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-btc" /><i class="fa fa-btc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cny" /><i class="fa fa-cny"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dollar" /><i class="fa fa-dollar"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eur" /><i class="fa fa-eur"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-euro" /><i class="fa fa-euro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gbp" /><i class="fa fa-gbp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg" /><i class="fa fa-gg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg-circle" /><i class="fa fa-gg-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ils" /><i class="fa fa-ils"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-inr" /><i class="fa fa-inr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-jpy" /><i class="fa fa-jpy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-krw" /><i class="fa fa-krw"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-money" /><i class="fa fa-money"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rmb" /><i class="fa fa-rmb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rouble" /><i class="fa fa-rouble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rub" /><i class="fa fa-rub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ruble" /><i class="fa fa-ruble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rupee" /><i class="fa fa-rupee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shekel" /><i class="fa fa-shekel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sheqel" /><i class="fa fa-sheqel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-try" /><i class="fa fa-try"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-turkish-lira" /><i class="fa fa-turkish-lira"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-usd" /><i class="fa fa-usd"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viacoin" /><i class="fa fa-viacoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-won" /><i class="fa fa-won"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yen" /><i class="fa fa-yen"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-center" /><i class="fa fa-align-center"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-justify" /><i class="fa fa-align-justify"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-left" /><i class="fa fa-align-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-right" /><i class="fa fa-align-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bold" /><i class="fa fa-bold"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chain" /><i class="fa fa-chain"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chain-broken" /><i class="fa fa-chain-broken"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clipboard" /><i class="fa fa-clipboard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-columns" /><i class="fa fa-columns"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-copy" /><i class="fa fa-copy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cut" /><i class="fa fa-cut"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dedent" /><i class="fa fa-dedent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eraser" /><i class="fa fa-eraser"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file" /><i class="fa fa-file"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-o" /><i class="fa fa-file-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text" /><i class="fa fa-file-text"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text-o" /><i class="fa fa-file-text-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-files-o" /><i class="fa fa-files-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-floppy-o" /><i class="fa fa-floppy-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-font" /><i class="fa fa-font"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-header" /><i class="fa fa-header"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-indent" /><i class="fa fa-indent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-italic" /><i class="fa fa-italic"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-link" /><i class="fa fa-link"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list" /><i class="fa fa-list"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-alt" /><i class="fa fa-list-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-ol" /><i class="fa fa-list-ol"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-ul" /><i class="fa fa-list-ul"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-outdent" /><i class="fa fa-outdent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paperclip" /><i class="fa fa-paperclip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paragraph" /><i class="fa fa-paragraph"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paste" /><i class="fa fa-paste"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-repeat" /><i class="fa fa-repeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rotate-left" /><i class="fa fa-rotate-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rotate-right" /><i class="fa fa-rotate-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-save" /><i class="fa fa-save"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-scissors" /><i class="fa fa-scissors"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-strikethrough" /><i class="fa fa-strikethrough"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-subscript" /><i class="fa fa-subscript"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superscript" /><i class="fa fa-superscript"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-table" /><i class="fa fa-table"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-text-height" /><i class="fa fa-text-height"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-text-width" /><i class="fa fa-text-width"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th" /><i class="fa fa-th"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th-large" /><i class="fa fa-th-large"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th-list" /><i class="fa fa-th-list"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-underline" /><i class="fa fa-underline"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-undo" /><i class="fa fa-undo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlink" /><i class="fa fa-unlink"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-down" /><i class="fa fa-angle-double-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-left" /><i class="fa fa-angle-double-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-right" /><i class="fa fa-angle-double-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-up" /><i class="fa fa-angle-double-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-down" /><i class="fa fa-angle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-left" /><i class="fa fa-angle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-right" /><i class="fa fa-angle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-up" /><i class="fa fa-angle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-down" /><i class="fa fa-arrow-circle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-left" /><i class="fa fa-arrow-circle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-down" /><i class="fa fa-arrow-circle-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-left" /><i class="fa fa-arrow-circle-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-right" /><i class="fa fa-arrow-circle-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-up" /><i class="fa fa-arrow-circle-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-right" /><i class="fa fa-arrow-circle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-up" /><i class="fa fa-arrow-circle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-down" /><i class="fa fa-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-left" /><i class="fa fa-arrow-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-right" /><i class="fa fa-arrow-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-up" /><i class="fa fa-arrow-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows" /><i class="fa fa-arrows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-alt" /><i class="fa fa-arrows-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-h" /><i class="fa fa-arrows-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-v" /><i class="fa fa-arrows-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-down" /><i class="fa fa-caret-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-left" /><i class="fa fa-caret-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-right" /><i class="fa fa-caret-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-down" /><i class="fa fa-caret-square-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-left" /><i class="fa fa-caret-square-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-right" /><i class="fa fa-caret-square-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-up" /><i class="fa fa-caret-square-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-up" /><i class="fa fa-caret-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-down" /><i class="fa fa-chevron-circle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-left" /><i class="fa fa-chevron-circle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-right" /><i class="fa fa-chevron-circle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-up" /><i class="fa fa-chevron-circle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-down" /><i class="fa fa-chevron-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-left" /><i class="fa fa-chevron-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-right" /><i class="fa fa-chevron-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-up" /><i class="fa fa-chevron-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exchange" /><i class="fa fa-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-down" /><i class="fa fa-hand-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-left" /><i class="fa fa-hand-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-right" /><i class="fa fa-hand-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-up" /><i class="fa fa-hand-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-down" /><i class="fa fa-long-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-left" /><i class="fa fa-long-arrow-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-right" /><i class="fa fa-long-arrow-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-up" /><i class="fa fa-long-arrow-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-down" /><i class="fa fa-toggle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-left" /><i class="fa fa-toggle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-right" /><i class="fa fa-toggle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-up" /><i class="fa fa-toggle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-alt" /><i class="fa fa-arrows-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-backward" /><i class="fa fa-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-compress" /><i class="fa fa-compress"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eject" /><i class="fa fa-eject"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-expand" /><i class="fa fa-expand"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fast-backward" /><i class="fa fa-fast-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fast-forward" /><i class="fa fa-fast-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-forward" /><i class="fa fa-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause" /><i class="fa fa-pause"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause-circle" /><i class="fa fa-pause-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause-circle-o" /><i class="fa fa-pause-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play" /><i class="fa fa-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play-circle" /><i class="fa fa-play-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play-circle-o" /><i class="fa fa-play-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-random" /><i class="fa fa-random"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-step-backward" /><i class="fa fa-step-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-step-forward" /><i class="fa fa-step-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop" /><i class="fa fa-stop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop-circle" /><i class="fa fa-stop-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop-circle-o" /><i class="fa fa-stop-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-play" /><i class="fa fa-youtube-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-500px" /><i class="fa fa-500px"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-adn" /><i class="fa fa-adn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-amazon" /><i class="fa fa-amazon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-android" /><i class="fa fa-android"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angellist" /><i class="fa fa-angellist"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-apple" /><i class="fa fa-apple"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bandcamp" /><i class="fa fa-bandcamp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-behance" /><i class="fa fa-behance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-behance-square" /><i class="fa fa-behance-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitbucket" /><i class="fa fa-bitbucket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitbucket-square" /><i class="fa fa-bitbucket-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitcoin" /><i class="fa fa-bitcoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-black-tie" /><i class="fa fa-black-tie"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth" /><i class="fa fa-bluetooth"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth-b" /><i class="fa fa-bluetooth-b"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-btc" /><i class="fa fa-btc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-buysellads" /><i class="fa fa-buysellads"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-amex" /><i class="fa fa-cc-amex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-diners-club" /><i class="fa fa-cc-diners-club"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-discover" /><i class="fa fa-cc-discover"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-jcb" /><i class="fa fa-cc-jcb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-mastercard" /><i class="fa fa-cc-mastercard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-paypal" /><i class="fa fa-cc-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-stripe" /><i class="fa fa-cc-stripe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-visa" /><i class="fa fa-cc-visa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chrome" /><i class="fa fa-chrome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-codepen" /><i class="fa fa-codepen"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-codiepie" /><i class="fa fa-codiepie"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-connectdevelop" /><i class="fa fa-connectdevelop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-contao" /><i class="fa fa-contao"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-css3" /><i class="fa fa-css3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dashcube" /><i class="fa fa-dashcube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-delicious" /><i class="fa fa-delicious"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deviantart" /><i class="fa fa-deviantart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-digg" /><i class="fa fa-digg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dribbble" /><i class="fa fa-dribbble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dropbox" /><i class="fa fa-dropbox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drupal" /><i class="fa fa-drupal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-edge" /><i class="fa fa-edge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eercast" /><i class="fa fa-eercast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-empire" /><i class="fa fa-empire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envira" /><i class="fa fa-envira"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-etsy" /><i class="fa fa-etsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-expeditedssl" /><i class="fa fa-expeditedssl"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fa" /><i class="fa fa-fa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook" /><i class="fa fa-facebook"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-f" /><i class="fa fa-facebook-f"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-official" /><i class="fa fa-facebook-official"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-square" /><i class="fa fa-facebook-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-firefox" /><i class="fa fa-firefox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-first-order" /><i class="fa fa-first-order"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flickr" /><i class="fa fa-flickr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-font-awesome" /><i class="fa fa-font-awesome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fonticons" /><i class="fa fa-fonticons"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fort-awesome" /><i class="fa fa-fort-awesome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-forumbee" /><i class="fa fa-forumbee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-foursquare" /><i class="fa fa-foursquare"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-free-code-camp" /><i class="fa fa-free-code-camp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ge" /><i class="fa fa-ge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-get-pocket" /><i class="fa fa-get-pocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg" /><i class="fa fa-gg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg-circle" /><i class="fa fa-gg-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-git" /><i class="fa fa-git"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-git-square" /><i class="fa fa-git-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github" /><i class="fa fa-github"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github-alt" /><i class="fa fa-github-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github-square" /><i class="fa fa-github-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gitlab" /><i class="fa fa-gitlab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gittip" /><i class="fa fa-gittip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glide" /><i class="fa fa-glide"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glide-g" /><i class="fa fa-glide-g"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google" /><i class="fa fa-google"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus" /><i class="fa fa-google-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-circle" /><i class="fa fa-google-plus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-official" /><i class="fa fa-google-plus-official"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-square" /><i class="fa fa-google-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-wallet" /><i class="fa fa-google-wallet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gratipay" /><i class="fa fa-gratipay"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-grav" /><i class="fa fa-grav"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hacker-news" /><i class="fa fa-hacker-news"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-houzz" /><i class="fa fa-houzz"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-html5" /><i class="fa fa-html5"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-imdb" /><i class="fa fa-imdb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-instagram" /><i class="fa fa-instagram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-internet-explorer" /><i class="fa fa-internet-explorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ioxhost" /><i class="fa fa-ioxhost"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-joomla" /><i class="fa fa-joomla"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-jsfiddle" /><i class="fa fa-jsfiddle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lastfm" /><i class="fa fa-lastfm"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lastfm-square" /><i class="fa fa-lastfm-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-leanpub" /><i class="fa fa-leanpub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linkedin" /><i class="fa fa-linkedin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linkedin-square" /><i class="fa fa-linkedin-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linode" /><i class="fa fa-linode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linux" /><i class="fa fa-linux"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-maxcdn" /><i class="fa fa-maxcdn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meanpath" /><i class="fa fa-meanpath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-medium" /><i class="fa fa-medium"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meetup" /><i class="fa fa-meetup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mixcloud" /><i class="fa fa-mixcloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-modx" /><i class="fa fa-modx"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-odnoklassniki" /><i class="fa fa-odnoklassniki"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-odnoklassniki-square" /><i class="fa fa-odnoklassniki-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-opencart" /><i class="fa fa-opencart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-openid" /><i class="fa fa-openid"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-opera" /><i class="fa fa-opera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-optin-monster" /><i class="fa fa-optin-monster"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pagelines" /><i class="fa fa-pagelines"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paypal" /><i class="fa fa-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper" /><i class="fa fa-pied-piper"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper-alt" /><i class="fa fa-pied-piper-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper-pp" /><i class="fa fa-pied-piper-pp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest" /><i class="fa fa-pinterest"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest-p" /><i class="fa fa-pinterest-p"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest-square" /><i class="fa fa-pinterest-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-product-hunt" /><i class="fa fa-product-hunt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-qq" /><i class="fa fa-qq"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quora" /><i class="fa fa-quora"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ra" /><i class="fa fa-ra"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ravelry" /><i class="fa fa-ravelry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rebel" /><i class="fa fa-rebel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit" /><i class="fa fa-reddit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit-alien" /><i class="fa fa-reddit-alien"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit-square" /><i class="fa fa-reddit-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-renren" /><i class="fa fa-renren"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-resistance" /><i class="fa fa-resistance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-safari" /><i class="fa fa-safari"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-scribd" /><i class="fa fa-scribd"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sellsy" /><i class="fa fa-sellsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt" /><i class="fa fa-share-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt-square" /><i class="fa fa-share-alt-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shirtsinbulk" /><i class="fa fa-shirtsinbulk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-simplybuilt" /><i class="fa fa-simplybuilt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-skyatlas" /><i class="fa fa-skyatlas"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-skype" /><i class="fa fa-skype"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-slack" /><i class="fa fa-slack"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-slideshare" /><i class="fa fa-slideshare"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat" /><i class="fa fa-snapchat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat-ghost" /><i class="fa fa-snapchat-ghost"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat-square" /><i class="fa fa-snapchat-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-soundcloud" /><i class="fa fa-soundcloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spotify" /><i class="fa fa-spotify"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stack-exchange" /><i class="fa fa-stack-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stack-overflow" /><i class="fa fa-stack-overflow"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-steam" /><i class="fa fa-steam"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-steam-square" /><i class="fa fa-steam-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stumbleupon" /><i class="fa fa-stumbleupon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stumbleupon-circle" /><i class="fa fa-stumbleupon-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superpowers" /><i class="fa fa-superpowers"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-telegram" /><i class="fa fa-telegram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tencent-weibo" /><i class="fa fa-tencent-weibo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-themeisle" /><i class="fa fa-themeisle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trello" /><i class="fa fa-trello"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tripadvisor" /><i class="fa fa-tripadvisor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tumblr" /><i class="fa fa-tumblr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tumblr-square" /><i class="fa fa-tumblr-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitch" /><i class="fa fa-twitch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitter" /><i class="fa fa-twitter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitter-square" /><i class="fa fa-twitter-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-usb" /><i class="fa fa-usb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viacoin" /><i class="fa fa-viacoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viadeo" /><i class="fa fa-viadeo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viadeo-square" /><i class="fa fa-viadeo-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vimeo" /><i class="fa fa-vimeo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vimeo-square" /><i class="fa fa-vimeo-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vine" /><i class="fa fa-vine"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vk" /><i class="fa fa-vk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wechat" /><i class="fa fa-wechat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-weibo" /><i class="fa fa-weibo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-weixin" /><i class="fa fa-weixin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-whatsapp" /><i class="fa fa-whatsapp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wikipedia-w" /><i class="fa fa-wikipedia-w"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-windows" /><i class="fa fa-windows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wordpress" /><i class="fa fa-wordpress"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpbeginner" /><i class="fa fa-wpbeginner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpexplorer" /><i class="fa fa-wpexplorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpforms" /><i class="fa fa-wpforms"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-xing" /><i class="fa fa-xing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-xing-square" /><i class="fa fa-xing-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-y-combinator" /><i class="fa fa-y-combinator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-y-combinator-square" /><i class="fa fa-y-combinator-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yahoo" /><i class="fa fa-yahoo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yc" /><i class="fa fa-yc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yc-square" /><i class="fa fa-yc-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yelp" /><i class="fa fa-yelp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yoast" /><i class="fa fa-yoast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube" /><i class="fa fa-youtube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-play" /><i class="fa fa-youtube-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-square" /><i class="fa fa-youtube-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ambulance" /><i class="fa fa-ambulance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-h-square" /><i class="fa fa-h-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart" /><i class="fa fa-heart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart-o" /><i class="fa fa-heart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heartbeat" /><i class="fa fa-heartbeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hospital-o" /><i class="fa fa-hospital-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-medkit" /><i class="fa fa-medkit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stethoscope" /><i class="fa fa-stethoscope"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-md" /><i class="fa fa-user-md"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-kitchen-set" /><i class="fa-solid fa-kitchen-set"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-fire-burner" /><i class="fa-solid fa-fire-burner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-plate-utensils" /><i class="fa-solid fa-plate-utensils"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-coffee-pot" /><i class="fa-solid fa-coffee-pot"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-microwave" /><i class="fa-solid fa-microwave"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-regular fa-chair" /><i class="fa-regular fa-chair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-bed-front" /><i class="fa-solid fa-bed-front"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-clothes-hanger" /><i class="fa-solid fa-clothes-hanger"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-tv-retro" /><i class="fa-solid fa-tv-retro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-router" /><i class="fa-solid fa-router"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-air-conditioner" /><i class="fa-solid fa-air-conditioner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-spray-can-sparkles" /><i class="fa-solid fa-spray-can-sparkles"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-chalkboard-user" /><i class="fa-solid fa-chalkboard-user"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-pot-food" /><i class="fa-solid fa-pot-food"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-blanket" /><i class="fa-solid fa-blanket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-stapler" /><i class="fa-solid fa-stapler"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-heat" /><i class="fa-solid fa-heat"></i></label></li>
<li><label><input type="radio" name="icons" value="fa-solid fa-person-to-door" /><i class="fa-solid fa-person-to-door"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-dumbbell" /><i class="fa-solid fa-dumbbell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-dumbbell" /><i class="fa-solid fa-dumbbell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-elevator" /><i class="fa-solid fa-elevator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-fire-extinguisher" /><i class="fa-solid fa-fire-extinguisher"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-regular fa-house-building" /><i class="fa-regular fa-house-building"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-person-swimming" /><i class="fa-solid fa-person-swimming"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-water-ladder" /><i class="fa-solid fa-water-ladder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-square-parking" /><i class="fa-solid fa-square-parking"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-washing-machine" /><i class="fa-solid fa-washing-machine"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-sensor-fire" /><i class="fa-solid fa-sensor-fire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-family" /><i class="fa-solid fa-family"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-apartment" /><i class="fa-solid fa-apartment"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-house-building" /><i class="fa-solid fa-house-building"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-bed" /><i class="fa-solid fa-bed"></i></label></li>
                            </ul>
                        </div>
                    </div>
                    <div class="step">
                        <label>Selected Icon</label>
                        <div class="selectedIcon"><label></label><input type="text" name="selectedIcon" required></div>
                    </div>
                    <div class="step">
                        <label for="addCategory" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="addCategory" value="1" />
                            <label class="onoffswitch-label" for="addCategory">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- updateCategory -->
<div class="modal fade modalshg updateCategory" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="updateCategory" method="post" action="{{ route('dashboardCategoriesUpdate') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" />
            <input type="hidden" name="old" />
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Update Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label>Icon</label>
                        <div class="icon_lists">
                            <ul>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book" /><i class="fa fa-address-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book-o" /><i class="fa fa-address-book-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card" /><i class="fa fa-address-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card-o" /><i class="fa fa-address-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bandcamp" /><i class="fa fa-bandcamp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bath" /><i class="fa fa-bath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bathtub" /><i class="fa fa-bathtub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license" /><i class="fa fa-drivers-license"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license-o" /><i class="fa fa-drivers-license-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eercast" /><i class="fa fa-eercast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open" /><i class="fa fa-envelope-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open-o" /><i class="fa fa-envelope-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-etsy" /><i class="fa fa-etsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-free-code-camp" /><i class="fa fa-free-code-camp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-grav" /><i class="fa fa-grav"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-handshake-o" /><i class="fa fa-handshake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-badge" /><i class="fa fa-id-badge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card" /><i class="fa fa-id-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card-o" /><i class="fa fa-id-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-imdb" /><i class="fa fa-imdb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linode" /><i class="fa fa-linode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meetup" /><i class="fa fa-meetup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microchip" /><i class="fa fa-microchip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-podcast" /><i class="fa fa-podcast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quora" /><i class="fa fa-quora"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ravelry" /><i class="fa fa-ravelry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-s15" /><i class="fa fa-s15"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shower" /><i class="fa fa-shower"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snowflake-o" /><i class="fa fa-snowflake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superpowers" /><i class="fa fa-superpowers"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-telegram" /><i class="fa fa-telegram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer" /><i class="fa fa-thermometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-0" /><i class="fa fa-thermometer-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-1" /><i class="fa fa-thermometer-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-2" /><i class="fa fa-thermometer-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-3" /><i class="fa fa-thermometer-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-4" /><i class="fa fa-thermometer-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-empty" /><i class="fa fa-thermometer-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-full" /><i class="fa fa-thermometer-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-half" /><i class="fa fa-thermometer-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-quarter" /><i class="fa fa-thermometer-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-three-quarters" /><i class="fa fa-thermometer-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle" /><i class="fa fa-times-rectangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle-o" /><i class="fa fa-times-rectangle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle" /><i class="fa fa-user-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle-o" /><i class="fa fa-user-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-o" /><i class="fa fa-user-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard" /><i class="fa fa-vcard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard-o" /><i class="fa fa-vcard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close" /><i class="fa fa-window-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close-o" /><i class="fa fa-window-close-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-maximize" /><i class="fa fa-window-maximize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-minimize" /><i class="fa fa-window-minimize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-restore" /><i class="fa fa-window-restore"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpexplorer" /><i class="fa fa-wpexplorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book" /><i class="fa fa-address-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book-o" /><i class="fa fa-address-book-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card" /><i class="fa fa-address-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card-o" /><i class="fa fa-address-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-adjust" /><i class="fa fa-adjust"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-american-sign-language-interpreting" /><i class="fa fa-american-sign-language-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-anchor" /><i class="fa fa-anchor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-archive" /><i class="fa fa-archive"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-area-chart" /><i class="fa fa-area-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows" /><i class="fa fa-arrows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-h" /><i class="fa fa-arrows-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-v" /><i class="fa fa-arrows-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asl-interpreting" /><i class="fa fa-asl-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-assistive-listening-systems" /><i class="fa fa-assistive-listening-systems"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asterisk" /><i class="fa fa-asterisk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-at" /><i class="fa fa-at"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-audio-description" /><i class="fa fa-audio-description"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-automobile" /><i class="fa fa-automobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-balance-scale" /><i class="fa fa-balance-scale"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ban" /><i class="fa fa-ban"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bank" /><i class="fa fa-bank"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart" /><i class="fa fa-bar-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart-o" /><i class="fa fa-bar-chart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-barcode" /><i class="fa fa-barcode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bars" /><i class="fa fa-bars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bath" /><i class="fa fa-bath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bathtub" /><i class="fa fa-bathtub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery" /><i class="fa fa-battery"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-0" /><i class="fa fa-battery-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-1" /><i class="fa fa-battery-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-2" /><i class="fa fa-battery-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-3" /><i class="fa fa-battery-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-4" /><i class="fa fa-battery-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-empty" /><i class="fa fa-battery-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-full" /><i class="fa fa-battery-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-half" /><i class="fa fa-battery-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-quarter" /><i class="fa fa-battery-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-three-quarters" /><i class="fa fa-battery-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bed" /><i class="fa fa-bed"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-beer" /><i class="fa fa-beer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell" /><i class="fa fa-bell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-o" /><i class="fa fa-bell-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-slash" /><i class="fa fa-bell-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-slash-o" /><i class="fa fa-bell-slash-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bicycle" /><i class="fa fa-bicycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-binoculars" /><i class="fa fa-binoculars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-birthday-cake" /><i class="fa fa-birthday-cake"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-blind" /><i class="fa fa-blind"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth" /><i class="fa fa-bluetooth"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth-b" /><i class="fa fa-bluetooth-b"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bolt" /><i class="fa fa-bolt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bomb" /><i class="fa fa-bomb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-book" /><i class="fa fa-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bookmark" /><i class="fa fa-bookmark"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bookmark-o" /><i class="fa fa-bookmark-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-braille" /><i class="fa fa-braille"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-briefcase" /><i class="fa fa-briefcase"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bug" /><i class="fa fa-bug"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-building" /><i class="fa fa-building"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-building-o" /><i class="fa fa-building-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bullhorn" /><i class="fa fa-bullhorn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bullseye" /><i class="fa fa-bullseye"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bus" /><i class="fa fa-bus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cab" /><i class="fa fa-cab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calculator" /><i class="fa fa-calculator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar" /><i class="fa fa-calendar"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-check-o" /><i class="fa fa-calendar-check-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-minus-o" /><i class="fa fa-calendar-minus-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-o" /><i class="fa fa-calendar-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-plus-o" /><i class="fa fa-calendar-plus-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-times-o" /><i class="fa fa-calendar-times-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-camera" /><i class="fa fa-camera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-camera-retro" /><i class="fa fa-camera-retro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-car" /><i class="fa fa-car"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-down" /><i class="fa fa-caret-square-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-left" /><i class="fa fa-caret-square-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-right" /><i class="fa fa-caret-square-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-up" /><i class="fa fa-caret-square-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cart-arrow-down" /><i class="fa fa-cart-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cart-plus" /><i class="fa fa-cart-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc" /><i class="fa fa-cc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-certificate" /><i class="fa fa-certificate"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check" /><i class="fa fa-check"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-circle" /><i class="fa fa-check-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-circle-o" /><i class="fa fa-check-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square" /><i class="fa fa-check-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square-o" /><i class="fa fa-check-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-child" /><i class="fa fa-child"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle" /><i class="fa fa-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o" /><i class="fa fa-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o-notch" /><i class="fa fa-circle-o-notch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-thin" /><i class="fa fa-circle-thin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clock-o" /><i class="fa fa-clock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clone" /><i class="fa fa-clone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-close" /><i class="fa fa-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud" /><i class="fa fa-cloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud-download" /><i class="fa fa-cloud-download"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud-upload" /><i class="fa fa-cloud-upload"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-code" /><i class="fa fa-code"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-code-fork" /><i class="fa fa-code-fork"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-coffee" /><i class="fa fa-coffee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cog" /><i class="fa fa-cog"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cogs" /><i class="fa fa-cogs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comment" /><i class="fa fa-comment"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comment-o" /><i class="fa fa-comment-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-commenting" /><i class="fa fa-commenting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-commenting-o" /><i class="fa fa-commenting-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comments" /><i class="fa fa-comments"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comments-o" /><i class="fa fa-comments-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-compass" /><i class="fa fa-compass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-copyright" /><i class="fa fa-copyright"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-creative-commons" /><i class="fa fa-creative-commons"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card" /><i class="fa fa-credit-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card-alt" /><i class="fa fa-credit-card-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-crop" /><i class="fa fa-crop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-crosshairs" /><i class="fa fa-crosshairs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cube" /><i class="fa fa-cube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cubes" /><i class="fa fa-cubes"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cutlery" /><i class="fa fa-cutlery"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dashboard" /><i class="fa fa-dashboard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-database" /><i class="fa fa-database"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deaf" /><i class="fa fa-deaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deafness" /><i class="fa fa-deafness"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-desktop" /><i class="fa fa-desktop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-diamond" /><i class="fa fa-diamond"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dot-circle-o" /><i class="fa fa-dot-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-download" /><i class="fa fa-download"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license" /><i class="fa fa-drivers-license"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license-o" /><i class="fa fa-drivers-license-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-edit" /><i class="fa fa-edit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ellipsis-h" /><i class="fa fa-ellipsis-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ellipsis-v" /><i class="fa fa-ellipsis-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope" /><i class="fa fa-envelope"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-o" /><i class="fa fa-envelope-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open" /><i class="fa fa-envelope-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open-o" /><i class="fa fa-envelope-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-square" /><i class="fa fa-envelope-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eraser" /><i class="fa fa-eraser"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exchange" /><i class="fa fa-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation" /><i class="fa fa-exclamation"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation-circle" /><i class="fa fa-exclamation-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation-triangle" /><i class="fa fa-exclamation-triangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-external-link" /><i class="fa fa-external-link"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-external-link-square" /><i class="fa fa-external-link-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eye" /><i class="fa fa-eye"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eye-slash" /><i class="fa fa-eye-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eyedropper" /><i class="fa fa-eyedropper"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fax" /><i class="fa fa-fax"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-feed" /><i class="fa fa-feed"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-female" /><i class="fa fa-female"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fighter-jet" /><i class="fa fa-fighter-jet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-archive-o" /><i class="fa fa-file-archive-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-audio-o" /><i class="fa fa-file-audio-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-code-o" /><i class="fa fa-file-code-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-excel-o" /><i class="fa fa-file-excel-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-image-o" /><i class="fa fa-file-image-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-movie-o" /><i class="fa fa-file-movie-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-pdf-o" /><i class="fa fa-file-pdf-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-photo-o" /><i class="fa fa-file-photo-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-picture-o" /><i class="fa fa-file-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-powerpoint-o" /><i class="fa fa-file-powerpoint-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-sound-o" /><i class="fa fa-file-sound-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-video-o" /><i class="fa fa-file-video-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-word-o" /><i class="fa fa-file-word-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-zip-o" /><i class="fa fa-file-zip-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-film" /><i class="fa fa-film"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-filter" /><i class="fa fa-filter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fire" /><i class="fa fa-fire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fire-extinguisher" /><i class="fa fa-fire-extinguisher"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag" /><i class="fa fa-flag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag-checkered" /><i class="fa fa-flag-checkered"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag-o" /><i class="fa fa-flag-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flash" /><i class="fa fa-flash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flask" /><i class="fa fa-flask"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder" /><i class="fa fa-folder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-o" /><i class="fa fa-folder-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-open" /><i class="fa fa-folder-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-open-o" /><i class="fa fa-folder-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-frown-o" /><i class="fa fa-frown-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-futbol-o" /><i class="fa fa-futbol-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gamepad" /><i class="fa fa-gamepad"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gavel" /><i class="fa fa-gavel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gear" /><i class="fa fa-gear"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gears" /><i class="fa fa-gears"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gift" /><i class="fa fa-gift"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glass" /><i class="fa fa-glass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-globe" /><i class="fa fa-globe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-graduation-cap" /><i class="fa fa-graduation-cap"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-group" /><i class="fa fa-group"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-grab-o" /><i class="fa fa-hand-grab-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-lizard-o" /><i class="fa fa-hand-lizard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-paper-o" /><i class="fa fa-hand-paper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-peace-o" /><i class="fa fa-hand-peace-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-pointer-o" /><i class="fa fa-hand-pointer-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-rock-o" /><i class="fa fa-hand-rock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-scissors-o" /><i class="fa fa-hand-scissors-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-spock-o" /><i class="fa fa-hand-spock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-stop-o" /><i class="fa fa-hand-stop-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-handshake-o" /><i class="fa fa-handshake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hard-of-hearing" /><i class="fa fa-hard-of-hearing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hashtag" /><i class="fa fa-hashtag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hdd-o" /><i class="fa fa-hdd-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-headphones" /><i class="fa fa-headphones"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart" /><i class="fa fa-heart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart-o" /><i class="fa fa-heart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heartbeat" /><i class="fa fa-heartbeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-history" /><i class="fa fa-history"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-home" /><i class="fa fa-home"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hotel" /><i class="fa fa-hotel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass" /><i class="fa fa-hourglass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-1" /><i class="fa fa-hourglass-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-2" /><i class="fa fa-hourglass-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-3" /><i class="fa fa-hourglass-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-end" /><i class="fa fa-hourglass-end"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-half" /><i class="fa fa-hourglass-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-o" /><i class="fa fa-hourglass-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-start" /><i class="fa fa-hourglass-start"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-i-cursor" /><i class="fa fa-i-cursor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-badge" /><i class="fa fa-id-badge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card" /><i class="fa fa-id-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card-o" /><i class="fa fa-id-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-image" /><i class="fa fa-image"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-inbox" /><i class="fa fa-inbox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-industry" /><i class="fa fa-industry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-info" /><i class="fa fa-info"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-info-circle" /><i class="fa fa-info-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-institution" /><i class="fa fa-institution"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-key" /><i class="fa fa-key"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-keyboard-o" /><i class="fa fa-keyboard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-language" /><i class="fa fa-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-laptop" /><i class="fa fa-laptop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-leaf" /><i class="fa fa-leaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-legal" /><i class="fa fa-legal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lemon-o" /><i class="fa fa-lemon-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-level-down" /><i class="fa fa-level-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-level-up" /><i class="fa fa-level-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-bouy" /><i class="fa fa-life-bouy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-buoy" /><i class="fa fa-life-buoy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-ring" /><i class="fa fa-life-ring"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-saver" /><i class="fa fa-life-saver"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lightbulb-o" /><i class="fa fa-lightbulb-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-line-chart" /><i class="fa fa-line-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-location-arrow" /><i class="fa fa-location-arrow"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lock" /><i class="fa fa-lock"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-low-vision" /><i class="fa fa-low-vision"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-magic" /><i class="fa fa-magic"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-magnet" /><i class="fa fa-magnet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-forward" /><i class="fa fa-mail-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-reply" /><i class="fa fa-mail-reply"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-reply-all" /><i class="fa fa-mail-reply-all"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-male" /><i class="fa fa-male"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map" /><i class="fa fa-map"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-marker" /><i class="fa fa-map-marker"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-o" /><i class="fa fa-map-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-pin" /><i class="fa fa-map-pin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-signs" /><i class="fa fa-map-signs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meh-o" /><i class="fa fa-meh-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microchip" /><i class="fa fa-microchip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microphone" /><i class="fa fa-microphone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microphone-slash" /><i class="fa fa-microphone-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus" /><i class="fa fa-minus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-circle" /><i class="fa fa-minus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square" /><i class="fa fa-minus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square-o" /><i class="fa fa-minus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mobile" /><i class="fa fa-mobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mobile-phone" /><i class="fa fa-mobile-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-money" /><i class="fa fa-money"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-moon-o" /><i class="fa fa-moon-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mortar-board" /><i class="fa fa-mortar-board"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-motorcycle" /><i class="fa fa-motorcycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mouse-pointer" /><i class="fa fa-mouse-pointer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-music" /><i class="fa fa-music"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-navicon" /><i class="fa fa-navicon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-newspaper-o" /><i class="fa fa-newspaper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-object-group" /><i class="fa fa-object-group"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-object-ungroup" /><i class="fa fa-object-ungroup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paint-brush" /><i class="fa fa-paint-brush"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paper-plane" /><i class="fa fa-paper-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paper-plane-o" /><i class="fa fa-paper-plane-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paw" /><i class="fa fa-paw"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil" /><i class="fa fa-pencil"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil-square" /><i class="fa fa-pencil-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil-square-o" /><i class="fa fa-pencil-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-percent" /><i class="fa fa-percent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-phone" /><i class="fa fa-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-phone-square" /><i class="fa fa-phone-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-photo" /><i class="fa fa-photo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-picture-o" /><i class="fa fa-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pie-chart" /><i class="fa fa-pie-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plane" /><i class="fa fa-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plug" /><i class="fa fa-plug"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus" /><i class="fa fa-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-circle" /><i class="fa fa-plus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square-o" /><i class="fa fa-plus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-podcast" /><i class="fa fa-podcast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-power-off" /><i class="fa fa-power-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-print" /><i class="fa fa-print"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-puzzle-piece" /><i class="fa fa-puzzle-piece"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-qrcode" /><i class="fa fa-qrcode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question" /><i class="fa fa-question"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle" /><i class="fa fa-question-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle-o" /><i class="fa fa-question-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quote-left" /><i class="fa fa-quote-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quote-right" /><i class="fa fa-quote-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-random" /><i class="fa fa-random"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-recycle" /><i class="fa fa-recycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-refresh" /><i class="fa fa-refresh"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-registered" /><i class="fa fa-registered"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-remove" /><i class="fa fa-remove"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reorder" /><i class="fa fa-reorder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reply" /><i class="fa fa-reply"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reply-all" /><i class="fa fa-reply-all"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-retweet" /><i class="fa fa-retweet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-road" /><i class="fa fa-road"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rocket" /><i class="fa fa-rocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rss" /><i class="fa fa-rss"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rss-square" /><i class="fa fa-rss-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-s15" /><i class="fa fa-s15"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search" /><i class="fa fa-search"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search-minus" /><i class="fa fa-search-minus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search-plus" /><i class="fa fa-search-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-send" /><i class="fa fa-send"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-send-o" /><i class="fa fa-send-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-server" /><i class="fa fa-server"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share" /><i class="fa fa-share"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt" /><i class="fa fa-share-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt-square" /><i class="fa fa-share-alt-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-square" /><i class="fa fa-share-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-square-o" /><i class="fa fa-share-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shield" /><i class="fa fa-shield"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ship" /><i class="fa fa-ship"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-bag" /><i class="fa fa-shopping-bag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-basket" /><i class="fa fa-shopping-basket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-cart" /><i class="fa fa-shopping-cart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shower" /><i class="fa fa-shower"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-in" /><i class="fa fa-sign-in"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-language" /><i class="fa fa-sign-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-out" /><i class="fa fa-sign-out"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signal" /><i class="fa fa-signal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signing" /><i class="fa fa-signing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sitemap" /><i class="fa fa-sitemap"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sliders" /><i class="fa fa-sliders"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-smile-o" /><i class="fa fa-smile-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snowflake-o" /><i class="fa fa-snowflake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-soccer-ball-o" /><i class="fa fa-soccer-ball-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort" /><i class="fa fa-sort"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-alpha-asc" /><i class="fa fa-sort-alpha-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-alpha-desc" /><i class="fa fa-sort-alpha-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-amount-asc" /><i class="fa fa-sort-amount-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-amount-desc" /><i class="fa fa-sort-amount-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-asc" /><i class="fa fa-sort-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-desc" /><i class="fa fa-sort-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-down" /><i class="fa fa-sort-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-numeric-asc" /><i class="fa fa-sort-numeric-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-numeric-desc" /><i class="fa fa-sort-numeric-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-up" /><i class="fa fa-sort-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-space-shuttle" /><i class="fa fa-space-shuttle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spinner" /><i class="fa fa-spinner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spoon" /><i class="fa fa-spoon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square" /><i class="fa fa-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square-o" /><i class="fa fa-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star" /><i class="fa fa-star"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half" /><i class="fa fa-star-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-empty" /><i class="fa fa-star-half-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-full" /><i class="fa fa-star-half-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-o" /><i class="fa fa-star-half-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-o" /><i class="fa fa-star-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sticky-note" /><i class="fa fa-sticky-note"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sticky-note-o" /><i class="fa fa-sticky-note-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-street-view" /><i class="fa fa-street-view"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-suitcase" /><i class="fa fa-suitcase"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sun-o" /><i class="fa fa-sun-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-support" /><i class="fa fa-support"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tablet" /><i class="fa fa-tablet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tachometer" /><i class="fa fa-tachometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tag" /><i class="fa fa-tag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tags" /><i class="fa fa-tags"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tasks" /><i class="fa fa-tasks"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-taxi" /><i class="fa fa-taxi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-television" /><i class="fa fa-television"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-terminal" /><i class="fa fa-terminal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer" /><i class="fa fa-thermometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-0" /><i class="fa fa-thermometer-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-1" /><i class="fa fa-thermometer-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-2" /><i class="fa fa-thermometer-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-3" /><i class="fa fa-thermometer-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-4" /><i class="fa fa-thermometer-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-empty" /><i class="fa fa-thermometer-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-full" /><i class="fa fa-thermometer-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-half" /><i class="fa fa-thermometer-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-quarter" /><i class="fa fa-thermometer-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-three-quarters" /><i class="fa fa-thermometer-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumb-tack" /><i class="fa fa-thumb-tack"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-down" /><i class="fa fa-thumbs-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-down" /><i class="fa fa-thumbs-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-up" /><i class="fa fa-thumbs-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-up" /><i class="fa fa-thumbs-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ticket" /><i class="fa fa-ticket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times" /><i class="fa fa-times"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-circle" /><i class="fa fa-times-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-circle-o" /><i class="fa fa-times-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle" /><i class="fa fa-times-rectangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle-o" /><i class="fa fa-times-rectangle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tint" /><i class="fa fa-tint"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-down" /><i class="fa fa-toggle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-left" /><i class="fa fa-toggle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-off" /><i class="fa fa-toggle-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-on" /><i class="fa fa-toggle-on"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-right" /><i class="fa fa-toggle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-up" /><i class="fa fa-toggle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trademark" /><i class="fa fa-trademark"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trash" /><i class="fa fa-trash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trash-o" /><i class="fa fa-trash-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tree" /><i class="fa fa-tree"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trophy" /><i class="fa fa-trophy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-truck" /><i class="fa fa-truck"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tty" /><i class="fa fa-tty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tv" /><i class="fa fa-tv"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-umbrella" /><i class="fa fa-umbrella"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-universal-access" /><i class="fa fa-universal-access"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-university" /><i class="fa fa-university"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlock" /><i class="fa fa-unlock"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlock-alt" /><i class="fa fa-unlock-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unsorted" /><i class="fa fa-unsorted"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-upload" /><i class="fa fa-upload"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user" /><i class="fa fa-user"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle" /><i class="fa fa-user-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle-o" /><i class="fa fa-user-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-o" /><i class="fa fa-user-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-plus" /><i class="fa fa-user-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-secret" /><i class="fa fa-user-secret"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-times" /><i class="fa fa-user-times"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-users" /><i class="fa fa-users"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard" /><i class="fa fa-vcard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard-o" /><i class="fa fa-vcard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-video-camera" /><i class="fa fa-video-camera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-control-phone" /><i class="fa fa-volume-control-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-down" /><i class="fa fa-volume-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-off" /><i class="fa fa-volume-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-up" /><i class="fa fa-volume-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-warning" /><i class="fa fa-warning"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wifi" /><i class="fa fa-wifi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close" /><i class="fa fa-window-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close-o" /><i class="fa fa-window-close-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-maximize" /><i class="fa fa-window-maximize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-minimize" /><i class="fa fa-window-minimize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-restore" /><i class="fa fa-window-restore"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wrench" /><i class="fa fa-wrench"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-american-sign-language-interpreting" /><i class="fa fa-american-sign-language-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asl-interpreting" /><i class="fa fa-asl-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-assistive-listening-systems" /><i class="fa fa-assistive-listening-systems"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-audio-description" /><i class="fa fa-audio-description"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-blind" /><i class="fa fa-blind"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-braille" /><i class="fa fa-braille"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc" /><i class="fa fa-cc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deaf" /><i class="fa fa-deaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deafness" /><i class="fa fa-deafness"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hard-of-hearing" /><i class="fa fa-hard-of-hearing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-low-vision" /><i class="fa fa-low-vision"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle-o" /><i class="fa fa-question-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-language" /><i class="fa fa-sign-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signing" /><i class="fa fa-signing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tty" /><i class="fa fa-tty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-universal-access" /><i class="fa fa-universal-access"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-control-phone" /><i class="fa fa-volume-control-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-grab-o" /><i class="fa fa-hand-grab-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-lizard-o" /><i class="fa fa-hand-lizard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-down" /><i class="fa fa-hand-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-left" /><i class="fa fa-hand-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-right" /><i class="fa fa-hand-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-up" /><i class="fa fa-hand-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-paper-o" /><i class="fa fa-hand-paper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-peace-o" /><i class="fa fa-hand-peace-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-pointer-o" /><i class="fa fa-hand-pointer-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-rock-o" /><i class="fa fa-hand-rock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-scissors-o" /><i class="fa fa-hand-scissors-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-spock-o" /><i class="fa fa-hand-spock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-stop-o" /><i class="fa fa-hand-stop-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-down" /><i class="fa fa-thumbs-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-down" /><i class="fa fa-thumbs-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-up" /><i class="fa fa-thumbs-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-up" /><i class="fa fa-thumbs-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ambulance" /><i class="fa fa-ambulance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-automobile" /><i class="fa fa-automobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bicycle" /><i class="fa fa-bicycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bus" /><i class="fa fa-bus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cab" /><i class="fa fa-cab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-car" /><i class="fa fa-car"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fighter-jet" /><i class="fa fa-fighter-jet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-motorcycle" /><i class="fa fa-motorcycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plane" /><i class="fa fa-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rocket" /><i class="fa fa-rocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ship" /><i class="fa fa-ship"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-space-shuttle" /><i class="fa fa-space-shuttle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-subway" /><i class="fa fa-subway"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-taxi" /><i class="fa fa-taxi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-train" /><i class="fa fa-train"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-truck" /><i class="fa fa-truck"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-genderless" /><i class="fa fa-genderless"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-intersex" /><i class="fa fa-intersex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars" /><i class="fa fa-mars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-double" /><i class="fa fa-mars-double"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke" /><i class="fa fa-mars-stroke"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke-h" /><i class="fa fa-mars-stroke-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke-v" /><i class="fa fa-mars-stroke-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mercury" /><i class="fa fa-mercury"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-neuter" /><i class="fa fa-neuter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-transgender" /><i class="fa fa-transgender"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-transgender-alt" /><i class="fa fa-transgender-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus" /><i class="fa fa-venus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus-double" /><i class="fa fa-venus-double"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus-mars" /><i class="fa fa-venus-mars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file" /><i class="fa fa-file"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-archive-o" /><i class="fa fa-file-archive-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-audio-o" /><i class="fa fa-file-audio-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-code-o" /><i class="fa fa-file-code-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-excel-o" /><i class="fa fa-file-excel-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-image-o" /><i class="fa fa-file-image-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-movie-o" /><i class="fa fa-file-movie-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-o" /><i class="fa fa-file-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-pdf-o" /><i class="fa fa-file-pdf-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-photo-o" /><i class="fa fa-file-photo-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-picture-o" /><i class="fa fa-file-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-powerpoint-o" /><i class="fa fa-file-powerpoint-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-sound-o" /><i class="fa fa-file-sound-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text" /><i class="fa fa-file-text"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text-o" /><i class="fa fa-file-text-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-video-o" /><i class="fa fa-file-video-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-word-o" /><i class="fa fa-file-word-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-zip-o" /><i class="fa fa-file-zip-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o-notch" /><i class="fa fa-circle-o-notch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cog" /><i class="fa fa-cog"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gear" /><i class="fa fa-gear"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-refresh" /><i class="fa fa-refresh"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spinner" /><i class="fa fa-spinner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square" /><i class="fa fa-check-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square-o" /><i class="fa fa-check-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle" /><i class="fa fa-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o" /><i class="fa fa-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dot-circle-o" /><i class="fa fa-dot-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square" /><i class="fa fa-minus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square-o" /><i class="fa fa-minus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square-o" /><i class="fa fa-plus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square" /><i class="fa fa-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square-o" /><i class="fa fa-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-amex" /><i class="fa fa-cc-amex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-diners-club" /><i class="fa fa-cc-diners-club"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-discover" /><i class="fa fa-cc-discover"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-jcb" /><i class="fa fa-cc-jcb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-mastercard" /><i class="fa fa-cc-mastercard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-paypal" /><i class="fa fa-cc-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-stripe" /><i class="fa fa-cc-stripe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-visa" /><i class="fa fa-cc-visa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card" /><i class="fa fa-credit-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card-alt" /><i class="fa fa-credit-card-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-wallet" /><i class="fa fa-google-wallet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paypal" /><i class="fa fa-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-area-chart" /><i class="fa fa-area-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart" /><i class="fa fa-bar-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart-o" /><i class="fa fa-bar-chart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-line-chart" /><i class="fa fa-line-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pie-chart" /><i class="fa fa-pie-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitcoin" /><i class="fa fa-bitcoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-btc" /><i class="fa fa-btc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cny" /><i class="fa fa-cny"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dollar" /><i class="fa fa-dollar"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eur" /><i class="fa fa-eur"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-euro" /><i class="fa fa-euro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gbp" /><i class="fa fa-gbp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg" /><i class="fa fa-gg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg-circle" /><i class="fa fa-gg-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ils" /><i class="fa fa-ils"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-inr" /><i class="fa fa-inr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-jpy" /><i class="fa fa-jpy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-krw" /><i class="fa fa-krw"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-money" /><i class="fa fa-money"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rmb" /><i class="fa fa-rmb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rouble" /><i class="fa fa-rouble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rub" /><i class="fa fa-rub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ruble" /><i class="fa fa-ruble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rupee" /><i class="fa fa-rupee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shekel" /><i class="fa fa-shekel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sheqel" /><i class="fa fa-sheqel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-try" /><i class="fa fa-try"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-turkish-lira" /><i class="fa fa-turkish-lira"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-usd" /><i class="fa fa-usd"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viacoin" /><i class="fa fa-viacoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-won" /><i class="fa fa-won"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yen" /><i class="fa fa-yen"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-center" /><i class="fa fa-align-center"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-justify" /><i class="fa fa-align-justify"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-left" /><i class="fa fa-align-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-right" /><i class="fa fa-align-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bold" /><i class="fa fa-bold"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chain" /><i class="fa fa-chain"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chain-broken" /><i class="fa fa-chain-broken"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clipboard" /><i class="fa fa-clipboard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-columns" /><i class="fa fa-columns"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-copy" /><i class="fa fa-copy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cut" /><i class="fa fa-cut"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dedent" /><i class="fa fa-dedent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eraser" /><i class="fa fa-eraser"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file" /><i class="fa fa-file"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-o" /><i class="fa fa-file-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text" /><i class="fa fa-file-text"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text-o" /><i class="fa fa-file-text-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-files-o" /><i class="fa fa-files-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-floppy-o" /><i class="fa fa-floppy-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-font" /><i class="fa fa-font"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-header" /><i class="fa fa-header"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-indent" /><i class="fa fa-indent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-italic" /><i class="fa fa-italic"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-link" /><i class="fa fa-link"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list" /><i class="fa fa-list"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-alt" /><i class="fa fa-list-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-ol" /><i class="fa fa-list-ol"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-ul" /><i class="fa fa-list-ul"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-outdent" /><i class="fa fa-outdent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paperclip" /><i class="fa fa-paperclip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paragraph" /><i class="fa fa-paragraph"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paste" /><i class="fa fa-paste"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-repeat" /><i class="fa fa-repeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rotate-left" /><i class="fa fa-rotate-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rotate-right" /><i class="fa fa-rotate-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-save" /><i class="fa fa-save"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-scissors" /><i class="fa fa-scissors"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-strikethrough" /><i class="fa fa-strikethrough"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-subscript" /><i class="fa fa-subscript"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superscript" /><i class="fa fa-superscript"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-table" /><i class="fa fa-table"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-text-height" /><i class="fa fa-text-height"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-text-width" /><i class="fa fa-text-width"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th" /><i class="fa fa-th"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th-large" /><i class="fa fa-th-large"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th-list" /><i class="fa fa-th-list"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-underline" /><i class="fa fa-underline"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-undo" /><i class="fa fa-undo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlink" /><i class="fa fa-unlink"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-down" /><i class="fa fa-angle-double-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-left" /><i class="fa fa-angle-double-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-right" /><i class="fa fa-angle-double-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-up" /><i class="fa fa-angle-double-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-down" /><i class="fa fa-angle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-left" /><i class="fa fa-angle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-right" /><i class="fa fa-angle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-up" /><i class="fa fa-angle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-down" /><i class="fa fa-arrow-circle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-left" /><i class="fa fa-arrow-circle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-down" /><i class="fa fa-arrow-circle-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-left" /><i class="fa fa-arrow-circle-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-right" /><i class="fa fa-arrow-circle-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-up" /><i class="fa fa-arrow-circle-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-right" /><i class="fa fa-arrow-circle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-up" /><i class="fa fa-arrow-circle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-down" /><i class="fa fa-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-left" /><i class="fa fa-arrow-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-right" /><i class="fa fa-arrow-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-up" /><i class="fa fa-arrow-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows" /><i class="fa fa-arrows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-alt" /><i class="fa fa-arrows-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-h" /><i class="fa fa-arrows-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-v" /><i class="fa fa-arrows-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-down" /><i class="fa fa-caret-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-left" /><i class="fa fa-caret-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-right" /><i class="fa fa-caret-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-down" /><i class="fa fa-caret-square-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-left" /><i class="fa fa-caret-square-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-right" /><i class="fa fa-caret-square-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-up" /><i class="fa fa-caret-square-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-up" /><i class="fa fa-caret-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-down" /><i class="fa fa-chevron-circle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-left" /><i class="fa fa-chevron-circle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-right" /><i class="fa fa-chevron-circle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-up" /><i class="fa fa-chevron-circle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-down" /><i class="fa fa-chevron-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-left" /><i class="fa fa-chevron-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-right" /><i class="fa fa-chevron-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-up" /><i class="fa fa-chevron-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exchange" /><i class="fa fa-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-down" /><i class="fa fa-hand-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-left" /><i class="fa fa-hand-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-right" /><i class="fa fa-hand-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-up" /><i class="fa fa-hand-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-down" /><i class="fa fa-long-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-left" /><i class="fa fa-long-arrow-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-right" /><i class="fa fa-long-arrow-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-up" /><i class="fa fa-long-arrow-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-down" /><i class="fa fa-toggle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-left" /><i class="fa fa-toggle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-right" /><i class="fa fa-toggle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-up" /><i class="fa fa-toggle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-alt" /><i class="fa fa-arrows-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-backward" /><i class="fa fa-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-compress" /><i class="fa fa-compress"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eject" /><i class="fa fa-eject"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-expand" /><i class="fa fa-expand"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fast-backward" /><i class="fa fa-fast-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fast-forward" /><i class="fa fa-fast-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-forward" /><i class="fa fa-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause" /><i class="fa fa-pause"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause-circle" /><i class="fa fa-pause-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause-circle-o" /><i class="fa fa-pause-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play" /><i class="fa fa-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play-circle" /><i class="fa fa-play-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play-circle-o" /><i class="fa fa-play-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-random" /><i class="fa fa-random"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-step-backward" /><i class="fa fa-step-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-step-forward" /><i class="fa fa-step-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop" /><i class="fa fa-stop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop-circle" /><i class="fa fa-stop-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop-circle-o" /><i class="fa fa-stop-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-play" /><i class="fa fa-youtube-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-500px" /><i class="fa fa-500px"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-adn" /><i class="fa fa-adn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-amazon" /><i class="fa fa-amazon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-android" /><i class="fa fa-android"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angellist" /><i class="fa fa-angellist"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-apple" /><i class="fa fa-apple"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bandcamp" /><i class="fa fa-bandcamp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-behance" /><i class="fa fa-behance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-behance-square" /><i class="fa fa-behance-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitbucket" /><i class="fa fa-bitbucket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitbucket-square" /><i class="fa fa-bitbucket-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitcoin" /><i class="fa fa-bitcoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-black-tie" /><i class="fa fa-black-tie"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth" /><i class="fa fa-bluetooth"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth-b" /><i class="fa fa-bluetooth-b"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-btc" /><i class="fa fa-btc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-buysellads" /><i class="fa fa-buysellads"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-amex" /><i class="fa fa-cc-amex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-diners-club" /><i class="fa fa-cc-diners-club"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-discover" /><i class="fa fa-cc-discover"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-jcb" /><i class="fa fa-cc-jcb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-mastercard" /><i class="fa fa-cc-mastercard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-paypal" /><i class="fa fa-cc-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-stripe" /><i class="fa fa-cc-stripe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-visa" /><i class="fa fa-cc-visa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chrome" /><i class="fa fa-chrome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-codepen" /><i class="fa fa-codepen"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-codiepie" /><i class="fa fa-codiepie"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-connectdevelop" /><i class="fa fa-connectdevelop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-contao" /><i class="fa fa-contao"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-css3" /><i class="fa fa-css3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dashcube" /><i class="fa fa-dashcube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-delicious" /><i class="fa fa-delicious"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deviantart" /><i class="fa fa-deviantart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-digg" /><i class="fa fa-digg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dribbble" /><i class="fa fa-dribbble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dropbox" /><i class="fa fa-dropbox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drupal" /><i class="fa fa-drupal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-edge" /><i class="fa fa-edge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eercast" /><i class="fa fa-eercast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-empire" /><i class="fa fa-empire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envira" /><i class="fa fa-envira"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-etsy" /><i class="fa fa-etsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-expeditedssl" /><i class="fa fa-expeditedssl"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fa" /><i class="fa fa-fa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook" /><i class="fa fa-facebook"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-f" /><i class="fa fa-facebook-f"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-official" /><i class="fa fa-facebook-official"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-square" /><i class="fa fa-facebook-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-firefox" /><i class="fa fa-firefox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-first-order" /><i class="fa fa-first-order"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flickr" /><i class="fa fa-flickr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-font-awesome" /><i class="fa fa-font-awesome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fonticons" /><i class="fa fa-fonticons"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fort-awesome" /><i class="fa fa-fort-awesome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-forumbee" /><i class="fa fa-forumbee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-foursquare" /><i class="fa fa-foursquare"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-free-code-camp" /><i class="fa fa-free-code-camp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ge" /><i class="fa fa-ge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-get-pocket" /><i class="fa fa-get-pocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg" /><i class="fa fa-gg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg-circle" /><i class="fa fa-gg-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-git" /><i class="fa fa-git"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-git-square" /><i class="fa fa-git-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github" /><i class="fa fa-github"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github-alt" /><i class="fa fa-github-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github-square" /><i class="fa fa-github-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gitlab" /><i class="fa fa-gitlab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gittip" /><i class="fa fa-gittip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glide" /><i class="fa fa-glide"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glide-g" /><i class="fa fa-glide-g"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google" /><i class="fa fa-google"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus" /><i class="fa fa-google-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-circle" /><i class="fa fa-google-plus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-official" /><i class="fa fa-google-plus-official"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-square" /><i class="fa fa-google-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-wallet" /><i class="fa fa-google-wallet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gratipay" /><i class="fa fa-gratipay"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-grav" /><i class="fa fa-grav"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hacker-news" /><i class="fa fa-hacker-news"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-houzz" /><i class="fa fa-houzz"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-html5" /><i class="fa fa-html5"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-imdb" /><i class="fa fa-imdb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-instagram" /><i class="fa fa-instagram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-internet-explorer" /><i class="fa fa-internet-explorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ioxhost" /><i class="fa fa-ioxhost"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-joomla" /><i class="fa fa-joomla"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-jsfiddle" /><i class="fa fa-jsfiddle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lastfm" /><i class="fa fa-lastfm"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lastfm-square" /><i class="fa fa-lastfm-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-leanpub" /><i class="fa fa-leanpub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linkedin" /><i class="fa fa-linkedin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linkedin-square" /><i class="fa fa-linkedin-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linode" /><i class="fa fa-linode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linux" /><i class="fa fa-linux"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-maxcdn" /><i class="fa fa-maxcdn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meanpath" /><i class="fa fa-meanpath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-medium" /><i class="fa fa-medium"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meetup" /><i class="fa fa-meetup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mixcloud" /><i class="fa fa-mixcloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-modx" /><i class="fa fa-modx"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-odnoklassniki" /><i class="fa fa-odnoklassniki"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-odnoklassniki-square" /><i class="fa fa-odnoklassniki-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-opencart" /><i class="fa fa-opencart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-openid" /><i class="fa fa-openid"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-opera" /><i class="fa fa-opera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-optin-monster" /><i class="fa fa-optin-monster"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pagelines" /><i class="fa fa-pagelines"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paypal" /><i class="fa fa-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper" /><i class="fa fa-pied-piper"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper-alt" /><i class="fa fa-pied-piper-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper-pp" /><i class="fa fa-pied-piper-pp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest" /><i class="fa fa-pinterest"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest-p" /><i class="fa fa-pinterest-p"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest-square" /><i class="fa fa-pinterest-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-product-hunt" /><i class="fa fa-product-hunt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-qq" /><i class="fa fa-qq"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quora" /><i class="fa fa-quora"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ra" /><i class="fa fa-ra"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ravelry" /><i class="fa fa-ravelry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rebel" /><i class="fa fa-rebel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit" /><i class="fa fa-reddit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit-alien" /><i class="fa fa-reddit-alien"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit-square" /><i class="fa fa-reddit-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-renren" /><i class="fa fa-renren"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-resistance" /><i class="fa fa-resistance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-safari" /><i class="fa fa-safari"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-scribd" /><i class="fa fa-scribd"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sellsy" /><i class="fa fa-sellsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt" /><i class="fa fa-share-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt-square" /><i class="fa fa-share-alt-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shirtsinbulk" /><i class="fa fa-shirtsinbulk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-simplybuilt" /><i class="fa fa-simplybuilt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-skyatlas" /><i class="fa fa-skyatlas"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-skype" /><i class="fa fa-skype"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-slack" /><i class="fa fa-slack"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-slideshare" /><i class="fa fa-slideshare"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat" /><i class="fa fa-snapchat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat-ghost" /><i class="fa fa-snapchat-ghost"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat-square" /><i class="fa fa-snapchat-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-soundcloud" /><i class="fa fa-soundcloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spotify" /><i class="fa fa-spotify"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stack-exchange" /><i class="fa fa-stack-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stack-overflow" /><i class="fa fa-stack-overflow"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-steam" /><i class="fa fa-steam"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-steam-square" /><i class="fa fa-steam-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stumbleupon" /><i class="fa fa-stumbleupon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stumbleupon-circle" /><i class="fa fa-stumbleupon-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superpowers" /><i class="fa fa-superpowers"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-telegram" /><i class="fa fa-telegram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tencent-weibo" /><i class="fa fa-tencent-weibo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-themeisle" /><i class="fa fa-themeisle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trello" /><i class="fa fa-trello"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tripadvisor" /><i class="fa fa-tripadvisor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tumblr" /><i class="fa fa-tumblr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tumblr-square" /><i class="fa fa-tumblr-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitch" /><i class="fa fa-twitch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitter" /><i class="fa fa-twitter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitter-square" /><i class="fa fa-twitter-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-usb" /><i class="fa fa-usb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viacoin" /><i class="fa fa-viacoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viadeo" /><i class="fa fa-viadeo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viadeo-square" /><i class="fa fa-viadeo-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vimeo" /><i class="fa fa-vimeo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vimeo-square" /><i class="fa fa-vimeo-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vine" /><i class="fa fa-vine"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vk" /><i class="fa fa-vk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wechat" /><i class="fa fa-wechat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-weibo" /><i class="fa fa-weibo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-weixin" /><i class="fa fa-weixin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-whatsapp" /><i class="fa fa-whatsapp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wikipedia-w" /><i class="fa fa-wikipedia-w"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-windows" /><i class="fa fa-windows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wordpress" /><i class="fa fa-wordpress"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpbeginner" /><i class="fa fa-wpbeginner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpexplorer" /><i class="fa fa-wpexplorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpforms" /><i class="fa fa-wpforms"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-xing" /><i class="fa fa-xing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-xing-square" /><i class="fa fa-xing-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-y-combinator" /><i class="fa fa-y-combinator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-y-combinator-square" /><i class="fa fa-y-combinator-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yahoo" /><i class="fa fa-yahoo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yc" /><i class="fa fa-yc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yc-square" /><i class="fa fa-yc-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yelp" /><i class="fa fa-yelp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yoast" /><i class="fa fa-yoast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube" /><i class="fa fa-youtube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-play" /><i class="fa fa-youtube-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-square" /><i class="fa fa-youtube-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ambulance" /><i class="fa fa-ambulance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-h-square" /><i class="fa fa-h-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart" /><i class="fa fa-heart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart-o" /><i class="fa fa-heart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heartbeat" /><i class="fa fa-heartbeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hospital-o" /><i class="fa fa-hospital-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-medkit" /><i class="fa fa-medkit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stethoscope" /><i class="fa fa-stethoscope"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-md" /><i class="fa fa-user-md"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-kitchen-set" /><i class="fa-solid fa-kitchen-set"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-fire-burner" /><i class="fa-solid fa-fire-burner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-plate-utensils" /><i class="fa-solid fa-plate-utensils"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-coffee-pot" /><i class="fa-solid fa-coffee-pot"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-microwave" /><i class="fa-solid fa-microwave"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-regular fa-chair" /><i class="fa-regular fa-chair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-bed-front" /><i class="fa-solid fa-bed-front"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-clothes-hanger" /><i class="fa-solid fa-clothes-hanger"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-tv-retro" /><i class="fa-solid fa-tv-retro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-router" /><i class="fa-solid fa-router"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-air-conditioner" /><i class="fa-solid fa-air-conditioner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-spray-can-sparkles" /><i class="fa-solid fa-spray-can-sparkles"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-chalkboard-user" /><i class="fa-solid fa-chalkboard-user"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-pot-food" /><i class="fa-solid fa-pot-food"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-blanket" /><i class="fa-solid fa-blanket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-stapler" /><i class="fa-solid fa-stapler"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-heat" /><i class="fa-solid fa-heat"></i></label></li>
<li><label><input type="radio" name="icons" value="fa-solid fa-person-to-door" /><i class="fa-solid fa-person-to-door"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-dumbbell" /><i class="fa-solid fa-dumbbell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-dumbbell" /><i class="fa-solid fa-dumbbell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-elevator" /><i class="fa-solid fa-elevator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-fire-extinguisher" /><i class="fa-solid fa-fire-extinguisher"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-regular fa-house-building" /><i class="fa-regular fa-house-building"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-person-swimming" /><i class="fa-solid fa-person-swimming"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-water-ladder" /><i class="fa-solid fa-water-ladder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-square-parking" /><i class="fa-solid fa-square-parking"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-washing-machine" /><i class="fa-solid fa-washing-machine"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-sensor-fire" /><i class="fa-solid fa-sensor-fire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-family" /><i class="fa-solid fa-family"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-apartment" /><i class="fa-solid fa-apartment"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-house-building" /><i class="fa-solid fa-house-building"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-bed" /><i class="fa-solid fa-bed"></i></label></li>
                            </ul>
                        </div>
                    </div>
                    <div class="step">
                        <label>Selected Icon</label>
                        <div class="selectedIcon"><label></label><input type="text" name="selectedIcon" required></div>
                    </div>
                    <div class="step">
                        <label for="updateCategory" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="updateCategory" value="1" />
                            <label class="onoffswitch-label" for="updateCategory">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- add apartment Features -->
<div class="modal fade modalshg dashboardApartmentFeaturesPost" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="addAmenity" method="post" action="{{ route('dashboardApartmentFeaturesPost') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Apartment Feature</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label>Icon</label>
                        <div class="icon_lists">
                            <ul>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book" /><i class="fa fa-address-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book-o" /><i class="fa fa-address-book-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card" /><i class="fa fa-address-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card-o" /><i class="fa fa-address-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bandcamp" /><i class="fa fa-bandcamp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bath" /><i class="fa fa-bath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bathtub" /><i class="fa fa-bathtub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license" /><i class="fa fa-drivers-license"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license-o" /><i class="fa fa-drivers-license-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eercast" /><i class="fa fa-eercast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open" /><i class="fa fa-envelope-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open-o" /><i class="fa fa-envelope-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-etsy" /><i class="fa fa-etsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-free-code-camp" /><i class="fa fa-free-code-camp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-grav" /><i class="fa fa-grav"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-handshake-o" /><i class="fa fa-handshake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-badge" /><i class="fa fa-id-badge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card" /><i class="fa fa-id-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card-o" /><i class="fa fa-id-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-imdb" /><i class="fa fa-imdb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linode" /><i class="fa fa-linode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meetup" /><i class="fa fa-meetup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microchip" /><i class="fa fa-microchip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-podcast" /><i class="fa fa-podcast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quora" /><i class="fa fa-quora"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ravelry" /><i class="fa fa-ravelry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-s15" /><i class="fa fa-s15"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shower" /><i class="fa fa-shower"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snowflake-o" /><i class="fa fa-snowflake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superpowers" /><i class="fa fa-superpowers"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-telegram" /><i class="fa fa-telegram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer" /><i class="fa fa-thermometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-0" /><i class="fa fa-thermometer-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-1" /><i class="fa fa-thermometer-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-2" /><i class="fa fa-thermometer-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-3" /><i class="fa fa-thermometer-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-4" /><i class="fa fa-thermometer-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-empty" /><i class="fa fa-thermometer-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-full" /><i class="fa fa-thermometer-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-half" /><i class="fa fa-thermometer-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-quarter" /><i class="fa fa-thermometer-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-three-quarters" /><i class="fa fa-thermometer-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle" /><i class="fa fa-times-rectangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle-o" /><i class="fa fa-times-rectangle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle" /><i class="fa fa-user-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle-o" /><i class="fa fa-user-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-o" /><i class="fa fa-user-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard" /><i class="fa fa-vcard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard-o" /><i class="fa fa-vcard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close" /><i class="fa fa-window-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close-o" /><i class="fa fa-window-close-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-maximize" /><i class="fa fa-window-maximize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-minimize" /><i class="fa fa-window-minimize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-restore" /><i class="fa fa-window-restore"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpexplorer" /><i class="fa fa-wpexplorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book" /><i class="fa fa-address-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book-o" /><i class="fa fa-address-book-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card" /><i class="fa fa-address-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card-o" /><i class="fa fa-address-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-adjust" /><i class="fa fa-adjust"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-american-sign-language-interpreting" /><i class="fa fa-american-sign-language-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-anchor" /><i class="fa fa-anchor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-archive" /><i class="fa fa-archive"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-area-chart" /><i class="fa fa-area-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows" /><i class="fa fa-arrows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-h" /><i class="fa fa-arrows-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-v" /><i class="fa fa-arrows-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asl-interpreting" /><i class="fa fa-asl-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-assistive-listening-systems" /><i class="fa fa-assistive-listening-systems"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asterisk" /><i class="fa fa-asterisk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-at" /><i class="fa fa-at"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-audio-description" /><i class="fa fa-audio-description"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-automobile" /><i class="fa fa-automobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-balance-scale" /><i class="fa fa-balance-scale"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ban" /><i class="fa fa-ban"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bank" /><i class="fa fa-bank"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart" /><i class="fa fa-bar-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart-o" /><i class="fa fa-bar-chart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-barcode" /><i class="fa fa-barcode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bars" /><i class="fa fa-bars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bath" /><i class="fa fa-bath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bathtub" /><i class="fa fa-bathtub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery" /><i class="fa fa-battery"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-0" /><i class="fa fa-battery-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-1" /><i class="fa fa-battery-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-2" /><i class="fa fa-battery-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-3" /><i class="fa fa-battery-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-4" /><i class="fa fa-battery-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-empty" /><i class="fa fa-battery-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-full" /><i class="fa fa-battery-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-half" /><i class="fa fa-battery-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-quarter" /><i class="fa fa-battery-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-three-quarters" /><i class="fa fa-battery-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bed" /><i class="fa fa-bed"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-beer" /><i class="fa fa-beer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell" /><i class="fa fa-bell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-o" /><i class="fa fa-bell-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-slash" /><i class="fa fa-bell-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-slash-o" /><i class="fa fa-bell-slash-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bicycle" /><i class="fa fa-bicycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-binoculars" /><i class="fa fa-binoculars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-birthday-cake" /><i class="fa fa-birthday-cake"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-blind" /><i class="fa fa-blind"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth" /><i class="fa fa-bluetooth"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth-b" /><i class="fa fa-bluetooth-b"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bolt" /><i class="fa fa-bolt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bomb" /><i class="fa fa-bomb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-book" /><i class="fa fa-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bookmark" /><i class="fa fa-bookmark"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bookmark-o" /><i class="fa fa-bookmark-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-braille" /><i class="fa fa-braille"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-briefcase" /><i class="fa fa-briefcase"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bug" /><i class="fa fa-bug"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-building" /><i class="fa fa-building"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-building-o" /><i class="fa fa-building-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bullhorn" /><i class="fa fa-bullhorn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bullseye" /><i class="fa fa-bullseye"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bus" /><i class="fa fa-bus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cab" /><i class="fa fa-cab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calculator" /><i class="fa fa-calculator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar" /><i class="fa fa-calendar"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-check-o" /><i class="fa fa-calendar-check-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-minus-o" /><i class="fa fa-calendar-minus-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-o" /><i class="fa fa-calendar-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-plus-o" /><i class="fa fa-calendar-plus-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-times-o" /><i class="fa fa-calendar-times-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-camera" /><i class="fa fa-camera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-camera-retro" /><i class="fa fa-camera-retro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-car" /><i class="fa fa-car"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-down" /><i class="fa fa-caret-square-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-left" /><i class="fa fa-caret-square-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-right" /><i class="fa fa-caret-square-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-up" /><i class="fa fa-caret-square-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cart-arrow-down" /><i class="fa fa-cart-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cart-plus" /><i class="fa fa-cart-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc" /><i class="fa fa-cc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-certificate" /><i class="fa fa-certificate"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check" /><i class="fa fa-check"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-circle" /><i class="fa fa-check-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-circle-o" /><i class="fa fa-check-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square" /><i class="fa fa-check-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square-o" /><i class="fa fa-check-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-child" /><i class="fa fa-child"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle" /><i class="fa fa-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o" /><i class="fa fa-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o-notch" /><i class="fa fa-circle-o-notch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-thin" /><i class="fa fa-circle-thin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clock-o" /><i class="fa fa-clock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clone" /><i class="fa fa-clone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-close" /><i class="fa fa-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud" /><i class="fa fa-cloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud-download" /><i class="fa fa-cloud-download"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud-upload" /><i class="fa fa-cloud-upload"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-code" /><i class="fa fa-code"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-code-fork" /><i class="fa fa-code-fork"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-coffee" /><i class="fa fa-coffee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cog" /><i class="fa fa-cog"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cogs" /><i class="fa fa-cogs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comment" /><i class="fa fa-comment"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comment-o" /><i class="fa fa-comment-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-commenting" /><i class="fa fa-commenting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-commenting-o" /><i class="fa fa-commenting-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comments" /><i class="fa fa-comments"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comments-o" /><i class="fa fa-comments-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-compass" /><i class="fa fa-compass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-copyright" /><i class="fa fa-copyright"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-creative-commons" /><i class="fa fa-creative-commons"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card" /><i class="fa fa-credit-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card-alt" /><i class="fa fa-credit-card-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-crop" /><i class="fa fa-crop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-crosshairs" /><i class="fa fa-crosshairs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cube" /><i class="fa fa-cube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cubes" /><i class="fa fa-cubes"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cutlery" /><i class="fa fa-cutlery"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dashboard" /><i class="fa fa-dashboard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-database" /><i class="fa fa-database"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deaf" /><i class="fa fa-deaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deafness" /><i class="fa fa-deafness"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-desktop" /><i class="fa fa-desktop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-diamond" /><i class="fa fa-diamond"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dot-circle-o" /><i class="fa fa-dot-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-download" /><i class="fa fa-download"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license" /><i class="fa fa-drivers-license"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license-o" /><i class="fa fa-drivers-license-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-edit" /><i class="fa fa-edit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ellipsis-h" /><i class="fa fa-ellipsis-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ellipsis-v" /><i class="fa fa-ellipsis-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope" /><i class="fa fa-envelope"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-o" /><i class="fa fa-envelope-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open" /><i class="fa fa-envelope-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open-o" /><i class="fa fa-envelope-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-square" /><i class="fa fa-envelope-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eraser" /><i class="fa fa-eraser"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exchange" /><i class="fa fa-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation" /><i class="fa fa-exclamation"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation-circle" /><i class="fa fa-exclamation-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation-triangle" /><i class="fa fa-exclamation-triangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-external-link" /><i class="fa fa-external-link"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-external-link-square" /><i class="fa fa-external-link-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eye" /><i class="fa fa-eye"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eye-slash" /><i class="fa fa-eye-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eyedropper" /><i class="fa fa-eyedropper"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fax" /><i class="fa fa-fax"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-feed" /><i class="fa fa-feed"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-female" /><i class="fa fa-female"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fighter-jet" /><i class="fa fa-fighter-jet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-archive-o" /><i class="fa fa-file-archive-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-audio-o" /><i class="fa fa-file-audio-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-code-o" /><i class="fa fa-file-code-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-excel-o" /><i class="fa fa-file-excel-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-image-o" /><i class="fa fa-file-image-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-movie-o" /><i class="fa fa-file-movie-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-pdf-o" /><i class="fa fa-file-pdf-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-photo-o" /><i class="fa fa-file-photo-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-picture-o" /><i class="fa fa-file-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-powerpoint-o" /><i class="fa fa-file-powerpoint-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-sound-o" /><i class="fa fa-file-sound-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-video-o" /><i class="fa fa-file-video-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-word-o" /><i class="fa fa-file-word-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-zip-o" /><i class="fa fa-file-zip-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-film" /><i class="fa fa-film"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-filter" /><i class="fa fa-filter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fire" /><i class="fa fa-fire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fire-extinguisher" /><i class="fa fa-fire-extinguisher"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag" /><i class="fa fa-flag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag-checkered" /><i class="fa fa-flag-checkered"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag-o" /><i class="fa fa-flag-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flash" /><i class="fa fa-flash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flask" /><i class="fa fa-flask"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder" /><i class="fa fa-folder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-o" /><i class="fa fa-folder-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-open" /><i class="fa fa-folder-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-open-o" /><i class="fa fa-folder-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-frown-o" /><i class="fa fa-frown-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-futbol-o" /><i class="fa fa-futbol-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gamepad" /><i class="fa fa-gamepad"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gavel" /><i class="fa fa-gavel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gear" /><i class="fa fa-gear"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gears" /><i class="fa fa-gears"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gift" /><i class="fa fa-gift"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glass" /><i class="fa fa-glass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-globe" /><i class="fa fa-globe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-graduation-cap" /><i class="fa fa-graduation-cap"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-group" /><i class="fa fa-group"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-grab-o" /><i class="fa fa-hand-grab-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-lizard-o" /><i class="fa fa-hand-lizard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-paper-o" /><i class="fa fa-hand-paper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-peace-o" /><i class="fa fa-hand-peace-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-pointer-o" /><i class="fa fa-hand-pointer-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-rock-o" /><i class="fa fa-hand-rock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-scissors-o" /><i class="fa fa-hand-scissors-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-spock-o" /><i class="fa fa-hand-spock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-stop-o" /><i class="fa fa-hand-stop-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-handshake-o" /><i class="fa fa-handshake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hard-of-hearing" /><i class="fa fa-hard-of-hearing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hashtag" /><i class="fa fa-hashtag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hdd-o" /><i class="fa fa-hdd-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-headphones" /><i class="fa fa-headphones"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart" /><i class="fa fa-heart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart-o" /><i class="fa fa-heart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heartbeat" /><i class="fa fa-heartbeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-history" /><i class="fa fa-history"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-home" /><i class="fa fa-home"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hotel" /><i class="fa fa-hotel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass" /><i class="fa fa-hourglass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-1" /><i class="fa fa-hourglass-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-2" /><i class="fa fa-hourglass-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-3" /><i class="fa fa-hourglass-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-end" /><i class="fa fa-hourglass-end"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-half" /><i class="fa fa-hourglass-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-o" /><i class="fa fa-hourglass-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-start" /><i class="fa fa-hourglass-start"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-i-cursor" /><i class="fa fa-i-cursor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-badge" /><i class="fa fa-id-badge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card" /><i class="fa fa-id-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card-o" /><i class="fa fa-id-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-image" /><i class="fa fa-image"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-inbox" /><i class="fa fa-inbox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-industry" /><i class="fa fa-industry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-info" /><i class="fa fa-info"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-info-circle" /><i class="fa fa-info-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-institution" /><i class="fa fa-institution"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-key" /><i class="fa fa-key"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-keyboard-o" /><i class="fa fa-keyboard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-language" /><i class="fa fa-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-laptop" /><i class="fa fa-laptop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-leaf" /><i class="fa fa-leaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-legal" /><i class="fa fa-legal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lemon-o" /><i class="fa fa-lemon-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-level-down" /><i class="fa fa-level-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-level-up" /><i class="fa fa-level-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-bouy" /><i class="fa fa-life-bouy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-buoy" /><i class="fa fa-life-buoy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-ring" /><i class="fa fa-life-ring"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-saver" /><i class="fa fa-life-saver"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lightbulb-o" /><i class="fa fa-lightbulb-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-line-chart" /><i class="fa fa-line-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-location-arrow" /><i class="fa fa-location-arrow"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lock" /><i class="fa fa-lock"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-low-vision" /><i class="fa fa-low-vision"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-magic" /><i class="fa fa-magic"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-magnet" /><i class="fa fa-magnet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-forward" /><i class="fa fa-mail-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-reply" /><i class="fa fa-mail-reply"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-reply-all" /><i class="fa fa-mail-reply-all"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-male" /><i class="fa fa-male"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map" /><i class="fa fa-map"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-marker" /><i class="fa fa-map-marker"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-o" /><i class="fa fa-map-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-pin" /><i class="fa fa-map-pin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-signs" /><i class="fa fa-map-signs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meh-o" /><i class="fa fa-meh-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microchip" /><i class="fa fa-microchip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microphone" /><i class="fa fa-microphone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microphone-slash" /><i class="fa fa-microphone-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus" /><i class="fa fa-minus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-circle" /><i class="fa fa-minus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square" /><i class="fa fa-minus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square-o" /><i class="fa fa-minus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mobile" /><i class="fa fa-mobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mobile-phone" /><i class="fa fa-mobile-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-money" /><i class="fa fa-money"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-moon-o" /><i class="fa fa-moon-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mortar-board" /><i class="fa fa-mortar-board"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-motorcycle" /><i class="fa fa-motorcycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mouse-pointer" /><i class="fa fa-mouse-pointer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-music" /><i class="fa fa-music"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-navicon" /><i class="fa fa-navicon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-newspaper-o" /><i class="fa fa-newspaper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-object-group" /><i class="fa fa-object-group"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-object-ungroup" /><i class="fa fa-object-ungroup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paint-brush" /><i class="fa fa-paint-brush"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paper-plane" /><i class="fa fa-paper-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paper-plane-o" /><i class="fa fa-paper-plane-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paw" /><i class="fa fa-paw"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil" /><i class="fa fa-pencil"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil-square" /><i class="fa fa-pencil-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil-square-o" /><i class="fa fa-pencil-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-percent" /><i class="fa fa-percent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-phone" /><i class="fa fa-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-phone-square" /><i class="fa fa-phone-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-photo" /><i class="fa fa-photo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-picture-o" /><i class="fa fa-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pie-chart" /><i class="fa fa-pie-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plane" /><i class="fa fa-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plug" /><i class="fa fa-plug"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus" /><i class="fa fa-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-circle" /><i class="fa fa-plus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square-o" /><i class="fa fa-plus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-podcast" /><i class="fa fa-podcast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-power-off" /><i class="fa fa-power-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-print" /><i class="fa fa-print"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-puzzle-piece" /><i class="fa fa-puzzle-piece"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-qrcode" /><i class="fa fa-qrcode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question" /><i class="fa fa-question"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle" /><i class="fa fa-question-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle-o" /><i class="fa fa-question-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quote-left" /><i class="fa fa-quote-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quote-right" /><i class="fa fa-quote-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-random" /><i class="fa fa-random"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-recycle" /><i class="fa fa-recycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-refresh" /><i class="fa fa-refresh"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-registered" /><i class="fa fa-registered"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-remove" /><i class="fa fa-remove"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reorder" /><i class="fa fa-reorder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reply" /><i class="fa fa-reply"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reply-all" /><i class="fa fa-reply-all"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-retweet" /><i class="fa fa-retweet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-road" /><i class="fa fa-road"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rocket" /><i class="fa fa-rocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rss" /><i class="fa fa-rss"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rss-square" /><i class="fa fa-rss-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-s15" /><i class="fa fa-s15"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search" /><i class="fa fa-search"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search-minus" /><i class="fa fa-search-minus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search-plus" /><i class="fa fa-search-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-send" /><i class="fa fa-send"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-send-o" /><i class="fa fa-send-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-server" /><i class="fa fa-server"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share" /><i class="fa fa-share"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt" /><i class="fa fa-share-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt-square" /><i class="fa fa-share-alt-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-square" /><i class="fa fa-share-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-square-o" /><i class="fa fa-share-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shield" /><i class="fa fa-shield"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ship" /><i class="fa fa-ship"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-bag" /><i class="fa fa-shopping-bag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-basket" /><i class="fa fa-shopping-basket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-cart" /><i class="fa fa-shopping-cart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shower" /><i class="fa fa-shower"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-in" /><i class="fa fa-sign-in"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-language" /><i class="fa fa-sign-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-out" /><i class="fa fa-sign-out"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signal" /><i class="fa fa-signal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signing" /><i class="fa fa-signing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sitemap" /><i class="fa fa-sitemap"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sliders" /><i class="fa fa-sliders"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-smile-o" /><i class="fa fa-smile-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snowflake-o" /><i class="fa fa-snowflake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-soccer-ball-o" /><i class="fa fa-soccer-ball-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort" /><i class="fa fa-sort"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-alpha-asc" /><i class="fa fa-sort-alpha-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-alpha-desc" /><i class="fa fa-sort-alpha-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-amount-asc" /><i class="fa fa-sort-amount-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-amount-desc" /><i class="fa fa-sort-amount-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-asc" /><i class="fa fa-sort-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-desc" /><i class="fa fa-sort-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-down" /><i class="fa fa-sort-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-numeric-asc" /><i class="fa fa-sort-numeric-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-numeric-desc" /><i class="fa fa-sort-numeric-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-up" /><i class="fa fa-sort-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-space-shuttle" /><i class="fa fa-space-shuttle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spinner" /><i class="fa fa-spinner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spoon" /><i class="fa fa-spoon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square" /><i class="fa fa-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square-o" /><i class="fa fa-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star" /><i class="fa fa-star"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half" /><i class="fa fa-star-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-empty" /><i class="fa fa-star-half-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-full" /><i class="fa fa-star-half-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-o" /><i class="fa fa-star-half-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-o" /><i class="fa fa-star-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sticky-note" /><i class="fa fa-sticky-note"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sticky-note-o" /><i class="fa fa-sticky-note-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-street-view" /><i class="fa fa-street-view"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-suitcase" /><i class="fa fa-suitcase"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sun-o" /><i class="fa fa-sun-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-support" /><i class="fa fa-support"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tablet" /><i class="fa fa-tablet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tachometer" /><i class="fa fa-tachometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tag" /><i class="fa fa-tag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tags" /><i class="fa fa-tags"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tasks" /><i class="fa fa-tasks"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-taxi" /><i class="fa fa-taxi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-television" /><i class="fa fa-television"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-terminal" /><i class="fa fa-terminal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer" /><i class="fa fa-thermometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-0" /><i class="fa fa-thermometer-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-1" /><i class="fa fa-thermometer-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-2" /><i class="fa fa-thermometer-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-3" /><i class="fa fa-thermometer-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-4" /><i class="fa fa-thermometer-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-empty" /><i class="fa fa-thermometer-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-full" /><i class="fa fa-thermometer-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-half" /><i class="fa fa-thermometer-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-quarter" /><i class="fa fa-thermometer-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-three-quarters" /><i class="fa fa-thermometer-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumb-tack" /><i class="fa fa-thumb-tack"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-down" /><i class="fa fa-thumbs-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-down" /><i class="fa fa-thumbs-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-up" /><i class="fa fa-thumbs-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-up" /><i class="fa fa-thumbs-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ticket" /><i class="fa fa-ticket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times" /><i class="fa fa-times"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-circle" /><i class="fa fa-times-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-circle-o" /><i class="fa fa-times-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle" /><i class="fa fa-times-rectangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle-o" /><i class="fa fa-times-rectangle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tint" /><i class="fa fa-tint"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-down" /><i class="fa fa-toggle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-left" /><i class="fa fa-toggle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-off" /><i class="fa fa-toggle-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-on" /><i class="fa fa-toggle-on"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-right" /><i class="fa fa-toggle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-up" /><i class="fa fa-toggle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trademark" /><i class="fa fa-trademark"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trash" /><i class="fa fa-trash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trash-o" /><i class="fa fa-trash-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tree" /><i class="fa fa-tree"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trophy" /><i class="fa fa-trophy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-truck" /><i class="fa fa-truck"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tty" /><i class="fa fa-tty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tv" /><i class="fa fa-tv"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-umbrella" /><i class="fa fa-umbrella"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-universal-access" /><i class="fa fa-universal-access"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-university" /><i class="fa fa-university"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlock" /><i class="fa fa-unlock"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlock-alt" /><i class="fa fa-unlock-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unsorted" /><i class="fa fa-unsorted"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-upload" /><i class="fa fa-upload"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user" /><i class="fa fa-user"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle" /><i class="fa fa-user-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle-o" /><i class="fa fa-user-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-o" /><i class="fa fa-user-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-plus" /><i class="fa fa-user-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-secret" /><i class="fa fa-user-secret"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-times" /><i class="fa fa-user-times"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-users" /><i class="fa fa-users"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard" /><i class="fa fa-vcard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard-o" /><i class="fa fa-vcard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-video-camera" /><i class="fa fa-video-camera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-control-phone" /><i class="fa fa-volume-control-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-down" /><i class="fa fa-volume-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-off" /><i class="fa fa-volume-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-up" /><i class="fa fa-volume-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-warning" /><i class="fa fa-warning"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wifi" /><i class="fa fa-wifi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close" /><i class="fa fa-window-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close-o" /><i class="fa fa-window-close-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-maximize" /><i class="fa fa-window-maximize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-minimize" /><i class="fa fa-window-minimize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-restore" /><i class="fa fa-window-restore"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wrench" /><i class="fa fa-wrench"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-american-sign-language-interpreting" /><i class="fa fa-american-sign-language-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asl-interpreting" /><i class="fa fa-asl-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-assistive-listening-systems" /><i class="fa fa-assistive-listening-systems"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-audio-description" /><i class="fa fa-audio-description"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-blind" /><i class="fa fa-blind"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-braille" /><i class="fa fa-braille"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc" /><i class="fa fa-cc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deaf" /><i class="fa fa-deaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deafness" /><i class="fa fa-deafness"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hard-of-hearing" /><i class="fa fa-hard-of-hearing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-low-vision" /><i class="fa fa-low-vision"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle-o" /><i class="fa fa-question-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-language" /><i class="fa fa-sign-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signing" /><i class="fa fa-signing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tty" /><i class="fa fa-tty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-universal-access" /><i class="fa fa-universal-access"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-control-phone" /><i class="fa fa-volume-control-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-grab-o" /><i class="fa fa-hand-grab-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-lizard-o" /><i class="fa fa-hand-lizard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-down" /><i class="fa fa-hand-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-left" /><i class="fa fa-hand-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-right" /><i class="fa fa-hand-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-up" /><i class="fa fa-hand-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-paper-o" /><i class="fa fa-hand-paper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-peace-o" /><i class="fa fa-hand-peace-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-pointer-o" /><i class="fa fa-hand-pointer-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-rock-o" /><i class="fa fa-hand-rock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-scissors-o" /><i class="fa fa-hand-scissors-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-spock-o" /><i class="fa fa-hand-spock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-stop-o" /><i class="fa fa-hand-stop-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-down" /><i class="fa fa-thumbs-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-down" /><i class="fa fa-thumbs-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-up" /><i class="fa fa-thumbs-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-up" /><i class="fa fa-thumbs-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ambulance" /><i class="fa fa-ambulance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-automobile" /><i class="fa fa-automobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bicycle" /><i class="fa fa-bicycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bus" /><i class="fa fa-bus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cab" /><i class="fa fa-cab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-car" /><i class="fa fa-car"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fighter-jet" /><i class="fa fa-fighter-jet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-motorcycle" /><i class="fa fa-motorcycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plane" /><i class="fa fa-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rocket" /><i class="fa fa-rocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ship" /><i class="fa fa-ship"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-space-shuttle" /><i class="fa fa-space-shuttle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-subway" /><i class="fa fa-subway"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-taxi" /><i class="fa fa-taxi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-train" /><i class="fa fa-train"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-truck" /><i class="fa fa-truck"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-genderless" /><i class="fa fa-genderless"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-intersex" /><i class="fa fa-intersex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars" /><i class="fa fa-mars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-double" /><i class="fa fa-mars-double"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke" /><i class="fa fa-mars-stroke"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke-h" /><i class="fa fa-mars-stroke-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke-v" /><i class="fa fa-mars-stroke-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mercury" /><i class="fa fa-mercury"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-neuter" /><i class="fa fa-neuter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-transgender" /><i class="fa fa-transgender"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-transgender-alt" /><i class="fa fa-transgender-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus" /><i class="fa fa-venus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus-double" /><i class="fa fa-venus-double"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus-mars" /><i class="fa fa-venus-mars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file" /><i class="fa fa-file"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-archive-o" /><i class="fa fa-file-archive-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-audio-o" /><i class="fa fa-file-audio-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-code-o" /><i class="fa fa-file-code-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-excel-o" /><i class="fa fa-file-excel-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-image-o" /><i class="fa fa-file-image-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-movie-o" /><i class="fa fa-file-movie-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-o" /><i class="fa fa-file-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-pdf-o" /><i class="fa fa-file-pdf-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-photo-o" /><i class="fa fa-file-photo-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-picture-o" /><i class="fa fa-file-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-powerpoint-o" /><i class="fa fa-file-powerpoint-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-sound-o" /><i class="fa fa-file-sound-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text" /><i class="fa fa-file-text"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text-o" /><i class="fa fa-file-text-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-video-o" /><i class="fa fa-file-video-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-word-o" /><i class="fa fa-file-word-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-zip-o" /><i class="fa fa-file-zip-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o-notch" /><i class="fa fa-circle-o-notch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cog" /><i class="fa fa-cog"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gear" /><i class="fa fa-gear"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-refresh" /><i class="fa fa-refresh"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spinner" /><i class="fa fa-spinner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square" /><i class="fa fa-check-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square-o" /><i class="fa fa-check-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle" /><i class="fa fa-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o" /><i class="fa fa-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dot-circle-o" /><i class="fa fa-dot-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square" /><i class="fa fa-minus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square-o" /><i class="fa fa-minus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square-o" /><i class="fa fa-plus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square" /><i class="fa fa-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square-o" /><i class="fa fa-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-amex" /><i class="fa fa-cc-amex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-diners-club" /><i class="fa fa-cc-diners-club"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-discover" /><i class="fa fa-cc-discover"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-jcb" /><i class="fa fa-cc-jcb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-mastercard" /><i class="fa fa-cc-mastercard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-paypal" /><i class="fa fa-cc-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-stripe" /><i class="fa fa-cc-stripe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-visa" /><i class="fa fa-cc-visa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card" /><i class="fa fa-credit-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card-alt" /><i class="fa fa-credit-card-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-wallet" /><i class="fa fa-google-wallet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paypal" /><i class="fa fa-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-area-chart" /><i class="fa fa-area-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart" /><i class="fa fa-bar-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart-o" /><i class="fa fa-bar-chart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-line-chart" /><i class="fa fa-line-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pie-chart" /><i class="fa fa-pie-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitcoin" /><i class="fa fa-bitcoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-btc" /><i class="fa fa-btc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cny" /><i class="fa fa-cny"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dollar" /><i class="fa fa-dollar"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eur" /><i class="fa fa-eur"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-euro" /><i class="fa fa-euro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gbp" /><i class="fa fa-gbp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg" /><i class="fa fa-gg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg-circle" /><i class="fa fa-gg-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ils" /><i class="fa fa-ils"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-inr" /><i class="fa fa-inr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-jpy" /><i class="fa fa-jpy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-krw" /><i class="fa fa-krw"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-money" /><i class="fa fa-money"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rmb" /><i class="fa fa-rmb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rouble" /><i class="fa fa-rouble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rub" /><i class="fa fa-rub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ruble" /><i class="fa fa-ruble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rupee" /><i class="fa fa-rupee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shekel" /><i class="fa fa-shekel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sheqel" /><i class="fa fa-sheqel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-try" /><i class="fa fa-try"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-turkish-lira" /><i class="fa fa-turkish-lira"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-usd" /><i class="fa fa-usd"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viacoin" /><i class="fa fa-viacoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-won" /><i class="fa fa-won"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yen" /><i class="fa fa-yen"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-center" /><i class="fa fa-align-center"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-justify" /><i class="fa fa-align-justify"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-left" /><i class="fa fa-align-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-right" /><i class="fa fa-align-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bold" /><i class="fa fa-bold"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chain" /><i class="fa fa-chain"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chain-broken" /><i class="fa fa-chain-broken"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clipboard" /><i class="fa fa-clipboard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-columns" /><i class="fa fa-columns"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-copy" /><i class="fa fa-copy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cut" /><i class="fa fa-cut"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dedent" /><i class="fa fa-dedent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eraser" /><i class="fa fa-eraser"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file" /><i class="fa fa-file"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-o" /><i class="fa fa-file-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text" /><i class="fa fa-file-text"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text-o" /><i class="fa fa-file-text-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-files-o" /><i class="fa fa-files-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-floppy-o" /><i class="fa fa-floppy-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-font" /><i class="fa fa-font"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-header" /><i class="fa fa-header"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-indent" /><i class="fa fa-indent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-italic" /><i class="fa fa-italic"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-link" /><i class="fa fa-link"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list" /><i class="fa fa-list"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-alt" /><i class="fa fa-list-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-ol" /><i class="fa fa-list-ol"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-ul" /><i class="fa fa-list-ul"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-outdent" /><i class="fa fa-outdent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paperclip" /><i class="fa fa-paperclip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paragraph" /><i class="fa fa-paragraph"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paste" /><i class="fa fa-paste"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-repeat" /><i class="fa fa-repeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rotate-left" /><i class="fa fa-rotate-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rotate-right" /><i class="fa fa-rotate-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-save" /><i class="fa fa-save"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-scissors" /><i class="fa fa-scissors"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-strikethrough" /><i class="fa fa-strikethrough"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-subscript" /><i class="fa fa-subscript"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superscript" /><i class="fa fa-superscript"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-table" /><i class="fa fa-table"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-text-height" /><i class="fa fa-text-height"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-text-width" /><i class="fa fa-text-width"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th" /><i class="fa fa-th"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th-large" /><i class="fa fa-th-large"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th-list" /><i class="fa fa-th-list"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-underline" /><i class="fa fa-underline"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-undo" /><i class="fa fa-undo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlink" /><i class="fa fa-unlink"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-down" /><i class="fa fa-angle-double-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-left" /><i class="fa fa-angle-double-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-right" /><i class="fa fa-angle-double-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-up" /><i class="fa fa-angle-double-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-down" /><i class="fa fa-angle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-left" /><i class="fa fa-angle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-right" /><i class="fa fa-angle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-up" /><i class="fa fa-angle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-down" /><i class="fa fa-arrow-circle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-left" /><i class="fa fa-arrow-circle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-down" /><i class="fa fa-arrow-circle-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-left" /><i class="fa fa-arrow-circle-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-right" /><i class="fa fa-arrow-circle-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-up" /><i class="fa fa-arrow-circle-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-right" /><i class="fa fa-arrow-circle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-up" /><i class="fa fa-arrow-circle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-down" /><i class="fa fa-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-left" /><i class="fa fa-arrow-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-right" /><i class="fa fa-arrow-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-up" /><i class="fa fa-arrow-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows" /><i class="fa fa-arrows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-alt" /><i class="fa fa-arrows-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-h" /><i class="fa fa-arrows-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-v" /><i class="fa fa-arrows-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-down" /><i class="fa fa-caret-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-left" /><i class="fa fa-caret-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-right" /><i class="fa fa-caret-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-down" /><i class="fa fa-caret-square-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-left" /><i class="fa fa-caret-square-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-right" /><i class="fa fa-caret-square-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-up" /><i class="fa fa-caret-square-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-up" /><i class="fa fa-caret-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-down" /><i class="fa fa-chevron-circle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-left" /><i class="fa fa-chevron-circle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-right" /><i class="fa fa-chevron-circle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-up" /><i class="fa fa-chevron-circle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-down" /><i class="fa fa-chevron-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-left" /><i class="fa fa-chevron-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-right" /><i class="fa fa-chevron-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-up" /><i class="fa fa-chevron-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exchange" /><i class="fa fa-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-down" /><i class="fa fa-hand-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-left" /><i class="fa fa-hand-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-right" /><i class="fa fa-hand-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-up" /><i class="fa fa-hand-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-down" /><i class="fa fa-long-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-left" /><i class="fa fa-long-arrow-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-right" /><i class="fa fa-long-arrow-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-up" /><i class="fa fa-long-arrow-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-down" /><i class="fa fa-toggle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-left" /><i class="fa fa-toggle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-right" /><i class="fa fa-toggle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-up" /><i class="fa fa-toggle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-alt" /><i class="fa fa-arrows-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-backward" /><i class="fa fa-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-compress" /><i class="fa fa-compress"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eject" /><i class="fa fa-eject"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-expand" /><i class="fa fa-expand"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fast-backward" /><i class="fa fa-fast-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fast-forward" /><i class="fa fa-fast-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-forward" /><i class="fa fa-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause" /><i class="fa fa-pause"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause-circle" /><i class="fa fa-pause-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause-circle-o" /><i class="fa fa-pause-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play" /><i class="fa fa-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play-circle" /><i class="fa fa-play-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play-circle-o" /><i class="fa fa-play-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-random" /><i class="fa fa-random"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-step-backward" /><i class="fa fa-step-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-step-forward" /><i class="fa fa-step-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop" /><i class="fa fa-stop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop-circle" /><i class="fa fa-stop-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop-circle-o" /><i class="fa fa-stop-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-play" /><i class="fa fa-youtube-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-500px" /><i class="fa fa-500px"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-adn" /><i class="fa fa-adn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-amazon" /><i class="fa fa-amazon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-android" /><i class="fa fa-android"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angellist" /><i class="fa fa-angellist"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-apple" /><i class="fa fa-apple"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bandcamp" /><i class="fa fa-bandcamp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-behance" /><i class="fa fa-behance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-behance-square" /><i class="fa fa-behance-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitbucket" /><i class="fa fa-bitbucket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitbucket-square" /><i class="fa fa-bitbucket-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitcoin" /><i class="fa fa-bitcoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-black-tie" /><i class="fa fa-black-tie"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth" /><i class="fa fa-bluetooth"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth-b" /><i class="fa fa-bluetooth-b"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-btc" /><i class="fa fa-btc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-buysellads" /><i class="fa fa-buysellads"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-amex" /><i class="fa fa-cc-amex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-diners-club" /><i class="fa fa-cc-diners-club"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-discover" /><i class="fa fa-cc-discover"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-jcb" /><i class="fa fa-cc-jcb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-mastercard" /><i class="fa fa-cc-mastercard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-paypal" /><i class="fa fa-cc-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-stripe" /><i class="fa fa-cc-stripe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-visa" /><i class="fa fa-cc-visa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chrome" /><i class="fa fa-chrome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-codepen" /><i class="fa fa-codepen"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-codiepie" /><i class="fa fa-codiepie"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-connectdevelop" /><i class="fa fa-connectdevelop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-contao" /><i class="fa fa-contao"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-css3" /><i class="fa fa-css3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dashcube" /><i class="fa fa-dashcube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-delicious" /><i class="fa fa-delicious"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deviantart" /><i class="fa fa-deviantart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-digg" /><i class="fa fa-digg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dribbble" /><i class="fa fa-dribbble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dropbox" /><i class="fa fa-dropbox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drupal" /><i class="fa fa-drupal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-edge" /><i class="fa fa-edge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eercast" /><i class="fa fa-eercast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-empire" /><i class="fa fa-empire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envira" /><i class="fa fa-envira"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-etsy" /><i class="fa fa-etsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-expeditedssl" /><i class="fa fa-expeditedssl"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fa" /><i class="fa fa-fa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook" /><i class="fa fa-facebook"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-f" /><i class="fa fa-facebook-f"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-official" /><i class="fa fa-facebook-official"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-square" /><i class="fa fa-facebook-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-firefox" /><i class="fa fa-firefox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-first-order" /><i class="fa fa-first-order"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flickr" /><i class="fa fa-flickr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-font-awesome" /><i class="fa fa-font-awesome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fonticons" /><i class="fa fa-fonticons"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fort-awesome" /><i class="fa fa-fort-awesome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-forumbee" /><i class="fa fa-forumbee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-foursquare" /><i class="fa fa-foursquare"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-free-code-camp" /><i class="fa fa-free-code-camp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ge" /><i class="fa fa-ge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-get-pocket" /><i class="fa fa-get-pocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg" /><i class="fa fa-gg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg-circle" /><i class="fa fa-gg-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-git" /><i class="fa fa-git"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-git-square" /><i class="fa fa-git-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github" /><i class="fa fa-github"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github-alt" /><i class="fa fa-github-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github-square" /><i class="fa fa-github-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gitlab" /><i class="fa fa-gitlab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gittip" /><i class="fa fa-gittip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glide" /><i class="fa fa-glide"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glide-g" /><i class="fa fa-glide-g"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google" /><i class="fa fa-google"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus" /><i class="fa fa-google-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-circle" /><i class="fa fa-google-plus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-official" /><i class="fa fa-google-plus-official"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-square" /><i class="fa fa-google-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-wallet" /><i class="fa fa-google-wallet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gratipay" /><i class="fa fa-gratipay"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-grav" /><i class="fa fa-grav"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hacker-news" /><i class="fa fa-hacker-news"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-houzz" /><i class="fa fa-houzz"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-html5" /><i class="fa fa-html5"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-imdb" /><i class="fa fa-imdb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-instagram" /><i class="fa fa-instagram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-internet-explorer" /><i class="fa fa-internet-explorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ioxhost" /><i class="fa fa-ioxhost"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-joomla" /><i class="fa fa-joomla"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-jsfiddle" /><i class="fa fa-jsfiddle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lastfm" /><i class="fa fa-lastfm"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lastfm-square" /><i class="fa fa-lastfm-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-leanpub" /><i class="fa fa-leanpub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linkedin" /><i class="fa fa-linkedin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linkedin-square" /><i class="fa fa-linkedin-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linode" /><i class="fa fa-linode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linux" /><i class="fa fa-linux"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-maxcdn" /><i class="fa fa-maxcdn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meanpath" /><i class="fa fa-meanpath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-medium" /><i class="fa fa-medium"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meetup" /><i class="fa fa-meetup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mixcloud" /><i class="fa fa-mixcloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-modx" /><i class="fa fa-modx"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-odnoklassniki" /><i class="fa fa-odnoklassniki"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-odnoklassniki-square" /><i class="fa fa-odnoklassniki-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-opencart" /><i class="fa fa-opencart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-openid" /><i class="fa fa-openid"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-opera" /><i class="fa fa-opera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-optin-monster" /><i class="fa fa-optin-monster"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pagelines" /><i class="fa fa-pagelines"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paypal" /><i class="fa fa-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper" /><i class="fa fa-pied-piper"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper-alt" /><i class="fa fa-pied-piper-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper-pp" /><i class="fa fa-pied-piper-pp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest" /><i class="fa fa-pinterest"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest-p" /><i class="fa fa-pinterest-p"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest-square" /><i class="fa fa-pinterest-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-product-hunt" /><i class="fa fa-product-hunt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-qq" /><i class="fa fa-qq"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quora" /><i class="fa fa-quora"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ra" /><i class="fa fa-ra"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ravelry" /><i class="fa fa-ravelry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rebel" /><i class="fa fa-rebel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit" /><i class="fa fa-reddit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit-alien" /><i class="fa fa-reddit-alien"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit-square" /><i class="fa fa-reddit-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-renren" /><i class="fa fa-renren"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-resistance" /><i class="fa fa-resistance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-safari" /><i class="fa fa-safari"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-scribd" /><i class="fa fa-scribd"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sellsy" /><i class="fa fa-sellsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt" /><i class="fa fa-share-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt-square" /><i class="fa fa-share-alt-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shirtsinbulk" /><i class="fa fa-shirtsinbulk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-simplybuilt" /><i class="fa fa-simplybuilt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-skyatlas" /><i class="fa fa-skyatlas"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-skype" /><i class="fa fa-skype"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-slack" /><i class="fa fa-slack"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-slideshare" /><i class="fa fa-slideshare"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat" /><i class="fa fa-snapchat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat-ghost" /><i class="fa fa-snapchat-ghost"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat-square" /><i class="fa fa-snapchat-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-soundcloud" /><i class="fa fa-soundcloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spotify" /><i class="fa fa-spotify"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stack-exchange" /><i class="fa fa-stack-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stack-overflow" /><i class="fa fa-stack-overflow"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-steam" /><i class="fa fa-steam"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-steam-square" /><i class="fa fa-steam-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stumbleupon" /><i class="fa fa-stumbleupon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stumbleupon-circle" /><i class="fa fa-stumbleupon-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superpowers" /><i class="fa fa-superpowers"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-telegram" /><i class="fa fa-telegram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tencent-weibo" /><i class="fa fa-tencent-weibo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-themeisle" /><i class="fa fa-themeisle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trello" /><i class="fa fa-trello"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tripadvisor" /><i class="fa fa-tripadvisor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tumblr" /><i class="fa fa-tumblr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tumblr-square" /><i class="fa fa-tumblr-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitch" /><i class="fa fa-twitch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitter" /><i class="fa fa-twitter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitter-square" /><i class="fa fa-twitter-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-usb" /><i class="fa fa-usb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viacoin" /><i class="fa fa-viacoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viadeo" /><i class="fa fa-viadeo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viadeo-square" /><i class="fa fa-viadeo-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vimeo" /><i class="fa fa-vimeo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vimeo-square" /><i class="fa fa-vimeo-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vine" /><i class="fa fa-vine"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vk" /><i class="fa fa-vk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wechat" /><i class="fa fa-wechat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-weibo" /><i class="fa fa-weibo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-weixin" /><i class="fa fa-weixin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-whatsapp" /><i class="fa fa-whatsapp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wikipedia-w" /><i class="fa fa-wikipedia-w"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-windows" /><i class="fa fa-windows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wordpress" /><i class="fa fa-wordpress"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpbeginner" /><i class="fa fa-wpbeginner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpexplorer" /><i class="fa fa-wpexplorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpforms" /><i class="fa fa-wpforms"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-xing" /><i class="fa fa-xing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-xing-square" /><i class="fa fa-xing-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-y-combinator" /><i class="fa fa-y-combinator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-y-combinator-square" /><i class="fa fa-y-combinator-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yahoo" /><i class="fa fa-yahoo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yc" /><i class="fa fa-yc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yc-square" /><i class="fa fa-yc-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yelp" /><i class="fa fa-yelp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yoast" /><i class="fa fa-yoast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube" /><i class="fa fa-youtube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-play" /><i class="fa fa-youtube-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-square" /><i class="fa fa-youtube-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ambulance" /><i class="fa fa-ambulance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-h-square" /><i class="fa fa-h-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart" /><i class="fa fa-heart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart-o" /><i class="fa fa-heart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heartbeat" /><i class="fa fa-heartbeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hospital-o" /><i class="fa fa-hospital-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-medkit" /><i class="fa fa-medkit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stethoscope" /><i class="fa fa-stethoscope"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-md" /><i class="fa fa-user-md"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-kitchen-set" /><i class="fa-solid fa-kitchen-set"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-fire-burner" /><i class="fa-solid fa-fire-burner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-plate-utensils" /><i class="fa-solid fa-plate-utensils"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-coffee-pot" /><i class="fa-solid fa-coffee-pot"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-microwave" /><i class="fa-solid fa-microwave"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-regular fa-chair" /><i class="fa-regular fa-chair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-bed-front" /><i class="fa-solid fa-bed-front"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-clothes-hanger" /><i class="fa-solid fa-clothes-hanger"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-tv-retro" /><i class="fa-solid fa-tv-retro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-router" /><i class="fa-solid fa-router"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-air-conditioner" /><i class="fa-solid fa-air-conditioner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-spray-can-sparkles" /><i class="fa-solid fa-spray-can-sparkles"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-chalkboard-user" /><i class="fa-solid fa-chalkboard-user"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-pot-food" /><i class="fa-solid fa-pot-food"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-blanket" /><i class="fa-solid fa-blanket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-stapler" /><i class="fa-solid fa-stapler"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-heat" /><i class="fa-solid fa-heat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-person-to-door" /><i class="fa-solid fa-person-to-door"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-dumbbell" /><i class="fa-solid fa-dumbbell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-dumbbell" /><i class="fa-solid fa-dumbbell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-elevator" /><i class="fa-solid fa-elevator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-fire-extinguisher" /><i class="fa-solid fa-fire-extinguisher"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-regular fa-house-building" /><i class="fa-regular fa-house-building"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-person-swimming" /><i class="fa-solid fa-person-swimming"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-water-ladder" /><i class="fa-solid fa-water-ladder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-square-parking" /><i class="fa-solid fa-square-parking"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-washing-machine" /><i class="fa-solid fa-washing-machine"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-sensor-fire" /><i class="fa-solid fa-sensor-fire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-family" /><i class="fa-solid fa-family"></i></label></li>
                            </ul>
                        </div>
                    </div>
                    <div class="step">
                        <label>Selected Icon</label>
                        <div class="selectedIcon"><label></label><input type="text" name="selectedIcon" required></div>
                    </div>
                    <div class="step">
                        <label for="status3" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="status3" value="1" />
                            <label class="onoffswitch-label" for="status3">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- update apartment Features -->
<div class="modal fade modalshg dashboardApartmentFeaturesUpdate" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="updateAmenity" method="post" action="{{ route('dashboardApartmentFeaturesUpdate') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" />
            <input type="hidden" name="old" />
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Update Apartment Feature</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label>Icon</label>
                        <div class="icon_lists">
                            <ul>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book" /><i class="fa fa-address-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book-o" /><i class="fa fa-address-book-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card" /><i class="fa fa-address-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card-o" /><i class="fa fa-address-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bandcamp" /><i class="fa fa-bandcamp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bath" /><i class="fa fa-bath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bathtub" /><i class="fa fa-bathtub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license" /><i class="fa fa-drivers-license"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license-o" /><i class="fa fa-drivers-license-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eercast" /><i class="fa fa-eercast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open" /><i class="fa fa-envelope-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open-o" /><i class="fa fa-envelope-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-etsy" /><i class="fa fa-etsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-free-code-camp" /><i class="fa fa-free-code-camp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-grav" /><i class="fa fa-grav"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-handshake-o" /><i class="fa fa-handshake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-badge" /><i class="fa fa-id-badge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card" /><i class="fa fa-id-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card-o" /><i class="fa fa-id-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-imdb" /><i class="fa fa-imdb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linode" /><i class="fa fa-linode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meetup" /><i class="fa fa-meetup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microchip" /><i class="fa fa-microchip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-podcast" /><i class="fa fa-podcast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quora" /><i class="fa fa-quora"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ravelry" /><i class="fa fa-ravelry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-s15" /><i class="fa fa-s15"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shower" /><i class="fa fa-shower"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snowflake-o" /><i class="fa fa-snowflake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superpowers" /><i class="fa fa-superpowers"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-telegram" /><i class="fa fa-telegram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer" /><i class="fa fa-thermometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-0" /><i class="fa fa-thermometer-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-1" /><i class="fa fa-thermometer-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-2" /><i class="fa fa-thermometer-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-3" /><i class="fa fa-thermometer-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-4" /><i class="fa fa-thermometer-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-empty" /><i class="fa fa-thermometer-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-full" /><i class="fa fa-thermometer-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-half" /><i class="fa fa-thermometer-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-quarter" /><i class="fa fa-thermometer-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-three-quarters" /><i class="fa fa-thermometer-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle" /><i class="fa fa-times-rectangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle-o" /><i class="fa fa-times-rectangle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle" /><i class="fa fa-user-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle-o" /><i class="fa fa-user-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-o" /><i class="fa fa-user-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard" /><i class="fa fa-vcard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard-o" /><i class="fa fa-vcard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close" /><i class="fa fa-window-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close-o" /><i class="fa fa-window-close-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-maximize" /><i class="fa fa-window-maximize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-minimize" /><i class="fa fa-window-minimize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-restore" /><i class="fa fa-window-restore"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpexplorer" /><i class="fa fa-wpexplorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book" /><i class="fa fa-address-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book-o" /><i class="fa fa-address-book-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card" /><i class="fa fa-address-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card-o" /><i class="fa fa-address-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-adjust" /><i class="fa fa-adjust"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-american-sign-language-interpreting" /><i class="fa fa-american-sign-language-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-anchor" /><i class="fa fa-anchor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-archive" /><i class="fa fa-archive"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-area-chart" /><i class="fa fa-area-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows" /><i class="fa fa-arrows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-h" /><i class="fa fa-arrows-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-v" /><i class="fa fa-arrows-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asl-interpreting" /><i class="fa fa-asl-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-assistive-listening-systems" /><i class="fa fa-assistive-listening-systems"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asterisk" /><i class="fa fa-asterisk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-at" /><i class="fa fa-at"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-audio-description" /><i class="fa fa-audio-description"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-automobile" /><i class="fa fa-automobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-balance-scale" /><i class="fa fa-balance-scale"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ban" /><i class="fa fa-ban"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bank" /><i class="fa fa-bank"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart" /><i class="fa fa-bar-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart-o" /><i class="fa fa-bar-chart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-barcode" /><i class="fa fa-barcode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bars" /><i class="fa fa-bars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bath" /><i class="fa fa-bath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bathtub" /><i class="fa fa-bathtub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery" /><i class="fa fa-battery"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-0" /><i class="fa fa-battery-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-1" /><i class="fa fa-battery-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-2" /><i class="fa fa-battery-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-3" /><i class="fa fa-battery-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-4" /><i class="fa fa-battery-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-empty" /><i class="fa fa-battery-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-full" /><i class="fa fa-battery-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-half" /><i class="fa fa-battery-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-quarter" /><i class="fa fa-battery-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-three-quarters" /><i class="fa fa-battery-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bed" /><i class="fa fa-bed"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-beer" /><i class="fa fa-beer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell" /><i class="fa fa-bell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-o" /><i class="fa fa-bell-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-slash" /><i class="fa fa-bell-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-slash-o" /><i class="fa fa-bell-slash-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bicycle" /><i class="fa fa-bicycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-binoculars" /><i class="fa fa-binoculars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-birthday-cake" /><i class="fa fa-birthday-cake"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-blind" /><i class="fa fa-blind"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth" /><i class="fa fa-bluetooth"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth-b" /><i class="fa fa-bluetooth-b"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bolt" /><i class="fa fa-bolt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bomb" /><i class="fa fa-bomb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-book" /><i class="fa fa-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bookmark" /><i class="fa fa-bookmark"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bookmark-o" /><i class="fa fa-bookmark-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-braille" /><i class="fa fa-braille"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-briefcase" /><i class="fa fa-briefcase"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bug" /><i class="fa fa-bug"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-building" /><i class="fa fa-building"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-building-o" /><i class="fa fa-building-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bullhorn" /><i class="fa fa-bullhorn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bullseye" /><i class="fa fa-bullseye"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bus" /><i class="fa fa-bus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cab" /><i class="fa fa-cab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calculator" /><i class="fa fa-calculator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar" /><i class="fa fa-calendar"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-check-o" /><i class="fa fa-calendar-check-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-minus-o" /><i class="fa fa-calendar-minus-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-o" /><i class="fa fa-calendar-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-plus-o" /><i class="fa fa-calendar-plus-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-times-o" /><i class="fa fa-calendar-times-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-camera" /><i class="fa fa-camera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-camera-retro" /><i class="fa fa-camera-retro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-car" /><i class="fa fa-car"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-down" /><i class="fa fa-caret-square-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-left" /><i class="fa fa-caret-square-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-right" /><i class="fa fa-caret-square-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-up" /><i class="fa fa-caret-square-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cart-arrow-down" /><i class="fa fa-cart-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cart-plus" /><i class="fa fa-cart-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc" /><i class="fa fa-cc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-certificate" /><i class="fa fa-certificate"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check" /><i class="fa fa-check"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-circle" /><i class="fa fa-check-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-circle-o" /><i class="fa fa-check-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square" /><i class="fa fa-check-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square-o" /><i class="fa fa-check-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-child" /><i class="fa fa-child"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle" /><i class="fa fa-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o" /><i class="fa fa-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o-notch" /><i class="fa fa-circle-o-notch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-thin" /><i class="fa fa-circle-thin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clock-o" /><i class="fa fa-clock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clone" /><i class="fa fa-clone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-close" /><i class="fa fa-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud" /><i class="fa fa-cloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud-download" /><i class="fa fa-cloud-download"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud-upload" /><i class="fa fa-cloud-upload"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-code" /><i class="fa fa-code"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-code-fork" /><i class="fa fa-code-fork"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-coffee" /><i class="fa fa-coffee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cog" /><i class="fa fa-cog"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cogs" /><i class="fa fa-cogs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comment" /><i class="fa fa-comment"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comment-o" /><i class="fa fa-comment-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-commenting" /><i class="fa fa-commenting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-commenting-o" /><i class="fa fa-commenting-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comments" /><i class="fa fa-comments"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comments-o" /><i class="fa fa-comments-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-compass" /><i class="fa fa-compass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-copyright" /><i class="fa fa-copyright"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-creative-commons" /><i class="fa fa-creative-commons"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card" /><i class="fa fa-credit-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card-alt" /><i class="fa fa-credit-card-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-crop" /><i class="fa fa-crop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-crosshairs" /><i class="fa fa-crosshairs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cube" /><i class="fa fa-cube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cubes" /><i class="fa fa-cubes"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cutlery" /><i class="fa fa-cutlery"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dashboard" /><i class="fa fa-dashboard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-database" /><i class="fa fa-database"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deaf" /><i class="fa fa-deaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deafness" /><i class="fa fa-deafness"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-desktop" /><i class="fa fa-desktop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-diamond" /><i class="fa fa-diamond"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dot-circle-o" /><i class="fa fa-dot-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-download" /><i class="fa fa-download"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license" /><i class="fa fa-drivers-license"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license-o" /><i class="fa fa-drivers-license-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-edit" /><i class="fa fa-edit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ellipsis-h" /><i class="fa fa-ellipsis-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ellipsis-v" /><i class="fa fa-ellipsis-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope" /><i class="fa fa-envelope"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-o" /><i class="fa fa-envelope-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open" /><i class="fa fa-envelope-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open-o" /><i class="fa fa-envelope-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-square" /><i class="fa fa-envelope-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eraser" /><i class="fa fa-eraser"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exchange" /><i class="fa fa-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation" /><i class="fa fa-exclamation"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation-circle" /><i class="fa fa-exclamation-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation-triangle" /><i class="fa fa-exclamation-triangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-external-link" /><i class="fa fa-external-link"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-external-link-square" /><i class="fa fa-external-link-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eye" /><i class="fa fa-eye"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eye-slash" /><i class="fa fa-eye-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eyedropper" /><i class="fa fa-eyedropper"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fax" /><i class="fa fa-fax"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-feed" /><i class="fa fa-feed"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-female" /><i class="fa fa-female"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fighter-jet" /><i class="fa fa-fighter-jet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-archive-o" /><i class="fa fa-file-archive-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-audio-o" /><i class="fa fa-file-audio-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-code-o" /><i class="fa fa-file-code-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-excel-o" /><i class="fa fa-file-excel-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-image-o" /><i class="fa fa-file-image-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-movie-o" /><i class="fa fa-file-movie-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-pdf-o" /><i class="fa fa-file-pdf-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-photo-o" /><i class="fa fa-file-photo-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-picture-o" /><i class="fa fa-file-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-powerpoint-o" /><i class="fa fa-file-powerpoint-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-sound-o" /><i class="fa fa-file-sound-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-video-o" /><i class="fa fa-file-video-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-word-o" /><i class="fa fa-file-word-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-zip-o" /><i class="fa fa-file-zip-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-film" /><i class="fa fa-film"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-filter" /><i class="fa fa-filter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fire" /><i class="fa fa-fire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fire-extinguisher" /><i class="fa fa-fire-extinguisher"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag" /><i class="fa fa-flag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag-checkered" /><i class="fa fa-flag-checkered"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag-o" /><i class="fa fa-flag-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flash" /><i class="fa fa-flash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flask" /><i class="fa fa-flask"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder" /><i class="fa fa-folder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-o" /><i class="fa fa-folder-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-open" /><i class="fa fa-folder-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-open-o" /><i class="fa fa-folder-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-frown-o" /><i class="fa fa-frown-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-futbol-o" /><i class="fa fa-futbol-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gamepad" /><i class="fa fa-gamepad"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gavel" /><i class="fa fa-gavel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gear" /><i class="fa fa-gear"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gears" /><i class="fa fa-gears"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gift" /><i class="fa fa-gift"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glass" /><i class="fa fa-glass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-globe" /><i class="fa fa-globe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-graduation-cap" /><i class="fa fa-graduation-cap"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-group" /><i class="fa fa-group"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-grab-o" /><i class="fa fa-hand-grab-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-lizard-o" /><i class="fa fa-hand-lizard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-paper-o" /><i class="fa fa-hand-paper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-peace-o" /><i class="fa fa-hand-peace-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-pointer-o" /><i class="fa fa-hand-pointer-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-rock-o" /><i class="fa fa-hand-rock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-scissors-o" /><i class="fa fa-hand-scissors-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-spock-o" /><i class="fa fa-hand-spock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-stop-o" /><i class="fa fa-hand-stop-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-handshake-o" /><i class="fa fa-handshake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hard-of-hearing" /><i class="fa fa-hard-of-hearing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hashtag" /><i class="fa fa-hashtag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hdd-o" /><i class="fa fa-hdd-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-headphones" /><i class="fa fa-headphones"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart" /><i class="fa fa-heart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart-o" /><i class="fa fa-heart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heartbeat" /><i class="fa fa-heartbeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-history" /><i class="fa fa-history"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-home" /><i class="fa fa-home"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hotel" /><i class="fa fa-hotel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass" /><i class="fa fa-hourglass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-1" /><i class="fa fa-hourglass-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-2" /><i class="fa fa-hourglass-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-3" /><i class="fa fa-hourglass-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-end" /><i class="fa fa-hourglass-end"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-half" /><i class="fa fa-hourglass-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-o" /><i class="fa fa-hourglass-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-start" /><i class="fa fa-hourglass-start"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-i-cursor" /><i class="fa fa-i-cursor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-badge" /><i class="fa fa-id-badge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card" /><i class="fa fa-id-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card-o" /><i class="fa fa-id-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-image" /><i class="fa fa-image"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-inbox" /><i class="fa fa-inbox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-industry" /><i class="fa fa-industry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-info" /><i class="fa fa-info"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-info-circle" /><i class="fa fa-info-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-institution" /><i class="fa fa-institution"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-key" /><i class="fa fa-key"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-keyboard-o" /><i class="fa fa-keyboard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-language" /><i class="fa fa-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-laptop" /><i class="fa fa-laptop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-leaf" /><i class="fa fa-leaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-legal" /><i class="fa fa-legal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lemon-o" /><i class="fa fa-lemon-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-level-down" /><i class="fa fa-level-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-level-up" /><i class="fa fa-level-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-bouy" /><i class="fa fa-life-bouy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-buoy" /><i class="fa fa-life-buoy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-ring" /><i class="fa fa-life-ring"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-saver" /><i class="fa fa-life-saver"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lightbulb-o" /><i class="fa fa-lightbulb-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-line-chart" /><i class="fa fa-line-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-location-arrow" /><i class="fa fa-location-arrow"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lock" /><i class="fa fa-lock"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-low-vision" /><i class="fa fa-low-vision"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-magic" /><i class="fa fa-magic"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-magnet" /><i class="fa fa-magnet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-forward" /><i class="fa fa-mail-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-reply" /><i class="fa fa-mail-reply"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-reply-all" /><i class="fa fa-mail-reply-all"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-male" /><i class="fa fa-male"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map" /><i class="fa fa-map"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-marker" /><i class="fa fa-map-marker"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-o" /><i class="fa fa-map-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-pin" /><i class="fa fa-map-pin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-signs" /><i class="fa fa-map-signs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meh-o" /><i class="fa fa-meh-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microchip" /><i class="fa fa-microchip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microphone" /><i class="fa fa-microphone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microphone-slash" /><i class="fa fa-microphone-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus" /><i class="fa fa-minus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-circle" /><i class="fa fa-minus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square" /><i class="fa fa-minus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square-o" /><i class="fa fa-minus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mobile" /><i class="fa fa-mobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mobile-phone" /><i class="fa fa-mobile-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-money" /><i class="fa fa-money"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-moon-o" /><i class="fa fa-moon-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mortar-board" /><i class="fa fa-mortar-board"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-motorcycle" /><i class="fa fa-motorcycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mouse-pointer" /><i class="fa fa-mouse-pointer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-music" /><i class="fa fa-music"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-navicon" /><i class="fa fa-navicon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-newspaper-o" /><i class="fa fa-newspaper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-object-group" /><i class="fa fa-object-group"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-object-ungroup" /><i class="fa fa-object-ungroup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paint-brush" /><i class="fa fa-paint-brush"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paper-plane" /><i class="fa fa-paper-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paper-plane-o" /><i class="fa fa-paper-plane-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paw" /><i class="fa fa-paw"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil" /><i class="fa fa-pencil"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil-square" /><i class="fa fa-pencil-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil-square-o" /><i class="fa fa-pencil-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-percent" /><i class="fa fa-percent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-phone" /><i class="fa fa-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-phone-square" /><i class="fa fa-phone-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-photo" /><i class="fa fa-photo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-picture-o" /><i class="fa fa-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pie-chart" /><i class="fa fa-pie-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plane" /><i class="fa fa-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plug" /><i class="fa fa-plug"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus" /><i class="fa fa-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-circle" /><i class="fa fa-plus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square-o" /><i class="fa fa-plus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-podcast" /><i class="fa fa-podcast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-power-off" /><i class="fa fa-power-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-print" /><i class="fa fa-print"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-puzzle-piece" /><i class="fa fa-puzzle-piece"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-qrcode" /><i class="fa fa-qrcode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question" /><i class="fa fa-question"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle" /><i class="fa fa-question-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle-o" /><i class="fa fa-question-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quote-left" /><i class="fa fa-quote-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quote-right" /><i class="fa fa-quote-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-random" /><i class="fa fa-random"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-recycle" /><i class="fa fa-recycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-refresh" /><i class="fa fa-refresh"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-registered" /><i class="fa fa-registered"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-remove" /><i class="fa fa-remove"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reorder" /><i class="fa fa-reorder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reply" /><i class="fa fa-reply"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reply-all" /><i class="fa fa-reply-all"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-retweet" /><i class="fa fa-retweet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-road" /><i class="fa fa-road"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rocket" /><i class="fa fa-rocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rss" /><i class="fa fa-rss"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rss-square" /><i class="fa fa-rss-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-s15" /><i class="fa fa-s15"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search" /><i class="fa fa-search"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search-minus" /><i class="fa fa-search-minus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search-plus" /><i class="fa fa-search-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-send" /><i class="fa fa-send"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-send-o" /><i class="fa fa-send-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-server" /><i class="fa fa-server"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share" /><i class="fa fa-share"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt" /><i class="fa fa-share-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt-square" /><i class="fa fa-share-alt-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-square" /><i class="fa fa-share-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-square-o" /><i class="fa fa-share-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shield" /><i class="fa fa-shield"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ship" /><i class="fa fa-ship"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-bag" /><i class="fa fa-shopping-bag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-basket" /><i class="fa fa-shopping-basket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-cart" /><i class="fa fa-shopping-cart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shower" /><i class="fa fa-shower"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-in" /><i class="fa fa-sign-in"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-language" /><i class="fa fa-sign-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-out" /><i class="fa fa-sign-out"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signal" /><i class="fa fa-signal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signing" /><i class="fa fa-signing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sitemap" /><i class="fa fa-sitemap"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sliders" /><i class="fa fa-sliders"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-smile-o" /><i class="fa fa-smile-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snowflake-o" /><i class="fa fa-snowflake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-soccer-ball-o" /><i class="fa fa-soccer-ball-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort" /><i class="fa fa-sort"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-alpha-asc" /><i class="fa fa-sort-alpha-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-alpha-desc" /><i class="fa fa-sort-alpha-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-amount-asc" /><i class="fa fa-sort-amount-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-amount-desc" /><i class="fa fa-sort-amount-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-asc" /><i class="fa fa-sort-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-desc" /><i class="fa fa-sort-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-down" /><i class="fa fa-sort-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-numeric-asc" /><i class="fa fa-sort-numeric-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-numeric-desc" /><i class="fa fa-sort-numeric-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-up" /><i class="fa fa-sort-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-space-shuttle" /><i class="fa fa-space-shuttle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spinner" /><i class="fa fa-spinner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spoon" /><i class="fa fa-spoon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square" /><i class="fa fa-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square-o" /><i class="fa fa-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star" /><i class="fa fa-star"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half" /><i class="fa fa-star-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-empty" /><i class="fa fa-star-half-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-full" /><i class="fa fa-star-half-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-o" /><i class="fa fa-star-half-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-o" /><i class="fa fa-star-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sticky-note" /><i class="fa fa-sticky-note"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sticky-note-o" /><i class="fa fa-sticky-note-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-street-view" /><i class="fa fa-street-view"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-suitcase" /><i class="fa fa-suitcase"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sun-o" /><i class="fa fa-sun-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-support" /><i class="fa fa-support"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tablet" /><i class="fa fa-tablet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tachometer" /><i class="fa fa-tachometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tag" /><i class="fa fa-tag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tags" /><i class="fa fa-tags"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tasks" /><i class="fa fa-tasks"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-taxi" /><i class="fa fa-taxi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-television" /><i class="fa fa-television"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-terminal" /><i class="fa fa-terminal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer" /><i class="fa fa-thermometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-0" /><i class="fa fa-thermometer-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-1" /><i class="fa fa-thermometer-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-2" /><i class="fa fa-thermometer-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-3" /><i class="fa fa-thermometer-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-4" /><i class="fa fa-thermometer-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-empty" /><i class="fa fa-thermometer-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-full" /><i class="fa fa-thermometer-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-half" /><i class="fa fa-thermometer-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-quarter" /><i class="fa fa-thermometer-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-three-quarters" /><i class="fa fa-thermometer-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumb-tack" /><i class="fa fa-thumb-tack"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-down" /><i class="fa fa-thumbs-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-down" /><i class="fa fa-thumbs-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-up" /><i class="fa fa-thumbs-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-up" /><i class="fa fa-thumbs-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ticket" /><i class="fa fa-ticket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times" /><i class="fa fa-times"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-circle" /><i class="fa fa-times-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-circle-o" /><i class="fa fa-times-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle" /><i class="fa fa-times-rectangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle-o" /><i class="fa fa-times-rectangle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tint" /><i class="fa fa-tint"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-down" /><i class="fa fa-toggle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-left" /><i class="fa fa-toggle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-off" /><i class="fa fa-toggle-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-on" /><i class="fa fa-toggle-on"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-right" /><i class="fa fa-toggle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-up" /><i class="fa fa-toggle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trademark" /><i class="fa fa-trademark"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trash" /><i class="fa fa-trash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trash-o" /><i class="fa fa-trash-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tree" /><i class="fa fa-tree"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trophy" /><i class="fa fa-trophy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-truck" /><i class="fa fa-truck"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tty" /><i class="fa fa-tty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tv" /><i class="fa fa-tv"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-umbrella" /><i class="fa fa-umbrella"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-universal-access" /><i class="fa fa-universal-access"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-university" /><i class="fa fa-university"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlock" /><i class="fa fa-unlock"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlock-alt" /><i class="fa fa-unlock-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unsorted" /><i class="fa fa-unsorted"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-upload" /><i class="fa fa-upload"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user" /><i class="fa fa-user"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle" /><i class="fa fa-user-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle-o" /><i class="fa fa-user-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-o" /><i class="fa fa-user-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-plus" /><i class="fa fa-user-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-secret" /><i class="fa fa-user-secret"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-times" /><i class="fa fa-user-times"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-users" /><i class="fa fa-users"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard" /><i class="fa fa-vcard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard-o" /><i class="fa fa-vcard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-video-camera" /><i class="fa fa-video-camera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-control-phone" /><i class="fa fa-volume-control-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-down" /><i class="fa fa-volume-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-off" /><i class="fa fa-volume-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-up" /><i class="fa fa-volume-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-warning" /><i class="fa fa-warning"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wifi" /><i class="fa fa-wifi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close" /><i class="fa fa-window-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close-o" /><i class="fa fa-window-close-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-maximize" /><i class="fa fa-window-maximize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-minimize" /><i class="fa fa-window-minimize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-restore" /><i class="fa fa-window-restore"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wrench" /><i class="fa fa-wrench"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-american-sign-language-interpreting" /><i class="fa fa-american-sign-language-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asl-interpreting" /><i class="fa fa-asl-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-assistive-listening-systems" /><i class="fa fa-assistive-listening-systems"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-audio-description" /><i class="fa fa-audio-description"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-blind" /><i class="fa fa-blind"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-braille" /><i class="fa fa-braille"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc" /><i class="fa fa-cc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deaf" /><i class="fa fa-deaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deafness" /><i class="fa fa-deafness"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hard-of-hearing" /><i class="fa fa-hard-of-hearing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-low-vision" /><i class="fa fa-low-vision"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle-o" /><i class="fa fa-question-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-language" /><i class="fa fa-sign-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signing" /><i class="fa fa-signing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tty" /><i class="fa fa-tty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-universal-access" /><i class="fa fa-universal-access"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-control-phone" /><i class="fa fa-volume-control-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-grab-o" /><i class="fa fa-hand-grab-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-lizard-o" /><i class="fa fa-hand-lizard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-down" /><i class="fa fa-hand-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-left" /><i class="fa fa-hand-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-right" /><i class="fa fa-hand-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-up" /><i class="fa fa-hand-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-paper-o" /><i class="fa fa-hand-paper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-peace-o" /><i class="fa fa-hand-peace-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-pointer-o" /><i class="fa fa-hand-pointer-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-rock-o" /><i class="fa fa-hand-rock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-scissors-o" /><i class="fa fa-hand-scissors-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-spock-o" /><i class="fa fa-hand-spock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-stop-o" /><i class="fa fa-hand-stop-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-down" /><i class="fa fa-thumbs-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-down" /><i class="fa fa-thumbs-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-up" /><i class="fa fa-thumbs-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-up" /><i class="fa fa-thumbs-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ambulance" /><i class="fa fa-ambulance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-automobile" /><i class="fa fa-automobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bicycle" /><i class="fa fa-bicycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bus" /><i class="fa fa-bus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cab" /><i class="fa fa-cab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-car" /><i class="fa fa-car"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fighter-jet" /><i class="fa fa-fighter-jet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-motorcycle" /><i class="fa fa-motorcycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plane" /><i class="fa fa-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rocket" /><i class="fa fa-rocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ship" /><i class="fa fa-ship"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-space-shuttle" /><i class="fa fa-space-shuttle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-subway" /><i class="fa fa-subway"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-taxi" /><i class="fa fa-taxi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-train" /><i class="fa fa-train"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-truck" /><i class="fa fa-truck"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-genderless" /><i class="fa fa-genderless"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-intersex" /><i class="fa fa-intersex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars" /><i class="fa fa-mars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-double" /><i class="fa fa-mars-double"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke" /><i class="fa fa-mars-stroke"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke-h" /><i class="fa fa-mars-stroke-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke-v" /><i class="fa fa-mars-stroke-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mercury" /><i class="fa fa-mercury"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-neuter" /><i class="fa fa-neuter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-transgender" /><i class="fa fa-transgender"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-transgender-alt" /><i class="fa fa-transgender-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus" /><i class="fa fa-venus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus-double" /><i class="fa fa-venus-double"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus-mars" /><i class="fa fa-venus-mars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file" /><i class="fa fa-file"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-archive-o" /><i class="fa fa-file-archive-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-audio-o" /><i class="fa fa-file-audio-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-code-o" /><i class="fa fa-file-code-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-excel-o" /><i class="fa fa-file-excel-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-image-o" /><i class="fa fa-file-image-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-movie-o" /><i class="fa fa-file-movie-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-o" /><i class="fa fa-file-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-pdf-o" /><i class="fa fa-file-pdf-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-photo-o" /><i class="fa fa-file-photo-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-picture-o" /><i class="fa fa-file-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-powerpoint-o" /><i class="fa fa-file-powerpoint-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-sound-o" /><i class="fa fa-file-sound-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text" /><i class="fa fa-file-text"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text-o" /><i class="fa fa-file-text-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-video-o" /><i class="fa fa-file-video-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-word-o" /><i class="fa fa-file-word-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-zip-o" /><i class="fa fa-file-zip-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o-notch" /><i class="fa fa-circle-o-notch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cog" /><i class="fa fa-cog"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gear" /><i class="fa fa-gear"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-refresh" /><i class="fa fa-refresh"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spinner" /><i class="fa fa-spinner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square" /><i class="fa fa-check-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square-o" /><i class="fa fa-check-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle" /><i class="fa fa-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o" /><i class="fa fa-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dot-circle-o" /><i class="fa fa-dot-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square" /><i class="fa fa-minus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square-o" /><i class="fa fa-minus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square-o" /><i class="fa fa-plus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square" /><i class="fa fa-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square-o" /><i class="fa fa-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-amex" /><i class="fa fa-cc-amex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-diners-club" /><i class="fa fa-cc-diners-club"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-discover" /><i class="fa fa-cc-discover"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-jcb" /><i class="fa fa-cc-jcb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-mastercard" /><i class="fa fa-cc-mastercard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-paypal" /><i class="fa fa-cc-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-stripe" /><i class="fa fa-cc-stripe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-visa" /><i class="fa fa-cc-visa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card" /><i class="fa fa-credit-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card-alt" /><i class="fa fa-credit-card-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-wallet" /><i class="fa fa-google-wallet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paypal" /><i class="fa fa-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-area-chart" /><i class="fa fa-area-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart" /><i class="fa fa-bar-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart-o" /><i class="fa fa-bar-chart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-line-chart" /><i class="fa fa-line-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pie-chart" /><i class="fa fa-pie-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitcoin" /><i class="fa fa-bitcoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-btc" /><i class="fa fa-btc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cny" /><i class="fa fa-cny"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dollar" /><i class="fa fa-dollar"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eur" /><i class="fa fa-eur"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-euro" /><i class="fa fa-euro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gbp" /><i class="fa fa-gbp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg" /><i class="fa fa-gg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg-circle" /><i class="fa fa-gg-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ils" /><i class="fa fa-ils"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-inr" /><i class="fa fa-inr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-jpy" /><i class="fa fa-jpy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-krw" /><i class="fa fa-krw"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-money" /><i class="fa fa-money"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rmb" /><i class="fa fa-rmb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rouble" /><i class="fa fa-rouble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rub" /><i class="fa fa-rub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ruble" /><i class="fa fa-ruble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rupee" /><i class="fa fa-rupee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shekel" /><i class="fa fa-shekel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sheqel" /><i class="fa fa-sheqel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-try" /><i class="fa fa-try"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-turkish-lira" /><i class="fa fa-turkish-lira"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-usd" /><i class="fa fa-usd"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viacoin" /><i class="fa fa-viacoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-won" /><i class="fa fa-won"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yen" /><i class="fa fa-yen"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-center" /><i class="fa fa-align-center"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-justify" /><i class="fa fa-align-justify"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-left" /><i class="fa fa-align-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-right" /><i class="fa fa-align-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bold" /><i class="fa fa-bold"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chain" /><i class="fa fa-chain"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chain-broken" /><i class="fa fa-chain-broken"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clipboard" /><i class="fa fa-clipboard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-columns" /><i class="fa fa-columns"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-copy" /><i class="fa fa-copy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cut" /><i class="fa fa-cut"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dedent" /><i class="fa fa-dedent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eraser" /><i class="fa fa-eraser"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file" /><i class="fa fa-file"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-o" /><i class="fa fa-file-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text" /><i class="fa fa-file-text"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text-o" /><i class="fa fa-file-text-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-files-o" /><i class="fa fa-files-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-floppy-o" /><i class="fa fa-floppy-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-font" /><i class="fa fa-font"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-header" /><i class="fa fa-header"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-indent" /><i class="fa fa-indent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-italic" /><i class="fa fa-italic"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-link" /><i class="fa fa-link"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list" /><i class="fa fa-list"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-alt" /><i class="fa fa-list-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-ol" /><i class="fa fa-list-ol"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-ul" /><i class="fa fa-list-ul"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-outdent" /><i class="fa fa-outdent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paperclip" /><i class="fa fa-paperclip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paragraph" /><i class="fa fa-paragraph"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paste" /><i class="fa fa-paste"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-repeat" /><i class="fa fa-repeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rotate-left" /><i class="fa fa-rotate-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rotate-right" /><i class="fa fa-rotate-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-save" /><i class="fa fa-save"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-scissors" /><i class="fa fa-scissors"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-strikethrough" /><i class="fa fa-strikethrough"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-subscript" /><i class="fa fa-subscript"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superscript" /><i class="fa fa-superscript"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-table" /><i class="fa fa-table"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-text-height" /><i class="fa fa-text-height"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-text-width" /><i class="fa fa-text-width"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th" /><i class="fa fa-th"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th-large" /><i class="fa fa-th-large"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th-list" /><i class="fa fa-th-list"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-underline" /><i class="fa fa-underline"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-undo" /><i class="fa fa-undo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlink" /><i class="fa fa-unlink"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-down" /><i class="fa fa-angle-double-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-left" /><i class="fa fa-angle-double-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-right" /><i class="fa fa-angle-double-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-up" /><i class="fa fa-angle-double-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-down" /><i class="fa fa-angle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-left" /><i class="fa fa-angle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-right" /><i class="fa fa-angle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-up" /><i class="fa fa-angle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-down" /><i class="fa fa-arrow-circle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-left" /><i class="fa fa-arrow-circle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-down" /><i class="fa fa-arrow-circle-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-left" /><i class="fa fa-arrow-circle-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-right" /><i class="fa fa-arrow-circle-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-up" /><i class="fa fa-arrow-circle-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-right" /><i class="fa fa-arrow-circle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-up" /><i class="fa fa-arrow-circle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-down" /><i class="fa fa-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-left" /><i class="fa fa-arrow-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-right" /><i class="fa fa-arrow-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-up" /><i class="fa fa-arrow-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows" /><i class="fa fa-arrows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-alt" /><i class="fa fa-arrows-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-h" /><i class="fa fa-arrows-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-v" /><i class="fa fa-arrows-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-down" /><i class="fa fa-caret-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-left" /><i class="fa fa-caret-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-right" /><i class="fa fa-caret-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-down" /><i class="fa fa-caret-square-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-left" /><i class="fa fa-caret-square-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-right" /><i class="fa fa-caret-square-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-up" /><i class="fa fa-caret-square-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-up" /><i class="fa fa-caret-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-down" /><i class="fa fa-chevron-circle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-left" /><i class="fa fa-chevron-circle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-right" /><i class="fa fa-chevron-circle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-up" /><i class="fa fa-chevron-circle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-down" /><i class="fa fa-chevron-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-left" /><i class="fa fa-chevron-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-right" /><i class="fa fa-chevron-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-up" /><i class="fa fa-chevron-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exchange" /><i class="fa fa-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-down" /><i class="fa fa-hand-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-left" /><i class="fa fa-hand-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-right" /><i class="fa fa-hand-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-up" /><i class="fa fa-hand-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-down" /><i class="fa fa-long-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-left" /><i class="fa fa-long-arrow-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-right" /><i class="fa fa-long-arrow-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-up" /><i class="fa fa-long-arrow-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-down" /><i class="fa fa-toggle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-left" /><i class="fa fa-toggle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-right" /><i class="fa fa-toggle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-up" /><i class="fa fa-toggle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-alt" /><i class="fa fa-arrows-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-backward" /><i class="fa fa-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-compress" /><i class="fa fa-compress"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eject" /><i class="fa fa-eject"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-expand" /><i class="fa fa-expand"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fast-backward" /><i class="fa fa-fast-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fast-forward" /><i class="fa fa-fast-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-forward" /><i class="fa fa-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause" /><i class="fa fa-pause"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause-circle" /><i class="fa fa-pause-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause-circle-o" /><i class="fa fa-pause-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play" /><i class="fa fa-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play-circle" /><i class="fa fa-play-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play-circle-o" /><i class="fa fa-play-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-random" /><i class="fa fa-random"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-step-backward" /><i class="fa fa-step-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-step-forward" /><i class="fa fa-step-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop" /><i class="fa fa-stop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop-circle" /><i class="fa fa-stop-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop-circle-o" /><i class="fa fa-stop-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-play" /><i class="fa fa-youtube-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-500px" /><i class="fa fa-500px"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-adn" /><i class="fa fa-adn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-amazon" /><i class="fa fa-amazon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-android" /><i class="fa fa-android"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angellist" /><i class="fa fa-angellist"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-apple" /><i class="fa fa-apple"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bandcamp" /><i class="fa fa-bandcamp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-behance" /><i class="fa fa-behance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-behance-square" /><i class="fa fa-behance-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitbucket" /><i class="fa fa-bitbucket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitbucket-square" /><i class="fa fa-bitbucket-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitcoin" /><i class="fa fa-bitcoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-black-tie" /><i class="fa fa-black-tie"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth" /><i class="fa fa-bluetooth"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth-b" /><i class="fa fa-bluetooth-b"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-btc" /><i class="fa fa-btc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-buysellads" /><i class="fa fa-buysellads"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-amex" /><i class="fa fa-cc-amex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-diners-club" /><i class="fa fa-cc-diners-club"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-discover" /><i class="fa fa-cc-discover"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-jcb" /><i class="fa fa-cc-jcb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-mastercard" /><i class="fa fa-cc-mastercard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-paypal" /><i class="fa fa-cc-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-stripe" /><i class="fa fa-cc-stripe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-visa" /><i class="fa fa-cc-visa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chrome" /><i class="fa fa-chrome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-codepen" /><i class="fa fa-codepen"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-codiepie" /><i class="fa fa-codiepie"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-connectdevelop" /><i class="fa fa-connectdevelop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-contao" /><i class="fa fa-contao"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-css3" /><i class="fa fa-css3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dashcube" /><i class="fa fa-dashcube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-delicious" /><i class="fa fa-delicious"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deviantart" /><i class="fa fa-deviantart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-digg" /><i class="fa fa-digg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dribbble" /><i class="fa fa-dribbble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dropbox" /><i class="fa fa-dropbox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drupal" /><i class="fa fa-drupal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-edge" /><i class="fa fa-edge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eercast" /><i class="fa fa-eercast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-empire" /><i class="fa fa-empire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envira" /><i class="fa fa-envira"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-etsy" /><i class="fa fa-etsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-expeditedssl" /><i class="fa fa-expeditedssl"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fa" /><i class="fa fa-fa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook" /><i class="fa fa-facebook"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-f" /><i class="fa fa-facebook-f"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-official" /><i class="fa fa-facebook-official"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-square" /><i class="fa fa-facebook-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-firefox" /><i class="fa fa-firefox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-first-order" /><i class="fa fa-first-order"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flickr" /><i class="fa fa-flickr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-font-awesome" /><i class="fa fa-font-awesome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fonticons" /><i class="fa fa-fonticons"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fort-awesome" /><i class="fa fa-fort-awesome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-forumbee" /><i class="fa fa-forumbee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-foursquare" /><i class="fa fa-foursquare"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-free-code-camp" /><i class="fa fa-free-code-camp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ge" /><i class="fa fa-ge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-get-pocket" /><i class="fa fa-get-pocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg" /><i class="fa fa-gg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg-circle" /><i class="fa fa-gg-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-git" /><i class="fa fa-git"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-git-square" /><i class="fa fa-git-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github" /><i class="fa fa-github"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github-alt" /><i class="fa fa-github-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github-square" /><i class="fa fa-github-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gitlab" /><i class="fa fa-gitlab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gittip" /><i class="fa fa-gittip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glide" /><i class="fa fa-glide"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glide-g" /><i class="fa fa-glide-g"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google" /><i class="fa fa-google"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus" /><i class="fa fa-google-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-circle" /><i class="fa fa-google-plus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-official" /><i class="fa fa-google-plus-official"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-square" /><i class="fa fa-google-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-wallet" /><i class="fa fa-google-wallet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gratipay" /><i class="fa fa-gratipay"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-grav" /><i class="fa fa-grav"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hacker-news" /><i class="fa fa-hacker-news"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-houzz" /><i class="fa fa-houzz"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-html5" /><i class="fa fa-html5"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-imdb" /><i class="fa fa-imdb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-instagram" /><i class="fa fa-instagram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-internet-explorer" /><i class="fa fa-internet-explorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ioxhost" /><i class="fa fa-ioxhost"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-joomla" /><i class="fa fa-joomla"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-jsfiddle" /><i class="fa fa-jsfiddle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lastfm" /><i class="fa fa-lastfm"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lastfm-square" /><i class="fa fa-lastfm-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-leanpub" /><i class="fa fa-leanpub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linkedin" /><i class="fa fa-linkedin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linkedin-square" /><i class="fa fa-linkedin-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linode" /><i class="fa fa-linode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linux" /><i class="fa fa-linux"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-maxcdn" /><i class="fa fa-maxcdn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meanpath" /><i class="fa fa-meanpath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-medium" /><i class="fa fa-medium"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meetup" /><i class="fa fa-meetup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mixcloud" /><i class="fa fa-mixcloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-modx" /><i class="fa fa-modx"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-odnoklassniki" /><i class="fa fa-odnoklassniki"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-odnoklassniki-square" /><i class="fa fa-odnoklassniki-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-opencart" /><i class="fa fa-opencart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-openid" /><i class="fa fa-openid"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-opera" /><i class="fa fa-opera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-optin-monster" /><i class="fa fa-optin-monster"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pagelines" /><i class="fa fa-pagelines"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paypal" /><i class="fa fa-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper" /><i class="fa fa-pied-piper"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper-alt" /><i class="fa fa-pied-piper-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper-pp" /><i class="fa fa-pied-piper-pp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest" /><i class="fa fa-pinterest"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest-p" /><i class="fa fa-pinterest-p"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest-square" /><i class="fa fa-pinterest-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-product-hunt" /><i class="fa fa-product-hunt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-qq" /><i class="fa fa-qq"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quora" /><i class="fa fa-quora"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ra" /><i class="fa fa-ra"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ravelry" /><i class="fa fa-ravelry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rebel" /><i class="fa fa-rebel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit" /><i class="fa fa-reddit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit-alien" /><i class="fa fa-reddit-alien"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit-square" /><i class="fa fa-reddit-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-renren" /><i class="fa fa-renren"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-resistance" /><i class="fa fa-resistance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-safari" /><i class="fa fa-safari"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-scribd" /><i class="fa fa-scribd"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sellsy" /><i class="fa fa-sellsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt" /><i class="fa fa-share-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt-square" /><i class="fa fa-share-alt-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shirtsinbulk" /><i class="fa fa-shirtsinbulk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-simplybuilt" /><i class="fa fa-simplybuilt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-skyatlas" /><i class="fa fa-skyatlas"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-skype" /><i class="fa fa-skype"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-slack" /><i class="fa fa-slack"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-slideshare" /><i class="fa fa-slideshare"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat" /><i class="fa fa-snapchat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat-ghost" /><i class="fa fa-snapchat-ghost"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat-square" /><i class="fa fa-snapchat-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-soundcloud" /><i class="fa fa-soundcloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spotify" /><i class="fa fa-spotify"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stack-exchange" /><i class="fa fa-stack-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stack-overflow" /><i class="fa fa-stack-overflow"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-steam" /><i class="fa fa-steam"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-steam-square" /><i class="fa fa-steam-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stumbleupon" /><i class="fa fa-stumbleupon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stumbleupon-circle" /><i class="fa fa-stumbleupon-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superpowers" /><i class="fa fa-superpowers"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-telegram" /><i class="fa fa-telegram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tencent-weibo" /><i class="fa fa-tencent-weibo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-themeisle" /><i class="fa fa-themeisle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trello" /><i class="fa fa-trello"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tripadvisor" /><i class="fa fa-tripadvisor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tumblr" /><i class="fa fa-tumblr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tumblr-square" /><i class="fa fa-tumblr-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitch" /><i class="fa fa-twitch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitter" /><i class="fa fa-twitter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitter-square" /><i class="fa fa-twitter-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-usb" /><i class="fa fa-usb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viacoin" /><i class="fa fa-viacoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viadeo" /><i class="fa fa-viadeo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viadeo-square" /><i class="fa fa-viadeo-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vimeo" /><i class="fa fa-vimeo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vimeo-square" /><i class="fa fa-vimeo-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vine" /><i class="fa fa-vine"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vk" /><i class="fa fa-vk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wechat" /><i class="fa fa-wechat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-weibo" /><i class="fa fa-weibo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-weixin" /><i class="fa fa-weixin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-whatsapp" /><i class="fa fa-whatsapp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wikipedia-w" /><i class="fa fa-wikipedia-w"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-windows" /><i class="fa fa-windows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wordpress" /><i class="fa fa-wordpress"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpbeginner" /><i class="fa fa-wpbeginner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpexplorer" /><i class="fa fa-wpexplorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpforms" /><i class="fa fa-wpforms"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-xing" /><i class="fa fa-xing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-xing-square" /><i class="fa fa-xing-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-y-combinator" /><i class="fa fa-y-combinator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-y-combinator-square" /><i class="fa fa-y-combinator-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yahoo" /><i class="fa fa-yahoo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yc" /><i class="fa fa-yc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yc-square" /><i class="fa fa-yc-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yelp" /><i class="fa fa-yelp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yoast" /><i class="fa fa-yoast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube" /><i class="fa fa-youtube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-play" /><i class="fa fa-youtube-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-square" /><i class="fa fa-youtube-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ambulance" /><i class="fa fa-ambulance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-h-square" /><i class="fa fa-h-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart" /><i class="fa fa-heart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart-o" /><i class="fa fa-heart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heartbeat" /><i class="fa fa-heartbeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hospital-o" /><i class="fa fa-hospital-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-medkit" /><i class="fa fa-medkit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stethoscope" /><i class="fa fa-stethoscope"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-md" /><i class="fa fa-user-md"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-kitchen-set" /><i class="fa-solid fa-kitchen-set"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-fire-burner" /><i class="fa-solid fa-fire-burner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-plate-utensils" /><i class="fa-solid fa-plate-utensils"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-coffee-pot" /><i class="fa-solid fa-coffee-pot"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-microwave" /><i class="fa-solid fa-microwave"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-regular fa-chair" /><i class="fa-regular fa-chair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-bed-front" /><i class="fa-solid fa-bed-front"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-clothes-hanger" /><i class="fa-solid fa-clothes-hanger"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-tv-retro" /><i class="fa-solid fa-tv-retro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-router" /><i class="fa-solid fa-router"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-air-conditioner" /><i class="fa-solid fa-air-conditioner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-spray-can-sparkles" /><i class="fa-solid fa-spray-can-sparkles"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-chalkboard-user" /><i class="fa-solid fa-chalkboard-user"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-pot-food" /><i class="fa-solid fa-pot-food"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-blanket" /><i class="fa-solid fa-blanket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-stapler" /><i class="fa-solid fa-stapler"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-heat" /><i class="fa-solid fa-heat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-person-to-door" /><i class="fa-solid fa-person-to-door"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-dumbbell" /><i class="fa-solid fa-dumbbell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-dumbbell" /><i class="fa-solid fa-dumbbell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-elevator" /><i class="fa-solid fa-elevator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-fire-extinguisher" /><i class="fa-solid fa-fire-extinguisher"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-regular fa-house-building" /><i class="fa-regular fa-house-building"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-person-swimming" /><i class="fa-solid fa-person-swimming"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-water-ladder" /><i class="fa-solid fa-water-ladder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-square-parking" /><i class="fa-solid fa-square-parking"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-washing-machine" /><i class="fa-solid fa-washing-machine"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-sensor-fire" /><i class="fa-solid fa-sensor-fire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-family" /><i class="fa-solid fa-family"></i></label></li>
                            </ul>
                        </div>
                    </div>
                    <div class="step">
                        <label>Selected Icon</label>
                        <div class="selectedIcon"><label></label><input type="text" name="selectedIcon" required></div>
                    </div>
                    <div class="step">
                        <label for="status_updateAmenity" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="status_updateAmenity" value="1" />
                            <label class="onoffswitch-label" for="status_updateAmenity">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- add buildingAmenities -->
<div class="modal fade modalshg dashboardBuildingAmenitiesPost" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="addAmenity2" method="post" action="{{ route('dashboardBuildingAmenitiesPost') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Building Amenity</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label>Icon</label>
                        <div class="icon_lists">
                            <ul>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book" /><i class="fa fa-address-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book-o" /><i class="fa fa-address-book-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card" /><i class="fa fa-address-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card-o" /><i class="fa fa-address-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bandcamp" /><i class="fa fa-bandcamp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bath" /><i class="fa fa-bath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bathtub" /><i class="fa fa-bathtub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license" /><i class="fa fa-drivers-license"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license-o" /><i class="fa fa-drivers-license-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eercast" /><i class="fa fa-eercast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open" /><i class="fa fa-envelope-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open-o" /><i class="fa fa-envelope-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-etsy" /><i class="fa fa-etsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-free-code-camp" /><i class="fa fa-free-code-camp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-grav" /><i class="fa fa-grav"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-handshake-o" /><i class="fa fa-handshake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-badge" /><i class="fa fa-id-badge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card" /><i class="fa fa-id-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card-o" /><i class="fa fa-id-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-imdb" /><i class="fa fa-imdb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linode" /><i class="fa fa-linode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meetup" /><i class="fa fa-meetup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microchip" /><i class="fa fa-microchip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-podcast" /><i class="fa fa-podcast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quora" /><i class="fa fa-quora"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ravelry" /><i class="fa fa-ravelry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-s15" /><i class="fa fa-s15"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shower" /><i class="fa fa-shower"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snowflake-o" /><i class="fa fa-snowflake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superpowers" /><i class="fa fa-superpowers"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-telegram" /><i class="fa fa-telegram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer" /><i class="fa fa-thermometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-0" /><i class="fa fa-thermometer-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-1" /><i class="fa fa-thermometer-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-2" /><i class="fa fa-thermometer-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-3" /><i class="fa fa-thermometer-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-4" /><i class="fa fa-thermometer-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-empty" /><i class="fa fa-thermometer-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-full" /><i class="fa fa-thermometer-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-half" /><i class="fa fa-thermometer-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-quarter" /><i class="fa fa-thermometer-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-three-quarters" /><i class="fa fa-thermometer-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle" /><i class="fa fa-times-rectangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle-o" /><i class="fa fa-times-rectangle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle" /><i class="fa fa-user-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle-o" /><i class="fa fa-user-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-o" /><i class="fa fa-user-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard" /><i class="fa fa-vcard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard-o" /><i class="fa fa-vcard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close" /><i class="fa fa-window-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close-o" /><i class="fa fa-window-close-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-maximize" /><i class="fa fa-window-maximize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-minimize" /><i class="fa fa-window-minimize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-restore" /><i class="fa fa-window-restore"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpexplorer" /><i class="fa fa-wpexplorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book" /><i class="fa fa-address-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book-o" /><i class="fa fa-address-book-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card" /><i class="fa fa-address-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card-o" /><i class="fa fa-address-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-adjust" /><i class="fa fa-adjust"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-american-sign-language-interpreting" /><i class="fa fa-american-sign-language-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-anchor" /><i class="fa fa-anchor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-archive" /><i class="fa fa-archive"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-area-chart" /><i class="fa fa-area-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows" /><i class="fa fa-arrows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-h" /><i class="fa fa-arrows-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-v" /><i class="fa fa-arrows-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asl-interpreting" /><i class="fa fa-asl-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-assistive-listening-systems" /><i class="fa fa-assistive-listening-systems"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asterisk" /><i class="fa fa-asterisk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-at" /><i class="fa fa-at"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-audio-description" /><i class="fa fa-audio-description"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-automobile" /><i class="fa fa-automobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-balance-scale" /><i class="fa fa-balance-scale"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ban" /><i class="fa fa-ban"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bank" /><i class="fa fa-bank"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart" /><i class="fa fa-bar-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart-o" /><i class="fa fa-bar-chart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-barcode" /><i class="fa fa-barcode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bars" /><i class="fa fa-bars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bath" /><i class="fa fa-bath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bathtub" /><i class="fa fa-bathtub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery" /><i class="fa fa-battery"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-0" /><i class="fa fa-battery-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-1" /><i class="fa fa-battery-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-2" /><i class="fa fa-battery-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-3" /><i class="fa fa-battery-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-4" /><i class="fa fa-battery-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-empty" /><i class="fa fa-battery-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-full" /><i class="fa fa-battery-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-half" /><i class="fa fa-battery-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-quarter" /><i class="fa fa-battery-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-three-quarters" /><i class="fa fa-battery-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bed" /><i class="fa fa-bed"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-beer" /><i class="fa fa-beer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell" /><i class="fa fa-bell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-o" /><i class="fa fa-bell-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-slash" /><i class="fa fa-bell-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-slash-o" /><i class="fa fa-bell-slash-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bicycle" /><i class="fa fa-bicycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-binoculars" /><i class="fa fa-binoculars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-birthday-cake" /><i class="fa fa-birthday-cake"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-blind" /><i class="fa fa-blind"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth" /><i class="fa fa-bluetooth"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth-b" /><i class="fa fa-bluetooth-b"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bolt" /><i class="fa fa-bolt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bomb" /><i class="fa fa-bomb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-book" /><i class="fa fa-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bookmark" /><i class="fa fa-bookmark"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bookmark-o" /><i class="fa fa-bookmark-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-braille" /><i class="fa fa-braille"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-briefcase" /><i class="fa fa-briefcase"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bug" /><i class="fa fa-bug"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-building" /><i class="fa fa-building"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-building-o" /><i class="fa fa-building-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bullhorn" /><i class="fa fa-bullhorn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bullseye" /><i class="fa fa-bullseye"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bus" /><i class="fa fa-bus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cab" /><i class="fa fa-cab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calculator" /><i class="fa fa-calculator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar" /><i class="fa fa-calendar"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-check-o" /><i class="fa fa-calendar-check-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-minus-o" /><i class="fa fa-calendar-minus-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-o" /><i class="fa fa-calendar-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-plus-o" /><i class="fa fa-calendar-plus-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-times-o" /><i class="fa fa-calendar-times-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-camera" /><i class="fa fa-camera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-camera-retro" /><i class="fa fa-camera-retro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-car" /><i class="fa fa-car"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-down" /><i class="fa fa-caret-square-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-left" /><i class="fa fa-caret-square-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-right" /><i class="fa fa-caret-square-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-up" /><i class="fa fa-caret-square-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cart-arrow-down" /><i class="fa fa-cart-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cart-plus" /><i class="fa fa-cart-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc" /><i class="fa fa-cc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-certificate" /><i class="fa fa-certificate"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check" /><i class="fa fa-check"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-circle" /><i class="fa fa-check-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-circle-o" /><i class="fa fa-check-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square" /><i class="fa fa-check-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square-o" /><i class="fa fa-check-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-child" /><i class="fa fa-child"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle" /><i class="fa fa-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o" /><i class="fa fa-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o-notch" /><i class="fa fa-circle-o-notch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-thin" /><i class="fa fa-circle-thin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clock-o" /><i class="fa fa-clock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clone" /><i class="fa fa-clone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-close" /><i class="fa fa-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud" /><i class="fa fa-cloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud-download" /><i class="fa fa-cloud-download"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud-upload" /><i class="fa fa-cloud-upload"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-code" /><i class="fa fa-code"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-code-fork" /><i class="fa fa-code-fork"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-coffee" /><i class="fa fa-coffee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cog" /><i class="fa fa-cog"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cogs" /><i class="fa fa-cogs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comment" /><i class="fa fa-comment"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comment-o" /><i class="fa fa-comment-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-commenting" /><i class="fa fa-commenting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-commenting-o" /><i class="fa fa-commenting-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comments" /><i class="fa fa-comments"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comments-o" /><i class="fa fa-comments-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-compass" /><i class="fa fa-compass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-copyright" /><i class="fa fa-copyright"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-creative-commons" /><i class="fa fa-creative-commons"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card" /><i class="fa fa-credit-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card-alt" /><i class="fa fa-credit-card-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-crop" /><i class="fa fa-crop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-crosshairs" /><i class="fa fa-crosshairs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cube" /><i class="fa fa-cube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cubes" /><i class="fa fa-cubes"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cutlery" /><i class="fa fa-cutlery"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dashboard" /><i class="fa fa-dashboard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-database" /><i class="fa fa-database"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deaf" /><i class="fa fa-deaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deafness" /><i class="fa fa-deafness"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-desktop" /><i class="fa fa-desktop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-diamond" /><i class="fa fa-diamond"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dot-circle-o" /><i class="fa fa-dot-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-download" /><i class="fa fa-download"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license" /><i class="fa fa-drivers-license"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license-o" /><i class="fa fa-drivers-license-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-edit" /><i class="fa fa-edit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ellipsis-h" /><i class="fa fa-ellipsis-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ellipsis-v" /><i class="fa fa-ellipsis-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope" /><i class="fa fa-envelope"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-o" /><i class="fa fa-envelope-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open" /><i class="fa fa-envelope-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open-o" /><i class="fa fa-envelope-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-square" /><i class="fa fa-envelope-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eraser" /><i class="fa fa-eraser"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exchange" /><i class="fa fa-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation" /><i class="fa fa-exclamation"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation-circle" /><i class="fa fa-exclamation-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation-triangle" /><i class="fa fa-exclamation-triangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-external-link" /><i class="fa fa-external-link"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-external-link-square" /><i class="fa fa-external-link-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eye" /><i class="fa fa-eye"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eye-slash" /><i class="fa fa-eye-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eyedropper" /><i class="fa fa-eyedropper"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fax" /><i class="fa fa-fax"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-feed" /><i class="fa fa-feed"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-female" /><i class="fa fa-female"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fighter-jet" /><i class="fa fa-fighter-jet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-archive-o" /><i class="fa fa-file-archive-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-audio-o" /><i class="fa fa-file-audio-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-code-o" /><i class="fa fa-file-code-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-excel-o" /><i class="fa fa-file-excel-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-image-o" /><i class="fa fa-file-image-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-movie-o" /><i class="fa fa-file-movie-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-pdf-o" /><i class="fa fa-file-pdf-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-photo-o" /><i class="fa fa-file-photo-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-picture-o" /><i class="fa fa-file-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-powerpoint-o" /><i class="fa fa-file-powerpoint-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-sound-o" /><i class="fa fa-file-sound-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-video-o" /><i class="fa fa-file-video-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-word-o" /><i class="fa fa-file-word-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-zip-o" /><i class="fa fa-file-zip-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-film" /><i class="fa fa-film"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-filter" /><i class="fa fa-filter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fire" /><i class="fa fa-fire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fire-extinguisher" /><i class="fa fa-fire-extinguisher"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag" /><i class="fa fa-flag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag-checkered" /><i class="fa fa-flag-checkered"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag-o" /><i class="fa fa-flag-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flash" /><i class="fa fa-flash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flask" /><i class="fa fa-flask"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder" /><i class="fa fa-folder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-o" /><i class="fa fa-folder-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-open" /><i class="fa fa-folder-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-open-o" /><i class="fa fa-folder-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-frown-o" /><i class="fa fa-frown-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-futbol-o" /><i class="fa fa-futbol-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gamepad" /><i class="fa fa-gamepad"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gavel" /><i class="fa fa-gavel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gear" /><i class="fa fa-gear"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gears" /><i class="fa fa-gears"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gift" /><i class="fa fa-gift"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glass" /><i class="fa fa-glass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-globe" /><i class="fa fa-globe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-graduation-cap" /><i class="fa fa-graduation-cap"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-group" /><i class="fa fa-group"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-grab-o" /><i class="fa fa-hand-grab-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-lizard-o" /><i class="fa fa-hand-lizard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-paper-o" /><i class="fa fa-hand-paper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-peace-o" /><i class="fa fa-hand-peace-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-pointer-o" /><i class="fa fa-hand-pointer-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-rock-o" /><i class="fa fa-hand-rock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-scissors-o" /><i class="fa fa-hand-scissors-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-spock-o" /><i class="fa fa-hand-spock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-stop-o" /><i class="fa fa-hand-stop-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-handshake-o" /><i class="fa fa-handshake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hard-of-hearing" /><i class="fa fa-hard-of-hearing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hashtag" /><i class="fa fa-hashtag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hdd-o" /><i class="fa fa-hdd-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-headphones" /><i class="fa fa-headphones"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart" /><i class="fa fa-heart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart-o" /><i class="fa fa-heart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heartbeat" /><i class="fa fa-heartbeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-history" /><i class="fa fa-history"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-home" /><i class="fa fa-home"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hotel" /><i class="fa fa-hotel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass" /><i class="fa fa-hourglass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-1" /><i class="fa fa-hourglass-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-2" /><i class="fa fa-hourglass-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-3" /><i class="fa fa-hourglass-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-end" /><i class="fa fa-hourglass-end"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-half" /><i class="fa fa-hourglass-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-o" /><i class="fa fa-hourglass-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-start" /><i class="fa fa-hourglass-start"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-i-cursor" /><i class="fa fa-i-cursor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-badge" /><i class="fa fa-id-badge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card" /><i class="fa fa-id-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card-o" /><i class="fa fa-id-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-image" /><i class="fa fa-image"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-inbox" /><i class="fa fa-inbox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-industry" /><i class="fa fa-industry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-info" /><i class="fa fa-info"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-info-circle" /><i class="fa fa-info-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-institution" /><i class="fa fa-institution"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-key" /><i class="fa fa-key"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-keyboard-o" /><i class="fa fa-keyboard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-language" /><i class="fa fa-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-laptop" /><i class="fa fa-laptop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-leaf" /><i class="fa fa-leaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-legal" /><i class="fa fa-legal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lemon-o" /><i class="fa fa-lemon-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-level-down" /><i class="fa fa-level-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-level-up" /><i class="fa fa-level-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-bouy" /><i class="fa fa-life-bouy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-buoy" /><i class="fa fa-life-buoy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-ring" /><i class="fa fa-life-ring"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-saver" /><i class="fa fa-life-saver"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lightbulb-o" /><i class="fa fa-lightbulb-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-line-chart" /><i class="fa fa-line-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-location-arrow" /><i class="fa fa-location-arrow"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lock" /><i class="fa fa-lock"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-low-vision" /><i class="fa fa-low-vision"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-magic" /><i class="fa fa-magic"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-magnet" /><i class="fa fa-magnet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-forward" /><i class="fa fa-mail-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-reply" /><i class="fa fa-mail-reply"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-reply-all" /><i class="fa fa-mail-reply-all"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-male" /><i class="fa fa-male"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map" /><i class="fa fa-map"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-marker" /><i class="fa fa-map-marker"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-o" /><i class="fa fa-map-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-pin" /><i class="fa fa-map-pin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-signs" /><i class="fa fa-map-signs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meh-o" /><i class="fa fa-meh-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microchip" /><i class="fa fa-microchip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microphone" /><i class="fa fa-microphone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microphone-slash" /><i class="fa fa-microphone-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus" /><i class="fa fa-minus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-circle" /><i class="fa fa-minus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square" /><i class="fa fa-minus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square-o" /><i class="fa fa-minus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mobile" /><i class="fa fa-mobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mobile-phone" /><i class="fa fa-mobile-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-money" /><i class="fa fa-money"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-moon-o" /><i class="fa fa-moon-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mortar-board" /><i class="fa fa-mortar-board"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-motorcycle" /><i class="fa fa-motorcycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mouse-pointer" /><i class="fa fa-mouse-pointer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-music" /><i class="fa fa-music"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-navicon" /><i class="fa fa-navicon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-newspaper-o" /><i class="fa fa-newspaper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-object-group" /><i class="fa fa-object-group"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-object-ungroup" /><i class="fa fa-object-ungroup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paint-brush" /><i class="fa fa-paint-brush"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paper-plane" /><i class="fa fa-paper-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paper-plane-o" /><i class="fa fa-paper-plane-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paw" /><i class="fa fa-paw"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil" /><i class="fa fa-pencil"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil-square" /><i class="fa fa-pencil-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil-square-o" /><i class="fa fa-pencil-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-percent" /><i class="fa fa-percent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-phone" /><i class="fa fa-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-phone-square" /><i class="fa fa-phone-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-photo" /><i class="fa fa-photo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-picture-o" /><i class="fa fa-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pie-chart" /><i class="fa fa-pie-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plane" /><i class="fa fa-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plug" /><i class="fa fa-plug"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus" /><i class="fa fa-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-circle" /><i class="fa fa-plus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square-o" /><i class="fa fa-plus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-podcast" /><i class="fa fa-podcast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-power-off" /><i class="fa fa-power-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-print" /><i class="fa fa-print"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-puzzle-piece" /><i class="fa fa-puzzle-piece"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-qrcode" /><i class="fa fa-qrcode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question" /><i class="fa fa-question"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle" /><i class="fa fa-question-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle-o" /><i class="fa fa-question-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quote-left" /><i class="fa fa-quote-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quote-right" /><i class="fa fa-quote-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-random" /><i class="fa fa-random"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-recycle" /><i class="fa fa-recycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-refresh" /><i class="fa fa-refresh"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-registered" /><i class="fa fa-registered"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-remove" /><i class="fa fa-remove"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reorder" /><i class="fa fa-reorder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reply" /><i class="fa fa-reply"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reply-all" /><i class="fa fa-reply-all"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-retweet" /><i class="fa fa-retweet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-road" /><i class="fa fa-road"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rocket" /><i class="fa fa-rocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rss" /><i class="fa fa-rss"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rss-square" /><i class="fa fa-rss-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-s15" /><i class="fa fa-s15"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search" /><i class="fa fa-search"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search-minus" /><i class="fa fa-search-minus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search-plus" /><i class="fa fa-search-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-send" /><i class="fa fa-send"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-send-o" /><i class="fa fa-send-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-server" /><i class="fa fa-server"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share" /><i class="fa fa-share"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt" /><i class="fa fa-share-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt-square" /><i class="fa fa-share-alt-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-square" /><i class="fa fa-share-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-square-o" /><i class="fa fa-share-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shield" /><i class="fa fa-shield"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ship" /><i class="fa fa-ship"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-bag" /><i class="fa fa-shopping-bag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-basket" /><i class="fa fa-shopping-basket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-cart" /><i class="fa fa-shopping-cart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shower" /><i class="fa fa-shower"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-in" /><i class="fa fa-sign-in"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-language" /><i class="fa fa-sign-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-out" /><i class="fa fa-sign-out"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signal" /><i class="fa fa-signal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signing" /><i class="fa fa-signing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sitemap" /><i class="fa fa-sitemap"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sliders" /><i class="fa fa-sliders"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-smile-o" /><i class="fa fa-smile-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snowflake-o" /><i class="fa fa-snowflake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-soccer-ball-o" /><i class="fa fa-soccer-ball-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort" /><i class="fa fa-sort"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-alpha-asc" /><i class="fa fa-sort-alpha-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-alpha-desc" /><i class="fa fa-sort-alpha-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-amount-asc" /><i class="fa fa-sort-amount-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-amount-desc" /><i class="fa fa-sort-amount-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-asc" /><i class="fa fa-sort-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-desc" /><i class="fa fa-sort-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-down" /><i class="fa fa-sort-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-numeric-asc" /><i class="fa fa-sort-numeric-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-numeric-desc" /><i class="fa fa-sort-numeric-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-up" /><i class="fa fa-sort-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-space-shuttle" /><i class="fa fa-space-shuttle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spinner" /><i class="fa fa-spinner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spoon" /><i class="fa fa-spoon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square" /><i class="fa fa-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square-o" /><i class="fa fa-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star" /><i class="fa fa-star"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half" /><i class="fa fa-star-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-empty" /><i class="fa fa-star-half-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-full" /><i class="fa fa-star-half-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-o" /><i class="fa fa-star-half-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-o" /><i class="fa fa-star-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sticky-note" /><i class="fa fa-sticky-note"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sticky-note-o" /><i class="fa fa-sticky-note-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-street-view" /><i class="fa fa-street-view"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-suitcase" /><i class="fa fa-suitcase"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sun-o" /><i class="fa fa-sun-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-support" /><i class="fa fa-support"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tablet" /><i class="fa fa-tablet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tachometer" /><i class="fa fa-tachometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tag" /><i class="fa fa-tag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tags" /><i class="fa fa-tags"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tasks" /><i class="fa fa-tasks"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-taxi" /><i class="fa fa-taxi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-television" /><i class="fa fa-television"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-terminal" /><i class="fa fa-terminal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer" /><i class="fa fa-thermometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-0" /><i class="fa fa-thermometer-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-1" /><i class="fa fa-thermometer-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-2" /><i class="fa fa-thermometer-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-3" /><i class="fa fa-thermometer-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-4" /><i class="fa fa-thermometer-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-empty" /><i class="fa fa-thermometer-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-full" /><i class="fa fa-thermometer-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-half" /><i class="fa fa-thermometer-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-quarter" /><i class="fa fa-thermometer-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-three-quarters" /><i class="fa fa-thermometer-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumb-tack" /><i class="fa fa-thumb-tack"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-down" /><i class="fa fa-thumbs-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-down" /><i class="fa fa-thumbs-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-up" /><i class="fa fa-thumbs-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-up" /><i class="fa fa-thumbs-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ticket" /><i class="fa fa-ticket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times" /><i class="fa fa-times"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-circle" /><i class="fa fa-times-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-circle-o" /><i class="fa fa-times-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle" /><i class="fa fa-times-rectangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle-o" /><i class="fa fa-times-rectangle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tint" /><i class="fa fa-tint"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-down" /><i class="fa fa-toggle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-left" /><i class="fa fa-toggle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-off" /><i class="fa fa-toggle-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-on" /><i class="fa fa-toggle-on"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-right" /><i class="fa fa-toggle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-up" /><i class="fa fa-toggle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trademark" /><i class="fa fa-trademark"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trash" /><i class="fa fa-trash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trash-o" /><i class="fa fa-trash-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tree" /><i class="fa fa-tree"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trophy" /><i class="fa fa-trophy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-truck" /><i class="fa fa-truck"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tty" /><i class="fa fa-tty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tv" /><i class="fa fa-tv"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-umbrella" /><i class="fa fa-umbrella"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-universal-access" /><i class="fa fa-universal-access"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-university" /><i class="fa fa-university"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlock" /><i class="fa fa-unlock"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlock-alt" /><i class="fa fa-unlock-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unsorted" /><i class="fa fa-unsorted"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-upload" /><i class="fa fa-upload"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user" /><i class="fa fa-user"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle" /><i class="fa fa-user-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle-o" /><i class="fa fa-user-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-o" /><i class="fa fa-user-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-plus" /><i class="fa fa-user-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-secret" /><i class="fa fa-user-secret"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-times" /><i class="fa fa-user-times"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-users" /><i class="fa fa-users"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard" /><i class="fa fa-vcard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard-o" /><i class="fa fa-vcard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-video-camera" /><i class="fa fa-video-camera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-control-phone" /><i class="fa fa-volume-control-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-down" /><i class="fa fa-volume-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-off" /><i class="fa fa-volume-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-up" /><i class="fa fa-volume-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-warning" /><i class="fa fa-warning"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wifi" /><i class="fa fa-wifi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close" /><i class="fa fa-window-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close-o" /><i class="fa fa-window-close-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-maximize" /><i class="fa fa-window-maximize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-minimize" /><i class="fa fa-window-minimize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-restore" /><i class="fa fa-window-restore"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wrench" /><i class="fa fa-wrench"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-american-sign-language-interpreting" /><i class="fa fa-american-sign-language-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asl-interpreting" /><i class="fa fa-asl-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-assistive-listening-systems" /><i class="fa fa-assistive-listening-systems"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-audio-description" /><i class="fa fa-audio-description"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-blind" /><i class="fa fa-blind"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-braille" /><i class="fa fa-braille"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc" /><i class="fa fa-cc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deaf" /><i class="fa fa-deaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deafness" /><i class="fa fa-deafness"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hard-of-hearing" /><i class="fa fa-hard-of-hearing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-low-vision" /><i class="fa fa-low-vision"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle-o" /><i class="fa fa-question-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-language" /><i class="fa fa-sign-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signing" /><i class="fa fa-signing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tty" /><i class="fa fa-tty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-universal-access" /><i class="fa fa-universal-access"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-control-phone" /><i class="fa fa-volume-control-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-grab-o" /><i class="fa fa-hand-grab-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-lizard-o" /><i class="fa fa-hand-lizard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-down" /><i class="fa fa-hand-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-left" /><i class="fa fa-hand-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-right" /><i class="fa fa-hand-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-up" /><i class="fa fa-hand-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-paper-o" /><i class="fa fa-hand-paper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-peace-o" /><i class="fa fa-hand-peace-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-pointer-o" /><i class="fa fa-hand-pointer-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-rock-o" /><i class="fa fa-hand-rock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-scissors-o" /><i class="fa fa-hand-scissors-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-spock-o" /><i class="fa fa-hand-spock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-stop-o" /><i class="fa fa-hand-stop-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-down" /><i class="fa fa-thumbs-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-down" /><i class="fa fa-thumbs-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-up" /><i class="fa fa-thumbs-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-up" /><i class="fa fa-thumbs-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ambulance" /><i class="fa fa-ambulance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-automobile" /><i class="fa fa-automobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bicycle" /><i class="fa fa-bicycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bus" /><i class="fa fa-bus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cab" /><i class="fa fa-cab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-car" /><i class="fa fa-car"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fighter-jet" /><i class="fa fa-fighter-jet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-motorcycle" /><i class="fa fa-motorcycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plane" /><i class="fa fa-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rocket" /><i class="fa fa-rocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ship" /><i class="fa fa-ship"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-space-shuttle" /><i class="fa fa-space-shuttle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-subway" /><i class="fa fa-subway"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-taxi" /><i class="fa fa-taxi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-train" /><i class="fa fa-train"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-truck" /><i class="fa fa-truck"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-genderless" /><i class="fa fa-genderless"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-intersex" /><i class="fa fa-intersex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars" /><i class="fa fa-mars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-double" /><i class="fa fa-mars-double"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke" /><i class="fa fa-mars-stroke"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke-h" /><i class="fa fa-mars-stroke-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke-v" /><i class="fa fa-mars-stroke-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mercury" /><i class="fa fa-mercury"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-neuter" /><i class="fa fa-neuter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-transgender" /><i class="fa fa-transgender"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-transgender-alt" /><i class="fa fa-transgender-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus" /><i class="fa fa-venus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus-double" /><i class="fa fa-venus-double"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus-mars" /><i class="fa fa-venus-mars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file" /><i class="fa fa-file"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-archive-o" /><i class="fa fa-file-archive-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-audio-o" /><i class="fa fa-file-audio-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-code-o" /><i class="fa fa-file-code-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-excel-o" /><i class="fa fa-file-excel-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-image-o" /><i class="fa fa-file-image-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-movie-o" /><i class="fa fa-file-movie-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-o" /><i class="fa fa-file-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-pdf-o" /><i class="fa fa-file-pdf-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-photo-o" /><i class="fa fa-file-photo-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-picture-o" /><i class="fa fa-file-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-powerpoint-o" /><i class="fa fa-file-powerpoint-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-sound-o" /><i class="fa fa-file-sound-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text" /><i class="fa fa-file-text"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text-o" /><i class="fa fa-file-text-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-video-o" /><i class="fa fa-file-video-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-word-o" /><i class="fa fa-file-word-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-zip-o" /><i class="fa fa-file-zip-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o-notch" /><i class="fa fa-circle-o-notch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cog" /><i class="fa fa-cog"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gear" /><i class="fa fa-gear"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-refresh" /><i class="fa fa-refresh"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spinner" /><i class="fa fa-spinner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square" /><i class="fa fa-check-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square-o" /><i class="fa fa-check-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle" /><i class="fa fa-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o" /><i class="fa fa-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dot-circle-o" /><i class="fa fa-dot-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square" /><i class="fa fa-minus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square-o" /><i class="fa fa-minus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square-o" /><i class="fa fa-plus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square" /><i class="fa fa-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square-o" /><i class="fa fa-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-amex" /><i class="fa fa-cc-amex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-diners-club" /><i class="fa fa-cc-diners-club"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-discover" /><i class="fa fa-cc-discover"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-jcb" /><i class="fa fa-cc-jcb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-mastercard" /><i class="fa fa-cc-mastercard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-paypal" /><i class="fa fa-cc-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-stripe" /><i class="fa fa-cc-stripe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-visa" /><i class="fa fa-cc-visa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card" /><i class="fa fa-credit-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card-alt" /><i class="fa fa-credit-card-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-wallet" /><i class="fa fa-google-wallet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paypal" /><i class="fa fa-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-area-chart" /><i class="fa fa-area-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart" /><i class="fa fa-bar-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart-o" /><i class="fa fa-bar-chart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-line-chart" /><i class="fa fa-line-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pie-chart" /><i class="fa fa-pie-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitcoin" /><i class="fa fa-bitcoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-btc" /><i class="fa fa-btc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cny" /><i class="fa fa-cny"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dollar" /><i class="fa fa-dollar"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eur" /><i class="fa fa-eur"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-euro" /><i class="fa fa-euro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gbp" /><i class="fa fa-gbp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg" /><i class="fa fa-gg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg-circle" /><i class="fa fa-gg-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ils" /><i class="fa fa-ils"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-inr" /><i class="fa fa-inr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-jpy" /><i class="fa fa-jpy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-krw" /><i class="fa fa-krw"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-money" /><i class="fa fa-money"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rmb" /><i class="fa fa-rmb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rouble" /><i class="fa fa-rouble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rub" /><i class="fa fa-rub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ruble" /><i class="fa fa-ruble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rupee" /><i class="fa fa-rupee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shekel" /><i class="fa fa-shekel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sheqel" /><i class="fa fa-sheqel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-try" /><i class="fa fa-try"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-turkish-lira" /><i class="fa fa-turkish-lira"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-usd" /><i class="fa fa-usd"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viacoin" /><i class="fa fa-viacoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-won" /><i class="fa fa-won"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yen" /><i class="fa fa-yen"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-center" /><i class="fa fa-align-center"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-justify" /><i class="fa fa-align-justify"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-left" /><i class="fa fa-align-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-right" /><i class="fa fa-align-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bold" /><i class="fa fa-bold"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chain" /><i class="fa fa-chain"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chain-broken" /><i class="fa fa-chain-broken"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clipboard" /><i class="fa fa-clipboard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-columns" /><i class="fa fa-columns"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-copy" /><i class="fa fa-copy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cut" /><i class="fa fa-cut"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dedent" /><i class="fa fa-dedent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eraser" /><i class="fa fa-eraser"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file" /><i class="fa fa-file"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-o" /><i class="fa fa-file-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text" /><i class="fa fa-file-text"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text-o" /><i class="fa fa-file-text-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-files-o" /><i class="fa fa-files-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-floppy-o" /><i class="fa fa-floppy-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-font" /><i class="fa fa-font"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-header" /><i class="fa fa-header"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-indent" /><i class="fa fa-indent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-italic" /><i class="fa fa-italic"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-link" /><i class="fa fa-link"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list" /><i class="fa fa-list"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-alt" /><i class="fa fa-list-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-ol" /><i class="fa fa-list-ol"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-ul" /><i class="fa fa-list-ul"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-outdent" /><i class="fa fa-outdent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paperclip" /><i class="fa fa-paperclip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paragraph" /><i class="fa fa-paragraph"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paste" /><i class="fa fa-paste"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-repeat" /><i class="fa fa-repeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rotate-left" /><i class="fa fa-rotate-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rotate-right" /><i class="fa fa-rotate-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-save" /><i class="fa fa-save"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-scissors" /><i class="fa fa-scissors"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-strikethrough" /><i class="fa fa-strikethrough"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-subscript" /><i class="fa fa-subscript"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superscript" /><i class="fa fa-superscript"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-table" /><i class="fa fa-table"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-text-height" /><i class="fa fa-text-height"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-text-width" /><i class="fa fa-text-width"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th" /><i class="fa fa-th"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th-large" /><i class="fa fa-th-large"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th-list" /><i class="fa fa-th-list"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-underline" /><i class="fa fa-underline"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-undo" /><i class="fa fa-undo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlink" /><i class="fa fa-unlink"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-down" /><i class="fa fa-angle-double-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-left" /><i class="fa fa-angle-double-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-right" /><i class="fa fa-angle-double-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-up" /><i class="fa fa-angle-double-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-down" /><i class="fa fa-angle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-left" /><i class="fa fa-angle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-right" /><i class="fa fa-angle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-up" /><i class="fa fa-angle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-down" /><i class="fa fa-arrow-circle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-left" /><i class="fa fa-arrow-circle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-down" /><i class="fa fa-arrow-circle-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-left" /><i class="fa fa-arrow-circle-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-right" /><i class="fa fa-arrow-circle-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-up" /><i class="fa fa-arrow-circle-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-right" /><i class="fa fa-arrow-circle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-up" /><i class="fa fa-arrow-circle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-down" /><i class="fa fa-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-left" /><i class="fa fa-arrow-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-right" /><i class="fa fa-arrow-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-up" /><i class="fa fa-arrow-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows" /><i class="fa fa-arrows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-alt" /><i class="fa fa-arrows-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-h" /><i class="fa fa-arrows-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-v" /><i class="fa fa-arrows-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-down" /><i class="fa fa-caret-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-left" /><i class="fa fa-caret-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-right" /><i class="fa fa-caret-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-down" /><i class="fa fa-caret-square-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-left" /><i class="fa fa-caret-square-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-right" /><i class="fa fa-caret-square-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-up" /><i class="fa fa-caret-square-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-up" /><i class="fa fa-caret-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-down" /><i class="fa fa-chevron-circle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-left" /><i class="fa fa-chevron-circle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-right" /><i class="fa fa-chevron-circle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-up" /><i class="fa fa-chevron-circle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-down" /><i class="fa fa-chevron-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-left" /><i class="fa fa-chevron-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-right" /><i class="fa fa-chevron-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-up" /><i class="fa fa-chevron-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exchange" /><i class="fa fa-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-down" /><i class="fa fa-hand-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-left" /><i class="fa fa-hand-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-right" /><i class="fa fa-hand-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-up" /><i class="fa fa-hand-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-down" /><i class="fa fa-long-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-left" /><i class="fa fa-long-arrow-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-right" /><i class="fa fa-long-arrow-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-up" /><i class="fa fa-long-arrow-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-down" /><i class="fa fa-toggle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-left" /><i class="fa fa-toggle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-right" /><i class="fa fa-toggle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-up" /><i class="fa fa-toggle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-alt" /><i class="fa fa-arrows-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-backward" /><i class="fa fa-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-compress" /><i class="fa fa-compress"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eject" /><i class="fa fa-eject"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-expand" /><i class="fa fa-expand"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fast-backward" /><i class="fa fa-fast-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fast-forward" /><i class="fa fa-fast-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-forward" /><i class="fa fa-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause" /><i class="fa fa-pause"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause-circle" /><i class="fa fa-pause-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause-circle-o" /><i class="fa fa-pause-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play" /><i class="fa fa-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play-circle" /><i class="fa fa-play-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play-circle-o" /><i class="fa fa-play-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-random" /><i class="fa fa-random"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-step-backward" /><i class="fa fa-step-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-step-forward" /><i class="fa fa-step-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop" /><i class="fa fa-stop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop-circle" /><i class="fa fa-stop-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop-circle-o" /><i class="fa fa-stop-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-play" /><i class="fa fa-youtube-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-500px" /><i class="fa fa-500px"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-adn" /><i class="fa fa-adn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-amazon" /><i class="fa fa-amazon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-android" /><i class="fa fa-android"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angellist" /><i class="fa fa-angellist"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-apple" /><i class="fa fa-apple"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bandcamp" /><i class="fa fa-bandcamp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-behance" /><i class="fa fa-behance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-behance-square" /><i class="fa fa-behance-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitbucket" /><i class="fa fa-bitbucket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitbucket-square" /><i class="fa fa-bitbucket-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitcoin" /><i class="fa fa-bitcoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-black-tie" /><i class="fa fa-black-tie"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth" /><i class="fa fa-bluetooth"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth-b" /><i class="fa fa-bluetooth-b"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-btc" /><i class="fa fa-btc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-buysellads" /><i class="fa fa-buysellads"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-amex" /><i class="fa fa-cc-amex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-diners-club" /><i class="fa fa-cc-diners-club"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-discover" /><i class="fa fa-cc-discover"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-jcb" /><i class="fa fa-cc-jcb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-mastercard" /><i class="fa fa-cc-mastercard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-paypal" /><i class="fa fa-cc-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-stripe" /><i class="fa fa-cc-stripe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-visa" /><i class="fa fa-cc-visa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chrome" /><i class="fa fa-chrome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-codepen" /><i class="fa fa-codepen"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-codiepie" /><i class="fa fa-codiepie"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-connectdevelop" /><i class="fa fa-connectdevelop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-contao" /><i class="fa fa-contao"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-css3" /><i class="fa fa-css3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dashcube" /><i class="fa fa-dashcube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-delicious" /><i class="fa fa-delicious"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deviantart" /><i class="fa fa-deviantart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-digg" /><i class="fa fa-digg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dribbble" /><i class="fa fa-dribbble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dropbox" /><i class="fa fa-dropbox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drupal" /><i class="fa fa-drupal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-edge" /><i class="fa fa-edge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eercast" /><i class="fa fa-eercast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-empire" /><i class="fa fa-empire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envira" /><i class="fa fa-envira"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-etsy" /><i class="fa fa-etsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-expeditedssl" /><i class="fa fa-expeditedssl"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fa" /><i class="fa fa-fa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook" /><i class="fa fa-facebook"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-f" /><i class="fa fa-facebook-f"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-official" /><i class="fa fa-facebook-official"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-square" /><i class="fa fa-facebook-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-firefox" /><i class="fa fa-firefox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-first-order" /><i class="fa fa-first-order"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flickr" /><i class="fa fa-flickr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-font-awesome" /><i class="fa fa-font-awesome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fonticons" /><i class="fa fa-fonticons"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fort-awesome" /><i class="fa fa-fort-awesome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-forumbee" /><i class="fa fa-forumbee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-foursquare" /><i class="fa fa-foursquare"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-free-code-camp" /><i class="fa fa-free-code-camp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ge" /><i class="fa fa-ge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-get-pocket" /><i class="fa fa-get-pocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg" /><i class="fa fa-gg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg-circle" /><i class="fa fa-gg-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-git" /><i class="fa fa-git"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-git-square" /><i class="fa fa-git-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github" /><i class="fa fa-github"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github-alt" /><i class="fa fa-github-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github-square" /><i class="fa fa-github-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gitlab" /><i class="fa fa-gitlab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gittip" /><i class="fa fa-gittip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glide" /><i class="fa fa-glide"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glide-g" /><i class="fa fa-glide-g"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google" /><i class="fa fa-google"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus" /><i class="fa fa-google-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-circle" /><i class="fa fa-google-plus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-official" /><i class="fa fa-google-plus-official"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-square" /><i class="fa fa-google-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-wallet" /><i class="fa fa-google-wallet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gratipay" /><i class="fa fa-gratipay"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-grav" /><i class="fa fa-grav"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hacker-news" /><i class="fa fa-hacker-news"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-houzz" /><i class="fa fa-houzz"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-html5" /><i class="fa fa-html5"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-imdb" /><i class="fa fa-imdb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-instagram" /><i class="fa fa-instagram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-internet-explorer" /><i class="fa fa-internet-explorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ioxhost" /><i class="fa fa-ioxhost"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-joomla" /><i class="fa fa-joomla"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-jsfiddle" /><i class="fa fa-jsfiddle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lastfm" /><i class="fa fa-lastfm"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lastfm-square" /><i class="fa fa-lastfm-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-leanpub" /><i class="fa fa-leanpub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linkedin" /><i class="fa fa-linkedin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linkedin-square" /><i class="fa fa-linkedin-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linode" /><i class="fa fa-linode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linux" /><i class="fa fa-linux"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-maxcdn" /><i class="fa fa-maxcdn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meanpath" /><i class="fa fa-meanpath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-medium" /><i class="fa fa-medium"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meetup" /><i class="fa fa-meetup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mixcloud" /><i class="fa fa-mixcloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-modx" /><i class="fa fa-modx"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-odnoklassniki" /><i class="fa fa-odnoklassniki"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-odnoklassniki-square" /><i class="fa fa-odnoklassniki-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-opencart" /><i class="fa fa-opencart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-openid" /><i class="fa fa-openid"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-opera" /><i class="fa fa-opera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-optin-monster" /><i class="fa fa-optin-monster"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pagelines" /><i class="fa fa-pagelines"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paypal" /><i class="fa fa-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper" /><i class="fa fa-pied-piper"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper-alt" /><i class="fa fa-pied-piper-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper-pp" /><i class="fa fa-pied-piper-pp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest" /><i class="fa fa-pinterest"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest-p" /><i class="fa fa-pinterest-p"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest-square" /><i class="fa fa-pinterest-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-product-hunt" /><i class="fa fa-product-hunt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-qq" /><i class="fa fa-qq"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quora" /><i class="fa fa-quora"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ra" /><i class="fa fa-ra"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ravelry" /><i class="fa fa-ravelry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rebel" /><i class="fa fa-rebel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit" /><i class="fa fa-reddit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit-alien" /><i class="fa fa-reddit-alien"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit-square" /><i class="fa fa-reddit-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-renren" /><i class="fa fa-renren"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-resistance" /><i class="fa fa-resistance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-safari" /><i class="fa fa-safari"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-scribd" /><i class="fa fa-scribd"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sellsy" /><i class="fa fa-sellsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt" /><i class="fa fa-share-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt-square" /><i class="fa fa-share-alt-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shirtsinbulk" /><i class="fa fa-shirtsinbulk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-simplybuilt" /><i class="fa fa-simplybuilt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-skyatlas" /><i class="fa fa-skyatlas"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-skype" /><i class="fa fa-skype"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-slack" /><i class="fa fa-slack"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-slideshare" /><i class="fa fa-slideshare"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat" /><i class="fa fa-snapchat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat-ghost" /><i class="fa fa-snapchat-ghost"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat-square" /><i class="fa fa-snapchat-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-soundcloud" /><i class="fa fa-soundcloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spotify" /><i class="fa fa-spotify"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stack-exchange" /><i class="fa fa-stack-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stack-overflow" /><i class="fa fa-stack-overflow"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-steam" /><i class="fa fa-steam"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-steam-square" /><i class="fa fa-steam-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stumbleupon" /><i class="fa fa-stumbleupon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stumbleupon-circle" /><i class="fa fa-stumbleupon-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superpowers" /><i class="fa fa-superpowers"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-telegram" /><i class="fa fa-telegram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tencent-weibo" /><i class="fa fa-tencent-weibo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-themeisle" /><i class="fa fa-themeisle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trello" /><i class="fa fa-trello"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tripadvisor" /><i class="fa fa-tripadvisor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tumblr" /><i class="fa fa-tumblr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tumblr-square" /><i class="fa fa-tumblr-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitch" /><i class="fa fa-twitch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitter" /><i class="fa fa-twitter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitter-square" /><i class="fa fa-twitter-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-usb" /><i class="fa fa-usb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viacoin" /><i class="fa fa-viacoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viadeo" /><i class="fa fa-viadeo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viadeo-square" /><i class="fa fa-viadeo-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vimeo" /><i class="fa fa-vimeo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vimeo-square" /><i class="fa fa-vimeo-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vine" /><i class="fa fa-vine"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vk" /><i class="fa fa-vk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wechat" /><i class="fa fa-wechat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-weibo" /><i class="fa fa-weibo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-weixin" /><i class="fa fa-weixin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-whatsapp" /><i class="fa fa-whatsapp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wikipedia-w" /><i class="fa fa-wikipedia-w"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-windows" /><i class="fa fa-windows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wordpress" /><i class="fa fa-wordpress"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpbeginner" /><i class="fa fa-wpbeginner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpexplorer" /><i class="fa fa-wpexplorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpforms" /><i class="fa fa-wpforms"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-xing" /><i class="fa fa-xing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-xing-square" /><i class="fa fa-xing-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-y-combinator" /><i class="fa fa-y-combinator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-y-combinator-square" /><i class="fa fa-y-combinator-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yahoo" /><i class="fa fa-yahoo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yc" /><i class="fa fa-yc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yc-square" /><i class="fa fa-yc-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yelp" /><i class="fa fa-yelp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yoast" /><i class="fa fa-yoast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube" /><i class="fa fa-youtube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-play" /><i class="fa fa-youtube-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-square" /><i class="fa fa-youtube-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ambulance" /><i class="fa fa-ambulance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-h-square" /><i class="fa fa-h-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart" /><i class="fa fa-heart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart-o" /><i class="fa fa-heart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heartbeat" /><i class="fa fa-heartbeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hospital-o" /><i class="fa fa-hospital-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-medkit" /><i class="fa fa-medkit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stethoscope" /><i class="fa fa-stethoscope"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-md" /><i class="fa fa-user-md"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-kitchen-set" /><i class="fa-solid fa-kitchen-set"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-fire-burner" /><i class="fa-solid fa-fire-burner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-plate-utensils" /><i class="fa-solid fa-plate-utensils"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-coffee-pot" /><i class="fa-solid fa-coffee-pot"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-microwave" /><i class="fa-solid fa-microwave"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-regular fa-chair" /><i class="fa-regular fa-chair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-bed-front" /><i class="fa-solid fa-bed-front"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-clothes-hanger" /><i class="fa-solid fa-clothes-hanger"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-tv-retro" /><i class="fa-solid fa-tv-retro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-router" /><i class="fa-solid fa-router"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-air-conditioner" /><i class="fa-solid fa-air-conditioner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-spray-can-sparkles" /><i class="fa-solid fa-spray-can-sparkles"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-chalkboard-user" /><i class="fa-solid fa-chalkboard-user"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-pot-food" /><i class="fa-solid fa-pot-food"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-blanket" /><i class="fa-solid fa-blanket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-stapler" /><i class="fa-solid fa-stapler"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-heat" /><i class="fa-solid fa-heat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-person-to-door" /><i class="fa-solid fa-person-to-door"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-dumbbell" /><i class="fa-solid fa-dumbbell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-dumbbell" /><i class="fa-solid fa-dumbbell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-elevator" /><i class="fa-solid fa-elevator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-fire-extinguisher" /><i class="fa-solid fa-fire-extinguisher"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-regular fa-house-building" /><i class="fa-regular fa-house-building"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-person-swimming" /><i class="fa-solid fa-person-swimming"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-water-ladder" /><i class="fa-solid fa-water-ladder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-square-parking" /><i class="fa-solid fa-square-parking"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-washing-machine" /><i class="fa-solid fa-washing-machine"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-sensor-fire" /><i class="fa-solid fa-sensor-fire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-family" /><i class="fa-solid fa-family"></i></label></li>
                            </ul>
                        </div>
                    </div>
                    <div class="step">
                        <label>Selected Icon</label>
                        <div class="selectedIcon"><label></label><input type="text" name="selectedIcon" required></div>
                    </div>
                    <div class="step">
                        <label for="status32" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="status32" value="1" />
                            <label class="onoffswitch-label" for="status32">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- update building Amenities -->
<div class="modal fade modalshg dashboardBuildingAmenitiesUpdate" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="updateAmenity2" method="post" action="{{ route('dashboardBuildingAmenitiesUpdate') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" />
            <input type="hidden" name="old" />
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Update Building Amenity</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label>Icon</label>
                        <div class="icon_lists">
                            <ul>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book" /><i class="fa fa-address-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book-o" /><i class="fa fa-address-book-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card" /><i class="fa fa-address-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card-o" /><i class="fa fa-address-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bandcamp" /><i class="fa fa-bandcamp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bath" /><i class="fa fa-bath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bathtub" /><i class="fa fa-bathtub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license" /><i class="fa fa-drivers-license"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license-o" /><i class="fa fa-drivers-license-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eercast" /><i class="fa fa-eercast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open" /><i class="fa fa-envelope-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open-o" /><i class="fa fa-envelope-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-etsy" /><i class="fa fa-etsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-free-code-camp" /><i class="fa fa-free-code-camp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-grav" /><i class="fa fa-grav"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-handshake-o" /><i class="fa fa-handshake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-badge" /><i class="fa fa-id-badge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card" /><i class="fa fa-id-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card-o" /><i class="fa fa-id-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-imdb" /><i class="fa fa-imdb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linode" /><i class="fa fa-linode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meetup" /><i class="fa fa-meetup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microchip" /><i class="fa fa-microchip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-podcast" /><i class="fa fa-podcast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quora" /><i class="fa fa-quora"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ravelry" /><i class="fa fa-ravelry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-s15" /><i class="fa fa-s15"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shower" /><i class="fa fa-shower"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snowflake-o" /><i class="fa fa-snowflake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superpowers" /><i class="fa fa-superpowers"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-telegram" /><i class="fa fa-telegram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer" /><i class="fa fa-thermometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-0" /><i class="fa fa-thermometer-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-1" /><i class="fa fa-thermometer-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-2" /><i class="fa fa-thermometer-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-3" /><i class="fa fa-thermometer-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-4" /><i class="fa fa-thermometer-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-empty" /><i class="fa fa-thermometer-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-full" /><i class="fa fa-thermometer-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-half" /><i class="fa fa-thermometer-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-quarter" /><i class="fa fa-thermometer-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-three-quarters" /><i class="fa fa-thermometer-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle" /><i class="fa fa-times-rectangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle-o" /><i class="fa fa-times-rectangle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle" /><i class="fa fa-user-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle-o" /><i class="fa fa-user-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-o" /><i class="fa fa-user-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard" /><i class="fa fa-vcard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard-o" /><i class="fa fa-vcard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close" /><i class="fa fa-window-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close-o" /><i class="fa fa-window-close-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-maximize" /><i class="fa fa-window-maximize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-minimize" /><i class="fa fa-window-minimize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-restore" /><i class="fa fa-window-restore"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpexplorer" /><i class="fa fa-wpexplorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book" /><i class="fa fa-address-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-book-o" /><i class="fa fa-address-book-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card" /><i class="fa fa-address-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-address-card-o" /><i class="fa fa-address-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-adjust" /><i class="fa fa-adjust"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-american-sign-language-interpreting" /><i class="fa fa-american-sign-language-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-anchor" /><i class="fa fa-anchor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-archive" /><i class="fa fa-archive"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-area-chart" /><i class="fa fa-area-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows" /><i class="fa fa-arrows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-h" /><i class="fa fa-arrows-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-v" /><i class="fa fa-arrows-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asl-interpreting" /><i class="fa fa-asl-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-assistive-listening-systems" /><i class="fa fa-assistive-listening-systems"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asterisk" /><i class="fa fa-asterisk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-at" /><i class="fa fa-at"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-audio-description" /><i class="fa fa-audio-description"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-automobile" /><i class="fa fa-automobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-balance-scale" /><i class="fa fa-balance-scale"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ban" /><i class="fa fa-ban"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bank" /><i class="fa fa-bank"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart" /><i class="fa fa-bar-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart-o" /><i class="fa fa-bar-chart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-barcode" /><i class="fa fa-barcode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bars" /><i class="fa fa-bars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bath" /><i class="fa fa-bath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bathtub" /><i class="fa fa-bathtub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery" /><i class="fa fa-battery"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-0" /><i class="fa fa-battery-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-1" /><i class="fa fa-battery-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-2" /><i class="fa fa-battery-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-3" /><i class="fa fa-battery-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-4" /><i class="fa fa-battery-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-empty" /><i class="fa fa-battery-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-full" /><i class="fa fa-battery-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-half" /><i class="fa fa-battery-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-quarter" /><i class="fa fa-battery-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-battery-three-quarters" /><i class="fa fa-battery-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bed" /><i class="fa fa-bed"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-beer" /><i class="fa fa-beer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell" /><i class="fa fa-bell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-o" /><i class="fa fa-bell-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-slash" /><i class="fa fa-bell-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bell-slash-o" /><i class="fa fa-bell-slash-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bicycle" /><i class="fa fa-bicycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-binoculars" /><i class="fa fa-binoculars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-birthday-cake" /><i class="fa fa-birthday-cake"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-blind" /><i class="fa fa-blind"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth" /><i class="fa fa-bluetooth"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth-b" /><i class="fa fa-bluetooth-b"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bolt" /><i class="fa fa-bolt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bomb" /><i class="fa fa-bomb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-book" /><i class="fa fa-book"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bookmark" /><i class="fa fa-bookmark"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bookmark-o" /><i class="fa fa-bookmark-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-braille" /><i class="fa fa-braille"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-briefcase" /><i class="fa fa-briefcase"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bug" /><i class="fa fa-bug"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-building" /><i class="fa fa-building"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-building-o" /><i class="fa fa-building-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bullhorn" /><i class="fa fa-bullhorn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bullseye" /><i class="fa fa-bullseye"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bus" /><i class="fa fa-bus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cab" /><i class="fa fa-cab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calculator" /><i class="fa fa-calculator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar" /><i class="fa fa-calendar"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-check-o" /><i class="fa fa-calendar-check-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-minus-o" /><i class="fa fa-calendar-minus-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-o" /><i class="fa fa-calendar-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-plus-o" /><i class="fa fa-calendar-plus-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-calendar-times-o" /><i class="fa fa-calendar-times-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-camera" /><i class="fa fa-camera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-camera-retro" /><i class="fa fa-camera-retro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-car" /><i class="fa fa-car"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-down" /><i class="fa fa-caret-square-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-left" /><i class="fa fa-caret-square-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-right" /><i class="fa fa-caret-square-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-up" /><i class="fa fa-caret-square-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cart-arrow-down" /><i class="fa fa-cart-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cart-plus" /><i class="fa fa-cart-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc" /><i class="fa fa-cc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-certificate" /><i class="fa fa-certificate"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check" /><i class="fa fa-check"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-circle" /><i class="fa fa-check-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-circle-o" /><i class="fa fa-check-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square" /><i class="fa fa-check-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square-o" /><i class="fa fa-check-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-child" /><i class="fa fa-child"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle" /><i class="fa fa-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o" /><i class="fa fa-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o-notch" /><i class="fa fa-circle-o-notch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-thin" /><i class="fa fa-circle-thin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clock-o" /><i class="fa fa-clock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clone" /><i class="fa fa-clone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-close" /><i class="fa fa-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud" /><i class="fa fa-cloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud-download" /><i class="fa fa-cloud-download"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cloud-upload" /><i class="fa fa-cloud-upload"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-code" /><i class="fa fa-code"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-code-fork" /><i class="fa fa-code-fork"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-coffee" /><i class="fa fa-coffee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cog" /><i class="fa fa-cog"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cogs" /><i class="fa fa-cogs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comment" /><i class="fa fa-comment"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comment-o" /><i class="fa fa-comment-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-commenting" /><i class="fa fa-commenting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-commenting-o" /><i class="fa fa-commenting-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comments" /><i class="fa fa-comments"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-comments-o" /><i class="fa fa-comments-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-compass" /><i class="fa fa-compass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-copyright" /><i class="fa fa-copyright"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-creative-commons" /><i class="fa fa-creative-commons"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card" /><i class="fa fa-credit-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card-alt" /><i class="fa fa-credit-card-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-crop" /><i class="fa fa-crop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-crosshairs" /><i class="fa fa-crosshairs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cube" /><i class="fa fa-cube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cubes" /><i class="fa fa-cubes"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cutlery" /><i class="fa fa-cutlery"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dashboard" /><i class="fa fa-dashboard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-database" /><i class="fa fa-database"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deaf" /><i class="fa fa-deaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deafness" /><i class="fa fa-deafness"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-desktop" /><i class="fa fa-desktop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-diamond" /><i class="fa fa-diamond"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dot-circle-o" /><i class="fa fa-dot-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-download" /><i class="fa fa-download"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license" /><i class="fa fa-drivers-license"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drivers-license-o" /><i class="fa fa-drivers-license-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-edit" /><i class="fa fa-edit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ellipsis-h" /><i class="fa fa-ellipsis-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ellipsis-v" /><i class="fa fa-ellipsis-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope" /><i class="fa fa-envelope"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-o" /><i class="fa fa-envelope-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open" /><i class="fa fa-envelope-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-open-o" /><i class="fa fa-envelope-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envelope-square" /><i class="fa fa-envelope-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eraser" /><i class="fa fa-eraser"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exchange" /><i class="fa fa-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation" /><i class="fa fa-exclamation"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation-circle" /><i class="fa fa-exclamation-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exclamation-triangle" /><i class="fa fa-exclamation-triangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-external-link" /><i class="fa fa-external-link"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-external-link-square" /><i class="fa fa-external-link-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eye" /><i class="fa fa-eye"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eye-slash" /><i class="fa fa-eye-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eyedropper" /><i class="fa fa-eyedropper"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fax" /><i class="fa fa-fax"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-feed" /><i class="fa fa-feed"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-female" /><i class="fa fa-female"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fighter-jet" /><i class="fa fa-fighter-jet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-archive-o" /><i class="fa fa-file-archive-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-audio-o" /><i class="fa fa-file-audio-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-code-o" /><i class="fa fa-file-code-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-excel-o" /><i class="fa fa-file-excel-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-image-o" /><i class="fa fa-file-image-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-movie-o" /><i class="fa fa-file-movie-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-pdf-o" /><i class="fa fa-file-pdf-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-photo-o" /><i class="fa fa-file-photo-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-picture-o" /><i class="fa fa-file-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-powerpoint-o" /><i class="fa fa-file-powerpoint-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-sound-o" /><i class="fa fa-file-sound-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-video-o" /><i class="fa fa-file-video-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-word-o" /><i class="fa fa-file-word-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-zip-o" /><i class="fa fa-file-zip-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-film" /><i class="fa fa-film"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-filter" /><i class="fa fa-filter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fire" /><i class="fa fa-fire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fire-extinguisher" /><i class="fa fa-fire-extinguisher"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag" /><i class="fa fa-flag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag-checkered" /><i class="fa fa-flag-checkered"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flag-o" /><i class="fa fa-flag-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flash" /><i class="fa fa-flash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flask" /><i class="fa fa-flask"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder" /><i class="fa fa-folder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-o" /><i class="fa fa-folder-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-open" /><i class="fa fa-folder-open"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-folder-open-o" /><i class="fa fa-folder-open-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-frown-o" /><i class="fa fa-frown-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-futbol-o" /><i class="fa fa-futbol-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gamepad" /><i class="fa fa-gamepad"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gavel" /><i class="fa fa-gavel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gear" /><i class="fa fa-gear"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gears" /><i class="fa fa-gears"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gift" /><i class="fa fa-gift"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glass" /><i class="fa fa-glass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-globe" /><i class="fa fa-globe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-graduation-cap" /><i class="fa fa-graduation-cap"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-group" /><i class="fa fa-group"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-grab-o" /><i class="fa fa-hand-grab-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-lizard-o" /><i class="fa fa-hand-lizard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-paper-o" /><i class="fa fa-hand-paper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-peace-o" /><i class="fa fa-hand-peace-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-pointer-o" /><i class="fa fa-hand-pointer-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-rock-o" /><i class="fa fa-hand-rock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-scissors-o" /><i class="fa fa-hand-scissors-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-spock-o" /><i class="fa fa-hand-spock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-stop-o" /><i class="fa fa-hand-stop-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-handshake-o" /><i class="fa fa-handshake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hard-of-hearing" /><i class="fa fa-hard-of-hearing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hashtag" /><i class="fa fa-hashtag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hdd-o" /><i class="fa fa-hdd-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-headphones" /><i class="fa fa-headphones"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart" /><i class="fa fa-heart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart-o" /><i class="fa fa-heart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heartbeat" /><i class="fa fa-heartbeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-history" /><i class="fa fa-history"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-home" /><i class="fa fa-home"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hotel" /><i class="fa fa-hotel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass" /><i class="fa fa-hourglass"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-1" /><i class="fa fa-hourglass-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-2" /><i class="fa fa-hourglass-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-3" /><i class="fa fa-hourglass-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-end" /><i class="fa fa-hourglass-end"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-half" /><i class="fa fa-hourglass-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-o" /><i class="fa fa-hourglass-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hourglass-start" /><i class="fa fa-hourglass-start"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-i-cursor" /><i class="fa fa-i-cursor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-badge" /><i class="fa fa-id-badge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card" /><i class="fa fa-id-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-id-card-o" /><i class="fa fa-id-card-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-image" /><i class="fa fa-image"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-inbox" /><i class="fa fa-inbox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-industry" /><i class="fa fa-industry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-info" /><i class="fa fa-info"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-info-circle" /><i class="fa fa-info-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-institution" /><i class="fa fa-institution"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-key" /><i class="fa fa-key"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-keyboard-o" /><i class="fa fa-keyboard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-language" /><i class="fa fa-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-laptop" /><i class="fa fa-laptop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-leaf" /><i class="fa fa-leaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-legal" /><i class="fa fa-legal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lemon-o" /><i class="fa fa-lemon-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-level-down" /><i class="fa fa-level-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-level-up" /><i class="fa fa-level-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-bouy" /><i class="fa fa-life-bouy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-buoy" /><i class="fa fa-life-buoy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-ring" /><i class="fa fa-life-ring"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-life-saver" /><i class="fa fa-life-saver"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lightbulb-o" /><i class="fa fa-lightbulb-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-line-chart" /><i class="fa fa-line-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-location-arrow" /><i class="fa fa-location-arrow"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lock" /><i class="fa fa-lock"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-low-vision" /><i class="fa fa-low-vision"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-magic" /><i class="fa fa-magic"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-magnet" /><i class="fa fa-magnet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-forward" /><i class="fa fa-mail-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-reply" /><i class="fa fa-mail-reply"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mail-reply-all" /><i class="fa fa-mail-reply-all"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-male" /><i class="fa fa-male"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map" /><i class="fa fa-map"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-marker" /><i class="fa fa-map-marker"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-o" /><i class="fa fa-map-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-pin" /><i class="fa fa-map-pin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-map-signs" /><i class="fa fa-map-signs"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meh-o" /><i class="fa fa-meh-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microchip" /><i class="fa fa-microchip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microphone" /><i class="fa fa-microphone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-microphone-slash" /><i class="fa fa-microphone-slash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus" /><i class="fa fa-minus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-circle" /><i class="fa fa-minus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square" /><i class="fa fa-minus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square-o" /><i class="fa fa-minus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mobile" /><i class="fa fa-mobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mobile-phone" /><i class="fa fa-mobile-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-money" /><i class="fa fa-money"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-moon-o" /><i class="fa fa-moon-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mortar-board" /><i class="fa fa-mortar-board"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-motorcycle" /><i class="fa fa-motorcycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mouse-pointer" /><i class="fa fa-mouse-pointer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-music" /><i class="fa fa-music"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-navicon" /><i class="fa fa-navicon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-newspaper-o" /><i class="fa fa-newspaper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-object-group" /><i class="fa fa-object-group"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-object-ungroup" /><i class="fa fa-object-ungroup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paint-brush" /><i class="fa fa-paint-brush"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paper-plane" /><i class="fa fa-paper-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paper-plane-o" /><i class="fa fa-paper-plane-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paw" /><i class="fa fa-paw"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil" /><i class="fa fa-pencil"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil-square" /><i class="fa fa-pencil-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pencil-square-o" /><i class="fa fa-pencil-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-percent" /><i class="fa fa-percent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-phone" /><i class="fa fa-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-phone-square" /><i class="fa fa-phone-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-photo" /><i class="fa fa-photo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-picture-o" /><i class="fa fa-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pie-chart" /><i class="fa fa-pie-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plane" /><i class="fa fa-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plug" /><i class="fa fa-plug"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus" /><i class="fa fa-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-circle" /><i class="fa fa-plus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square-o" /><i class="fa fa-plus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-podcast" /><i class="fa fa-podcast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-power-off" /><i class="fa fa-power-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-print" /><i class="fa fa-print"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-puzzle-piece" /><i class="fa fa-puzzle-piece"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-qrcode" /><i class="fa fa-qrcode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question" /><i class="fa fa-question"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle" /><i class="fa fa-question-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle-o" /><i class="fa fa-question-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quote-left" /><i class="fa fa-quote-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quote-right" /><i class="fa fa-quote-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-random" /><i class="fa fa-random"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-recycle" /><i class="fa fa-recycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-refresh" /><i class="fa fa-refresh"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-registered" /><i class="fa fa-registered"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-remove" /><i class="fa fa-remove"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reorder" /><i class="fa fa-reorder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reply" /><i class="fa fa-reply"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reply-all" /><i class="fa fa-reply-all"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-retweet" /><i class="fa fa-retweet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-road" /><i class="fa fa-road"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rocket" /><i class="fa fa-rocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rss" /><i class="fa fa-rss"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rss-square" /><i class="fa fa-rss-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-s15" /><i class="fa fa-s15"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search" /><i class="fa fa-search"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search-minus" /><i class="fa fa-search-minus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-search-plus" /><i class="fa fa-search-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-send" /><i class="fa fa-send"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-send-o" /><i class="fa fa-send-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-server" /><i class="fa fa-server"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share" /><i class="fa fa-share"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt" /><i class="fa fa-share-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt-square" /><i class="fa fa-share-alt-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-square" /><i class="fa fa-share-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-square-o" /><i class="fa fa-share-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shield" /><i class="fa fa-shield"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ship" /><i class="fa fa-ship"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-bag" /><i class="fa fa-shopping-bag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-basket" /><i class="fa fa-shopping-basket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shopping-cart" /><i class="fa fa-shopping-cart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shower" /><i class="fa fa-shower"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-in" /><i class="fa fa-sign-in"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-language" /><i class="fa fa-sign-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-out" /><i class="fa fa-sign-out"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signal" /><i class="fa fa-signal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signing" /><i class="fa fa-signing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sitemap" /><i class="fa fa-sitemap"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sliders" /><i class="fa fa-sliders"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-smile-o" /><i class="fa fa-smile-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snowflake-o" /><i class="fa fa-snowflake-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-soccer-ball-o" /><i class="fa fa-soccer-ball-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort" /><i class="fa fa-sort"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-alpha-asc" /><i class="fa fa-sort-alpha-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-alpha-desc" /><i class="fa fa-sort-alpha-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-amount-asc" /><i class="fa fa-sort-amount-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-amount-desc" /><i class="fa fa-sort-amount-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-asc" /><i class="fa fa-sort-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-desc" /><i class="fa fa-sort-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-down" /><i class="fa fa-sort-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-numeric-asc" /><i class="fa fa-sort-numeric-asc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-numeric-desc" /><i class="fa fa-sort-numeric-desc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sort-up" /><i class="fa fa-sort-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-space-shuttle" /><i class="fa fa-space-shuttle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spinner" /><i class="fa fa-spinner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spoon" /><i class="fa fa-spoon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square" /><i class="fa fa-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square-o" /><i class="fa fa-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star" /><i class="fa fa-star"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half" /><i class="fa fa-star-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-empty" /><i class="fa fa-star-half-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-full" /><i class="fa fa-star-half-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-half-o" /><i class="fa fa-star-half-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-star-o" /><i class="fa fa-star-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sticky-note" /><i class="fa fa-sticky-note"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sticky-note-o" /><i class="fa fa-sticky-note-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-street-view" /><i class="fa fa-street-view"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-suitcase" /><i class="fa fa-suitcase"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sun-o" /><i class="fa fa-sun-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-support" /><i class="fa fa-support"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tablet" /><i class="fa fa-tablet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tachometer" /><i class="fa fa-tachometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tag" /><i class="fa fa-tag"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tags" /><i class="fa fa-tags"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tasks" /><i class="fa fa-tasks"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-taxi" /><i class="fa fa-taxi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-television" /><i class="fa fa-television"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-terminal" /><i class="fa fa-terminal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer" /><i class="fa fa-thermometer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-0" /><i class="fa fa-thermometer-0"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-1" /><i class="fa fa-thermometer-1"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-2" /><i class="fa fa-thermometer-2"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-3" /><i class="fa fa-thermometer-3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-4" /><i class="fa fa-thermometer-4"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-empty" /><i class="fa fa-thermometer-empty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-full" /><i class="fa fa-thermometer-full"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-half" /><i class="fa fa-thermometer-half"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-quarter" /><i class="fa fa-thermometer-quarter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thermometer-three-quarters" /><i class="fa fa-thermometer-three-quarters"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumb-tack" /><i class="fa fa-thumb-tack"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-down" /><i class="fa fa-thumbs-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-down" /><i class="fa fa-thumbs-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-up" /><i class="fa fa-thumbs-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-up" /><i class="fa fa-thumbs-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ticket" /><i class="fa fa-ticket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times" /><i class="fa fa-times"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-circle" /><i class="fa fa-times-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-circle-o" /><i class="fa fa-times-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle" /><i class="fa fa-times-rectangle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-times-rectangle-o" /><i class="fa fa-times-rectangle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tint" /><i class="fa fa-tint"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-down" /><i class="fa fa-toggle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-left" /><i class="fa fa-toggle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-off" /><i class="fa fa-toggle-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-on" /><i class="fa fa-toggle-on"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-right" /><i class="fa fa-toggle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-up" /><i class="fa fa-toggle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trademark" /><i class="fa fa-trademark"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trash" /><i class="fa fa-trash"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trash-o" /><i class="fa fa-trash-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tree" /><i class="fa fa-tree"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trophy" /><i class="fa fa-trophy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-truck" /><i class="fa fa-truck"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tty" /><i class="fa fa-tty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tv" /><i class="fa fa-tv"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-umbrella" /><i class="fa fa-umbrella"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-universal-access" /><i class="fa fa-universal-access"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-university" /><i class="fa fa-university"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlock" /><i class="fa fa-unlock"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlock-alt" /><i class="fa fa-unlock-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unsorted" /><i class="fa fa-unsorted"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-upload" /><i class="fa fa-upload"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user" /><i class="fa fa-user"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle" /><i class="fa fa-user-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-circle-o" /><i class="fa fa-user-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-o" /><i class="fa fa-user-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-plus" /><i class="fa fa-user-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-secret" /><i class="fa fa-user-secret"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-times" /><i class="fa fa-user-times"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-users" /><i class="fa fa-users"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard" /><i class="fa fa-vcard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vcard-o" /><i class="fa fa-vcard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-video-camera" /><i class="fa fa-video-camera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-control-phone" /><i class="fa fa-volume-control-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-down" /><i class="fa fa-volume-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-off" /><i class="fa fa-volume-off"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-up" /><i class="fa fa-volume-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-warning" /><i class="fa fa-warning"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wifi" /><i class="fa fa-wifi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close" /><i class="fa fa-window-close"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-close-o" /><i class="fa fa-window-close-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-maximize" /><i class="fa fa-window-maximize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-minimize" /><i class="fa fa-window-minimize"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-window-restore" /><i class="fa fa-window-restore"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wrench" /><i class="fa fa-wrench"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-american-sign-language-interpreting" /><i class="fa fa-american-sign-language-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-asl-interpreting" /><i class="fa fa-asl-interpreting"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-assistive-listening-systems" /><i class="fa fa-assistive-listening-systems"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-audio-description" /><i class="fa fa-audio-description"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-blind" /><i class="fa fa-blind"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-braille" /><i class="fa fa-braille"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc" /><i class="fa fa-cc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deaf" /><i class="fa fa-deaf"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deafness" /><i class="fa fa-deafness"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hard-of-hearing" /><i class="fa fa-hard-of-hearing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-low-vision" /><i class="fa fa-low-vision"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-question-circle-o" /><i class="fa fa-question-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sign-language" /><i class="fa fa-sign-language"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-signing" /><i class="fa fa-signing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tty" /><i class="fa fa-tty"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-universal-access" /><i class="fa fa-universal-access"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-volume-control-phone" /><i class="fa fa-volume-control-phone"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-grab-o" /><i class="fa fa-hand-grab-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-lizard-o" /><i class="fa fa-hand-lizard-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-down" /><i class="fa fa-hand-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-left" /><i class="fa fa-hand-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-right" /><i class="fa fa-hand-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-up" /><i class="fa fa-hand-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-paper-o" /><i class="fa fa-hand-paper-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-peace-o" /><i class="fa fa-hand-peace-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-pointer-o" /><i class="fa fa-hand-pointer-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-rock-o" /><i class="fa fa-hand-rock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-scissors-o" /><i class="fa fa-hand-scissors-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-spock-o" /><i class="fa fa-hand-spock-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-stop-o" /><i class="fa fa-hand-stop-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-down" /><i class="fa fa-thumbs-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-down" /><i class="fa fa-thumbs-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-o-up" /><i class="fa fa-thumbs-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-thumbs-up" /><i class="fa fa-thumbs-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ambulance" /><i class="fa fa-ambulance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-automobile" /><i class="fa fa-automobile"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bicycle" /><i class="fa fa-bicycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bus" /><i class="fa fa-bus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cab" /><i class="fa fa-cab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-car" /><i class="fa fa-car"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fighter-jet" /><i class="fa fa-fighter-jet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-motorcycle" /><i class="fa fa-motorcycle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plane" /><i class="fa fa-plane"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rocket" /><i class="fa fa-rocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ship" /><i class="fa fa-ship"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-space-shuttle" /><i class="fa fa-space-shuttle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-subway" /><i class="fa fa-subway"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-taxi" /><i class="fa fa-taxi"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-train" /><i class="fa fa-train"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-truck" /><i class="fa fa-truck"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-genderless" /><i class="fa fa-genderless"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-intersex" /><i class="fa fa-intersex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars" /><i class="fa fa-mars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-double" /><i class="fa fa-mars-double"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke" /><i class="fa fa-mars-stroke"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke-h" /><i class="fa fa-mars-stroke-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mars-stroke-v" /><i class="fa fa-mars-stroke-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mercury" /><i class="fa fa-mercury"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-neuter" /><i class="fa fa-neuter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-transgender" /><i class="fa fa-transgender"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-transgender-alt" /><i class="fa fa-transgender-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus" /><i class="fa fa-venus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus-double" /><i class="fa fa-venus-double"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-venus-mars" /><i class="fa fa-venus-mars"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file" /><i class="fa fa-file"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-archive-o" /><i class="fa fa-file-archive-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-audio-o" /><i class="fa fa-file-audio-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-code-o" /><i class="fa fa-file-code-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-excel-o" /><i class="fa fa-file-excel-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-image-o" /><i class="fa fa-file-image-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-movie-o" /><i class="fa fa-file-movie-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-o" /><i class="fa fa-file-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-pdf-o" /><i class="fa fa-file-pdf-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-photo-o" /><i class="fa fa-file-photo-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-picture-o" /><i class="fa fa-file-picture-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-powerpoint-o" /><i class="fa fa-file-powerpoint-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-sound-o" /><i class="fa fa-file-sound-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text" /><i class="fa fa-file-text"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text-o" /><i class="fa fa-file-text-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-video-o" /><i class="fa fa-file-video-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-word-o" /><i class="fa fa-file-word-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-zip-o" /><i class="fa fa-file-zip-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o-notch" /><i class="fa fa-circle-o-notch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cog" /><i class="fa fa-cog"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gear" /><i class="fa fa-gear"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-refresh" /><i class="fa fa-refresh"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spinner" /><i class="fa fa-spinner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square" /><i class="fa fa-check-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-check-square-o" /><i class="fa fa-check-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle" /><i class="fa fa-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-circle-o" /><i class="fa fa-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dot-circle-o" /><i class="fa fa-dot-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square" /><i class="fa fa-minus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-minus-square-o" /><i class="fa fa-minus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square-o" /><i class="fa fa-plus-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square" /><i class="fa fa-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-square-o" /><i class="fa fa-square-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-amex" /><i class="fa fa-cc-amex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-diners-club" /><i class="fa fa-cc-diners-club"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-discover" /><i class="fa fa-cc-discover"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-jcb" /><i class="fa fa-cc-jcb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-mastercard" /><i class="fa fa-cc-mastercard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-paypal" /><i class="fa fa-cc-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-stripe" /><i class="fa fa-cc-stripe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-visa" /><i class="fa fa-cc-visa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card" /><i class="fa fa-credit-card"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-credit-card-alt" /><i class="fa fa-credit-card-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-wallet" /><i class="fa fa-google-wallet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paypal" /><i class="fa fa-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-area-chart" /><i class="fa fa-area-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart" /><i class="fa fa-bar-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bar-chart-o" /><i class="fa fa-bar-chart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-line-chart" /><i class="fa fa-line-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pie-chart" /><i class="fa fa-pie-chart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitcoin" /><i class="fa fa-bitcoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-btc" /><i class="fa fa-btc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cny" /><i class="fa fa-cny"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dollar" /><i class="fa fa-dollar"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eur" /><i class="fa fa-eur"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-euro" /><i class="fa fa-euro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gbp" /><i class="fa fa-gbp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg" /><i class="fa fa-gg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg-circle" /><i class="fa fa-gg-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ils" /><i class="fa fa-ils"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-inr" /><i class="fa fa-inr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-jpy" /><i class="fa fa-jpy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-krw" /><i class="fa fa-krw"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-money" /><i class="fa fa-money"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rmb" /><i class="fa fa-rmb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rouble" /><i class="fa fa-rouble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rub" /><i class="fa fa-rub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ruble" /><i class="fa fa-ruble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rupee" /><i class="fa fa-rupee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shekel" /><i class="fa fa-shekel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sheqel" /><i class="fa fa-sheqel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-try" /><i class="fa fa-try"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-turkish-lira" /><i class="fa fa-turkish-lira"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-usd" /><i class="fa fa-usd"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viacoin" /><i class="fa fa-viacoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-won" /><i class="fa fa-won"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yen" /><i class="fa fa-yen"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-center" /><i class="fa fa-align-center"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-justify" /><i class="fa fa-align-justify"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-left" /><i class="fa fa-align-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-align-right" /><i class="fa fa-align-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bold" /><i class="fa fa-bold"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chain" /><i class="fa fa-chain"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chain-broken" /><i class="fa fa-chain-broken"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-clipboard" /><i class="fa fa-clipboard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-columns" /><i class="fa fa-columns"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-copy" /><i class="fa fa-copy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cut" /><i class="fa fa-cut"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dedent" /><i class="fa fa-dedent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eraser" /><i class="fa fa-eraser"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file" /><i class="fa fa-file"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-o" /><i class="fa fa-file-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text" /><i class="fa fa-file-text"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-file-text-o" /><i class="fa fa-file-text-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-files-o" /><i class="fa fa-files-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-floppy-o" /><i class="fa fa-floppy-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-font" /><i class="fa fa-font"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-header" /><i class="fa fa-header"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-indent" /><i class="fa fa-indent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-italic" /><i class="fa fa-italic"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-link" /><i class="fa fa-link"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list" /><i class="fa fa-list"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-alt" /><i class="fa fa-list-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-ol" /><i class="fa fa-list-ol"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-list-ul" /><i class="fa fa-list-ul"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-outdent" /><i class="fa fa-outdent"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paperclip" /><i class="fa fa-paperclip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paragraph" /><i class="fa fa-paragraph"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paste" /><i class="fa fa-paste"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-repeat" /><i class="fa fa-repeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rotate-left" /><i class="fa fa-rotate-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rotate-right" /><i class="fa fa-rotate-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-save" /><i class="fa fa-save"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-scissors" /><i class="fa fa-scissors"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-strikethrough" /><i class="fa fa-strikethrough"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-subscript" /><i class="fa fa-subscript"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superscript" /><i class="fa fa-superscript"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-table" /><i class="fa fa-table"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-text-height" /><i class="fa fa-text-height"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-text-width" /><i class="fa fa-text-width"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th" /><i class="fa fa-th"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th-large" /><i class="fa fa-th-large"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-th-list" /><i class="fa fa-th-list"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-underline" /><i class="fa fa-underline"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-undo" /><i class="fa fa-undo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-unlink" /><i class="fa fa-unlink"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-down" /><i class="fa fa-angle-double-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-left" /><i class="fa fa-angle-double-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-right" /><i class="fa fa-angle-double-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-double-up" /><i class="fa fa-angle-double-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-down" /><i class="fa fa-angle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-left" /><i class="fa fa-angle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-right" /><i class="fa fa-angle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angle-up" /><i class="fa fa-angle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-down" /><i class="fa fa-arrow-circle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-left" /><i class="fa fa-arrow-circle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-down" /><i class="fa fa-arrow-circle-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-left" /><i class="fa fa-arrow-circle-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-right" /><i class="fa fa-arrow-circle-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-o-up" /><i class="fa fa-arrow-circle-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-right" /><i class="fa fa-arrow-circle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-circle-up" /><i class="fa fa-arrow-circle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-down" /><i class="fa fa-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-left" /><i class="fa fa-arrow-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-right" /><i class="fa fa-arrow-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrow-up" /><i class="fa fa-arrow-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows" /><i class="fa fa-arrows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-alt" /><i class="fa fa-arrows-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-h" /><i class="fa fa-arrows-h"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-v" /><i class="fa fa-arrows-v"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-down" /><i class="fa fa-caret-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-left" /><i class="fa fa-caret-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-right" /><i class="fa fa-caret-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-down" /><i class="fa fa-caret-square-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-left" /><i class="fa fa-caret-square-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-right" /><i class="fa fa-caret-square-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-square-o-up" /><i class="fa fa-caret-square-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-caret-up" /><i class="fa fa-caret-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-down" /><i class="fa fa-chevron-circle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-left" /><i class="fa fa-chevron-circle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-right" /><i class="fa fa-chevron-circle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-circle-up" /><i class="fa fa-chevron-circle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-down" /><i class="fa fa-chevron-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-left" /><i class="fa fa-chevron-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-right" /><i class="fa fa-chevron-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chevron-up" /><i class="fa fa-chevron-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-exchange" /><i class="fa fa-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-down" /><i class="fa fa-hand-o-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-left" /><i class="fa fa-hand-o-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-right" /><i class="fa fa-hand-o-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hand-o-up" /><i class="fa fa-hand-o-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-down" /><i class="fa fa-long-arrow-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-left" /><i class="fa fa-long-arrow-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-right" /><i class="fa fa-long-arrow-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-long-arrow-up" /><i class="fa fa-long-arrow-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-down" /><i class="fa fa-toggle-down"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-left" /><i class="fa fa-toggle-left"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-right" /><i class="fa fa-toggle-right"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-toggle-up" /><i class="fa fa-toggle-up"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-arrows-alt" /><i class="fa fa-arrows-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-backward" /><i class="fa fa-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-compress" /><i class="fa fa-compress"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eject" /><i class="fa fa-eject"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-expand" /><i class="fa fa-expand"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fast-backward" /><i class="fa fa-fast-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fast-forward" /><i class="fa fa-fast-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-forward" /><i class="fa fa-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause" /><i class="fa fa-pause"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause-circle" /><i class="fa fa-pause-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pause-circle-o" /><i class="fa fa-pause-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play" /><i class="fa fa-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play-circle" /><i class="fa fa-play-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-play-circle-o" /><i class="fa fa-play-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-random" /><i class="fa fa-random"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-step-backward" /><i class="fa fa-step-backward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-step-forward" /><i class="fa fa-step-forward"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop" /><i class="fa fa-stop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop-circle" /><i class="fa fa-stop-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stop-circle-o" /><i class="fa fa-stop-circle-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-play" /><i class="fa fa-youtube-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-500px" /><i class="fa fa-500px"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-adn" /><i class="fa fa-adn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-amazon" /><i class="fa fa-amazon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-android" /><i class="fa fa-android"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-angellist" /><i class="fa fa-angellist"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-apple" /><i class="fa fa-apple"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bandcamp" /><i class="fa fa-bandcamp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-behance" /><i class="fa fa-behance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-behance-square" /><i class="fa fa-behance-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitbucket" /><i class="fa fa-bitbucket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitbucket-square" /><i class="fa fa-bitbucket-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bitcoin" /><i class="fa fa-bitcoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-black-tie" /><i class="fa fa-black-tie"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth" /><i class="fa fa-bluetooth"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-bluetooth-b" /><i class="fa fa-bluetooth-b"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-btc" /><i class="fa fa-btc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-buysellads" /><i class="fa fa-buysellads"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-amex" /><i class="fa fa-cc-amex"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-diners-club" /><i class="fa fa-cc-diners-club"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-discover" /><i class="fa fa-cc-discover"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-jcb" /><i class="fa fa-cc-jcb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-mastercard" /><i class="fa fa-cc-mastercard"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-paypal" /><i class="fa fa-cc-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-stripe" /><i class="fa fa-cc-stripe"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-cc-visa" /><i class="fa fa-cc-visa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-chrome" /><i class="fa fa-chrome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-codepen" /><i class="fa fa-codepen"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-codiepie" /><i class="fa fa-codiepie"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-connectdevelop" /><i class="fa fa-connectdevelop"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-contao" /><i class="fa fa-contao"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-css3" /><i class="fa fa-css3"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dashcube" /><i class="fa fa-dashcube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-delicious" /><i class="fa fa-delicious"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-deviantart" /><i class="fa fa-deviantart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-digg" /><i class="fa fa-digg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dribbble" /><i class="fa fa-dribbble"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-dropbox" /><i class="fa fa-dropbox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-drupal" /><i class="fa fa-drupal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-edge" /><i class="fa fa-edge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-eercast" /><i class="fa fa-eercast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-empire" /><i class="fa fa-empire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-envira" /><i class="fa fa-envira"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-etsy" /><i class="fa fa-etsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-expeditedssl" /><i class="fa fa-expeditedssl"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fa" /><i class="fa fa-fa"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook" /><i class="fa fa-facebook"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-f" /><i class="fa fa-facebook-f"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-official" /><i class="fa fa-facebook-official"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-facebook-square" /><i class="fa fa-facebook-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-firefox" /><i class="fa fa-firefox"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-first-order" /><i class="fa fa-first-order"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-flickr" /><i class="fa fa-flickr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-font-awesome" /><i class="fa fa-font-awesome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fonticons" /><i class="fa fa-fonticons"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-fort-awesome" /><i class="fa fa-fort-awesome"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-forumbee" /><i class="fa fa-forumbee"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-foursquare" /><i class="fa fa-foursquare"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-free-code-camp" /><i class="fa fa-free-code-camp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ge" /><i class="fa fa-ge"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-get-pocket" /><i class="fa fa-get-pocket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg" /><i class="fa fa-gg"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gg-circle" /><i class="fa fa-gg-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-git" /><i class="fa fa-git"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-git-square" /><i class="fa fa-git-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github" /><i class="fa fa-github"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github-alt" /><i class="fa fa-github-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-github-square" /><i class="fa fa-github-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gitlab" /><i class="fa fa-gitlab"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gittip" /><i class="fa fa-gittip"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glide" /><i class="fa fa-glide"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-glide-g" /><i class="fa fa-glide-g"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google" /><i class="fa fa-google"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus" /><i class="fa fa-google-plus"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-circle" /><i class="fa fa-google-plus-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-official" /><i class="fa fa-google-plus-official"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-plus-square" /><i class="fa fa-google-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-google-wallet" /><i class="fa fa-google-wallet"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-gratipay" /><i class="fa fa-gratipay"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-grav" /><i class="fa fa-grav"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hacker-news" /><i class="fa fa-hacker-news"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-houzz" /><i class="fa fa-houzz"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-html5" /><i class="fa fa-html5"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-imdb" /><i class="fa fa-imdb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-instagram" /><i class="fa fa-instagram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-internet-explorer" /><i class="fa fa-internet-explorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ioxhost" /><i class="fa fa-ioxhost"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-joomla" /><i class="fa fa-joomla"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-jsfiddle" /><i class="fa fa-jsfiddle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lastfm" /><i class="fa fa-lastfm"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-lastfm-square" /><i class="fa fa-lastfm-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-leanpub" /><i class="fa fa-leanpub"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linkedin" /><i class="fa fa-linkedin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linkedin-square" /><i class="fa fa-linkedin-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linode" /><i class="fa fa-linode"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-linux" /><i class="fa fa-linux"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-maxcdn" /><i class="fa fa-maxcdn"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meanpath" /><i class="fa fa-meanpath"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-medium" /><i class="fa fa-medium"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-meetup" /><i class="fa fa-meetup"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-mixcloud" /><i class="fa fa-mixcloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-modx" /><i class="fa fa-modx"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-odnoklassniki" /><i class="fa fa-odnoklassniki"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-odnoklassniki-square" /><i class="fa fa-odnoklassniki-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-opencart" /><i class="fa fa-opencart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-openid" /><i class="fa fa-openid"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-opera" /><i class="fa fa-opera"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-optin-monster" /><i class="fa fa-optin-monster"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pagelines" /><i class="fa fa-pagelines"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-paypal" /><i class="fa fa-paypal"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper" /><i class="fa fa-pied-piper"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper-alt" /><i class="fa fa-pied-piper-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pied-piper-pp" /><i class="fa fa-pied-piper-pp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest" /><i class="fa fa-pinterest"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest-p" /><i class="fa fa-pinterest-p"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-pinterest-square" /><i class="fa fa-pinterest-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-product-hunt" /><i class="fa fa-product-hunt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-qq" /><i class="fa fa-qq"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-quora" /><i class="fa fa-quora"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ra" /><i class="fa fa-ra"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ravelry" /><i class="fa fa-ravelry"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-rebel" /><i class="fa fa-rebel"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit" /><i class="fa fa-reddit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit-alien" /><i class="fa fa-reddit-alien"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-reddit-square" /><i class="fa fa-reddit-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-renren" /><i class="fa fa-renren"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-resistance" /><i class="fa fa-resistance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-safari" /><i class="fa fa-safari"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-scribd" /><i class="fa fa-scribd"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-sellsy" /><i class="fa fa-sellsy"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt" /><i class="fa fa-share-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-share-alt-square" /><i class="fa fa-share-alt-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-shirtsinbulk" /><i class="fa fa-shirtsinbulk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-simplybuilt" /><i class="fa fa-simplybuilt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-skyatlas" /><i class="fa fa-skyatlas"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-skype" /><i class="fa fa-skype"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-slack" /><i class="fa fa-slack"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-slideshare" /><i class="fa fa-slideshare"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat" /><i class="fa fa-snapchat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat-ghost" /><i class="fa fa-snapchat-ghost"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-snapchat-square" /><i class="fa fa-snapchat-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-soundcloud" /><i class="fa fa-soundcloud"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-spotify" /><i class="fa fa-spotify"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stack-exchange" /><i class="fa fa-stack-exchange"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stack-overflow" /><i class="fa fa-stack-overflow"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-steam" /><i class="fa fa-steam"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-steam-square" /><i class="fa fa-steam-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stumbleupon" /><i class="fa fa-stumbleupon"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stumbleupon-circle" /><i class="fa fa-stumbleupon-circle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-superpowers" /><i class="fa fa-superpowers"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-telegram" /><i class="fa fa-telegram"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tencent-weibo" /><i class="fa fa-tencent-weibo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-themeisle" /><i class="fa fa-themeisle"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-trello" /><i class="fa fa-trello"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tripadvisor" /><i class="fa fa-tripadvisor"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tumblr" /><i class="fa fa-tumblr"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-tumblr-square" /><i class="fa fa-tumblr-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitch" /><i class="fa fa-twitch"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitter" /><i class="fa fa-twitter"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-twitter-square" /><i class="fa fa-twitter-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-usb" /><i class="fa fa-usb"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viacoin" /><i class="fa fa-viacoin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viadeo" /><i class="fa fa-viadeo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-viadeo-square" /><i class="fa fa-viadeo-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vimeo" /><i class="fa fa-vimeo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vimeo-square" /><i class="fa fa-vimeo-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vine" /><i class="fa fa-vine"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-vk" /><i class="fa fa-vk"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wechat" /><i class="fa fa-wechat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-weibo" /><i class="fa fa-weibo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-weixin" /><i class="fa fa-weixin"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-whatsapp" /><i class="fa fa-whatsapp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wikipedia-w" /><i class="fa fa-wikipedia-w"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-windows" /><i class="fa fa-windows"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wordpress" /><i class="fa fa-wordpress"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpbeginner" /><i class="fa fa-wpbeginner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpexplorer" /><i class="fa fa-wpexplorer"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wpforms" /><i class="fa fa-wpforms"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-xing" /><i class="fa fa-xing"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-xing-square" /><i class="fa fa-xing-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-y-combinator" /><i class="fa fa-y-combinator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-y-combinator-square" /><i class="fa fa-y-combinator-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yahoo" /><i class="fa fa-yahoo"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yc" /><i class="fa fa-yc"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yc-square" /><i class="fa fa-yc-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yelp" /><i class="fa fa-yelp"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-yoast" /><i class="fa fa-yoast"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube" /><i class="fa fa-youtube"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-play" /><i class="fa fa-youtube-play"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-youtube-square" /><i class="fa fa-youtube-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-ambulance" /><i class="fa fa-ambulance"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-h-square" /><i class="fa fa-h-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart" /><i class="fa fa-heart"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heart-o" /><i class="fa fa-heart-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-heartbeat" /><i class="fa fa-heartbeat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-hospital-o" /><i class="fa fa-hospital-o"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-medkit" /><i class="fa fa-medkit"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-plus-square" /><i class="fa fa-plus-square"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-stethoscope" /><i class="fa fa-stethoscope"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-user-md" /><i class="fa fa-user-md"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair" /><i class="fa fa-wheelchair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa fa-wheelchair-alt" /><i class="fa fa-wheelchair-alt"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-kitchen-set" /><i class="fa-solid fa-kitchen-set"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-fire-burner" /><i class="fa-solid fa-fire-burner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-plate-utensils" /><i class="fa-solid fa-plate-utensils"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-coffee-pot" /><i class="fa-solid fa-coffee-pot"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-microwave" /><i class="fa-solid fa-microwave"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-regular fa-chair" /><i class="fa-regular fa-chair"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-bed-front" /><i class="fa-solid fa-bed-front"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-clothes-hanger" /><i class="fa-solid fa-clothes-hanger"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-tv-retro" /><i class="fa-solid fa-tv-retro"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-router" /><i class="fa-solid fa-router"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-air-conditioner" /><i class="fa-solid fa-air-conditioner"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-spray-can-sparkles" /><i class="fa-solid fa-spray-can-sparkles"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-chalkboard-user" /><i class="fa-solid fa-chalkboard-user"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-pot-food" /><i class="fa-solid fa-pot-food"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-blanket" /><i class="fa-solid fa-blanket"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-stapler" /><i class="fa-solid fa-stapler"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-heat" /><i class="fa-solid fa-heat"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-person-to-door" /><i class="fa-solid fa-person-to-door"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-dumbbell" /><i class="fa-solid fa-dumbbell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-dumbbell" /><i class="fa-solid fa-dumbbell"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-elevator" /><i class="fa-solid fa-elevator"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-fire-extinguisher" /><i class="fa-solid fa-fire-extinguisher"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-regular fa-house-building" /><i class="fa-regular fa-house-building"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-person-swimming" /><i class="fa-solid fa-person-swimming"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-water-ladder" /><i class="fa-solid fa-water-ladder"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-square-parking" /><i class="fa-solid fa-square-parking"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-washing-machine" /><i class="fa-solid fa-washing-machine"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-sensor-fire" /><i class="fa-solid fa-sensor-fire"></i></label></li>
                            <li><label><input type="radio" name="icons" value="fa-solid fa-family" /><i class="fa-solid fa-family"></i></label></li>
                            </ul>
                        </div>
                    </div>
                    <div class="step">
                        <label>Selected Icon</label>
                        <div class="selectedIcon"><label></label><input type="text" name="selectedIcon" required></div>
                    </div>
                    <div class="step">
                        <label for="status_updateAmenity2" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="status_updateAmenity2" value="1" />
                            <label class="onoffswitch-label" for="status_updateAmenity2">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- add booking Type -->
<div class="modal fade modalshg addType" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="addType" method="post" action="{{ route('dashboardBookingTypePost') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Booking Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label for="addType" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="addType" value="1" />
                            <label class="onoffswitch-label" for="addType">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- update booking Type -->
<div class="modal fade modalshg updateType" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="updateType" method="post" action="{{ route('dashboardBookingTypeUpdate') }}">
            @csrf
            <input type="hidden" name="id" />
            <input type="hidden" name="old" />
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Update Booking Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label for="updateType" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="updateType" value="1" />
                            <label class="onoffswitch-label" for="updateType">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- addType -->
<div class="modal fade modalshg dashboardPropertyTypePost" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="addType2" method="post" action="{{ route('dashboardPropertyTypePost') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label for="addType2" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="addType2" value="1" />
                            <label class="onoffswitch-label" for="addType2">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- updateType -->
<div class="modal fade modalshg dashboardPropertyTypeUpdate" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="updateType2" method="post" action="{{ route('dashboardPropertyTypeUpdate') }}">
            @csrf
            <input type="hidden" name="id" />
            <input type="hidden" name="old" />
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Update Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label for="updateType2" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="updateType2" value="1" />
                            <label class="onoffswitch-label" for="updateType2">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- addFAQCategory -->
<div class="modal fade modalshg addFAQCategory" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="post" action="{{ route('dashboardFaqsCategoriesPost') }}" class="addFAQCategory">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label for="status5" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="status5" value="1" />
                            <label class="onoffswitch-label" for="status5">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- editFAQCategory -->
<div class="modal fade modalshg editFAQCategory" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="post" action="{{ route('dashboardFaqsCategoriesEdit') }}" class="addFAQCategory">
            @csrf
            <input type="hidden" name="id" />
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label for="status5e" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="status5e" value="1" />
                            <label class="onoffswitch-label" for="status5e">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- editCareerCategory -->
<div class="modal fade modalshg editCareerCategory" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="post" action="{{ route('dashboardcareerCategoriesEdit') }}" class="addFAQCategory">
            @csrf
            <input type="hidden" name="id" />
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label for="status5ee" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="status5ee" value="1" />
                            <label class="onoffswitch-label" for="status5ee">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- addJobCategory -->
<div class="modal fade modalshg addJobCategory" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="POST" action="{{ route('dashboardcareerCategoriesPost') }}" class="addJobCategory" >
             @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label for="status6" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="status6" value="1" />
                            <label class="onoffswitch-label" for="status6">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- addPostCategory -->
<div class="modal fade modalshg addPostCategory" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="addPostCategory" method="post" action="{{ route('dashboardPostsCategoriesPost') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label for="addPostCategory" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="addPostCategory" value="1" />
                            <label class="onoffswitch-label" for="addPostCategory">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- updatePostCategory -->
<div class="modal fade modalshg updatePostCategory" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="updatePostCategory" method="post" action="{{ route('dashboardPostsCategoriesEdit') }}">
            @csrf
            <input type="hidden" name="id" />
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Update Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Title</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label for="updatePostCategory" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="updatePostCategory" value="1" />
                            <label class="onoffswitch-label" for="updatePostCategory">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- addCurrency -->
<div class="modal fade modalshg addCurrency" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="addCurrency" method="post" action="{{ route('dashboardCurrenciesPost') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Currency</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Name</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label for="addCurrency" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="addCurrency" value="1" />
                            <label class="onoffswitch-label" for="addCurrency">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- updateCurrency -->
<div class="modal fade modalshg updateCurrency" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="updateCurrency" method="post" action="{{ route('dashboardCurrenciesUpdaate') }}">
            @csrf
            <input type="hidden" name="id" />
            <input type="hidden" name="old" />
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Update Currency</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Name</label>
                        <input type="text" name="name" value="" required>
                    </div>
                    <div class="step">
                        <label for="updateCurrency" class="control-label">Is Published?</label>
                        <div class="onoffswitch">
                            <input type="checkbox" name="status" class="onoffswitch-checkbox" id="updateCurrency" value="1" />
                            <label class="onoffswitch-label" for="updateCurrency">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>