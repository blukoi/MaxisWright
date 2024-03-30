<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('head.php'); ?>

    <!-- Tailwind Play CDN (backup) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Page Title -->
    <title>Max is Wright - Academy Kiosk</title>

</head>
<body class="bg-academyblue/50">

    <?php require_once('nav.php'); ?>
    
    <!-- BODY CONTENT -->
    <main class="container mx-auto z-20">

        <!-- TITLE + HERO -->

        <!-- TITLE -->
        <div class="w-full text-center">
            <h1 class="mt-48 text-6xl from-[#2e95e0] to-[#b89848] bg-gradient-to-r bg-clip-text text-transparent">Data Visualization Through Gamification</h1>
        </div>


        <div class="w-full text-left grid grid-cols-12 h-screen relative">
            <div class="absolute z-30 p-4 right-0 w-72 h-72 p-8 bg-white rounded-full flex flex-col justify-center">
                <img src="./Assets/Images/Academy/Academy_of_Motion_Picture_Arts_and_Sciences_logo.svg" alt="The logo of the Academy of Motion Picture Arts and Sciences, showing an Oscar statuette silhouetted against the initial A." class="h-full">
            </div>
            <div class="w-96 mx-0 md:mx-4 pl-12 self-center absolute top-1/2 left-0 md:translate-x-0 -translate-y-1/4 z-20 md:-mt-24 lg:-mt-36">
                <img src="./Assets/Images/Academy/KioskHome.png" alt="A mockup of a 6-foot tall kiosk with a touchscreen, showing a starting screen and the question, 'How well do you know the movies?'">
            </div>
            <div class="w-48 pr-2 mt-4 mx-0 absolute top-1/2 left-0 md:translate-x-0 -translate-y-1/4 z-[21] opacity-50 md:-mt-24 lg:-mt-36">
                <img src="./Assets/Images/Academy/Silhouette1.svg" alt="A silhouette of a person standing next to the kiosk for scale.">
            </div>
        </div>

        <!-- BODY CONTENT -->
        <div class="flex flex-col">

            <!-- OVERVIEW -->
            <div class="mx-auto -mt-24 mb-24 md:-mt-48 md:mb-36 lg:-mt-64 xl:-mt-96 w-9/12 md:w-1/2 bg-white/50 backdrop-blur-md text-black p-4 rounded-md drop-shadow-2xl z-30">
                <h1 class="text-2xl mb-4">Overview</h1>
                <div class="text-sm space-y-4">
                    <p>The Academy Trivia Kiosk is a touchscreen kiosk designed to encourage movie-going audiences to engage with movie data. Conceptually, the experience is meant to take data relevant to movies, such as budget, box office, ratings, and more, and visualize it via gamification. The kiosk can be placed in movie theaters where audiences can interact with it freely.</p>
                    <p>Although the kiosk is meant to be a simple trivia-based quiz game to pique curiosity-based interaction, it could also be tied to rewards. When tied to a reward like discounted admission to the new Academy of Motion Picture Arts & Sciences Museum, for instance, the Academy could drive audiences to engage with both cinema in general as well as their specific revenue generating services.</p>
                    <p class="text-[8px] text-black/50 mt-2 leading-3"><span class="font-bold">Disclaimer:</span> Logo is property of the Academy of Motion Picture Arts and Sciences; this is a school project and is in no way affiliated with the Academy of Motion Picture Arts and Sciences.</p>
                </div>
            </div>

            <!-- PROJECT DETAILS -->
            <div class="mx-auto mb-24 md:mb-36 w-fit md:w-full flex flex-row flex-wrap justify-center md:justify-start items-center bg-white rounded-md md:rounded-full px-4 py-2 space-y-2 md:space-y-0 space-x-2">
                <h1 class="text-2xl text-academygold w-full md:w-fit text-center md:text-left">Details</h1>
                <span class="px-3 py-2 rounded-full bg-academyblue text-white text-sm">Touchscreen Kiosk Design</span>
                <span class="px-3 py-2 rounded-full bg-academyblue text-white text-sm">Data Visualization</span>
                <span class="px-3 py-2 rounded-full bg-academyblue text-white text-sm">2023</span>
                <span class="px-3 py-2 rounded-full bg-academyblue text-white text-sm">7 Weeks</span>
                <span class="px-3 py-2 rounded-full bg-academyblue text-white text-sm">Solo Project</span>
            </div>

            <!-- PROBLEM / MISSION STATEMENT -->
            <div class="mb-24 lg:-mb-16 mt-16 col-span-12 grid grid-cols-12 gap-4">
                <div class="col-span-8 md:col-span-6 lg:col-span-4 h-fit space-y-4 bg-white/50 backdrop-blur-md text-black p-4 rounded-md drop-shadow-2xl z-30">
                    <h2 class="text-2xl">Background</h2>
                    <p>I started this project in January while the global hit, "Everything Everywhere All at Once", was still smashing records and had just been re-released in theaters for a second time about 10 months after it had premiered. With a couple months until the 95th Academy Awards, and with a swirling Oscars debate, I started collecting data around Best Picture Nominees. This was partly for my own curiosity, to see if I could glean any kind of discernible patterns, but also with the intention of coming up with a way to visualize the data, making it easy to approach and understand.</p>
                </div>
            </div>

            <!-- IMAGE BREAK -->
            <div class="grid grid-cols-12 -mt-64 md:-mt-96 -mb-12 md:-mb-24 lg:-mb-36 drop-shadow-lg">
                <img src="./Assets/Images/Academy/Sheet1.png" alt="A spreadsheet of data about Best Picture nominees." class="rounded-md col-span-12 md:col-span-10 md:col-start-3 mask-transparent">
            </div>

            <!-- CONTENT SECTION -->
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-10 col-start-2 lg:col-span-6 lg:col-start-7 xl:col-span-6 xl:col-start-7 2xl:col-span-4 2xl:col-start-9 z-40">
                    <div class="bg-white/50 backdrop-blur-md text-black p-4 rounded-md drop-shadow-2xl">
                        <h1 class="text-2xl mb-4">The Data</h1>
                        <div class="text-sm space-y-4">
                            <p>I started by collecting data about the nominees for Best Picture for the 95th Academy Awards (the event happening in 2023) since they're supposed to be the best movies of the year. I started with baseline information in case it was relevant later, like the duration, budget, genre, and director. Then I got into the really tedious part: collecting the various ratings from different ratings services: IMDB, Rotten Tomatoes, and Metacritic. Each one uses a different rating system so I felt like I needed to aggregate them all. (A little ironic, I know, since Metacritic claims to be a rating aggregator.)</p>
                            <p>Once I had the data for the 2023 nominees I started to move back in time. You can't find patterns if you only have one, incomplete dataset. Before I knew it, I had 10 years-worth of data for Best Picture nominees and winners and started to notice some interesting factoids, even if I couldn't discern a pattern. For instance, it's rare for movies heavily preferred by general audiences, compared to critics, to even be nominated but the most notable such discrepancy, "Bohemian Rhapsody" (which was preferred by general audiences to critics with a difference of 25.33 out of 100 points), happened to be nominated in the same year that a similarly general audience-preferred film, "Green Book" (which was preferred by general audiences by 13 points), happened to win Best Picture. "Bohemian Rhapsody", in fact, has such a low overall aggregated rating that the only movie with a lower aggregated rating over the last 10 years, "Don't Look Up", only scores 4 points (out of 100) lower.</p>
                        </div>
                        <div class="w-full mt-4 flex flex-row justify-end">
                            <div class="w-fit rounded-md p-4 space-x-4 bg-academyblue hover:bg-academygold text-white hover:text-white flex flex-row cursor-pointer" id="ff-research-readmore">
                                <p>Read more</p>
                                <span class="material-symbols-rounded">
                                description
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- IMAGE BREAK -->
            <div class="grid grid-cols-12 mt-12 mb-12 lg:-mt-36 lg:-mb-36 drop-shadow-lg">
                <img src="./Assets/Images/Academy/Ideate/Ideate09.jpg" alt="A rough sketch showing how transparent cards containing data could be stacked." class="rounded-md col-span-6 col-start-4 md:col-start-1 -mb-8 md:-mb-36 z-[21]">
                <img src="./Assets/Images/Academy/Ideation1.png" alt="An ideation of a way to visualize move data, by using a line graph on transparent cards that can be stacked to compare the data." class="rounded-md col-span-12 col-start-1 md:col-span-10 md:col-start-3">
            </div>

            <!-- CONTENT SECTION -->
            <div class="mb-8 md:mb-24 grid grid-cols-12 gap-4">
                <div class="col-span-10 col-start-2 lg:col-span-6 lg:col-start-1 xl:col-span-6 xl:col-start-1 2xl:col-span-4 2xl:col-start-1 z-40">
                    <div class="bg-white/50 backdrop-blur-md text-black p-4 rounded-md drop-shadow-2xl">
                        <h1 class="text-2xl mb-4">Ideating Visualization</h1>
                        <div class="text-sm space-y-4">
                            <p>To start getting familiar with the data I just started to sketch a variety of different ideas of ways to visualize it. This included simple charts or Instagram slides but I also came up with ideas for collectible cards that the Academy could sell each year to eager cinephiles. All of these sketches started to give me a much better appreciation for the data and how easy/difficult it could be to understand.</p>
                            <p>With a bunch of ideas for charts and multi-level interactions, I took some time to just think about ways to display one movie's numbers. For instance, using a line graph across different categories, or displaying one movie as atomic data, like a unique shape where the different sides/size/color could represent different categories.</p>
                        </div>
                        <div class="w-full mt-4 flex flex-row justify-end">
                            <div class="w-fit rounded-md p-4 space-x-4 bg-academyblue hover:bg-academygold text-white hover:text-white flex flex-row cursor-pointer" id="ff-designing-readmore">
                                <p>Read more</p>
                                <span class="material-symbols-rounded">
                                description
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- IMAGE BREAK -->
            <div class="grid grid-cols-12 -mt-36 mb-12 lg:-mt-48 drop-shadow-lg gap-4">
                <img src="./Assets/Images/Academy/Ideate/Ideate05.jpg" alt="A rough sketch of a Best Picture nominee's ratings shown on a radar chart." class="rounded-md col-span-6 col-start-1 lg:col-span-5 lg:col-start-3 xl:col-span-4 xl:col-start-5">
                <img src="./Assets/Images/Academy/Ideate/Atomic2.jpg" alt="A rough sketch of a radar chart, showing how ratings would look, up close." class="rounded-md col-span-6 col-start-7 lg:col-span-5 gl:col-start-8 xl:col-span-4 xl:col-start-9">
            </div>

            <!-- ATOMIC DATA -->
            <div class="mb-24 mt-24 col-span-12 grid grid-cols-12 gap-4 font-light">
                <h2 class="col-span-12 text-center text-4xl text-white">Atomic Visualization of Data</h2>

                <div class="col-span-8 col-start-3 md:col-span-6 md:col-start-4 lg:col-span-3 lg:col-start-1 text-center bg-white text-black p-4 rounded-md h-fit">When talking about data visualization, an <span class="font-bold">"atom"</span> is the smallest possible piece of data. In context, one cell of a spreadsheet (one data point) would be an atom.</div>
                <div class="col-span-8 col-start-3 md:col-span-6 md:col-start-4 lg:col-span-3 lg:col-start-4 text-center bg-white text-black p-4 rounded-md h-fit"><span class="font-bold">Multiple atoms</span> can come together to form a singular visual. In context, one row of a spreadsheet would be represented by the atoms in that row.</div>
                <div class="col-span-8 col-start-3 md:col-span-6 md:col-start-4 lg:col-span-3 lg:col-start-7 text-center bg-white text-black p-4 rounded-md h-fit">In this way, a single graphic, like a polygon, can come to identify <span class="font-bold">4 or more data points </span>without having to involve anything other than size, shape, and color.</div>
                <div class="col-span-8 col-start-3 md:col-span-6 md:col-start-4 lg:col-span-3 lg:col-start-10 text-center bg-white text-black p-4 rounded-md h-fit"><span class="font-bold">Atomic representations of data can make it faster to digest complex data</span> because it's easier for an audience to see the differences between the representations.</div>
            </div>

            <!-- IMAGE BREAK -->
            <div class="grid grid-cols-12 mt-12 -mb-48 lg:-mb-52 drop-shadow-lg">
                <img src="./Assets/Images/Academy/Designing/Designing2.jpg" alt="A sketch showing the different steps through interacting with a touchscreen kiosk and how the data is displayed on different screens." class="rounded-md col-span-12 col-start-1 md:col-span-8 lg:col-span-6 lg:col-start-2 xl:col-span-5 xl:col-start-1 2xl:col-start-3">
            </div>

            <!-- CONTENT SECTION -->
            <div class="mb-8 md:mb-24 lg:-mt-24 xl:-mt-64 2xl:-mt-48 grid grid-cols-12 gap-4">
                <div class="col-span-10 col-start-2 md:col-start-3 lg:col-span-6 lg:col-start-6 xl:col-span-6 xl:col-start-7 2xl:col-span-4 2xl:col-start-7 z-40">
                    <div class="bg-white/50 backdrop-blur-md text-black p-4 rounded-md drop-shadow-2xl">
                        <h1 class="text-2xl mb-4">Designing a Physical Interaction</h1>
                        <div class="text-sm space-y-4">
                            <p>Up to this point, the majority of my visualizations were meant to be experienced via digital means, such as through social media or on a website. However, I'd realized that the Academy had a new museum and maybe I should think about a data display that could be used for or in the museum. I ideated a concept for a simple, interactive exhibit for the museum with some basic gamification as a way to encourage visitors to engage with the exhibit and the data.</p>
                            <p>Thinking of that concept for a physical display turned out to be the breakthrough I needed. Once I had the idea for a physical interaction, I realized that I could use a digital kiosk as a way to to both. A touchscreen kiosk would allow a physical interaction while still being able to visualize complex data. From here, it was a pretty simple iteration to be able to pull from a combination of my previous sketches to create a simple, linear flow to create a trivia experience for visitors to engage with multiple data points.</p>
                        </div>
                        <div class="w-full mt-4 flex flex-row justify-end">
                            <div class="w-fit rounded-md p-4 space-x-4 bg-academyblue hover:bg-academygold text-white hover:text-white flex flex-row cursor-pointer" id="ff-revisions-readmore">
                                <p>Read more</p>
                                <span class="material-symbols-rounded">
                                description
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FEATURE -->
            <div class="w-full text-left grid grid-cols-12 gap-4 mt-24 mb-24">
                <img src="./Assets/Images/Academy/KioskHint4.png" alt="A layout of prototype screens showing every frame/screen made for the animatic." class="rounded-md col-span-6 md:col-span-3 col-start-1">
                <img src="./Assets/Images/Academy/KioskComparison.png" alt="A layout of prototype screens showing every frame/screen made for the animatic." class="rounded-md col-span-6 col-start-7 md:col-span-3 md:col-start-4">
                <video class="bg-video__content col-span-12 col-start-1 md:col-span-6 md:col-start-7 mt-12 md:mt-0 rounded-md drop-shadow-lg self-center" title="Completed interaction using the kiosk; the user clicks through a series of hints, then guesses the movie correctly: 'Parasite'. Finally he gets a series of data visualizations about the movie." autoplay muted loop>
                    <source src="Assets/Images/Academy/Animatic.mp4" type="video/mp4">
                </video>
            </div>

            <!-- IMAGE BREAK -->
            <div class="grid grid-cols-12 drop-shadow-lg -mb-24 sm:-mb-48 lg:-mb-96">
                <img src="./Assets/Images/Academy/Everything.png" alt="A layout of prototype screens showing every frame/screen made for the animatic." class="rounded-md col-span-12 col-start-1">
            </div>

            <!-- CONTENT SECTION -->
            <div class="mb-48 lg:mb-96 lg:-mt-96 grid grid-cols-12 gap-4">
                <div class="col-span-10 col-start-2 md:col-start-3 lg:col-span-6 lg:col-start-7 xl:col-span-6 xl:col-start-7 2xl:col-span-4 2xl:col-start-9 z-40">
                    <div class="bg-white/50 backdrop-blur-md text-black p-4 rounded-md drop-shadow-2xl">
                        <h1 class="text-2xl mb-4">Reflections</h1>
                        <div class="text-sm space-y-4">
                            <p>I would imagine that a lot of interaction designers would find respite in data visualization. It can be easy to get lost in interaction design because, not only do you have to design the experience, you have to tell a story while you do it and sculpt the feelings around it. Data visualization has a kind of purity where you're just figuring out how to tell the story of the data. Designers also have a kind of obsession with simplicity and minimalism that can be a little aggravating, at times. However, data visualization is like a perfect balance of simplicity: you need enough data to tell the story but if you go a little too far it can easily become overwhelming.</p>
                            <p>After finishing the animatic of the flow, I realized that the first part for trivia worked great, but the data visualizations afterward were a little extra and maybe pushing beyond usefulness. Even though it's interesting information, it would be better served if I found a way to incorporate the information into the trivia instead of relegating it after the fact.</p>
                        </div>
                        <div class="w-full mt-4 flex flex-row justify-end">
                            <div class="w-fit rounded-md p-4 space-x-4 bg-academyblue hover:bg-academygold text-white hover:text-white flex flex-row cursor-pointer" id="ff-finalthoughts-readmore">
                                <p>Read more</p>
                                <span class="material-symbols-rounded">
                                description
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- BODY END -->

        <div class="flex flex-col">
            <div class="w-full grid grid-cols-12 gap-4 drop-shadow-lg my-48">

                <!-- MORE WORK -->
                <a href="./work.php" class="col-span-12 md:col-span-6 relative grid grid-cols-12 bg-transparent hover:bg-mint rounded-md mb-48 md:mb-0">
                    <div class="align-self-center col-span-12 col-start-1 grid grid-cols-12 gap-4 p-4 rounded-md">
                        <div class="col-span-6 col-start-7 px-4 py-2 bg-mint text-white rounded-md flex flex-col text-center">
                            <p class="hidden md:inline">&nbsp;</p>
                            <h3 class="text-xl sm:text-2xl lg:text-4xl font-bold">More Work</h3>
                        </div>
                    </div>
                    <div class="w-1/2 absolute top-1/2 left-0 -translate-y-1/2 rounded-md overflow-hidden mx-4">
                        <img src="./Assets/Images/Work.png" alt="A preview image showing an iPhone app mockup next to the coded website.">
                    </div>
                </a>

                <!-- NEXT PROJECT -->
                <a href="./fontfacing.php" class="col-span-12 md:col-span-6 relative grid grid-cols-12 bg-transparent hover:bg-mint rounded-md">
                    <div class="align-self-center col-span-12 col-start-1 grid grid-cols-12 gap-4 p-4 rounded-md">
                        <div class="col-span-6 col-start-1 px-4 py-2 bg-mint text-white rounded-md flex flex-col text-center">
                            <p class="opacity-50">Next Project</p>
                            <h3 class="text-xl sm:text-2xl lg:text-4xl font-bold">FontFacing</h3>
                        </div>
                    </div>
                    <div class="w-1/2 absolute top-1/2 right-0 -translate-y-1/2 rounded-md overflow-hidden mx-4 bg-white">
                        <img src="./Assets/Images/FontFacing/AI-Training.png" alt="A preview image showing 2 different stages of an app working on a physical, touch screen kiosk.">
                    </div>
                </a>

            </div>
        </div>

    </main>

    <!-- MODALS -->

    <!-- RESEARCH -->
    <article class="w-screen h-screen z-[100] fixed flex justify-center items-end cursor-pointer" id="ff-research-bg">
        <div class="w-12/12 md:w-9/12 xl:w-7/12 2xl:w-5/12 h-5/6 rounded-t-lg bg-white p-4 pb-16 drop-shadow-2xl cursor-auto container" id="ff-research-modal">
            <div class="flex flex-row justify-between h-fit">
                <h1 class="text-2xl mb-4">The Data</h1>
                <div class="w-8 h-8 flex justify-center items-center rounded-full hover:bg-fontfacingblue hover:text-white cursor-pointer" id="ff-research-close">
                    <span class="material-symbols-rounded">
                        close
                    </span>
                </div>
            </div>
            <div class="w-full h-full pb-8 overflow-auto rounded bg-black/5 p-4 grid gap-4 grid-cols-1 lg:grid-cols-12">
                <div class="text-sm space-y-4 opacity-50 col-span-12 lg:col-span-8">
                    <p>I started by collecting data about the nominees for Best Picture for the 95th Academy Awards (the event happening in 2023) since they're supposed to be the best movies of the year. I started with baseline information in case it was relevant later, like the duration, budget, genre, and director. Then I got into the really tedious part: collecting the various ratings from different ratings services: IMDB, Rotten Tomatoes, and Metacritic. Each one uses a different rating system so I felt like I needed to aggregate them all. (A little ironic, I know, since Metacritic claims to be a rating aggregator.)</p>
                    <p>Once I had the data for the 2023 nominees I started to move back in time. You can't find patterns if you only have one, incomplete dataset. Before I knew it, I had 10 years-worth of data for Best Picture nominees and winners and started to notice some interesting factoids, even if I couldn't discern a pattern. For instance, it's rare for movies heavily preferred by general audiences, compared to critics, to even be nominated but the most notable such discrepancy, "Bohemian Rhapsody" (which was preferred by general audiences to critics with a difference of 25.33 out of 100 points), happened to be nominated in the same year that a similarly general audience-preferred film, "Green Book" (which was preferred by general audiences by 13 points), happened to win Best Picture. "Bohemian Rhapsody", in fact, has such a low overall aggregated rating that the only movie with a lower aggregated rating over the last 10 years, "Don't Look Up", only scores 4 points (out of 100) lower.</p>
                </div>
                <div class="w-full h-0.5 bg-black/20 rounded-full my-6 col-span-12"></div>
                <div class="text-sm space-y-4 col-span-12 grid gap-4 grid-cols-1 lg:grid-cols-12">
                    <p class="col-span-8">To be fair, I actually started by <span class="italic">almost</span> obsessively looking up data visualizations. I don't recall having worked on a project specifically for data visualization, so I needed to understand the dos and don'ts, the good and bad, and get a feel for how other people deal with their data, and also look at the context in which people might interact with that data. Here you can see a remarkably poor visualization I found in my searches. It apparently tries to make the claim that there's a relationship between smoking and drinking, a dubious claim at best, while also making it extremely difficult to decipher the chart.</p>
                    <div class="col-span-6 col-start-1 lg:col-start-7 w-full rounded-md overflow-hidden">
                        <img src="./Assets/Images/Academy/Data/Data_1.png" alt="A dot chart with the axes labeled as 'Smoking' and 'Drinking' which has dozens of countries charted and is basically unreadable because of the density of information.">
                    </div>
                    <p class="col-span-8">When I started collecting data for the 95th Academy Awards, the winner hadn't been decided yet, which made the collection of data for previous years so interesting. The 10 Best Picture nominees for 2023 are as follows:</p>
                    <ul class="col-span-8 list-inside list-disc pl-4">
                        <li>All Quiet on the Western Front</li>
                        <li>Avatar: The Way of Water</li>
                        <li>The Banshees of Inisherin</li>
                        <li>Elvis</li>
                        <li>Everything Everywhere All at Once</li>
                        <li>The Fabelmans</li>
                        <li>Tár</li>
                        <li>Top Gun: Maverick</li>
                        <li>Triangle of Sadness</li>
                        <li>Women Talking</li>
                    </ul>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full rounded-md overflow-hidden">
                        <img src="./Assets/Images/Academy/Data/Data_2.png" alt="A spreadsheet with 10 rows showing the aforementioned movies and some of the basic statistics about them, including genre, budget, runtime, director(s), etc.">
                    </div>
                    <p class="col-span-8">I wasn't expecting to get so sucked into the data, but there's a kind of peace in the numbers. Once the data's there, you can start trying to find meaning. Now that the award's been given I know who's won, but at the time I was collecting this data it was new and exciting to try and figure out a pattern and guess who'd win. While collecting the data, I was struck by how differently each platform portrays their ratings.</p>
                    <ul class="col-span-8 list-inside list-disc pl-4">
                        <li>IMDB uses a score out of 10.0</li>
                        <li>Rotten Tomatoes' verified critics are rated as a percentage, plus an average out of 10.0</li>
                        <li>Rotten Tomatoes' users are rated as a percentage as well, plus an average star rating out of 5.0</li>
                        <li>Metacritic aggregates critics' reviews into a score out of 100</li>
                        <li>Metacritic user scores are averaged out of 10.0</li>
                    </ul>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full rounded-md overflow-hidden">
                        <img src="./Assets/Images/Academy/Data/Data_3.png" alt="A continuation of the previous spreadsheet, now showing 7 different ratings for each movie.">
                    </div>
                    <p class="col-span-8">With all of these scores, there's 7 numbers to keep an eye one. That makes it confusing, so I realized I'd need to make it simpler. The easiest way to normalize all of these systems is to get them all to a score out of 100. Therefore, a 7.6/10 on IMDB becomes a 76/100, a Rotten Tomatoes critic percentage of 84% with an average score of 7.9/10 becomes an 84/100 and a 79/100, respectively, etc.</p>
                    <p class="col-span-8">With normalized scores, I can easily aggregate them all. Adding them together and dividing by 7 gives a nominee a single, aggregated score which makes it easier to compare. Additionally, if I aggregate the critic scores and the general audience scores separately I can check for the difference between them, to see if the movie was preferred by critics or general audiences and how heavily it was preferred.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full rounded-md overflow-hidden">
                        <img src="./Assets/Images/Academy/Data/Data_4.png" alt="A continuation of the previous spreadsheet, now showing a series of normalized ratings for each movie followed by an aggregated/averaged rating for each movie and the difference in score between critics and general audiences.">
                    </div>
                    <p class="col-span-8">To round out my data I got the total number of Oscar nominations, including the Best Picture nomination, and the number they'd won. I also got the number of accolade nominations, in total, and the number of wins. After looking at all of this data, in the process of collecting it, I started to see some interesting patterns about the movies, but nothing like an idea of how to guess a winner.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full rounded-md overflow-hidden">
                        <img src="./Assets/Images/Academy/Data/Data_5.png" alt="The end of the previous spreadsheet, now showing the number of award nominations and wins for each movie.">
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- STARTING TO DESIGN -->
    <article class="w-screen h-screen z-[100] fixed flex justify-center items-end cursor-pointer" id="ff-designing-bg">
        <div class="w-12/12 md:w-9/12 xl:w-7/12 2xl:w-5/12 h-5/6 rounded-t-lg bg-white p-4 pb-16 drop-shadow-2xl cursor-auto container" id="ff-designing-modal">
            <div class="flex flex-row justify-between h-fit">
                <h1 class="text-2xl mb-4">Ideating Visualization</h1>
                <div class="w-8 h-8 flex justify-center items-center rounded-full hover:bg-fontfacingblue hover:text-white cursor-pointer" id="ff-designing-close">
                    <span class="material-symbols-rounded">
                        close
                    </span>
                </div>
            </div>
            <div class="w-full h-full pb-8 overflow-auto rounded bg-black/5 p-4 grid gap-4 grid-cols-1 lg:grid-cols-12">
                <div class="text-sm space-y-4 opacity-50 col-span-12 lg:col-span-8">
                    <p>To start getting familiar with the data I just started to sketch a variety of different ideas of ways to visualize it. This included simple charts or Instagram slides but I also came up with ideas for collectible cards that the Academy could sell each year to eager cinephiles. All of these sketches started to give me a much better appreciation for the data and how easy/difficult it could be to understand.</p>
                    <p>With a bunch of ideas for charts and multi-level interactions, I took some time to just think about ways to display one movie's numbers. For instance, using a line graph across different categories, or displaying one movie as atomic data, like a unique shape where the different sides/size/color could represent different categories.</p>
                </div>
                <div class="w-full h-0.5 bg-black/20 rounded-full my-6 col-span-12"></div>
                <div class="text-sm space-y-4 col-span-12 grid gap-4 grid-cols-1 lg:grid-cols-12">
                    <p class="col-span-8">I started sketching visualizations just as a way to better understand the data. At the beginning, I wasn't necessarily thinking about how the graphics would be used or the context in which they would be seen. I just wanted to start displaying the data and trying to make it digestible.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-4 gap-1">
                        <img src="./Assets/Images/Academy/Ideate/Ideate01.jpg" alt="A rough sketch of bar graphs showing movie award nomination wins." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/Academy/Ideate/Ideate02.jpg" alt="A rough sketch of bar graphs showing movie box office returns." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/Academy/Ideate/Ideate07.jpg" alt="A rough sketch showing the total Oscar nominations and wins of best picture nominations." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/Academy/Ideate/Ideate10.jpg" alt="A rough sketch of bar graphs showing movie award nomination wins." class="col-span-1 rounded-md">
                    </div>
                    <p class="col-span-8">Since I was sketching on square canvases, I pretty quickly realized that this could be a good opportunity for the Academy to present data in an engaging way via their Instagram account by using posts with 10 slides.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-2 gap-1">
                        <img src="./Assets/Images/Academy/Ideate/Ideate03.jpg" alt="A rough sketch showing a way to visualize data across multiple slides." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/Academy/Ideate/Ideate04.jpg" alt="A rough sketch showing a way to visualize data across multiple slides." class="col-span-1 rounded-md">
                    </div>
                    <p class="col-span-8">Once I got to thinking about how to actually engage with the information, and more interesting depictions than simple graphics, I also thought about physical media, like trading cards. The world is still going crazy for collectible trading cards, so why don't they exist for movies? Well, they could.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-2 gap-1">
                        <img src="./Assets/Images/Academy/Ideate/Ideate05.jpg" alt="A rough sketch of an idea for a collectible trading card showing movie ratings." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/Academy/Ideate/Ideate06.jpg" alt="A rough sketch of an idea for a collectible trading card showing Oscar award winners." class="col-span-1 rounded-md">
                    </div>
                    <p class="col-span-8">After thinking of different ways to display data, I wanted to think of more ways to encapsulate complex data with simpler graphics. Atomic representations of data can allow complex data with multiple points to be represented in a single visual element. Below, you can see that I'm exploring different ways to use a single graphic to represent multiple data points: a donut chart/percentage bar wrapped around a data point, a polygon where the number of sides and the color can mean different things, etc.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-4 gap-1">
                        <img src="./Assets/Images/Academy/Ideate/Atomic1.jpg" alt="A rough sketch of bar graphs showing an atomic data representation of multiple data points in one element." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/Academy/Ideate/Atomic3.jpg" alt="A rough sketch of bar graphs showing an atomic data representation of multiple data points in one element." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/Academy/Ideate/Atomic4.jpg" alt="A rough sketch of bar graphs showing an atomic data representation of multiple data points in one element." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/Academy/Ideate/Atomic5.jpg" alt="A rough sketch of bar graphs showing an atomic data representation of multiple data points in one element." class="col-span-1 rounded-md">
                    </div>
                    <p class="col-span-8">Finally, I iterated on all of these sketches to think of ways to use different atomic representations of data in combination with some of my other directions to display even more complex relationships between the movies and their data. I also tried to think about the design reaching to multiple cognitive levels for the different users who may need to see data in a reflexive, experiential, or learned way and the progressive disclosure that makes these different levels possible.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-4 gap-1">
                        <img src="./Assets/Images/Academy/Ideate/Cognitive1.jpg" alt="An example of a complex visualization that can reach to multiple cognitive levels and features atomic representations of data." class="col-span-12 rounded-md">
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- REVISIONS -->
    <article class="w-screen h-screen z-[100] fixed flex justify-center items-end cursor-pointer" id="ff-revisions-bg">
        <div class="w-12/12 md:w-9/12 xl:w-7/12 2xl:w-5/12 h-5/6 rounded-t-lg bg-white p-4 pb-16 drop-shadow-2xl cursor-auto container" id="ff-revisions-modal">
            <div class="flex flex-row justify-between h-fit">
                <h1 class="text-2xl mb-4">Designing a Physical Interaction</h1>
                <div class="w-8 h-8 flex justify-center items-center rounded-full hover:bg-fontfacingblue hover:text-white cursor-pointer" id="ff-revisions-close">
                    <span class="material-symbols-rounded">
                        close
                    </span>
                </div>
            </div>
            <div class="w-full h-full pb-8 overflow-auto rounded bg-black/5 p-4 grid gap-4 grid-cols-1 lg:grid-cols-12">
                <div class="text-sm space-y-4 opacity-50 col-span-12 lg:col-span-8">
                    <p>Up to this point, the majority of my visualizations were meant to be experienced via digital means, such as through social media or on a website. However, I'd realized that the Academy had a new museum and maybe I should think about a data display that could be used for or in the museum. I ideated a concept for a simple, interactive exhibit for the museum with some basic gamification as a way to encourage visitors to engage with the exhibit and the data.</p>
                    <p>Thinking of that concept for a physical display turned out to be the breakthrough I needed. Once I had the idea for a physical interaction, I realized that I could use a digital kiosk as a way to to both. A touchscreen kiosk would allow a physical interaction while still being able to visualize complex data. From here, it was a pretty simple iteration to be able to pull from a combination of my previous sketches to create a simple, linear flow to create a trivia experience for visitors to engage with multiple data points.</p>
                </div>
                <div class="w-full h-0.5 bg-black/20 rounded-full my-6 col-span-12"></div>
                <div class="text-sm space-y-4 col-span-12 grid gap-4 grid-cols-1 lg:grid-cols-12">
                    <p class="col-span-8">My first idea for a physical experience was to simply create a Best Picture-focused exhibit. The Academy could update the exhibit each year; following the Oscars they could update the exhibit to show who won, or add to the interactive experience by only showing the winner at the end of the exhibit; each year when the new nominees are announced they could also update the exhibit to reflect the new nominations and the updated exhibit could be a good draw for return visits. These updating exhibits could also be a fun way to display the relevant data with new and interesting visuals.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full rounded-md overflow-hidden">
                        <img src="./Assets/Images/Academy/Designing/Designing1.jpg" alt="A rough sketch of a conceptual, interactive museum exhibit and how the movie data would be displayed.">
                    </div>
                    <p class="col-span-8">A simpler and more achievable solution would be to create an interactive, digital kiosk. This would mean that, not only can you update for new nominees, but you wouldn't be limited to current nominees at all. The dataset could continuously update and include previous years and the interactions could be just as visually interesting as a physical display.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full rounded-md overflow-hidden">
                        <img src="./Assets/Images/Academy/Designing/Designing2.jpg" alt="A rough sketch of the different steps of an interactive kiosk screen and how the data would be displayed through multiple steps.">
                    </div>
                    <p class="col-span-8">That first iteration is a little too stiff. Some feedback I got was that I should consider doing some animations or include visuals during the hints, rather than only showing visuals after guessing the movie title. There's a Wordle copycat called <a href="https://framed.wtf/">Framed</a> where you guess the movie based on a series of 6 frames. I briefly thought about playing off that idea by incorporating a movie poster or movie still into the background, but blurred out, and after each successive hint it would become more clear. I realized, however, that could just be more confusing, especially since you're usually standing just a couple feet from the screen and the poster/still would be completely distorted, regardless. I decided to simply focus on a few data points to use as hints, animate them, and lead into additional data afterwards.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-3">
                        <img src="./Assets/Images/Academy/Designing/Designing3.png" alt="The starting screen of the interaction with a large button asking the audience how much they know about films." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/Academy/Designing/Designing4.png" alt="The completed hints of the interaction with a keyboard so that the user can make their guess of which movie the hints are referencing." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/Academy/Designing/Designing5.png" alt="The first data screen showing various ratings of the selected movie." class="col-span-1 rounded-md">
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- FINAL THOUGHTS -->
    <article class="w-screen h-screen z-[100] fixed flex justify-center items-end cursor-pointer" id="ff-finalthoughts-bg">
        <div class="w-12/12 md:w-9/12 xl:w-7/12 2xl:w-5/12 h-5/6 rounded-t-lg bg-white p-4 pb-16 drop-shadow-2xl cursor-auto container" id="ff-finalthoughts-modal">
            <div class="flex flex-row justify-between h-fit">
                <h1 class="text-2xl mb-4">Reflections</h1>
                <div class="w-8 h-8 flex justify-center items-center rounded-full hover:bg-fontfacingblue hover:text-white cursor-pointer" id="ff-finalthoughts-close">
                    <span class="material-symbols-rounded">
                        close
                    </span>
                </div>
            </div>
            <div class="w-full h-full pb-8 overflow-auto rounded bg-black/5 p-4 grid gap-4 grid-cols-1 lg:grid-cols-12">
                <div class="text-sm space-y-4 opacity-50 col-span-12 lg:col-span-8">
                    <p>I would imagine that a lot of interaction designers would find respite in data visualization. It can be easy to get lost in interaction design because, not only do you have to design the experience, you have to tell a story while you do it and sculpt the feelings around it. Data visualization has a kind of purity where you're just figuring out how to tell the story of the data. Designers also have a kind of obsession with simplicity and minimalism that can be a little aggravating, at times. However, data visualization is like a perfect balance of simplicity: you need enough data to tell the story but if you go a little too far it can easily become overwhelming.</p>
                    <p>After finishing the animatic of the flow, I realized that the first part for trivia worked great, but the data visualizations afterward were a little extra and maybe pushing beyond usefulness. Even though it's interesting information, it would be better served if I found a way to incorporate the information into the trivia instead of relegating it after the fact.</p>
                </div>
                <div class="w-full h-0.5 bg-black/20 rounded-full my-6 col-span-12"></div>
                <div class="text-sm space-y-4 col-span-12 grid gap-4 grid-cols-1 lg:grid-cols-12">
                    <p class="col-span-8">To be honest, I wasn't expecting to enjoy working with data so much. Of course, the entire field of Interaction Design works with qualitative data, but quantitative data lets you view the information in a whole different, almost impersonal way that lets you tell a more straightforward story.</p>
                    <p class="col-span-8">Working on these visualizations and the animatic, and thinking about how people would interact and engage with it, has given me a whole new appreciation for the subject. Finding that balance of just enough information to be insightful without overwhelming is a tough thing. I don't think I'm there yet, seeing as my animatic went a little too far, but I'm interested in trying again.</p>
                </div>
            </div>
        </div>
    </article>

    <?php require_once('footer.php'); ?>

</body>
</html>