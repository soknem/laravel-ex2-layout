@extends('template.layout')

@section('content')
<section id="home" class="max-w-7xl mx-auto px-6 py-20 flex flex-col md:flex-row items-center gap-12">
    <div class="flex-1">
        <h2 class="text-5xl font-extrabold leading-tight mb-6">Build your future with a modern digital experience</h2>
        <p class="text-lg text-gray-600 mb-8">A clean, modern design to make your landing page feel fresh and professional.</p>
        <a href="#contact" class="px-8 py-3 bg-emerald-500 text-white rounded-xl text-lg shadow hover:bg-emerald-600 transition">Get Started</a>
        <!-- only changed blue-600 → emerald-500 & emerald-600 -->
    </div>
    <div class="flex-1">
        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" class="rounded-xl shadow-lg" />
    </div>
</section>

<!-- Features Section -->
<section id="features" class="bg-white py-20 mt-12 shadow-inner">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-4xl font-bold mb-12">Why Choose Us?</h3>
        <div class="grid md:grid-cols-3 gap-10">
            <div class="p-6 bg-emerald-50 rounded-xl shadow hover:shadow-lg transition">
                <h4 class="text-2xl font-semibold mb-3">Fast</h4>
                <p class="text-gray-600">Optimized performance with clean design.</p>
            </div>
            <div class="p-6 bg-emerald-50 rounded-xl shadow hover:shadow-lg transition">
                <h4 class="text-2xl font-semibold mb-3">Modern</h4>
                <p class="text-gray-600">Trendy UI elements to impress users.</p>
            </div>
            <div class="p-6 bg-emerald-50 rounded-xl shadow hover:shadow-lg transition">
                <h4 class="text-2xl font-semibold mb-3">Responsive</h4>
                <p class="text-gray-600">Perfect on all screen sizes.</p>
            </div>
        </div>
    </div>
</section>
@endsection