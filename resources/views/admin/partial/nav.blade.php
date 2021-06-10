<nav class="flex flex-col bg-purple-900 w-64 max-h-full px-4 tex-gray-900">

    <!-- USER Name + Photo -->
    <div class="mt-8">
        <div class="flex justify-center mx-8">
            <img src="{{ asset('img/'. Auth::user()->photo) }}" class="mx-auto h-25 border-4 border-green-500"/>
        </div>
        <div class="flex justify-center mt-2">
            <span class="font-semibold text-white">{{ Auth::user()->name }} {{ Auth::user()->firstname }}</span>       
        </div>
    </div>

    <!-- LOG OUT -->
    <div class="flex justify-center">
        <form method="POST" action="{{ route('logout') }}" class="mt-2">
            @csrf
            <button class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-6 rounded">Log Out</button>
        </form> 
    </div>
    
    <div class="mt-4 mb-4">
        <ul class="ml-1">

            <!-- DASHBOARD -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24">
                        <path d="M16 20h4v-4h-4m0-2h4v-4h-4m-6-2h4V4h-4m6
                    4h4V4h-4m-6 10h4v-4h-4m-6 4h4v-4H4m0 10h4v-4H4m6
                    4h4v-4h-4M4 8h4V4H4v4z"></path>
                    </svg>
                </span>
                <a href="{{ route('dashboard') }}">
                    <span class="ml-2">Dashboard</span>
                </a>
            </li>

            @userValidate
            <!-- INFO -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                        <path d="M12 4a4 4 0 014 4 4 4 0 01-4 4 4 4 0 01-4-4 4 4 0
                    014-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4
                    8-4z"></path>
                    </svg>
                </span>
                <a href="{{ route('userEdit', Auth::id()) }}">
                    <span class="ml-2">Update your info</span>
                </a>
            </li>
            @enduserValidate

            @admin
            <!-- CAROUSEL  -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <a href="{{route('adminCarousel')}}">
                    <span class="ml-2">Carousel</span>
                </a>
            </li>

            <!-- GENERAL, Logo + Footer -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <a href="{{route('adminGeneral')}}">
                    <span class="ml-2">General</span>
                </a>
            </li>

            <!-- DISCOVER, Discover + Video + Title 1 -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <a href="{{route('adminDiscover')}}">
                    <span class="ml-2">Discover</span>
                </a>
            </li>
            
            <!-- TESTIMONIALS, Testimonial + Title 1 -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <a href="{{route('adminTestimonial')}}">
                    <span class="ml-2">Testimonials</span>
                </a>
            </li>

            <!-- SERVICES, Services + Title 3 -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <a href="{{route('adminServices')}}">
                    <span class="ml-2">Services</span>
                </a>
            </li>

            <!-- FEATURES, Features + Title 4 -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <a href="{{route('adminFeatures')}}">
                    <span class="ml-2">Features</span>
                </a>
            </li>
            
            <!-- BLOG -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <a href="{{route('adminBlog')}}">
                    <span class="ml-2">Blog</span>
                </a>
            </li>

            <!-- TAG -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <a href="{{route('adminTagCategory')}}">
                    <span class="ml-2">Tags/Categories</span>
                </a>
            </li>
            
            <!-- VALIDATE -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <a href="{{route('adminValidate')}}">
                    <span class="ml-2">Validate</span>
                </a>
            </li>

            <!-- TRASH -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <a href="{{route('adminTrash')}}">
                    <span class="ml-2">Trash</span>
                </a>
            </li>
            
            <!-- CONTACT, Adress + Google Maps -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <a href="{{route('adminContact')}}">
                    <span class="ml-2">Contact</span>
                </a>
            </li>
            @endadmin

            @webmaster
            <!-- VALIDATE -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <a href="{{route('adminValidate')}}">
                    <span class="ml-2">Validate</span>
                </a>
            </li>

            <!-- TRASH -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <a href="{{route('adminTrash')}}">
                    <span class="ml-2">Trash</span>
                </a>
            </li>
            @endwebmaster

            @writer
            <!-- BLOG -->
            <li class="mb-2 px-4 py-2 text-gray-100 flex flex-row  border-gray-300  hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
                <span>
                    <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <a href="{{route('adminBlog')}}">
                    <span class="ml-2">Blog</span>
                </a>
            </li>
            @endwriter
        </ul>
    </div>
</nav>