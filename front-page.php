<?php get_header(); ?>

<!-- SECTION 1: THE HERO -->
<section class="hero">
    <div class="container">
        <div class="hero-content reveal">
            <span class="label">Operational Infrastructure</span>
            <h1>Stop Doing Work Your Systems Should Handle</h1>
            <p class="subheadline">We build the operational infrastructure that lets you scale without scaling headcount.</p>
            <p class="hero-copy">GroundWorks engineers custom automation systems that eliminate manual processes, reduce operational leakage, and give business owners back 10-20 hours per week. No templates. No off-the-shelf tools. Systems built around how your business actually runs.</p>
            <div class="hero-cta">
                <a href="#diagnostic-form" class="magnetic-btn">
                    <span class="btn btn-primary">Request an Efficiency Assessment</span>
                </a>
                <a href="#roi-calculator" class="btn btn-secondary">Calculate Your Hidden Costs</a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: THE ROI CALCULATOR -->
<section class="roi-section section" id="roi-calculator">
    <div class="container">
        <div class="roi-container">
            <div class="roi-content reveal">
                <span class="label">The Waste Visualizer</span>
                <h2>The Real Cost of "How Things Have Always Worked"</h2>
                <p>Every business has operational drag—processes that made sense at launch but now consume hours that should go toward growth. Manual data entry. Copy-paste workflows. Status update emails. Approval bottlenecks where you're the router for everything.</p>
                <p class="compound-note" style="border-top: none; padding-top: 0; margin-top: 0;">And it compounds—because while you're doing admin work, you're not closing deals, serving clients, or building the business.</p>
            </div>
            <div class="roi-calculator reveal reveal-delay-2">
                <div class="calculator-label">Weekly hours on manual processes</div>
                <input type="range" min="1" max="40" value="10" class="calculator-slider" id="hours-slider">
                <div class="hours-display">
                    <span id="hours-value">10</span>
                    <span>hours/week</span>
                </div>
                <div class="yearly-hours">
                    = <span id="yearly-hours">520</span> hours/year
                </div>
                <div class="cost-display">
                    <div class="cost-label">Annual Opportunity Cost @ $150/hour</div>
                    <div class="cost-value">$<span id="cost-value">78,000</span></div>
                    <p class="cost-note">In lost capacity annually</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: THE THREE ENGINES (Bento Grid) -->
<section class="engines-section section">
    <div class="container">
        <div class="engines-header reveal">
            <span class="label">Operational Systems</span>
            <h2>Systems That Pay for Themselves</h2>
        </div>

        <div class="bento-grid stagger-reveal">
            <!-- Card 1: Revenue Operations Engine -->
            <div class="bento-card">
                <div class="bento-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                </div>
                <h3>The Revenue Operations Engine</h3>
                <p>From first touch to cash collected—zero manual handoffs. Lead capture syncs to your CRM. Quotes generate automatically from form data. Follow-up sequences fire based on pipeline stage. Invoices go out and payments get tracked without you touching a spreadsheet.</p>
                <div class="target">
                    <span>Target:</span>
                    <strong>Service businesses losing deals to slow follow-up or bleeding margin to manual billing.</strong>
                </div>
            </div>

            <!-- Card 2: Operations Control Center -->
            <div class="bento-card">
                <div class="bento-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="3" y1="9" x2="21" y2="9"></line>
                        <line x1="9" y1="21" x2="9" y2="9"></line>
                    </svg>
                </div>
                <h3>The Operations Control Center</h3>
                <p>Run a 20-person operation with a 5-person team. Jobs route automatically based on your rules. Status updates flow to clients without "just checking in" emails. Time tracking syncs to billing. You only see what needs human attention—everything else just runs.</p>
                <div class="target">
                    <span>Target:</span>
                    <strong>Businesses where the owner is still the bottleneck for approvals, assignments, and status checks.</strong>
                </div>
            </div>

            <!-- Card 3: Civic Transparency System -->
            <div class="bento-card">
                <div class="bento-card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 21h18"></path>
                        <path d="M5 21V7l8-4v18"></path>
                        <path d="M19 21V11l-6-4"></path>
                        <path d="M9 9v.01"></path>
                        <path d="M9 12v.01"></path>
                        <path d="M9 15v.01"></path>
                        <path d="M9 18v.01"></path>
                    </svg>
                </div>
                <h3>The Civic Transparency System</h3>
                <p>Help your municipality operate like a modern government—without the budget for IT staff. Official .gov domains, automated public records management, citizen self-service portals, and compliance documentation that generates itself.</p>
                <div class="target">
                    <span>Target:</span>
                    <strong>Rural towns and small municipalities drowning in manual processes and public information requests.</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: OUTCOMES (Case Study Slider) -->
