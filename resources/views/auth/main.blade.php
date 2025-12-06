@extends('template.layout')

@section('content')
<!-- HERO – Full height, centered, modern -->
<section id="home" class="min-h-screen flex items-center justify-center px-6">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
        <div class="space-y-8">
            <h2 class="text-5xl md:text-6xl font-extrabold leading-tight text-gray-900">
                Build your future with a modern digital experience
            </h2>
            <p class="text-xl text-gray-600 leading-relaxed max-w-lg">
                A clean, modern design to make your landing page feel fresh and professional.
            </p>
            <div class="pt-6">
                <a href="#contact" class="inline-block px-10 py-4 bg-indigo-600 text-white font-bold text-xl rounded-full shadow-xl hover:bg-indigo-700 hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    Get Started
                </a>
            </div>
        </div>
        <div class="flex justify-center">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" 
                 class="rounded-3xl shadow-2xl max-w-full h-auto border-8 border-white/80" alt="Hero" />
        </div>
    </div>
</section>

<!-- FEATURES – Modern cards with hover lift -->
<section id="features" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <h3 class="text-5xl font-extrabold text-gray-900 mb-4">Why Choose Us?</h3>
            <p class="text-xl text-gray-600">Everything you need to stand out in 2025</p>
        </div>

        <div class="grid md:grid-cols-3 gap-10">
            <div class="group bg-white p-10 rounded-3xl shadow-xl border border-gray-100 hover:border-indigo-300 hover:shadow-2xl transform hover:-translate-y-4 transition duration-500">
                <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-indigo-600 group-hover:text-white transition">
                    Speed
                </div>
                <h4 class="text-2xl font-bold mb-4 text-gray-800">Fast</h4>
                <p class="text-gray-600">Optimized performance with clean design.</p>
            </div>

            <div class="group bg-white p-10 rounded-3xl shadow-xl border border-gray-100 hover:border-indigo-300 hover:shadow-2xl transform hover:-translate-y-4 transition duration-500">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-purple-600 group-hover:text-white transition">
                    Design
                </div>
                <h4 class="text-2xl font-bold mb-4 text-gray-800">Modern</h4>
                <p class="text-gray-600">Trendy UI elements to impress users.</p>
            </div>

            <div class="group bg-white p-10 rounded-3xl shadow-xl border border-gray-100 hover:border-indigo-300 hover:shadow-2xl transform hover:-translate-y-4 transition duration-500">
                <div class="w-16 h-16 bg-pink-100 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:bg-pink-600 group-hover:text-white transition">
                    Mobile
                </div>
                <h4 class="text-2xl font-bold mb-4 text-gray-800">Responsive</h4>
                <p class="text-gray-600">Perfect on all screen sizes.</p>
            </div>
        </div>
    </div>
</section>
@endsection