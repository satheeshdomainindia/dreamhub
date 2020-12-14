@extends('layouts.site')

@section('title', 'Custom Cloud Servers')

@section('content')

	<!-- Content -->
    <section id="content">
        <!-- Content Row -->
        <section class="content-row content-row-color content-row-clouds">
            <div class="content-slider animate-container-slide" data-nav="true" data-rotation="5">
                <div class="slide">
                    <div class="container">
                        <div class="column-row align-center">
                            <div class="column-33 text-align-center">
                                <i class="fas fa-rocket icon-feature-large text-color-light"></i>
                            </div>
                            <div class="column-50">
                                <header class="content-header content-header-large content-header-align-left">
                                    <h3>
                                        High Performance
                                    </h3>
                                    <p>
                                        We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.<br><br>
                                        <a class="button button-secondary" href="network.html">Anycast Network<i class="fas fa-chevron-right icon-right"></i></a>
                                    </p>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="container">
                        <div class="column-row align-center">
                            <div class="column-33 text-align-center">
                                <i class="fas fa-cloud icon-feature-large text-color-light"></i>
                            </div>
                            <div class="column-50">
                                <header class="content-header content-header-large content-header-align-left">
                                    <h3>
                                        Fully Redundant
                                    </h3>
                                    <p>
                                        Our cloud platform offers a 99.99% SLA uptime guarantee with full hardware and network redundancy to keep your services online.<br><br>
                                        <a class="button button-secondary" href="network.html">Cloud Platform<i class="fas fa-chevron-right icon-right"></i></a>
                                    </p>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="container">
                        <div class="column-row align-center">
                            <div class="column-33 text-align-center">
                                <i class="fas fa-shield-alt icon-feature-large text-color-light"></i>
                            </div>
                            <div class="column-50">
                                <header class="content-header content-header-large content-header-align-left">
                                    <h3>
                                        Secure Infrastructure
                                    </h3>
                                    <p>
                                        All datacenters are Tier 4 certified and provide advanced fire and intrusion protection combined with enterprise networking hardware.<br><br>
                                        <a class="button button-secondary" href="network.html">Global Datacenters<i class="fas fa-chevron-right icon-right"></i></a>
                                    </p>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="container">
                        <div class="column-row align-center">
                            <div class="column-33 text-align-center">
                                <i class="fas fa-sync-alt icon-feature-large text-color-light"></i>
                            </div>
                            <div class="column-50">
                                <header class="content-header content-header-large content-header-align-left">
                                    <h3>
                                        Instant Activation
                                    </h3>
                                    <p>
                                        Your ordered product will be automatically and instantly activated as long as you are using a verified PayPal account for your purchase.<br><br>
                                        <a class="button button-secondary" href="home.html">Cloud Products<i class="fas fa-chevron-right icon-right"></i></a>
                                    </p>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="container">
                        <div class="column-row align-center">
                            <div class="column-33 text-align-center">
                                <i class="fas fa-life-ring icon-feature-large text-color-light"></i>
                            </div>
                            <div class="column-50">
                                <header class="content-header content-header-large content-header-align-left">
                                    <h3>
                                        Dedicated Support
                                    </h3>
                                    <p>
                                        Our dedicated in-house support team is available 24/7 to answer all technical difficulties you may encounter with any of our products.<br><br>
                                        <a class="button button-secondary" href="contact.html">Support Portal<i class="fas fa-chevron-right icon-right"></i></a>
                                    </p>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="container">
                        <div class="column-row align-center">
                            <div class="column-33 text-align-center">
                                <i class="fas fa-cog icon-feature-large text-color-light"></i>
                            </div>
                            <div class="column-50">
                                <header class="content-header content-header-large content-header-align-left">
                                    <h3>
                                        Powerful Automation
                                    </h3>
                                    <p>
                                        Our simple and intuitive developer API allows you to manage and extend existing products, as well as submitting new orders without interaction.<br><br>
                                        <a class="button button-secondary" href="features.html">Developer Guide<i class="fas fa-chevron-right icon-right"></i></a>
                                    </p>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Row -->
        <section class="content-row">
            <div class="container">
                <div class="column-row">
                    <div class="column-66">
                        <h3>
                            Integrated DDoS Protection
                        </h3>
                        <p>
                            Our network equipment across all locations is backed by enterprise grade DDoS protection gear to ensure your services stay online even in the event of an attack. All products are protected without additional charge, but the protection capacity can vary depending on which product you have ordered. Our dedicated private cloud offers the best protection with the complete 500 Gbit mitigation capacity.
                        </p>
                        <p>
                            You also have the possibility to order a DDoS protected IP address to reroute services outside of our network by setting up a GRE tunnel. Please contact our <a href="contact.html">sales department</a> for more details.
                        </p>
                        <h4>
                            Protected Attack Types
                        </h4>
                        <div class="column-row">
                            <div class="column-33">
                                <ul class="list-style-icon">
                                    <li>
                                        <i class="fas fa-check"></i>TCP/UDP Floods
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>HTTP GET/POST Floods
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>UDP Fragmentation
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>XOR DDoS
                                    </li>
                                </ul>
                            </div>
                            <div class="column-33">
                                <ul class="list-style-icon">
                                    <li>
                                        <i class="fas fa-check"></i>NTP/DNS Amplification
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>SSDP/UPNP Responses
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>Chargen Responses
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>SNMP Responses
                                    </li>
                                </ul>
                            </div>
                            <div class="column-33">
                                <ul class="list-style-icon">
                                    <li>
                                        <i class="fas fa-check"></i>Invalid port numbers
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>Connection holding
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>HOIC and LOIC
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>Spoofed SYN
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="product-box">
                            <div class="product-header">
                                <h4>
                                    Remote IP Protection
                                </h4>
                                <p>
                                    DDoS Protected GRE Tunnel
                                </p>
                            </div>
                            <div class="product-price">
                                $19<span class="term">/ TB</span>
                            </div>
                            <div class="product-features">
                                <ul>
                                    <li>
                                        <strong>500 Gbit</strong> Bandwidth Protection
                                    </li>
                                    <li>
                                        <strong>700 Mpps</strong> Packet Protection
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        99.90% Uptime SLA
                                    </li>
                                    <li>
                                        10 Locations
                                    </li>
                                </ul>
                            </div>
                            <div class="product-order">
                                <a class="button button-secondary" href="contact.html">
                                    <i class="fas fa-shopping-cart icon-left"></i>Contact Sales
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Row -->
        <section class="content-row content-row-gray">
            <div class="container">
                <div class="column-row align-center">
                    <div class="column-50">
                        <div class="network-map">
                            <ul>
                                <li style="top: 42%; left: 12.5%;">
                                    <a href="network.html"></a>
                                </li>
                                <li style="top: 44%; left: 20%;">
                                    <a href="network.html"></a>
                                </li>
                                <li style="top: 40%; left: 26%;">
                                    <a href="network.html"></a>
                                </li>
                                <li style="top: 78%; left: 34%;">
                                    <a href="network.html"></a>
                                </li>
                                <li style="top: 41%; left: 44.5%;">
                                    <a href="network.html"></a>
                                </li>
                                <li style="top: 32%; left: 46.5%;">
                                    <a href="network.html"></a>
                                </li>
                                <li style="top: 34%; left: 49.5%;">
                                    <a href="network.html"></a>
                                </li>
                                <li style="top: 64%; left: 75%;">
                                    <a href="network.html"></a>
                                </li>
                                <li style="top: 44%; left: 85%;">
                                    <a href="network.html"></a>
                                </li>
                                <li style="top: 83%; left: 89%;">
                                    <a href="network.html"></a>
                                </li>
                            </ul>
                            <img src="img/layout/map-dark.svg" alt="">
                        </div>
                    </div>
                    <div class="column-50">
                        <h3>
                            Instant Worldwide Deployment
                        </h3>
                        <p>
                            Depending on the product you have the choice of up to 10 worldwide locations to deploy your services. Our low latency network has a dedicated primary 100 Gbit capacity and the ability to burst up to 800 Gbit through our peering partners.
                        </p>
                        <h4>
                            Localized Peering
                        </h4>
                        <p>
                            Our network engineers are continuously optimizing the routing to ensure low latency and high bandwidth throughput across all datacenter locations. Customers additionally have the option to request custom routing.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Row -->
        <section class="content-row">
            <div class="container">
                <div class="column-row">
                    <div class="column-50">
                        <h3>
                            Service Level Agreement
                        </h3>
                        <p>
                            All products come with an SLA and the resulting availability guarantee as defined in the product description. The percentage defines an effective approximate availability provided by the given product platform to inform every customer of the reliability to be expected from the service in question. Account credit will be issued as hourly price percentage of the product affected by the outage.
                        </p>
                        <p>
                            <small class="text-color-gray">Our uptime guarantee is provided on a best effort basis. Customers will receive account credit should service availability fall below the given guarantee.</small>
                        </p>
                    </div>
                    <div class="column-50">
                        <table class="table-layout-fixed">
                            <thead>
                                <tr>
                                    <th>Availability</th>
                                    <th>Outage Timeframe</th>
                                    <th>Credit Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>100%</td>
                                    <td>–</td>
                                    <td>2.50% <small>/ hour</small></td>
                                </tr>
                                <tr>
                                    <td>99.99%</td>
                                    <td>1 hour <small>/ year</small></td>
                                    <td>1.25% <small>/ hour</small></td>
                                </tr>
                                <tr>
                                    <td>99.95%</td>
                                    <td>4 hours <small>/ year</small></td>
                                    <td>0.75% <small>/ hour</small></td>
                                </tr>
                                <tr>
                                    <td>99.90%</td>
                                    <td>8 hours <small>/ year</small></td>
                                    <td>0.25% <small>/ hour</small></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Row -->
        <section class="content-row content-row-gray">
            <div class="container">
                <header class="content-header">
                    <h2>
                        What Our Customers Say
                    </h2>
                    <p>
                        We've helped hundreds of clients with custom server solutions, enabling them to operate much more efficient and secure than they ever did before.
                    </p>
                </header>
                <div class="column-row align-center-bottom">
                    <div class="column-33">
                        <div class="testimonial">
                            <p class="testimonial-content">
                                My customers didn't experience a single minute of downtime since I moved my services over to DreamHost.
                            </p>
                            <p class="testimonial-author">
                                <a href="#twitter"><i class="fab fa-twitter icon-left"></i>Peter Miller</a><br>
                                <small>Chemical Industries</small>
                            </p>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="testimonial">
                            <p class="testimonial-content">
                                DreamHost helped me with a professional custom server solution when my business was so rapidly growing my old system couldn't handle the load anymore.
                            </p>
                            <p class="testimonial-author">
                                <a href="#twitter"><i class="fab fa-twitter icon-left"></i>John Smith</a><br>
                                <small>HQ Streaming Company</small>
                            </p>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="testimonial">
                            <p class="testimonial-content">
                                By switching to DreamHost's Anycast DNS system we were able to decrease the worldwide app latency immensely.
                            </p>
                            <p class="testimonial-author">
                                <a href="#twitter"><i class="fab fa-twitter icon-left"></i>Mary Fonda</a><br>
                                <small>SAAS Billing Solutions</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Row -->
        <section class="content-row content-row-color">
            <div class="container">
                <header class="content-header">
                    <h2>
                        Looking for a custom solution?
                    </h2>
                    <p>
                        Our technicians can provide you with the best custom made solutions on the market, no matter whether you're a small business or large enterprise.<br><br>
                        <a class="button button-secondary" href="{{ cpurl('contact.html') }}">
                            <i class="fas fa-envelope icon-left"></i>Get in touch
                        </a>
                    </p>
                </header>
            </div>
        </section>
    </section>

@endsection