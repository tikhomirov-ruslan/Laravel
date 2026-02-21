@extends('layouts.app')

@section('title', 'About')

@section('meta_description', 'About')

@section('content')
    <div class="about-page">
        <h2>Build and ship software with <br>
            tools crafted for productivity</h2>
        
        <div class="company-info">
            <p>Laravel provides a complete ecosystem for web artisans. Our open <br>
                source PHP framework, products, packages, and starter kits offer <br>
                everything you need to build, deploy, and monitor web <br>
                applications.</p>
            
            @php
                $foundedYear = 2020;
                $currentYear = date('Y');
                $theme1 = "Ecosystem";
                $theme2 = "Backend";
            @endphp
            
            <p class="highlight"> ... <strong>{{ $theme1 }}</strong></p>
        </div>
        

        <h3>Packages</h3>
        
        @php
            $package = [
                ['name' => 'Skout', 'description' => 'Search for Eloquent models'],
                ['name' => 'Pennant', 'description' => 'Feature flag management'],
                ['name' => 'Sail', 'description' => 'Local Docker development'],
                ['name' => 'Telescope', 'description' => 'Local debugging and insights']

                // ['name' => 'Octane', 'description' => 'Hich performance app server']
                // ['name' => 'Cashier', 'description' => 'Payment and subscriptions']
                // ['name' => 'Pint', 'description' => 'Code styler for minimalists']
                // ['name' => 'Pulse', 'description' => 'Performance insights']

                // ['name' => 'Reverb', 'description' => 'Fast, scalable WebSockets']
                // ['name' => 'Socialite', 'description' => 'Social authentication']
                // ['name' => 'Horizon', 'description' => 'Monitor Redis Queues']

                // ['name' => 'Echo', 'description' => 'Listen for WebScoket events']
                // ['name' => 'Sanctum', 'description' => 'API authentication']
                // ['name' => 'Dusk', 'description' => 'Automated browser testing']
            ];
        @endphp


        <div class="package-grid">
            @forelse($package as $member)
                <div class="package-card">
                    <h4>{{ $member['name'] }}</h4>
                    <p class="description">{{ $member['description'] }}</p>
                </div>
            @empty
                <p>Информация о команде временно недоступна</p>
            @endforelse
        </div>



        <p class="highlight"> ... <strong>{{ $theme2 }}</strong></p>

        <h2>Code that speaks for itself</h2>
        <p>Simple, elegant syntax powers amazing functionality.<br>
            Every feature has been considered to create a <br>
            thoughtful and cohesive development experience.</p>

        @push('scripts')
            <script>
                // ...
            </script>
        @endpush

    </div>
@endsection