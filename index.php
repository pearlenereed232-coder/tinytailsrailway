<?php require_once 'config.php'; ?>
<?php include 'includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════════════════ -->
<section class="hero" id="home">
    <!-- Floating paw particles -->
    <div class="paw-particles" id="pawParticles"></div>

    <!-- Background blobs -->
    <div class="hero-blob blob-1"></div>
    <div class="hero-blob blob-2"></div>
    <div class="hero-blob blob-3"></div>

    <div class="hero-container">
        <div class="hero-content" data-aos="fade-right">
            <div class="hero-badge">
                <span class="badge-dot"></span>
                ⭐ 4.9/5 from <?= number_format(REVIEW_COUNT) ?>+ happy pet parents
            </div>
            <h1 class="hero-title">
                Your Pet,<br>
                <span class="title-highlight">
                    <span class="typewriter" id="typewriter"></span>
                </span><br>
                Sculpted in Clay
            </h1>
            <p class="hero-subtitle">
                100% hand-sculpted polymer clay portraits — not 3D printed, not AI-generated.
                Just pure artisan love, capturing your pet's soul in a timeless keepsake.
            </p>
            <div class="hero-ctas">
                <a href="customize.php" class="btn-primary">
                    <span>🐾 Start My Sculpture</span>
                    <svg class="btn-arrow" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="#gallery" class="btn-ghost">
                    <span class="play-icon">▶</span> See the Magic
                </a>
            </div>
            <div class="hero-trust">
                <div class="trust-item">
                    <span class="trust-icon">🎨</span>
                    <span>100% Hand-Sculpted</span>
                </div>
                <div class="trust-item">
                    <span class="trust-icon">🔄</span>
                    <span>Unlimited Revisions</span>
                </div>
                <div class="trust-item">
                    <span class="trust-icon">🚚</span>
                    <span>Free USA Shipping</span>
                </div>
            </div>
        </div>

        <div class="hero-visual" data-aos="fade-left">
            <div class="hero-sculpture-card">
                <div class="sculpture-glow"></div>
                <div class="sculpture-display">
                    <!-- Animated SVG Clay Sculpture Illustration -->
                    <svg class="sculpture-svg" viewBox="0 0 300 380" xmlns="http://www.w3.org/2000/svg">
                        <!-- Pedestal / Base -->
                        <ellipse cx="150" cy="340" rx="80" ry="18" fill="#8B5E3C" opacity="0.6"/>
                        <rect x="100" y="318" width="100" height="28" rx="6" fill="#A0714A"/>
                        <rect x="95" y="316" width="110" height="10" rx="5" fill="#C4714F"/>
                        <!-- Name plate -->
                        <rect x="112" y="326" width="76" height="14" rx="3" fill="#D4A853" opacity="0.9"/>
                        <text x="150" y="336" text-anchor="middle" fill="#1C0F08" font-size="7" font-family="Poppins" font-weight="600">BUDDY</text>

                        <!-- Body (sitting dog) -->
                        <ellipse cx="150" cy="265" rx="52" ry="55" fill="#D4956A" class="sculpt-body"/>

                        <!-- Tail -->
                        <path d="M195 270 Q220 240 210 220 Q205 210 198 218 Q205 235 185 258 Z" fill="#C4814A" class="sculpt-tail"/>

                        <!-- Front paws -->
                        <ellipse cx="122" cy="308" rx="18" ry="12" fill="#C4814A"/>
                        <ellipse cx="178" cy="308" rx="18" ry="12" fill="#C4814A"/>
                        <!-- Paw toes -->
                        <ellipse cx="116" cy="316" rx="5" ry="4" fill="#B5714A"/>
                        <ellipse cx="122" cy="318" rx="5" ry="4" fill="#B5714A"/>
                        <ellipse cx="128" cy="316" rx="5" ry="4" fill="#B5714A"/>
                        <ellipse cx="172" cy="316" rx="5" ry="4" fill="#B5714A"/>
                        <ellipse cx="178" cy="318" rx="5" ry="4" fill="#B5714A"/>
                        <ellipse cx="184" cy="316" rx="5" ry="4" fill="#B5714A"/>

                        <!-- Head -->
                        <ellipse cx="150" cy="202" rx="48" ry="45" fill="#D4956A" class="sculpt-head"/>

                        <!-- Ears -->
                        <ellipse cx="112" cy="180" rx="20" ry="28" fill="#C4814A" transform="rotate(-15 112 180)"/>
                        <ellipse cx="188" cy="180" rx="20" ry="28" fill="#C4814A" transform="rotate(15 188 180)"/>
                        <ellipse cx="112" cy="180" rx="12" ry="20" fill="#E8A87A" transform="rotate(-15 112 180)"/>
                        <ellipse cx="188" cy="180" rx="12" ry="20" fill="#E8A87A" transform="rotate(15 188 180)"/>

                        <!-- Eyes -->
                        <ellipse cx="134" cy="198" rx="10" ry="11" fill="#1C0F08"/>
                        <ellipse cx="166" cy="198" rx="10" ry="11" fill="#1C0F08"/>
                        <!-- Eye shine -->
                        <ellipse cx="137" cy="194" rx="3.5" ry="3.5" fill="white"/>
                        <ellipse cx="169" cy="194" rx="3.5" ry="3.5" fill="white"/>
                        <ellipse cx="139" cy="196" rx="1.5" ry="1.5" fill="white" opacity="0.6"/>
                        <ellipse cx="171" cy="196" rx="1.5" ry="1.5" fill="white" opacity="0.6"/>

                        <!-- Nose -->
                        <ellipse cx="150" cy="218" rx="10" ry="7" fill="#1C0F08"/>
                        <ellipse cx="148" cy="215" rx="3" ry="2" fill="#4A2F1A" opacity="0.6"/>

                        <!-- Mouth -->
                        <path d="M143 225 Q150 232 157 225" stroke="#1C0F08" stroke-width="2" fill="none" stroke-linecap="round"/>

                        <!-- Cheek blush -->
                        <ellipse cx="122" cy="215" rx="12" ry="8" fill="#E8736A" opacity="0.3"/>
                        <ellipse cx="178" cy="215" rx="12" ry="8" fill="#E8736A" opacity="0.3"/>

                        <!-- Collar -->
                        <path d="M108 238 Q150 248 192 238" stroke="#D4A853" stroke-width="6" fill="none" stroke-linecap="round"/>
                        <!-- Collar tag -->
                        <circle cx="150" cy="247" r="7" fill="#D4A853"/>
                        <text x="150" y="250" text-anchor="middle" fill="#1C0F08" font-size="6" font-weight="bold">★</text>

                        <!-- Sparkles around -->
                        <g class="sparkle-group">
                            <path d="M60 140 L63 148 L71 151 L63 154 L60 162 L57 154 L49 151 L57 148 Z" fill="#D4A853" opacity="0.8"/>
                            <path d="M240 120 L242 126 L248 128 L242 130 L240 136 L238 130 L232 128 L238 126 Z" fill="#D4A853" opacity="0.7"/>
                            <path d="M78 310 L80 316 L86 318 L80 320 L78 326 L76 320 L70 318 L76 316 Z" fill="#C4714F" opacity="0.5"/>
                            <circle cx="245" cy="270" r="4" fill="#D4A853" opacity="0.6"/>
                            <circle cx="55" cy="250" r="3" fill="#C4714F" opacity="0.5"/>
                        </g>
                    </svg>
                    <!-- Floating badge -->
                    <div class="float-badge badge-handmade">✋ 100% Hand-Sculpted</div>
                    <div class="float-badge badge-love">❤️ Made with Love</div>
                </div>
            </div>

            <!-- Floating mini cards -->
            <div class="mini-card mini-card-1" data-aos="zoom-in" data-aos-delay="400">
                <div class="mini-icon">⭐⭐⭐⭐⭐</div>
                <div class="mini-text">"Absolutely perfect!"</div>
                <div class="mini-author">— Sarah M.</div>
            </div>
            <div class="mini-card mini-card-2" data-aos="zoom-in" data-aos-delay="600">
                <div class="mini-stat"><?= number_format(SCULPTURES_MADE) ?>+</div>
                <div class="mini-label">Sculptures Made</div>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="scroll-indicator">
        <div class="scroll-mouse">
            <div class="scroll-wheel"></div>
        </div>
        <span>Scroll to explore</span>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     MARQUEE TRUST STRIP
