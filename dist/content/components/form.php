
<script>

    jQuery(document).ready(function($) {

        $('[name="search"]').submit(function(e) {
            e.preventDefault();

            var url = 'proxy.php?zip=' + $('#zip').val();

            $.getJSON(url, function(data) {
                
                var records = data.records;

                $('#results').empty();                    

                $('#results').show().addClass("show");

                $('#registrationForm input').each(function() {
                    $(this).not('#vertical, #sub-vertical, #country, #TCAccept, [name="Pardot_Campaign_Code_Form_Input"]').val('');
                });

                $('#registrationForm').hide();

                if ( records.length) {

                    $(records).each(function(e) {
                        renderResult($(this)[0].fields);
                    });
                    $('.results__title').show();
                } else {
                    $('#results').append('<li class="result cell medium-4 no-result"><h2>There are no schools elegible for this program in the location you selected.</h2> </li>');
                }

                $('#notListed').show();                    
            })

        });


        $('body').on('click', '.formTrigger', function(e) {
            e.preventDefault();
            showForm( $(this).data() );
        });

        $('#termsAgree').change(function(e) {
            if ( $(this).is(':checked') ) {
                $('#registerSubmit').prop('disabled',false);
                $('#TCAccept').val('true');
            } else {
                $('#registerSubmit').prop('disabled',true);
                $('#TCAccept').val('false');
            }
        })

    });

    function thankyouMessage(){
        $(".content").hide();
        $(".content.thankyou-message").show();
        $(".form-holder").hide();
    }//END of thankyouMessage

    function termsConditionLinkActivated(){
        $(".terms-condition a").on("click", function(){
            var desination = $(".terms-and-condition").offset().top;
		    $("html, body").animate({scrollTop: desination}, 500);
            $(".terms-and-condition .faq-item__question").trigger("click");
        });
    }

    function searchJson(zip) {

        return allData.filter(
            function(data) { 
                return data.gsx$zip.$t == zip; 
            }
        );

    }

    function renderResult(data) {

        var name = data['School Name'];
        var address = data['Address'];
        var city = data['City'];
        var state = data['State'];
        var zip = data['Zip'];
        var phone = data['Phone Number'];
        var schoolID = data['NCES ID'];
        var resultsTitle = '';

        phone = phone.replace(/[\D]/g, "");
        phone = phone.slice(0,3)+"-"+phone.slice(3,6)+"-"+phone.slice(6);

        var result = '<li class="result cell medium-4"><h2 class="resultTitle">' + name + '</h2>';
        result += '<div class="resultAddress">' + address + '<br />' + city + ', ' + state + ' ' + zip + '</div>';
        result += '<div class="resultPhone">' + phone + '</div>';
        result += '<button class="formTrigger button" data-name="' + name + '" data-address="' + address + '" data-city="' + city + '" data-state="' + state + '" data-zip="' + zip + '" data-phone="' + phone + '" data-id="' + schoolID +'">My School</button>';
        result += '</li>';

        $('#results').append(result);
        
    }

    function showForm( data ) {

        $('#schoolName').val(data.name).attr('readonly',true);
        $('#schoolAddress').val(data.address).attr('readonly',true);
        $('#schoolCity').val(data.city).attr('readonly',true);
        $('#schoolState').val(data.state).attr('readonly',true);
        $('#schoolZip').val(data.zip).attr('readonly',true);
        $('#schoolPhone').val(data.phone).attr('readonly',true);
        $('#schoolID').val(data.id).attr('readonly',true);

        $('#results').hide().removeClass("show");
        $('.results__title').hide();
        $('#registrationForm').show();
        $('#notListed').hide();

        termsConditionLinkActivated();

    }
    

</script>

