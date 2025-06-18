@extends('Frontend.Layout.MasterLayout')

@section('Content')

<!-- Article Header -->
<header class="article-header">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <span class="badge bg-primary mb-3">Technology</span>
                <h1 class="display-4 fw-bold mb-4">Complete Guide to Starting Blogging</h1>
                <div class="d-flex justify-content-center align-items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author" class="rounded-circle me-3" width="50">
                    <div class="text-start">
                        <p class="mb-0">Md. Rahimul Islam</p>
                        <small><i class="far fa-clock me-1"></i> Published: May 20, 2023</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Article Content -->
<article class="article-content container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <p class="lead">Blogging has become a popular and profitable profession nowadays. In this guide, you will learn how to start a successful blog from scratch, attract readers, and earn money.</p>

            <h2 class="mt-5 mb-4">1. Choosing a Blog Topic</h2>
            <p>The first step of a successful blog is choosing the right topic. Select a topic that you are interested in and knowledgeable about. Some popular topics:</p>
            <ul>
                <li>Technology and Gadgets</li>
                <li>Health and Fitness</li>
                <li>Travel and Adventure</li>
                <li>Education and Career</li>
                <li>Cooking and Recipes</li>
            </ul>

            <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Blogging" class="img-fluid">

            <h2 class="mt-5 mb-4">2. Choosing a Blogging Platform</h2>
            <p>Select the right platform for you from various blogging platforms:</p>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Platform</th>
                        <th>Cost</th>
                        <th>Advantages</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>WordPress.org</td>
                        <td>$$ (Hosting cost)</td>
                        <td>Fully customizable</td>
                    </tr>
                    <tr>
                        <td>Blogger</td>
                        <td>Free</td>
                        <td>Easy to use</td>
                    </tr>
                    <tr>
                        <td>Medium</td>
                        <td>Free</td>
                        <td>Built-in audience</td>
                    </tr>
                </tbody>
            </table>

            <blockquote>
                <p>"WordPress is the most popular and powerful blogging platform. If you want to do serious blogging, choose WordPress.org."</p>
            </blockquote>

            <h2 class="mt-5 mb-4">3. Creating Content</h2>
            <p>Quality content is the key to a successful blog. Some tips:</p>
            <ol>
                <li>Write after research</li>
                <li>Use simple and understandable language</li>
                <li>Add images and videos</li>
                <li>Create SEO-friendly content</li>
                <li>Post regularly</li>
            </ol>

            <div class="alert alert-info mt-4">
                <h4><i class="fas fa-lightbulb me-2"></i>Tips</h4>
                <p>In the first 3 months, publish at least 2 posts every week. It will make your blog trustworthy to Google and readers.</p>
            </div>

            <h2 class="mt-5 mb-4">4. Sources of Income</h2>
            <p>Various ways to earn from a blog:</p>

            <div class="row g-4 mt-3">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-ad text-primary me-2"></i>Google AdSense</h5>
                            <p class="card-text">Earn by displaying ads on your blog.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-link text-success me-2"></i>Affiliate Marketing</h5>
                            <p class="card-text">Earn commission by sharing product links.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-book text-warning me-2"></i>Digital Product</h5>
                            <p class="card-text">Sell eBooks or courses.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-5 mb-4">
                <div>
                    <span class="badge bg-secondary me-2">#Blogging</span>
                    <span class="badge bg-secondary me-2">#Income</span>
                    <span class="badge bg-secondary">#WordPress</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-secondary me-2"><i class="far fa-thumbs-up me-1"></i>Like (42)</button>
                    <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-share-alt me-1"></i>Share</button>
                </div>
            </div>
        </div>
    </div>
</article>

<!-- Author Profile -->
<section class="author-profile">
    <div class="row align-items-center">
        <div class="col-md-3 text-center">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author" class="author-img">
        </div>
        <div class="col-md-9">
            <h3>Md. Rahimul Islam</h3>
            <p class="text-muted">Professional blogger and content creator. With over 5 years of experience, he has written 100+ blog posts and earns $5,000+ per month from his blog.</p>
            <div class="social-links">
                <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fab fa-facebook-f me-1"></i>Facebook</a>
                <a href="#" class="btn btn-sm btn-outline-info me-2"><i class="fab fa-twitter me-1"></i>Twitter</a>
                <a href="#" class="btn btn-sm btn-outline-danger"><i class="fab fa-youtube me-1"></i>YouTube</a>
            </div>
        </div>
    </div>
</section>

<!-- Comment Section -->
<section class="comment-section container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h3 class="mb-4"><i class="far fa-comments me-2"></i>Comments (3)</h3>

            <!-- Comment Form -->
            <div class="card mb-5 border-0 shadow">
                <div class="card-body">
                    <h5 class="card-title">Leave a Comment</h5>
                    <form>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Write your comment..."></textarea>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-md-4">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary w-100">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Comment List -->
            <div class="comment-card">
                <div class="d-flex">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Commenter" class="commenter-img me-3">
                    <div>
                        <h6>Ayesha Siddika</h6>
                        <small class="text-muted">2 days ago</small>
                        <p class="mt-2">Excellent post! I'm a new blogger and this guide helped me a lot. Thank you.</p>
                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-reply me-1"></i>Reply</a>
                    </div>
                </div>
            </div>

            <div class="comment-card">
                <div class="d-flex">
                    <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Commenter" class="commenter-img me-3">
                    <div>
                        <h6>Rajib Ahmed</h6>
                        <small class="text-muted">1 week ago</small>
                        <p class="mt-2">I want to learn more about SEO. Can you recommend any book or resource?</p>
                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-reply me-1"></i>Reply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection