<?php
require_once 'config.php';
$page_title = 'Start Your Custom Order — ' . SITE_NAME;
$meta_description = 'Order your custom handcrafted polymer clay pet sculpture. Upload photos, choose your style, and let our artists bring your pet to life.';
$type = $_GET['type'] ?? 'Classic Portrait';
?>
<?php include 'includes/header.php'; ?>

<!-- Customize Hero -->
<section class="customize-hero">
    <div class="customize-hero-blobs">
        <div class="blob-1" style="position:absolute;width:400px;height:400px;top:-100px;right:-100px;background:radial-gradient(circle,rgba(196,113,79,.2),transparent);border-radius:50%;filter:blur(80px);animation:blobFloat 8s ease-in-out infinite;"></div>
    </div>
    <div class="section-container">
        <div class="section-eyebrow" style="position:relative">Step 1 of 4</div>
        <h1>Start Your Pet's <em style="color:var(--clr-gold);font-style:italic">Legacy</em></h1>
        <p>Fill in your pet's details, upload a few photos, and we'll take it from there. It takes under 5 minutes — we do the rest.</p>
    </div>
</section>

<!-- Progress Bar -->
<div style="background:#f0e8e0;padding:.6rem 0;position:sticky;top:68px;z-index:99;border-bottom:1px solid var(--clr-border)">
    <div class="section-container">
        <div style="display:flex;align-items:center;gap:.5rem;font-size:.82rem;color:var(--clr-muted)">
            <span style="color:var(--clr-primary);font-weight:700">● Pet Details</span>
            <span style="flex:1;height:2px;background:var(--clr-border);border-radius:99px;position:relative">
                <span style="position:absolute;left:0;top:0;bottom:0;width:25%;background:var(--clr-primary);border-radius:99px"></span>
            </span>
            <span>● Customization</span>
            <span style="flex:1;height:2px;background:var(--clr-border);border-radius:99px"></span>
            <span>● Review</span>
            <span style="flex:1;height:2px;background:var(--clr-border);border-radius:99px"></span>
            <span>● Payment</span>
        </div>
    </div>
</div>

