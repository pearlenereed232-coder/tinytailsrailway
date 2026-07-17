<?php
require_once 'config.php';
$page_title = 'Secure Checkout — ' . SITE_NAME;
?>
<?php include 'includes/header.php'; ?>

<section class="customize-hero">
    <div class="section-container">
        <div class="section-eyebrow" style="position:relative">Step 4 of 4</div>
        <h1>Secure <em style="color:var(--clr-gold)">Checkout</em></h1>
        <p>You're one step away from immortalizing your beloved pet. Your order is protected by SSL encryption.</p>
    </div>
</section>

<section style="padding:5rem 0;background:var(--clr-bg2)">
    <div class="section-container">
        <div class="customize-grid">
            <div>
                <div class="order-form">
                    <h2 class="form-title">💳 Payment Details</h2>

                    <!-- Trust badges -->
                    <div style="display:flex;gap:1rem;margin-bottom:2rem;flex-wrap:wrap">
                        <span class="badge" style="background:rgba(76,175,80,.1);color:#2E7D32;border:1px solid rgba(76,175,80,.3)">🔒 SSL Secure</span>
                        <span class="badge" style="background:rgba(196,113,79,.1);color:var(--clr-primary);border:1px solid rgba(196,113,79,.2)">💳 All Cards Accepted</span>
                        <span class="badge" style="background:rgba(212,168,83,.1);color:#7A5C1A;border:1px solid rgba(212,168,83,.3)">🛡️ Buyer Protection</span>
                    </div>

                    <form id="checkoutForm">
                        <div class="form-group">
                            <label class="form-label">Cardholder Name <span>*</span></label>
                            <input type="text" class="form-input" placeholder="As it appears on your card" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Card Number <span>*</span></label>
                            <input type="text" class="form-input" placeholder="1234 5678 9012 3456" maxlength="19" required>
                        </div>
                        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem">
                            <div class="form-group">
                                <label class="form-label">Expiry Date <span>*</span></label>
                                <input type="text" class="form-input" placeholder="MM / YY" maxlength="7" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">CVC <span>*</span></label>
                                <input type="text" class="form-input" placeholder="123" maxlength="4" required>
                            </div>
                        </div>

                        <!-- Coupon -->
                        <div class="form-group">
                            <label class="form-label">Discount Code</label>
                            <div style="display:flex;gap:.6rem">
                                <input type="text" id="couponInput" class="form-input" placeholder="e.g. WELCOME10" style="flex:1">
                                <button type="button" onclick="applyCoupon()" style="background:var(--clr-secondary);color:white;padding:.85rem 1.2rem;border-radius:var(--rad-md);font-weight:600;font-size:.88rem;white-space:nowrap;transition:var(--transition)">Apply</button>
                            </div>
                            <div id="couponMsg" style="font-size:.82rem;margin-top:.4rem;display:none"></div>
                        </div>

                        <button type="submit" class="btn-primary form-submit" onclick="placeOrder(event)">
                            🐾 Place My Order — $129
                        </button>

                        <p style="font-size:.8rem;color:var(--clr-muted);text-align:center;margin-top:.8rem">By placing your order you agree to our <a href="#" style="color:var(--clr-primary)">Terms of Service</a> and <a href="#" style="color:var(--clr-primary)">Refund Policy</a>.</p>
                    </form>
                </div>
            </div>

            <div>
                <div class="order-summary">
                    <h3 class="summary-title">Order Summary</h3>
                    <div class="summary-pet"><div class="summary-emoji">🐶</div><div class="summary-pet-name">Buddy</div></div>
                    <div class="summary-details">
                        <div class="summary-row"><strong>Classic Portrait</strong><span>$129.00</span></div>
                        <div class="summary-row"><strong>Name Engraving</strong><span>Included</span></div>
                        <div class="summary-row"><strong>Gift Box</strong><span>Included</span></div>
                        <div class="summary-row"><strong>USA Shipping</strong><span style="color:#4CAF50;font-weight:600">FREE</span></div>
                        <hr class="summary-divider">
                        <div class="summary-row summary-total"><strong>Total</strong><strong id="finalTotal">$129.00</strong></div>
                    </div>
                    <div class="summary-features" style="margin-top:1.5rem">
                        <h5>What happens next:</h5>
                        <ul>
                            <li><span class="check">1.</span> You'll get an email confirmation within minutes</li>
                            <li><span class="check">2.</span> Your artist begins sculpting within 24 hours</li>
                            <li><span class="check">3.</span> We send you progress photos throughout</li>
                            <li><span class="check">4.</span> Delivery in ~2-3 weeks + 3-5 day shipping</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Order Success Modal -->
<div id="successModal" style="display:none;position:fixed;inset:0;background:rgba(28,15,8,.8);z-index:9999;display:flex;align-items:center;justify-content:center;backdrop-filter:blur(8px)">
    <div style="background:white;border-radius:var(--rad-xl);padding:3.5rem;text-align:center;max-width:500px;margin:2rem;box-shadow:var(--shadow-lg);transform:scale(0);transition:transform .4s cubic-bezier(.34,1.56,.64,1)" id="successModalInner">
        <div style="font-size:4rem;margin-bottom:1rem">🎉</div>
        <h2 style="font-family:var(--font-head);font-size:2rem;color:var(--clr-dark);margin-bottom:.8rem">Order Placed!</h2>
        <p style="color:var(--clr-muted);line-height:1.65;margin-bottom:1.5rem">Your pet's sculpture is now in expert hands. Check your inbox for your confirmation email and get ready to be amazed. 🐾</p>
        <div style="background:var(--clr-bg2);border-radius:var(--rad-md);padding:1rem;margin-bottom:1.5rem;font-size:.9rem;color:var(--clr-text)">
            📧 Confirmation sent to your email<br>
            ⏱ Artist assigned within 24 hours<br>
            📸 First progress photo in ~3-4 days
        </div>
        <a href="index.php" class="btn-primary">Back to Home 🏠</a>
    </div>
</div>

<script>
function applyCoupon() {
    const code = document.getElementById('couponInput').value.trim().toUpperCase();
    const msg  = document.getElementById('couponMsg');
    const total = document.getElementById('finalTotal');
    msg.style.display = 'block';
    if (code === 'WELCOME10' || code === 'PAWS10') {
        msg.style.color = '#4CAF50'; msg.textContent = '✅ 10% discount applied!';
        total.textContent = '$116.10';
    } else if (code === 'SAVE20') {
        msg.style.color = '#4CAF50'; msg.textContent = '✅ 20% discount applied!';
        total.textContent = '$103.20';
    } else {
        msg.style.color = '#E57373'; msg.textContent = '❌ Invalid code. Try WELCOME10 for 10% off!';
    }
}
function placeOrder(e) {
    e.preventDefault();
    const modal = document.getElementById('successModal');
    const inner = document.getElementById('successModalInner');
    modal.style.display = 'flex';
    setTimeout(() => inner.style.transform = 'scale(1)', 10);
}
</script>

<?php include 'includes/footer.php'; ?>