<section class="outcomes-section section">
    <div class="container">
        <div class="outcomes-header reveal">
            <div>
                <span class="label">Proven Results</span>
                <h2>Operational Outcomes, Not Deliverables</h2>
            </div>
            <div class="slider-controls">
                <button class="slider-btn" id="slider-prev" aria-label="Previous">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
                <button class="slider-btn" id="slider-next" aria-label="Next">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
        </div>

        <div class="outcomes-slider-wrapper">
            <div class="outcomes-slider" id="outcomes-slider">
                <div class="outcome-card">
                    <div class="outcome-metric">$4,200/mo</div>
                    <h3>Revenue Recovered</h3>
                    <p>Interior design firm eliminated unbilled hours and reduced their billing cycle from 2 weeks to 2 days. Owner removed from invoicing entirely.</p>
                </div>

                <div class="outcome-card">
                    <div class="outcome-metric">3x Volume</div>
                    <h3>Same Staff</h3>
                    <p>Medical practice automated intake and triage. Wait times dropped from 6 weeks to under 2. Clinical team refocused on care instead of paperwork.</p>
                </div>

                <div class="outcome-card">
                    <div class="outcome-metric">$180K/yr</div>
                    <h3>Fees Eliminated</h3>
                    <p>Vacation rental portfolio built direct booking infrastructure. 60% of revenue now bypasses OTA commissions. Repeat booking rate up 35%.</p>
                </div>
            </div>
        </div>

        <p class="text-center mt-40 reveal">
            <a href="<?php echo get_post_type_archive_link('case_study'); ?>" class="btn btn-ghost">
                Read the full case studies
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </p>
    </div>
</section>

<!-- SECTION 5: THE TECHNICAL AUTHORITY (The Moat) -->
<section class="moat-section section">
    <div class="container">
        <div class="moat-container">
            <div class="moat-content reveal">
                <span class="label">The Technical Moat</span>
                <h2>Why This Isn't Something You Can DIY with Zapier</h2>
                <p>Low-code tools are fine for simple triggers. But real operational infrastructure requires systems thinking—understanding how data flows across your business, where exceptions occur, and how to build logic that handles the 20% of cases that cause 80% of the headaches.</p>
                <p>We work with APIs, webhooks, and custom development. That means your systems aren't limited by what a template allows. When your business logic changes, your automation changes with it—without duct tape and workarounds.</p>
            </div>
            <div class="moat-visual reveal reveal-delay-2">
                <div class="code-block">
                    <pre><code><span class="comment">// Real business logic, not template limitations</span>
