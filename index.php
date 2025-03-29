<?php
$pageTitle = "B2B SEO Solutions";
$currentPage = 'home';
$isHomePage = true;
$bodyClass = 'bg-gray-50';
include 'components/head.php';
include 'components/navigation.php';
?>
<div class="grid lg:grid-cols-2 gap-16 items-center">
          <div data-aos="fade-right">
            <h5 class="text-blue-600 font-semibold mb-4">B2B SEO Experts</h5>
            <h1 class="text-4xl lg:text-5xl xl:text-6xl font-extrabold mb-6 leading-tight">
              Transform Your B2B <span class="highlight-box">Revenue</span> Through Strategic SEO
            </h1>
            <p class="text-xl text-gray-600 mb-8">
              Stop losing high-value contracts to competitors. Our data-driven approach delivers qualified leads and measurable ROI.
            </p>

            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6">
              <a href="#contact" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-8 rounded-full cta-button text-center">
                Get Your Growth Plan
              </a>
            </div>

            <div class="mt-12">
              <p class="text-gray-500 mb-4 font-medium">Trusted by B2B companies:</p>
              <div class="flex flex-wrap items-center gap-8">
                <div class="grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all">
                  <i class="fab fa-slack text-4xl text-gray-400"></i>
                </div>
                <div class="grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all">
                  <i class="fab fa-salesforce text-4xl text-gray-400"></i>
                </div>
                <div class="grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all">
                  <i class="fab fa-hubspot text-4xl text-gray-400"></i>
                </div>
                <div class="grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all">
                  <i class="fab fa-atlassian text-4xl text-gray-400"></i>
                </div>
              </div>
            </div>
          </div>

          <div data-aos="fade-left" class="hidden lg:block relative">
            <div class="bg-blue-600 rounded-3xl w-full aspect-square relative overflow-hidden shadow-2xl">
              <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-blue-700 opacity-90"></div>
              <div class="relative p-8 text-white h-full flex flex-col justify-between">
                <div>
                  <h3 class="text-2xl font-bold mb-6">Why B2B Companies Choose Us</h3>
                  <ul class="space-y-4">
                    <li class="flex items-start">
                      <div class="bg-white bg-opacity-20 rounded-full p-1 mr-3 mt-1">
                        <i class="fas fa-check text-sm"></i>
                      </div>
                      <span>Industry-specific SEO strategies</span>
                    </li>
                    <li class="flex items-start">
                      <div class="bg-white bg-opacity-20 rounded-full p-1 mr-3 mt-1">
                        <i class="fas fa-check text-sm"></i>
                      </div>
                      <span>Focus on high-value lead generation</span>
                    </li>
                    <li class="flex items-start">
                      <div class="bg-white bg-opacity-20 rounded-full p-1 mr-3 mt-1">
                        <i class="fas fa-check text-sm"></i>
                      </div>
                      <span>Clear ROI reporting</span>
                    </li>
                    <li class="flex items-start">
                      <div class="bg-white bg-opacity-20 rounded-full p-1 mr-3 mt-1">
                        <i class="fas fa-check text-sm"></i>
                      </div>
                      <span>Dedicated B2B SEO specialists</span>
                    </li>
                  </ul>
                </div>

                <div>
                  <div class="flex items-center">
                    <div class="text-4xl mr-4">🚀</div>
                    <div>
                      <p class="font-bold text-xl">Average Client Results</p>
                      <p class="text-white text-opacity-80">98% increase in qualified leads</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="absolute -bottom-6 -right-6 bg-white rounded-xl p-6 shadow-xl">
              <div class="flex items-center">
                <div class="bg-green-100 rounded-full p-3 mr-4">
                  <i class="fas fa-arrow-up text-green-600"></i>
                </div>
                <div>
                  <p class="text-gray-500 text-sm">Average ROI</p>
                  <p class="text-2xl font-bold">578%</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
          <h5 class="text-blue-600 font-semibold mb-2">Our Services</h5>
          <h2 class="text-3xl lg:text-4xl font-bold mb-4">Comprehensive B2B SEO Solutions</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Tailored strategies designed specifically for B2B companies looking to drive high-value leads and revenue
          </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
          <!-- Technical SEO -->
          <div
            class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all card-hover border border-gray-100"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="service-icon bg-blue-100 text-blue-600">
              <i class="fas fa-cogs text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Technical SEO Audits & Implementation</h3>
            <p class="text-gray-600 mb-6">Identify and fix technical issues preventing your site from reaching its full potential.</p>
            <ul class="space-y-3 text-gray-600">
              <li class="flex items-start">
                <i class="fas fa-check-circle text-blue-600 mr-2 mt-1"></i>
                <span>Fix site structure issues that hide your best content</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-blue-600 mr-2 mt-1"></i>
                <span>Implement structured data for search engines</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-blue-600 mr-2 mt-1"></i>
                <span>Ensure no website errors impact user experience</span>
              </li>
            </ul>
          </div>

          <!-- Keyword Research -->
          <div
            class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all card-hover border border-gray-100"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="service-icon bg-indigo-100 text-indigo-600">
              <i class="fas fa-search text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Strategic Keyword Research & Targeting</h3>
            <p class="text-gray-600 mb-6">Discover the exact terms your B2B customers use when searching for solutions.</p>
            <ul class="space-y-3 text-gray-600">
              <li class="flex items-start">
                <i class="fas fa-check-circle text-indigo-600 mr-2 mt-1"></i>
                <span>Discover precise customer search terms</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-indigo-600 mr-2 mt-1"></i>
                <span>Analyze competitor keyword opportunities</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-indigo-600 mr-2 mt-1"></i>
                <span>Map keywords to sales funnel stages</span>
              </li>
            </ul>
          </div>

          <!-- Content Strategy -->
          <div
            class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all card-hover border border-gray-100"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div class="service-icon bg-green-100 text-green-600">
              <i class="fas fa-pen-fancy text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Content Strategy & Creation</h3>
            <p class="text-gray-600 mb-6">Build authoritative content that establishes your company as the industry expert.</p>
            <ul class="space-y-3 text-gray-600">
              <li class="flex items-start">
                <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                <span>Identify content gaps</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                <span>Develop thought leadership content</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                <span>Create in-depth resources like white papers</span>
              </li>
            </ul>
          </div>

          <!-- On-Page SEO -->
          <div
            class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all card-hover border border-gray-100"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <div class="service-icon bg-purple-100 text-purple-600">
              <i class="fas fa-file-alt text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">On-Page SEO Optimization</h3>
            <p class="text-gray-600 mb-6">Optimize your pages to maximize relevance and conversion potential.</p>
            <ul class="space-y-3 text-gray-600">
              <li class="flex items-start">
                <i class="fas fa-check-circle text-purple-600 mr-2 mt-1"></i>
                <span>Craft compelling meta titles and descriptions</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-purple-600 mr-2 mt-1"></i>
                <span>Optimize page content for keywords</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-purple-600 mr-2 mt-1"></i>
                <span>Develop strategic internal linking</span>
              </li>
            </ul>
          </div>

          <!-- Link Building -->
          <div
            class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all card-hover border border-gray-100"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <div class="service-icon bg-red-100 text-red-600">
              <i class="fas fa-link text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Link Building & Authority Development</h3>
            <p class="text-gray-600 mb-6">Earn quality backlinks that establish your domain authority and credibility.</p>
            <ul class="space-y-3 text-gray-600">
              <li class="flex items-start">
                <i class="fas fa-check-circle text-red-600 mr-2 mt-1"></i>
                <span>Earn backlinks from respected industry websites</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-red-600 mr-2 mt-1"></i>
                <span>Generate digital PR opportunities</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-red-600 mr-2 mt-1"></i>
                <span>Secure guest posting opportunities</span>
              </li>
            </ul>
          </div>

          <!-- Analytics -->
          <div
            class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all card-hover border border-gray-100"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <div class="service-icon bg-yellow-100 text-yellow-600">
              <i class="fas fa-chart-line text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Analytics & Reporting</h3>
            <p class="text-gray-600 mb-6">Track real ROI metrics and make data-driven optimization decisions.</p>
            <ul class="space-y-3 text-gray-600">
              <li class="flex items-start">
                <i class="fas fa-check-circle text-yellow-600 mr-2 mt-1"></i>
                <span>Build custom performance dashboards</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-yellow-600 mr-2 mt-1"></i>
                <span>Track true ROI metrics</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-yellow-600 mr-2 mt-1"></i>
                <span>Provide regular performance reviews</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Section -->
    <section class="py-24 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
          <h5 class="text-blue-600 font-semibold mb-2">Our Process</h5>
          <h2 class="text-3xl lg:text-4xl font-bold mb-4">How We Drive SEO Success</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our proven methodology consistently delivers results for B2B companies</p>
        </div>

        <div class="grid lg:grid-cols-4 gap-8">
          <div class="bg-white p-8 rounded-xl shadow relative" data-aos="fade-up" data-aos-delay="100">
            <div class="absolute -top-5 -left-5 w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xl">
              1
            </div>
            <h3 class="text-xl font-bold mb-4 mt-4">Discovery & Analysis</h3>
            <p class="text-gray-600">We analyze your industry, competitors, and current SEO performance to identify opportunities.</p>
          </div>

          <div class="bg-white p-8 rounded-xl shadow relative" data-aos="fade-up" data-aos-delay="200">
            <div class="absolute -top-5 -left-5 w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xl">
              2
            </div>
            <h3 class="text-xl font-bold mb-4 mt-4">Strategy Development</h3>
            <p class="text-gray-600">We create a customized SEO roadmap aligned with your business goals and target audience.</p>
          </div>

          <div class="bg-white p-8 rounded-xl shadow relative" data-aos="fade-up" data-aos-delay="300">
            <div class="absolute -top-5 -left-5 w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xl">
              3
            </div>
            <h3 class="text-xl font-bold mb-4 mt-4">Implementation</h3>
            <p class="text-gray-600">Our team executes the strategy with technical fixes, content creation, and off-page tactics.</p>
          </div>

          <div class="bg-white p-8 rounded-xl shadow relative" data-aos="fade-up" data-aos-delay="400">
            <div class="absolute -top-5 -left-5 w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xl">
              4
            </div>
            <h3 class="text-xl font-bold mb-4 mt-4">Measurement & Refinement</h3>
            <p class="text-gray-600">We continuously analyze performance data and refine strategies to maximize ROI.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="py-24 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
          <h5 class="text-blue-600 font-semibold mb-2">Latest Insights</h5>
          <h2 class="text-3xl lg:text-4xl font-bold mb-4">B2B SEO Insights & Strategies</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">Actionable tips and strategies to improve your B2B SEO performance</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
          <div class="blog-card rounded-xl overflow-hidden shadow-md" data-aos="fade-up" data-aos-delay="100">
            <div class="h-48 bg-gray-200 relative overflow-hidden">
              <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600"></div>
            </div>
            <div class="p-6">
              <div class="flex items-center mb-4">
                <span class="bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">Strategy</span>
                <span class="text-gray-500 text-sm ml-4">March 15, 2025</span>
              </div>
              <h3 class="text-xl font-bold mb-2">7 B2B SEO Strategies That Actually Generate Leads</h3>
              <p class="text-gray-600 mb-4">Discover proven strategies that go beyond basic SEO tactics to generate high-quality B2B leads.</p>
              <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Read Article →</a>
            </div>
          </div>

          <div class="blog-card rounded-xl overflow-hidden shadow-md" data-aos="fade-up" data-aos-delay="200">
            <div class="h-48 bg-gray-200 relative overflow-hidden">
              <div class="absolute inset-0 bg-gradient-to-r from-green-600 to-teal-600"></div>
            </div>
            <div class="p-6">
              <div class="flex items-center mb-4">
                <span class="bg-green-100 text-green-600 text-xs font-semibold px-3 py-1 rounded-full">Technical</span>
                <span class="text-gray-500 text-sm ml-4">March 8, 2025</span>
              </div>
              <h3 class="text-xl font-bold mb-2">Technical SEO for B2B Websites: The Ultimate Guide</h3>
              <p class="text-gray-600 mb-4">Learn how to address common technical SEO issues that plague B2B websites and prevent growth.</p>
              <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Read Article →</a>
            </div>
          </div>

          <div class="blog-card rounded-xl overflow-hidden shadow-md" data-aos="fade-up" data-aos-delay="300">
            <div class="h-48 bg-gray-200 relative overflow-hidden">
              <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600"></div>
            </div>
            <div class="p-6">
              <div class="flex items-center mb-4">
                <span class="bg-purple-100 text-purple-600 text-xs font-semibold px-3 py-1 rounded-full">Content</span>
                <span class="text-gray-500 text-sm ml-4">March 1, 2025</span>
              </div>
              <h3 class="text-xl font-bold mb-2">Content That Converts: B2B SEO Content Strategy</h3>
              <p class="text-gray-600 mb-4">How to create content that not only ranks well but also moves prospects through your sales funnel.</p>
              <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Read Article →</a>
            </div>
          </div>
        </div>

        <div class="text-center mt-12" data-aos="fade-up">
          <a href="#" class="inline-block border border-blue-600 text-blue-600 hover:bg-blue-50 font-medium py-3 px-8 rounded-full transition-colors">
            View All Articles
          </a>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-gray-900 text-white relative overflow-hidden">
      <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500 rounded-full opacity-10 transform translate-x-1/2 -translate-y-1/2"></div>
      <div class="absolute bottom-0 left-0 w-64 h-64 bg-indigo-500 rounded-full opacity-10 transform -translate-x-1/2 translate-y-1/2"></div>

      <div class="container mx-auto px-6 relative">
        <!-- <div class="grid lg:grid-cols-2 gap-16"> -->
        <div class="grid xl:grid-cols-2 gap-16">
          <div data-aos="fade-right">
            <h5 class="text-blue-400 font-semibold mb-2">Contact Us</h5>
            <h2 class="text-3xl lg:text-4xl font-bold mb-6">Get Your Free SEO Consultation</h2>
            <p class="text-xl text-gray-300 mb-8">Let's discuss how we can help grow your B2B business through strategic SEO</p>

            <div class="space-y-6 text-gray-300">
              <div class="flex items-start">
                <div class="bg-blue-600 rounded-full p-3 mr-4">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div>
                  <h4 class="font-bold text-white mb-1">Office Location</h4>
                  <p>#209-418 East Broadway<br />Vancouver, BC V5T 1X2</p>
                </div>
              </div>

              <div class="flex items-start">
                <div class="bg-blue-600 rounded-full p-3 mr-4">
                  <i class="fas fa-envelope"></i>
                </div>
                <div>
                  <h4 class="font-bold text-white mb-1">Email Us</h4>
                  <p><a href="mailto:stefan@datafirstseo.com" class="hover:text-blue-400 transition-colors">stefan@datafirstseo.com</a></p>
                </div>
              </div>

              <div class="flex items-start">
                <div class="bg-blue-600 rounded-full p-3 mr-4">
                  <i class="fas fa-clock"></i>
                </div>
                <div>
                  <h4 class="font-bold text-white mb-1">Business Hours</h4>
                  <p>Monday - Friday: 9AM - 5PM PST<br />Weekend: Closed</p>
                </div>
              </div>
            </div>
          </div>

          <div data-aos="fade-left">
            <div class="bg-white text-gray-800 p-8 rounded-xl shadow-xl">
              <h3 class="text-2xl font-bold mb-6">Get Your Custom Growth Plan</h3>
              <form class="contact-form space-y-6">
                <div class="grid lg:grid-cols-2 gap-6">
                  <div>
                    <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                    <input type="text" id="name" placeholder="John Smith" required />
                  </div>
                  <div>
                    <label for="company" class="block text-gray-700 font-medium mb-2">Company Name</label>
                    <input type="text" id="company" placeholder="Your Company" />
                  </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-6">
                  <div>
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                    <input type="email" id="email" placeholder="john@company.com" required />
                  </div>
                  <div>
                    <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                    <input type="tel" id="phone" placeholder="(555) 123-4567" />
                  </div>
                </div>

                <div>
                  <label for="website" class="block text-gray-700 font-medium mb-2">Website URL</label>
                  <input type="url" id="website" placeholder="https://www.yourcompany.com" />
                </div>

                <div>
                  <label for="message" class="block text-gray-700 font-medium mb-2">How can we help?</label>
                  <textarea id="message" rows="4" placeholder="Tell us about your goals and challenges"></textarea>
                </div>

                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                  Get My Free Consultation
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
          <h5 class="text-blue-600 font-semibold mb-2">FAQ</h5>
          <h2 class="text-3xl lg:text-4xl font-bold mb-4">Frequently Asked Questions</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">Answers to common questions about our B2B SEO services</p>
        </div>

        <div class="max-w-4xl mx-auto">
          <div class="space-y-6">
            <div class="bg-white p-6 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-xl font-bold mb-3">How long does it take to see results from B2B SEO?</h3>
              <p class="text-gray-600">
                B2B SEO typically takes 3-6 months to see initial improvements, with significant results around 6-12 months. This timeline varies
                based on your industry competitiveness, website history, and current SEO status. We focus on quick wins early while building long-term
                strategies.
              </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="200">
              <h3 class="text-xl font-bold mb-3">What makes B2B SEO different from B2C SEO?</h3>
              <p class="text-gray-600">
                B2B SEO focuses on longer sales cycles, multiple decision-makers, and higher-value transactions. Strategies emphasize thought
                leadership, technical expertise, and content for various stages of longer buying journeys. B2B keywords are typically more specific
                and lower volume but higher value.
              </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="300">
              <h3 class="text-xl font-bold mb-3">Do you offer guarantees for SEO results?</h3>
              <p class="text-gray-600">
                While we don't guarantee specific rankings (no ethical SEO agency can), we do guarantee our methodology, transparency, and commitment
                to ROI. Our track record shows consistent results across B2B industries, and we focus on metrics that directly impact your business
                growth.
              </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="400">
              <h3 class="text-xl font-bold mb-3">How do you measure SEO success for B2B companies?</h3>
              <p class="text-gray-600">
                We go beyond traffic metrics to measure true business impact: qualified lead generation, cost per acquisition, revenue attribution,
                and ROI. We track rankings and visibility but prioritize metrics that directly influence your bottom line.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-blue-600 text-white">
      <div class="container mx-auto px-6 text-center">
        <div data-aos="fade-up">
          <h2 class="text-3xl lg:text-4xl font-bold mb-6">Ready to Transform Your B2B Revenue?</h2>
          <p class="text-xl mb-8 max-w-3xl mx-auto">
            Start generating more qualified leads and outranking your competitors with our proven B2B SEO strategies
          </p>
          <a href="#contact" class="inline-block bg-white text-blue-700 font-bold py-3 px-8 rounded-full cta-button hover:bg-gray-100">
            Get Your Custom Growth Plan
          </a>
        </div>
      </div>
    </section>
    <?php include 'components/footer.php'; ?>
<?php include 'components/scripts.php'; ?>