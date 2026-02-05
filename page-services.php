<?php get_header(); ?>

<?php
// Services page FAQ data
$services_faqs = array(
    array(
        'question' => 'What is revenue operations automation?',
        'answer'   => 'Revenue operations automation connects every step from lead capture to payment collection into one system with zero manual handoffs. Instead of manually entering leads into your CRM, building quotes in spreadsheets, and chasing invoices, the entire cycle runs automatically—leads sync instantly, quotes generate from form data, follow-ups trigger based on pipeline stage, and invoices go out with payment tracking built in.'
    ),
    array(
        'question' => 'How does workflow automation reduce the need for more staff?',
        'answer'   => 'Workflow automation handles the repetitive coordination work that typically requires additional hires—job assignments, status updates, client notifications, time-to-billing sync, and exception routing. By automating these tasks, a 5-person team can handle the workload that would normally require 15-20 people, because the system handles the operational overhead while your team focuses on work that requires human judgment.'
    ),
    array(
        'question' => 'What systems and tools can you integrate with?',
        'answer'   => 'We integrate with the tools you already use—CRMs like HubSpot and Salesforce, accounting software like QuickBooks and Xero, communication tools like Slack and Google Workspace, project management platforms, and industry-specific software. We connect everything through APIs and webhooks so data flows automatically between systems without manual entry or copy-pasting.'
    ),
    array(
        'question' => 'Do I need to replace my existing software to automate?',
        'answer'   => 'No. We build around your existing stack, not against it. The goal is to make the tools you already have work better together by connecting them and automating the manual steps between them. No rip-and-replace required.'
    ),
    array(
        'question' => 'What does a .gov website transition include?',
        'answer'   => 'A .gov website transition includes domain registration and approval with the .gov registry, site development and migration to the new domain, hosting setup, IT integration for email and infrastructure, official launch with redirects from your old site, and ongoing monitoring. We handle the full process so municipalities don\'t need dedicated IT staff to make it happen.'
    ),
);
?>

<!-- JSON-LD: Service Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "GroundWorks Development Services",
    "dateModified": "<?php echo get_the_modified_date('c'); ?>",
    "itemListElement": [
        {
            "@type": "Service",
            "position": 1,
            "name": "Revenue Operations Engine",
            "description": "End-to-end revenue cycle automation—from lead capture to payment collection with zero manual handoffs. Includes CRM sync, automated quote generation, follow-up sequences, and invoice automation.",
            "provider": {
                "@type": "Organization",
                "name": "GroundWorks Development"
            },
            "serviceType": "Business Process Automation",
            "areaServed": {
                "@type": "Country",
                "name": "United States"
            },
            "audience": {
                "@type": "Audience",
                "audienceType": "Service businesses losing deals to slow follow-up or bleeding margin to manual billing"
            }
        },
        {
            "@type": "Service",
            "position": 2,
            "name": "Operations Control Center",
            "description": "Operational automation system that enables a 5-person team to handle 20-person workloads. Includes smart job routing, automated client updates, time-to-billing sync, and exception-only alerts.",
            "provider": {
                "@type": "Organization",
                "name": "GroundWorks Development"
            },
            "serviceType": "Workflow Automation",
            "areaServed": {
                "@type": "Country",
                "name": "United States"
            },
            "audience": {
                "@type": "Audience",
                "audienceType": "Businesses where the owner is the bottleneck for approvals, assignments, and status checks"
            }
        },
        {
            "@type": "Service",
            "position": 3,
            "name": "Civic Transparency System",
            "description": "Complete .gov domain transition and government website solution for small municipalities. Includes .gov registration, public records automation, citizen self-service portals, and compliance documentation.",
            "provider": {
                "@type": "Organization",
                "name": "GroundWorks Development"
            },
            "serviceType": "Government Technology Services",
            "areaServed": {
                "@type": "Country",
                "name": "United States"
            },
            "audience": {
                "@type": "Audience",
                "audienceType": "Rural towns and small municipalities without dedicated IT staff"
            }
        }
    ]
}
</script>

