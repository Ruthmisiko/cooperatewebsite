<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
</head>
<body style="background-color: #f9f9f9;">
    @include('layout.navbar')

    <div class="projectsh">
        <h2><b>Our Projects</b></h2>
        <p>Our projects showcase expertise in academic writing, compelling copywriting, and engaging article creation. Each project is tailored to meet unique client needs with precision and creativity.</p>
    </div>
 
    <div class="academic">
        <div class="project1">
            <h3 style="text-align: center">Academic Writing</h3>
            <p style="margin-left: 5%;margin-bottom:7%">At KrawlyScript Agency, we excel in crafting well-researched, original, and meticulously formatted academic papers. From essays and research papers to dissertations and case studies, our team ensures each piece is tailored to meet specific academic requirements while maintaining the highest standards of clarity, coherence, and academic integrity. We help students and professionals communicate complex ideas effectively and achieve their academic goals.</p>
        </div>
        <div class="samples">
            <h3 style="margin-left: 5%">Download Samples</h3>
            <ul>
                <li><a href="{{ asset('files/essay.pdf') }}" class="cv-button" download>Essay</a></li>
                <li><a href="{{ asset('files/essay.pdf') }}" class="cv-button" download>Research Paper</a></li>
                <li><a href="{{ asset('files/Case Study.pdf') }}" class="cv-button" download>Case Studies</a></li>
                <li><a href="{{ asset('files/dissertation.pdf') }}" class="cv-button" download>Dissertations </a></li>
            </ul>
        </div>
    </div>

    <div class="academic">
        <div class="project1">
            <h3 style="text-align: center">Article Writing</h3>
            <p style="margin-left: 5%;margin-bottom:7%">We specialize in creating engaging, well-researched articles that captivate readers and leave a lasting impression. Our services include blog posts, feature pieces, and thought-provoking content tailored to your audience. Let us help you boost engagement and strengthen your brand's voice.</p>
        </div>
        <div class="samples">
            <h3 style="margin-left: 5%">Download Samples</h3>
            <ul>
                <li><a href="{{ asset('files/essay.pdf') }}" class="cv-button" download>Blog Post</a></li>
                <li><a href="{{ asset('files/essay.pdf') }}" class="cv-button" download>News articles</a></li>
                <li><a href="{{ asset('files/essay.pdf') }}" class="cv-button" download>Product reviews</a></li>
                <li><a href="{{ asset('files/essay.pdf') }}" class="cv-button" download>Press releases </a></li>
            </ul>
        </div>
    </div>

    <div class="academic1">
        <div class="project1">
            <h3 style="text-align: center">Copy Writing</h3>
            <p style="margin-left: 5%;margin-bottom:5%">We create compelling website content, engaging marketing campaigns, and persuasive product descriptions tailored to your brand. Our focus is on delivering clear, impactful messaging that resonates with your audience and drives results. Let us help your business stand out with words that inspire action.</p>
        </div>
        <div class="samples">
            <h3 style="margin-left: 5%">Download Samples</h3>
            <ul>
                <li><a href="{{ asset('files/essay.pdf') }}" class="cv-button" download>Website Content</a></li>
                <li><a href="{{ asset('files/essay.pdf') }}" class="cv-button" download>Marketing Campaigns</a></li>
                <li><a href="{{ asset('files/essay.pdf') }}" class="cv-button" download>Product Descriptions</a></li>
                <li><a href="{{ asset('files/essay.pdf') }}" class="cv-button" download>Landing pages </a></li>
            </ul>
        </div>
    </div>

    @include('layout.footer')
    <hr>
    <p style="text-align: center">&copy;  Designed by KrawlyScript Agency</p>

</body>
</html>