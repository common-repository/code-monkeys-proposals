=== CODE MONKEYS PROPOSALS - Easily create client proposals from your Wordpress admin dashboard ===
Contributors: Sfraise77, Dmoore8200
Tags: proposals, sow, scope of work, code monkeys, web design, web development
Requires at least: 4.7
Tested up to: 4.9.2
Stable tag: 1.0.1
License: GPLv2

Easily create, save and convert client proposals to PDF from your Wordpress admin dashboard.

== Screenshots ==
1. This shows the WP admin dashboard interface for the plugin.

== Description ==
WHY WE BUILT THIS PLUGIN:
The Code Monkeys proposals plugin was initially built for our own web design and development agency to help us create proposals and SOWs much more efficiently.

We wanted a way to create proposal templates for our various services such as partner proposals with other web design and digital marketing agencies, direct client subscription website packages, direct client traditional website builds, SOW addendums, etc.

Our concept was to then allow "placeholders" which we could populate our templated proposals with that we could then replace using simple inputs.  By doing this we're able to fully customize our proposals for our prospective clients in seconds.

While placeholders are great, every proposal we send is tailored specifically for our clients and every project has it's own unique aspects that need to be called out so we also needed a way to add or change aspects of the template for each proposal we create.  Basically the template and the placeholders do 90% of the initial work but we still have the ability to customize other aspects as we see fit.

Finally, once our proposal was complete we needed a way to convert it into a PDF file which we could save and then send to the client (or in our case upload to CudaSign for the client to sign digitally).


WHY WE RELEASED IT FOR FREE TO THE WP COMMUNITY:
We have a saying here, if we want something chances are other people want it too!

We do a lot of "white label" development for other web design and digital marketing agencies and consultants and one thing we ALL seem to struggle with is the administration side of our businesses and ensuring we're spending more time designing or writing code and less time doing up-front busy work such as writing proposals and SOWs.  Figuring out ways to compensate ourselves for time spent on these types of tasks can be a challenge and especially those of us that are newer to this business find ourselves spending hours on this stuff basically unpaid.

Sure, there are some paid services out there to help make this aspect more efficient but we're all already nickle and dimed to death.  Between Adobe Suite, BrowserStack, hosting accounts, project management tools, rent and utilities our overhead adds up quick and one more monthly bill is the one thing we DON'T need!  Since we have the chops to build what we need in house we just as well build it ourselves the way we want it and eliminate one more potential cost.

So then, since we figured that we were going to build this for ourselves anyway why not just release it to the WP community?  Of course we do have a bit of an ulterior motive for releasing it, it does help push our brand recognition and there's always the off chance that we might get a project or two from those of you that use it.


== Installation ==
1.  Upload your plugin folder to the '/wp-content/plugins' directory.
2.  Activate the plugin through the 'Plugins' menu in WordPress.


== Frequently Asked Questions ==
QUESTION: How do I create a proposal template?
ANSWER: The plugin comes pre-loaded with an example template based on our own direct client subscription website package proposal.  You can either tweak the example template or create a brand new one from scratch.

To tweak the example template just click on the toggle switch at the top right to switch to the template view.  Once it switches to the template view just make your changes in the wysiwyg editor until you get the template the way you want it.  Once you're happy with your template hit the "save all" button and your template will be saved.  To see your changes in the proposal view you'll need to refresh the page, a future version of the plugin will have the edits in the template automatically update the proposal wysiwyg content but we wanted to get this out as soon as possible for now.

Once your template is how you want it you can add placeholder input by simply clicking on the "new placeholder" button from the proposal view.  You can add whatever you want as a placeholder and when you start typing in the placeholder input anything that matches your placeholder in the wysiwyg editor will get updated with that value.  To change a placeholder value of an input click the pencil icon to drop down another input where you can add your placeholder.  If you decide to delete a placeholder just click on the trash can icon to remove it.

Remember, any changes you make will not be permanent until you hit the red "save all" button.

If you would rather start from scratch as opposed to just editing the default starter template click on the "new proposal" button in the tabs column.  This will add a tab labled "new proposal" with a blank template wysiwyg editor.  Build your template however you want and once you're done switch over to the proposal view and add your placeholder inputs.  Remember to hit the red "save all" button when you're finished to save everything or else everything will be lost when you reload the page.


