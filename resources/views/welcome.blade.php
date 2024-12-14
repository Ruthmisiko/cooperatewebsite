<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        @include('layout.navbar')
        
       <div id="home" class="navbarheader">
           
            <div class="content">
                <h1>Welcome to KrawlyScript Agency</h1>
                <p>We deliver high-quality academic writing, including research papers, essays, and reports, tailored to meet your specific needs. Additionally, we offer compelling copywriting and insightful articles that help elevate your brand and engage your audience effectively.</p>
                <a href="#contact" class="blue-button">Let's Connect</a>  
            </div>
            <div class="img1" style="margin-top: 5%">
                <img src="{{ asset('images/photo11.jpg') }}" alt="Background Image">
             </div>
        </div>
       

        {{-- about us section --}}

        <div id="about" class="aboutus">
            <div class="img">
                <img src="{{ asset('/images/1.png') }}">
            </div>
            <div class="abt">
                <h1>-About Us</h1>
                <p style="padding-top: 5%">At Krawlyscript Agency, we are passionate about words. Our mission is to provide you with written content that not only informs but also inspires. With a team of skilled writers from diverse backgrounds, we specialize in academic writing, copywriting, and article creation that speaks to your target audience. Each piece of work we produce is carefully crafted to meet the highest standards of quality, originality, and relevance. </p>
            </div>
                     
        </div>
{{-- 
        services section --}}

        <div id="services" class="services">
            <h1>Services</h1>
            <div class="cards">
                <div class="card">
                    <h2>Academic Writing</h2>
                    <p>Research Papers</p>
                    <p>Essays and Reports</p>
                    <p>Theses and Dissertations</p>
                    <a href="{{ route('projects') }}">Read More..</a>
                   
                </div>
                <div class="card">
                    <h2>Copywriting</h2>
                    <p>Website Content</p>
                    <p>Marketing Campaigns</p>
                    <p>Product Descriptions</p>
                    <a href="{{ route('projects') }}">Read More..</a>
                </div>
                <div class="card">
                    <h2>Article Writing</h2>
                    <p>Thought Leadership Pieces</p>
                    <p>Blog Posts</p>
                    <p>News and Editorials</p>
                    <a href="{{ route('projects') }}">Read More..</a>
                </div>
            </div>            
        </div>  
        <div id="contact" class="contact-container">
            <!-- Form Section -->
            <div class="form-section">
                <a href="#" class="connect-button">LET'S CONNECT</a>
                <h1>We're here to help</h1>
                <form action="mailto:assignmentssolutions22@gmail.com" method="GET">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Enter your Name" required>
    
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter a valid email address" required>
    
                    <label for="message">Message</label>
                    <textarea id="message" rows="5" placeholder="Enter your message" required></textarea>
    
                    <button type="submit"style="background-color: #007BFF;">SUBMIT</button>
                </form>
            </div>
    
            <!-- Image Section -->
            <div class="image-section">
                <img src="{{ asset('images/contact.jpg') }}" alt="Contact Image">
            </div>
        </div>
        
        
              
        @include('layout.footer')
        <hr>
        <p style="text-align: center">&copy;  Designed by KrawlyScript Agency</p>
    </body>
</html>       
            