<!-- JSON-LD: FAQPage Schema (Services) -->
<script type="application/ld+json">
<?php
$svc_faq_schema = array(
    '@context'      => 'https://schema.org',
    '@type'         => 'FAQPage',
    'dateModified'  => get_the_modified_date('c'),
    'mainEntity'    => array()
);
foreach ($services_faqs as $faq) {
    $svc_faq_schema['mainEntity'][] = array(
        '@type' => 'Question',
        'name'  => $faq['question'],
        'acceptedAnswer' => array(
            '@type' => 'Answer',
            'text'  => $faq['answer']
        )
    );
}
echo wp_json_encode($svc_faq_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
</script>

<section class="hero" style="min-height: auto; padding: 160px 0 80px;">
    <div class="container">
        <div class="hero-content reveal" style="max-width: 800px;">
            <span class="label">What We Build</span>
            <h1>Operational Systems That Pay for Themselves</h1>
            <p class="hero-copy">Every system we build is designed around one metric: how much time and money it saves you. No features for features' sake. No complexity you don't need.</p>
            <p class="page-updated">Last updated: <?php echo get_the_modified_date('F j, Y'); ?></p>
        </div>
    </div>
</section>

<section class="section" style="padding-top: 0;">
    <div class="container">
        <!-- Service 1: Revenue Operations Engine -->
        <div class="service-module reveal">
            <div class="service-module-header">
                <div class="service-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                </div>
                <span class="label">Revenue Operations</span>
            </div>
            <h2>The Revenue Operations Engine</h2>
            <p class="service-tagline">From first touch to cash collected—zero manual handoffs.</p>

            <div class="service-grid">
                <div class="service-problem">
                    <h3>The Problem</h3>
                    <p>Leads slip through cracks. Follow-ups get forgotten. Quotes take hours to build. Invoices go out late—if they go out at all. Every manual step is a place where revenue leaks.</p>
                </div>
                <div class="service-solution">
                    <h3>The Solution</h3>
                    <p>Lead capture syncs to your CRM. Quotes generate automatically from form data. Follow-up sequences fire based on pipeline stage. Invoices go out and payments get tracked without you touching a spreadsheet.</p>
                </div>
            </div>

            <div class="capabilities-grid">
                <div class="capability-item">
                    <h4>Lead Capture & Routing</h4>
                    <p>Forms sync to CRM instantly with automatic assignment rules</p>
                </div>
                <div class="capability-item">
                    <h4>Quote Generation</h4>
                    <p>Build quotes from templates with form data auto-populated</p>
                </div>
                <div class="capability-item">
                    <h4>Follow-up Sequences</h4>
                    <p>Triggered emails based on pipeline stage and engagement</p>
                </div>
                <div class="capability-item">
                    <h4>Invoice Automation</h4>
                    <p>Auto-generate and send invoices with payment tracking</p>
                </div>
            </div>

            <div class="service-target">
                <span class="label">Best For</span>
                <p>Service businesses losing deals to slow follow-up or bleeding margin to manual billing.</p>
            </div>
        </div>

        <!-- Service 2: Operations Control Center -->
        <div class="service-module reveal">
            <div class="service-module-header">
                <div class="service-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="3" y1="9" x2="21" y2="9"></line>
                        <line x1="9" y1="21" x2="9" y2="9"></line>
                    </svg>
                </div>
                <span class="label">Operations</span>
            </div>
            <h2>The Operations Control Center</h2>
            <p class="service-tagline">Run a 20-person operation with a 5-person team.</p>

            <div class="service-grid">
                <div class="service-problem">
                    <h3>The Problem</h3>
                    <p>You're the bottleneck. Every approval, assignment, and status check routes through you. Your team spends more time updating systems than doing actual work.</p>
                </div>
                <div class="service-solution">
                    <h3>The Solution</h3>
                    <p>Jobs route automatically based on your rules. Status updates flow to clients without "just checking in" emails. Time tracking syncs to billing. You only see what needs human attention.</p>
                </div>
            </div>

            <div class="capabilities-grid">
                <div class="capability-item">
                    <h4>Smart Routing</h4>
                    <p>Jobs assigned automatically based on capacity, skills, location</p>
                </div>
                <div class="capability-item">
                    <h4>Client Updates</h4>
                    <p>Automated status notifications—no more "checking in" emails</p>
                </div>
                <div class="capability-item">
                    <h4>Time → Billing Sync</h4>
                    <p>Hours tracked flow directly to invoice generation</p>
                </div>
                <div class="capability-item">
                    <h4>Exception Alerts</h4>
                    <p>Only get notified when something actually needs your attention</p>
                </div>
            </div>

            <div class="service-target">
                <span class="label">Best For</span>
                <p>Businesses where the owner is still the bottleneck for approvals, assignments, and status checks.</p>
            </div>
        </div>

        <!-- Service 3: Civic Transparency System -->
        <div class="service-module reveal">
            <div class="service-module-header">
                <div class="service-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 21h18"></path>
                        <path d="M5 21V7l8-4v18"></path>
                        <path d="M19 21V11l-6-4"></path>
                        <path d="M9 9v.01"></path>
                        <path d="M9 12v.01"></path>
                        <path d="M9 15v.01"></path>
                        <path d="M9 18v.01"></path>
                    </svg>
                </div>
                <span class="label">Government</span>
            </div>
            <h2>The Civic Transparency System</h2>
            <p class="service-tagline">Modern government operations without the IT department budget.</p>

            <div class="service-grid">
                <div class="service-problem">
                    <h3>The Challenge</h3>
                    <p>Small municipalities need official .gov websites and modern citizen services, but the transition process is complex and you don't have dedicated IT staff.</p>
                </div>
                <div class="service-solution">
                    <h3>The Solution</h3>
                    <p>Official .gov domains, automated public records management, citizen self-service portals, and compliance documentation that generates itself.</p>
                </div>
            </div>

            <div class="capabilities-grid">
                <div class="capability-item">
                    <h4>.gov Domain Setup</h4>
                    <p>Complete registration and transition process handled</p>
                </div>
                <div class="capability-item">
                    <h4>Public Records Portal</h4>
                    <p>Automated FOIA/public records request management</p>
                </div>
                <div class="capability-item">
                    <h4>Citizen Self-Service</h4>
                    <p>Permit applications, payments, document requests online</p>
                </div>
                <div class="capability-item">
                    <h4>Compliance Automation</h4>
                    <p>Meeting notices, agendas, and minutes auto-published</p>
                </div>
            </div>

            <div class="service-target">
                <span class="label">Best For</span>
                <p>Rural towns and small municipalities drowning in manual processes and public information requests.</p>
            </div>

            <a href="<?php echo get_permalink(get_page_by_path('gov-transitions')); ?>" class="btn btn-ghost" style="margin-top: 24px;">
                Learn about our 6-step .gov transition process
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Services FAQ Section -->
<section class="section" style="border-top: 1px solid var(--border-color);">
    <div class="container">
        <div class="text-center reveal" style="max-width: 800px; margin: 0 auto 64px;">
            <span class="label">Common Questions</span>
            <h2>Questions About Our Services</h2>
        </div>
        <div class="faq-container reveal" style="max-width: 900px; margin: 0 auto;">
            <?php foreach ($services_faqs as $index => $faq) : ?>
                <div class="faq-item" data-faq="svc-<?php echo $index; ?>">
                    <button class="faq-question" aria-expanded="false" aria-controls="svc-faq-answer-<?php echo $index; ?>">
                        <span><?php echo esc_html($faq['question']); ?></span>
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                    <div class="faq-answer" id="svc-faq-answer-<?php echo $index; ?>" role="region">
                        <p><?php echo esc_html($faq['answer']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section section">
    <div class="container">
        <div class="text-center reveal" style="max-width: 700px; margin: 0 auto;">
            <span class="label">Get Started</span>
            <h2>Not Sure Which System You Need?</h2>
            <p>In 45 minutes, we'll map your workflows and identify exactly where automation will have the biggest impact. No cost, no obligation.</p>
            <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn btn-primary magnetic-btn" style="margin-top: 32px;">
                <span>Request Your Free Assessment</span>
            </a>
        </div>
    </div>
</section>

<style>
    .service-module {
        background: var(--bg-card);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 64px;
        margin-bottom: 48px;
        position: relative;
    }

    .service-module::before {
        content: '';
        position: absolute;
        top: 0;
        left: 64px;
        right: 64px;
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--accent-orange), transparent);
    }

    .service-module-header {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 24px;
    }

    .service-icon {
        width: 56px;
        height: 56px;
        background: var(--bg-tertiary);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--accent-orange);
    }

    .service-module h2 {
        margin-bottom: 12px;
    }

    .service-tagline {
        font-size: 1.25rem;
        color: var(--text-secondary);
        margin-bottom: 48px;
    }

    .service-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 48px;
        margin-bottom: 48px;
        padding-bottom: 48px;
        border-bottom: 1px solid var(--border-color);
    }

    .service-problem h3,
    .service-solution h3 {
        font-family: var(--font-mono);
        font-size: 0.875rem;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        margin-bottom: 16px;
    }

    .service-problem h3 {
        color: var(--text-muted);
    }

    .service-solution h3 {
        color: var(--accent-blue);
    }

    .capabilities-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        margin-bottom: 48px;
    }

    .capability-item {
        background: var(--bg-tertiary);
        border-radius: 8px;
        padding: 24px;
    }

    .capability-item h4 {
        font-family: var(--font-mono);
        font-size: 0.875rem;
        color: var(--text-primary);
        margin-bottom: 8px;
    }

    .capability-item p {
        font-size: 0.875rem;
        color: var(--text-muted);
        margin: 0;
        line-height: 1.5;
    }

    .service-target {
        padding: 24px;
        background: rgba(0, 112, 255, 0.05);
        border: 1px solid rgba(0, 112, 255, 0.2);
        border-radius: 8px;
    }

    .service-target p {
        margin: 0;
        color: var(--text-secondary);
    }

    @media (max-width: 1200px) {
        .capabilities-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .service-module {
            padding: 32px;
        }

        .service-module::before {
            left: 32px;
            right: 32px;
        }

        .service-grid {
            grid-template-columns: 1fr;
            gap: 32px;
        }

        .capabilities-grid {
            grid-template-columns: 1fr;
        }
    }

    /* FAQ Accordion */
    .faq-item {
        border-bottom: 1px solid var(--border-color);
    }

    .faq-item:first-child {
        border-top: 1px solid var(--border-color);
    }

    .faq-question {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 24px;
        padding: 28px 0;
        background: none;
        border: none;
        cursor: pointer;
        text-align: left;
        font-family: var(--font-mono);
        font-size: 1.0625rem;
        font-weight: 600;
        color: var(--text-primary);
        letter-spacing: -0.01em;
        line-height: 1.4;
        transition: color var(--transition-fast);
    }

    .faq-question:hover {
        color: var(--accent-orange);
    }

    .faq-icon {
        flex-shrink: 0;
        color: var(--text-muted);
        transition: transform var(--transition-base), color var(--transition-base);
    }

    .faq-item.open .faq-icon {
        transform: rotate(45deg);
        color: var(--accent-orange);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .faq-item.open .faq-answer {
        max-height: 500px;
    }

    .faq-answer p {
        padding-bottom: 28px;
        color: var(--text-secondary);
        font-size: 1rem;
        line-height: 1.8;
        margin: 0;
        max-width: 800px;
    }

    @media (max-width: 768px) {
        .faq-question {
            font-size: 0.9375rem;
            padding: 24px 0;
        }

        .faq-answer p {
            font-size: 0.9375rem;
            padding-bottom: 24px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(function(item) {
        var button = item.querySelector('.faq-question');
        button.addEventListener('click', function() {
            var isOpen = item.classList.contains('open');
            faqItems.forEach(function(otherItem) {
                otherItem.classList.remove('open');
                otherItem.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
            });
            if (!isOpen) {
                item.classList.add('open');
                button.setAttribute('aria-expanded', 'true');
            }
        });
    });
});
</script>

<?php get_footer(); ?>
