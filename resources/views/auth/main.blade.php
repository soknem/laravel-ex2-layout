@extends('template.layout')

@section('content')
<section id="home" class="max-w-7xl mx-auto px-6 py-24 flex flex-col md:flex-row items-center gap-12">
    <div class="flex-1">
        <h2 class="text-6xl font-extrabold leading-tight mb-6 text-gray-50">Unlock Deep Insights with Predictive AI Modeling</h2>
        
        <p class="text-xl text-gray-300 mb-10">Harness the power of machine learning to drive smarter decisions and accelerate innovation across your enterprise.</p>
        
        <a href="#contact" class="px-10 py-4 bg-indigo-600 text-white rounded-full text-xl shadow-2xl shadow-indigo-500/50 hover:bg-indigo-500 transition-all duration-300">Request a Demo</a>
    </div>
    <div class="flex-1">
        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" class="rounded-2xl shadow-2xl shadow-indigo-600/40" />
    </div>
</section>


<section id="features" class="bg-gray-800 py-24 border-t border-indigo-900">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-5xl font-extrabold mb-16 text-indigo-400">Key AI Capabilities</h3>
        <div class="grid md:grid-cols-3 gap-12">
            <div class="p-8 bg-gray-700 rounded-2xl shadow-xl hover:shadow-indigo-500/30 transition duration-300 border-t-4 border-indigo-500">
                <h4 class="text-3xl font-bold mb-4 text-indigo-400">Predictive</h4>
                <p class="text-gray-300 text-lg">Forecast trends and outcomes with industry-leading accuracy models.</p>
            </div>
            
            <div class="p-8 bg-gray-700 rounded-2xl shadow-xl hover:shadow-indigo-500/30 transition duration-300 border-t-4 border-indigo-500">
                <h4 class="text-3xl font-bold mb-4 text-indigo-400">Scalable</h4>
                <p class="text-gray-300 text-lg">Handle petabytes of data effortlessly with cloud-native infrastructure.</p>
            </div>
            
            <div class="p-8 bg-gray-700 rounded-2xl shadow-xl hover:shadow-indigo-500/30 transition duration-300 border-t-4 border-indigo-500">
                <h4 class="text-3xl font-bold mb-4 text-indigo-400">Ethical AI</h4>
                <p class="text-gray-300 text-lg">Ensure fair, transparent, and compliant models with built-in governance.</p>
            </div>
        </div>
    </div>
</section>
@endsection