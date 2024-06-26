<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('head.php'); ?>

    <!-- Tailwind Play CDN (backup) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Page Title -->
    <title>Max is Wright - FontFacing</title>

</head>
<body class="bg-lightishblue">

    <?php require_once('nav.php'); ?>
    
    <!-- BODY CONTENT -->
    <main class="container mx-auto z-20">

        <!-- TITLE -->
        <div class="w-full text-center">
            <h1 class="mt-48 mb-36 text-6xl from-mint via-[#122f3c] to-[#2d72f7] bg-gradient-to-r bg-clip-text text-transparent">AI-Driven Typeface Design</h1>
        </div>

        <!-- BODY CONTENT -->
        <div class="flex flex-col">

            <!-- HERO IMAGE -->
            <div class="flex justify-end">
                <div class="w-11/12 md:w-9/12 rounded-lg overflow-hidden drop-shadow-lg">
                    <!-- <img src="Assets/Images/FontFacing/Hero_Image.png" alt="Mockup of a desktop application for the graphic design of typefaces, featuring an artboard where a letterform is being worked on and the toolbars and menu options available."> -->
                    <video class="bg-video__content" title="Mockup of a desktop application for the graphic design of typefaces, featuring an artboard where a letterform is being worked on and the toolbars and menu options available." autoplay muted loop>
                        <source src="Assets/Images/FontFacing/Hero_Animated_Compressed.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

            <!-- OVERVIEW -->
            <div class="-mt-24 mb-24 md:-mt-36 md:mb-36 w-9/12 md:w-1/2 bg-fontfacingblue/50 backdrop-blur-md text-white p-4 rounded-md drop-shadow-2xl">
                <h1 class="text-2xl mb-4">Overview</h1>
                <div class="text-sm space-y-4">
                    <p>FontFacing is a desktop app designed to speed up workflows when designing typefaces and letterforms. At its core, the goal is to design the visual interface around a system which uses artificial intelligence and machine learning in a way which helps the user understand how the system is working under the hood and so that the user has input in the way the system is working, analyzing, and training.</p>
                    <p>Although the final deliverable isn’t meant to be a working AI system, the foundational research and overall concept has to point to a system with real-world feasibility and the visual design has to highlight the featured AI systems. This is not a platform where the AI is an afterthought, it has to be an integral part of the concept.</p>
                </div>
            </div>

            <!-- PROJECT DETAILS -->
            <div class="mx-auto mb-24 md:mb-36 w-fit md:w-full flex flex-row flex-wrap justify-center md:justify-start items-center bg-fontfacingblue rounded-md md:rounded-full px-4 py-2 space-y-2 md:space-y-0 space-x-2">
                <h1 class="text-2xl text-white w-full md:w-fit text-center md:text-left">Details</h1>
                <span class="px-3 py-2 rounded-full bg-white text-fontfacingblue text-sm">Desktop App Concept</span>
                <span class="px-3 py-2 rounded-full bg-white text-fontfacingblue text-sm">2023</span>
                <span class="px-3 py-2 rounded-full bg-white text-fontfacingblue text-sm">14 Weeks</span>
                <span class="px-3 py-2 rounded-full bg-white text-fontfacingblue text-sm">Solo Project</span>
            </div>

            <!-- HOW MIGHT WE + STEP ONE -->
            <div class="mb-24 md:mb-36 grid grid-cols-12 gap-4">
                <div class="col-span-10 col-start-2 md:col-span-8 md:col-start-3 grid-cols-12" data-aos="fade-up">
                    <h2 class="col-span-12 text-center text-4xl text-fontfacingblue"><span class="px-4 py-2 bg-fontfacingblue/50 text-white rounded-md">How might we</span> integrate artificial intelligence features into the user interface of a platform?</h2>
                </div>
                <div class="col-span-10 col-start-2 md:col-span-8 md:col-start-3 lg:col-span-6 lg:col-start-4 grid-cols-12 flex justify-center" data-aos="fade-up">
                    <svg 
                    width="212" 
                    height="212" 
                    viewBox="0 0 212 212" 
                    fill="none" 
                    xmlns="http://www.w3.org/2000/svg"
                    class="stroke-[#122f3c]">
                        <path d="M106 6V206" stroke-width="4" stroke-linecap="round"/>
                        <path d="M89 189.971L105.971 206.941L122.941 189.971" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="col-span-10 col-start-2 md:col-span-8 md:col-start-3 lg:col-span-6 lg:col-start-4 grid-cols-12" data-aos="fade-up">
                    <h3 class="col-span-12 text-center text-2xl text-fontfacingblue"><span class="px-2 py-1 bg-fontfacingblue/50 text-white rounded-md font-bold">Start by researching</span> the strengths and weaknesses of AI platforms so you can figure out where in the user flow it belongs.</h3>
                </div>
            </div>

            <!-- CONTENT SECTION -->
            <div class="mb-8 md:mb-24 grid grid-cols-12 gap-4">
                <div class="col-span-11 sm:col-span-8 md:col-span-6 lg:col-span-5 drop-shadow-lg z-30">
                    <div class="bg-video rounded-lg overflow-hidden relative col-span-2 md:col-span-1" data-aos="fade">
                        <video class="bg-video__content" title="Different versions of the letter 'A' put into a training model" autoplay muted loop>
                            <source src="Assets/Images/FontFacing/Training/Letter_A_Input.mp4" type="video/mp4">
                        </video>
                        <div class="absolute top-4 left-4">
                            <p class="text-xs text-black/20">30 different <span class="italic">A</span>'s as input</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-11 col-start-2 sm:col-span-8 sm:col-start-5 md:col-span-6 md:col-start-7 lg:col-span-5 lg:col-start-8 drop-shadow-lg z-30">
                    <div class="bg-video rounded-lg overflow-hidden col-start-2 md:col-start-3 relative col-span-2 md:col-span-1" data-aos="fade">
                        <video class="bg-video__content" title="A variety of different versions of the letter 'A' that were generated by the completed training model" autoplay muted loop>
                            <source src="Assets/Images/FontFacing/Training/Letter_A_Output2.mp4" type="video/mp4">
                        </video>
                        <div class="absolute top-4 left-4">
                            <p class="text-xs text-black/20">36 different generated <span class="italic">A</span>'s</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-10 col-start-2 lg:col-span-6 lg:col-start-4 xl:col-span-6 xl:col-start-4 2xl:col-span-4 2xl:col-start-5 -mt-16 lg:-mt-24 z-40">
                    <div class="bg-fontfacingblue/50 backdrop-blur-md text-white p-4 rounded-md drop-shadow-2xl">
                        <h1 class="text-2xl mb-4">Research & Background</h1>
                        <div class="text-sm space-y-4">
                            <p>I started this project by researching how training models are made and making a couple myself. By using the available tools at RunwayML I was able to train image generating models in order to see, firsthand, how an AI system analyzes the material its given and, thereafter, what it can produce.</p>
                            <p>After also doing some research into AI platforms working with vector graphics, I solidified the concept I had in mind: a design and editing platform working with SVGs, supported and driven by AI to make it faster and easier for designers to build out the entirety of a typeface.</p>
                        </div>
                        <div class="w-full mt-4 flex flex-row justify-end">
                            <div class="w-fit rounded-md p-4 space-x-4 bg-fontfacingblue hover:bg-white text-white hover:text-fontfacingblue flex flex-row cursor-pointer" id="ff-research-readmore">
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
            <div class="grid grid-cols-12 mb-12 md:mb-24 -mt-20 md:-mt-32">
                <div class="bg-white rounded-lg drop-shadow-2xl p-4 col-span-8 md:col-span-6 col-start-3 md:col-start-1" data-aos="fade">
                    <img src="./Assets/Images/FontFacing/Frame 2.png" alt="A comparison of capital A's generated by ChatGPT and Adobe Illustrator's Beta AI">
                    <p class="text-xs text-black/20">Left: a capital A made of XML/SVG markup generated by ChatGPT; right: a capital A generated in Adobe Illustrator via Adobe's beta AI generation.</p>
                </div>
            </div>

            <!-- INSIGHTS 1 -->
            <div class="mb-48 mt-24 col-span-12 grid grid-cols-12 gap-4 font-light">
                <h2 class="col-span-12 text-center text-4xl text-fontfacingblue">Starting Insights</h2>

                <!-- ROW 1 -->
                <div class="col-span-8 col-start-1 md:col-span-6 md:col-start-1 lg:col-span-4 lg:col-start-1 text-center bg-fontfacingblue text-white p-4 rounded-md h-fit">An A.I. system can’t become an expert on everything, but can be trained for a specific medium or on a specific topic, even combining areas.</div>
                <div class="col-span-8 col-start-3 md:col-span-6 md:col-start-4 lg:col-span-4 lg:col-start-5 text-center bg-fontfacingblue text-white p-4 rounded-md h-fit">Most of the thought for A.I. systems seems to be from the viewpoint of <span class="italic">“what can A.I. do for you”</span> rather than <span class="italic">“what can you do with A.I.”</span> and because of that, they usually default to pretty basic forms of input, like a text box, because the time and effort was put into training the system, not into how we interact with it.</div>
                <div class="col-span-8 col-start-5 md:col-span-6 md:col-start-7 lg:col-span-4 lg:col-start-9 text-center bg-fontfacingblue text-white p-4 rounded-md h-fit">Training comes in many forms but will produce inconsistent results by itself. For the AI system to work, it will also require reinforcement and supervision.</div>

                <!-- ROW 2 -->
                <div class="col-span-8 col-start-1 md:col-span-6 md:col-start-1 lg:col-span-4 lg:col-start-1 text-center bg-fontfacingblue text-white p-4 rounded-md h-fit">A.I. platforms can’t separate outliers unless specifically trained to do so. Therefore, every word/pixel/megabyte used in training needs to be carefully selected and vetted.</div>
                <div class="col-span-8 col-start-3 md:col-span-6 md:col-start-4 lg:col-span-4 lg:col-start-5 text-center bg-fontfacingblue text-white p-4 rounded-md h-fit">Because we don’t know what’s happening, what the system is doing, and how our input is being interpreted AI feels like magic when the system gives results.</div>
                <div class="col-span-8 col-start-5 md:col-span-6 md:col-start-7 lg:col-span-4 lg:col-start-9 text-center bg-fontfacingblue text-white p-4 rounded-md h-fit">Machine learning is exceedingly good at working with patterns but, due to the previous insights, everything you put into the training will be part of the resulting pattern.</div>
            </div>

            <!-- POSSIBLE SOLUTION -->
            <div class="mb-24 md:mb-36 grid grid-cols-12 gap-4">
                <div class="col-span-10 col-start-2 md:col-span-8 md:col-start-3 lg:col-span-6 lg:col-start-4 grid-cols-12 flex justify-center">
                    <svg 
                    width="212" 
                    height="212" 
                    viewBox="0 0 212 212" 
                    fill="none" 
                    xmlns="http://www.w3.org/2000/svg"
                    class="stroke-[#122f3c]">
                        <path d="M106 6V206" stroke-width="4" stroke-linecap="round"/>
                        <path d="M89 189.971L105.971 206.941L122.941 189.971" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="col-span-10 col-start-2 md:col-span-8 md:col-start-3 grid-cols-12">
                    <h2 class="col-span-12 text-center text-4xl text-fontfacingblue">A <span class="px-4 py-2 bg-fontfacingblue/50 text-white rounded-md">possible solution</span> would be to give designers access to different kinds of input while showing what the AI does with it.</h2>
                </div>
                <div class="col-span-10 col-start-2 md:col-span-8 md:col-start-3 lg:col-span-6 lg:col-start-4 grid-cols-12">
                    <h3 class="col-span-12 text-center text-2xl text-fontfacingblue opacity-50">By showing a designer what the AI is doing/thinking/processing with their input, instead of just the end result, they can better incorporate the AI features into their workflow.</h3>
                </div>
            </div>

            <!-- CONTENT SECTION -->
            <div class="flex flex-col mb-24 md:mb-36">
                <div class="w-full grid grid-cols-12 drop-shadow-lg z-30">
                    <div class="bg-video rounded-lg overflow-hidden relative col-span-12 sm:col-span-9 md:col-span-5 sm:col-start-4 md:col-start-8">
                        <img src="./Assets/Images/FontFacing/Wireframe - 4.png" alt="A low fidelity wireframe from the first round of ideating">
                    </div>
                </div>
                <div class="w-full flex justify-center -my-6 md:-my-12 lg:-my-24">
                    <div class="w-9/12 lg:w-7/12 bg-fontfacingblue/50 backdrop-blur-md text-white p-4 rounded-md drop-shadow-2xl z-40">
                        <h1 class="text-2xl mb-4">Starting to Design</h1>
                        <div class="text-sm space-y-4">
                            <p>When I started to design, my original idea was a webapp that was much more aimed at typeface design using some basic text entry and drawing tools. The incorporation of AI was, at most, an additional feature or tool rather than the main driving force. I ended up pivoting to a desktop app since I’d never designed for one.</p>
                            <p>In the process I looked to familiar design platforms, the obvious ones like Adobe, and some type design platforms, like FontLab, for some inspiration.</p>
                        </div>
                        <div class="w-full mt-4 flex flex-row justify-end">
                            <div class="w-fit rounded-md p-4 space-x-4 bg-fontfacingblue hover:bg-white text-white hover:text-fontfacingblue flex flex-row cursor-pointer" id="ff-designing-readmore">
                                <p>Read more</p>
                                <span class="material-symbols-rounded">
                                description
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full grid grid-cols-12 drop-shadow-lg z-30">
                    <div class="bg-video overflow-hidden rounded-lg bg-white relative col-span-12 sm:col-span-9 md:col-span-5">
                        <img src="./Assets/Images/FontFacing/FontLab.png" alt="A screenshot from a typeface designing software called FontLab Studio">
                        <p class="text-xs text-black/20 p-4">Screenshot from FontLab</p>
                    </div>
                </div>
            </div>

            <!-- IMAGE BREAK -->
            <div class="grid grid-cols-12 mb-4 md:mb-12 -mt-16 sm:-mt-32 md:-mt-36 md:-mt-48">
                <div class="bg-white rounded-lg drop-shadow-2xl p-4 col-span-8 sm:col-span-6 md:col-span-4 col-start-5 sm:col-start-7 md:col-start-9">
                    <img src="./Assets/Images/FontFacing/AI-Training.png" alt="A comparison of capital A's generated by ChatGPT and Adobe Illustrator's Beta AI">
                    <p class="text-xs text-black/20">How I imagine the AI would analyze input to create a model for each new design file.</p>
                </div>
            </div>

            <!-- REFINE THE SOLUTION -->
            <div class="mb-4 mt-48 grid grid-cols-12 gap-4">
                <div class="col-span-10 col-start-2 md:col-span-8 md:col-start-3 grid-cols-12">
                    <h2 class="col-span-12 text-center text-4xl text-fontfacingblue">We need to <span class="px-4 py-2 bg-fontfacingblue/50 text-white rounded-md">refine the solution</span> by further defining the workflow loop within the program.</h2>
                </div>
                <div class="col-span-10 col-start-2 md:col-span-8 md:col-start-3 lg:col-span-6 lg:col-start-4 grid-cols-12">
                    <h3 class="col-span-12 text-center text-2xl text-fontfacingblue opacity-50">Since AI is the driving force of the platform the designer should have access to it whenever they need or want, but there should also be a specific area or stage when the AI is always active and working.</h3>
                </div>
                <div class="col-span-10 col-start-2 md:col-span-8 md:col-start-3 lg:col-span-6 lg:col-start-4 grid-cols-12 flex justify-center">
                    <svg 
                    width="212" 
                    height="212" 
                    viewBox="0 0 212 212" 
                    fill="none" 
                    xmlns="http://www.w3.org/2000/svg"
                    class="stroke-[#122f3c]">
                        <path d="M106 6V206" stroke-width="4" stroke-linecap="round"/>
                        <path d="M89 189.971L105.971 206.941L122.941 189.971" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>

            <!-- INSIGHTS 1 -->
            <div class="mb-48 col-span-12 grid grid-cols-12 gap-4 font-light">
                <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-2 xl:col-span-8 xl:col-start-3 flex justify-center">
                    <img src="./Assets/Images/FontFacing/WorkflowLoop.svg" alt="An image showing the different possible workflow loops through each AI method, including file uploads, text prompts, and drawing tools. The workflows show that each method leads into the AI training model and then loops back to the start, showing that any input will affect the training model as you work.">
                </div>
            </div>

            <!-- CONTENT SECTION -->
            <div class="flex flex-col mb-24 md:mb-36">
                <div class="w-full flex justify-start -mb-4 md:-mb-6">
                    <div class="w-9/12 md:w-7/12 bg-fontfacingblue/50 backdrop-blur-md text-white p-4 rounded-md drop-shadow-2xl z-40">
                        <h1 class="text-2xl mb-4">Making Revisions</h1>
                        <div class="text-sm space-y-4">
                            <p>As I designed, I realized that the AI features, as I’d implemented them, were still a simple addition to the existing suite of drawing and editing tools. The first medium fidelity version of a real AI implementation was a simple modal which opened when you started a new typeface file, along with some context menu options.</p>
                            <p>I wanted the platform to feel like a fully invested piece of AI-driven software, so I had to revise the overall design so that the AI features were a constant with prominent calls to action. I moved the AI features to the menu bar, always there, to push them into a kind of “more important” state than the rest of the tool bar.</p>
                        </div>
                        <div class="w-full mt-4 flex flex-row justify-end">
                            <div class="w-fit rounded-md p-4 space-x-4 bg-fontfacingblue hover:bg-white text-white hover:text-fontfacingblue flex flex-row cursor-pointer" id="ff-revisions-readmore">
                                <p>Read more</p>
                                <span class="material-symbols-rounded">
                                description
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full grid grid-cols-12 drop-shadow-lg mb-8 z-[29]">
                    <div class="bg-video rounded-lg overflow-hidden relative col-span-9 col-start-4 md:col-span-6 md:col-start-7 lg:col-span-5 lg:col-start-7 xl:col-span-4 xl:col-start-7">
                        <img src="./Assets/Images/FontFacing/Frame 36.png" alt="A medium fidelity wireframe showing a pop-up modal with tabs to choose the method by which to start working on a new design file">
                    </div>
                </div>
                <div class="w-full grid grid-cols-12 z-40">
                    <div class="bg-fontfacingblue/50 backdrop-blur-md drop-shadow-2xl text-white p-4 rounded-md -mb-4 md:-mb-6 lg:-mb-8 col-span-8 col-start-5 md:col-span-6 md:col-start-7 lg:col-span-4 lg:col-start-9">
                        <p>Above: the original concept of introducing the AI features occurred as a modal when starting a new file, after which they would be available in context menus. Below: the updated concept of giving the AI features a permanent home in the menu/mode bar.</p>
                    </div>
                </div>
                <div class="w-full grid grid-cols-12 drop-shadow-lg z-[29]">
                    <div class="bg-video overflow-hidden rounded-lg bg-white relative col-span-12 md:col-span-11 lg:col-span-10 xl:col-span-9">
                        <img src="./Assets/Images/FontFacing/Component 5.png" alt="A higher fidelity wireframe showing a toolbar in a desktop application which features permanent AI generation features">
                    </div>
                </div>
            </div>

            <!-- POSSIBLE SOLUTION -->
            <div class="mb-24 md:mb-36 grid grid-cols-12 gap-4">
                <div class="col-span-10 col-start-2 md:col-span-8 md:col-start-3 lg:col-span-6 lg:col-start-4 grid-cols-12 flex justify-center">
                    <svg 
                    width="212" 
                    height="212" 
                    viewBox="0 0 212 212" 
                    fill="none" 
                    xmlns="http://www.w3.org/2000/svg"
                    class="stroke-[#122f3c]">
                        <path d="M106 6V206" stroke-width="4" stroke-linecap="round"/>
                        <path d="M89 189.971L105.971 206.941L122.941 189.971" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="col-span-10 col-start-2 md:col-span-8 md:col-start-3 grid-cols-12">
                    <h2 class="col-span-12 text-center text-4xl text-fontfacingblue">With the workflow and design resolved, expand the <span class="px-4 py-2 bg-fontfacingblue/50 text-white rounded-md">visual language</span> of the platform.</h2>
                </div>
                <div class="col-span-10 col-start-2 md:col-span-8 md:col-start-3 lg:col-span-6 lg:col-start-4 grid-cols-12">
                    <h3 class="col-span-12 text-center text-2xl text-fontfacingblue opacity-50">Create a consistent user experience by creating a design system with defined color palette, shape language, and font choices.</h3>
                </div>
            </div>

            <!-- CONTENT SECTION -->
            <div class="flex flex-col mb-8 sm:-mb-4 md:-mb-8 lg:-mb-16 xl:-mb-24">
                <div class="w-full flex justify-end -mb-4 md:-mb-6">
                    <div class="w-9/12 md:w-7/12 bg-fontfacingblue/50 backdrop-blur-md text-white p-4 rounded-md drop-shadow-2xl z-40">
                        <h1 class="text-2xl mb-4">Finishing Up</h1>
                        <div class="text-sm space-y-4">
                            <p>I think designers can easily get sucked into the common pitfall of thinking that their first idea is the best idea. However, when I look at this project, the concept may not have changed all that much (although it definitely got much more in-depth) but the interface changed drastically.</p>
                            <p>I'm glad that I made the decision to switch from a webapp to a desktop platform. In terms of the GUI there aren't that many differences in capability (just look at Figma, who manages to make both versions work, although their desktop app is essentially just the webapp hosted in a custom browser) but the switch to a desktop platform helped to further inform and specify the kind of designer, workflow, and AI possibilities that I should aim for.</p>
                        </div>
                        <div class="w-full mt-4 flex flex-row justify-end">
                            <div class="w-fit rounded-md p-4 space-x-4 bg-fontfacingblue hover:bg-white text-white hover:text-fontfacingblue flex flex-row cursor-pointer" id="ff-finalthoughts-readmore">
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
            <div class="grid grid-cols-12 mb-12 md:mb-24">
                <div class="drop-shadow-2xl p-4 col-span-12 col-start-1 sm:col-span-10 md:col-span-8 xl:col-span-6">
                    <img src="./Assets/Images/FontFacing/Mockup1.png" alt="A mockup of the starting screen of FontFacing on a Macbook." class="rounded-lg">
                </div>
                <div class="p-4 bg-gradient-to-b from-white/10 to-transparent backdrop-blur-md rounded-lg 
                col-span-12 col-start-1 sm:col-span-10 sm:col-start-2 md:col-span-8 md:col-start-3
                mt-0 md:-mt-24 lg:-mt-32 xl:-mt-40">
                    <img src="./Assets/Images/FontFacing/Mockup2b.png" alt="A mockup of the starting screen of FontFacing on a Macbook." class="rounded-lg">
                </div>
                <div class="drop-shadow-2xl p-4 
                col-span-12 col-start-1 sm:col-span-10 sm:col-start-3 
                mt-0">
                    <img src="./Assets/Images/FontFacing/Mockup3.png" alt="A mockup of the starting screen of FontFacing on a Macbook." class="rounded-lg">
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
                <a href="./tattooo.php" class="col-span-12 md:col-span-6 relative grid grid-cols-12 bg-transparent hover:bg-mint rounded-md">
                    <div class="align-self-center col-span-12 col-start-1 grid grid-cols-12 gap-4 p-4 rounded-md">
                        <div class="col-span-6 col-start-1 px-4 py-2 bg-mint text-white rounded-md flex flex-col text-center">
                            <p class="opacity-50">Next Project</p>
                            <h3 class="text-xl sm:text-2xl lg:text-4xl font-bold">Tatt.ooo</h3>
                        </div>
                    </div>
                    <div class="w-1/2 absolute top-1/2 right-0 -translate-y-1/2 rounded-md overflow-hidden mx-4">
                        <img src="./Assets/Images/Tattooo/Tattooo_Prev.png" alt="A preview image showing a variety of iPhone app mockups from the Tattooo project.">
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
                <h1 class="text-2xl mb-4">Research & Background</h1>
                <div class="w-8 h-8 flex justify-center items-center rounded-full hover:bg-fontfacingblue hover:text-white cursor-pointer" id="ff-research-close">
                    <span class="material-symbols-rounded">
                        close
                    </span>
                </div>
            </div>
            <div class="w-full h-full pb-8 overflow-auto rounded bg-black/5 p-4 grid gap-4 grid-cols-1 lg:grid-cols-12">
                <div class="text-sm space-y-4 opacity-50 col-span-12 lg:col-span-8">
                    <p>I started this project by researching how training models are made and making a couple myself. By using the available tools at RunwayML I was able to train image generating models in order to see, firsthand, how an AI system analyzes the material its given and, thereafter, what it can produce.</p>
                    <p>After also doing some research into AI platforms working with vector graphics, I solidified the concept I had in mind: a design and editing platform working with SVGs, supported and driven by AI to make it faster and easier for designers to build out the entirety of a typeface.</p>
                </div>
                <div class="w-full h-0.5 bg-black/20 rounded-full my-6 col-span-12"></div>
                <div class="text-sm space-y-4 col-span-12 grid gap-4 grid-cols-1 lg:grid-cols-12">
                    <p class="col-span-8">When I started this project, I had to create a training model to understand how AI analyzes the content that it's trained on in order to form the training model that will then be used.</p>
                    <p class="col-span-8">At the time, I had hundreds of photos of beers that I've taken over a few years just sitting around waiting to be used for something, so I made the first training model using around 1,000 of these photos. Some contain things in the background, like a bar, living room, and even people, and some are on a white background. Some show one, two, or three cans or bottles in various sizes. Most of them show a glass that's been filled with beer, and some show multiple glasses that have been filled with beer.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-1 gap-1">
                        <img src="./Assets/Images/FontFacing/Training/1.png" alt="A large grid of photos of beers." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/FontFacing/Training/1b.png" alt="4 images that were created from the previous images." class="col-span-1 rounded-md">
                    </div>
                    <p class="col-span-8">This training model was interesting. I didn't know what to expect. The resulting images that were generated from it are actually a pretty good showing, but the photos I used for the model weren't selected or taken with AI training in mind (they weren't vetted and I didn't take a look at any of them prior to building the model). I wanted to make another model where the images were very specifically created with the purpose of being put into a training model in order to see how that would affect the generated images compared to the first model. I gathered 30 beers (all 16-ounce cans) and took new photos with each can against a white backdrop, although I staggered the angles and composition of the photos. This training model was different, but provided much more insight as to how the system was analyzing the given photos.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-1 gap-1">
                        <img src="./Assets/Images/FontFacing/Training/2.png" alt="A large grid of photos of beers." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/FontFacing/Training/2b.png" alt="4 images that were created from the previous images." class="col-span-1 rounded-md">
                    </div>
                    <p class="col-span-8">For the hands-on research, I made one last model with very simple images, 30 different versions of a capital 'A', each one black on a white background. The output from this (seen to the right) may seem like a poor result but, to the contrary, I believe that it serves as concrete proof that I'm thinking about the concept correctly: an AI training model is perfectly capable of finding patterns, consistent details, and unique attributes and then recreating those aspects... as long as it's given an appropriate context.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-2 gap-1">
                        <video class="bg-video__content rounded-md overflow-hidden col-span-1 col-start-1" title="30 different versions of a capital letter 'A' used as training input" autoplay muted loop>
                            <source src="Assets/Images/FontFacing/Training/Letter_A_Input.mp4" type="video/mp4">
                        </video>
                        <video class="bg-video__content rounded-md overflow-hidden col-span-1 col-start-2" title="36 different versions of a capital letter 'A' generated by this training model" autoplay muted loop>
                            <source src="Assets/Images/FontFacing/Training/Letter_A_Output2.mp4" type="video/mp4">
                        </video>
                    </div>
                    <p class="col-span-8">I did additional research regarding AI systems working on vector images, as well as the current prevalence of AI in the creation, recreation, and/or expansion of typographic systems. There's currently a lot of work put into text (copy) generation, but not a lot of work put into typeface or letterform generation.</p>
                    <p class="col-span-8">In particular, I was inspired by the work of <a target="_blank" rel="noopener noreferrer" href="https://erikbern.com/2016/01/21/analyzing-50k-fonts-using-deep-neural-networks.html">Erik Bern</a>, <a target="_blank" rel="noopener noreferrer" href="https://jeanboehm.de/">Jean Böhm</a>, and <a target="_blank" rel="noopener noreferrer" href="https://github.com/mansgreback/ai-typography">Måns Grebäck</a>. These 3 designers (writing about their experiments in 2016, 2020, and 2022, respectively) have all worked in the space of typeface generation. Erik Bern used 50,000 fonts to train a neural network; Jean Böhm experimented with a workflow of AI abilities to generate SVG paths and anchor points to create letterforms; Måns Grebäck experimented with machine learning in the use of Stable Diffusion to generate new or stylistically similar typefaces to those he provided. All of their work served as proof that my concept could work, I just had to design an interface for it.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-1 gap-1">
                        <img src="./Assets/Images/FontFacing/Inspiration/01_BernErik.gif" alt="Research image via Erik Bern" class="col-span-1 rounded-md">
                        <p class="text-xs text-black mb-2">Aggregated letter generations from Erik Bern.</p>
                        <img src="./Assets/Images/FontFacing/Inspiration/02_GrebackMans.png" alt="Research image via Måns Grebäck" class="col-span-1 rounded-md">
                        <p class="text-xs text-black mb-2">Typeface inputs (either lowercase or uppercase) alongside the AI-generated accompaniment (lowercase used to generate uppercase and vice versa) from Måns Grebäck.</p>
                        <img src="./Assets/Images/FontFacing/Inspiration/03_BoehmJean.png" alt="Research image via Jean Böhm" class="col-span-1 rounded-md">
                        <p class="text-xs text-black">Extensive experiments using AI to generate svg paths for a lowercase letter 'a' from Jean Böhm.</p>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- STARTING TO DESIGN -->
    <article class="w-screen h-screen z-[100] fixed flex justify-center items-end cursor-pointer" id="ff-designing-bg">
        <div class="w-12/12 md:w-9/12 xl:w-7/12 2xl:w-5/12 h-5/6 rounded-t-lg bg-white p-4 pb-16 drop-shadow-2xl cursor-auto container" id="ff-designing-modal">
            <div class="flex flex-row justify-between h-fit">
                <h1 class="text-2xl mb-4">Starting to Design</h1>
                <div class="w-8 h-8 flex justify-center items-center rounded-full hover:bg-fontfacingblue hover:text-white cursor-pointer" id="ff-designing-close">
                    <span class="material-symbols-rounded">
                        close
                    </span>
                </div>
            </div>
            <div class="w-full h-full pb-8 overflow-auto rounded bg-black/5 p-4 grid gap-4 grid-cols-1 lg:grid-cols-12">
                <div class="text-sm space-y-4 opacity-50 col-span-12 lg:col-span-8">
                    <p>When I started to design, my original idea was a webapp that was much more aimed at typeface design using some basic text entry and drawing tools. The incorporation of AI was, at most, an additional feature or tool rather than the main driving force. I ended up pivoting to a desktop app since I’d never designed for one.</p>
                    <p>In the process I looked to familiar design platforms, the obvious ones like Adobe, and some type design platforms, like FontLab, for some inspiration.</p>
                </div>
                <div class="w-full h-0.5 bg-black/20 rounded-full my-6 col-span-12"></div>
                <div class="text-sm space-y-4 col-span-12 grid gap-4 grid-cols-1 lg:grid-cols-12">
                    <p class="col-span-8">The first ideation, as a webapp, was not focused enough on being an empowering tool. The idea at this stage was a very easy to use, approachable webapp that was designed to be as simple as possible for new users to start designing, but was not a thorough design tool for serious typeface designers. This first exploration also didn't use the AI system to the fullest; it uses AI behind the scenes and generates a typeface through a basic text prompt system, with some uber simplistic drawing tools that can be used afterwards. This was inspired largely by the popularity of systems like ChatGPT and MidJourney, which were exploding in popular discussion and social awareness at the time I was designing this exploration.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-1 gap-1">
                        <img src="./Assets/Images/FontFacing/Starting/1.png" alt="A low fidelity wireframe of the desktop app." class="col-span-1 rounded-md">
                    </div>
                    <p class="col-span-8">It was very obvious that this concept needed a lot <span class="italic">more</span>. I started to look at platforms like Adobe Illustrator, FontLab, and Figma to see how popular design applications approach interface design as well as putting some more thought into the minimum level of tools that would be necessary to make a platform like this work for serious designers. At this stage, Adobe was starting to make public their beta AI tools and context menus, so I added a floating context menu to my next iteration. FontLab and Figma also heavily (almost entirely) utilize sidebars to show properties and options, so I added a sidebar to the right side to explore the use and representation of the AI analysis within the application.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-1 gap-1">
                        <img src="./Assets/Images/FontFacing/Starting/2.png" alt="A low fidelity wireframe of the desktop app." class="col-span-1 rounded-md">
                    </div>
                    <p class="col-span-8">One iteration points to the workflow of typeface design and the fact that there are different stages. As far as typeface design goes, there's always a basic sketching phase to explore the visual language, there's a focused stage where you can really get lost in the weeds of making tiny adjustments to every single anchor point, and there's a letter-spacing phase at the end where you can fine tune the spacial relationships between each character. What an AI-driven workflow would add is a "live generation" mode to this. What this means is that the sketching phase (whether sketching in the application using drawing/vector tools or uploading photos of analog sketches or inputting a text prompt to generate some imagery as an aesthetic basis) can be used as the input for the training model of an AI. The idea here is that once you enter into the "live generation" mode, the platform will build out the entirety of the typeface (all remaining characters that haven't been sketched, smooth anchor points, etc.) and then whenever you make changes to a character the AI can continuously take those changes as additional input and refine the rest of the typeface.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-1 gap-1">
                        <img src="./Assets/Images/FontFacing/Starting/3.png" alt="A low fidelity wireframe of the desktop app." class="col-span-1 rounded-md">
                    </div>
                    <p class="col-span-8">Before getting into the weeds of the visual design language for the interface, I did some more exploration of how to better incorporate the AI into a driving force and permanent aspect of the platform. To make it front and center, I brought it into a modal which would open immediately when starting a new file to allow some text input to generate a starting point or a file upload to allow immediate image training. Alongside this, I also did a variety of quick wireframes experimenting with the placement of the toolbar and some other elements.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-1 gap-1">
                        <img src="./Assets/Images/FontFacing/Starting/4.png" alt="A low fidelity wireframe of the desktop app." class="col-span-1 rounded-md">
                    </div>
                    <p class="col-span-8">This proved to be the final version of this interface, showing the entire typeface on a single, large artboard. The next versions would be a drastic change after some serious introspection and revisiting my research.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-1 gap-1">
                        <img src="./Assets/Images/FontFacing/Starting/5.png" alt="A low fidelity wireframe of the desktop app." class="col-span-1 rounded-md">
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- REVISIONS -->
    <article class="w-screen h-screen z-[100] fixed flex justify-center items-end cursor-pointer" id="ff-revisions-bg">
        <div class="w-12/12 md:w-9/12 xl:w-7/12 2xl:w-5/12 h-5/6 rounded-t-lg bg-white p-4 pb-16 drop-shadow-2xl cursor-auto container" id="ff-revisions-modal">
            <div class="flex flex-row justify-between h-fit">
                <h1 class="text-2xl mb-4">Making Revisions</h1>
                <div class="w-8 h-8 flex justify-center items-center rounded-full hover:bg-fontfacingblue hover:text-white cursor-pointer" id="ff-revisions-close">
                    <span class="material-symbols-rounded">
                        close
                    </span>
                </div>
            </div>
            <div class="w-full h-full pb-8 overflow-auto rounded bg-black/5 p-4 grid gap-4 grid-cols-1 lg:grid-cols-12">
                <div class="text-sm space-y-4 opacity-50 col-span-12 lg:col-span-8">
                    <p>As I designed, I realized that the AI features, as I’d implemented them, were still a simple addition to the existing suite of drawing and editing tools. The first medium fidelity version of a real AI implementation was a simple modal which opened when you started a new typeface file, along with some context menu options.</p>
                    <p>I wanted the platform to feel like a fully invested piece of AI-driven software, so I had to revise the overall design so that the AI features were a constant with prominent calls to action. I moved the AI features to the menu bar, always there, to push them into a kind of “more important” state than the rest of the tool bar.</p>
                </div>
                <div class="w-full h-0.5 bg-black/20 rounded-full my-6 col-span-12"></div>
                <div class="text-sm space-y-4 col-span-12 grid gap-4 grid-cols-1 lg:grid-cols-12">
                    <p class="col-span-8">To start working on my visual design language and really define the appearance and experience of using the interface, I did some explorations of verbiage relative to line, shape, color, form, space, and texture. This was a long process because I was never quite satisfied with the design aspects; none of them seemed quite right. (More on this later.)</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-3 gap-1">
                        <img src="./Assets/Images/FontFacing/Revisions/1.png" alt="An exploratory sketching exercise to try to figure out some of the finalized visual design language." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/FontFacing/Revisions/2.png" alt="An exploratory sketching exercise to try to figure out some of the finalized visual design language." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/FontFacing/Revisions/3.png" alt="An exploratory sketching exercise to try to figure out some of the finalized visual design language." class="col-span-1 rounded-md">
                    </div>
                    <p class="col-span-8">I took a step back from my interface design to ponder. The original idea to have one larger working area and showing all of the characters within the typeface, was to point to a workflow where you can easily zoom in and out of your work to see your micro changes against the overarching macro design of the typeface. I realized, however, that working on typefaces is often spent on details, zoomed into the letterforms; I also noticed that after adding the sidebar windows to showcase the AI analysis and generation (overarching navigation view in the bottom right) that they served a similar purpose of making the macro visible to the designer.</p>
                    <p class="col-span-8">Alongside the change to individual artboards for each letterform, I needed a way to navigate between these artboards. When looking at the interface of Figma (a central working area bookended by sidebars on the left and right, with layers on the left and properties on the right), I realized that an artboard for a single character would be compact enough that having a sidebar on the left of the window wouldn't inhibit the working area and would also give me a space to house the "layers" of the template, guidelines, shapes, etc.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-1 gap-1">
                        <img src="./Assets/Images/FontFacing/Revisions/4.png" alt="A finalized version of the interface which features additional elements, like another sidebar." class="col-span-1 rounded-md">
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- FINAL THOUGHTS -->
    <article class="w-screen h-screen z-[100] fixed flex justify-center items-end cursor-pointer" id="ff-finalthoughts-bg">
        <div class="w-12/12 md:w-9/12 xl:w-7/12 2xl:w-5/12 h-5/6 rounded-t-lg bg-white p-4 pb-16 drop-shadow-2xl cursor-auto container" id="ff-finalthoughts-modal">
            <div class="flex flex-row justify-between h-fit">
                <h1 class="text-2xl mb-4">Final Thoughts</h1>
                <div class="w-8 h-8 flex justify-center items-center rounded-full hover:bg-fontfacingblue hover:text-white cursor-pointer" id="ff-finalthoughts-close">
                    <span class="material-symbols-rounded">
                        close
                    </span>
                </div>
            </div>
            <div class="w-full h-full pb-8 overflow-auto rounded bg-black/5 p-4 grid gap-4 grid-cols-1 lg:grid-cols-12">
                <div class="text-sm space-y-4 opacity-50 col-span-12 lg:col-span-8">
                    <p>I think designers can easily get sucked into the common pitfall of thinking that their first idea is the best idea. However, when I look at this project, the concept may not have changed all that much (although it definitely got much more in-depth) but the interface changed drastically.</p>
                    <p>I'm glad that I made the decision to switch from a webapp to a desktop platform. In terms of the GUI there aren't that many differences in capability (just look at Figma, who manages to make both versions work, although their desktop app is essentially just the webapp hosted in a custom browser) but the switch to a desktop platform helped to further inform and specify the kind of designer, workflow, and AI possibilities that I should aim for.</p>
                </div>
                <div class="w-full h-0.5 bg-black/20 rounded-full my-6 col-span-12"></div>
                <div class="text-sm space-y-4 col-span-12 grid gap-4 grid-cols-1 lg:grid-cols-12">
                    <p class="col-span-8">Narrowing down and specifying the audience that I was designing for helped the design process a lot. My initial concept was a much more casual experience with more basic interactions. Specifying that my audience would be type and graphic designers and type foundries (people and companies who are intimately familiar with design and design programs) helped me to design with more intention.</p>
                    <p class="col-span-8">With more intention in mind, I was also able to better apply what I'd learned about AI and machine learning systems. In early stages, my concept didn't really address some of my initial research insights, for instance: my observation regarding AI feeling like magic. Adding the analysis window to a side bar (and the ability to confirm and even edit some of the program's analysis) allows the user to feel like they are still in control of the machine learning system, rather than an observer.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-2 gap-1">
                        <img src="./Assets/Images/FontFacing/Final/2.png" alt="An early version of the analysis sidebar." class="col-span-1 rounded-md">
                        <img src="./Assets/Images/FontFacing/Final/1.png" alt="The final version of the analysis sidebar." class="col-span-1 rounded-md">
                    </div>
                    <p class="col-span-8">Something else that I've noticed within this process is the difficulty of working with gray as a primary color of a brand or experience. Since low fidelity and medium fidelity wireframing can often use shades of gray, when gray colors carry over into high fidelity designs it can be off-putting for collaborators and stakeholders. (And every professor I've ever had has appreciated shades of gray in graphic design work but not in user interfaces.) However, when we look at the primary competitors (FontLab, Adobe, Figma, etc.) their interfaces are inundated with shades of gray; light gray, dark gray, charcoal, gray is everywhere. There's always a prevailing idea that you shouldn't try to emulate your competition (and that's absolutely true, to a certain extent) but if they all have a similar design ethos then it should be indicative that a particular design ethos prevails for a reason: an interface which you'll be glued to for hours at a time can be overwhelming and distracting when too much color is involved.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-1 gap-1">
                        <img src="./Assets/Images/FontFacing/Final/3.png" alt="A color exploration of the final interface and prototype." class="col-span-1 rounded-md">
                    </div>
                    <p class="col-span-8">The high fidelity prototypes that I produced for the end of the class are visual designs that I was not entirely proud of. The color system doesn't quite work, and I decided to continue working on the designs afterward. The revised designs are what you see here.</p>
                    <div class="col-span-12 col-start-1 lg:col-span-10 lg:col-start-3 w-full grid grid-cols-1 gap-1">
                        <img src="./Assets/Images/FontFacing/Final/4.png" alt="A color exploration of the final interface and prototype." class="col-span-1 rounded-md">
                    </div>
                </div>
            </div>
        </div>
    </article>

    <?php require_once('footer.php'); ?>

    <script src="./node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>