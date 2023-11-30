<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('head.php'); ?>

    <!-- Tailwind Play CDN (backup) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Page Title -->
    <title>Max is Wright - <?php echo $pages[$pageSlug]; ?></title>

</head>
<body class="bg-white">

    <?php require_once('nav.php'); ?>
    
    <!-- BODY CONTENT -->
    <main>
    <div class="w-full h-screen jumbotron1 relative z-10 bg-white">
        <div class="w-full h-full jumbotron2 absolute"></div>
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 container mx-auto w-full h-full">
            <div class="flex flex-col items-start w-full h-full p-4 sm:p-0">
                <h1 class="mb-4 text-4xl md:text-5xl lg:text-6xl px-4 py-2 bg-white text-mint rounded-lg">Hi! I'm Max,</h1>
                <h1 class="text-4xl md:text-5xl lg:text-6xl text-white">a<span class="txt-rotate" data-period="2000" data-rotate='[ " visual", "n interaction", " UX/UI", " research", " user-focused", "n empathetic" ]'></span><span class="text-white"> designer, eager to learn new things and create thoughtful solutions.</span></h1>
            </div>
        </div>      
    </div>

    <div class="container mx-auto relative z-40">

        <div class="w-full text-center">
            <div class="-mt-36 mb-32 sm:mb-48 md:mb-52 lg:mb-64 xl:mb-64 2xl:mb-80 text-6xl text-fontfacingblue grid grid-cols-12 gap-4 px-4 md:px-0">
                <div class="col-span-12 text-lg flex justify-center text-white rounded-md bg-white/10 p-4 text-center mb-4 sm:-mb-2 md:-mb-10 lg:mb-0 xl:-mb-12 grid gap-0 grid-cols-12">
                    <h6 class="w-fit p-4 sm:p-0 mx-4 sm:mx-0 rounded-md font-thin col-span-12 sm:col-span-6 md:col-span-5 sm:col-start-7 md:col-start-7 sm:text-left">I love to design for all kinds of different mediums, but this is my most recent project:</h6>
                </div>
                <a href="./fontfacing.php" class="col-span-12 grid grid-cols-12 gap-4 mx-auto md:mx-0 rounded-md p-4 -mt-12 sm:mt-12 md:mt-20 lg:mt-24 xl:mt-36 2xl:mt-48 bg-fontfacingblue hover:bg-mint text-sm text-white hover:text-white flex flex-row cursor-pointer static sm:relative">
                    <div class="col-span-12 sm:w-1/2 static sm:absolute top-0 left-0 sm:-translate-y-1/2">
                        <img src="./Assets/Images/FontFacing/FF_Macbook.png" alt="A mockup of a desktop app for typeface design being used on a MacBook">
                    </div>
                    <div class="col-span-12 col-start-1 sm:col-span-6 sm:col-start-7 text-center sm:text-left text-xl sm:text-2xl lg:text-4xl font-bold">
                        <h3>FontFacing: <span class="font-normal">a new way to design typefaces</span></h3>
                    </div>
                </a>
            </div>
        </div>

        <div class="w-full text-center">
            <div class="mb-48 sm:mb-64 md:mb-80 lg:mb-96 text-6xl grid grid-cols-12 gap-4 px-4 md:px-0">
                <a href="./tattooo.php" class="col-span-12 grid grid-cols-12 gap-4 mx-auto md:mx-0 rounded-md p-4 -mt-12 sm:mt-12 md:mt-20 lg:mt-24 xl:mt-36 2xl:mt-48 bg-neutralbg hover:bg-tattooalert text-sm text-tattooblue hover:text-white flex flex-row cursor-pointer static sm:relative">
                    <div class="col-span-12 sm:w-1/2 static sm:absolute top-1/2 left-0 sm:-translate-y-1/2 p-8 flex flex-row justify-around overflow-hidden">
                        <img src="./Assets/Images/Tattooo/Tattooo_Home.png" alt="A preview image showing a variety of iPhone app mockups from the Tattooo project." class="h-64 md:h-72 lg:h-96 overflow-hidden">
                        <img src="./Assets/Images/Tattooo/Tattooo_Ideas.png" alt="A preview image showing a variety of iPhone app mockups from the Tattooo project." class="h-64 md:h-72 lg:h-96 overflow-hidden">
                    </div>
                    <div class="col-span-12 col-start-1 sm:col-span-6 sm:col-start-7 text-center sm:text-left text-xl sm:text-2xl lg:text-4xl font-bold">
                        <h3>Tatt.ooo: <span class="font-normal">a semi-social platform for tattoo enthusiasts</span></h3>
                    </div>
                </a>
            </div>
        </div>

        <div class="w-full text-center">
            <div class="mb-48 sm:mb-64 md:mb-80 lg:mb-96 text-6xl grid grid-cols-12 gap-4 px-4 md:px-0">
                <a href="./academy.php" class="col-span-12 grid grid-cols-12 gap-4 mx-auto md:mx-0 rounded-md p-4 -mt-12 sm:mt-12 md:mt-20 lg:mt-24 xl:mt-36 2xl:mt-48 mb-0 lg:mb-24 bg-academyblue hover:bg-academygold text-sm text-white hover:text-white flex flex-row cursor-pointer static sm:relative">
                    <div class="col-span-12 sm:w-1/2 static sm:absolute top-1/2 left-0 sm:-translate-y-1/2 p-8">
                        <img src="./Assets/Images/Academy/Tile.png" alt="A preview image showing mockups of 2 screens at different steps of the interaction." class="rounded-md overflow-hidden">
                    </div>
                    <div class="col-span-12 col-start-1 sm:col-span-6 sm:col-start-7 text-center sm:text-left text-xl sm:text-2xl lg:text-4xl font-bold">
                        <h3>The Academy Kiosk: <span class="font-normal">data visualization + gamification = engagement</span></h3>
                    </div>
                </a>
            </div>
        </div>

        <div class="w-full mx-auto px-4 md:px-0 mb-64 sm:mb-72 lg:mb-80 xl:mb-52 2xl:mb-64 mt-0 xl:mt-48">
            <a href="./work.php" class="text-center bg-white hover:bg-mint text-mint hover:text-white rounded-md grid grid-cols-12 gap-4 mb-36 p-4 relative">
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
        </div>

    </div>

    </main> 

    <?php require_once('footer.php'); ?>

</body>
</html>