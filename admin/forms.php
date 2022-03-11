<?php include ('./template/header.php'); ?>
<!--Container -->
<div class="mx-auto bg-grey-lightest">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Niit@Fortesoft</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">Adam Wathan</a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="index.php" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a></li>
                          <li><hr class="border-t mx-2 border-grey-light"></li>
                          <li><a href="login.php" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
           <?php include('./template/side.php'); ?>
            <!--/Sidebar-->
            <!--Main-->
            
            <main class="bg-gray-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Card Sextion Starts Here -->
                    <div class="flex flex-auto  flex-col md:flex-row lg:flex-row justify-flex-start items-center ">
                        <!--Horizontal form-->
                        <!-- <div class="mb-2 border-solid bg-gray-400 border-white-200 rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                            <div class="bg-gray-400 px-2 py-3 font-bold border-solid border-black-600 border-b">
                                Inline Form
                            </div>
                            <div class="p-3">
                                <form class="w-full">
                                    <div class="md:flex md:items-center mb-6">
                                        <div class="md:w-1/4">
                                            <label class="block text-black-500 font-bold font-regular md:text-right mb-1 md:mb-0 pr-4"
                                                   for="inline-full-name">
                                                Full Name
                                            </label>
                                        </div>
                                        <div class="md:w-3/4">
                                            <input class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
                                                   id="inline-full-name" type="text" value="Jane Doe">
                                        </div>
                                    </div>
                                    <div class="md:flex md:items-center mb-6">
                                        <div class="md:w-1/4">
                                            <label class="block text-black font-regular font-bold md:text-right mb-1 md:mb-0 pr-4"
                                                   for="inline-username">
                                                Password
                                            </label>
                                        </div>
                                        <div class="md:w-3/4">
                                            <input class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
                                                   id="inline-username" type="password"
                                                   placeholder="******************">
                                        </div>
                                    </div>
                                    <div class="md:flex md:items-center mb-6">
                                        <div class="md:w-1/3"></div>
                                        <label class="md:w-2/3 block text-black font-bold font-regular">
                                            <input class="mr-2 leading-tight" type="checkbox">
                                            <span class="text-sm">
                                                Send me your newsletter!
                                            </span>
                                        </label>
                                    </div>
                                    <div class="md:flex md:items-center">
                                        <div class="md:w-1/3"></div>
                                        <div class="md:w-2/3">
                                            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                                    type="button">
                                                Sign Up
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        /Horizontal form -->

                        <!--Underline form-->
                        <!-- <div class="mb-2 md:mx-2 lg:mx-2 border-solid border-gray-200 rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                Underline Form
                            </div>
                            <div class="p-3">
                                <form class="w-full">
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                        <input class="appearance-none bg-transparent border-none w-full text-gray-600 mr-3 py-1 px-2 lineHeight-tight focus:outline-none"
                                               type="text" placeholder="Jane Doe" aria-label="Full name">
                                        <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-dark-700 border-teal-500 hover:border-teal-dark text-sm border-4 text-white py-1 px-2 rounded"
                                                type="button">
                                            Sign Up
                                        </button>
                                        <button class="flex-shrink-0 border-transparent border-4 text-teal hover:text-teal-darker text-sm py-1 px-2 rounded"
                                                type="button">
                                            Cancel
                                        </button>
                                    </div>
                                    <div class="flex items-center border-b border-b-1 border-red-500 py-2">
                                        <input class="appearance-none bg-transparent border-none w-full text-grey-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                               type="text" placeholder="Jane Doe" aria-label="Full name">
                                        <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-dark-800 border-teal-500 hover:border-teal-800 text-sm border-4 text-white py-1 px-2 rounded"
                                                type="button">
                                            Sign Up
                                        </button>
                                        <button class="flex-shrink-0 border-transparent border-4 text-teal hover:text-teal-darker text-sm py-1 px-2 rounded"
                                                type="button">
                                            Cancel
                                        </button>
                                    </div>
                                    <div class="flex items-center border-b border-b-1 border-info py-2">
                                        <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                                               type="text" placeholder="Jane Doe" aria-label="Full name">
                                        <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                                                type="button">
                                            Sign Up
                                        </button>
                                        <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-700 text-sm py-1 px-2 rounded"
                                                type="button">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                        <!--/Underline form-->
                    </div>
                    <!-- /Cards Section Ends Here -->

                    <!--Grid Form-->

                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2 box-shadow">
                        <form action="contacts.php" method= "post" class="box-shadow mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b block uppercase tracking-wide text-black text-ml font-bold mb-1" >
                                Form 
                            </div>
                            <div class="p-3">
                                <form class="w-full">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-black text-ml font-bold mb-1"
                                              for="grid-first-name">
                                                First Name
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                                            name="Firstname"   id="grid-first-name" type="text" placeholder="Jane">
                                            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-black text-ml font-bold mb-1"
                                             for="grid-last-name">
                                                Last Name
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                            name="Lastname" id="grid-last-name" type="text" placeholder="Doe">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-black text-ml font-bold mb-1" 
                                            for="grid-password">
                                                Password
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                            name= "Password"  id="grid-password" type="password" placeholder="******************">
                                            <p class="text-grey-dark text-xs italic">Make it as long and as crazy as
                                                you'd like</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-2">
                                        
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-black text-ml font-bold mb-1"
                                            for="grid-state">
                                                State
                                            </label>
                                            <div class="relative">
                                                <select class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                name="State"   id="grid-state">
                                                    <option>New Mexico</option>
                                                    <option>Missouri</option>
                                                    <option>Texas</option>
                                                </select>
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 0 20 20">
                                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-black text-ml font-bold font-light mb-1" 
                                            for="grid-city">
                                                Local Govt
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                            name="LCD" id="grid-city" type="text" placeholder="Albuquerque">
                                        </div>
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-black text-ml font-bold mb-1"
                                           for="grid-zip">
                                             DOB
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                            name="DOB"  id="grid-zip" type="date" placeholder="90210">
                                        </div>
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-black text-ml font-bold mb-1"
                                                   for="grid-zip">
                                             course
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                               name="Course" id="grid-zip" type="text" placeholder="90210">
                                        </div>
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-black text-ml font-bold mb-1" 
                                                   for="grid-zip">
                                           fee
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                   name="Fee" id="grid-zip" type="text" placeholder="90210">
                                        </div>
                                       
                                    </div>
                                    <button class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                                    Submit
                                </button>

                                </form>
                            </div>
                        </form>
                       
                    </div>
                    <!--/Grid Form-->
                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; My Design</div>
        </footer>
        <!--/footer-->

    </div>

</div>

<script src="./main.js"></script>

</body>

</html>