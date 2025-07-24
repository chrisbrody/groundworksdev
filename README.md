# GroundWorks Dev WordPress Theme

A custom WordPress theme for small business automation and monthly website services.

## Features

- **Responsive Design**: Mobile-first approach with clean, professional styling
- **ACF Integration**: Fully customizable content via Advanced Custom Fields
- **Custom Post Types**: Case studies with detailed project information
- **Contact Form**: Built-in contact form with email processing
- **SEO Optimized**: Semantic HTML structure and proper heading hierarchy
- **Performance Focused**: Minimal dependencies and optimized code

## Installation

1. Upload theme files to `/wp-content/themes/groundworks-dev/`
2. Install Advanced Custom Fields Pro plugin
3. Activate the theme in WordPress admin
4. Set up ACF field groups (see ACF Setup Guide below)
5. Create required pages and set front page
6. Configure navigation menu

## Required Pages

- **Home** (set as front page)
- **About** 
- **Services**
- **Contact**

## Theme Structure

```
groundworks-dev/
├── style.css
├── functions.php
├── index.php
├── header.php
├── footer.php
├── front-page.php
├── page-about.php
├── page-services.php
├── page-contact.php
├── single-case_study.php
├── archive-case_study.php
├── js/main.js
├── screenshot.png
└── README.md
```

## ACF Field Setup Guide

### Homepage Fields (front-page.php)
Field Group: "Homepage Content"  
Location: Page Template = Front Page

```
Hero Section:
- hero_headline (Text)
- hero_subheadline (Textarea)

Services Section:
- services_section_title (Text)
- service1_title (Text) 
- service1_description (Textarea)
- service2_title (Text)
- service2_description (Textarea)

Benefits Section:
- benefits_section_title (Text)
- automation_benefits (Repeater)
  └── benefit_text (Text)
- benefits_tagline (Text)

How It Works Section:
- how_it_works_title (Text)
- how_it_works_steps (Repeater)
  └── step_text (Text)
- how_it_works_tagline (Text)

Final CTA:
- final_cta_title (Text)
- final_cta_text (Textarea)
```

### About Page Fields (page-about.php)
Field Group: "About Page Content"  
Location: Page Template = About

```
Mission Section:
- mission_title (Text)
- mission_statement (Textarea)

Story Section:
- story_title (Text)
- my_story_text (Wysiwyg Editor)

Why Solo Section:
- why_solo_title (Text)
- why_solo_benefits (Repeater)
  └── benefit (Text)
- why_solo_tagline (Text)

Values Section (Optional):
- values_section_title (Text)
- values_content (Wysiwyg Editor)

CTA Section:
- about_cta_title (Text)
- about_cta_text (Textarea)
```

### Services Page Fields (page-services.php)
Field Group: "Services Page Content"  
Location: Page Template = Services

```
Service 1 - Automation:
- service1_headline (Text)
- service1_problem (Textarea)
- service1_solution (Textarea)
- automation_examples (Repeater)
  └── example_title (Text)
  └── example_description (Textarea)

Service 2 - Websites:
- service2_headline (Text)
- service2_problem (Textarea)
- service2_solution (Textarea)
- website_features (Repeater)
  └── feature_text (Text)
- website_pricing_note (Textarea)

Bottom CTA:
- services_bottom_cta_title (Text)
- services_bottom_cta_text (Textarea)
```

### Contact Page Fields (page-contact.php)
Field Group: "Contact Page Content"  
Location: Page Template = Contact

```
Header Section:
- contact_headline (Text)
- contact_intro_text (Textarea)

Next Steps:
- next_steps_note (Textarea)
```

### Case Study Fields (single-case_study.php)
Field Group: "Case Study Details"  
Location: Post Type = Case Study

```
Basic Info:
- client_type (Text)
- client_location (Text)

Case Study Content:
- challenge (Wysiwyg Editor)
- solution (Wysiwyg Editor)
- solution_features (Repeater)
  └── feature (Text)
- result (Wysiwyg Editor)
- result_metrics (Repeater)
  └── metric_number (Text)
  └── metric_label (Text)

Client Info (Optional):
- client_quote (Textarea)
- client_name (Text)
- client_title (Text)

Technical Details (Optional):
- technologies_used (Repeater)
  └── technology (Text)
```

### Site Options (Options Page)
Field Group: "Site Options"  
Location: Options Page = Site Options

```
Contact Information:
- contact_email (Email)
- contact_phone (Text)
- business_hours (Text)

Case Studies:
- case_studies_intro (Textarea)
```

## Setup Instructions

1. **Install Required Plugins:**
   - Advanced Custom Fields Pro
   - Contact Form 7 (optional backup)

2. **Create Pages:**
   - Home (set as front page)
   - About
   - Services  
   - Contact
   - Case Studies (optional - archive is auto-created)

3. **Set Up Navigation:**
   - Go to Appearance > Menus
   - Create main menu with: Home, About, Services, Case Studies, Contact
   - Assign to "Main Navigation" location

4. **Configure ACF:**
   - Import field groups or create manually using the guide above
   - Set proper location rules for each field group

5. **Add Content:**
   - Fill in ACF fields for each page
   - Create case study posts with ACF data
   - Upload logo via Customizer

6. **Test Contact Form:**
   - Ensure WordPress can send emails
   - Test form submission and email delivery

## Customization

All content is editable via ACF fields. The theme uses a green (#2c5530) and orange (#ff6b35) color scheme that can be customized in the style.css file.

## Support

This theme is designed for SiteGround hosting with modern WordPress. For customization needs, contact GroundWorks Development.