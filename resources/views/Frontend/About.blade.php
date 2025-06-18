@extends('Frontend.Layout.MasterLayout')

@section('Content')

<!-- Hero Section -->
    <section class="about-header d-flex align-items-center">
        <div class="container text-center text-white">
            <h1 class="display-3 fw-bold mb-4">About Us</h1>
            <p class="lead mb-5">Our journey of sharing knowledge, information, and inspiration.</p>
        </div>
    </section>

<!-- About Section -->
<div class="container about-body">
    <section class="about-section">
        <div class="about-text">
            <h2>Our Story</h2>
            <p>We started our journey in 2020 with just a small idea. Today, hundreds of thousands of readers find their necessary information on our blog every month. Our goal is to serve readers by creating quality content in Bengali.</p>
            <p>We believe that by sharing knowledge, we can build an educated and developed society. Our team consists of experts from various fields who regularly create high-quality content.</p>
        </div>
        <div class="about-image">
            <img src="https://via.placeholder.com/600x400?text=About+Us" alt="Our Team">
        </div>
    </section>

    <!-- Mission Vision -->
    <div class="mission-cards">
        <div class="mission-card">
            <i class="fas fa-bullseye"></i>
            <h3>Our Mission</h3>
            <p>To enhance readers' knowledge by creating research-based, reliable, and easy-to-understand content in Bengali.</p>
        </div>
        <div class="mission-card">
            <i class="fas fa-eye"></i>
            <h3>Our Vision</h3>
            <p>To become the largest educational platform in Bengali by 2025.</p>
        </div>
        <div class="mission-card">
            <i class="fas fa-heart"></i>
            <h3>Our Values</h3>
            <p>All our activities are guided by three core principles — honesty, professionalism, and reader satisfaction.</p>
        </div>
    </div>

    <!-- Team Section -->
    <section class="team-section">
        <h2 style="text-align: center; margin-bottom: 2rem;">Our Team</h2>
        <div class="team-grid">
            <div class="team-card">
                <div class="team-img">
                    <img src="https://via.placeholder.com/300x300?text=Team+Member+1" alt="Team Member">
                </div>
                <div class="team-info">
                    <h3>Rahimul Islam</h3>
                    <p>Founder & Chief Editor</p>
                </div>
            </div>
            <div class="team-card">
                <div class="team-img">
                    <img src="https://via.placeholder.com/300x300?text=Team+Member+2" alt="Team Member">
                </div>
                <div class="team-info">
                    <h3>Ayesha Siddika</h3>
                    <p>Content Writer</p>
                </div>
            </div>
            <div class="team-card">
                <div class="team-img">
                    <img src="https://via.placeholder.com/300x300?text=Team+Member+3" alt="Team Member">
                </div>
                <div class="team-info">
                    <h3>Rajib Ahmed</h3>
                    <p>Web Developer</p>
                </div>
            </div>
            <div class="team-card">
                <div class="team-img">
                    <img src="https://via.placeholder.com/300x300?text=Team+Member+4" alt="Team Member">
                </div>
                <div class="team-info">
                    <h3>Tania Haque</h3>
                    <p>Marketing Specialist</p>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection