<div class="container add-container " style="display:none;">
    <div class="item">
        <div class="uploading" style="display:none;">
        <p>Uploading</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                    0%
                </div>
            </div>  
        </div>
        
        <form action="/add/" class="images" id="images">
            <div class="dz-message"></div>
        </form>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" type="text" class="form-control input-sm" />
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Location</label>
                    <input name="location" type="text" class="form-control input-sm" />
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>State</label>
                    <select name="state" class="form-control input-sm">
                        <option  <?php echo($state == "AL" ? "selected='selected'" : "") ?> value="AL">Alabama</option> <option  <?php echo($state == "AK" ? "selected='selected'" : "") ?> value="AK">Alaska</option> <option  <?php echo($state == "AZ" ? "selected='selected'" : "") ?> value="AZ">Arizona</option> <option  <?php echo($state == "AR" ? "selected='selected'" : "") ?> value="AR">Arkansas</option> <option  <?php echo($state == "CA" ? "selected='selected'" : "") ?> value="CA">California</option> <option  <?php echo($state == "CO" ? "selected='selected'" : "") ?> value="CO">Colorado</option> <option  <?php echo($state == "CT" ? "selected='selected'" : "") ?> value="CT">Connecticut</option> <option  <?php echo($state == "DE" ? "selected='selected'" : "") ?> value="DE">Delaware</option> <option  <?php echo($state == "DC" ? "selected='selected'" : "") ?> value="DC">District Of Columbia</option> <option  <?php echo($state == "FL" ? "selected='selected'" : "") ?> value="FL">Florida</option> <option  <?php echo($state == "GA" ? "selected='selected'" : "") ?> value="GA">Georgia</option> <option  <?php echo($state == "HI" ? "selected='selected'" : "") ?> value="HI">Hawaii</option> <option  <?php echo($state == "ID" ? "selected='selected'" : "") ?> value="ID">Idaho</option> <option  <?php echo($state == "IL" ? "selected='selected'" : "") ?> value="IL">Illinois</option> <option  <?php echo($state == "IN" ? "selected='selected'" : "") ?> value="IN">Indiana</option> <option  <?php echo($state == "IA" ? "selected='selected'" : "") ?> value="IA">Iowa</option> <option  <?php echo($state == "KS" ? "selected='selected'" : "") ?> value="KS">Kansas</option> <option  <?php echo($state == "KY" ? "selected='selected'" : "") ?> value="KY">Kentucky</option> <option  <?php echo($state == "LA" ? "selected='selected'" : "") ?> value="LA">Louisiana</option> <option  <?php echo($state == "ME" ? "selected='selected'" : "") ?> value="ME">Maine</option> <option  <?php echo($state == "MD" ? "selected='selected'" : "") ?> value="MD">Maryland</option> <option  <?php echo($state == "MA" ? "selected='selected'" : "") ?> value="MA">Massachusetts</option> <option  <?php echo($state == "MI" ? "selected='selected'" : "") ?> value="MI">Michigan</option> <option  <?php echo($state == "MN" ? "selected='selected'" : "") ?> value="MN">Minnesota</option> <option  <?php echo($state == "MS" ? "selected='selected'" : "") ?> value="MS">Mississippi</option> <option  <?php echo($state == "MO" ? "selected='selected'" : "") ?> value="MO">Missouri</option> <option  <?php echo($state == "MT" ? "selected='selected'" : "") ?> value="MT">Montana</option> <option  <?php echo($state == "NE" ? "selected='selected'" : "") ?> value="NE">Nebraska</option> <option  <?php echo($state == "NV" ? "selected='selected'" : "") ?> value="NV">Nevada</option> <option  <?php echo($state == "NH" ? "selected='selected'" : "") ?> value="NH">New Hampshire</option> <option  <?php echo($state == "NJ" ? "selected='selected'" : "") ?> value="NJ">New Jersey</option> <option  <?php echo($state == "NM" ? "selected='selected'" : "") ?> value="NM">New Mexico</option> <option  <?php echo($state == "NY" ? "selected='selected'" : "") ?> value="NY">New York</option> <option  <?php echo($state == "NC" ? "selected='selected'" : "") ?> value="NC">North Carolina</option> <option  <?php echo($state == "ND" ? "selected='selected'" : "") ?> value="ND">North Dakota</option> <option  <?php echo($state == "OH" ? "selected='selected'" : "") ?> value="OH">Ohio</option> <option  <?php echo($state == "OK" ? "selected='selected'" : "") ?> value="OK">Oklahoma</option> <option  <?php echo($state == "OR" ? "selected='selected'" : "") ?> value="OR">Oregon</option> <option  <?php echo($state == "PA" ? "selected='selected'" : "") ?> value="PA">Pennsylvania</option> <option  <?php echo($state == "RI" ? "selected='selected'" : "") ?> value="RI">Rhode Island</option> <option  <?php echo($state == "SC" ? "selected='selected'" : "") ?> value="SC">South Carolina</option> <option  <?php echo($state == "SD" ? "selected='selected'" : "") ?> value="SD">South Dakota</option> <option  <?php echo($state == "TN" ? "selected='selected'" : "") ?> value="TN">Tennessee</option> <option  <?php echo($state == "TX" ? "selected='selected'" : "") ?> value="TX">Texas</option> <option  <?php echo($state == "UT" ? "selected='selected'" : "") ?> value="UT">Utah</option> <option  <?php echo($state == "VT" ? "selected='selected'" : "") ?> value="VT">Vermont</option> <option  <?php echo($state == "VA" ? "selected='selected'" : "") ?> value="VA">Virginia</option> <option  <?php echo($state == "WA" ? "selected='selected'" : "") ?> value="WA">Washington</option> <option  <?php echo($state == "WV" ? "selected='selected'" : "") ?> value="WV">West Virginia</option> <option  <?php echo($state == "WI" ? "selected='selected'" : "") ?> value="WI">Wisconsin</option> <option  <?php echo($state == "WY" ? "selected='selected'" : "") ?> value="WY">Wyoming</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control input-sm"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <a class="hideAddContainer" href="#">Hide</a>
                <button class="btnAddPost btn pull-right">Add</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="item">
                <div class="form-group">
                    <label>State:</label>
                    <select class="state form-control input-sm"><option  <?php echo($state ==  null ? "selected='selected'" : "") ?> value="" selected="selected">All</option><option <?php echo($state == "AL" ? "selected='selected'" : "") ?> value="AL">Alabama</option><option <?php echo($state == "AK" ? "selected='selected'" : "") ?> value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option><option  <?php echo($state == "AL" ? "selected='selected'" : "") ?> value="AL">Alabama</option> <option  <?php echo($state == "AK" ? "selected='selected'" : "") ?> value="AK">Alaska</option> <option  <?php echo($state == "AZ" ? "selected='selected'" : "") ?> value="AZ">Arizona</option> <option  <?php echo($state == "AR" ? "selected='selected'" : "") ?> value="AR">Arkansas</option> <option  <?php echo($state == "CA" ? "selected='selected'" : "") ?> value="CA">California</option> <option  <?php echo($state == "CO" ? "selected='selected'" : "") ?> value="CO">Colorado</option> <option  <?php echo($state == "CT" ? "selected='selected'" : "") ?> value="CT">Connecticut</option> <option  <?php echo($state == "DE" ? "selected='selected'" : "") ?> value="DE">Delaware</option> <option  <?php echo($state == "DC" ? "selected='selected'" : "") ?> value="DC">District Of Columbia</option> <option  <?php echo($state == "FL" ? "selected='selected'" : "") ?> value="FL">Florida</option> <option  <?php echo($state == "GA" ? "selected='selected'" : "") ?> value="GA">Georgia</option> <option  <?php echo($state == "HI" ? "selected='selected'" : "") ?> value="HI">Hawaii</option> <option  <?php echo($state == "ID" ? "selected='selected'" : "") ?> value="ID">Idaho</option> <option  <?php echo($state == "IL" ? "selected='selected'" : "") ?> value="IL">Illinois</option> <option  <?php echo($state == "IN" ? "selected='selected'" : "") ?> value="IN">Indiana</option> <option  <?php echo($state == "IA" ? "selected='selected'" : "") ?> value="IA">Iowa</option> <option  <?php echo($state == "KS" ? "selected='selected'" : "") ?> value="KS">Kansas</option> <option  <?php echo($state == "KY" ? "selected='selected'" : "") ?> value="KY">Kentucky</option> <option  <?php echo($state == "LA" ? "selected='selected'" : "") ?> value="LA">Louisiana</option> <option  <?php echo($state == "ME" ? "selected='selected'" : "") ?> value="ME">Maine</option> <option  <?php echo($state == "MD" ? "selected='selected'" : "") ?> value="MD">Maryland</option> <option  <?php echo($state == "MA" ? "selected='selected'" : "") ?> value="MA">Massachusetts</option> <option  <?php echo($state == "MI" ? "selected='selected'" : "") ?> value="MI">Michigan</option> <option  <?php echo($state == "MN" ? "selected='selected'" : "") ?> value="MN">Minnesota</option> <option  <?php echo($state == "MS" ? "selected='selected'" : "") ?> value="MS">Mississippi</option> <option  <?php echo($state == "MO" ? "selected='selected'" : "") ?> value="MO">Missouri</option> <option  <?php echo($state == "MT" ? "selected='selected'" : "") ?> value="MT">Montana</option> <option  <?php echo($state == "NE" ? "selected='selected'" : "") ?> value="NE">Nebraska</option> <option  <?php echo($state == "NV" ? "selected='selected'" : "") ?> value="NV">Nevada</option> <option  <?php echo($state == "NH" ? "selected='selected'" : "") ?> value="NH">New Hampshire</option> <option  <?php echo($state == "NJ" ? "selected='selected'" : "") ?> value="NJ">New Jersey</option> <option  <?php echo($state == "NM" ? "selected='selected'" : "") ?> value="NM">New Mexico</option> <option  <?php echo($state == "NY" ? "selected='selected'" : "") ?> value="NY">New York</option> <option  <?php echo($state == "NC" ? "selected='selected'" : "") ?> value="NC">North Carolina</option> <option  <?php echo($state == "ND" ? "selected='selected'" : "") ?> value="ND">North Dakota</option> <option  <?php echo($state == "OH" ? "selected='selected'" : "") ?> value="OH">Ohio</option> <option  <?php echo($state == "OK" ? "selected='selected'" : "") ?> value="OK">Oklahoma</option> <option  <?php echo($state == "OR" ? "selected='selected'" : "") ?> value="OR">Oregon</option> <option  <?php echo($state == "PA" ? "selected='selected'" : "") ?> value="PA">Pennsylvania</option> <option  <?php echo($state == "RI" ? "selected='selected'" : "") ?> value="RI">Rhode Island</option> <option  <?php echo($state == "SC" ? "selected='selected'" : "") ?> value="SC">South Carolina</option> <option  <?php echo($state == "SD" ? "selected='selected'" : "") ?> value="SD">South Dakota</option> <option  <?php echo($state == "TN" ? "selected='selected'" : "") ?> value="TN">Tennessee</option> <option  <?php echo($state == "TX" ? "selected='selected'" : "") ?> value="TX">Texas</option> <option  <?php echo($state == "UT" ? "selected='selected'" : "") ?> value="UT">Utah</option> <option  <?php echo($state == "VT" ? "selected='selected'" : "") ?> value="VT">Vermont</option> <option  <?php echo($state == "VA" ? "selected='selected'" : "") ?> value="VA">Virginia</option> <option  <?php echo($state == "WA" ? "selected='selected'" : "") ?> value="WA">Washington</option> <option  <?php echo($state == "WV" ? "selected='selected'" : "") ?> value="WV">West Virginia</option> <option  <?php echo($state == "WI" ? "selected='selected'" : "") ?> value="WI">Wisconsin</option> <option  <?php echo($state == "WY" ? "selected='selected'" : "") ?> value="WY">Wyoming</option></select>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-6 column1">
                    <?php  
                        echo($items1);
                    ?>
                </div>
                <div class="col-sm-6 column2">
                    <?php  
                        echo($items2);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top:10px; margin-bottom:10px;">
    <div class="row">
        <div class="col-xs-12">
            <button class="btn btn-block">More</button>
        </div>
    </div>
</div>

<script type="text/javascript" src="/js/home.js"></script>