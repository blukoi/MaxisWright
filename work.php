<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('head.php'); ?>

    <!-- Tailwind Play CDN (backup) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Page Title -->
    <title>Max is Wright - Work</title>

</head>
<body class="bg-mint/10">

    <?php require_once('nav.php'); ?>
    
    <!-- BODY CONTENT -->
    <main>

        <!-- TITLE -->
        <div class="w-full text-center">
            <h1 class="mt-48 mb-36 text-6xl text-mint">Some of my recent work</h1>
        </div>

        <div class="container mx-auto relative z-40">

            <div class="w-full text-center my-32 grid grid-cols-12 gap-4 px-4 md:px-0">

                <a href="./fontfacing.php" 
                class="col-span-6 xl:col-span-4 grid grid-cols-1 md:grid-cols-12 gap-8 bg-fontfacingblue hover:bg-mint text-white rounded-lg p-2 pb-8 h-fit">
                    <div class="col-span-1 md:col-span-12 aspect-square flex justify-center place-items-center">
                        <img src="./Assets/Images/FontFacing/Mockup3.png" 
                        alt="A mockup of a desktop app for typeface design being used on a MacBook" class="aspect-[1728/1045] place-self-center">
                    </div>
                    <h3 class="col-span-1 md:col-span-12 w-full text-2xl font-bold">FontFacing: <span class="font-normal">a new way to design typefaces</span></h3>
                </a>
                
                <a href="./tattooo.php" 
                class="col-span-6 xl:col-span-4 grid grid-cols-1 md:grid-cols-12 gap-8 bg-neutralbg hover:bg-mint text-tattooblue hover:text-white rounded-lg p-2 pb-8">
                    <img src="./Assets/Images/Tattooo/Tattooo_Prev.png" 
                    alt="A preview image showing a variety of iPhone app mockups from the Tattooo project" 
                    class="col-span-1 md:col-span-12 rounded-md">
                    <h3 class="col-span-1 md:col-span-12 w-full text-2xl font-bold">Tatt.ooo: <span class="font-normal">a semi-social platform for tattoo enthusiasts</span></h3>
                </a>

                <a href="./academy.php" 
                class="col-span-6 xl:col-span-4 grid grid-cols-1 md:grid-cols-12 gap-8 bg-academygold hover:bg-mint text-white rounded-lg p-2 pb-8 h-fit">
                    <img src="./Assets/Images/Academy/Tile.png" 
                    alt="A preview image showing mockups of 2 screens at different steps of the interaction." 
                    class="col-span-1 md:col-span-12 rounded-md">
                    <h3 class="col-span-1 md:col-span-12 w-full text-2xl font-bold">The Academy Kiosk: <span class="font-normal">data visualization + gamification = engagement</span></h3>
                </a>

            </div>
    
            <!-- <div class="w-full mx-auto px-4 md:px-0 mb-64 sm:mb-72 lg:mb-80 xl:mb-52 2xl:mb-64 mt-0 xl:mt-48">
                <a href="./work.html" class="text-center bg-white hover:bg-mint text-mint hover:text-white rounded-md grid grid-cols-12 gap-4 mb-36 p-4 relative">
                    <div class="align-self-center col-span-6 text-xl sm:text-2xl lg:text-4xl font-bold">
                        <h3 class="px-4 py-2 bg-mint text-white rounded-md">More of My Work</h3>
                    </div>
                    <div class="w-1/2 pr-4 sm:pr-8 md:pr-12 lg:pr-16 absolute top-1/2 left-1/2 -translate-y-1/2 flex justify-center">
                        <div class="w-full h-48 sm:h-72 md:h-80 lg:h-80 rounded-lg overflow-hidden drop-shadow-lg">
                            <div class="absolute top-1/2 left-0 -translate-y-1/2">
                                <img src="./Assets/Images/Work.png" alt="A preview image showing an iPhone app mockup next to the coded website.">
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->
    
        </div>

    </main> 

<?php require_once('footer.php'); ?>

</body>
</html>