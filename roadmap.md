# GroundWorks Development — AEO & Visibility Roadmap

## Completed

- [x] FAQ page (`page-faq.php`) with FAQPage JSON-LD schema (10 Q&As)
- [x] Homepage FAQ section with FAQPage schema (6 AEO-targeted Q&As)
- [x] Homepage Organization schema (`knowsAbout`, `serviceType`, `contactPoint`)
- [x] Header WebSite schema (site-wide, every page)
- [x] Services page Service schema (x3 via ItemList) + FAQ section (5 Q&As)
- [x] Gov Transitions page HowTo schema (6-step process) + GovernmentService schema + FAQ section (5 Q&As)
- [x] About page Person schema (Chris Brody)
- [x] Case study Article schema with Review markup (`single-case_study.php`)
- [x] Blog post template with Article schema, author box, reading time (`single.php`)
- [x] Content freshness: `dateModified` added to all JSON-LD schemas across every page
- [x] Content freshness: visible "Last updated" date on Services, FAQ, and Gov Transitions pages

## Blog Status

5 agency-focused pillar posts are **written and ready** in `blog-content/`:
1. "Why Design Agencies Should Stop Hiring Full-Time Developers"
2. "The White-Label Development Playbook"
3. "The Real Cost of Turning Down Projects"
4. "Design-to-Deployment Handoff Guide"
5. "How to Price Full-Service Projects"

**To publish:** Copy each into WordPress (Posts > Add New), set a category + tags, add a featured image, and publish. The `single.php` template will auto-apply Article schema.

## Priority 1 — Blog Content (Ongoing)

The single highest-leverage thing for long-term AEO visibility. AI engines build topical authority by crawling multiple pages on the same subject. Target: 3 posts/week.

See "Blog Content Calendar" section below for the next 25 articles.

## Priority 2 — Google Business Profile

- [ ] Create GBP listing at google.com/business
- [ ] Match NAP (name, address, phone) exactly to website
- [ ] Add LocalBusiness schema to site once GBP is live (code not yet added — add when GBP is created)
- [ ] Request reviews from past clients (feeds entity trust signals)

## Priority 3 — `sameAs` Links (CODE READY — just uncomment URLs)

Code is prepped in `front-page.php` Organization schema. As you create profiles, uncomment the relevant line and paste your URL:
- [ ] Create/claim LinkedIn company page → uncomment in schema
- [ ] Add Upwork profile URL → uncomment in schema
- [ ] Add GitHub profile URL → uncomment in schema
- [ ] Add Clutch profile URL → uncomment in schema

## Priority 4 — Content Freshness Signals (DONE)

- [x] Add visible "Last updated: [date]" to Services, FAQ, and Gov Transitions pages
- [x] Add `dateModified` to all existing JSON-LD schemas (Organization, FAQPage x4, Service ItemList, GovernmentService, HowTo, Person)
- [ ] Set quarterly calendar reminder to review and update FAQ answers (manual — set a reminder for May 2026)

## Priority 5 — Technical SEO (MOSTLY DONE)

- [x] Open Graph meta tags (og:title, og:description, og:image, og:url, og:type) — dynamic per page (`functions.php`)
- [x] Twitter Card meta tags (summary_large_image) — dynamic per page
- [x] Canonical URLs on all pages — dynamic via `functions.php`
- [x] Dynamic meta descriptions per page (replaces hardcoded header.php version)
- [x] XML sitemap — WordPress 5.5+ generates `/wp-sitemap.xml` automatically (case_study CPT included since `public => true`)
- [ ] Submit sitemap to Google Search Console (manual — go to search.google.com/search-console)
- [ ] Verify Core Web Vitals scores (manual — run pagespeed.web.dev on each page)

## Priority 6 — Backlinks & Citations

- [ ] Get listed on local business directories
- [ ] Contribute guest posts to municipal/govtech publications
- [ ] Answer questions on Quora/Reddit related to business automation and .gov transitions
- [ ] Reach out to govtech bloggers about the .gov transition service

---

## Blog Content Calendar — Next 25 Articles

Target: 3 posts/week (~8 weeks of content)

### Business Automation (Core Topic Cluster)
1. "How to Automate Invoicing for a Service Business"
2. "5 Manual Processes That Cost Small Businesses the Most Time"
3. "What Is Business Process Automation? A Plain-English Guide"
4. "Zapier vs Custom Automation: When to Use Which"
5. "How to Know If Your Business Is Ready for Automation"
6. "The Real Cost of Manual Data Entry (And How to Eliminate It)"
7. "Automating Client Follow-Ups Without Sounding Like a Robot"
8. "How Automation Pays for Itself: Calculating ROI Before You Build"

### Revenue Operations (Service Cluster)
9. "What Is Revenue Operations? Why Service Businesses Need It"
10. "How to Stop Losing Leads Between Your Website and CRM"
11. "Automated Quoting: How to Send Proposals in Minutes Instead of Hours"
12. "The Hidden Revenue Leak: Unbilled Hours and How to Fix Them"
13. "How a Small Interior Design Firm Recovered $4,200/Month with Automation"

### Operations & Workflow (Service Cluster)
14. "How to Remove Yourself as the Bottleneck in Your Business"
15. "Automated Status Updates: Stop Writing 'Just Checking In' Emails"
16. "Time Tracking to Invoicing: How to Close the Loop Automatically"
17. "Running a 20-Person Workload with a 5-Person Team"

### Government & .gov (Service Cluster)
18. "How Small Towns Get .gov Domains: A Step-by-Step Guide"
19. "Is a .gov Domain Free? What Municipalities Need to Know"
20. "Why Your Town Needs a .gov Website (And What It Signals to Residents)"
21. "Automating Public Records Requests for Small Municipalities"
22. "FOIA Compliance for Small Towns: A Practical Guide"

### Industry-Specific (Expands Reach)
23. "Automation for Healthcare Practices: Intake, Triage, and Scheduling"
24. "How Property Managers Can Automate Tenant Communications"
25. "Automation for Trades and Field Service Businesses: Where to Start"

### Writing Guidelines
- Each post should answer ONE specific question thoroughly (800-1500 words)
- Open with a direct answer in the first paragraph (AI engines extract this)
- Include specific numbers, timeframes, or dollar amounts where possible
- End with a CTA linking to the Efficiency Assessment
- Add Article schema with `datePublished` and `dateModified` to each post
