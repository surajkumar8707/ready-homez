@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Terma and Conditions')
@section('content')
    <!-- Terms & Conditions -->
    <div class="container">
        <section id="terms-and-conditions">
            <h1>Terms & Conditions</h1>
            <p>Welcome to Ready Homez! By using our website and services, you agree to the following terms and conditions.
                Please read them carefully.</p>

            <h2>1. Acceptance of Terms</h2>
            <p>By accessing or using our website, you agree to be bound by these terms and any other policies we post. If
                you do not agree, please do not use our services.</p>

            <h2>2. Use of the Website</h2>
            <p>You agree to use the website for lawful purposes only. You may not use the site in any way that could harm
                the website, its content, or other users.</p>

            <h2>3. Booking Terms</h2>
            <ul>
                <li><strong>Booking Confirmation:</strong> When you make a booking, you agree to provide accurate and
                    complete information. Bookings are subject to availability, and we reserve the right to cancel any
                    booking if incorrect information is provided.</li>
                <li><strong>Payment:</strong> Payment must be made according to the rates listed on our website. We accept
                    various payment methods as specified during the booking process.</li>
            </ul>

            <h2>4. Intellectual Property</h2>
            <p>All content, design, and materials on the website are owned by Ready Homez and are protected by copyright and
                trademark laws. You may not reproduce, distribute, or create derivative works without our permission.</p>

            <h2>5. Limitation of Liability</h2>
            <p>Ready Homez will not be held liable for any damages, losses, or claims arising from the use of our website or
                services. We do not guarantee that the website will be free from errors, interruptions, or viruses.</p>

            <h2>6. Governing Law</h2>
            <p>These terms and conditions are governed by the laws of Himachal. Any disputes arising from the use of this
                website shall be resolved by the courts.</p>

            <h2>7. Changes to Terms</h2>
            <p>We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting,
                and your continued use of the website signifies acceptance of the new terms.</p>

            <h2>8. Contact Us</h2>
            <p>For questions about these Terms & Conditions, please contact us at <a
                    href="mailto:{{ getSettings()->email }}">{{ getSettings()->email }}</a>.</p>
        </section>
    </div>
@endsection
