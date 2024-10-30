<?php
/**
 * Created by Code Monkeys LLC
 * http://www.codemonkeysllc.com
 * User: Spencer
 * Date: 1/6/2018
 * Time: 1:38 PM
 */

$partnerProposal = '
    <div class="cm-proposal-heading">
        <div class="cm-proposal-heading-left" style="float:left;width:20%;">
            <img style="max-width:100%;" src="' . wp_upload_dir()['baseurl'] . '/2017/10/logo-master.png" alt="Code Monkeys LLC" />
        </div>
        <div class="cm-proposal-heading-right" style="float:right;width:80%;text-align:right">
            <div class="cm-proposal-heading-right-top">
                WEBSITE DESIGN/DEVELOPMENT PARTNER PROPOSAL
            </div>
            <div class="cm-proposal-heading-right-bottom">
                <div class="cm-proposal-heading-name">
                    [PARTNER COMPANY NAME]
                </div>
                <div class="cm-proposal-heading-project">
                    [PROJECT NAME]
                </div>
                <div class="cm-proposal-heading-date-wrapper">
                    ' . date('F jS\, Y') . '
                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
        <h1 class="cm-proposal-heading-title" style="font-size:30px;text-align:center;">
            CODE MONKEYS LLC
        </h1>
        <h3 class="cm-proposal-heading-phone" style="font-size:20px;text-align:center;">
            715.941.1040
        </h3>
    </div>
    <div class="cm-proposal-body">
        <div class="cm-proposal-client-info">
            <div class="cm-proposal-client-company-name">
                [PARTNER COMPANY NAME]
            </div>
            <div class="cm-proposal-client-contact-name">
                [PARTNER FIRST NAME] [PARTNER LAST NAME]
            </div>
            <div class="cm-proposal-client-phone">
                [PARTNER PHONE]
            </div>
            <div class="cm-proposal-client-email">
                [PARTNER EMAIL]
            </div>
            <div class="cm-proposal-client-street-address">
                [PARTNER STREET ADDRESS]
            </div>
            <div class="cm-proposal-client-city-state-zip">
                [PARTNER CITY], [PARTNER STATE] [PARTNER ZIP CODE]
            </div>
        </div>
        <div class="cm-proposal-intro">
            <p>
                Dear [PARTNER FIRST NAME],
            </p>
            <p>
                Thank you for taking the time to share you and your client\'s vision for [PROJECT NAME] and considering Code Monkeys as your development partner for this project. We look forward to helping both you and your client grow.
            </p>
            <p>
                As your development partner our goal is to work as an extension of your own team in a way that integrates with your own workflow as seamlessly as possible.  
            </p>
            <p>
                In our proposals we try to ensure that we address each of your needs with a clear and realistic solution. From our discussions, these are the key objectives that seem to have emerged and are the most important to solve:
            </p>
            <p>
                KEY OBJECTIVES:
                <ol>
                    <li>
                        Design/Develop a conversion focused website with a clean, modern, responsive and intuitive user interface and design.
                    </li>
                    <li>
                        Provide a simple administrator interface to allow the client to update/modify the site content and image while limiting their ability to inadvertently break the design or functionality.
                    </li>
                    <li>
                        Ensure clear and timely communication between [PARTNER COMPANY NAME] and the Code Monkeys team throughout the development process.
                    </li>
                </ol>
            </p>
            <p>
                [PARTNER FIRST NAME], please let me know if these objectives are in alignment with you and your clients concerns. After you go through the proposal, let me know where you would like to go from here.
            </p>
            <p>
                Warmest Regards,
            </p>
            <p>
                ' . $user_first_name . ' ' . $user_last_name . '
            </p>
        </div>
        [PAGEBREAK]
        <div class="cm-proposal-process">
            <h2 style="font-size:26px;text-align:center;">
                OUR PROCESS
            </h2>
            <table>
                <tbody>
                    <tr>
                        <td>
                            PLANNING
                        </td>
                        <td>
                            <p>
                                Your project\'s success depends on a solid foundation determined by a research and discovery process.  This allows us to work efficiently and ensure that our developers have the information they need upfront to build you and your client\'s vision.
                            </p>
                            <p>
                                Without this discovery process the project will be plagued by ambiguity, confusion, assumptions and miscommunication ultimately leading to scope creep and the inability to deliver a product that we are happy with or more importantly that the client will be happy with.
                            </p>
                            <p>
                                During this phase our objective is to learn about your client\'s business goals, marketing objectives, industry, competitors and marketplace.  About who they are, where they\'ve been and where they want to go.  
                            </p>
                            <p>
                                We also dive into what the budget is, how you intend to deliver assets and page copy or if we need to help with that aspect, how soon you can deliver assets and copy, what the general design direction is, how much control we will have over the design and how soon the project needs to be completed as well as other aspects of the project.
                            </p>
                            <p>
                                What we discover during this planning phase determines if the project is a good fit for Code Monkeys and if so the best way to proceed to next steps.  While we try to accommodate the budget and find realistic solutions based on that budget balanced with the core requirements sometimes we\'re unable to do so without compromising integrity and quality.  If we feel that we would be unable to deliver a quality result that we would be proud of it simply does not make sense to proceed.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            PLANNING: DISCOVERY
                        </td>
                        <td>
                            <p>
                                You should have a series of discovery questions that have been provided prior to receiving this proposal and the answers to those questions listed in the SOW section.  There may be some back and forth between Code Monkeys and [PARTNER COMPANY NAME] to flesh out ambiguities and concerns once the questions have been answered and submitted to Code Monkeys.  It\'s imperative that all questions and ambiguities are addressed during this phase, if we fail to call out the specifics during this aspect of the project we will almost certainly have problems during or near the end of the build.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            PLANNING: RESEARCH
                        </td>
                        <td>
                            <p>
                                Based on the answers given to the questions in the discovery phase we will start the research phase.  During this phase we will determine if Code Monkeys is a good fit for the project, determine a basic estimate for how long the build will take and finally put together an initial proposal and scope of work (SOW) for the project.
                            </p>
                            <p>
                                Once we send the initial proposal and SOW please read through it thoroughly and note anything that we may have missed or that may be incorrect.  This is the time to ensure that the scope of work is clear and everything has been covered, once the final proposal and SOW is signed that SOW becomes the bible that everyone will go by for the rest of the build.  If a requirement is missed in the final SOW we will be unable to change scope and add the requirement without creating an addendum to the SOW and increasing the cost of the build.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            PLANNING: APPROVAL
                        </td>
                        <td>
                            <p>
                                Once everyone is on the same page in regards to the scope of work and design (if Code Monkeys does aspects of the design) you will be required to sign the proposal and SOW.
                            </p>
                            <p>
                                Please keep in mind that once the proposal and SOW is signed this becomes our bible throughout the entire build.  If something is missing or incorrect it is your responsibility to call this out prior to signing.
                            </p>
                            <p>
                                Once the proposal and SOW is signed (and initial payment made if applicable) Code Monkeys will get to work!
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            DESIGN
                        </td>
                        <td>
                            <p>
                                If Code Monkeys is responsible for aspects of the design this is where we get to work coming up with the design concept based on the requirements determined during the R&D phase.
                            </p>
                            <p>
                                You and your client will be able to follow progress and provide feedback on the design aspect throughout the development process to ensure we\'re building what you and your client envision.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            DEVELOPMENT
                        </td>
                        <td>
                            <p>
                                Throughout the development process Code Monkeys will push updates to the staging server to show progress and accept feedback.
                            </p>
                            <p>
                                It is critical that both Code Monkeys and [PARTNER COMPANY NAME] remain in constant contact and we\'re both following and updating the agile board on Trello.  There should never be any question on what\'s ready for review, what\'s blocked and what is left to do if both of us are following and updating the Trello boards.
                            </p>
                            <p>
                                It is the responsibility of the project managers determined in the SOW for both Code Monkeys and [PARTNER COMPANY NAME] to ensure that assets are being delivered and received as well as to ensure the Trello boards are being updated.  It is critical that both project managers remain in constant contact throughout the build in order to keep the project moving forward and on schedule.
                            </p>
                            <p>
                                Developer time is extremely limited and valuable.  If the project stalls during this period due to lack of direction, lack of assets or copy or due to lack of response from partner or developer the project may be placed on hold by Code Monkeys.  This does not delay the scheduled final payment date and to bring the project out of an "on-hold" status a new schedule will need to be created and is dependent on developer availability as to when the project can be restarted.  With multiple projects scheduled it is crucial that a project does not delay a scheduled start date of another project and when our developers put hours into a project it is important that we pay those developers on time or those developers will no longer work for us.  The ability of a client to meet the initial schedule agreed upon or not has no bearing on when we have to pay our developers and this one project is not worth the loss of talented developers.
                            </p>
                            <p>
                                Furthermore, if a project must be placed on hold Code Monkeys reserves the right to charge an additional fee to restart the project if the project must be restarted quickly.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            QA PROCESS
                        </td>
                        <td>
                            <p>
                                Often times we will do an initial QA on each card in Trello as it moves from "in progress" to "in internal review".
                            </p>
                            <p>
                                As cards are moved to the "In Client Review" column it is expected that someone from [PARTNER COMPANY NAME] will then review and either move the card to the "Done" column or place a comment on the card describing what is wrong or missing and then move it back to the "Backlog" column.
                            </p>
                            <p>
                                If a card is in the "Blocked" column it usually means that we are unable to move forward with that specific card and are waiting on someone from [PARTNER COMPANY NAME] to respond with further direction.  It is imperative that blocking issues are addressed and resolved promptly to ensure the project continues to move forward and we are able to meet the project schedule.
                            </p>
                            <p>
                                By implementing this process of initial QA the majority of concerns and issues should be resolved as soon as they appear making the final QA much quicker and more efficient.
                            </p>
                            <p>
                                Before the final client walkthrough/review of the website or application Code Monkeys will do one final QA to ensure everything is correct.  We highly recommend that [PARTNER COMPANY NAME] also does a final QA run through before the client does the final review to ensure quality.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            FINAL APPROVAL
                        </td>
                        <td>
                            <p>
                                Once both Code Monkeys and [PARTNER COMPANY NAME] have done their final QA the client should do a final walk through/review of the website or application.
                            </p>
                            <p>
                                With final approval we will then migrate the website or release the application based on the given hosting credentials or release requirements called out in the SOW.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            POST LAUNCH/RELEASE
                        </td>
                        <td>
                            <p>
                                Once a website is migrated to it\'s live hosting environment or an application is released publicly Code Monkeys will do a final run through to ensure all functionality works and the design remains in tact.
                            </p>
                            <p>
                                We require one final run through by [PARTNER COMPANY NAME] to ensure quality and require a final "sign-off" of the live site/application.
                            </p>
                            <p>
                                Once a website or application is launched/released Code Monkeys will consider the project completed and closed.  We understand that bugs or issues may appear even after the final live version has been launched/released and Code Monkeys will warranty our work for 3 months after the project has been considered completed and closed.  Issues that may arise after the initial 3 months will be subject to a new proposal, SOW and schedule and will be charged as additional scope.
                            </p>
                            <p>
                                Our 3 month warranty on work completed applies solely to work done within the signed SOW and does NOT apply to new or perceived functionality that falls outside of the agreed upon scope of work.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        [PAGEBREAK]
        <div class="cm-proposals-discovery">
            <h2 style="font-size:26px;text-align:center;">
                DISCOVERY ANSWERS
            </h2>
                <p>
                    <h3>DISCOVERY QUESTION ANSWERS:</h3>
                    <ol>
                        <li>
                            <h4>THE PROBLEM</h4>
                            <ul>
                                <li>
                                    What is the actual problem we need to solve?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    Why is this a problem?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    How much is this problem costing in money, time and frustration?<br />
                                    ANSWER: NA
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>MARKETING STRATEGY</h4>
                            <ul>
                                <li>
                                    What are the primary online AND offline marketing strategies the client is implementing currently?<br />
                                    ANSWER: NA
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>CURRENT WEBSITE</h4>
                            <ul>
                                <li>
                                    Does the client have a website now?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If yes, what aspects of the current site are they happy with?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If yes, what aspects of the current site are they unhappy with?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If yes, is the current site on a CMS platform such as Wordpress, Joomla, Drupal, Magento or other similar CMS and if so which one?<br />
                                    ANSWER: NA
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>DOMAIN</h4>
                            <ul>
                                <li>
                                    Does the client already have a domain?<br />
                                    ANSWER: 
                                </li>
                                <li>
                                    If yes, who is the domain registrar?<br />
                                    ANSWER: 
                                </li>
                                <li>
                                    If yes, will we need to transfer the domain to a new hosting server?<br />
                                    ANSWER: 
                                </li>
                                <li>
                                    If no, who is responsible for registering the domain?<br />
                                    ANSWER: 
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>HOSTING</h4>
                            <ul>
                                <li>
                                    Does the client wish to host the website with Code Monkeys?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If yes, does the client want managed hosting with ongoing updates and maintenance or just simple hosting?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If no, who will the client host the website with?<br />
                                    ANSWER: NA
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>ECOMMERCE</h4>
                            <ul>
                                <li>
                                    Will this be an e-commerce site?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If yes, does the client already have a gateway and merchant account, and if so who?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If yes, what is the product or service they are selling?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If yes, how many products need to be listed?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If yes, who will be responsible for adding the initial products?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If yes, is the client aware that they must have an SSL certificate installed and either have now or willing to purchase one (if their hosting provider charges for this)?<br />
                                    ANSWER: NA
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>BUDGET</h4>
                            <ul>
                                <li>
                                    What is the budget?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    How does the budget stack up against the value of the problem?<br />
                                    ANSWER: NA
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>TIME FRAME</h4>
                            <ul>
                                <li>
                                    When does the project need to be completed?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    Why does it have to be complete by this date?<br />
                                    ANSWER: NA
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>DESIGN</h4>
                            <ul>
                                <li>
                                    Does the client have a specific design direction in mind?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    Will we work off of PSD mockups or follow design trends from other sites?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If following design trends from other sites please list at least 3 sites you would like us to follow and what you like and don\'t like from each one.<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    How much control over the design does Code Monkeys have?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    Will Code Monkeys need to provide mockups/wireframes/prototypes to be approved by the client?<br />
                                    ANSWER: NA
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>COMPETITION</h4>
                            <ul>
                                <li>
                                    List 3 of the client\'s direct competitors.<br />
                                    <ol>
                                        <li>
                                            NA
                                        </li>
                                        <li>
                                            NA
                                        </li>
                                        <li>
                                            NA
                                        </li>
                                    </ol>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>ASSETS</h4>
                            <ul>
                                <li>
                                    Who will provide assets?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    Are the assets already created?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    When would we expect to get assets?<br />
                                    ANSWER: NA
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>PAGE COPY</h4>
                            <ul>
                                <li>
                                    Who will provide page copy?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    Is the page copy already created?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    When would we expect to get the page copy?<br />
                                    ANSWER: NA
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>PROJECT MANAGEMENT</h4>
                            <ul>
                                <li>
                                    Who will the project manager be for [PARTNER COMPANY NAME]?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    Is that person familiar with our PM tools such as Trello, Confluence & HipChat?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    Is that person willing to use our PM tools?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If no, what tools and methods will we need to use for management of this project?<br />
                                    ANSWER: NA
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>ITERATIONS/REVISIONS</h4>
                            <ul>
                                <li>
                                    How much iteration/revision should we expect on this project?<br />
                                    ANSWER: NA
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>PARTNER/CLIENT REVIEWS</h4>
                            <ul>
                                <li>
                                    How long should we expect to wait for client reviews and communication?<br />
                                    ANSWER: NA
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>SITE MAP</h4>
                            <ul>
                                <li>
                                    Do we have a site map in place yet?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If no, does Code Monkeys need to create a basic site map and submit it for approval?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If no, when can we expect to receive the site map?<br />
                                    ANSWER: NA
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>CUSTOM FUNCTIONALITY</h4>
                            <ul>
                                <li>
                                    Will the project require any custom functionality?<br />
                                    ANSWER: NA
                                </li>
                                <li>
                                    If yes, list the custom functionality and how this functionality is envisioned to work:<br />
                                    <ol>
                                        <li>
                                            <p>
                                                EXPLAIN FUNCTIONALITY: NA
                                            </p>
                                            <p>
                                                Are there specific 3rd party plugins that you already have in mind to address this custom functionality, and if so what plugin?<br />
                                                ANSWER: 
                                            </p>
                                            <p>
                                                Is this a paid plugin and if so cost?<br />
                                                ANSWER: 
                                            </p>
                                        </li>
                                    </ol>
                                </li>
                            </ul>
                        </li>
                    </ol>
                </p>
        </div>
        [PAGEBREAK]
        <div class="cm-proposal-sow">
            <h2 style="font-size:26px;text-align:center;">
                SCOPE OF WORK
            </h2>
            <table>
                <tbody>
                    <tr>
                        <td>
                            PLANNING R&D
                        </td>
                        <td>
                            <p>
                                Estimated Time: 1 Week
                            </p>
                            <p>
                                Cost: $300
                            </p>
                            <p>
                                Requirements: 
                                <ul>
                                    <li>
                                        [PARTNER COMPANY NAME] completing discovery questionnaire.
                                    </li>
                                    <li>
                                        Code Monkeys completing a thorough research process.
                                    </li>
                                    <li>
                                        Code Monkeys making a decision on if the project will be accepted or not.
                                    </li>
                                    <li>
                                        If Code Monkeys accepts the project Code Monkeys will send an initial proposal and SOW to [PARTNER COMPANY NAME] for review and acceptance.
                                    </li>
                                    <li>
                                        [PARTNER COMPANY NAME] is required to either sign and return the proposal and SOW or reply to Code Monkeys with concerns and omissions regarding the proposal or scope of work.
                                    </li>
                                </ul>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            SITEMAP
                        </td>
                        <td>
                            <p>
                                A sitemap has been provided by ([CODE MONKEYS] / [PARTNER COMPANY NAME]) for the following structure:
                                <ul>
                                    <li>
                                        Home Page
                                    </li>
                                    <li>
                                        About Page
                                        <ul>
                                            <li>
                                                Sub-About Page 1
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        Team/Staff Page (list of team/staff)
                                        <ul>
                                            <li>
                                                Single Team/Staff Pages (individual team/staff member pages)
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        News/Blog Top Page (list of posts)
                                        <ul>
                                            <li>
                                                Single News/Blog Pages (individual posts)
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        Contact Page
                                    </li>
                                    <li>
                                        Privacy Statement Page
                                    </li>
                                    <li>
                                        Terms of Service Page
                                    </li>
                                </ul>
                                The sitemap was approved by the client on: NA DATE
                            </p>
                            <p>
                                Additional pages not listed in the above sitemap will be considered out of scope and will require an addendum to this scope of work.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ASSETS
                        </td>
                        <td>
                            <p>
                                Code Monkeys will provide [X] stock images for the following pages:
                                <ul>
                                    <li>
                                        NA
                                    </li>
                                </ul>
                                Delivery due date: NA
                            </p>
                            <p>
                                [PARTNER COMPANY NAME] will provide [X] images for the following pages:
                                <ul>
                                    <li>
                                        NA
                                    </li>
                                </ul>
                                Delivery due date: NA
                            </p>
                            <p>
                                Code Monkeys Will Provide [X] Stock Videos for the following pages:
                                <ul>
                                    <li>
                                        NA
                                    </li>
                                </ul>
                                Delivery due date: NA
                            </p>
                            <p>
                                [PARTNER COMPANY NAME] Will Provide [X] Videos for the following pages:
                                <ul>
                                    <li>
                                        NA
                                    </li>
                                </ul>
                                Delivery due date: NA
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            PAGE COPY
                        </td>
                        <td>
                            <p>
                                Code Monkeys will provide copy writing service for the following pages:
                                <ul>
                                    <li>
                                        NA
                                    </li>
                                </ul>
                                Delivery due date: NA
                            </p>
                            <p>
                                [PARTNER COMPANY NAME] will provide copy for the following pages:
                                <ul>
                                    <li>
                                        NA
                                    </li>
                                </ul>
                                Delivery due date: NA
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            DESIGN
                        </td>
                        <td>
                            <p>
                                Delivery Due Date for ALL PSD mockups from [PARTNER COMPANY NAME]: NA
                            </p>
                            <p>
                                The following design inspirations have been provided: [PARTNER COMPANY NAME]: 
                                <ul>
                                    <li>
                                        NA
                                    </li>
                                </ul>
                            </p>
                            <p>
                                Code Monkeys will provide [mockups/wireframes/prototypes] for the following pages:
                                <ul>
                                    <li>
                                        NA
                                    </li>
                                </ul>
                                Delivery due date: NA<br />
                                Client design review due date: NA
                            </p>
                            <p>
                                Code Monkeys will ensure that the website design looks good and functions well on large screens as well as modern mobile devices as well as across the most recent (3) versions of Google Chrome, FireFox, Safari and Microsoft Edge (formerly Internet Explorer).
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            CUSTOM FUNCTIONALITY
                        </td>
                        <td>
                            <p>
                                Code Monkeys will provide the following custom functionality using 3rd party plugins/components, custom developed plugins/components or custom code otherwise implement into the project:
                                <ul>
                                    <li>
                                        Custom [PARTNER COMPANY NAME] Branded Login & Admin Dashboard using the custom Code Monkeys Admin Dashboard plugin.
                                    </li>
                                    <li>
                                        Ability to submit support tickets from the admin dashboard using the custom Code Monkeys Admin Dashboard plugin.
                                    </li>
                                    <li>
                                        Ability to list common "How To" tips to update common aspects of the website using the custom Code Monkeys Admin Dashboard plugin.
                                    </li>
                                    <li>
                                        Protect the admin login using the Protect WP-Admin plugin (free version).
                                    </li>
                                    <li>
                                        Enable advanced caching to speed up the site page load speed using the W3TC plugin (free version).
                                    </li>
                                    <li>
                                        Add on-site SEO management using the Yoast SEO plugin (free version).
                                    </li>
                                    <li>
                                        Basic image compression and optimization using the WP-Smush plugin (free version).
                                    </li>
                                    <li>
                                        Allow easy content updating by implementing the custom Code Monkeys theme while limiting the ability for the client to inadvertently break design and layout.
                                    </li>
                                    <li>
                                        Responsive mobile menu using the [Responsive Menu Pro or Code Monkeys Mobile Menu] plugin.
                                    </li>
                                    <li>
                                        Ability to add staff/team members easily using the custom Code Monkeys Team plugin.
                                    </li>
                                    <li>
                                        Ability to add news easily using the custom Code Monkeys News plugin.
                                    </li>
                                    <li>
                                        Ability to easily create and submit web forms using the Caldera Forms plugin (free version).
                                    </li>
                                    <li>
                                        Ability to organize and reorder pages and posts using the Nested Pages plugin.
                                    </li>
                                    <li>
                                        Google Analytics integration and tracking using the Monster Insights plugin.
                                    </li>
                                    <li>
                                        Organize the administrator panel menu using the Admin Menu Editor plugin.
                                    </li>
                                    <li>
                                        Allow the ability to add and pull custom fields using the Custom Fields Pro plugin (paid version).
                                    </li>
                                    <li>
                                        Add the ability to easily create image galleries and sliders using the custom Code Monkeys ACF Gallery Shortcode plugin.
                                    </li>
                                </ul>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            SEARCH ENGINE OPTIMIZATION
                        </td>
                        <td>
                            <p>
                                Code Monkeys will install and configure the Yoast plugin for on-site SEO management.
                            </p>
                            <p>
                                Choose: [Code Monkeys] / [PARTNER COMPANY NAME] / [CLIENT] will be responsible for keyword research and on-site SEO management.
                            </p>
                            <p>
                                [REMOVE IF CODE MONKEYS NOT RESPONSIBLE FOR ON-SITE SEO] The following keywords have been determined to be our primary focus for search engine optimization:
                                <ul>
                                    <li>
                                        NA
                                    </li>
                                </ul>
                            </p>
                            <p>
                                [REMOVE IF CODE MONKEYS NOT RESPONSIBLE FOR LOCAL SEARCH OPTIMIZATION] Code Monkeys has developed the following strategy for gaining/improving local search visibility:
                                <ul>
                                    <li>
                                        Create a Google Business account.
                                    </li>
                                    <li>
                                        Create a Bing Business account.
                                    </li>
                                    <li>
                                        Create a Yelp account.
                                    </li>
                                    <li>
                                        Strategy to generate reviews on Google and Yelp.
                                    </li>
                                    <li>
                                        Strategy to generate local citations.
                                    </li>
                                </ul>
                            </p>
                            <p>
                                Off-Site SEO is not within the scope of this project including link building campaigns, content marketing and citation building.
                            </p>
                            <p>
                                * Code Monkeys makes no guarantees on where a website will rank in the search engines, how much traffic a website will receive or how many sales or leads a website will generate.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            SOCIAL MEDIA MARKETING
                        </td>
                        <td>
                            Social media marketing is not within the scope of this project.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            PROJECT MANAGEMENT
                        </td>
                        <td>
                            <p>
                                Code Monkeys Project Manager: Ed Paulsen<br />
                                Email: ed@codemonkeysllc.com
                                Phone: 715.941.1040
                            </p>
                            <p>
                                [PARTNER COMPANY NAME] Project Manager: NA
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            QUALITY ASSURANCE
                        </td>
                        <td>
                            <p>
                                Code Monkeys will review each aspect of the project as Trello cards are moved into the "Internal Review" column.  After going through internal quality assurance review the cards will be moved into the "Client Review" column.
                            </p>
                            <p>
                                Code Monkeys will go through a pre-launch quality assurance process once the project is complete prior to submitting for partner & client review.
                            </p>
                            <p>
                                Finally, Code Monkeys will do a final post-launch quality assurance review once the website is migrated to it\'s live hosting environment.
                            </p>
                            <p>
                                [PARTNER COMPANY NAME] will review each aspect of the project as Trello cards are moved into the "Client Review" column.
                            </p>
                            <p>
                                [PARTNER COMPANY NAME] will do a pre-launch review after the Code Monkeys internal pre-launch review and prior to migration to the live hosting environment.
                            </p>
                            <p>
                                [PARTNER COMPANY NAME] will do a final post-launch review once the website is migrated to the live hosting environment and after the Code Monkeys post-launch review.
                            </p>
                            <p>
                                Once [PARTNER COMPANY NAME] and the client are satisfied with the post-launch quality assurance reviews [PARTNER COMPANY NAME] will be required to sign off on the completion of the project.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            WARRANTY
                        </td>
                        <td>
                            <p>
                                Code Monkeys warranties the work done on a project for (3) months starting with the date [PARTNER COMPANY NAME] signs off on the completed project.  This warranty covers bugs or issues that may arise that were clearly part of the initial project scope or part of an approved addendum to the scope of work during the build process.
                            </p>
                            <p>
                                This warranty does not apply to new functionality, copy or asset revisions after the fact, new design changes or new functionality that was not part of the initial project scope of work or part of an approved addendum to the scope of work during the build process.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            POST-LAUNCH ANALYSIS, ITERATIONS & REVISIONS
                        </td>
                        <td>
                            <p>
                                Analysis, iterations and revisions after the fact requested after the website has launched and has been signed off on by [PARTNER COMPANY NAME] which are not covered under the project scope of work are subject to a new proposal and SOW.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            HOSTING
                        </td>
                        <td>
                            Website hosting is not part of the scope of work for this project.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            POST-LAUNCH MAINTENANCE & UPDATES
                        </td>
                        <td>
                            <p>
                                Ongoing maintenance and updates including Wordpress updates and Wordpress plugin updates are not part of the scope of work for this project.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ADDITIONAL SCOPE ADDENDUMS
                        </td>
                        <td>
                            <p>
                                We know that iteration is key to a great website and during the build process you may discover that you want additional assets, copy, pages or functionality in addition to what the original scope of work includes.
                            </p>
                            <p>
                                We support and encourage iteration however our disclaimer is that these additions to scope receive an approved addendum to the original scope of work for an additional cost and that these additions do not hold up the project process or our project schedule unless agreed upon. Payment must not be withheld due to additions to the scope of work.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        [PAGEBREAK]
        <div class="cm-proposal-schedule">
            <h2 style="font-size:26px;text-align:center;">
                PROJECT SCHEDULE
            </h2>
            <table width="100%">
                <tbody>
                    <tr>
                        <td style="text-align:center;">
                            DELIVERABLE
                        </td>
                        <td style="text-align:center;">
                            FINAL DUE DATE
                        </td>
                        <td style="text-align:center;">
                            FROM
                        </td>
                        <td style="text-align:center;">
                            DETAILS
                        </td>
                    </tr>
                    <tr>
                        <td>
                            PLANNING R&D
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            Code Monkeys
                        </td>
                        <td>
                            NA
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ASSETS
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            Code Monkeys
                        </td>
                        <td>
                            <ul>
                                <li>
                                        (PAGE TITLE) - (X) Images - 00/00/2018
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ASSETS
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            [PARTNER COMPANY NAME]
                        </td>
                        <td>
                            <ul>
                                <li>
                                    (PAGE TITLE) - (X) Images - 00/00/2018
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            COPY
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            Code Monkeys
                        </td>
                        <td>
                            <ul>
                                <li>
                                    (PAGE TITLE) - 00/00/2018
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            COPY
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            [PARTNER COMPANY NAME]
                        </td>
                        <td>
                            <ul>
                                <li>
                                    (PAGE TITLE) - 00/00/2018
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            DESIGN
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            Code Monkeys
                        </td>
                        <td>
                            <ul>
                                <li>
                                    (PAGE TITLE) - 00/00/2018
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            DESIGN
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            [PARTNER COMPANY NAME]
                        </td>
                        <td>
                            <ul>
                                <li>
                                    (PAGE TITLE) - 00/00/2018
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            DEVELOPMENT
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            Code Monkeys
                        </td>
                        <td>
                            <ul>
                                <li>
                                    (PAGE TITLE) - 00/00/2018
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            PRE-LAUNCH QA
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            Code Monkeys
                        </td>
                        <td>
                            NA
                        </td>
                    </tr>
                    <tr>
                        <td>
                            PRE-LAUNCH QA
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            [PARTNER COMPANY NAME]
                        </td>
                        <td>
                            NA
                        </td>
                    </tr>
                    <tr>
                        <td>
                            PRE-LAUNCH REVIEW
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            [PARTNER COMPANY NAME]
                        </td>
                        <td>
                            NA
                        </td>
                    </tr>
                    <tr>
                        <td>
                            LAUNCH
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            Code Monkeys
                        </td>
                        <td>
                            <p>
                                <h3>
                                    HOSTING CONTROL PANEL
                                </h3>
                                <ul>
                                    <li>
                                        URL: 
                                    </li>
                                    <li>
                                        Username: 
                                    </li>
                                    <li>
                                        Password: 
                                    </li>
                                </ul>
                            </p>
                            <p>
                                <h3>
                                    FTP
                                </h3>
                                <ul>
                                    <li>
                                        Host: 
                                    </li>
                                    <li>
                                        Type: (ftp/sftp)
                                    </li>
                                    <li>
                                        Port: 
                                    </li>
                                    <li>
                                        Username: 
                                    </li>
                                    <li>
                                        Password: 
                                    </li>
                                </ul>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            POST-LAUNCH QA
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            Code Monkeys
                        </td>
                        <td>
                            NA
                        </td>
                    </tr>
                    <tr>
                        <td>
                            POST-LAUNCH QA
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            [PARTNER COMPANY NAME]
                        </td>
                        <td>
                            NA
                        </td>
                    </tr>
                    <tr>
                        <td>
                            POST-LAUNCH REVIEW
                        </td>
                        <td>
                            00/00/2018
                        </td>
                        <td>
                            [PARTNER COMPANY NAME]
                        </td>
                        <td>
                            NA
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        [PAGEBREAK]
        <div class="cm-proposal-overscope">
            <h2 style="font-size:26px;text-align:center;">
                ADDITIONAL BILLABLE - OVER SCOPE
            </h2>
            <p>
                Unplanned components, ideas, revisions, and project scope happen - when there is an unexpected event that will incur a cost, we will notify you ahead of time and will not produce unless we receive clear approval for increased budget and timeline.
            </p>
            <p>
                Hourly partner rate: $60/hour (discounted from regular $75/hour), billed to the quarter of an hour through our tracking software. Most additional projects and/or project modifications will be scoped and bid on a fixed-price basis.
            </p>
        </div>
        <div class="cm-proposal-about-us">
            <h2 style="font-size:26px;text-align:center;">
                OUR TEAM & ABOUT US
            </h2>
            <p>
                Our business is owned fully between the three Managing Partners, Spencer Fraise, Dan Moore & Ed Paulsen.  Your project will be managed by our project manager listed in the SOW and several of our team members will play a part in the build over the duration of your project.
            </p>
            <p>
                Please reference our website <a href="https://www.codemonkeysllc.com" target="_blank">www.codemonkeysllc.com</a> for more information about each of our team members and the company.
            </p>
            <p>
                Each of our projects are taken through an innovative process that we have designed over the last several years, yet continue to refine to create the best possible experience.  We use a combination of online tools, partner/client interactions, and strategies to ensure that your project goes from concept to execution and finally to completion within the allotted time & budget to achieve the best end-product.
            </p>
        </div>
        <div class="cm-proposals-communication">
            <h2 style="font-size:26px;text-align:center;">
                COMMUNICATION & COLLABORATION
            </h2>
            <p>
                During your project communication is crucial and will be non-stop with emails, phone calls, HipChat, the Trello Board, Confluence and online video meetings.  Over the years we have refined our communication and collaboration process with our partners and believe our current methods are extremely efficient when used properly.  Even though we believe our current methods are very efficient we are always striving to find better and more user-friendly methods to communicate and collaborate through the entire life-cycle of a project.
            </p>
            <p>
                Here is how we make it happen:
                <ul>
                    <li>
                        <p>
                            CONFLUENCE - Each project is given it\'s own space in Confluence and is our preferred method of sharing assets, page copy and other project related files.
                        </p>
                        <p>
                            This is also our preferred method of storing high-level project-specific information such as login credentials, high level requirements and other similar information.  This allows both of our entire teams to share and access these things from a centralized and organized space.  This tool also helps hold both of our teams accountable as to when certain things are shared so there is never any confusion on if something was provided within the estimated schedule defined in the SOW.
                        </p>
                    </li>
                    <li>
                        <p>
                            HIPCHAT - When you decide to partner with Code Monkeys [PARTNER COMPANY NAME] will get it\'s own HipChat room and each project will receive it\'s own sub-room and is our preferred method of day to day communication.
                        </p>
                        <p>
                            This allows both of our teams to stay in constant contact in a separate, centralized and organized space enabling all members of the team to stay involved with the over-all communication between everyone involved with the project.  This also helps eliminate confusion and miscommunication over the life of the project as everyone can easily go back through the entire history of the chat.
                        </p>
                        <p>
                            HipChat also allows us to hold video meetings with multiple team members together and allows us to screen share and share files with each other.  While we do have the ability to share files in HipChat our preferred method for sharing project-critical files is still in Confluence.
                        </p>
                        <p>
                            Finally, the most powerful aspect of centralizing our day to day communication in HipChat is that it enables us to take the communication OUT of emails which often end up lost or overlooked.  This is especially true when multi-threaded emails between multiple team members become too long and out of order.
                        </p>
                    </li>
                    <li>
                        <p>
                            TRELLO - This is our agile job board and is probably the most important and powerful tool we use to keep our two teams in sync and the project moving forward.
                        </p>
                        <p>
                            Each project will receive it\'s own Trello board and allows us to break the entire project down into specific cards.  These cards get moved from column to column as the tasks that pertain to that card are worked on and allows us to comment and share small files on the cards (such as screen shots).
                        </p>
                        <p>
                            Our board structure and flow is as follows:
                            <ol>
                                <li>
                                    BACKLOG: This is where all cards start and can be thought of as our total "to do" list.
                                </li>
                                <li>
                                    SPRINT BACKLOG: Code Monkeys works in weekly sprint cycles which means every week we determine what cards we believe we can work on for that week from the backlog based on priority and time.  This allows us to prioritize and organize what we want to do in the short term more efficiently and allows us to self-assess our progress after each week\'s sprint cycle.
                                </li>
                                <li>
                                    IN PROGRESS: Once someone is ready to start working on a card they move it over to the "in progress" column.  This allows everyone on both of our teams to see what is currently being worked on and who is working on it.  Each time a card is moved it is timestamped and shows who moved the card so even if multiple developers are working on the same card over time you can always backtrack to see who worked on it and when.
                                </li>
                                <li>
                                    BLOCKED: This is the most important column for the [PARTNER COMPANY NAME] team and especially your project manager to watch.  When a developer runs into what we call a "blocking" issue the card will be moved to the blocked column and a comment placed on the card explaining why.  Often this is due to needing clarification, missing assets or missing copy which prevents the developer from moving forward until it is provided from your team.  The sooner blocking issues can be addressed the more likely we will be able to hit the schedule deadlines and that we will deliver exactly what you and your client envision.
                                </li>
                                <li>
                                    INTERNAL REVIEW: As the developers finish cards they\'re moved into the "internal review" column.  Cards moved into this column are then ready for the Code Monkeys team to do their initial QA.  Once Code Monkeys is finished with it\'s initial QA review it is then moved over to the "partner review" column unless issues were found in which the card is moved back to the sprint backlog to address the issues found.
                                </li>
                                <li>
                                    PARTNER REVIEW: Cards in this column are ready for [PARTNER COMPANY NAME] to review.  Once you review a card you will either move it to the "done" column or else move it back to the "sprint backlog" column if issues are found.  If an issue is found you should comment on the card explaining what the issue is and if possible even attach a screen shot showing the issue.  Remember that this review process is more of an initial review and there is bound to be some issues that your team finds that ours does not initially.  This initial double review process allows us to hit obvious problems right away making our final QA processes much faster and efficient.
                                </li>
                                <li>
                                    DONE: [PARTNER COMPANY NAME] should move cards to this column once it has been reviewed and believed to be complete.  Both Code Monkeys and [PARTNER COMPANY NAME] will still do a final QA review before launch so just because a card has been moved to done does\'t mean we won\'t still find issues and move it back to the sprint backlog.
                                </li>
                            </ul>
                        </p>
                    </li>
                </ul>
            </p>
        </div>
        <div class="cm-proposals-hosting">
            <h2 style="font-size:26px;text-align:center;">
                MANAGED MAINTENANCE & HOSTING
            </h2>
            <p>
                When you are paying monthly fees for web hosting, paying a web developer to build your site and trying to maintain your website yourself you\'re spending a lot of time, headache and money. With our managed maintenance and hosting package, you can allocate less resources and achieve greater accomplishment. You are getting an integrated service that manages all aspects of your website for you so you don\'t have to!
            </p>
            <p>
                Our hosting service offers virtually no downtime and is based on an Amazon AWS cloud VPS hosting solution and includes a full cPanel interface with unlimited email accounts and a webmail interface along with free SSL certificates.  Code Monkeys ensures that your website remains up to date and secure by updating your CMS such as Wordpress and any plugins or components every month and ensures updates do not break you website.
            </p>
            <p>
                Just in case something ever does go wrong our entire server is backed up monthly and we maintain up to date backups of your entire website.  Even if you accidentally break your website yourself we will happily help you restore it to the last backup point.
            </p>
            <p>
                Code Monkeys also ensures that the server side software remains up to date and secure by periodically updating Apache, PHP, cPanel, WHM and MySQL.
            </p>
            <p>
                Our managed hosting service does NOT include troubleshooting code, bug fixes, page copy or asset updates, changing existing functionality or adding new functionality to your website.
            </p>
            <p>
                Our managed hosting service is $99/month and will be reflected in the SOW if selected.
            </p>
        </div>
        <div class="cm-proposals-terms">
            <h2 style="font-size:26px;text-align:center;">
                TERMS & CONDITIONS
            </h2>
            <p>
                This website proposal incorporates the website proposal terms and conditions provided online at <a href="https://www.codemonkeysllc.com/Web_Terms.pdf" target="_blank">https://www.codemonkeysllc.com/Web_Terms.pdf</a>. By signing this proposal you acknowledge you read, understood and agree to the terms and conditions.
            </p>
            <p>
                By signing this proposal you understand and agree to the proposed project schedule and payment structure proposed within this proposal.  Furthermore you understand and agree that failure to provide page copy, assets or reviews by the scheduled due dates will likely delay the project and that delays caused by [PARTNER COMPANY NAME] will in turn prevent Code Monkeys from meeting scheduled due dates.  You also understand and agree that your project may be placed on hold by Code Monkeys until these can be provided and that a new schedule will need to be determined before the project can be restarted.  You also understand and agree that Code Monkeys reserves the right to include an additional $300 fee to reactivate a project that has been placed "on hold" after <span style="text-decoration: underline;font-weight:bold;">30 DAYS</span> of inactivity.  You also understand and agree that project delays due to page copy, assets or reviews not being provided by their scheduled due dates will NOT delay the scheduled payment dates.
            </p>
            <p>
                By signing this proposal you understand and agree that if your project remains "on hold" longer than <span style="text-decoration: underline;font-weight:bold;">90 DAYS</span> the staging server version of your website may be removed and the project considered "dormant" by Code Monkeys.  You also understand and agree that Code Monkeys reserves the right to include an additional $1,000 fee to reactivate a project that has been considered "dormant" and to redeploy the project to the staging server.
            </p>
        </div>
        <div class="cm-proposals-agreement">
            <h2 style="font-size:26px;text-align:center;">
                ENTIRE AGREEMENT
            </h2>
            <p>
                This document together with any attachments, as well as any new, different or additional terms, conditions or policies which we may establish from time to time, and any agreement that we are currently bound by or will be bound by in the future, constitutes the complete and exclusive agreement between you and us concerning your engagement of us on this project, and supersede and govern all prior written and verbal communications.
            </p>
        </div>
        <div class="cm-proposals-signature">
            <h2 style="font-size:26px;text-align:center;">
                SIGNATURE
            </h2>
            <p>
                By signing this document, you represent to us that you are a duly authorized representative of [PARTNER COMPANY NAME] and upon its behalf agree to be legally bound by its terms and conditions. You hereby accept and authorize the commencement and payment for the project described above.
            </p>
            <p>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
            </p>
        </div>
    </div>
';