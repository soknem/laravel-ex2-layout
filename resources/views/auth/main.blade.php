@extends('template.layout')

@section('content')
<section id="home" class="max-w-7xl mx-auto px-6 py-24 flex flex-col md:flex-row items-center gap-12">
    <div class="flex-1">
        <h2 class="text-6xl font-extrabold leading-tight mb-6 text-gray-50">Forge Your Digital Destiny: A Future-Forward Experience</h2>
        <p class="text-xl text-gray-300 mb-10">A sleek, neon-lit design that merges modern professionalism with cutting-edge visual flair.</p>
        
        <a href="#contact" class="px-10 py-4 bg-indigo-600 text-white rounded-full text-xl shadow-2xl shadow-indigo-500/50 hover:bg-indigo-500 transition-all duration-300">Start Your Journey</a>
    </div>
    <div class="flex-1">
        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" class="rounded-2xl shadow-2xl shadow-indigo-600/40" />
    </div>
</section>


<section id="features" class="bg-gray-800 py-24 border-t border-indigo-900">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-5xl font-extrabold mb-16 text-indigo-400">Core Capabilities</h3>
        <div class="grid md:grid-cols-3 gap-12">
            <div class="p-8 bg-gray-700 rounded-2xl shadow-xl hover:shadow-indigo-500/30 transition duration-300 border-t-4 border-indigo-500">
                <h4 class="text-3xl font-bold mb-4 text-indigo-400">Velocity</h4>
                <p class="text-gray-300 text-lg">Optimized performance with minimal latency and clean architecture.</p>
            </div>
            <div class="p-8 bg-gray-700 rounded-2xl shadow-xl hover:shadow-indigo-500/30 transition duration-300 border-t-4 border-indigo-500">
                <h4 class="text-3xl font-bold mb-4 text-indigo-400">Aesthetic</h4>
                <p class="text-gray-300 text-lg">Futuristic UI elements and a high-impact, sleek design language.</p>
            </div>
            <div class="p-8 bg-gray-700 rounded-2xl shadow-xl hover:shadow-indigo-500/30 transition duration-300 border-t-4 border-indigo-500">
                <h4 class="text-3xl font-bold mb-4 text-indigo-400">Adaptivity</h4>
                <p class="text-gray-300 text-lg">Flawlessly renders on all devices, from mobile to ultra-wide screens.</p>
            </div>
        </div>
    </div>
</section>
@endsection