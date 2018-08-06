<form id="adv-search" action="#">
    <div class="container">
        <fieldset>
            <legend><span><?php echo Yii::t('app', 'Find the Tour') ?></span></legend>
            <div class="form-wrap clearfix">
                <select class="form-control" id="places" >
                    <option>Africa</option>
                    <option>India</option>
                    <option>America</option>
                    <option>Russia</option>
                </select>
                <div class="input-group input-append date date-picker" >
                    <input type="text" class="form-control" name="date" value="CHECK-IN DATE">
                    <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                </div>
                <div class="input-group input-append date date-picker" >
                    <input type="text" class="form-control" name="date" value="CHECK-OUT DATE">
                    <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                </div>
                <select class="form-control" id="budget" >
                    <option>MAX-BUDGET</option>
                    <option>$300</option>
                    <option>$400</option>
                    <option>$500</option>
                    <option>$600</option>
                </select>
                <input name="search-tour" type="submit" value="Search Tours">
            </div>

        </fieldset>
    </div>
</form>