<span class="keyword">async function</span> <span class="function">processInvoice</span>(data) {
  <span class="keyword">const</span> client = <span class="keyword">await</span> CRM.<span class="function">getClient</span>(data.clientId);
  <span class="keyword">const</span> rate = client.<span class="function">getCustomRate</span>() || defaults.rate;

  <span class="comment">// Handle the edge cases automatically</span>
  <span class="keyword">if</span> (client.requiresPO && !data.poNumber) {
    <span class="keyword">return</span> <span class="function">requestPO</span>(client, data);
  }

  <span class="keyword">const</span> invoice = <span class="keyword">await</span> Billing.<span class="function">create</span>({
    client,
    lineItems: data.timeEntries,
    rate,
    terms: client.paymentTerms
  });

  <span class="keyword">await</span> <span class="function">notifyClient</span>(invoice);
  <span class="keyword">return</span> invoice;
}</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 6: THE FINAL CTA (Diagnostic Form) -->
<section class="cta-section section" id="diagnostic-form">
    <div class="container">
        <div class="cta-container">
            <div class="cta-content reveal">
                <span class="label">Free Assessment</span>
                <h2>Where Is Your Business Bleeding Time?</h2>
                <p>Most businesses have 10-20 hours per week trapped in processes that should be automated. The problem: you're too close to see it. These inefficiencies feel like "just how things work."</p>

                <h3 class="offer-title">The Operations Efficiency Assessment</h3>
                <p>In 45 minutes, we'll map your current workflows and identify:</p>
                <ul>
                    <li>The top 3 time drains in your operation</li>
                    <li>Realistic ROI on automation</li>
                    <li>What can be fixed in 2 weeks vs. 2 months</li>
                </ul>
                <p>You'll leave with a prioritized action plan—whether you work with us or not.</p>

                <p class="guarantee">No cost. No obligation. No pitch until you ask for one.</p>
            </div>

            <div class="diagnostic-form reveal reveal-delay-2">
                <div class="form-progress">
                    <div class="progress-step active" data-step="1"></div>
                    <div class="progress-step" data-step="2"></div>
                    <div class="progress-step" data-step="3"></div>
                    <div class="progress-step" data-step="4"></div>
                </div>

                <form id="efficiency-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
                    <?php wp_nonce_field('efficiency_form_nonce', 'efficiency_nonce'); ?>
                    <input type="hidden" name="action" value="efficiency_form_submission">

                    <!-- Step 1: Primary Waste Area -->
                    <div class="form-step active" data-step="1">
                        <div class="step-title">Step 1 of 4</div>
                        <h3 class="step-question">Where does your team waste the most time?</h3>
                        <div class="form-options">
                            <label class="form-option">
                                <input type="radio" name="waste_area" value="sales" required>
                                <span>Sales & Lead Management</span>
                            </label>
                            <label class="form-option">
                                <input type="radio" name="waste_area" value="billing">
                                <span>Billing & Invoicing</span>
                            </label>
                            <label class="form-option">
                                <input type="radio" name="waste_area" value="operations">
                                <span>Operations & Workflow</span>
                            </label>
                            <label class="form-option">
                                <input type="radio" name="waste_area" value="government">
                                <span>Government / Compliance</span>
                            </label>
                        </div>
                        <div class="form-nav">
                            <button type="button" class="btn btn-primary form-next" data-next="2">Continue</button>
                        </div>
                    </div>

                    <!-- Step 2: Team Size -->
                    <div class="form-step" data-step="2">
                        <div class="step-title">Step 2 of 4</div>
                        <h3 class="step-question">How large is your team?</h3>
                        <div class="form-options">
                            <label class="form-option">
                                <input type="radio" name="team_size" value="1-5" required>
                                <span>1-5 people</span>
                            </label>
                            <label class="form-option">
                                <input type="radio" name="team_size" value="6-20">
                                <span>6-20 people</span>
                            </label>
                            <label class="form-option">
                                <input type="radio" name="team_size" value="21+">
                                <span>21+ people</span>
                            </label>
                        </div>
                        <div class="form-nav">
                            <button type="button" class="btn btn-secondary btn-back form-prev" data-prev="1">Back</button>
                            <button type="button" class="btn btn-primary form-next" data-next="3">Continue</button>
                        </div>
                    </div>

                    <!-- Step 3: Weekly Manual Hours -->
                    <div class="form-step" data-step="3">
                        <div class="step-title">Step 3 of 4</div>
                        <h3 class="step-question">How many hours per week on manual processes?</h3>
                        <div class="hours-slider-container">
                            <div class="hours-slider-display"><span id="form-hours-value">10</span> hours/week</div>
                            <input type="range" min="1" max="40" value="10" class="form-slider" id="form-hours-slider" name="weekly_hours">
                        </div>
                        <div class="form-nav">
                            <button type="button" class="btn btn-secondary btn-back form-prev" data-prev="2">Back</button>
                            <button type="button" class="btn btn-primary form-next" data-next="4">Continue</button>
                        </div>
                    </div>

                    <!-- Step 4: Email -->
                    <div class="form-step" data-step="4">
                        <div class="step-title">Step 4 of 4</div>
                        <h3 class="step-question">Where should we send your assessment details?</h3>
                        <div class="form-input-group">
                            <label for="work-email">Work Email</label>
                            <input type="email" id="work-email" name="email" placeholder="you@company.com" required>
                        </div>
                        <div class="form-input-group">
                            <label for="company-name">Company Name (optional)</label>
                            <input type="text" id="company-name" name="company" placeholder="Your Company">
                        </div>
                        <div class="form-nav">
                            <button type="button" class="btn btn-secondary btn-back form-prev" data-prev="3">Back</button>
                            <button type="submit" class="btn btn-primary">Request Assessment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
