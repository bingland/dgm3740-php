<?php $ptitle='Cabot Cruises - Book a Cruise'; include '_header.php'; ?>
    <div class="wrapper1200 book">
        <h1>Book a Cruise</h1>

        <form>
            <div class="formLine">
                <label>Full Name <span class="requiredText">(Required)</span></label>
                <input type="text" name="fullname" required>
            </div>

            <div class="formLine">
                <label>Address Line</label>
                <input type="text" name="address">
            </div>

            <div class="formLine">
                <label>City</label>
                <input type="text" name="city">
            </div>

            <div class="formLine">
                <label>State</label>
                <select name="state">
                    <option selected disabled>Please select...</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>
            
            <div class="formLine">
                <label>Zipcode</label>
                <input type="text" name="zipcode">
            </div>

            <div class="formLine">
                <label>Phone Number</label>
                <input type="text" name="phone">
            </div>

            <div class="formLine">
                <label>Email Address <span class="requiredText">(Required)</span></label>
                <input type="text" name="email" required>
            </div>

            <div class="formLine">
                <label>Cruise Selection</label>
                <select name="cruise">
                    <option selected disabled>Please select...</option>
                    <option value="norwegian">Norwegian Cruislines</option>
                    <option value="carribean">Royal Carribean International</option>
                    <option value="carnival">Carnival Cruises</option>
                    <option value="princess">Princess Cruises</option>
                </select>
            </div>

            <input type="submit" value="Book My Cruise">
        </form>
    </div>
<?php include '_footer.php'; ?>