QUESTION: How do I create a proposal from a template?
ANSWER: From the proposal view fill in the placeholders with your specific project information.  You can change anything in the proposal view wysiwyg editor you want to customize the proposal for your client and their specific project.  Don't worry about saving anything while in this view as it will not effect your actual template.

Once you have your proposal just the way you want it click on the red "generate pdf" button at the bottom of the wysiwyg editor.  This will generate a PDF version of your proposal which gets saved to the plugin "proposals" directory and you can either print or download to send to your prospective client.  If you want to view past generated PDF proposals just click on the "view generated proposals" button to see a list of your proposals.  This interface is still fairly basic but will most likely be improved over future releases.

Here at Code Monkeys we take the PDF version of the proposal and upload it to CudaSign which our prospective clients can digitally sign.  While this method works well for us we've tried to build this tool as generic as possible so you can make it work with your own workflow and processes as seamless as possible.


QUESTION: How do I add placeholders?
ANSWER: From the proposal view click on the "new placeholder" button.  This will generate a new placeholder input along with a secondary input to add the placeholder value for what you want to replace.  Once you're done adding the placeholder value just click on the pencil icon to toggle slide the secondary input so it's no longer visible.  Whatever you add as the placeholder value is what will get replaced in the wysiwyg editor when you type in the main input.

To be honest the placeholders functionality and interface was a bit of a challenge for us from an engineering perspective.  Our challenge was finding a way to allow everyone to add their own placeholders in whatever manor they wanted while still keeping it functional.  Had we just built this plugin for ourselves internally this aspect would have most likely worked much differently.

Personally, we like to create our placeholders with brackets (ie. [CLIENT COMPANY NAME]), but perhaps that's not how you want your placeholders to work.  Perhaps you're importing something from some other tool that uses double curly braces (ie. {{}}).

After a lot of thought and deliberation we decided to just let you do your own thing however you want, whatever you set as the placeholder value is what will get replaced in the wysiwyg editor.  For example, if you set [CLIENT COMPANY NAME] as your placeholder value anywhere you put [CLIENT COMPANY NAME] in the editor will get replaced when you type in that input.  If you add the word "this" as your placeholder value anywhere the word "this" exists in the editor will get replaced with what you type in that input.

While we could have made the interface for placeholders much more constrained we felt the better option was to allow you to do your own thing however you want to do it.  After all you are web designers and developers so you should have a certain level of savvy to begin with so why try to constrain you?


QUESTION: What is the meaning of life?
ANSWER: True

QUESTION: How many proposal templates can I have?
ANSWER: As many as your little heart desires.

QUESTION: Why is this plugin free?
ANSWER: Because we're awesome (and we hope you'll think of us the next time you need help with development ;)).  Plus we wanted to build it for ourselves anyway so why not share the joy?

QUESTION: Will this plugin make all of my dreams come true?
ANSWER: Probably not unless all of your dreams revolve around proposals (which is a little weird to be honest), but it can't hurt.

QUESTION: Have you ever heard the Code Monkey song?
ANSWER: Yes, and Code Monkey like you. (Do they still make Tab?)

QUESTION: Speaking of songs, what's your favorite song?
ANSWER: At this moment "Flagpole Sitta", I can't get the dang thing out of my head today!

QUESTION: What are PDF placeholders?
ANSWER: PDF placeholders are placeholders that effect how the proposal renders in a PDF file.  Currently the only PDF placeholder we had setup is the [PAGEBREAK] option which will start a new page where ever you place that placeholder.  We will most likely add additional PDF placeholders in future versions of the plugin.

QUESTION: Can I rebrand and sell your plugin as my own?
ANSWER: No, that would be a pretty slimy thing to do no?  Would you also like to rebrand my house as your own and just start living in that as well without paying anything?  Maybe take my kids and rebrand them as your own and make them start calling you daddy?  Maybe you'd like to rebrand yourself as me and start presenting yourself as me, sleeping with my wife and filing taxes under my social security number?  That's not weird at all right?  Trust me, although being me is pretty great it does come with it's downsides as well.  You see, many years ago I met a person at a cross roads and he offered me a deal, my soul to be the greatest developer alive.  Obviously I took the deal but if you want to me someday you'll have to pay the price in my place ;).

