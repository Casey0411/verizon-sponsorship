<script>
    (function() {   
        
        $(document).ready(function(){
            $(".faq-item__question").on("click", function(){
                var thisQuestion = $(this).parents(".faq-item");
                var thisAnswer = thisQuestion.find(".faq-item__answer");
                

                if(thisQuestion.hasClass("open")){
                    thisQuestion.removeClass("open");
                    thisAnswer.slideUp();
                    $(this).find(".faq-item__icon").html("+");
                }else{
                    thisQuestion.addClass("open");
                    thisAnswer.slideDown();
                    $(this).find(".faq-item__icon").html("-");
                }

            });

        });

    })();
</script>

<section class="faq-section">
    <div class="container">
        <h2 class="faq-section__title">Frequently Asked Questions</h2>
        <div class="faq-holder">

            <div class="faq-item">
                <h3 class="faq-item__question">
                    <div class="faq-item__icon">+</div><!-- /.faq-item__icon -->
                    What constitutes a Title 1 high school?
                </h3><!-- /.faq-item__question -->
                <div class="faq-item__answer">
                    <p class="faq-item__answer__paragraph">A high school must have a schoolwide Title 1 designation according to the <a href="https://nces.ed.gov/" target="_blank">National Center for Education Statistics</a> to be eligible for this program.</p>
                </div><!-- /.faq-item__answer -->
            </div><!-- /.faq-holder -->

            <div class="faq-item">
                <h3 class="faq-item__question">
                    <div class="faq-item__icon">+</div><!-- /.faq-item__icon -->
                    What will my school receive as part of the program?
                </h3><!-- /.faq-item__question -->
                <div class="faq-item__answer">
                    <p class="faq-item__answer__paragraph">Each registered Title 1 high school will receive unlimited digital access to nytimes.com while connected to their school’s network, courtesy of Verizon. This includes access to all articles and multimedia content, in addition to The New York Times Learning Network.</p>
                </div><!-- /.faq-item__answer -->
            </div><!-- /.faq-holder -->

            <div class="faq-item">
                <h3 class="faq-item__question">
                    <div class="faq-item__icon">+</div><!-- /.faq-item__icon -->
                    What if my school isn’t designated as a Title 1 high school?
                </h3><!-- /.faq-item__question -->
                <div class="faq-item__answer">
                    <p class="faq-item__answer__paragraph">At this time the program is only offered for Title 1 high schools. Information on purchasing access for other schools can be found <a href="http://nytimesgroupsubscriptions.com/" target="_blank">here.</a></p>
                </div><!-- /.faq-item__answer -->
            </div><!-- /.faq-holder -->

            <div class="faq-item">
                <h3 class="faq-item__question">
                    <div class="faq-item__icon">+</div><!-- /.faq-item__icon -->
                    Is a similar program available for Title 1 elementary or middle schools?
                </h3><!-- /.faq-item__question -->
                <div class="faq-item__answer">
                    <p class="faq-item__answer__paragraph">This partnership also provides nytimes.com to Title 1 middle schools via the Verizon Innovative Learning platform. Learn more <a href="https://www.verizon.com/about/responsibility/verizon-innovative-learning" target="_blank">here.</a></p>
                </div><!-- /.faq-item__answer -->
            </div><!-- /.faq-holder -->

            <div class="faq-item">
                <h3 class="faq-item__question">
                    <div class="faq-item__icon">+</div><!-- /.faq-item__icon -->
                    How long will it take to get started?
                </h3><!-- /.faq-item__question -->
                <div class="faq-item__answer">
                    <p class="faq-item__answer__paragraph">Once a school has registered, we will contact you to confirm a start date.</p>
                </div><!-- /.faq-item__answer -->
            </div><!-- /.faq-holder -->

            <div class="faq-item">
                <h3 class="faq-item__question">
                    <div class="faq-item__icon">+</div><!-- /.faq-item__icon -->
                    How long will the program and access continue?
                </h3><!-- /.faq-item__question -->
                <div class="faq-item__answer">
                    <p class="faq-item__answer__paragraph">The program will be available until December 31, 2021, but schools who participate within that period will have nytimes.com access for 24 months from their access start date.</p>
                </div><!-- /.faq-item__answer -->
            </div><!-- /.faq-holder -->

            <div class="faq-item">
                <h3 class="faq-item__question">
                    <div class="faq-item__icon">+</div><!-- /.faq-item__icon -->
                    Who can I contact for more details? 
                </h3><!-- /.faq-item__question -->
                <div class="faq-item__answer">
                    <p class="faq-item__answer__paragraph">For more information about the program, please call <a href="tel:+8776987253">877-698-7253.</a> To find out the status of your access, please email <a href="mailto:schools@nytimes.com">schools@nytimes.com.</a></p>
                </div><!-- /.faq-item__answer -->
            </div><!-- /.faq-holder -->

            <div class="faq-item  terms-and-condition">
                <h3 class="faq-item__question">
                    <div class="faq-item__icon">+</div><!-- /.faq-item__icon -->
                    Terms and Conditions
                </h3><!-- /.faq-item__question -->
                <div class="faq-item__answer">
                    <p class="faq-item__answer__paragraph">
                    These terms and conditions (the “Agreement”) are between the U.S. Title 1 High School accepting this Agreement (the “School”) and The New York Times Digital LLC (“NYT”). This Agreement is binding on the School upon its checking of a box signaling its consent to this Agreement and on NYT upon granting access to NYT Service (as defined below) to the School under the Program (as defined below).
                    </p>

                    <p class="faq-item__answer__paragraph">NYT and Verizon offer a program to Title 1 High Schools in the U.S.A. whereby such school can obtain access to nytimes.com (the “NYT Service”) free of charge for twenty-four (24) months (the “Program”). NYT will verify that the School qualifies as a U.S. Title 1 High School before granting access to NYT Service under the Program. NYT reserves the right to decline the application for the School to participate in the Program for any or no reason. At the end of the twenty-four month access period via the Program, this Agreement will automatically terminate unless terminated earlier pursuant to the terms of this Agreement. NYT may terminate this Agreement during its term, if the School no longer qualifies as a U.S. Title 1 school or if the School breaches this Agreement and fails to cure its breach in a timely fashion (not to exceed thirty days). Any termination of this Agreement is without prejudice to any rights or remedies a party may be entitled to under this Agreement or at law, and will not affect any accrued rights or liabilities of either party.
                    </p>

                    <p class="faq-item__answer__paragraph">Client shall not use NYT’s name, logo, trademark, service mark or other designation in any manner without the prior written consent of NYT. NYT and Verizon shall be authorized to identify the School as a Program participant. 
                    </p>

                    <p class="faq-item__answer__paragraph">Each person who is receiving access to NYT Service through the School’s IP range(s) (such as students or staff member of the School) is an “Authorized User.”  Authorized Users’ access to NYT Service is subject to the NYT <a href="https://www.nytimes.com/content/help/rights/privacy/policy/privacy-policy.html" target="_blank">Privacy Policy</a> and <a href="https://www.nytimes.com/content/help/rights/terms/terms-of-service.html" target="_blank">Terms of Service.</a> If any authorization or permission of a parent or legal guardian is required under applicable laws or regulations, to allow access of an Authorized User to the NYT Service, the School shall obtain and maintain such authorization or permission. Any Authorized User must be at least 13 years old to access the NYT Service. The School is responsible for the acts and omissions of its Authorized Users. 
                    </p>

                    <p class="faq-item__answer__paragraph">In order to gain access to the NYT Service, the School is required to provide to NYT the School’s IP range(s) that must be an external public-facing static IP range(s) and the School is fully responsible for all costs associated with setting up and maintaining such IP range(s). The School warrants and represents that each of its IP addresses and ranges is unique to the School and only usable by its students and staff members. The School agrees to provide NYT with true, accurate and complete information as required by NYT, including the School’s IP range(s), and to allow NYT to share the School’s information with third parties for the purpose of verifying the information provided by the School. The School agrees to maintain and promptly update its information and any other information provided to NYT, including the School’s IP range(s). The School will be liable for any damages arising from any inaccurate information provided by the School or breach of the terms and conditions contained herein. 
                    </p>

                    <p class="faq-item__answer__paragraph">The  access to the NYT Service under the Program also includes select access to The New York Times archives and does not replace database services to which the School may currently subscribe. The access to the NYT Service granted through the Program does not constitute authorization for the School to copy content from NYT digital products or publish such content on the School’s website, intranet or any other platform. NYT hereby grants to the School a nonexclusive, nontransferable, nonsublicensable license to allow its Authorized Users to consume NYT content for personal use and for Client’s internal research, educational and general awareness purposes. All other rights are hereby expressly reserved. The School acknowledges and agrees that, as between NYT and the School, NYT is the owner of all intellectual properties in the content on NYT Service throughout the world. Any data mining or scraping of NYT Service is expressly prohibited hereunder.  For information on reproducing New York Times content, permissions, linking, privacy policy and Terms of Service, please refer to: <a href="http://www.nytimes.com/content/help/rights/permissions/permissions.html" target="_blank">Permissions</a>, <a href="http://www.nytimes.com/content/help/rights/linking/linking.html" target="_blank">Linking.</a>
                    </p>
                    <p class="faq-item__answer__paragraph">Each party warrants and represents that it has, and will continue to have during the term of this Agreement, the full power and authority to enter into this Agreement. In no event shall NYT be liable for any special, indirect, incidental or consequential damages (including, without limitation, for breach of contract, warranty, negligence or strict liability), or for interrupted communications, loss or use, lost business, lost data or lost profits, arising out of or in connection with this Agreement. Under no circumstances shall NYT be liable to the school for an amount greater than five hundred dollars (U.S. $500). Notwithstanding the above, the limitations of liability set forth in this section shall not apply to: (a) the gross negligence or willful misconduct of NYT or (b) liability which cannot be limited or excluded by law. 
                    </p>

                    <p class="faq-item__answer__paragraph">Each party is an independent contractor and each party’s personnel are not employees or agents of the other party for any purpose whatsoever. Nothing in this Agreement shall be construed or deemed to constitute or create a joint venture, partnership, business entity of any kind, nor constitute one party as agent of the other party. This Agreement may not be assigned by the School without the prior written consent of NYT. The parties’ rights and obligations will bind and inure to the benefit of their respective successors, heirs, executors and administrators and permitted assigns. If any part of this Agreement is held invalid, illegal or unenforceable, the remaining provisions will be unimpaired. No waiver, failure or delay in enforcing any provision may be construed to be a waiver of that or any other provision in the future. This Agreement together with its Exhibits (if any), constitutes the entire agreement between the parties and supersedes any prior or inconsistent agreements, negotiations, representations and promises, written or oral with respect to the subject matter hereof. Any notice or other communications hereunder will be made in writing and delivered by hand, registered mail or email to the other party and is deemed received, if delivered by hand, at the time and date of the hand delivery, if delivered by registered mail, on the day of receipt (as evidenced by signature) and if sent by email, immediately.
                    </p>

                    <p class="faq-item__answer__paragraph">This Agreement shall be construed and enforced under the substantive laws of the State of New York, without regard to its conflict of laws provisions. Any legal action arising out of or related to this Agreement  shall be brought exclusively in either the United States District Court for the Southern District of New York or the appropriate court of the State of New York located in New York County.  Each party hereby consents to (and waives any objection to) exclusive personal jurisdiction in the State of New York.
                    </p>

                    <p class="faq-item__answer__paragraph">NYT reserves the right to change, update or amend this Agreement in its sole discretion and at any time by posting a new version of the Agreement or emailing the School the new version of the Agreement. Any such changes to this Agreement will take effect immediately upon the new version being posted or thirty days after the new version of this Agreement is emailed to the School and the School does not reject it within the 30-day timeframe. If the School timely rejects the new version of the Agreement, the School would terminate this Agreement. 
                    </p>

                    <p class="faq-item__answer__paragraph">The person accepting this Agreement warrants and represents that s/he is an authorized signatory for the School.
                    </p>

                </div><!-- /.faq-item__answer -->
            </div><!-- /.faq-holder -->

        </div><!-- /.faq-holder -->
    </div><!-- /.container -->
</section><!-- /.faq-section -->