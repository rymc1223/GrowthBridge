<?php include('nav.php')?>

    <header class="bg-gray-50 py-20 flex items-center justify-center text-center">
        <div>
            <h1 class="mt-20 text-6xl font-extrabold">Welcome to GrowthBridge!</h1>
            <p class="mb-10 mt-10 text-xl">Your partner in personal and professional growth. Discover resources, insights, and a community dedicated to helping you thrive.</p>
            
        </div>
    </header>

    <main class="bg-gray-50 py-20">
        <section class="bg-gray-50 max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-semibold">Our Services</h2>
            <p class="mt-4 text-gray-600">We offer a range of services designed to empower you on your growth journey:</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 mt-8">
                <article class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">
                    <i class="fas fa-chalkboard-teacher fa-2x"></i>
                    <h3 class="font-bold text-lg mt-2">Workshops</h3>
                    <p class="mt-2 text-gray-600">Join our interactive workshops to gain new skills and insights from industry experts.</p>
                </article>
                <article class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">
                    <i class="fas fa-comments fa-2x"></i>
                    <h3 class="font-bold text-lg mt-2">Coaching</h3>
                    <p class="mt-2 text-gray-600">One-on-one coaching sessions tailored to your personal and professional goals.</p>
                </article>
                <article class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">
                    <i class="fas fa-users fa-2x"></i>
                    <h3 class="font-bold text-lg mt-2">Community Events</h3>
                    <p class="mt-2 text-gray-600">Connect with like-minded individuals at our community networking events.</p>
                </article>
            </div>
        </section>

        <section class="bg-gray-50 py-20">
            <div class="max-w-7xl mx-auto text-center">
                <h2 class="text-4xl font-semibold">What Our Clients Say</h2>
                <div class="mt-8 space-y-6">
                    <blockquote class="border-l-4 border-blue-600 pl-4 transition-transform duration-300 transform hover:scale-105">
                        <p class="text-gray-700 italic">“GrowthBridge has transformed my approach to both personal and professional challenges. The coaching sessions were invaluable!”</p>
                        <cite class="block mt-2 font-bold">– Sarah T.</cite>
                    </blockquote>
                    <blockquote class="border-l-4 border-blue-600 pl-4 transition-transform duration-300 transform hover:scale-105">
                        <p class="text-gray-700 italic">“The workshops are engaging and practical. I learned so much and met wonderful people!”</p>
                        <cite class="block mt-2 font-bold">– Mark R.</cite>
                    </blockquote>
                    <blockquote class="border-l-4 border-blue-600 pl-4 transition-transform duration-300 transform hover:scale-105">
                        <p class="text-gray-700 italic">“Joining the GrowthBridge community has been a game-changer for me. I feel supported and inspired every day!”</p>
                        <cite class="block mt-2 font-bold">– Emily K.</cite>
                    </blockquote>
                </div>
            </div>
        </section>

        <section class="bg-gray-50 py-20">
            <div class="max-w-7xl mx-auto text-center">
                <h2 class="text-6xl mb-10 font-bold">Join Us Today!</h2>
                <p class="mb-10 mt-4 text-gray-600">Ready to take the next step in your growth journey? Sign up for our newsletter and stay updated on our latest events and resources.</p>
                <a href="contact.php" class="bg-blue-500 text-white px-5 py-2 rounded-full hover:bg-blue-700">Contact Us</a>
            </div>
        </section>
    </main>
  
<?php include('footer.php')?>
<?php include('closer.php')?>