<section class="form-section">
    <div class="container">

        <div class="content">
            <p class="content__paragraph">
                <strong>The Times is excited to partner with Verizon to provide free access to nytimes.com, in line with our shared commitment to fostering education.</strong>
            </p>
            <p class="content__paragraph">Faculty and students at Title 1 high schools can now receive free New York Times digital subscriptions while connected to their school network. Register your school below for two years of unlimited articles, videos and beyond — as well as interactive <a href="https://www.nytimes.com/section/learning" target="_blank">New York Times Learning Network</a> content that brings our journalism into the classroom with lesson plans, writing prompts and quizzes.</p>
            <p class="content__paragraph">
                <strong>Register your school by completing the form:</strong>
            </p>

        </div><!-- /.content -->

        <div class="content thankyou-message">
            <p class="content__paragraph">Thank you for submitting. We will reach out to you soon.</p>
        </div><!-- /.content -->

        <div class="form-holder">

            <div class="grid-container fluid">
                <form name="search" id="search-form" class="search-form">
                    <div class="grid-x grid-margin-x">
                        <div class="cell small-10">
                            <label for="zip">School ZIP Code</label>
                            <input type="search" name="zip" id="zip" placeholder="" required pattern="\d{5}"/>
                        </div>
                        <div class="cell small-2 search-btn-container">
                            <button class="button">Search</button>
                        </div>
                    
                    </div>
                </form>
                
                <h2 class="results__title">Please select your school from the results below.</h2>
                <ul id="results" class="grid-x results">
                    

                </ul>

                <div id="notListed" class="grid-x grid-margin-x notListed">
                    <p class="cell">
                        Don't see your school listed? <a href="mailto:schools@nytimes.com">Contact us</a>
                    </p>
                </div>
                            
                <form id="registrationForm" action="https://go.pardot.com/l/146041/2019-08-14/24wzpb" style="display: none;" method="post" class="registrationForm" >
                    <!--
                        this was the previous action with thank you page
                        action="https://go.pardot.com/l/146041/2019-08-14/24wzpb"

                        new code
                        onsubmit="return thankyouMessage();"
                    -->
                    <fieldset>
                        <legend>
                            <strong>Contact Information</strong><br />
                            <small>Note: You should be in a position of authority to accept the terms and conditions.</small>
                        </legend>
                
                        <div class="grid-x grid-padding-x">
                            <div class="cell medium-6">
                                <label for="firstName">First Name</label>
                                <input type="text" name="First_Name" id="firstName" required placeholder="" />
                            </div>
                        
                            <div class="cell medium-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" name="Last_Name" id="lastName" required placeholder=""/>
                            </div>
                        </div>
                
                        <div class="grid-x grid-padding-x">
                            <div class="cell medium-6">
                                <label for="title">Title</label>
                                <input type="text" name="Title" id="title" required placeholder=""/>
                            </div>
                            <div class="cell medium-6">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" required placeholder="" pattern="^[a-zA-Z0-9.!#$%&amp;'*+/=?^_`{|}~-]+@([a-zA-Z0-9-]+\.)+(?:[a-zA-Z0-9-]+)$"/>
                            </div>
                        </div>

                        <div class="grid-x grid-padding-x">
                            <div class="cell cell__ip">
                                <label for="ipAddress">IP Address or IP Range</label>
                                <input type="text" name="IP_Addresses_Ranges" id="ipAddress" required placeholder="" />
                                <p>While connected to your school&rsquo;s network,<br> find your IP address <a href="https://www.google.com/search?q=What+is+my+IP%3F&rlz=1C1GCEA_enUS834US834&oq=What+is+my+IP%3F&aqs=chrome..69i57j0l5.8262j0j8&sourceid=chrome&ie=UTF-8" target="_blank" >here</a>.</p>
                                
                            </div>
            
                        </div>

                        <div class="grid-x grid-padding-x">
                            <div class="cell">
                                <label for="ipAddress" class="textarea-label">How did you hear about this program?</label>
                                <textarea name="Referral_Source" id="referral"></textarea>
                            </div>
                
                        </div>
            
                    </fieldset>
                
                    <fieldset class="school-feilds">    
                        <legend>School Information</legend>
                
                        <div class="grid-x grid-padding-x">
                            <div class="cell">
                                <label for="schoolName">School Name</label>
                                <input type="text" name="Title_1_High_School_Name" id="schoolName" required placeholder=""/>
                            </div>
                        </div>
                
                        <div class="grid-x grid-padding-x">
                            <div class="cell">
                                <label for="schoolAddress">School Address</label>
                                <input type="text" name="School_Street_Address" id="schoolAddress" required placeholder="School Address"/>
                            </div>

                            <div class="cell medium-4 cell__city">
                                <label for="schoolCity">City</label>
                                <input type="text" name="School_City" id="schoolCity" required placeholder="City"/>
                            </div>
        
                            <div class="cell medium-2 cell__state">
                                <label for="schoolState">State</label>
                                <input type="text" name="School_State" id="schoolState" required placeholder="State"/>
                            </div>
                            
                            <div class="cell medium-2">
                                <label for="schoolZip">Zip</label>
                                <input type="text" name="School_Zip_Code" id="schoolZip" required placeholder=""/>
                            </div>

                            <div class="cell medium-4">
                                <label for="schoolPhone">Phone Number</label>
                                <input type="tel" name="Phone_Number" id="schoolPhone" required placeholder=""/>
                            </div>
                            
                        </div>        
                    </fieldset>
                
                    <div class="grid-x grid-padding-x">
                        <div class="cell">
                            <input type="checkbox" name="terms-agree" id="termsAgree" /><label for="termsAgree" class="terms-condition">I agree to the <a href="#terms">terms and conditions</a>.</label>
                        </div>
                        <div class="cell">
                            <input type="hidden" name="School_ID" id="schoolID" />
                            <input type="hidden" name="Vertical" id="vertical" value="Education" />
                            <input type="hidden" name="SubVertical" id="sub-vertical" value="K12 - Public - Individual School" />
                            <input type="hidden" name="Country" id="country" value="USA" />
                            <input type="hidden" name="Accepted_T_C" id="TCAccept" value="false" />
                            <?php /* Insert this along with the other hidden fields toward the bottom of the form */ ?>
                            <?php if ( isset( $_REQUEST['Pardot_Campaign_Code_Form_Input'] ) ) : ?>
                                <input type="hidden" name="Pardot_Campaign_Code_Form_Input" value="<?php echo $_GET['Pardot_Campaign_Code_Form_Input']; ?>" />
                            <?php else : ?>
                                <input type="hidden" name="Pardot_Campaign_Code_Form_Input" value="" />
                            <?php endif; ?>
                            <button id="registerSubmit" type="submit" class="button" disabled>Register</button>
                        </div>
                    </div>
                
                </form>
            </div>

        </div><!-- /.form-holder -->

    </div><!-- /.container -->
</section><!-- /.form-section -->