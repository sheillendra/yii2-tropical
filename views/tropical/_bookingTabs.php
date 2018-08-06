<div class="booking-tabs <?php echo!empty($animated) ? 'animated flipInY slowest' : '' ?>" role="tabpanel">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation">
            <a href="#tab-hotel3" aria-controls="tab-hotel3" role="tab" data-toggle="tab"><i class="fa fa-calendar"></i></a>
        </li>
        <li role="presentation">
            <a href="#tab-train3" aria-controls="tab-train3" role="tab" data-toggle="tab"><i class="fa fa-bus"></i></a>
        </li>
        <li role="presentation">
            <a href="#tab-flight3" aria-controls="tab-flight3" role="tab" data-toggle="tab"><i class="fa fa-plane"></i></a>
        </li>
        <li role="presentation" class="active">
            <a href="#tab-booking3" aria-controls="tab-booking3" role="tab" data-toggle="tab"><i class="fa fa-building-o"></i></a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane" id="tab-hotel3">
            <div class="booking-criteria">
                <h4>Book hotel</h4>
                <ul>
                    <li><i class="glyphicon glyphicon-ok"></i> No.1 for booking in our surroundings</li>
                    <li><i class="glyphicon glyphicon-ok"></i> No hidden costs</li>
                    <li><i class="glyphicon glyphicon-ok"></i> Attractive offers with price advantage</li>
                </ul>
            </div>
            <div class="bookingform">
                <form action="#">
                    <fieldset>
                        <div class="field-separator clearfix">
                            <label>Destination</label>
                            <input type="text" class="form-control" placeholder="Enter place / regions">
                        </div>
                        <div class="field-separator clearfix">
                            <label>Arrival</label>
                            <div class="input-group input-append date date-picker" >
                                <input type="text" class="form-control" name="date">
                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="field-separator clearfix">
                            <label>Departure Date</label>
                            <div class="input-group input-append date date-picker" >
                                <input type="text" class="form-control" name="date">
                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </fieldset>
                    <div class="field-separator clearfix">
                        <label for="rooms">Rooms</label>
                        <select class="form-control" id="rooms">
                            <option>1 room</option>
                            <option>Your destination</option>
                            <option>Your destination</option>
                            <option>Your destination</option>
                        </select>

                    </div>
                    <div class="field-separator clearfix">
                        <label for="adults-2">Adults</label>
                        <select class="form-control" id="adults-2" >
                            <option>3 adults</option>
                            <option>3 adults</option>
                            <option>Your destination</option>
                            <option>Your destination</option>
                        </select>

                    </div>
                    <div class="field-separator clearfix">
                        <label for="children-2">Childrens</label>
                        <select class="form-control" id="children-2">
                            <option>5 childrens</option>
                            <option>5 childrens</option>
                            <option>Your destination</option>
                            <option>Your destination</option>
                        </select>
                    </div>
                    <div class="clearfix">
                        <input type="submit" value="Find Hotel" class="t-btn btn-red">
                    </div>
                </form>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab-train3">
            <div class="booking-criteria">
                <h4>Book hotel</h4>
                <ul>
                    <li><i class="glyphicon glyphicon-ok"></i> No.1 for booking in our surroundings</li>
                    <li><i class="glyphicon glyphicon-ok"></i> No hidden costs</li>
                    <li><i class="glyphicon glyphicon-ok"></i> Attractive offers with price advantage</li>
                </ul>
            </div>
            <div class="bookingform">
                <form action="#">
                    <fieldset>
                        <div class="field-separator clearfix">
                            <label>From</label>
                            <input type="text" class="form-control" placeholder="Enter place / regions">
                        </div>
                        <div class="field-separator clearfix">
                            <label>To</label>
                            <input type="text" class="form-control" placeholder="Enter place / regions">
                        </div>
                        <div class="field-separator clearfix">
                            <label>OutBound</label>
                            <div class="input-group input-append date date-picker" >
                                <input type="text" class="form-control" name="date">
                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="field-separator clearfix">
                            <label>InBound</label>
                            <div class="input-group input-append date date-picker" >
                                <input type="text" class="form-control" name="date">
                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </fieldset>
                    <div class="field-separator clearfix">
                        <label for="adults-3">Adults</label>
                        <select class="form-control" id="adults-3" >
                            <option>3 adults</option>
                            <option>3 adults</option>
                            <option>Your destination</option>
                            <option>Your destination</option>
                        </select>

                    </div>
                    <div class="field-separator clearfix">
                        <label for="children-3">Childrens</label>
                        <select class="form-control" id="children-3">
                            <option>5 childrens</option>
                            <option>5 childrens</option>
                            <option>Your destination</option>
                            <option>Your destination</option>
                        </select>
                    </div>
                    <div class="clearfix">
                        <input type="submit" value="Search Train" class="t-btn btn-red">
                    </div>
                </form>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab-flight3">
            <div class="booking-criteria">
                <h4>Book hotel</h4>
                <ul>
                    <li><i class="glyphicon glyphicon-ok"></i> No.1 for booking in our surroundings</li>
                    <li><i class="glyphicon glyphicon-ok"></i> No hidden costs</li>
                    <li><i class="glyphicon glyphicon-ok"></i> Attractive offers with price advantage</li>
                </ul>
            </div>
            <div class="bookingform">
                <form action="#">
                    <fieldset>
                        <div class="field-separator clearfix">
                            <label>From</label>
                            <input type="text" class="form-control" placeholder="Enter place / regions">
                        </div>
                        <div class="field-separator clearfix">
                            <label>To</label>
                            <input type="text" class="form-control" placeholder="Enter place / regions">
                        </div>
                        <div class="field-separator clearfix">
                            <label>OutBound</label>
                            <div class="input-group input-append date date-picker" >
                                <input type="text" class="form-control" name="date">
                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="field-separator clearfix">
                            <label>InBound</label>
                            <div class="input-group input-append date date-picker" >
                                <input type="text" class="form-control" name="date">
                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </fieldset>
                    <div class="field-separator clearfix">
                        <label for="adults-1">Adults</label>
                        <select class="form-control" id="adults-1">
                            <option>3 adults</option>
                            <option>3 adults</option>
                            <option>Your destination</option>
                            <option>Your destination</option>
                        </select>

                    </div>
                    <div class="field-separator clearfix">
                        <label for="children-1">Childrens</label>
                        <select class="form-control" id="children-1">
                            <option>5 childrens</option>
                            <option>5 childrens</option>
                            <option>Your destination</option>
                            <option>Your destination</option>
                        </select>
                    </div>
                    <div class="clearfix">
                        <input type="submit" value="Search Flight" class="t-btn btn-red">
                    </div>
                </form>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane active" id="tab-booking3">
            <div class="booking-criteria">
                <h4>tour Book</h4>
                <ul>
                    <li><i class="glyphicon glyphicon-ok"></i> No.1 for booking in our surroundings</li>
                    <li><i class="glyphicon glyphicon-ok"></i> No hidden costs</li>
                    <li><i class="glyphicon glyphicon-ok"></i> Attractive offers with price advantage</li>
                </ul>
            </div>
            <div class="bookingform">
                <form action="#">
                    <fieldset>
                        <div class="field-separator clearfix">
                            <label>Destination</label>
                            <input type="text" class="form-control" placeholder="Enter place / regions">
                        </div>
                        <div class="field-separator clearfix">
                            <label>Check in</label>
                            <div class="input-group input-append date date-picker" >
                                <input type="text" class="form-control" name="date">
                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="field-separator clearfix">
                            <label>Check out</label>
                            <div class="input-group input-append date date-picker" >
                                <input type="text" class="form-control" name="date">
                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </fieldset>
                    <div class="field-separator clearfix">
                        <label>Name <span>*</span></label>
                        <input type="text" class="form-control" >
                    </div>
                    <div class="field-separator clearfix">
                        <label>Email <span>*</span></label>
                        <input type="text" class="form-control" >
                    </div>
                    <div class="field-separator field-inline clearfix">
                        <select class="form-control" id="adults" >
                            <option>adults</option>
                            <option>3 adults</option>
                            <option>Your destination</option>
                            <option>Your destination</option>
                        </select>
                        <select class="form-control" id="children">
                            <option>childrens</option>
                            <option>5 childrens</option>
                            <option>Your destination</option>
                            <option>Your destination</option>
                        </select>
                    </div>
                    <div class="clearfix">
                        <input type="submit" value="Book Now" class="t-btn btn-red">
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>