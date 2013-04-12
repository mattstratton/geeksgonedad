<?php
/*
Plugin Name: Get Snarky
Plugin URI: http://andrewnorcross.com/plugins/get-snarky/
Description: This is a simple 'replacement' plugin for the original Hello Dolly. It's just funnier.
Author: Andrew Norcross
Version: 1.46
Requires at least: 3.0
Author URI: http://andrewnorcross.com
*/
/*  Copyright 2012 Andrew Norcross

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; version 2 of the License (GPL v2) only.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


if(!defined('SRK_BASE'))
    define('SRK_BASE', plugin_basename(__FILE__) );

if(!defined('SRK_VER'))
    define('SRK_VER', '1.46');

class Get_Snarky
{

    /**
     * This is our constructor
     *
     * @return Get_Snarky
     */
    public function __construct() {
        add_action          ( 'admin_notices',          array( $this,   'snarky_template'   ),  10      );
        add_action          ( 'admin_head',             array( $this,   'snarky_css'        )           );
        // custom template tag
        add_action          ( 'snarky_display',         array( $this,   'snarky_display'    )           );
    }

    /**
     * the snark itself. THE MAIN ATTRACTION
     *
     * @return Get_Snarky
     */

    public function array_of_snark() {

        $snark = array(
            'Violence only works if you use it',
            'Don\'t hit kids. No seriously, they have guns now.',
            'I always think three steps ahead. Step three is usually involves stabbing.',
            'I put the "I" in "I think you\'re an asshole."',
            'I say tomato, you say some of the stupidest, most annoying shit I have ever heard.',
            'The fact that women are walking around with purses all the time and not filling them with delicious pudding is beyond my comprehension.',
            'If you were stranded on an island and could only bring one Dave Matthews album, how would you kill yourself?',
            'Pajama jeans are finally giving women who wear sweat pants to bingo the touch of class they\'ve been looking for.',
            'There is no "I" in "team" but there is 3 U\'s in SHUT THE FUCK UP.',
            'Anyone who says an onion is the only vegetable that will make you cry has never been hit in the face with a pumpkin.',
            'Who in hell decided A: I can\'t have a pet sloth in this County and B: Ain\'t allowed to make him step on my homesmades wine grapes!?!?',
            'How the hell do these guys on TV convince women to commit murder for them? I can\'t even convince one to help me bury a body.',
            'If it hadn\'t been so funny, I would have been really pissed at the homeless person who narrated my walk of shame this morning.',
            'To some people, "I\'m turning into my parents" just means "I am snorting cocaine while listening to Huey Lewis and the News"',
            'Pretty sure it\'s legal to fire a tranquilizer dart at any child that\'s making pterodactyl sounds.',
            'Kerfuffle over my admission that being late was due to a hangover. You\'d think I put their last bit of childhood wonder in a snuff film.',
            'You know you were doing something awesome when the police decide burning down your house is the most reasonable way of dealing with you',
            'Having sex is a lot like chopping wood: You make similar faces and they\'re both easier with a chainsaw.',
            'If Zuckerberg really wanted to improve Facebook, he\'d make it stabbable.',
            'The internet really hates pants.',
            'I think my baby is going to be a politician when he grows up because it appears he\'s full of nothing but shit.',
            'Hey, remember that time I put rohypnol in your drink? EXACTLY!',
            'I turn into another person when I\'m drunk. I\'m like Dr. Jekyll and Mr. Pound-a-bottle-of-whiskey-cannon-ball-on-a-car-I-want-tacos.',
            'You can\'t tell me we\'ve made progress as a society until we have a film where zombies & robots having sex is natural.',
            'Wheel of Fortunes is another damned rerun. Guess I\'ll go train my dog to be a homophobe.',
            'Boxed wine goes quicker than a stank on a shit tree when you drink it outa big gulp cup.',
            'A fish doesn\'t need a bicycle, asshole.',
            'I\'m ok with Christmas in July, but fuck this Easter in August bullshit.',
            'Synonym is an antonym for antonym, but antonym is not a synonym for synonym. And I\'m not even high or anything.',
            'Feels like it could be a piss-in-the-hamper sort of Friday night ahead.',
            'Are waterbeds still a thing? What about penpals? I can\'t keep track of all this stuff anymore.',
            'There is a subtle difference between "quirky" and "I have a skin collection". Subtle, but important.',
            'The iced coffee at 7-11 is wish-fulfillment for anyone who has ever wanted to drink a bag of caramels.',
            'I assume all cheap motel rooms smell like shotgun shells and herpes.',
            'This guy looked at me like I was the crazy one when I brought a glass of red wine to the mattress store. Idiot.',
            'Is the side effect of eating meatballs for seven consecutive meals still a Camaro?',
            'A midget in a bar is a great story waiting to happen.',
            'The whole neighborhood seems offended by my son\'s trike nuts.',
            'Just ordered a cup of black coffee from Starbucks. Everyone stared.',
            'If you were in some old west gang and dragging a guy along the ground with your horse, It\'d probably make you really mad to look back and see him reading a magazine.',
            'Whenever speaking while completely naked, imagine your audience is listening, instead of calling 911 and macing you.',
            'Never let a baby play with chemicals unless it\'s just a household product like bleach. Bleach is okay.',
            'If my four year old\'s breath is any indication, she\'s going to be a professional dragon by the time she\'s 15.',
            'Unproductive day? I don\'t think you heard me -- I unlocked *17* levels in Angry Birds.',
            'When my generation is old, viagra commercials will be all "Has your disco stick lost its sparkle?" and shit.',
            'I\'m not sure if faking military service to eat for free at Applebees on Veterans Day is the most pathetic thing ever, but it\'s up there.',
            'There is a right way and a wrong way to defrost a chicken with a hair dryer. A lot of people don\'t know that.',
            'Never trust someone that wears colored contacts. They\'ve already lied to you.',
            'There are a lot of people who are nice, talented & awesome with almost zero negativity. They fucking scare me.',
            'This champagne tastes empty without accompanying cocaine and hookers.',
            'I\'m going to pretend I\'m not a sexually frustrated loser who just got a little horny watching an educational video on submarines.',
            'Things not to say when discussing site design: "If you think that looks good I\'d hate to see your wife."',
            'Tea Party members must go through a lot of throat lozenges.',
            'Every time you masturbate a kitten dies. Really? Show me my eight hundred thousand cute-as-buttons carcasses and then I\'ll believe you.',
            'Guy just rose past on a beach cruiser bicycle with ape hangers. Unaware there was a pussy division for biker gangs.',
            'I am lactose intolerant. And by "lactose" I mean "I fucking hate people"',
            'It\'s weird how deer in headlights always seem to have that "deer in the headlights look".',
            'The only thing I love more than peeing in the shower is peeing in the shower while I\'m using it.',
            'Any reports that Ronnie James Dio has died of anything other than a dragon attack are false.',
            'If you wanted cake maybe you should have been born today, asshole.',
            'It\'s all about hugs & understanding. And spearguns. Don\'t forget the spearguns.',
            'I\'m not a financial advisor so I had to find out on my own that "Buy and Hold" is a frowned upon lap dance strategy.',
            'Calling someone a cunt really ups the energy level of a meeting.',
            'A grown woman in a romper will fuck in a van. Remember that.',
            'I don\'t really remember why I Googled "giraffe penis", but I regret nothing.',
            'If you remember anything about the last time that one social media service went down, you\'re an asshole.',
            'An orchestra conductor is basically a guy who takes a shitload of credit for pushing the "play" button.',
            'I wish old people would just once admit shit\'s better now. We got breadless sandwiches motherfuckers.',
            'Every time you say you say the word "Huzzah!" I think of a new way to kill you with a q-tip and/or handkerchief.',
            'They\'re not all gems, folks.',
            'I am superior to Albert Eistein in one significant way: he\'s fucking dead. ',
            'Beer. Because you never got a pony.',
            'Got into a fight today with a woman where we both screamed and called each other idiots. God, I love youth soccer.',
            'Scarves are just pants for your neck that you shouldn\'t ever wear.',
            'In order to succeed, remember: when in doubt, turn left. X=7. "C" is the correct answer. And always, ALWAYS, caffeinate.',
            'For anyone wondering, this is my care face.',
            'I don’t hate you. Not even secretly.',
            'I said "hi" to a Puerto Rican guy today. I find this to be a giant leap forward in race relations. Not sure what the fuck "hola" means, though.',
            'I thought heaven was drinking 12-yr-old scotch & watching Bull Durham while getting a blowjob. But I\'m an Orthodox Heathen.',
            'Her: "I just watched a documentary about a chronic masturbator." Me: Define "chronic"',
            'Okay, the caffeine thing may have been a bad idea.',
            'Don\'t you hate waking up unsure where you are with this vague panic that doesn\'t go away even when you realize you\'re home? No? Me, either.',
            'Mom tolerates me in a "we can\'t eat him because we\'d go to jail" kind of way.',
            'Interesting how Twitter is becoming the alternative to talking to myself out loud. Now I\'m just screaming across the ether.',
            'Her: "So which shirt should I wear, the polka dots or the stripes?" Me: "That is like asking Hitler to pick his favorite kosher deli."',
            'Don’t worry, baby, when your womb is all dried up and useless, I’ll keep you around. As my sidekick.',
            'Telling me your problems do not alleviate mine. I don\'t need company in misery, I need you to do your job.',
            '[Indignant complaint] [Irony fail] [Alanis Morissette receives royalty]',
            'Dad: "Glen Beck makes some good points." Me, to Mom: "You sure you didn\'t fuck the mailman at least once?"',
            'She tell me, "I think you are having a meltdown." Like I have time for something meaningful and productive.',
            'My "I hate the holiday season" rant seems to come earlier every year.',
            'Three words you never want to hear in sequence: Unhusked Pineapple Catheter.',
            'Almost got hit by a cab going the wrong way on a one way street. But he gave me a thumbs up, so it\'s cool, right?',
            'I probably shouldn\'t mention the fact that I\'m burning down an Arby\'s right now. So don\'t mention it, ok?',
            'Dad\'s OK. Except, of course, the creepy skull collecting thing. Quite a lot of those where I grew up, actually.',
            'She\'s the kind of girl that puts the "Fuck You" in "Bitch"',
            'Crying over a cremated corpse will not rehydrate it.',
            'Thinking about regrowing the mustache. There just doesn\'t seem to be enough creepy people around.',
            'Hey, Monday, you\'re late, but...no, no, just because you\'re late doesn\'t mean we have to start over. We do? Fuck you, Monday.',
            'Wow. I\'m an angry, hypocritical little pissant today, huh?',
            'Talk Like A Pirate Day: 24 hours of people barely fluent in their native tongue attempting archaic slang because the internet said so.',
            'Finding an animal bone on the roof of your vehicle falls under the category of Disturbing but boarders directly on Creeped The Fuck Out.',
            'I don\'t really remember why I filled the bathtub with gasoline, but here we are.',
            'Waiting for the day when people stand up for ideas and not ideals. Also waiting for a taco. Not sure which I want more.',
            'Nah, you\'re not complicated. String Theory? Now THAT shit is complicated.',
            'My friend just asked me if I watched the Hills finale. We are no longer friends.',
            'For those wondering what I will be for Halloween, I don\'t need a costume. I have a mustache.',
            'There is a Post-It note on my desk that says "Gay Sex Flyer From High School." I really need to start a blog to explain that.',
            'Sometimes I think I can actually hear my liver telling me to go fuck myself.',
            'Just saw a custom license plate that read: BLACKMAN. PULMEOVR must have already been taken.',
            'Raining. I like to think they\'re God\'s tears. And why is God crying? Ben Affleck.',
            'If God didn\'t want you to punch a baby he would have given them a defense mechanism, like quills or something.',
            'When I hear someone say "Git-R-Dun" I want to "Murder-Death-Kill."',
            'Don\'t anthropomorphize your pets and pretend they speak through you. Mr. Widdy-Cuddles has more dignity than that.',
            'Either I\'m seeing spots or being visited by shiny wee folk. Not sure which is preferable.',
            'Waking up naked & alone with a hazy memory of the night before isn\'t a big deal. Finding your underwear in the microwave is.',
            'If it weren\'t for television and the internet, I wouldn\'t know how to murder someone.',
            'My octopus fetish is getting out of control.',
            'Being smarter than the average bear isn\'t saying much considering the average bear has yet to discover fire or work with primitive tools.',
            'I read that drinking coffee boosts performance so I did and I broke the treadmill and punched a baby and I can\'t unclench my jaw LIGHTENING!',
            'The five trillionth digit of Pi is a 2. If you find this interesting, contact me and for a fee, I can teach you how to get laid instead.',
            'I"m currently battling my sexual addiction to waffles. Stupid, sexy waffles.',
            'I love collective nouns: a pod of dolphins, a mob of kangaroos, a Gosselin of douches.',
            'When your mother asks if you are sexually active, the correct response is not "No, I just lie there."',
            'If you can fold a fitted sheet, you\'re obviously a witch.',
            'My coding ability is slightly better than a drunk horse with dyslexia. So if I think your code is shit, guess what? Your code is SHIT.',
            'Iggy Pop is worth a million in prizes. You? Twelve bucks. Tops.',
            'Things not to say in a meeting: "You\'re either a liar or an idiot. Pick one and let me insult you accordingly."',
            'What color of eyeshadow will bring out the hopelessness in my cold, dead eyes?',
            'I may have come across as confused and uninterested in that business meeting. Actually, I was totally drunk.',
            'I just hit a squirrel. He didn\'t even see my bat coming. Just ran right out in front of it.',
            'I heard that if you sneeze right at the point of orgasm, that you\'ll open some kind of secret portal.',
            'Hey hippie, you know what goes well with your iPad? A uterus.',
            'I am not the walrus. I am, however, very high.',
            'I didn\'t do the punch a baby joke or the cremation gag. How far out of line could I have been?',
            'Yelly yelly screamy screamy stabby stabby seems to be the preferred business model around here. In other news, ow.',
            'I bet Paul McCartney only dates two-legged women now.',
            'Just threw away my McGriddle wrapper at Whole Foods. The staff would\'ve been less horrified if I\'d discarded a dead hooker instead.',
            'I"m not trying to brag or anything, but my in-laws are dead.',
            'Been so long since I\'ve done laundry I need to buy socks to make it through the week. I know exactly what this says about me.',
            'Getting a Superman tattoo doesn\'t make you Superman. It makes you Supergayballs.',
            'Yes, I know it\'s easier to pillage then raze, but don\'t do things the easy way. Hush now. Nap time.',
            'I think we\'d be a happier society in general if the Magic 8-Ball was a High School Guidance Counselor.',
            'And with that, I\'m off to work. Those unicorns aren\'t going to feed themselves.',
            'Wow. I\'m full of douche today. Guess I should go get a spray tan.',
            'Blacks, Asians, Mexicans... Who cares? No one is doing shit about the real problem. Gingers are out there, right now, freckle fucking.',
            'Two Duraflame logs. A box of Milk Bones. A bottle of Astroglide. Try to figure me out, Walgreens cashier. Just try.',
            'I only smell like booze \'cause I got a drink spilled on me. The smell of desperation just comes naturally.',
            'Hey, remember that time that I gave a shit what you thought? No? Exactly.',
            'Need more people to show up for your event? Add the word "mosque" somewhere on the flier. Guarantees an uptick of 20%.',
            'If only I could get the internet to tell me I\'m pretty. Then I\'d be validated.',
            'Today\'s shaping up to be yesterday\'s slightly more attractive but still not quite fuckable sister.',
            'Taking the moral high road. LOL! Kidding! I\'m burying her in the desert.',
            'People who find all their answers in the Bible aren\'t asking any of the important questions.',
            'Work is starting a "Fun Committee." I\'d consider joining if we could replace "Fun" with "Stab."',
            'I will rule with the Iron Fist of Apathy. Or not. Whatever.',
            'I prefer to call whiskey "Uncle Joseppi\'s Punchy Juice."',
            'It took Michelangelo four years to paint the Sistine Chapel. Its taken my Sandwich Artist one year longer than that to make my fucking sub.',
            'If a Greek god can come back as a maiden-raping swan, surely Christ can appear on my Pop Tart.',
            'Not everyone is trying to hit on your chick so stop evil eyeing. I mean, yeah, I am trying to hit on her, but stop being a bitch about it.',
            'I should be excused from this meeting I\'m in on the grounds that I don\'t give a fuck and I would rather be sleeping at my desk.',
            'I\'m an organ donor, but I\'m pretty sure all they\'re going to use is my liver for "after" photos.',
            'I believe the children are our future. Also, I believe our future is fucked.',
            'Children\'s laughter really is the best medicine. well, except for heroin.',
            'I would probably have a lot more friends if I didn\'t hate other people so much.',
            'I got two words for you: I am freaking horrible at math.',
            'If it looks like a douchebag, and smells like a douchebag, then I must be walking by an Abercrombie & Fitch store.',
            'Stop looking at me like salamander wrestling isn\'t fucking hardcore.',
            'My downward spiral would make a great theme park ride.',
            'Sometimes life leaves a hundred dollar bill on your dresser, and you don\'t realize until later that it\'s because it fucked you.',
            'We all bleed the same color. Then again, you\'d have to stab everyone to verify that.',
            'Every clown has a silver lining. Be sure to remove this lining before use.',
            'If I ask you what\'s up and you say "the sky", they will never find your body. Ever.',
            'I drink a lot, so operating this phone is like fucking rocket algebra science geometry magic.',
            'Rape whistles are kind of annoying. I propose a rape flute.',
            'Lemme tell you outright... We\'re bad influences, all around.',
            'If you ever question yourself, your life choices, your sanity...just watch an episode of Hoarders and you\'ll be all good.',
            'If you put ketchup on your eggs no one will ever love you.',
            'Turns out, pounding a wooden stake through a vampire\'s heart works even if the guy\'s not a vampire.',
            'Dear Mom: Your son\'s hair length has crossed the line from "hip kid" to "my mother wanted a little girl".',
            'Not sure if you\'re a pretentious douchebag? Do you buy honey in a plastic flip-top bear? No? Pretentious douchebag.',
            'The monkey Sarah Palin uses to tweet for her is hilarious. It\'s almost like English, but with lots of monkey angst.',
            'Don\'t say it\'s not your fault - it is your fault. It\'s your fault that you\'re such a fucking dumbass.',
            'Has anyone actually seen this "constitution"? Not being able to search my neighbor\'s daughter\'s closet seems made up to me.',
            'I got a sunburn and it looks like Jesus\'s face. I\'m selling my leg on eBay. Starting bid .99¢',
            'It\'s a Replacements kind of day. Not so much the music as much as I\'m having beer for breakfast.',
            'Tell one anorexic she looks ugly when she cries and suddenly I\'M the asshole.',
            'Back in my day, werewolves showed some respect for their traditions and played basketball at least once in every movie.',
            'You know that moment, when your dad sends you to Wal Mart to buy your mom a Snuggie? That\'s when your life officially jumps the shark.',
            'Looks like the number one cause of pedophilia is still sexy children.',
            'No, no. Continue writing that creepy letter to your ex. Nothing rekindles love like Wing Dings.',
            'The only thing between you and a throatpunch is this coffee. If I were you, I\'d brew another pot.',
            'America: We will kill you in your sleep on Christmas!',
            'Retard is an insensitive and outmoded term. The preferred designation is, Former Governor Palin.',
            'Ever hear a rubber chicken scream? I have and it\'s not pretty.',
            'If you\'ve ever gone elbow deep on someone, then you\'ve given what I call a, "Jim Henson".',
            'It\'s always nice to have a baker\'s dozen of something, unless it\'s like stab wounds or something.',
            'In the Russian Roulette game of life, today was a "Click. Phew".',
            'Bukowski weekend starts now. Prepare the Liver Punch!',
            'The people picking up trash on the side of the freeway should be embarrassed that they didn\'t commit cooler crimes.',
            'I\'d be interested to see what\'s on the Carfax report of the Bangbus.',
            'Everyone at my house is topless and there\'s a barrel of wigs. Shit is real.',
            'A robot gang bang would probably be the loudest shit ever.',
            'Drunk crosswording. I\'m not sure what level of pathetic that qualifies me for.',
            'I made a mix-tape for a bear in case I ever encounter one. All the songs have \'honey\' in the title. I feel kind of maul-proof now.',
            'Polyurethane condoms are NOT dishwasher safe. Don\'t believe the hype!',
            'People who stress out about eating healthy and organic are tedious. Ego-centrism doesn\'t need a good cause. Just do it.',
            'Yes! Insert the light-bulb Clip Art. Because that should hide the fact that you spelled "definitely" with three A\'s.',
            'I really hate everything right now. But that now is now a then, so maybe I\'m just irked.',
            'When your dreams are having fire ants crawling through your veins & an arm severed by chainsaw, you tend to wake up tired. Also, disturbed.',
            'Did you just choose Comic Sans? Comic Sans. Really? Why not just type "I\'m A Virgin" in 72 point font.',
            'In baseball, the only truly "perfect game" involves at least one or more Taserings.',
            'I just fed a coyote a corndog. That sums up my Saturday pretty well.',
            'Fun Fact*: Unicorn farts smell like gumdrops. *Facts may not be true.',
            'My mom calls my new apartment "cozy", I call it "a court ordered 1,000 feet away."',
            'LADIES! Rather than a butterfly tramp stamp, why not go with something more real, like one of your father that never loved you?',
            'A dictionary? Okay. A thesaurus? Maybe. A usage book? Get the fuck out of my face.',
            'Gianormous Spiders: Nature\'s reminder that you are, in fact, a little girl',
            'The wife just made me a Lumpy. Seriously, "Smoothie" does not apply in this situation.',
            'Peace stagnates. Conflict mobilizes. Remember that.',
            'I never got the "Birds and the Bees" speech, I got the "Mom making Ken and Barbie scissor each other awkwardly" speech.',
            'Words not used nearly enough: frolic, smite, huzzah. We need more frolicing and smiting around here. Huzzah!',
            'Seriously, herons are a shit bird if there ever was one. I mean, at least pigeons can do flips and are cool with Mike Tyson.',
            'Kids, you don\'t have to listen in class anymore. The internet exists.',
            'Formspring: For when stars and RT\'s just aren\'t enough to keep you from crying yourself to sleep at night.',
            'For you, Mother\'s Day is 1 day a year. For me, it\'s every day I tell her she\'s the best roommate a 29 yr old guy could have.',
            'Do not be afraid to use exclamation points in your writing. They can sense fear.',
            'I have caffeinated myself to a Zen-like state of enlightenment.',
            'When someone tells you they are expecting, "Guess you failed the Save vs Conception roll, huh?" is not an appropriate response.',
            'Wanna listen to The Grateful Dead? "No, I\'m just gonna make myself dizzy then linger by this fat guy\'s armpit."',
            'Wanna listen to Jethro Tull? "No. I\'m just gonna go play Dungeons and Dragons in a damp field."',
            'The Mrs\' driving may or may not make me involuntarily release urine into my trousers.',
            'You shouldn’t buy me things. Save your money for unicorn rides or whatever it is girls spend money on',
            'I still can\'t get over the fact that we elected our first articulate president.',
            'Twitter - Where Canadians are socially acceptable!',
            'The girl at my work is about 3 inches taller than me and makes more money than I do. What\'s next, she has a bigger penis than I do?',
            'It\'s always the retard with the Flame Thrower. ALWAYS.',
            'I\'m getting an original Nintendo video game cartridge tattooed on my dick for.....well...obvious reasons.',
            'Muppets Can Have Bad Days, Too',
            'No matter where you live in L.A., you\'re only about a mile from someplace terrible.',
            'The way today is going I think even receiving a blow job would piss me off.',
            'Four words you never want to hear in a bathroom: "Hey, is this leprosy?"',
            'I\'m all puppy kisses and unicorn farts. Who wouldn\'t want to be around me?',
            'You say tomato I say "anything else on your sub sir?" MAN I love my new job!',
            'If I was an Arab, I\'d hate Jews, but I\'m a Jew, so I just kind of hate Jews.',
            'Clowns are just Satan\'s idea of what\'s funny',
            'You know it\'s way over the line when a joke makes me cringe. No, it wasn\'t the last one, it\'s the ones I haven\'t shared.',
            'You can stop writing songs about the rain. We get it.',
            'Taking your shoes & socks off probably breaches some heathen form of workplace etiquette',
            'Even at the age of 12, I knew St. Elmo\'s Fire was bullshit. Wonderful bullshit.',
            '9/11 kinda put an end to that "bongo drum in the park" guy\'s relevance. So, not all bad.',
            'It\'s close but, I think I\'d rather be Magic with HIV than a healthy Bird.',
            'My job has taught me never to say, "It can\'t get any worse." Old Milwaukee ads taught me never to say, "It don\'t get no better than this."',
            'You would think security would be tighter around the Master Plan',
            'If life hands you lemons, ask it if it knows where my 1987 mix tape is because it should know shit like that.',
            'It\'s a good day when you can work "succulent face meat" into a conversation.',
            'Most underappreciated hero of our time? Nerfman',
            'I listen to pretty much every kind of music. Roughly translated - "I\'m a fucking idiot."',
            'Hahahaha no, I don\'t have Restless Leg Syndrome Ma\'am, I just like kicking your baby.',
            'How do I know if something is inappropriate? If it makes makes me laugh for 5 minutes or longer',
            'Dreamt I was writing a song with Alan Jackson, Toby Keith & some other famous country star. Yeah, I have no idea either.',
            'Interesting how a little bit of fire makes people skittish.',
            'Note to managers: just because my job requires me to use the Internet does not mean I have some magical power over space & time.',
            'After seeing the headline "Baby suffers burns after hot bath" all I could think was "Didn\'t they learn from Rain Man"?',
            'Tonight\'s dinner is a blast from the past: pure, unadulterated hate.',
            'Remember, abstinence is only 99.99% effective',
            'Dude, you do not have a tail. Just admit you shit yourself and move on.',
            'Prewarning: If I hear Guns N\' Roses "Welcome To The Jungle", I will automatically start smashing shit! Including babies.',
            'You haven\'t lived until you\'ve bet on Hungry Hungry Hippos for shots.',
            'Oompa loompas don\'t sing in heaven. They tidy up the clouds.',
            'You can stop clapping now if you want. Really. You\'ll need your energy for cheering me later.',
            'Don\'t... Don\'t put the noodles and the dumplings together in the boat. They\'ll fight! The noodles are bullies. Poor dumplings.',
            'If you can fold a fitted sheet, you\'re obviously a witch.',
            'Why do they call it a happy meal if it tastes like depression.',
            'Why is "patience" a virtue? Why can\'t "hurry the fuck up" be a virtue?',
            'Sometimes life leaves a hundred dollar bill on your dresser, and you don\'t realize until later that it\'s because it fucked you.',
            'The fact that I just stained my running shoes with Hershey syrup should tell you everything you need to know about my current fitness level.',
            'Barefoot and pregnant is no way to go through life. It is, however, the way to go through WalMart.',
            'Some interesting facts I learned at the children\'s museum, lightning bugs are actually beetles and I hate children.',
            'I always get people gifts that I would want. Therefore, this year, you\'re getting a gun.',
            'My mouth tastes like poor choices.',
            'Hi, I\'m Your Wasted Potential. You may recognize me from shows like "You Should Definitely Major in Theatre" or "Why Are You Crying Again?"',
            'I figure I have two good years before my son figures out that I\'m an asshole.',
            'I haven\'t put on weight. Your eyes are fat.',
            'Been on hold so long I can\'t remember who I called. I have a credit card out and my pants off but that doesn\'t really narrow it down much.',
            'That belt really highlights where your waist would be if you had any self control.',
            'Was having trouble getting motivated today, but then "Eye of the Tiger" came on the radio and long story short I\'m out beating people up.',
            'For the record, many countries spell certain English words differently. For example, Canadians spell "health care" as "a basic human right"',
            'There\'s a thin line between wanting a child and wanting a vasectomy. That line is at the Disney Store.',
            'Joining a Facebook group about creative productivity is like buying a chair about jogging.',
            'This oatmeal tastes just like bacon because I threw it away and I\'m eating bacon.',
            'Jesus might love me but my girlfriend gives me blowjobs so religion is stupid.',
            'Love is like a brick. You can build a house, or you can sink a dead body',
            'Give a man a fish, he\'ll eat for a day. Teach a man to fish, he\'ll eat for life. Give an octopus nunchuks, no one\'s eating fish ever again.',
            'Jeremiah was a bullfrog. Was a good friend o mine. Never understood a single word he said because he\'s a fucking bullfrog.',
            'If you shit your pants you get to go home early.',
            'If someone tells you they fail at life, this means they are undead and should be destroyed immediately.',
            'Is there any kind of buttsex other than SURPRISE buttsex?',
            'Sweetie, I would never call you a dumbass unless I meant it.',
            'There\'s things I have to do in my life, but catching an STD in front of a live audience is not one of them.',
            'It\'s always disappointing when people show me their tattoos that "represent their baby" and it\'s not a bottle of vodka and a broken condom.',
            'Why are people always stealing my ideas? Like penis in vagina sex. MY IDEA.',
            'When my wife sees how drunk I was able to get in this short amount of time before she got home, she\'ll HAVE to be impressed.',
            'I\'m like Superman, except life is my kryptonite. And I undress in IHOP booths. And I wear a onesie. Still, I\'m pretty sure I can fly.',
            'I need romance! Like girlie mags! A fifth of rum! ROMANCE!',
            'I\'m thinking of a number between one and shut the fuck up.',
            'If you gave me a car made of diamonds and blowjobs all day I still wouldn\'t drink Coors Light.',
            'You cannot intimidate a browser with profanity, threats or physical violence. They just laugh at you in binary.',
            'You only think Kim Jong Il is in charge. He is the perfect puppet of the Platypus & Panda Proletariat.',
            'The correct response to a project status is not "I set it on fire & let it burn to the ground, whereupon I laughed & danced upon its ashes."',
            'Know what I love about you? No, love\'s the wrong word. Know what I HATE about you?',
            'Unintelligent design. Where I pay some drunk guy to design the universe. It\'ll explain flightless birds.',
            'Why don\'t you just cut off my thumbs and call it a complete evening',
            'Down south we have a saying: you can\'t turn a lobster into a shrimp.',
            'Since 9/11, the NYC skyline looks like a smiling kid who\'s missing his 2 front teeth.',
            'Telling your live-in girlfriend "I can\'t hang out tonight, I have a date" tends to end badly.',
            'The fact that American Standard is the name of a urinal says a lot about our culture.',
            'While at a funeral, if offered sacramental wine do not pull out a flask & say, "It\'s cool, I got it."',
            'Don\'t leave the duck there. It\'s totally irresponsible. Put it on the swing, it\'ll have much more fun.',
            'I demand compensation in cola bottles. Lots of fizzy cola bottles. In one lump sum.',
            'What part of DIE IN A FIRE didn\'t you understand? Step 1: Build a fire. Step 2: Die in it.',
            'Of course the zombie loved me. She gave me her heart. Mmmmm-hmmm. And her hand in marriage. ',
            'Don\'t really know what \'brah\' means, but it\'s already a word I want to brush off my screen with a baseball bat.',
            'Keep looking at the sun like that, your eyes will dry up like raisins and fall out of your skull.',
            'Singing & dancing, screaming & writhing...really, it\'s all a matter of perception.',
            'I have a weasel on a stick because being beaten with a stick is embarrassing enough. Weasel bites are a shame that never go away',
            'Look at the size of your bath. I can pee in it and you\'d never notice.',
            'I need a job where the ability to thoroughly explain why your idea is fucking stupid is held in higher regard.',
            'There is a Buddy Christ on my desk. When people say stupid things I put water on its face and tell them, "You make Jesus cry."',
            'Bad Interview Answers: There was a lot of yelling so not sure if I quit or was fired. The fire wasn\'t MY fault, though.',
            'I\'ve got two things to say to you: fuck and off. Capish?',
            'I wish there was some way to know what kind of cars rappers drive; or which brands of alcohol they prefer.',
            'Hey daters: like long walks on the beach? So do psycho drifters, weirdos with metal detectors, & loopy women in tampon commercials.',
            'Its called a gyro. Due to the fact that lamb meatloaf sandwich with yogurt sauce wasn\'t selling well.',
            'When asked to describe the workplace environment, do not respond, "Working here hurts my soul."',
            'Placing a rubber duck in the water cooler doesn\'t make the office "closer to nature."',
            'Coworker: Are you living the dream? Me: If by "dream" you mean "wake up screaming while praying for death," then yeah.',
            'Who has two thumbs and just spent $20 downloading tracks by 80\'s Japanese metal band Loudness? Yeah, probably not YOU.',
            'Buy this truck and PUNCH MOTHER NATURE IN THE FACE.',
            'I never went to college but I\'ve passed out in my own vomit so same thing.',
            'I always refer to husband as "the love of my life" because "the biggest fucking mistake I ever fucking made" is just too damn long to say.',
            'Is it okay that before almost every decision I make I think, "Okay. What wouldn\'t dad do?"',
            'If you see a maximum occupancy sign in a funeral home, do not ask if that includes the corpse.',
            'I\'d kick Martha Stewart\'s ass at Scrabble',
            'Reading the Wikipedia entry for "Trapper Keeper" at 1:48 AM because OH MY GOD WHAT HAPPENED TO MY LIFE?',
            'For the past two days I\'ve had a headache that could kill a moderately hardy guanaco.',
            'Really want to surprise someone? Throw a 40th birthday party on their 29th birthday. They\'ll never expect that.',
            'I felt like snuffing the christmas cheer from their vacant little eyes.',
            'I think I\'ll ask the dentist to install tusks in my face so I can fully embrace my orcish heritage.',
            'Yeah, crazy girls are the best in bed. They\'re also the most likely to bite off your weiner.',
            'You know, teddy bears and robots are mortal enemies. Really, it\'s been a few years now.',
            'I know I\'m not supposed to operate heavy machinery while on this much vicodin, that\'s why the cruise control is on.',
            'I\'m really good at lying in bed naked. World class.',
            'It\'s not so much the fact there are voices in my head, it\'s more that they\'re SCREAMING.',
            'Intern: Why are you smiling? Me: Just in a good mood. Intern: You finally figured out how to kill someone and get away with it, didn\'t you?',
            'Dating Tip: When asked for your "People/Celebrities You\'re Allowed to Sleep With" list, don\'t fill it with people you actually know.',
            'We have determined to hash out our differences over Percocet and whores.',
            'You can prevent crying while peeling onions by chewing gum. You can prevent crying in other situations by not being such a little bitch.',
            'Emo: It\'s Like Goth, But For Pussies'

            );

        // now we get one at random
        $random = array_rand($snark, 1);

        // And then send it back
        return $snark[$random];
    }

    /**
     * grab the snark
     *
     * @return Get_Snarky
     */

    public function snarky_template() {
        $snark = $this->array_of_snark();
        echo '<p id="snarky-admin">'.$snark.'</p>';
    }

    /**
     * display snark on theme via template tag
     *
     * @return Get_Snarky
     */

    public function snarky_display() {

        $snark = $this->array_of_snark();

        echo '<p class="snarky-display">'.$snark.'</p>';

    }

    /**
     * add CSS to display snark
     *
     * @return Get_Snarky
     */

    public function snarky_css() {
        // This makes sure that the positioning is also good for right-to-left languages
        $x = is_rtl() ? 'left' : 'right';

        echo '
        <style type="text/css">
        #snarky-admin {
            float: '.$x.';
            padding-'.$x.': 15px;
            padding-top: 5px;
            margin: 0;
            font-size: 11px;
            font-weight: 700;
        }
        </style>
        ';
    }

/// end class
}

$Get_Snarky = new Get_Snarky();

/**
* add optional Get Snarky widget
*
* @return Get_Snarky
*/

class SnarkyWidget extends WP_Widget {

    function __construct() {
        $widget_ops = array('classname' => 'snarky-widget', 'description' => __( 'Displays a random Get Snarky comment') );
        parent::__construct('snarky-widget', __('Snarky Widget'), $widget_ops);
    }

    function widget( $args, $instance ) {
        extract($args);
        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

        echo $before_widget;
        if ( $title )
            echo $before_title . $title . $after_title;

        $snark = Get_Snarky::array_of_snark();
        echo '<div class="textwidget">';
        echo '<p class="snarky">'.$snark.'</p>';
        echo '</div>';

        echo $after_widget;
    }

    function form( $instance ) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => 'Get Snarky!') );
        $title = $instance['title'];
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label>
        </p>

    <?php
        }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $new_instance = wp_parse_args((array) $new_instance, array( 'title' => ''));
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }

}

add_action( 'widgets_init', create_function( '', "register_widget('SnarkyWidget');" ) );
