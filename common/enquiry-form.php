<form action="forms/contact.php" method="post" class="php-email-form mb-4" id="productEnquiryForm">
    <div class="row g-3">
        <div class="col-md-6 mb-2">
            <label for="name" class="form-label">Your Name</label>
            <input
                type="text"
                name="name"
                class="form-control"
                id="name"
                placeholder="Enter your name"
                minlength="4">
        </div>
        <div class="col-md-6 mb-2">
            <label for="email" class="form-label">Your Email</label>
            <input
                type="email"
                name="email"
                class="form-control"
                id="email"
                placeholder="Enter your email">
        </div>
        <div class="col-12 mb-2">
            <label for="mobile_number" class="form-label">Mobile Number</label>
            <input
                type="tel"
                name="mobile_number"
                class="form-control"
                id="mobile_number"
                placeholder="Enter your mobile number"
                pattern="[0-9]{10}">
        </div>
        <div class="col-12 mb-2">
            <label for="message" class="form-label">Message</label>
            <textarea
                name="message"
                class="form-control"
                id="message"
                rows="5"
                placeholder="Write your message"></textarea>
        </div>
        <div class="col-12 mb-2">
            <button type="submit" class="btn btn-primary px-4">
                Send Message
            </button>
        </div>

    </div>
</form>