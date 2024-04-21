<footer class="flex flex-wrap items-center justify-between px-4 py-4 text-sm border-t border-gray-100 ">
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        footer {
            background-color: white; /* Change to your desired background color */
            color: white;
            padding: 1.5rem 0; /* Adjust padding as needed */
        }

        /* Center the content horizontally */
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo Styles */
        .logo {
            /* Add your logo styles here */
            /* Example: width, height, margin, etc. */
        }

        /* Contact Us Styles */
        .contact {
            /* Add styles for contact information */
            /* Example: font size, margin, padding, etc. */
        }

        /* Links Styles */
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        ul li {
            display: inline-block;
            margin-right: 1rem;
        }

        a{
            color: black;
        }

        /* Hover Effect */
        a:hover {
            color: #ddd; /* Change to your desired hover color */
        }

        /*i {*/
        /*    background-color: black;*/
        /*}*/
    </style>
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div>
            <img src="{{ asset('img/logonew.png') }}" alt="Logo" style="width: 200px;">
        </div>

        <!-- Contact Us -->
        <div>
            <h3 class="text-lg font-semibold mb-2">Contact Us</h3>
            <ul class="flex">
                <!-- Gmail -->
                <li class="mr-3">
                    <a href="mailto:youremail@gmail.com" target="_blank" class="hover:text-gray-300">
                        <i class="fab fa-google mr-1"></i> Gmail
                    </a>
                </li>
                <!-- Facebook -->
                <li class="mr-3">
                    <a href="https://www.facebook.com/yourpage" target="_blank" class="hover:text-gray-300">
                        <i class="fab fa-facebook mr-1"></i> Facebook
                    </a>
                </li>
                <!-- Instagram -->
                <li>
                    <a href="https://www.instagram.com/yourprofile" target="_blank" class="hover:text-gray-300">
                        <i class="fab fa-instagram mr-1"></i> Instagram
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
