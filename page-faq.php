<?php get_header(); ?>

<?php
// FAQ Data - single source of truth for both rendering and JSON-LD schema
$faqs = array(
    array(
        'question' => 'What is an Operations Efficiency Assessment?',
        'answer'   => 'It\'s a free 45-minute session where we map your current workflows and identify the top 3 time drains in your operation. You\'ll leave with a prioritized action plan that includes realistic ROI estimates on automation—whether you work with us or not. No cost, no obligation, no pitch unless you ask for one.'
    ),
    array(
        'question' => 'How is GroundWorks different from Zapier or other no-code tools?',
        'answer'   => 'Low-code tools are fine for simple triggers—if this, then that. But real operational infrastructure requires systems thinking: understanding how data flows across your entire business, where exceptions occur, and how to build logic that handles the 20% of cases that cause 80% of the headaches. We work with APIs, webhooks, and custom development, so your systems aren\'t limited by what a template allows. When your business logic changes, your automation changes with it—without duct tape and workarounds.'
    ),
    array(
        'question' => 'What types of businesses do you work with?',
        'answer'   => 'We work primarily with service-based businesses and small municipalities. Our clients typically have 2-50 employees and are experiencing growing pains—where the owner is still the bottleneck for approvals, assignments, and status checks. Common industries include professional services, healthcare practices, property management, interior design, and local government.'
    ),
    array(
        'question' => 'What does the engagement process look like?',
        'answer'   => 'It starts with a discovery call where we discuss your needs and goals. From there, we create a custom proposal tailored to your specific situation. Once approved, we build and deploy your systems in focused sprints, testing everything against your real workflows before going live. You\'re involved at every decision point, but we handle the heavy lifting.'
    ),
    array(
        'question' => 'How much does automation cost?',
        'answer'   => 'Every system is scoped individually because every business runs differently. Our projects typically range from targeted single-workflow automations to full operational infrastructure builds. The better question is: what is the cost of not automating? Most of our clients are losing $50,000-$200,000 per year in manual process overhead before they engage us. We\'ll give you specific numbers during your free Efficiency Assessment.'
    ),
    array(
        'question' => 'What is the Revenue Operations Engine?',
        'answer'   => 'It\'s a system that handles your entire revenue cycle—from first touch to cash collected—with zero manual handoffs. Lead capture syncs to your CRM. Quotes generate automatically from form data. Follow-up sequences fire based on pipeline stage. Invoices go out and payments get tracked without you touching a spreadsheet. It\'s built for service businesses that are losing deals to slow follow-up or bleeding margin to manual billing.'
    ),
    array(
        'question' => 'What is the Operations Control Center?',
        'answer'   => 'It\'s the system that lets you run a 20-person operation with a 5-person team. Jobs route automatically based on your rules. Status updates flow to clients without "just checking in" emails. Time tracking syncs to billing. You only see what needs human attention—everything else just runs. It\'s built for businesses where the owner is still the bottleneck for approvals, assignments, and status checks.'
    ),
    array(
        'question' => 'Can you help our municipality transition to a .gov domain?',
        'answer'   => 'Yes. Our Civic Transparency System handles the complete .gov transition process for small municipalities—from domain registration through to a fully operational government website. This includes automated public records management, citizen self-service portals for permits and payments, and compliance documentation that generates itself. We designed this specifically for rural towns and small municipalities that need modern government operations without the budget for a full IT department.'
    ),
    array(
        'question' => 'Do you integrate with tools we already use?',
        'answer'   => 'Yes. We build around your existing stack, not against it. Whether you\'re using QuickBooks, HubSpot, Google Workspace, Slack, or industry-specific tools, we connect everything through APIs and webhooks so data flows automatically between systems. No rip-and-replace—we make what you have work better together.'
    ),
    array(
        'question' => 'Do you provide ongoing support after launch?',
        'answer'   => 'Every system we build is designed to run independently, but businesses evolve. We offer ongoing support and optimization for clients who want it—monitoring performance, adjusting logic as your processes change, and extending systems as you grow. That said, you\'re never locked in. We build systems you own, with documentation, so you\'re never dependent on us to keep things running.'
    ),
);
?>

<!-- JSON-LD FAQPage Schema -->
<script type="application/ld+json">
<?php
$schema = array(
    '@context'      => 'https://schema.org',
    '@type'         => 'FAQPage',
    'dateModified'  => get_the_modified_date('c'),
    'mainEntity'    => array()
);

foreach ($faqs as $faq) {
    $schema['mainEntity'][] = array(
        '@type' => 'Question',
        'name'  => $faq['question'],
        'acceptedAnswer' => array(
            '@type' => 'Answer',
            'text'  => $faq['answer']
        )
    );
}

echo wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
</script>

<!-- Hero -->
<section class="hero" style="min-height: auto; padding: 160px 0 80px;">
    <div class="container">
        <div class="hero-content reveal" style="max-width: 800px;">
            <span class="label">Common Questions</span>
            <h1>Frequently Asked Questions</h1>
            <p class="hero-copy">Straight answers about how we work, what we build, and whether we're the right fit for your business.</p>
            <p class="page-updated">Last updated: <?php echo get_the_modified_date('F j, Y'); ?></p>
        </div>
    </div>
</section>

<!-- FAQ Accordion -->
<section class="section" style="padding-top: 0;">
    <div class="container">
        <div class="faq-container reveal">
            <?php foreach ($faqs as $index => $faq) : ?>
                <div class="faq-item" data-faq="<?php echo $index; ?>">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-<?php echo $index; ?>">
                        <span><?php echo esc_html($faq['question']); ?></span>
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-<?php echo $index; ?>" role="region">
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
            <span class="label">Still Have Questions?</span>
            <h2>Let's Talk About Your Business</h2>
            <p>Every business is different. If you didn't find what you were looking for, reach out and we'll give you a straight answer—no fluff, no sales pitch.</p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-top: 32px;">
                <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="magnetic-btn">
                    <span class="btn btn-primary">Get In Touch</span>
                </a>
                <a href="<?php echo home_url('/#diagnostic-form'); ?>" class="btn btn-secondary">Request Free Assessment</a>
            </div>
        </div>
    </div>
</section>

<style>
    /* FAQ Accordion */
    .faq-container {
        max-width: 900px;
        margin: 0 auto;
    }

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
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1),
                    padding 0.4s cubic-bezier(0.4, 0, 0.2, 1);
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
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(function(item) {
        const button = item.querySelector('.faq-question');

        button.addEventListener('click', function() {
            const isOpen = item.classList.contains('open');

            // Close all items
            faqItems.forEach(function(otherItem) {
                otherItem.classList.remove('open');
                otherItem.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
            });

            // Toggle clicked item
            if (!isOpen) {
                item.classList.add('open');
                button.setAttribute('aria-expanded', 'true');
            }
        });
    });
});
</script>

<?php get_footer(); ?>