═══════════════════════════════════════════════════════ -->
<section class="trust-strip">
    <div class="marquee-track">
        <div class="marquee-content">
            <?php
            $items = [
                '🐶 Custom Dog Sculptures',
                '🐱 Cat Portraits in Clay',
                '🐰 Exotic Pet Keepsakes',
                '🏆 4.9 Star Rating',
                '🎨 100% Hand-Sculpted',
                '🚚 Free USA Shipping',
                '🔄 Unlimited Revisions',
                '💎 UV-Protective Glaze',
                '📸 Photo-Proof Before Ship',
                '🐾 <?= number_format(SCULPTURES_MADE) ?>+ Pets Immortalized',
            ];
            for ($i = 0; $i < 3; $i++) {
                foreach ($items as $item) {
                    echo "<span class=\"marquee-item\">{$item}</span><span class=\"marquee-dot\">✦</span>";
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     STATS COUNTER SECTION
═══════════════════════════════════════════════════════ -->
<section class="stats-section" id="stats">
    <div class="section-container">
        <div class="stats-grid">
            <div class="stat-card" data-aos="fade-up" data-aos-delay="0">
                <div class="stat-icon">🐾</div>
                <div class="stat-number" data-target="<?= SCULPTURES_MADE ?>">0</div>
                <div class="stat-plus">+</div>
                <div class="stat-label">Pets Immortalized</div>
            </div>
            <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-icon">❤️</div>
                <div class="stat-number" data-target="<?= HAPPY_FAMILIES ?>">0</div>
                <div class="stat-plus">+</div>
                <div class="stat-label">Happy Families</div>
            </div>
            <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-icon">⭐</div>
                <div class="stat-number stat-decimal" data-target="49">0</div>
                <div class="stat-slash">/5</div>
                <div class="stat-label">Average Rating</div>
            </div>
            <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-icon">🏅</div>
                <div class="stat-number" data-target="95">0</div>
                <div class="stat-plus">%</div>
                <div class="stat-label">5-Star Reviews</div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     PRODUCTS SECTION
═══════════════════════════════════════════════════════ -->
<section class="products-section" id="products">
    <div class="section-container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-eyebrow">Our Collections</div>
            <h2 class="section-title">Choose Your <span>Perfect</span> Sculpture</h2>
            <p class="section-subtitle">Every piece is custom-crafted from your photos. No templates. No shortcuts. Just pure artistry.</p>
        </div>

        <div class="products-grid">
            <?php
            $products = [
                [
                    'emoji'    => '🐾',
                    'name'     => 'Mini Portrait',
                    'size'     => '3 inches tall',
                    'price'    => 'From $89',
                    'badge'    => 'Best Seller',
                    'badge_cls'=> 'badge-gold',
                    'color'    => '#C4714F',
                    'features' => [
                        'Perfect for desks & shelves',
                        'Custom name engraving',
                        'UV-protective glaze',
                        'Free foam-padded box',
                    ],
                    'delivery' => '2-3 weeks',
                ],
                [
                    'emoji'    => '🏆',
                    'name'     => 'Classic Portrait',
                    'size'     => '4.5 inches tall',
                    'price'    => 'From $129',
                    'badge'    => 'Most Popular',
                    'badge_cls'=> 'badge-primary',
                    'color'    => '#8B4513',
                    'features' => [
                        'Ultra-fine detail work',
                        'Custom name engraving',
                        'Multi-coat glaze finish',
                        'Gift-ready luxury box',
                    ],
                    'delivery' => '2-3 weeks',
                ],
                [
                    'emoji'    => '👼',
                    'name'     => 'Memorial Tribute',
                    'size'     => '4.5" with dome',
                    'price'    => 'From $179',
                    'badge'    => 'Most Heartfelt',
                    'badge_cls'=> 'badge-purple',
                    'color'    => '#7B5EA7',
                    'features' => [
                        'Angel wings detail',
                        'Glass dome display',
                        'Personalized memorial plate',
                        'Rainbow Bridge poem card',
                    ],
                    'delivery' => '2-3 weeks',
                ],
            ];
            foreach ($products as $i => $p):
            ?>
            <div class="product-card <?= $i === 1 ? 'product-featured' : '' ?>" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                <div class="product-badge <?= $p['badge_cls'] ?>"><?= $p['badge'] ?></div>
                <div class="product-visual" style="--prod-color: <?= $p['color'] ?>">
                    <div class="product-emoji"><?= $p['emoji'] ?></div>
                    <div class="product-glow-ring"></div>
                </div>
                <div class="product-info">
                    <h3><?= $p['name'] ?></h3>
                    <div class="product-size">📏 <?= $p['size'] ?></div>
                    <ul class="product-features">
                        <?php foreach ($p['features'] as $f): ?>
                        <li><span class="check">✓</span> <?= $f ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="product-footer">
                        <div class="product-price"><?= $p['price'] ?></div>
                        <a href="customize.php?type=<?= urlencode($p['name']) ?>" class="btn-order">Order Now →</a>
                    </div>
                    <div class="product-delivery">🚚 Ships in <?= $p['delivery'] ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     GALLERY SECTION
═══════════════════════════════════════════════════════ -->
<section class="gallery-section" id="gallery">
    <div class="section-container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-eyebrow">Our Work</div>
            <h2 class="section-title">Every Pet is a <span>Masterpiece</span></h2>
            <p class="section-subtitle">Browse hundreds of hand-sculpted portraits — dogs, cats, rabbits, birds, and beyond.</p>
        </div>

        <!-- Gallery Filter Tabs -->
        <div class="gallery-tabs" data-aos="fade-up">
            <button class="tab active" data-filter="all">All Pets</button>
            <button class="tab" data-filter="dogs">🐶 Dogs</button>
            <button class="tab" data-filter="cats">🐱 Cats</button>
            <button class="tab" data-filter="memorial">👼 Memorial</button>
            <button class="tab" data-filter="exotic">🦜 Exotic</button>
        </div>

        <!-- Masonry Gallery Grid -->
        <div class="gallery-grid" id="galleryGrid">
            <?php
            $gallery = [
                ['pet'=>'Golden Retriever','breed'=>'Dog','filter'=>'dogs','emoji'=>'🐕','palette'=>['#D4956A','#E8B07A','#C4714F'],'tall'=>true],
                ['pet'=>'Persian Cat','breed'=>'Cat','filter'=>'cats','emoji'=>'🐈','palette'=>['#C8A8E8','#A87BC8','#7B5EA7'],'tall'=>false],
                ['pet'=>'Beagle Memorial','breed'=>'Dog','filter'=>'memorial','emoji'=>'👼','palette'=>['#A8C8E8','#78A8D8','#4A7AB5'],'tall'=>false],
                ['pet'=>'Siamese Cat','breed'=>'Cat','filter'=>'cats','emoji'=>'🐱','palette'=>['#E8D4A8','#D4B878','#B89450'],'tall'=>true],
                ['pet'=>'Labrador','breed'=>'Dog','filter'=>'dogs','emoji'=>'🐶','palette'=>['#8B6914','#A87820','#C49230'],'tall'=>false],
                ['pet'=>'Parrot','breed'=>'Bird','filter'=>'exotic','emoji'=>'🦜','palette'=>['#4CAF50','#2E7D32','#81C784'],'tall'=>false],
                ['pet'=>'Maine Coon','breed'=>'Cat','filter'=>'cats','emoji'=>'🐈','palette'=>['#C4714F','#A05530','#D4956A'],'tall'=>true],
                ['pet'=>'Poodle','breed'=>'Dog','filter'=>'dogs','emoji'=>'🐩','palette'=>['#F8BBD9','#E8889B','#C45870'],'tall'=>false],
                ['pet'=>'Cat Memorial','breed'=>'Cat','filter'=>'memorial','emoji'=>'🌈','palette'=>['#B39DDB','#7E57C2','#512DA8'],'tall'=>false],
            ];
            foreach ($gallery as $idx => $g):
                $delay = $idx * 60;
                $tallClass = $g['tall'] ? 'gallery-tall' : '';
            ?>
            <div class="gallery-item <?= $tallClass ?>" data-filter="<?= $g['filter'] ?>" data-aos="zoom-in" data-aos-delay="<?= $delay ?>">
                <div class="gallery-thumb" style="background: linear-gradient(135deg, <?= $g['palette'][0] ?> 0%, <?= $g['palette'][1] ?> 60%, <?= $g['palette'][2] ?> 100%);">
                    <div class="gallery-emoji"><?= $g['emoji'] ?></div>
                    <div class="gallery-shimmer"></div>
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <div class="gallery-pet-name"><?= $g['pet'] ?></div>
                            <div class="gallery-pet-breed"><?= $g['breed'] ?> Sculpture</div>
                            <a href="customize.php" class="gallery-cta">Order Similar →</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="gallery-footer" data-aos="fade-up">
            <p>These are artistic previews. Your sculpture will be custom-made from <strong>your pet's photos</strong>.</p>
            <a href="customize.php" class="btn-primary">Start Your Custom Order 🐾</a>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     HOW IT WORKS SECTION
═══════════════════════════════════════════════════════ -->
<section class="process-section" id="process">
    <div class="section-container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-eyebrow">The Process</div>
            <h2 class="section-title">From <span>Photo</span> to Forever</h2>
            <p class="section-subtitle">A seamless, collaborative experience from your first click to your doorstep.</p>
        </div>

        <div class="process-timeline">
            <div class="timeline-line"></div>
            <?php
            $steps = [
                [
                    'num'   => '01',
                    'icon'  => '📸',
                    'title' => 'Share Your Pet\'s Photos',
                    'desc'  => 'Upload clear photos of your pet (front, side, playful poses). The more we see, the better we capture their personality. Include any special details you love!',
                    'time'  => '5 minutes',
                ],
                [
                    'num'   => '02',
                    'icon'  => '🎨',
                    'title' => 'Artist Begins Sculpting',
                    'desc'  => 'Your dedicated artist hand-sculpts every curve, whisker, and expression using premium polymer clay. No shortcuts. No 3D printing. Pure craftsmanship.',
                    'time'  => '7-10 days',
                ],
                [
                    'num'   => '03',
                    'icon'  => '📬',
                    'title' => 'You Approve Every Detail',
                    'desc'  => 'We send you real-time photo proofs throughout the process. Not happy with an ear angle? Say the word. Unlimited revisions until you say "perfect!"',
                    'time'  => '2-5 days',
                ],
                [
                    'num'   => '04',
                    'icon'  => '📦',
                    'title' => 'Delivered with Love',
                    'desc'  => 'Your sculpture receives multiple glaze coats for durability, is foam-padded and gift-boxed, then shipped FREE to your door across the USA.',
                    'time'  => '3-5 days',
                ],
            ];
            foreach ($steps as $i => $step):
            ?>
            <div class="process-step <?= $i % 2 === 1 ? 'step-right' : '' ?>" data-aos="<?= $i % 2 === 0 ? 'fade-right' : 'fade-left' ?>" data-aos-delay="<?= $i * 100 ?>">
                <div class="step-content">
                    <div class="step-header">
                        <div class="step-icon"><?= $step['icon'] ?></div>
                        <div class="step-num"><?= $step['num'] ?></div>
                    </div>
                    <h3><?= $step['title'] ?></h3>
                    <p><?= $step['desc'] ?></p>
                    <div class="step-time">⏱ <?= $step['time'] ?></div>
                </div>
                <div class="step-connector">
                    <div class="connector-dot"></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="process-cta" data-aos="fade-up">
            <div class="timeline-badge">Total: ~2-3 weeks from order to doorstep 🎉</div>
            <a href="customize.php" class="btn-primary">Begin the Journey →</a>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     REVIEWS SECTION
═══════════════════════════════════════════════════════ -->
<section class="reviews-section" id="reviews">
    <div class="section-container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-eyebrow">Real Stories</div>
            <h2 class="section-title">Pet Parents <span>Love</span> Us</h2>
            <div class="rating-summary">
                <div class="rating-stars">★★★★★</div>
                <div class="rating-score"><?= STAR_RATING ?> out of 5</div>
                <div class="rating-count">Based on <?= REVIEW_COUNT ?>+ verified reviews</div>
            </div>
        </div>

        <!-- Reviews Carousel -->
        <div class="reviews-carousel" id="reviewsCarousel">
            <div class="carousel-track" id="carouselTrack">
                <?php
                $reviews = [
                    [
                        'name'   => 'Sarah M.',
                        'loc'    => 'Austin, TX',
                        'stars'  => 5,
                        'pet'    => 'Max, Golden Retriever',
                        'text'   => '"I ordered this as a memorial gift for my mom after we lost Max. When she unwrapped it, she burst into tears — the happiest tears. Every wrinkle, every sparkle in his eyes... it\'s Max. This is the most beautiful thing I\'ve ever owned."',
                        'emoji'  => '🐕',
                        'color'  => '#D4956A',
                        'date'   => '2 weeks ago',
                    ],
                    [
                        'name'   => 'James K.',
                        'loc'    => 'Seattle, WA',
                        'stars'  => 5,
                        'pet'    => 'Luna, Siamese Cat',
                        'text'   => '"Skeptical at first — how could clay capture Luna\'s attitude? But wow. They nailed it. Her little judging expression, the color of her fur, the way she sits. My wife cried when she opened it. 10/10 would order again."',
                        'emoji'  => '🐱',
                        'color'  => '#7B5EA7',
                        'date'   => '1 month ago',
                    ],
                    [
                        'name'   => 'Priya D.',
                        'loc'    => 'New York, NY',
                        'stars'  => 5,
                        'pet'    => 'Biscuit, Beagle',
                        'text'   => '"Ordered for my husband\'s birthday. He\'s not a crier. He cried. The attention to detail is insane — Biscuit\'s floppy ears, his little sniffer, even the way he tilts his head. Pure perfection. Worth every single penny."',
                        'emoji'  => '🐶',
                        'color'  => '#C4714F',
                        'date'   => '3 weeks ago',
                    ],
                    [
                        'name'   => 'Emma L.',
                        'loc'    => 'Chicago, IL',
                        'stars'  => 5,
                        'pet'    => 'Mochi, Persian Cat',
                        'text'   => '"The memorial tribute was for my beloved Mochi who passed in January. The angel wings, the glass dome, the poem card — it\'s so thoughtfully done. I feel like he\'s still watching over us. I can\'t recommend this enough."',
                        'emoji'  => '👼',
                        'color'  => '#4A7AB5',
                        'date'   => '1 month ago',
                    ],
                    [
                        'name'   => 'Carlos R.',
                        'loc'    => 'Miami, FL',
                        'stars'  => 5,
                        'pet'    => 'Peanut, Labrador',
                        'text'   => '"Five stars isn\'t enough. The artist sent me updates throughout the process, asked thoughtful questions, made adjustments without hesitation. The final sculpture looks so real I sometimes do a double-take. Absolutely extraordinary."',
                        'emoji'  => '🏆',
                        'color'  => '#D4A853',
                        'date'   => '2 months ago',
                    ],
                    [
                        'name'   => 'Rachel T.',
                        'loc'    => 'Denver, CO',
                        'stars'  => 5,
                        'pet'    => 'Kiwi, Parrot',
                        'text'   => '"They even do exotic pets! Our parrot Kiwi is now immortalized in gorgeous clay. The feather detail, the colors, the cheeky expression — flawless. Great communication, fast delivery, stunning result. We\'re ordering one for every room!"',
                        'emoji'  => '🦜',
                        'color'  => '#4CAF50',
                        'date'   => '3 months ago',
                    ],
                ];
                foreach ($reviews as $i => $r):
                ?>
                <div class="review-slide">
                    <div class="review-card" style="--review-color: <?= $r['color'] ?>">
                        <div class="review-header">
                            <div class="reviewer-avatar" style="background: <?= $r['color'] ?>">
                                <?= $r['emoji'] ?>
                            </div>
                            <div class="reviewer-info">
                                <div class="reviewer-name"><?= $r['name'] ?></div>
                                <div class="reviewer-loc">📍 <?= $r['loc'] ?></div>
                            </div>
                            <div class="review-date"><?= $r['date'] ?></div>
                        </div>
                        <div class="review-stars">
                            <?= str_repeat('★', $r['stars']) ?>
                        </div>
                        <div class="review-pet">🐾 <?= $r['pet'] ?></div>
                        <div class="review-text"><?= $r['text'] ?></div>
                        <div class="review-verified">✓ Verified Purchase</div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="carousel-controls">
                <button class="carousel-btn" id="prevBtn" aria-label="Previous">‹</button>
                <div class="carousel-dots" id="carouselDots"></div>
                <button class="carousel-btn" id="nextBtn" aria-label="Next">›</button>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     WHY CHOOSE US SECTION
═══════════════════════════════════════════════════════ -->
<section class="why-section">
    <div class="section-container">
        <div class="why-grid">
            <div class="why-content" data-aos="fade-right">
                <div class="section-eyebrow">Why Tiny Tails?</div>
                <h2 class="section-title">Not Just a Sculpture.<br>A <span>Legacy.</span></h2>
                <p>Your pet isn't just a pet — they're family. At Tiny Tails Studio, we treat every commission with the reverence it deserves. Our artists spend hours capturing the personality, not just the look.</p>

                <div class="why-list">
                    <?php
                    $reasons = [
                        ['icon'=>'🚫', 'title'=>'Zero AI or 3D Printing', 'desc'=>'Every sculpture is hand-built from scratch by our trained artists. Real hands, real love, real art.'],
                        ['icon'=>'📸', 'title'=>'Photo Proofs at Every Stage', 'desc'=>'You\'re in the loop from first sculpture to final glaze. Approve, tweak, or reject — total control.'],
                        ['icon'=>'♾️', 'title'=>'Truly Unlimited Revisions', 'desc'=>'We don\'t ship until you love it unconditionally. That\'s our promise, no small print.'],
                        ['icon'=>'🎁', 'title'=>'Gift-Ready Luxury Packaging', 'desc'=>'Foam-padded, gift-boxed, and ready to wow — whether it\'s for you or someone you love.'],
                    ];
                    foreach ($reasons as $j => $r):
                    ?>
                    <div class="why-item" data-aos="fade-up" data-aos-delay="<?= $j * 80 ?>">
                        <div class="why-icon"><?= $r['icon'] ?></div>
                        <div class="why-text">
                            <strong><?= $r['title'] ?></strong>
                            <span><?= $r['desc'] ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <a href="customize.php" class="btn-primary" style="margin-top:2rem;">Start My Custom Order 🐾</a>
            </div>

            <div class="why-visual" data-aos="fade-left">
                <div class="comparison-card">
                    <h4>Tiny Tails Studio vs. The Rest</h4>
                    <div class="compare-table">
                        <?php
                        $compare = [
                            ['feature'=>'100% Hand-Sculpted',      'us'=>true,  'them'=>false],
                            ['feature'=>'Photo Proofs Provided',   'us'=>true,  'them'=>false],
                            ['feature'=>'Unlimited Revisions',     'us'=>true,  'them'=>false],
                            ['feature'=>'UV Protective Glaze',     'us'=>true,  'them'=>false],
                            ['feature'=>'Custom Name Engraving',   'us'=>true,  'them'=>false],
                            ['feature'=>'Free USA Shipping',       'us'=>true,  'them'=>false],
                            ['feature'=>'Luxury Gift Packaging',   'us'=>true,  'them'=>false],
                        ];
                        foreach ($compare as $c):
                        ?>
                        <div class="compare-row">
                            <span class="compare-feature"><?= $c['feature'] ?></span>
                            <span class="compare-us"><?= $c['us'] ? '✓' : '✗' ?></span>
                            <span class="compare-them"><?= $c['them'] ? '✓' : '✗' ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="compare-labels">
                        <span></span>
                        <span class="label-us">Us</span>
                        <span class="label-them">Others</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     FAQ SECTION
═══════════════════════════════════════════════════════ -->
<section class="faq-section" id="faq">
    <div class="section-container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-eyebrow">Got Questions?</div>
            <h2 class="section-title">Everything You <span>Need to Know</span></h2>
        </div>

        <div class="faq-grid">
            <?php
            $faqs = [
                ['q'=>'What types of pets can you sculpt?', 'a'=>'We sculpt any pet — dogs, cats, rabbits, birds, reptiles, hamsters, guinea pigs, horses, and more. If you have photos, we can create it!'],
                ['q'=>'How many photos do I need to send?', 'a'=>'We recommend 5-10 clear photos from different angles (front, side, back, and some candid poses). The more we see, the more accurate and personality-filled your sculpture will be.'],
                ['q'=>'How long does the entire process take?', 'a'=>'From order to doorstep, expect approximately 2-3 weeks for sculpting and painting, plus 3-5 business days for USA shipping. Rush options may be available — contact us to ask.'],
                ['q'=>'What if I\'m not happy with the result?', 'a'=>'We offer truly unlimited photo-proof revisions before shipping. We don\'t release your sculpture until you\'re completely in love with it. Your satisfaction is our only measure of success.'],
                ['q'=>'Are the sculptures waterproof and durable?', 'a'=>'Yes! We apply multiple coats of professional UV-protective glaze that makes your sculpture waterproof, dust-resistant, and non-fading. It\'s built to last for decades with minimal care.'],
                ['q'=>'Can I order a memorial sculpture for a pet who has passed?', 'a'=>'Absolutely — and we treat these with extra care and sensitivity. Our memorial tributes with angel wings and glass dome displays are our most heartfelt pieces. Many families tell us it brings them real comfort.'],
                ['q'=>'Do you ship internationally?', 'a'=>'Currently we offer free shipping across the USA. International shipping is available — please contact us for rates and timelines before ordering.'],
                ['q'=>'Can I order multiple pets in one sculpture?', 'a'=>'Yes! We can sculpt 2+ pets together on a single base — a beautiful way to capture your whole fur family. Pricing varies by complexity. Contact us for a custom quote.'],
            ];
            foreach ($faqs as $k => $faq):
            ?>
            <div class="faq-item" data-aos="fade-up" data-aos-delay="<?= ($k % 4) * 60 ?>">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span><?= $faq['q'] ?></span>
                    <div class="faq-chevron">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                </div>
                <div class="faq-answer">
                    <p><?= $faq['a'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     NEWSLETTER CTA SECTION
═══════════════════════════════════════════════════════ -->
<section class="newsletter-section">
    <div class="newsletter-blobs">
        <div class="nl-blob nl-blob-1"></div>
        <div class="nl-blob nl-blob-2"></div>
    </div>
    <div class="section-container">
        <div class="newsletter-card" data-aos="zoom-in">
            <div class="nl-paws">🐾🐾🐾</div>
            <h2>Get 10% Off Your First Order</h2>
            <p>Join our community of pet parents. Get exclusive discounts, sneak peeks at new sculptures, and stories that'll melt your heart.</p>
            <form class="nl-form" id="nlForm">
                <div class="nl-input-group">
                    <input type="email" placeholder="Enter your email address..." required>
                    <button type="submit" class="btn-primary">
                        <span>Claim My 10% Off</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </div>
                <div class="nl-note">🔒 We respect your privacy. No spam, ever. Unsubscribe any time.</div>
            </form>
            <div id="nlSuccess" class="nl-success" style="display:none;">
                <div class="success-icon">🎉</div>
                <h3>You're in! Check your inbox for your 10% off code.</h3>
                <p>Welcome to the Tiny Tails family! 🐾</p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     FINAL CTA BANNER
═══════════════════════════════════════════════════════ -->
<section class="final-cta">
    <div class="section-container">
        <div class="fcta-content" data-aos="fade-up">
            <h2>Your Pet Deserves to Live Forever. 🐾</h2>
            <p>Order today and give them the timeless tribute they deserve. Handcrafted with love, delivered to your door.</p>
            <div class="fcta-buttons">
                <a href="customize.php" class="btn-primary btn-large">Start My Custom Sculpture</a>
                <div class="fcta-trust">
                    <span>🔄 Unlimited Revisions</span>
                    <span>🚚 Free Shipping</span>
                    <span>💳 Secure Checkout</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
