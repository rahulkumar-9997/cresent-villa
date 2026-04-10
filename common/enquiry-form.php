<form id="contactForm" method="post">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="name" class="form-label">Your Name *</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required minlength="4">
            <div class="invalid-feedback">Please enter at least 4 characters.</div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="email" class="form-label">Your Email *</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
            <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>
        <div class="col-12 mb-3">
            <label for="mobile_number" class="form-label">Mobile Number *</label>
            <input type="tel" name="mobile_number" class="form-control" id="mobile_number" placeholder="Enter your mobile number" pattern="[0-9]{10}" required>
            <div class="invalid-feedback">Please enter a valid 10-digit mobile number.</div>
        </div>
        <div class="col-12 mb-3">
            <label for="message" class="form-label">Message *</label>
            <textarea name="message" class="form-control" id="message" rows="5" placeholder="Write your message" required></textarea>
            <div class="invalid-feedback">Please enter your message.</div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary px-4" id="submitBtn">
                Send Message
            </button>
            <span class="loading" id="loading">
                <span class="spinner-border spinner-border-sm" role="status"></span>
                Sending...
            </span>
        </div>
    </div>
</form>