<!-- Main Customize Form -->
<section class="customize-main" style="background:var(--clr-bg2)">
    <div class="section-container">
        <div class="customize-grid">

            <!-- LEFT: Form -->
            <div>
                <form class="order-form" id="orderForm">
                    <h2 class="form-title">🐾 Tell Us About Your Pet</h2>

                    <!-- Product Type -->
                    <div class="form-group">
                        <label class="form-label">Choose Your Sculpture <span>*</span></label>
                        <div class="product-selector">
                            <?php
                            $ptypes = [
                                ['name'=>'Mini Portrait',    'price'=>'From $89',  'icon'=>'🐾', 'desc'=>'3 inches'],
                                ['name'=>'Classic Portrait', 'price'=>'From $129', 'icon'=>'🏆', 'desc'=>'4.5 inches'],
                                ['name'=>'Memorial Tribute', 'price'=>'From $179', 'icon'=>'👼', 'desc'=>'With dome'],
                            ];
                            foreach ($ptypes as $pt):
                                $selected = $type === $pt['name'] ? 'selected' : '';
                            ?>
                            <label class="product-option <?= $selected ?>" onclick="selectProduct(this)">
                                <input type="radio" name="product_type" value="<?= htmlspecialchars($pt['name']) ?>" <?= $selected ? 'checked' : '' ?>>
                                <div class="po-icon"><?= $pt['icon'] ?></div>
                                <div class="po-name"><?= $pt['name'] ?></div>
                                <div class="po-price"><?= $pt['price'] ?></div>
                                <div style="font-size:.72rem;color:var(--clr-muted)"><?= $pt['desc'] ?></div>
                            </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Pet Name -->
                    <div class="form-group">
                        <label class="form-label" for="petName">Your Pet's Name <span>*</span></label>
                        <input type="text" id="petName" name="pet_name" class="form-input" placeholder="e.g. Buddy, Luna, Mochi..." required oninput="updatePreview()">
                    </div>

                    <!-- Pet Type -->
                    <div class="form-group">
                        <label class="form-label" for="petType">Type of Pet <span>*</span></label>
                        <select id="petType" name="pet_type" class="form-select" required onchange="updatePreview()">
                            <option value="">— Select your pet type —</option>
                            <option value="dog">🐶 Dog</option>
                            <option value="cat">🐱 Cat</option>
                            <option value="rabbit">🐰 Rabbit</option>
                            <option value="bird">🦜 Bird / Parrot</option>
                            <option value="hamster">🐹 Hamster / Guinea Pig</option>
                            <option value="reptile">🦎 Reptile</option>
                            <option value="horse">🐴 Horse</option>
                            <option value="other">🐾 Other</option>
                        </select>
                    </div>

                    <!-- Breed + Color (inline) -->
                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem">
                        <div class="form-group">
                            <label class="form-label" for="petBreed">Breed / Species</label>
                            <input type="text" id="petBreed" name="pet_breed" class="form-input" placeholder="e.g. Golden Retriever">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="petColor">Fur / Coat Color(s) <span>*</span></label>
                            <input type="text" id="petColor" name="pet_color" class="form-input" placeholder="e.g. golden brown, white" required>
                        </div>
                    </div>

                    <!-- Engraving -->
                    <div class="form-group">
                        <label class="form-label" for="engraving">Base Engraving Text</label>
                        <input type="text" id="engraving" name="engraving" class="form-input" placeholder="e.g. Buddy 2018–2024 | Forever in Our Hearts" maxlength="60">
                        <div style="font-size:.78rem;color:var(--clr-muted);margin-top:.4rem">Max 60 characters. Leave blank for pet's name only.</div>
                    </div>

                    <!-- Special Details -->
                    <div class="form-group">
                        <label class="form-label" for="details">Personality & Special Details</label>
                        <textarea id="details" name="details" class="form-textarea" placeholder="Tell us about your pet! Distinctive markings, favourite pose, personality quirks, accessories they wore — the more you share, the more we capture their spirit."></textarea>
                    </div>

                    <!-- Photo Upload -->
                    <div class="form-group">
                        <label class="form-label">Upload Photos <span>*</span></label>
                        <div class="upload-zone" id="uploadZone">
                            <div class="upload-icon">📸</div>
                            <div class="upload-text"><strong>Click to upload</strong> or drag & drop photos here</div>
                            <div class="upload-note">JPG, PNG, HEIC • Up to 20MB per photo • 5-10 photos recommended</div>
                        </div>
                    </div>

                    <!-- Your Details -->
                    <h3 style="font-family:var(--font-head);font-size:1.2rem;color:var(--clr-dark);margin:1.8rem 0 1rem;padding-top:1rem;border-top:1px solid var(--clr-border)">📦 Your Delivery Details</h3>

                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem">
                        <div class="form-group">
                            <label class="form-label" for="firstName">First Name <span>*</span></label>
                            <input type="text" id="firstName" name="first_name" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="lastName">Last Name <span>*</span></label>
                            <input type="text" id="lastName" name="last_name" class="form-input" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email Address <span>*</span></label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="you@email.com" required>
                        <div style="font-size:.78rem;color:var(--clr-muted);margin-top:.4rem">We'll send sculpting progress photos here.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="address">Shipping Address <span>*</span></label>
                        <input type="text" id="address" name="address" class="form-input" placeholder="Street address" required>
                    </div>
                    <div style="display:grid;grid-template-columns:2fr 1fr;gap:1rem">
                        <div class="form-group">
                            <label class="form-label" for="city">City</label>
                            <input type="text" id="city" name="city" class="form-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="zip">ZIP Code</label>
                            <input type="text" id="zip" name="zip" class="form-input" maxlength="10">
                        </div>
                    </div>

                    <!-- Gift Option -->
                    <div style="background:rgba(212,168,83,.1);border:1px solid rgba(212,168,83,.3);border-radius:var(--rad-md);padding:1rem;margin:1rem 0">
                        <label style="display:flex;align-items:center;gap:.75rem;cursor:pointer;font-weight:600;color:var(--clr-dark)">
                            <input type="checkbox" name="is_gift" style="width:18px;height:18px;accent-color:var(--clr-primary)">
                            🎁 This is a gift — include a handwritten card
                        </label>
                        <div class="form-group" id="giftMessageGroup" style="display:none;margin-top:1rem;margin-bottom:0">
                            <label class="form-label">Gift Message</label>
                            <textarea name="gift_message" class="form-textarea" placeholder="Write your heartfelt message here..." style="min-height:70px"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn-primary form-submit">
                        🐾 Continue to Review & Pay →
                    </button>

                    <p style="font-size:.8rem;color:var(--clr-muted);text-align:center;margin-top:1rem">
                        🔒 Secure checkout &nbsp;·&nbsp; 💳 SSL encrypted &nbsp;·&nbsp; 🔄 Unlimited revisions guaranteed
                    </p>
                </form>
            </div>

            <!-- RIGHT: Order Summary -->
            <div>
                <div class="order-summary">
                    <h3 class="summary-title">Order Summary</h3>

                    <div class="summary-pet" id="summaryPet">
                        <div class="summary-emoji" id="summaryEmoji">🐾</div>
                        <div class="summary-pet-name" id="summaryName">Your beloved pet</div>
                    </div>

                    <div class="summary-details">
                        <div class="summary-row">
                            <strong>Sculpture Type</strong>
                            <span id="summaryType"><?= htmlspecialchars($type) ?></span>
                        </div>
                        <div class="summary-row">
                            <strong>Creation Time</strong>
                            <span>2-3 Weeks</span>
                        </div>
                        <div class="summary-row">
                            <strong>Shipping</strong>
                            <span style="color:#4CAF50;font-weight:600">FREE 🎉</span>
                        </div>
                        <hr class="summary-divider">
                        <div class="summary-row summary-total">
                            <strong>Starting From</strong>
                            <strong id="summaryPrice">$129</strong>
                        </div>
                    </div>

                    <div class="summary-features">
                        <h5>Everything Included:</h5>
                        <ul>
                            <li><span class="check">✓</span> 100% hand-sculpted by expert artist</li>
                            <li><span class="check">✓</span> Unlimited revisions before shipping</li>
                            <li><span class="check">✓</span> Photo proofs throughout the process</li>
                            <li><span class="check">✓</span> UV-protective waterproof glaze</li>
                            <li><span class="check">✓</span> Custom base engraving</li>
                            <li><span class="check">✓</span> Luxury foam-padded gift box</li>
                            <li><span class="check">✓</span> Free USA shipping</li>
                        </ul>
                    </div>

                    <!-- Trust row -->
                    <div style="display:flex;justify-content:center;gap:1rem;margin-top:1.5rem;flex-wrap:wrap">
                        <div style="display:flex;align-items:center;gap:.4rem;font-size:.78rem;color:var(--clr-muted)"><span>🔒</span> Secure</div>
                        <div style="display:flex;align-items:center;gap:.4rem;font-size:.78rem;color:var(--clr-muted)"><span>⭐</span> 4.9 Stars</div>
                        <div style="display:flex;align-items:center;gap:.4rem;font-size:.78rem;color:var(--clr-muted)"><span>🔄</span> Revisions</div>
                    </div>
                </div>

                <!-- Testimonial snippet -->
                <div style="background:white;border-radius:var(--rad-lg);padding:1.5rem;margin-top:1.5rem;border:1px solid var(--clr-border);box-shadow:var(--shadow-sm)">
                    <div style="color:var(--clr-gold);font-size:1rem;margin-bottom:.5rem">★★★★★</div>
                    <p style="font-size:.88rem;color:var(--clr-text);font-style:italic;line-height:1.6;margin-bottom:.8rem">"I was nervous ordering online but from first message to delivery, it was seamless. The sculpture looks EXACTLY like our dog. I cried happy tears."</p>
                    <div style="font-size:.8rem;color:var(--clr-muted);font-weight:600">— Jessica T., Portland OR ✓ Verified</div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
function selectProduct(el) {
    document.querySelectorAll('.product-option').forEach(o => o.classList.remove('selected'));
    el.classList.add('selected');
    const prices = {'Mini Portrait':'$89','Classic Portrait':'$129','Memorial Tribute':'$179'};
    const name = el.querySelector('.po-name').textContent;
    document.getElementById('summaryType').textContent  = name;
    document.getElementById('summaryPrice').textContent = prices[name] || '$129';
}

function updatePreview() {
    const name    = document.getElementById('petName').value || 'Your beloved pet';
    const petType = document.getElementById('petType').value;
    const emojis  = {dog:'🐶',cat:'🐱',rabbit:'🐰',bird:'🦜',hamster:'🐹',reptile:'🦎',horse:'🐴',other:'🐾'};
    document.getElementById('summaryName').textContent  = name;
    document.getElementById('summaryEmoji').textContent = emojis[petType] || '🐾';
}

// Gift toggle
document.querySelector('input[name="is_gift"]')?.addEventListener('change', function() {
    document.getElementById('giftMessageGroup').style.display = this.checked ? 'block' : 'none';
});
</script>

<?php include 'includes/footer.php'; ?>
